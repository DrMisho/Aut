<template>
<v-dialog v-model="window_dialog" max-width="1000" persistent white class="d-flex flex-row  justify-center mb-8 white" scrollable>
    <v-card>

        <v-toolbar flat dark color="primary">
            <v-btn icon dark @click="window_dialog = false">
                <v-icon>mdi-close</v-icon>
            </v-btn>
            <v-toolbar-title>{{type_code}}</v-toolbar-title>
            <v-spacer></v-spacer>

        </v-toolbar>
        <v-card-text>

            <v-flex shrink>
                <v-toolbar flat color="white">
                    <v-toolbar-title>{{title}}</v-toolbar-title>
                    <v-divider class="mx-2" inset vertical></v-divider>
                    <v-spacer></v-spacer>
                    <v-btn color="primary" dark class="mb-2" @click="save">{{translate('add')}}</v-btn>
                </v-toolbar>
                <v-data-table :headers="headers" :items="desserts" class="elevation-1">

                    <template v-slot:items="props">
                        <td v-for="(col , key) in headers" :key="key" v-if="key != (headers.length-1)" :class="props.item.is_deleted?'lighten-1 red':''">

                            <v-text-field v-model="props.item[col.value]" :label="translate('default_value')" single-line>
                            </v-text-field>

                        </td>

                        <td class="justify-center layout px-0 align-center" v-else>
                          <v-tooltip bottom v-if="!props.item.is_deleted">
                            <template v-slot:activator="{ on }">
                                    <v-icon  v-on="on" @click="deleteItem(props.item)" color="red">
                                delete
                            </v-icon>
                            </template>
                            <span>{{translate('delete')}}</span>
                        </v-tooltip>
                         <v-tooltip bottom  v-else>
                            <template v-slot:activator="{ on }">
                                   <v-icon v-on="on" @click="recovery(props.item)" color="lighten-1 red">
                                arrow_back
                            </v-icon>
                            </template>
                            <span>{{translate('recovery')}}</span>
                        </v-tooltip>
                        </td>
                    </template>

                </v-data-table>
            </v-flex>
        </v-card-text>
        <v-divider></v-divider>

        <v-card-actions>
            <v-spacer></v-spacer>
            <v-flex mdd12 sm12 xm12 xl12 class="">
                <v-spacer></v-spacer>

                <v-btn dark color="error" @click="window_dialog = false">
                    {{translate('disagree')}}
                </v-btn>

                <v-btn v-if="withSave" dark color="success" @click="storeOption()">
                    {{translate('save')}}
                </v-btn>

            </v-flex>
        </v-card-actions>
    </v-card>
</v-dialog>
</template>

<script>
class Locale {
    constructor() {

    }
    set(name, value) {
        this[name] = value;
    }

}
class TempLocale {
    constructor() {
        //ar//en ....

    }
    set(locale) {
        this[locale] = new Locale();
    }
    setField(values) {
        let itmes = Object.assign({}, values);
        for (let index in itmes) {
            this[index] = itmes[index];
        }
    }
    setWithVal(name, value) {
        this[name] = value;
    }
    getObj() {
        let fields = Object.assign({}, this);
        return fields;
    }

}
export default {
    name: "sky-select",
    props: {
        name_field_trans: {
            required: true
        },
        table_title: {
            required: false,
            default: 'title'
        },
        table_type_code: {
            required: false,
            default: false
        },
        option: {
            required: false,
            default: []
        },
        value: {
            type: Array
        },
    },
    data: () => ({
        withSave: false,
        feature_id: '',
        group_id: null,
        window_dialog: false,
        dialog: false,
        langs_info: automata.language.config.supportedLocales,

        headers: [{
            text: 'Action',
            value: 'name',
            sortable: false
        }],
        locales: [],
        desserts: [],
        result: [],
        editedIndex: -1,
        editedItem: {},
        defaultItem: {}
    }),

    computed: {
        //  desserts(){
        //   if(this.option.length > 0){
        //     return this.option
        //   }
        //   else
        //     return [];
        // },
        title() {
            if (this.table_title) {
                return this.table_title
            } else
                return '';
        },
        type_code() {
            if (this.table_type_code) {
                return this.table_type_code
            } else
                return '';
        },
        formTitle() {
            return this.editedIndex === -1 ? this.translate('new_item') : this.translate('edit_item')
        }
    },

    watch: {

        dialog(val) {
            val || this.close()
        },
        desserts: {
            immediate: true,
            handler(newValue) {
                console.log('change');
                // this.result = this.desserts;
                this.result = [];
                //  console.log('start');

                for (let i in this.desserts) {
                    if (!this.desserts[i].is_deleted) {
                        console.log('chek');
                        this.result.push(this.desserts[i]);

                    }
                }
            }
        },
        result() {
            //     console.log(this.result);
            // this.result = this.getDataForLang();

            this.$emit('input', this.result);
        }

    },

    created() {
        // this.initialize()

        let array = [];

        for (let index in automata.language.config.supportedLocales)

            array.push(index);

        this.locales = array;

        this.headers = [];
        // text: 'Arabic',
        //   align: 'left',
        //   sortable: false,
        let edited_item_object = new TempLocale();
        let default_item_object = new TempLocale();
        //   value: 'ar'
        for (let locale in this.langs_info) {

            //initial header
            let header_object = new TempLocale();
            header_object.setWithVal('text', this.langs_info[locale].native);
            header_object.setWithVal('align', this.langs_info[locale].dir);
            header_object.setWithVal('value', locale);
            header_object.setWithVal('sortable', false);
            this.headers.push(header_object);
            //initiail edititem and defaultItem
            edited_item_object.setWithVal(locale, '');
            default_item_object.setWithVal(locale, '');

        }
        //appand action into header
        let action = {
            text: this.translate('action'),
            value: 'name',
            sortable: false
        };
        this.headers.push(action);

        //apaand id for edititem and defaultitem
        // edited_item_object.setWithVal('id','');
        // default_item_object.setWithVal('id','');

        this.editedItem = edited_item_object;
        this.defaultItem = default_item_object;

        // editedItem
        // defaultItem

    },

    methods: {
        storeOption() {
            let data_option = this.getDataForLang(this.result, null);
            this.$http.put('api/attribute/store-option/' + this.feature_id, {
                option: data_option
            }).then((response) => {
                this.desserts = [];
                this.hide();

            });
        },

        translate(key) {
            return this.$t(`attributes.${key}`)
        },

        show() {
            this.window_dialog = true;
        },
        hide() {
            this.window_dialog = false;
        },
        initializeAndShow(option, feature_id, withSave) {
            this.withSave = withSave;
            this.feature_id = feature_id;
            this.desserts = option;
            this.show();

        },
        initializeAndShowTypeAtuocomplate(option, group_id, editing) {
            // console.log('option',option,'feature_id')
            this.desserts = [];
            for (let i in option) {

                this.desserts.push(option[i]);
            }

            this.group_id = group_id;
            this.show();

        },
        // getDataForLang(){

        // 	let elements = [] ;

        // 	for(let item in this.desserts ){

        // 		let element = new TempLocale();

        //  	for(let col in this.headers){

        //  		let locale = this.headers[col].value;
        //  		element.set(locale);
        //             // element[locale].set('value', this.desserts[item][locale]);
        //             element[locale].set(this.name_field_trans, this.desserts[item][locale]);
        //  	}
        //     element.setWithVal('id', this.desserts[item].id)
        //  	element.setWithVal('group_id', this.group_id)
        //  	elements.push(element);

        // 	}
        //   // console.log('call get data');
        // 	return elements;
        // },
        getDataForLang(option, group_id) {

            let elements = [];

            for (let item in option) {

                let element = new TempLocale();

                for (let col in this.headers) {

                    let locale = this.headers[col].value;
                    element.set(locale);
                    // element[locale].set('value', this.desserts[item][locale]);
                    element[locale].set(this.name_field_trans, option[item][locale]);
                }
                element.setWithVal('id', option[item].id)
                element.setWithVal('group_id', group_id)
                elements.push(element);

            }
            // console.log('call get data');
            return elements;
        },
        editItem(item) {
            this.editedIndex = this.desserts.indexOf(item)
            this.editedItem = Object.assign({}, item)
            this.dialog = true
        },

        deleteItem(item) {
                const index = this.desserts.indexOf(item)

            if (this.desserts[index].id != null) {
                this.desserts[index].is_deleted = true;
                let temp = this.desserts[index];
                this.desserts.splice(index, 1, temp);
            } else {
                this.desserts.splice(index, 1)

            }

        },
        recovery(item) {
            const index = this.desserts.indexOf(item)
            this.desserts[index].is_deleted = false;
            let temp = this.desserts[index];
            this.desserts.splice(index, 1, temp);

        },
        saveItem() {
            this.snack = true
            this.snackColor = 'success'
            this.snackText = 'Data saved'
        },
        cancelItem() {
            this.snack = true
            this.snackColor = 'error'
            this.snackText = 'Canceled'
        },
        openItem() {
            this.snack = true
            this.snackColor = 'info'
            this.snackText = 'Dialog opened'
        },
        closeItem() {
            console.log('Dialog closed')
        },

        close() {
            this.dialog = false
            setTimeout(() => {
                this.editedItem = Object.assign({}, this.defaultItem)
                this.editedIndex = -1
            }, 300)
        },

        save() {
            if (this.editedIndex > -1) {
                // console.log('edit item is true');

                Object.assign(this.desserts[this.editedIndex], this.editedItem)
            } else {
                // console.log('edit item is -1');
                this.desserts.unshift(this.editedItem)
            }
            this.close()
        }
    }
}
</script>

<style scoped>

</style>

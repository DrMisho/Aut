<template>
<v-layout class="white">
    <!-- mdoel dialog  -->
    <v-dialog v-model="setting.dialog" max-width="1000" white class="d-flex flex-row  justify-center mb-8 white" scrollable>

        <v-card>

            <v-toolbar flat dark color="primary">

                <v-toolbar-title v-if="!setting.editing">{{translate('add_feature')}}</v-toolbar-title>
                <v-toolbar-title v-else>{{translate('mod_feature')}}</v-toolbar-title>
                <v-spacer></v-spacer>
                <v-btn icon dark @click="setting.dialog = false">
                    <v-icon>mdi-close</v-icon>
                </v-btn>
            </v-toolbar>
            <v-progress-linear v-if="setting.loadingGenerate" :indeterminate="setting.loadingGenerate"></v-progress-linear>

            <v-card-text>
                <v-form ref="form" v-model="valid" lazy-validation>
                    <v-layout class=" justify-center wrap row white ">
                        <!-- name feature -->
                        <v-flex md8 sm8 xm8 xl8>
                            <v-text-field md12 sm12 xm12 xl12 v-for="field , index in feature.translations" :key="index" v-model="field.name" :rules="[v => !!v || translate('required') ]" :label="translate('name')+'('+ field.native +')'" required :class="'force-'+field.dir"></v-text-field>
                        </v-flex>
                        <!-- chose type code -->
                        <v-flex md8 sm8 xl8 xm8>
                            <v-select @change="chageTypeCode();" item-value="id" v-model="type_code" outlined :items="global.element_types" item-text="text" :rules="[v => !!v ||  translate('required_item')]" :label="translate('type_code')" persistent-hint return-object single-line></v-select>
                        </v-flex>
                        <!-- if number -->
                        <v-flex md8 sm8 xl8 xm8 v-if="feature.type_code == 'number'">
                            <select-input
                                resource="units"
                                v-model="feature.unit_id"
                                :label="translate('unit')"
                            ></select-input>
                        </v-flex>
                        <!-- if autocomplate -->
                        <v-flex md8 sm8 xl8 xm8>
                            <v-layout class=" pa-2" wrap row v-if="feature.type_code == 'autocomplate'">
                                <v-flex md12 sm12 xl12 xm12>
                                    <v-select v-model="feature.filter_id" @change=" createGroupItem() " outlined :items="filter_items" item-text="name" item-value="id" :rules="[v => !!v ||  translate('required_item')]" :label="translate('filter_field')" persistent-hint return-object single-line></v-select>
                                </v-flex>
                                <v-data-table :headers="headers" :items="option_group">
                                    <template v-slot:d="props">
                                        <td>
                                            {{props.item.value}}
                                        </td>
                                        <td class="justify-center layout px-0">
                                            <sky-select :ref="'sky_list_auto'+props.item.id" v-model="option_autocomplate[props.item.id]" :name_field_trans="'value'" :table_title="props.item.value" :table_type_code="filter_id.name" :option="[]"></sky-select>
                                            <v-icon @click="ShowOption(props.item.id)">
                                                list_select
                                            </v-icon>
                                        </td>
                                    </template>
                                </v-data-table>
                            </v-layout>
                        </v-flex>
                        <!-- require yes or no  -->
                        <v-flex md8 sm8 xl8 xm8>
                            <v-switch v-model="feature.is_require" :label="translate('is_require')"></v-switch>
                        </v-flex>
                        <!-- hint  -->
                        <v-flex md8 sm8 xl8 xm8>
                            <v-text-field md12 sm12 xm12 xl12 v-for="field , index in feature.translations" :key="index" v-model="field.hint" @change="fillHint(field.hint,field.locale)" :label="translate('hint')+'('+ field.native +')'" required :class="'force-'+field.dir"></v-text-field>
                        </v-flex>
                        
                        <!-- has initial value -->
                        <v-flex md18 sm8 xl8 xm8 v-if="with_default_value">
                            <v-switch v-model="has_value" v-if="feature.type_code != 'select' &&  feature.type_code != 'list_select' && feature.type_code != 'autocomplate' " :label="translate('has_value')"></v-switch>
                        </v-flex>
                        <!-- it has intial value -->
                        <v-flex md8 sm8 xm8 xl8 v-if="with_default_value">
                            <v-layout wrap row class="justify-center" v-if="has_value != false && feature.type_code != 'select' && feature.type_code != 'list_select' &&feature.type_code != 'autocomplate' " white>
                                <feature :feature="feature" v-model="feature.value"></feature>
                            </v-layout>
                        </v-flex>
                    </v-layout>
                </v-form>

            </v-card-text>
            <v-divider />
            <v-card-actions>

                <v-spacer></v-spacer>
                <v-btn @click="initi() ;setting.dialog = false ">
                    {{translate('disagree')}}
                </v-btn>
                <v-btn v-if="!setting.editing" :loading="setting.loading" :disabled="!valid || setting.loadingGenerate" color="primary" @click="validate">
                    {{translate('save')}}
                </v-btn>
                <v-btn v-else :loading="setting.loading" :disabled="!valid || setting.loadingGenerate" color="primary" @click="validate">
                    {{translate('save')}}
                </v-btn>

            </v-card-actions>
        </v-card>
    </v-dialog>
</v-layout>
</template>

<script>
// Feature Type ...
import Feature from './Parts/Feature.vue'
//class...
import Locale from './../Class/Locale.js';
import Rules from './../Class/Rules';
import Temp from './../Class/Temp';
//config
import config from './../../config/attributes.js'
import SkySelect from "./SkySelect";
export default {
    name: 'add-feature',
    components: {
        SkySelect,
        Feature
    },
    data: function () {
        return {
            
              with_default_value:config.with_default_value  ,
            feature: {
                id: null,
                translations: this.initialVariable(),
                name: null,
                is_require: false,
                hint: '',
                value: '',
                value_trans: '',
                filter_id: '',
                type_code: '',
                unit_id: null,
            },
            global: {
                filter_id: '',
                element_types: [],
                msg: '',
            },
            setting: {
                dialog: false,
                langs_info: automata.language.config.supportedLocales,
                current_locale: automata.language.locale,
                loading: false,
                loadingGenerate: false,

            },
            option_group: [],
            option_trans: [],
            data_trans: '',
            select_val: '',
            select_values: [],
            colors: [],
            option_autocomplate: [],
            color: '',
            name_trans: [],
            name: [],
            value: [],
            uploader_image: 'attribute_images',
            uploader_file: 'attribute_files',
            files_image: [],
            files_file: [],
            startValue: '',
            endValue: '',
            option: [],
            filter_items: [],
            locales: [],
            show_dailog: false,
            show_dailog_end: false,
            has_value: false,
            editing: false,
            valid: true,
            rulesAttr: new Rules(),
            //variable watch
            type_code: '',
        }
    },
    watch: {
        type_code: function (new_value) {
            this.feature.type_code = new_value.id;
        },

    },

    computed: {
    },
    methods: {
        fillHint(value, locale) {
            console.log(value, locale);
            if (locale == this.setting.current_locale) {
                this.feature.hint = value;
            }
        },
        initialVariable() {
            let translations = new Temp();
            for (let locale in automata.language.config.supportedLocales) {
                translations.setWithVal(locale, {
                    name: '',
                    locale,
                    value_trans: '',
                    hint: '',
                    dir: automata.language.config.supportedLocales[locale].dir,
                    native: automata.language.config.supportedLocales[locale].native
                });
            }
            return translations;
        },
        // show option in state autocomplate
        ShowOption(group_id) {
            // this.option_autocomplate = Object.assign( {} , this.option);
            console.log('show option' + group_id);
            if (this.setting.editing) {
                this.$refs['sky_list_auto' + group_id].initializeAndShowTypeAtuocomplate(this.option[group_id], group_id, this.setting.editing);

            } else {

                this.$refs['sky_list_auto' + group_id].initializeAndShowTypeAtuocomplate(this.option[group_id], group_id, this.setting.editing);
            }

        },
        translate(key) {
            return this.$t(`attributes.${key}`)
        },
        editFeautres(feature) {
            // loading...
            this.setting.loadingGenerate = true;
            this.setting.loading = false;

            console.log('iteem :', feature);
            //Initialization...
            this.Initialization(feature);
            this.setting.editing = true;
            this.type_code = {
                id: feature.type_code,
                text: this.translate(feature.type_code)
            };
            //Reauest...
            if (feature.type_code == 'autocomplate') {
                this.getFieldFilter(feature.is_filter);
                this.$http.get('api/attribute/attributes-list-autocomplate/' + feature.id + '/' + feature.is_filter).then((response) => {
                    this.global.is_filter = feature.is_filter;
                    this.option = response.data;
                    this.option_autocomplate = response.data;
                    this.option_group = this.global.filter_id.feature_options;

                });

            }
            //Show...
            this.show();
            // loading...
            this.setting.loadingGenerate = false;
            this.setting.loading = false;
        },
        isJson(str) {
            try {
                JSON.parse(str);
            } catch (e) {
                return false;
            }
            return true;
        },
        Initialization(feature) {
            console.log('fea', feature);
            this.feature.type_code = feature.type_code;
            this.feature.id = feature.id;
            this.feature.is_require = feature.is_require;
            this.feature.value_trans = feature.value_trans;
            this.feature.name = feature.name;
            this.feature.unit_id = feature.unit_id;

                // console.log(feature.value);

            if (this.isJson(feature.value)) {
            } else {
                this.feature.value = feature.value;
                this.has_value = true;
            }
            this.feature.translations = new Temp();
            for (let locale in this.setting.langs_info) {
                this.feature.translations.set(locale);
                this.feature.translations[locale].set('name', feature[locale].name);
                this.feature.translations[locale].set('hint', feature[locale].hint);
                this.feature.translations[locale].set('value_trans', JSON.parse(feature[locale].value_trans));
                this.feature.translations[locale].set('dir', this.setting.langs_info[locale].dir);
                this.feature.translations[locale].set('native', this.setting.langs_info[locale].native);
                this.feature.translations[locale].set('locale', locale);
            }
            // console.log('fea ag', this.feature);

        },
        createGroupItem() {
            console.log('createFeature');
            let array = [];
            this.option = new Temp();

            array = this.global.filter_id.feature_options;

            let number_element = array.length;
            this.option_group = array;
            console.log('number_element is ', number_element);
            for (let i in array) {
                console.log('option_autocomplate is ', this.option);
                // console.log('option_autocomplate is ', this.option_autocomplate);
                this.option.setWithVal(array[i].id, []);
                this.option_autocomplate = Object.assign({}, this.option);

            }

        },
        createFeature() {

            this.setting.editing = false;
            this.initi();
            this.show();
        },
        storeOptionTypeAutocomplate() {
            let array_merge = [];
            for (let i in this.option_group) {

                let key = this.option_group[i].id;
                if (this.option_autocomplate[key].length > 0) {
                    let option = this.$refs['sky_list_auto' + key].getDataForLang(this.option_autocomplate[key], key);
                    console.log('option', option);

                    array_merge = array_merge.concat(option);
                }

                console.log('array_merge', array_merge)
            }
            this.option_trans = array_merge;
            console.log('option_trans', this.option_trans)

        },
        optionTrans() {
            //to store option for type select list_select , autocomplate
            console.log('option trans type code', this.feature.type_code);
            switch (this.feature.type_code) {
                case 'select':
                    //just turn to string
                    this.storeOptionTrans();

                    break;
                case 'list_select':
                    //just turn to string
                    this.storeOptionTrans();

                    break;
                case 'autocomplate':
                    //store option 
                    this.storeOptionTypeAutocomplate();

                    break;
                default:

            };
            return this.data_trans;
        },
        validate() {
            //check validate ....
            if (this.$refs.form.validate()) {
                // loading...
                this.setting.loading = true;
                this.setting.loadingGenerate = false;

                let data = new Temp();
                for (let property in this.feature) {
                    if (property == 'translations') {
                        for (let index in this.feature.translations) {
                            let locale = this.feature.translations[index].locale;
                            data.setWithVal(locale, this.feature.translations[index])
                        }
                    } else {
                        data.setWithVal(property, this.feature[property]);
                    }
                }

                this.$http.post('api/attribute/features', {
                        data
                    }).then((response) => {

                        this.$notification.success(response.data.msg);
                    })
                    .finally(() => {
                        this.setting.editing = false;
                        // loading...
                        this.setting.loading = false;
                        this.setting.loadingGenerate = false;
                        this.hide();
                        this.initi();
                        this.$emit('saved');
                    });
            }
        },
        initi() {
            this.feature = {
                id: null,
                translations: this.initialVariable(),
                name: null,
                is_require: false,
                hint: '',
                value: '',
                value_trans: '',
                filter_id: '',
                type_code: '',
            };
            this.type_code = '';
            this.has_value = false;

        },
        show() {
            this.setting.dialog = true;
        },
        hide() {

            this.setting.dialog = false;
        },
        getLocales() {
            let locale = [];
            for (let index in automata.language.config.supportedLocales)
                locale.push(index);
            this.locales = locale;

        },
        chageTypeCode() {
           this.feature.unit_id = null;
        },
        getElementTypes() {
            this.$http.get('api/attribute/element-type').then((response) => {
                let element_types = response.data;
                this.global.element_types = [];
                for (let type_index in element_types) {
                    this.global.element_types.push({
                        id: element_types[type_index],
                        text: this.translate(element_types[type_index])
                    });
                }
            });
        }

    },
    created() {
        this.getLocales();
        this.getElementTypes();
    },
    mounted() {

    }
}
</script>

<style scoped>
</style>

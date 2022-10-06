<template>
<v-flex>
    <v-toolbar flat dark color="primary">
        <v-btn icon dark @click="AddProductModel = false">
            <v-icon>mdi-close</v-icon>
        </v-btn>
        <v-toolbar-title v-if="!editing">{{translate('add_product')}}</v-toolbar-title>
        <v-toolbar-title v-else>{{translate('mod_product')}}</v-toolbar-title>
        <v-spacer></v-spacer>
    </v-toolbar>
    <v-flex>
        <v-form ref="form" v-model="valid" lazy-validation>
            <v-layout class=" justify-center wrap row white ">
                <v-flex md10 sm8 xl8 xm8>
                    <slot name="product_type">
                    </slot>
                </v-flex>
                
                <v-flex md10 sm8 xl8 xm8>
                    <v-layout wrap row class="justify-center" v-if="struct != '' " white>
                        <v-flex row v-for=" item , key in struct" :key="key" class=" md12 sm12  xm12 xl12 ">
                            <group :group="struct[key]" v-model="attributes" ></group>
                        </v-flex>
                    </v-layout>
                </v-flex>
            </v-layout>
        </v-form>
    </v-flex>
    <v-divider></v-divider>

</v-flex>
</template>

<script>
import Feature from './Parts/Feature.vue'
import Group from './Parts/Group.vue'
export default {
    name: 'l-add-product',
    data: function () {
        return {
            attributes: [],
            with_name: false,
            name_trans: [],
            name: [],
            locales: [],
            struct: '',
            prodcut_type: '',
            prodcut_type_id: '',
            productable_type: '',
            productable_id: '',
            AddProductModel: false,
            editing: false,
            valid: true,
            langs_info: automata.language.config.supportedLocales,
            // rulesAttr: new Rules(),
            test: {
                text: [v => !!v || this.translate('required')],
                text_editor: [v => !!v || this.translate('required')],
                number: [
                    v => !!v || 'number is required',
                    v => (v && !isNaN(v)) || this.translate('required_number'),
                ],
                select: [v => !!v || this.translate('required_item')],
                color: [v => !!v || this.translate('required')],
                date: [v => !!v || this.translate('required')],
                image: [v => !!v || this.translate('required')],
                file: [v => !!v || this.translate('required')],
                number_range: [v => !!v || this.translate('required')],
                data_range: [v => !!v || this.translate('required')],
                time: [v => !!v || this.translate('required')],
                email: [
                    v => !!v || this.translate('required'),
                    v => /.+@.+/.test(v) || this.translate('required_email')
                ],
                date_time: [v => !!v || this.translate('required')]
            },
        }
    },
    components: {
        Feature,
        Group
    },
    methods: {
        translate(key) {
            return this.$t(`attributes.${key}`)
        },
        editProduct(model_id,productable_type,productable_id,orderable_type,orderable_id,callback) {
            this.editing = true;
            let array = [];
            this.struct = array;
           
            this.$http.get('api/attribute/products/edit/'+model_id+'?productable_type='+productable_type+'&&productable_id='+productable_id+'&&orderable_type='+orderable_type+'&&orderable_id='+orderable_id).then((response) => {
                this.struct = response.data.struct;
                this.show();

            })
              .finally(() => {
                                          callback();

                    });
        },

        isTypeTranslate(position) {
            if (this.struct[position].type_code == 'text' ||
                this.struct[position].type_code == 'text_editor' ||
                this.struct[position].type_code == 'values'
            )
                return true
            else
                return false;
        },
        isTypeList(position) {
            if (this.struct[position].type_code == 'select' ||
                this.struct[position].type_code == 'autocomplate' ||
                this.struct[position].type_code == 'list_select'
            )
                return true
            else
                return false;
        },
        

        getData() {
            this.valid = true;
            let array = [];
            let validate = [];
            this.attributes = array;
            for (let i in this.struct) {
                console.log('maing group');
                let element = this.struct[i];
                this.groupInfo(element);
            }
            if(!this.valid){
                 this.$notification.show(this.translate('msg_require'));
            }
            if(this.attributes.length == 0){
                this.valid = false;
                 this.$notification.show(this.translate('msg_add_attribute'));

            }
            return {attributes :this.attributes , valid: this.valid};
        },
        groupInfo(element) {
            for (let i in element.tasks) {
                if (element.tasks[i].feature_id != null) {
                    let feature = element.tasks[i].feature;
                   if(feature.type_code == 'email'){
                       console.log('action store and the email',feature);
                   }
                    let value = feature.value;
                console.log( ' feature ',value);
                // console.log( ' feature ',feature.valid);
                    if(feature.valid){
                    this.attributes.push(value);
                    }
                    else{
                        feature.error = true;
                        this.valid = false;
                    }
                } else {
                console.log( ' sub group ');

                    this.groupInfo(element.tasks[i]);
                }
            }
        },
       
        validate() {

            if (this.$refs.form.validate()) {
                let data_struct_initial = this.storeStructValues();
                let data_struct = this.storeStructTrans(data_struct_initial);
                let id = this.storeIdInStateEditing();

                let product = new Temp();
                console.log('product initiail', product);
                if (this.with_name) {
                    product.setField(data_name_trans);
                }
                console.log('product after check name', product);

                product.setWithVal('product_type_id', this.prodcut_type.id);

                console.log('product after type product', product);

                if (this.editing)
                    product.setField('id', id);

                if (this.editing === false) {
                    this.loading = true;
                    this.loadingGenerate = true;
                    this.$http.post('api/attribute/products', {
                        data_struct,
                        product,
                    }).then((response) => {
                        this.editing = false;
                        this.hide();
                        this.$emit('saved');
                        this.loading = false;
                        this.loadingGenerate = false;
                        if (response.data.state == 'success') {

                            this.$notification.success(response.data.msg);
                        } else {
                            this.$notification.show(response.data.msg);
                        }

                    });

                }
                //state edit polling
                else {
                    this.loading = true;
                    this.loadingGenerate = true;
                    this.$http.put('api/attribute/products', {
                        data_struct,
                        product,
                        id
                    }).then((response) => {
                        this.editing = false;
                        this.loading = false;
                        this.loadingGenerate = false;
                        this.hide();
                        this.$emit('saved');
                        if (response.data.state == 'success') {

                            this.$notification.success(response.data.msg);
                        } else {
                            this.$notification.show(response.data.msg);
                        }
                    });
                }
            }
        },

        getAttribute(model_id, model_type,callback) {
            let array = [] ;
            this.struct = array;
            this.$http.get('api/attribute/products-attributes/' + model_id + '/?model_type=' + model_type).then((response) => {
                this.struct = response.data.struct;

            })
            .finally(() => {
                            callback();

                    });;
        },
        createProduct() {
            this.editing = false;
            this.keysForTime = [];
            this.name_trans = [];
            this.name = [];
            this.struct = '';
            this.select_val = '';
            this.color = '';
            this.prodcut_type = '';
            this.editing = false;
            this.valid = true;
            this.show();
        },
        show() {
            this.AddProductModel = true;
        },
        hide() {
            this.AddProductModel = false;
        },
        getLocales() {
            let array = [];
            for (let index in automata.language.config.supportedLocales)
                array.push(index);
            this.locales = array;
        },
    },
    created() {
       
        this.getLocales();

      
    }

}
</script>

<style scoped>
</style>

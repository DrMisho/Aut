<template>
<v-flex>
    <v-form v-model="valid">
        <v-select v-model="active_automobile_types" outlined :items="automobile_types" :loading="loading||loadingGenerate" item-text="name" item-value="id" :rules="[v => !!v ||  translate('required_item')]" :label="translate('automobile_types')" persistent-hint return-object single-line></v-select>
        <v-select v-model="active_brands" outlined :items="brands" item-text="name"  :loading="loadingGenerate"  item-value="id" :rules="[v => !!v ||  translate('required_item')]" :label="translate('brands')" persistent-hint return-object single-line></v-select>
        <v-select v-model="active_car_model" outlined :items="active_car_model_itmes"  :loading="loadingGenerate"  item-text="name" item-value="id" :rules="[v => !!v ||  translate('required_item')]" :label="translate('car_models')" persistent-hint return-object single-line></v-select>
    </v-form>
</v-flex>
</template>

<script>
export default {
    name: "product-type-select",
    props: ['value', 'car_model_id', 'loading'],
    data: function () {
        return {
            loadingGenerate:false,
            automobile_types: [],
            active_automobile_types: null,
            active_brands: null,
            brands: [],
            car_model: [],
            active_car_model_itmes: [],
            active_car_model: '',
            result: null,
            valid:false,
        }
    },
    watch: {
        car_model_id: function (value) {
            if (value) {
                let active_automobile_types_id = '';
                let active_brands_id = '';
                for (let i in this.car_model) {
                    if (value == this.car_model[i].id) {
                        this.active_car_model = this.car_model[i];
                        active_automobile_types_id = this.car_model[i].automobile_type_id;
                        active_brands_id = this.car_model[i].brand_id;
                    }
                }
                for (let i in this.automobile_types) {
                    if (this.automobile_types[i].id == active_automobile_types_id) {
                        this.active_automobile_types = this.automobile_types[i];
                        break;
                    }
                }
                for (let i in this.brands) {
                    if (this.brands[i].id == active_brands_id) {
                        this.active_brands = this.brands[i];
                        break;
                    }
                }
            }
        },
        active_automobile_types: function (newValue) {
            if (newValue) {
                this.active_car_model_itmes = [];
                let array = [];
                for (let index in this.car_model) {
                    if (this.active_brands) {
                        if (this.car_model[index].automobile_type_id == newValue.id && this.car_model[index].brand_id == this.active_brands.id) {
                            array.push(this.car_model[index]);
                        }
                    } else {

                        if (this.car_model[index].automobile_type_id == newValue.id) {
                            array.push(this.car_model[index]);
                        }

                    }
                }
                this.active_car_model_itmes = array;
                this.result = this.active_automobile_types;
            }
        },

        active_brands: function (newValue) {
            if (newValue) {
                this.active_car_model_itmes = [];
                let array = [];
                for (let index in this.car_model) {
                    if (this.active_automobile_types) {
                        if (this.car_model[index].brand_id == newValue.id && this.car_model[index].automobile_type_id == this.active_automobile_types.id) {
                            array.push(this.car_model[index]);
                        }
                    } else {
                        if (this.car_model[index].brand_id == newValue.id) {
                            array.push(this.car_model[index]);
                        }
                    }

                }
                this.active_car_model_itmes = array;
            }
        },
        result() {

            this.$emit('input', this.result);
        }

    },
    methods: {
        translate(key) {
            return this.$t(`cars.${key}`)
        },
        getCarModelId() {
            return this.active_car_model.id;
        },
        setData(car) {
            // this.active_automobile_types
        },
        initial() {
            this.active_automobile_types = null;
            this.active_brands = null;
            this.active_car_model = null;
            this.result=null;
        },
        validate(){
            return this.valid;
        }
    },
    created() {
        this.loadingGenerate = true;
        this.$http.get('api/car/car-types').then((response) => {
            this.automobile_types = response.data.automobile_types;
            this.brands = response.data.brands;
            this.car_model = response.data.car_model;
        })
        .finally(() => {
                       this.loadingGenerate = false;

                    });
    }
}
</script>

<style scoped>

</style>

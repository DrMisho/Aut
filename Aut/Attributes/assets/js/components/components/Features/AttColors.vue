<template>
<v-flex md12>
    <v-form v-model="feature.valid">

    <color-input :error="feature.error" v-model="colors_value" 
    :hint="feature.hint"
  color="grey"
    :rules="feature.is_require?colors_rule:[]" :label="feature.name" multiple />
    </v-form>
</v-flex>
</template>

<script>
import Temp from './../../Class/Temp.js'
export default {
    name: 'att-colors',
    props: ['feature', 'id'],
    data: function () {
        return {
            value: this.initialValue(),
            colors_rule: [v => !!v || this.translate('required')],
            colors_value: this.storeColors(),

        }
    },
    watch: {
        colors_value(value) {
            if(value ){
                this.feature.error = false;
            }
            this.storeValue();
        },
        value() {
            this.$emit('input', this.value);
        },

    },
    methods: {

        translate(key) {
            return this.$t(`attributes.${key}`)
        },
        storeColors() {
            let array = [];
            if(this.feature.value){
            
             if( this.feature.value.value){
                  array = this.feature.value.value;
                 return  array ;
             }
            return array;


            }
            return array;

        },
         initialValue() {
             let value = this.storeColors();
            let temp = new Temp();
            temp.setWithVal('value', value);
            temp.setWithVal('id', this.id);
            temp.setWithVal('type_code', 'colors');
            temp.setWithVal('feature_id', this.feature.id);
            this.value = temp;
            this.feature.value = temp;

            return temp;
        },
        storeValue() {
            let temp = new Temp();
            temp.setWithVal('value', this.colors_value);
            temp.setWithVal('id', this.id);
            temp.setWithVal('type_code', 'colors');
            temp.setWithVal('feature_id', this.feature.id);
            this.value = temp;
            this.feature.value = temp;
            return temp;
        },

    },
    created() {}

}
</script>

<style scoped>

</style>

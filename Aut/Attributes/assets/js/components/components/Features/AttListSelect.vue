<template>
<v-flex md12>
    <v-form v-model="feature.valid">

        <v-select 
        :error="feature.error"
        v-model=" list_select_value"
         @change="applayFilter(feature.type_code)"
          item-value="id" item-text="value"
           :items="feature.items"
             color="grey"
        :hint="feature.hint"
           multiple
            :rules="feature.is_require?list_select_rule:[]" 
            :label="feature.name"></v-select>
        
    </v-form>
</v-flex>
</template>

<script>
import Temp from './../../Class/Temp.js'
export default {
    name: 'att-list-select',
    props: ['feature', 'id'],
    data: function () {
        return {
            value: this.initialValue(),
            list_select_rule: [v => !!v || this.translate('required')],
            list_select_value: this.storeSelect(),

        }
    },
    watch: {
        list_select_value(value) {
             if(value){
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
        applayFilter(type_code){

        },
        storeSelect() {
            if(this.feature.value){
                return this.feature.value.value
            }
            return null;
        },
        
         initialValue() {
            let value = this.storeSelect();
            let temp = new Temp();
            if(value){
            temp.setWithVal('value',value);
            }
            else{
                temp.setWithVal('value',null);
            }
            temp.setWithVal('id', this.id);
            temp.setWithVal('type_code', 'list_select');
            temp.setWithVal('feature_id', this.feature.id);
            this.value = temp;
            this.feature.value = temp;

            return temp;
        },
        storeValue() {
            let temp = new Temp();
            temp.setWithVal('value', this.list_select_value);
            temp.setWithVal('id', this.id);
            temp.setWithVal('type_code', 'list_select');
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

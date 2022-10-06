<template>
<v-flex md12>
    <v-form v-model="feature.valid">

        <v-select 
        :error="feature.error"
        v-model=" select_value"
          item-value="id"
           item-text="value"
            color="grey"
           :items="feature.items"
            :hint="feature.hint"
            :rules="feature.is_require?select_rule:[]" 
            :label="feature.name"></v-select>
    </v-form>
</v-flex>
</template>

<script>
import Temp from './../../Class/Temp.js'
export default {
    name: 'att-select',
    props: ['feature', 'id'],
    data: function () {
        return {
            value: this.initialValue(),
            select_rule: [v => !!v || this.translate('required')],
            select_value: this.storeSelect(),

        }
    },
    watch: {
        select_value(value) {
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
        storeSelect() {
            if(this.feature.value){
                return this.feature.value.value

            }
            return null;
        },
        
        initialValue() {
            let value = this.storeSelect();
            let temp = new Temp();
            temp.setWithVal('value', value);
            temp.setWithVal('id', this.id);
            temp.setWithVal('type_code', 'select');
            temp.setWithVal('feature_id', this.feature.id);
            this.value = temp;
            this.feature.value = temp;

            return temp;
        },
        storeValue() {
            let temp = new Temp();
            temp.setWithVal('value', this.select_value);
            temp.setWithVal('id', this.id);
            temp.setWithVal('type_code', 'select');
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

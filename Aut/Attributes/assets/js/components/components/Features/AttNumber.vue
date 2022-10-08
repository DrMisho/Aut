<template>
<v-flex md12>
    <v-form v-model="feature.valid">
    <v-text-field md12 outlined v-model="number_value"
    :error="feature.error"
    :hint='feature.hint'
      color="grey"
     :rules="feature.is_require?[
        v => !!v || translate('required'),
        v => (v &&  !isNaN(v)) ||  translate('required_number'),
    ]:[]" :label="feature.name" class=""></v-text-field>
    </v-form>
</v-flex>
</template>
<script>
import Temp from './../../Class/Temp.js'
export default {
    name: 'att-number',
    props: ['feature', 'id'],
    data: function () {
        return {
            number_value: this.storeNumber(),
            value: this.initialValue(),
            number_rule: [v => !!v || this.translate('required')],
        }
    },
    watch: {
        number_value(value) {
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
        storeNumber(){
            // console.log('form inside number i print',this.feature.value.value);
          if(this.feature.value){
            // console.log('form inside number i true');

              return this.feature.value.value;
          }
          else{
            // console.log('form inside number i false');

              return null;
          }  
        },
        initialValue(){
            let value =  this.storeNumber();
            let temp = new Temp();

            temp.setWithVal('unit_id', this.feature.unit_id);

            temp.setWithVal('value', value);
            temp.setWithVal('type_code', 'number');
            temp.setWithVal('id', this.id);
            temp.setWithVal('feature_id', this.feature.id);
            this.value = temp;
            this.feature.value = temp;

            return temp;
        },
        storeValue() {
            let temp = new Temp();
            temp.setWithVal('value', this.number_value);
            temp.setWithVal('type_code', 'number');
            temp.setWithVal('id', this.id);
            temp.setWithVal('unit_id', this.feature.unit_id);

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

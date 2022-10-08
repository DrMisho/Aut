<template>
<v-flex md12>
    <v-form v-model="feature.valid">
    <v-text-field md12 outlined :error="feature.error"  color="grey" v-model="text_value"
    :hint="feature.hint"
     :rules="feature.is_require?text_rule:[]" :label="feature.name" class=""></v-text-field>
    </v-form>
</v-flex>
</template>

<script>
import Temp from './../../Class/Temp.js'
export default {
    name: 'att-text',
    props: ['feature', 'id'],
    data: function () {
        return {
            text_value: this.storetext(),
            value: this.initialValue(),
            text_rule: [v => !!v || this.translate('required')],
        }
    },
    watch: {
        text_value(value) {
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
        storetext(){

          if(this.feature.value){
              return this.feature.value.value;
          }
          else{
              return null;
          }  
        },
        initialValue(){
            let value =  this.storetext();
            let temp = new Temp();
            temp.setWithVal('value', value);
            temp.setWithVal('type_code', 'text');
            temp.setWithVal('id', this.id);
            temp.setWithVal('feature_id', this.feature.id);
            this.value = temp;
            this.feature.value = temp;

            return temp;
        },
        storeValue() {

            let temp = new Temp();
            temp.setWithVal('value', this.text_value);
            temp.setWithVal('type_code', 'text');
            temp.setWithVal('id', this.id);
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

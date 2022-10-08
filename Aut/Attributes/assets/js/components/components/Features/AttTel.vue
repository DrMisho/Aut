<template>
<v-flex md12>
    <v-form v-model="feature.valid">

    <mobile-input md12 outlined v-model="tel_value"
    :error="feature.error"
    :hint="feature.hint"
      color="grey"
     :rules="feature.is_require?tel_rule:[]" :label="feature.name" class=""></mobile-input>
    </v-form>

</v-flex>
</template>

<script>
import Temp from './../../Class/Temp.js'
export default {
    name: 'att-tel',
    props: ['feature', 'id'],
    data: function () {
        return {
            tel_value: this.storeTel(),
            value: this.initialValue(),
            tel_rule: [v => !!v || this.translate('required')],
        }
    },
    watch: {
        tel_value(value) {
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
        storeTel(){
          if(this.feature.value){
              return this.feature.value.value;
          }
          else{
              return null;
          }  
        },
        initialValue(){
            let value =  this.storeTel();
            let temp = new Temp();
            temp.setWithVal('value', value);
            temp.setWithVal('type_code', 'tel');
            temp.setWithVal('id', this.id);
            temp.setWithVal('feature_id', this.feature.id);
            this.value = temp;
            this.feature.value = temp;

            return temp;
        },
        storeValue() {
            let temp = new Temp();
            temp.setWithVal('value', this.tel_value);
            temp.setWithVal('type_code', 'tel');
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

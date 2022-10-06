<template>
<v-flex md12>
    <v-form v-model="feature.valid">

    <v-text-field md12 outlined v-model="url_value" 
    :error="feature.error"
      color="grey"
    :rules="feature.is_require?url_rule:[]"
     :label="feature.name" 
     :hint="feature.hint" 
     class=""></v-text-field>
    </v-form>
</v-flex>
</template>
<script>
import Temp from './../../Class/Temp.js'
export default {
    name: 'att-url',
    props: ['feature', 'id'],
    data: function () {
        return {
            url_value: this.storeUrl(),
            value: this.initialValue(),
            url_rule: [v => !!v || this.translate('required')],
        }
    },
    watch: {
        url_value() {
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
        storeUrl(){
          if(this.feature.value){
              return this.feature.value.value;
          }
          else{
              return null;
          }  
        },
        initialValue(){
            let value =  this.storeUrl();
            let temp = new Temp();
            temp.setWithVal('value', value);
            temp.setWithVal('type_code', 'url');
            temp.setWithVal('id', this.id);
            temp.setWithVal('feature_id', this.feature.id);
            this.value = temp;
            this.feature.value = temp;

            return temp;
        },
        storeValue() {
            let temp = new Temp();
            temp.setWithVal('value', this.url_value);
            temp.setWithVal('type_code', 'url');
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

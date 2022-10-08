<template>
<v-flex md12>
    <v-form v-model="feature.valid">

        <v-switch v-model="switch_value"
        :error="feature.error"
    :hint="feature.hint"
    color="primary"
    
         :label="feature.name"></v-switch>
    </v-form>

</v-flex>
</template>

<script>
import Temp from './../../Class/Temp.js'
export default {
    name: 'att-switch',
    props: ['feature', 'id'],
    data: function () {
        return {
            value: this.initialValue(),
            switch_rule: [v => !!v || translate('required')],
            switch_value: this.storeSwitch(),
        }
    },
    watch: {
        switch_value(value) {
            if(value!=null){
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
        storeSwitch(){
          if(this.feature.value){
              return this.feature.value.value;
          }
          else{
              return false;
          }  
        },
        
         initialValue() {
             let value = this.storeSwitch();
            let temp = new Temp();
            temp.setWithVal('value', value);
            temp.setWithVal('id', this.id);
            temp.setWithVal('type_code', 'switch');
            temp.setWithVal('feature_id', this.feature.id);
            this.value = temp;
            this.feature.value = temp;

            return temp;
        },
        storeValue() {
            let temp = new Temp();
            temp.setWithVal('value', this.switch_value);
            temp.setWithVal('id', this.id);
            temp.setWithVal('type_code', 'switch');
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

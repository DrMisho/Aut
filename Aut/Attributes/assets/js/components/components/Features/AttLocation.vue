<template>
<v-flex md12>
    <h1>Location</h1>
    <v-form v-model="feature.valid">
    <geolocation-input :error="feature.error"  v-model="location_val"
    :hint="feature.hint"
     :rules="feature.is_require?location_rule:[]" :label="feature.name"  :center="{lat: '45', lng: '45'}" :size="['100%', '400px']" :zoom="8"/>
    </v-form>
</v-flex>
</template>

<script>
import Temp from './../../Class/Temp.js'
export default {
    name: 'att-location',
    props: ['feature', 'id'],
    data: function () {
        return {
            location_val: this.storeLocation(),
            value: this.initialValue(),
            location_rule: [v => !!v || this.translate('required')],
        }
    },
    watch: {
        location_val(value) {
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
        storeLocation(){

          if(this.feature.value){
              return this.feature.value.value;
          }
          else{
              return null;
          }  
        },
        initialValue(){
            let value =  this.storeLocation();
            let temp = new Temp();
            temp.setWithVal('value', value);
            temp.setWithVal('type_code', 'location');
            temp.setWithVal('id', this.id);
            temp.setWithVal('feature_id', this.feature.id);
            this.value = temp;
            this.feature.value = temp;

            return temp;
        },
        storeValue() {

            let location =`${this.location_val.lat},${this.location_val.lng}`;  
            let temp = new Temp();
            temp.setWithVal('value', location);
            temp.setWithVal('type_code', 'location');
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

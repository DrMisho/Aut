<template>
<v-flex md12>
    <v-form v-model="feature.valid">
     
     <v-menu v-model="feature.show_dailog" :close-on-content-click="false" transition="scale-transition" offset-y full-width 
     max-width="290px" min-width="290px">
            <template v-slot:activator="{ on }">
                <v-text-field :error="feature.error" v-model="date_value" 
                  color="grey"
    :hint="feature.hint"

                :label="feature.name" prepend-icon="event" persistent-hint
                 :rules="feature.is_require?date_rule:[]" readonly v-on="on"></v-text-field>
            </template>
            <v-date-picker v-model="date_value" :label="feature.name" @input="show_dailog = false"></v-date-picker>
        </v-menu>
    </v-form>
</v-flex>
</template>

<script>
import Temp from './../../Class/Temp.js'
export default {
    name: 'att-date',
    props: ['feature', 'id'],
    data: function () {
        return {
            date_value:this.storeDate(),
            value:this.initialValue(),
            date_rule:[v => !!v || this.translate('required') ],
            show_dailog:false,
        }
    },
    watch: {
       date_value(value){
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
        storeDate(){
            if(this.feature.value){
                return this.feature.value.value;
            }
            else{
                return null;
            }
        },
        
          initialValue() {
              let value = this.storeDate();
              console.log('herreeer');
            let temp = new Temp();
            temp.setWithVal('value',value);
            temp.setWithVal('id', this.id);
            temp.setWithVal('type_code', 'date');
            temp.setWithVal('feature_id', this.feature.id);
            this.value = temp;
            this.feature.value = temp;

            return temp;
        },

        storeValue() {
            let temp = new Temp();
            temp.setWithVal('value',this.date_value);
            temp.setWithVal('id', this.id);
             temp.setWithVal('type_code', 'date');
            temp.setWithVal('feature_id', this.feature.id);
            this.value = temp;
            this.feature.value = temp;

            return temp;
        },

    },
    created() {
    }

}
</script>

<style scoped>

</style>

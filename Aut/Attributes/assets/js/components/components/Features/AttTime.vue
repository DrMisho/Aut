<template>
<v-flex md12>
    <v-form v-model="feature.valid">

        <v-menu ref="ref_time" v-model="show_dailog" :close-on-content-click="false"
         :nudge-right="40" lazy transition="scale-transition" offset-y full-width max-width="290px" min-width="290px">
            <template v-slot:activator="{ on }">
                <v-text-field v-model="time_value" 
                :error="feature.error"
                  color="grey"
                :label="feature.name" prepend-icon="access_time" readonly v-on="on"></v-text-field>
            </template>
            <v-time-picker v-if="show_dailog" v-model="time_value" full-width :rules="feature.is_require?time_rule:[]" 
            @click:minute="show_dailog = false"></v-time-picker>
        </v-menu>
    </v-form>
</v-flex>
</template>

<script>
import Temp from './../../Class/Temp.js'
export default {
    name: 'att-time',
    props: ['feature', 'id'],
    data: function () {
        return {
            value: this.initialValue(),
            time_rule:[v => !!v || this.translate('required') ],
            time_value:this.storTimeAsHour(),
            show_dailog:false,
        }
    },
    watch: {
       time_value(){
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
        storTimeAsHour() {
            let full_date = this.feature.value;
            if (full_date) {

                return this.feature.value.value
            }
            else{
                return null;
            }
        },
        
         initialValue() {
             let value = this.storTimeAsHour();
            let temp = new Temp();
            temp.setWithVal('value',value);
            temp.setWithVal('type_code', 'time');
            temp.setWithVal('id', this.id);
            temp.setWithVal('feature_id', this.feature.id);
            this.value = temp;
            this.feature.value = temp;

            return temp;
        },
        storeValue() {
            let temp = new Temp();
            temp.setWithVal('value',this.time_value);
            temp.setWithVal('id', this.id);
            temp.setWithVal('type_code', 'time');
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

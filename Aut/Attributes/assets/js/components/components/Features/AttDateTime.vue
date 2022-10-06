<template>
<v-flex md12  class="DataTime">
   
    
    <v-form v-model="feature.valid">
    <div class="justify-center align-center d-flex" md1 sm1 xl1 xm1>
        <p>{{feature.name}}</p>
    </div>
    <date-time-input v-model="date_time_val">
            <template v-slot:default="{value}">
                  <v-layout wrap row md10 xm10 sm10 xl10>
                    <v-flex md6 sm6 xl6 xm6>
                <date-input :error="feature.error" :hint="feature.hint"  :rules="feature.is_require?date_rule:[]"  v-model="value.date" :label="translate('date')"/>
                </v-flex>
        <v-flex md6 sm6 xl6 xm6>
                <time-input :error="feature.error" :hint="feature.hint"  :rules="feature.is_require?date_rule:[]"   clearable v-model="value.time" :label="translate('time')"/>
                </v-flex>
    </v-layout>
            </template>
    </date-time-input>
    </v-form>
</v-flex>
</template>

<script>
import Temp from './../../Class/Temp.js'
export default {
    name: 'att-date-time',
    props: ['feature', 'id'],
    data: function () {
        return {
            value: this.initialValue(),
            date_rule: [v => !!v || this.translate('required')],
            date_time_val:this.storeDatetime(),

            show_dailog: false,
            show_dailog_end: false,
        }
    },
    watch: {
        date_time_val(value) {
              
            this.storeValue();
        },
      
        value() {
            this.$emit('input', this.value);
        },

    },
    methods: {

        translate(key = '') {
            return this.$t(`attributes.${key}`)
        },

        initialValue() {
            let date_time_val = this.storeDatetime();
            let temp = new Temp();
            temp.setWithVal('value', date_time_val);
            temp.setWithVal('id', this.id);
            temp.setWithVal('type_code', 'date_time');
            temp.setWithVal('feature_id', this.feature.id);
            this.value = temp;
            this.feature.value = temp;
            return temp;
        },
        storeValue() {
            let temp = new Temp();
            temp.setWithVal('value', this.date_time_val);
            temp.setWithVal('id', this.id);
            temp.setWithVal('type_code', 'date_time');
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

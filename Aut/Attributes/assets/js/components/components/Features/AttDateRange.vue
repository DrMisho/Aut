<template>
<v-flex md12  >
    <v-form v-model="feature.valid">

     <div class="justify-center align-center d-flex" md1 sm1 xl1 xm1>
        <p>{{feature.name}}</p>
    </div>
    <v-layout md11 sm11 row warp xl11 xm11>
        <v-flex md6 sm6 xl6 xm6>
            <v-menu v-model="show_dailog" :close-on-content-click="false" transition="scale-transition" offset-y full-width max-width="290px" min-width="290px">
                <template v-slot:activator="{ on }">
                    <v-text-field :error="feature.error" v-model="date_start"
                      color="grey"
                     :hint="feature.hint" prepend-icon="event" :label="translate('from')" persistent-hint :rules="feature.is_require?[v => !!v || translate('required') ]:[]" readonly v-on="on"></v-text-field>
                </template>
                <v-date-picker v-model="date_start" :label="feature.name" @input="show_dailog = false"></v-date-picker>
            </v-menu>
        </v-flex>
        <v-flex md6 sm6 xl6 xm6>
            <v-menu v-model="show_dailog_end" :close-on-content-click="false" transition="scale-transition" offset-y full-width max-width="290px" min-width="290px">
                <template v-slot:activator="{ on }">
                    <v-text-field :error="feature.error" v-model="date_end" 
  AttDateRange                    color="grey"
                    :hint="feature.hint" prepend-icon="event" :label="translate('to')" persistent-hint :rules="feature.is_require?[v => !!v || translate('required') ]:[]" readonly v-on="on"></v-text-field>
                </template>
                <v-date-picker v-model="date_end" :label="feature.name" @input="show_dailog_end = false"></v-date-picker>
            </v-menu>
        </v-flex>
    </v-layout>
    </v-form>
</v-flex>
</template>

<script>
import Temp from './../../Class/Temp.js'
export default {
    name: 'att-date-range',
    props: ['feature', 'id'],
    data: function () {
        return {
            date_rule: [v => !!v || this.translate('required')],
            date_start: this.storeDateStart(),
            date_end: this.storeDateEnd(),
            show_dailog: false,
            show_dailog_end: false,
            value: this.initialValue(),

        }
    },
    watch: {
        date_start(value) {
           if(value && this.date_end){
                this.feature.error = false;
            }
            this.storeValue();
        },
        date_end(value) {
             if(value && this.date_start){
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
        storeDateStart() {
            if (this.feature.value) {
               return this.feature.value.date_start;
               
            } else {

                return null;
            }

        },
        storeDateEnd() {
            if (this.feature.value) {
                  return  this.feature.value.date_end;

            } else {
                
                return null;
            }

        },
        initialValue() {
            let date_start = this.storeDateStart();
            let date_end = this.storeDateEnd();
            let temp = new Temp();
            temp.setWithVal('date_start', date_start);
            temp.setWithVal('date_end', date_end);
            temp.setWithVal('id', this.id);
            temp.setWithVal('type_code', 'data_range');
            temp.setWithVal('feature_id', this.feature.id);
            this.value = temp;
            this.feature.value = temp;

            return temp;
        },
        storeValue() {
            let temp = new Temp();
            temp.setWithVal('date_start', this.date_start);
            temp.setWithVal('date_end', this.date_end);
            temp.setWithVal('id', this.id);
            temp.setWithVal('type_code', 'data_range');
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

<template>
<v-flex>
    <v-flex v-if="feature.type_code == 'switch'" class=" ma-2  align-center ">
        <v-switch color="primary" v-model='search_values' :label="feature.name"></v-switch>
    </v-flex>
    <!-- <v-flex v-else-if="feature.type_code == 'select' || feature.type_code == 'list_select'|| feature.type_code == 'autocomplete' " class="" ma-2 align-center>
        <v-select attach chips item-value="id" v-model='search_values' item-text="value" multiple :items="feature.option" :label="feature.name"></v-select>
    </v-flex> -->
      <v-flex v-else-if="feature.type_code == 'list'" class="" ma-2 align-center>
        <v-select attach chips item-value="id" v-model='search_values' item-text="value" multiple :items="feature.option" :label="feature.name"></v-select>
    </v-flex>
    <!-- <v-flex md12 sm12 xl12 v-else-if="feature.type_code == 'data_range' " class="" ma-2 align-center>
        <v-layout wrap row md12 sm12 xl12>
            <v-flex>{{translate('date_min') + ': '}}{{feature.date_start}}</v-flex>
                           <v-spacer></v-spacer>

            <v-flex>{{translate('date_max') + ': '}}{{feature.date_end}}</v-flex>
        </v-layout>
        <v-flex md12 sm12 xl12>
            <v-menu v-model="show_dailog" :close-on-content-click="false" transition="scale-transition" offset-y full-width max-width="290px" min-width="290px">
                <template v-slot:activator="{ on }">
                    <v-text-field v-model="search_values" :label="feature.name" prepend-icon="event" persistent-hint readonly v-on="on"></v-text-field>
                </template>
                <v-date-picker v-model="search_values" :label="feature.name" @input="show_dailog = false"></v-date-picker>
            </v-menu>

        </v-flex>

    </v-flex> -->
    <v-flex md12 sm12 xl12 v-else-if="feature.type_code == 'date' " class="" ma-2 align-center>
        <v-layout wrap row md12 sm12 xl12>
            <v-flex>{{translate('date_min') + ': '}}{{feature.min}}</v-flex>
                           <v-spacer></v-spacer>
            <v-flex>{{translate('date_max') + ': '}}{{feature.max}}</v-flex>
        </v-layout>
        <v-flex md12 sm12 xl12>
            <v-menu v-model="show_dailog" :close-on-content-click="false" transition="scale-transition" offset-y full-width max-width="290px" min-width="290px">
                <template v-slot:activator="{ on }">
                    <v-text-field v-model="search_values" :label="feature.name" prepend-icon="event" persistent-hint readonly v-on="on"></v-text-field>
                </template>
                <v-date-picker v-model="search_values" :label="feature.name" @input="show_dailog = false"></v-date-picker>
            </v-menu>

        </v-flex>

    </v-flex>
    <!-- <v-flex v-else-if="feature.type_code == 'number_range' " class="" ma-2 align-center>
        <v-layout wrap row>
            <v-flex>{{translate('min') + ': '}} {{feature.number_start}}</v-flex>
                           <v-spacer></v-spacer>

            <v-flex>{{translate('max') + ': '}}{{feature.number_end}}</v-flex>
        </v-layout>
        <v-flex>
            <v-text-field md12 outlined v-model='search_values' color="primary" :label="feature.name" class=""></v-text-field>
        </v-flex>
    </v-flex> -->
      <v-flex v-else-if="feature.type_code == 'number_range' " class="" ma-2 align-center>
        <v-layout wrap row>
            <v-flex>{{translate('min') + ': '}} {{feature.min}}</v-flex>
                           <v-spacer></v-spacer>

            <v-flex>{{translate('max') + ': '}}{{feature.max}}</v-flex>
        </v-layout>
        <v-flex>
            <v-text-field md12 outlined v-model='search_values' color="primary" :label="feature.name" class=""></v-text-field>
        </v-flex>
    </v-flex>
    <!-- <v-flex v-else-if="feature.type_code == 'time'" class="" ma-2 align-center>
        <v-layout wrap row>
            <v-flex>{{translate('min') + ': '}} {{feature.min}}</v-flex>
                           <v-spacer></v-spacer>

            <v-flex>{{translate('max') + ': '}} {{feature.max}}</v-flex>
        </v-layout>
        <v-flex>
            <v-menu ref="ref_time" v-model="show_dailog" :close-on-content-click="false" :nudge-right="40" lazy transition="scale-transition" offset-y full-width max-width="290px" min-width="290px">
                <template v-slot:activator="{ on }">
                    <v-text-field v-model="search_values" :label="feature.name" prepend-icon="access_time" readonly v-on="on"></v-text-field>
                </template>
                <v-time-picker v-if="show_dailog" v-model="search_values" full-width @click:minute="show_dailog = false"></v-time-picker>
            </v-menu>
        </v-flex>
    </v-flex> -->
    <!-- <v-flex v-else-if="feature.type_code == 'date'" class="" ma-2 align-center>
        <v-layout wrap row>
            <v-flex>{{translate('min') + ': '}} {{feature.min}}</v-flex>
                           <v-spacer></v-spacer>

            <v-flex>{{translate('max') + ': '}} {{feature.max}}</v-flex>
        </v-layout>
        <v-flex>
            <v-menu v-model="show_dailog" :close-on-content-click="false" transition="scale-transition" offset-y full-width max-width="290px" min-width="290px">
                <template v-slot:activator="{ on }">
                    <v-text-field v-model="search_values" :label="feature.name" prepend-icon="event" persistent-hint readonly v-on="on"></v-text-field>
                </template>
                <v-date-picker v-model="search_values" :label="feature.name" @input="show_dailog = false"></v-date-picker>
            </v-menu>
        </v-flex>
    </v-flex> -->

    <!-- <v-flex md12 sm12 xl12 v-else-if=" feature.type_code == 'date_time' " class="" ma-2 align-center>
        <v-layout wrap row md12 sm12 xl12>
            <v-flex>{{translate('date_min') + ': '}}{{feature.min}}</v-flex>
                           <v-spacer></v-spacer>

            <v-flex>{{translate('date_max') + ': '}}{{feature.max}}</v-flex>
        </v-layout>
        <v-flex md12 sm12 xl12>
            <v-menu v-model="show_dailog" :close-on-content-click="false" transition="scale-transition" offset-y full-width max-width="290px" min-width="290px">
                <template v-slot:activator="{ on }">
                    <v-text-field v-model="date_val" color="grey" prepend-icon="event" :label="translate('date')" persistent-hint readonly v-on="on"></v-text-field>
                </template>
                <v-date-picker v-model="date_val" :label="feature.name" :hint="feature.hint" @input="show_dailog = false"></v-date-picker>
            </v-menu>
        </v-flex>
        <v-flex md6 sm6 xl6 xm6>
            <v-menu ref="ref_time" v-model="show_dailog_end" :close-on-content-click="false" :nudge-right="40" lazy transition="scale-transition" offset-y full-width max-width="290px" min-width="290px">
                <template v-slot:activator="{ on }">
                    <v-text-field v-model="time" color="grey" :hint="feature.hint" :label="translate('time')" prepend-icon="access_time" readonly v-on="on"></v-text-field>
                </template>
                <v-time-picker v-if="show_dailog_end" v-model="time" full-width @click:minute="show_dailog_end = false"></v-time-picker>
            </v-menu>

        </v-flex>
    </v-flex> -->
    <v-flex v-else-if="feature.type_code == 'color' || feature.type_code == 'colors'" class="" ma-2 align-center>
        <v-select attach chips multiple v-model='search_values' :items="feature.option" :label="feature.name"></v-select>
    </v-flex>
    <v-flex v-else class=" ma-2  align-center ">
        <v-select attach chips multiple v-model='search_values' :items="feature.option" :label="feature.name"></v-select>
    </v-flex>

</v-flex>
</template>

<script>
//class
import Temp from './../../Class/Temp.js';

export default {

    name: 'feature',
    props: ['feature', 'id'],
    data: function () {
        return {
            locales: [],
            langs_info: automata.language.config.supportedLocales,
            search_values: null,
            show_dailog_end: false,
            show_dailog: false,
            date_val: '',
            time: '',
        }
    },
    watch: {
        search_values: function (newValue) {
            if (newValue == null || (Array.isArray(newValue) && newValue.length == 0)) {
                this.feature.filter_value = null;
            } else {
                //common
                let temp = new Temp();
                let type_code = this.feature.type_code;
                temp.setWithVal('type_code', type_code);
                temp.setWithVal('id', this.id);
                temp.setWithVal('filter_value', this.search_values);
                this.feature.filter_value = temp;
            }

        },
        date_val: function (value) {
            if (this.time) {
                this.search_values = this.mergeDataAndTime(this.date_val, this.time);
            }
        },
        time: function (value) {
            if (this.date_val) {
                this.search_values = this.mergeDataAndTime(this.date_val, this.time);
            }

        },
    },
    components: {},
    methods: {
        mergeDataAndTime(data_val, time_val) {

            let data_time_val = "" + data_val + " " + time_val + "";
            return data_time_val;
        },
        getLocales() {
            let array = [];
            for (let index in automata.language.config.supportedLocales)
                array.push(index);

            this.locales = array;

        },
        translate(key) {
            return this.$t(`attributes.${key}`)
        },

    },
    created() {
        this.getLocales();
    }

}
</script>

<style scoped>

</style>

<template>
<v-flex>
    <v-flex md12 v-if="feature.type_code == 'text_with_lang'">
        <att-text-with-lang :feature="feature" v-model="feature.value" :id="id"></att-text-with-lang>
    </v-flex>
    <!-- state type number-->
    <v-flex md12 v-else-if="feature.type_code == 'number'">
     <att-number :feature="feature"  v-model="feature.value" :id="id"></att-number>
    </v-flex>
    <!-- text normal -->
    <v-flex md12 v-else-if="feature.type_code == 'text'">
     <att-text :feature="feature"  v-model="feature.value" :id="id"></att-text>
    </v-flex>
    <!-- tel -->
    <v-flex md12 v-else-if="feature.type_code == 'tel'">
     <att-tel :feature="feature"  v-model="feature.value" :id="id"></att-tel>
    </v-flex>
    <!-- url -->
    <v-flex md12 v-else-if="feature.type_code == 'url'">
     <att-url :feature="feature"  v-model="feature.value" :id="id"></att-url>
    </v-flex>
    <!-- state type number rangg-->
    <v-layout md12 v-else-if="feature.type_code == 'number_range'">
        <att-number-range :feature="feature"  v-model="feature.value" :id="id"></att-number-range>
    </v-layout>
    <!-- state type date -->
    <v-flex md12 v-else-if="feature.type_code == 'date' " class="DataTime">
      <att-date  :feature="feature"  v-model="feature.value" :id="id"></att-date>
    </v-flex>
    <!-- state type date range -->
    <v-flex md12 row wrap md12 v-else-if="feature.type_code == 'data_range' " class="DataTime">
       <att-date-range :feature="feature"  v-model="feature.value" :id="id" ></att-date-range>
    </v-flex>
    <!-- state type date_time -->
    <v-layout md12 wrap row v-else-if="feature.type_code == 'date_time' " class="DataTime">
       <att-date-time  :feature="feature"  v-model="feature.value" :id="id"></att-date-time>
    </v-layout>
    <!-- state type time  -->
    <v-flex md12 v-else-if="feature.type_code == 'time' ">
      <att-time  :feature="feature"  v-model="feature.value" :id="id"></att-time>
    </v-flex>
    <!-- state type email  -->
    <v-flex md12 v-else-if="feature.type_code == 'email'">
       <att-email :feature="feature"  v-model="feature.value" :id="id"></att-email>
    </v-flex>
    <!-- state type color  -->
    <v-flex md12 v-else-if="feature.type_code == 'color'">
        <att-color :feature="feature"  v-model="feature.value" :id="id" ></att-color>
    </v-flex>
    <!-- state type switch  -->
    <v-flex md12 v-else-if="feature.type_code == 'switch'">
        <att-switch :feature="feature"  v-model="feature.value" :id="id"></att-switch>
    </v-flex>
    <!-- state type image  -->
    <v-flex md12 v-else-if="feature.type_code == 'image'">
        <att-image  :feature="feature"  v-model="feature
        .value" :id="id"></att-image>
    </v-flex>
    <!-- state type image  -->
    <v-flex md12 v-else-if="feature.type_code == 'file'">
        <att-file  :feature="feature"  v-model="feature.value" :id="id"></att-file>
    </v-flex>
    <!-- state type text_editor  -->
    <v-flex md12 v-else-if="feature.type_code == 'text_editor'">
        <att-text-editor :feature="feature"  v-model="feature.value"  :id="id"></att-text-editor>
    </v-flex>
    <!-- state type select  -->
    <v-flex md12 v-else-if="feature.type_code == 'select'">
        <att-select :feature="feature"  v-model="feature.value" :id="id"></att-select>
    </v-flex>
    <v-flex md12 v-else-if="feature.type_code == 'values'">
        <att-values :feature="feature"  v-model="feature.value" :id="id"></att-values>
    </v-flex>
    <v-flex md12 v-else-if="feature.type_code == 'list_select'">
        <att-list-select :feature="feature"  v-model="feature.value" :id="id"></att-list-select>
    </v-flex>
    <v-flex md12 v-else-if="feature.type_code == 'colors'">
        <att-colors  :feature="feature"  v-model="feature.value" :id="id" ></att-colors>
    </v-flex>
    <v-flex md12 v-else-if="feature.type_code == 'location'">
        <att-location  :feature="feature"  v-model="feature.value" :id="id" ></att-location>
    </v-flex>

</v-flex>
</template>

<script>
import Rules from "./../../Class/Rules.js";
import AttTextWithLang from "./../Features/AttTextWithLang.vue";
import AttText from "./../Features/AttText.vue";
import AttTextEditor from "./../Features/AttTextEditor.vue";
import AttNumber from "./../Features/AttNumber.vue";
import AttColor from "./../Features/AttColor.vue";
import AttColors from "./../Features/AttColors.vue";
import AttDate from "./../Features/AttDate.vue";
import AttDateRange from "./../Features/AttDateRange.vue";
import AttNumberRange from "./../Features/AttNumberRange.vue";
import AttSelect from "./../Features/AttSelect.vue";
import AttListSelect from "./../Features/AttListSelect.vue";
import AttValues from "./../Features/AttValues.vue";
import AttImage from "./../Features/AttImage.vue";
import AttFile from "./../Features/AttFile.vue";
import AttSwitch from "./../Features/AttSwitch.vue";
import AttDateTime from "./../Features/AttDateTime.vue";
import AttTime from "./../Features/AttTime.vue";
import AttEmail from "./../Features/AttEmail.vue";
import AttAutocomplete from "./../Features/AttAutocomplete";
import AttTel from "./../Features/AttTel";
import AttUrl from "./../Features/AttUrl";
import AttLocation from "./../Features/AttLocation";

export default {

    name: 'feature',
    props:['feature','id'],
    data:function(){
        return{
            rulesAttr: new Rules(),
            locales: [],
            langs_info: automata.language.config.supportedLocales,
        }
    },
    components:{
        AttTextWithLang,AttTextEditor,AttColor,AttColors,AttDate,AttDateRange,AttNumber,AttNumberRange,
        AttSelect,AttListSelect,AttValues,AttImage,AttFile,AttSwitch,AttDateTime,AttTime,AttEmail,AttAutocomplete,
        AttTel,AttUrl,AttText,AttLocation
    },
    methods: {
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
    created(){
        this.getLocales();
    }

}
</script>

<style scoped>

</style>

<template>
<v-flex md12>
    <v-form v-model="feature.valid">

    <tags-input name="keywords" v-for="item , locale in feature.translations" :key="locale"
    :error="feature.error"
     v-model="item.value_trans"
     :hint="item.hint"
       color="grey"
     :rules="feature.is_require?values_rule:[]" :label="feature.name+'('+ langs_info[item.locale].native +')'"
      v-if="langs_info[item.locale]" 
      @keydown="storeTrans()"
      :class="'force-'+langs_info[item.locale].dir" chips />
    </v-form>
</v-flex>
</template>

<script>
import Temp from './../../Class/Temp.js'
export default {
    name: 'att-values',
    props: ['feature', 'id'],
    data: function () {
        return {
            value: this.storeTrans(),
            values_rule: [v => !!v || this.translate('required')],
            locales: [],
            langs_info: automata.language.config.supportedLocales,

        }
    },
    watch: {
       
        value() {
            this.$emit('input', this.value);
        },

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
        storeTrans() {
            let flag = true;
            let temp = new Temp();
            for (let index in this.feature.translations) {
                let locale = this.feature.translations[index].locale;
                temp.set(locale);
                temp[locale].set('value_trans', this.feature.translations[index].value_trans);
                if(!this.feature.translations[index].value_trans){
                    flag = false;
                }
            }
            this.feature.error = flag;
            temp.setWithVal('id', this.id);
            temp.setWithVal('type_code', 'values');
            temp.setWithVal('feature_id', this.feature.id);
            this.value = temp;
            this.feature.value = temp;

            return temp;
        },
        

    },
    created() {
        this.getLocales();

    }

}
</script>

<style scoped>

</style>

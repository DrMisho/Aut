<template>
<v-flex md12>
    <v-form v-model="feature.valid">

    <ckeditor-input v-for="item , locale in feature.translations" :key="locale" md12 outlined
     v-model="item.value_trans" 
     :error="feature.error"
     :name="item.name"
     :rules="feature.is_require?text_rule:[]"
      :label="feature.name+'('+ item.native +')'"
      :hint="item.hint"
      v-if="langs_info[item.locale]"
      @keypress="storeTrans()"
       :class="'force-'+langs_info[item.locale].dir" class="" />
    </v-form>
</v-flex>
</template>

<script>
import Temp from './../../Class/Temp.js'
export default {
    name: 'att-text-editor',
    props: ['feature', 'id'],
    data: function () {
        return {
            locales: [],
            current_locale:automata.language.locale,
            langs_info: automata.language.config.supportedLocales,
            value:this.storeTrans(),
            text_rule:[v => !!v || this.translate('required') ],

            
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
            temp.setWithVal('type_code', 'text_editor');
            temp.setWithVal('feature_id', this.feature.id);
            this.value = temp;
            this.feature.value = temp;

            return temp;
        },

    },
    created() {
        this.getLocales();
        // this.storeTrans()
    }

}
</script>

<style scoped>

</style>

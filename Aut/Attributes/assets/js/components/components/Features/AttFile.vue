<template>
<v-flex md12>
    <v-form v-model="feature.valid">

          <file-pond-input multiple 
          :error="feature.error"
    :hint="feature.hint"  color="grey"

          :label="feature.name + translate('msg_click_to_add_file') " 
         
         v-model="file_value" :uploader="uploader" :files="files" />
    </v-form>
</v-flex>
</template>

<script>
import Temp from './../../Class/Temp.js'
export default {
    name: 'att-file',
    props: ['feature', 'id'],
    data: function () {
        return {
            value: this.initialValue(),
            image_rule: [v => !!v || translate('required')],
            file_value: this.storeFile(),
            files: this.storeFiels(),
            uploader:'attribute_files',

        }
    },
    watch: {
        file_value(value) {
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
        storeFile(){
         if (this.feature.value) {
                if(this.feature.value.value){
                return this.feature.value.value;
                }
                 return [];
               
            } else {
                return [];
            }
        },
         storeFiels(){
          if (this.feature.value) {
                if(this.feature.value.value){
                return this.feature.value.value;
                }
                 return [];
               
            } else {
                return [];
            }
        },
        
        initialValue() {
            let value = this.storeFiels();
            let temp = new Temp();
            temp.setWithVal('value',value);
            temp.setWithVal('id', this.id);
            temp.setWithVal('type_code', 'file');
            temp.setWithVal('feature_id', this.feature.id);
            this.value = temp;
            this.feature.value = temp;

            return temp;
        },

        storeValue() {
            let temp = new Temp();
            temp.setWithVal('value', this.file_value);
            temp.setWithVal('id', this.id);
            temp.setWithVal('type_code', 'file');
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

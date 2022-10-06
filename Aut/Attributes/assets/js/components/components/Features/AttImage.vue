<template>
<v-flex md12>
    <v-form v-model="feature.valid">

    <file-pond-input multiple 
    :error="feature.error"
    :label="feature.name + translate('msg_click_to_add_image') "
      color="grey"
    :hint="feature.hint"
     v-model="image_value" :uploader="uploader" :files="files" />
    </v-form>
</v-flex>
</template>

<script>
import Temp from './../../Class/Temp.js'
export default {
    name: 'att-image',
    props: ['feature', 'id'],
    data: function () {
        return {
            value: this.initialValue(),
            image_rule: [v => !!v || translate('required')],
            image_value: this.storeImage(),
            files: this.storeFiels(),
            uploader:'attribute_images',
        }
    },
    watch: {
        image_value(value) {
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
        storeImage() {
           if (this.feature.value) {
                if(this.feature.value.value){
                return this.feature.value.value;
                }
                 return [];
               
            } else {
                return [];
            }
        },
        storeFiels() {
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
            let value = this.storeImage();
            let temp = new Temp();
            temp.setWithVal('value', value);
            temp.setWithVal('id', this.id);
            temp.setWithVal('type_code', 'image');
            temp.setWithVal('feature_id', this.feature.id);
            this.value = temp;
            this.feature.value = temp;

            return temp;
        },
        storeValue() {
            let temp = new Temp();
            temp.setWithVal('value', this.image_value);
            temp.setWithVal('id', this.id);
            temp.setWithVal('type_code', 'image');
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

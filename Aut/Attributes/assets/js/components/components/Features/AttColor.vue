<template>
<v-flex md12>
    <v-form v-model="feature.valid">

        <color-input :error="feature.error" v-model="color_value" color="grey" :hint="feature.hint" :rules="feature.is_require?color_rule:[]" :label="feature.name"></color-input>
    </v-form>
</v-flex>
</template>

<script>
import Temp from './../../Class/Temp.js'
export default {
    name: 'att-color',
    props: ['feature', 'id'],
    data: function () {
        return {
            value: this.initialValue(),
            color_rule: [v => !!v || this.translate('required')],
            color_value: this.storeColor(),
        }
    },
    watch: {
        color_value(value) {
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
        storeColor() {
            if (this.feature.value) {
                return this.feature.value.value;
            } else {
                return null;
            }
        },

        translate(key) {
            return this.$t(`attributes.${key}`)
        },
        initialValue() {
            let value = '';
            if (this.feature.value) {
                value = this.feature.value.value;
            }
            let temp = new Temp();
            temp.setWithVal('value', value);
            temp.setWithVal('id', this.id);
            temp.setWithVal('type_code', 'color');
            temp.setWithVal('feature_id', this.feature.id);
            this.value = temp;
            this.feature.value = temp;

            return temp;
        },
        storeValue() {
            let temp = new Temp();
            temp.setWithVal('value', this.color_value);
            temp.setWithVal('id', this.id);
            temp.setWithVal('type_code', 'color');
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

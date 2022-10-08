<template>
    <v-text-field v-if="field.type === 'text'" v-model="inputValue" :label="label" :reverse="reverse" :autofocus="autofocus" :error-messages="errorMessages"></v-text-field>
    <v-text-field v-else-if="field.type === 'number'" type="number" v-model="inputValue" :label="label" :reverse="reverse" :autofocus="autofocus" :error-messages="errorMessages"></v-text-field>
    <v-text-field v-else-if="field.type === 'order'" type="number" v-model="inputValue" :label="label" :reverse="reverse" :autofocus="autofocus" :error-messages="errorMessages"></v-text-field>
    <v-text-field v-else-if="field.type === 'url'" type="url" v-model="inputValue" :label="label" :reverse="reverse" :autofocus="autofocus" :error-messages="errorMessages"></v-text-field>
    <v-text-field v-else-if="field.type === 'email'" type="email" v-model="inputValue" :label="label" :reverse="reverse" :autofocus="autofocus" :error-messages="errorMessages"></v-text-field>
    <password-field v-else-if="field.type === 'password'"
                    v-model="inputValue"
                    :label="label"
                    :reverse="reverse"
                    :autofocus="autofocus"
                    :generate="field.auto_generate"
                    :error-messages="errorMessages"
    />
    <phone-input v-else-if="field.type === 'phone'" v-model="inputValue" :label="label" :reverse="reverse" :autofocus="autofocus" :error-messages="errorMessages"></phone-input>
    <mobile-input v-else-if="field.type === 'mobile'" v-model="inputValue" :label="label" :reverse="reverse" :autofocus="autofocus" :error-messages="errorMessages"></mobile-input>
    <price-input v-else-if="field.type === 'money'" v-model="inputValue" :currency="field.symbol" :label="label" :reverse="reverse" :autofocus="autofocus" :error-messages="errorMessages"></price-input>
    <tags-input v-else-if="field.type === 'tags'"
                v-model="inputValue"
                :label="label"
                :reverse="reverse"
                :autofocus="autofocus"
                :chips="field.chipsSelection || field.optionsTemplate.type === 'chips'"
                :clearable="true"
                :small-chips="true"
                :error-messages="errorMessages"
    />
    <color-input v-else-if="field.type === 'color'"
                 v-model="inputValue"
                 :label="label"
                 clearable
                 :error-messages="errorMessages"
    />
    <v-textarea v-else-if="field.type === 'textarea'"
                v-model="inputValue"
                :label="label"
                :reverse="reverse"
                :autofocus="autofocus"
                :error-messages="errorMessages"
                box
    />
    <v-switch v-else-if="field.type === 'switch'" :label="label" v-model="inputValue" :color="field.color" :reverse="reverse" :autofocus="autofocus" :error-messages="errorMessages"></v-switch>
    <autocomplete v-else-if="field.type === 'autocomplete'"
            dense
            :label="label"
            :no-data-text="trans('empty_select')"
            v-model="inputValue"
            :loading="field.loading"
            :disabled="field.loading"
            :reverse="reverse"
            :resource="field.resource"
            :autofocus="autofocus"
            :error-messages="errorMessages"
    ></autocomplete>
    <autocomplete v-else-if="field.type === 'multi_select'"
            :label="label"
            :resource="field.resource"
            multiple
            :no-data-text="trans('empty_select')"
            v-model="inputValue"
            :chips="field.chipsSelection || field.optionsTemplate.type === 'chips'"
            :deletable-chips="field.chipsSelection || field.optionsTemplate.type === 'chips'"
            :reverse="reverse"
            :loading="field.loading"
            :disabled="field.loading"
            :autofocus="autofocus"
            :error-messages="errorMessages"
    ></autocomplete>
    <select-input v-else-if="field.type === 'select'"
            :label="label"
            :no-data-text="trans('empty_select')"
            v-model="inputValue"
            :reverse="reverse"
            :resource="field.resource"
            :options="field.options"
            :option-id="field.optionId"
            :option-text="field.optionText"
            :query="query"
            :required-params="requiredParams"
            :autofocus="autofocus"
            :error-messages="errorMessages"
            :clearable="field.clearable"
    ></select-input>
    <file-pond-input v-else-if="field.type === 'filepond'"
            :max-files="field.maxFiles"
            :multiple="field.multiple"
            :accepted-file-types="field.fileTypes"
            :label="trans('filepond_label', {name: label})"
            :allowReplace="true"
            :instantUpload="true"
            v-model="inputValue"
            :uploader="field.uploader"
            :files="files"
            :error-messages="errorMessages"
    />
    <ckeditor-input v-else-if="field.type === 'ckeditor'" v-model="inputValue" :label="label" :error-messages="errorMessages"></ckeditor-input>
    <date-input v-else-if="field.type === 'date'" v-model="inputValue" :label="label" :autofocus="autofocus" :error-messages="errorMessages"/>
    <time-input v-else-if="field.type === 'time'" v-model="inputValue" :label="label" :autofocus="autofocus" :error-messages="errorMessages"/>
    <date-time-input v-else-if="field.type === 'datetime'" v-model="inputValue" :label="label" :error-messages="errorMessages"/>
    <geolocation-input v-else-if="field.type === 'geolocation'"
        v-model="inputValue"
        :label="label"
        :center="center"
        :size="field.size"
        :zoom="field.zoom"
        :multi-markers="field.multiple"
        :dialog="dialog"
        :error-messages="errorMessages"
    />
</template>

<script>
    export default {
        name: "FormDynamicInput",
        props: {
            value: {
                default: null
            },
            label: null,
            field: {},
            reverse: false,
            files: {
                type: Array,
                default: function (){
                    return [];
                },
            },
            filter: {
                default: null,
            },
            dialog: {
                type: Boolean,
                default: false,
            },
            autofocus:{
                type: Boolean,
                default: false,
            },
            errorMessages:{}
        },
        data() {
            return {
                inputValue: this.value/* ?? this.field.defaultValue*/,
                query: false,
            }
        },
        methods: {
            updateValue() {
                this.$emit('input', this.inputValue);
            },
            menuInput(input) {
                this[input] = false;
            },
            trans(key, params) {
                params = params || {};
                return this.$t(`datatable.${key}`, params);
            },
        },
        watch: {
            filter:{
                immediate: true,
                handler(){
                    if (this.field.watch) {
                        this.query = {[this.field.watch]: this.filter};
                    }
                }
            },
            value: {
                immediate: true,
                handler(newval) {
                    this.inputValue = newval/* ?? this.field.defaultValue*/;
                },
            },
            inputValue: {
                immediate: true,
                handler() {
                    this.updateValue();
                }
            }
        },
        computed: {
            requiredParams() {
                if (this.field.retrieveOnNull || false) {
                    return false;
                }

                if (this.field.watch || false) {
                    return [this.field.watch];
                }

                return false;
            },
            center() {

                if (!this.field.hasOwnProperty('center')) {
                    return null;
                }

                if (!this.field.center.lat && typeof this.inputValue == 'string') {
                    let x = this.inputValue.split(',');
                    return {lat: x[0], lng: x[1]};
                } else if ((!this.field.center.lat) && typeof this.inputValue == 'object') {
                    return this.inputValue;
                }

                return this.field.center;
            }
        }
    }
</script>

<style scoped>

</style>

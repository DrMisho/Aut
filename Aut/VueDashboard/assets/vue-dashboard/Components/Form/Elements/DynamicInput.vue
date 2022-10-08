<template>
    <v-flex>
        <v-text-field v-if="type === 'text'" :label="`${inputLabel}`" type="text" v-model="inputValue" :rules="inputRules" :error-messages="errorMessages" :mask="info.mask"/>
        <v-text-field v-else-if="type === 'number'" :label="`${inputLabel}`" type="number" v-model="inputValue" :error-messages="errorMessages"/>
        <v-text-field v-else-if="type === 'url'" :label="`${inputLabel}`" type="url" v-model="inputValue" :error-messages="errorMessages"/>
        <phone-input v-else-if="type === 'phone'" :label="`${inputLabel}`" v-model="inputValue" :error-messages="errorMessages"/>
        <mobile-input v-else-if="type === 'mobile'" :label="`${inputLabel}`" v-model="inputValue" :error-messages="errorMessages"/>
        <v-textarea v-else-if="type === 'textarea'"
                    :label="`${inputLabel}`"
                    v-model="inputValue"
                    box
                    :error-messages="errorMessages"/>
        <select-input v-else-if="type === 'select'"
                      :label="inputLabel"
                      :no-data-text="$t('datatable.empty_select')"
                      v-model="inputValue"
                      :resource="info.resource"
                      :options="info.options"
                      :optionId="info.optionId"
                      :optionText="info.optionText"
                      :query="query"
                      :required-params="requiredParams"
                      :error-messages="errorMessages"
        />
        <v-switch v-else-if="type === 'switch'" :label="`${inputLabel}`" :color="info.color" v-model="inputValue" :error-messages="errorMessages"/>
        <v-autocomplete v-else-if="type === 'autocomplete'" :items="info.options" :label="inputLabel" :loading="info.loading" :search-input.sync="info.search" :no-data-text="$t('datatable.empty_select')" v-model="inputValue" :error-messages="errorMessages"/>
        <file-pond-input v-else-if="type === 'filepond'"
                :allow-multiple="info.multiple"
                :max-files="info.maxFiles"
                :multiple="info.multiple"
                :accepted-file-types="info.fileTypes"
                :label="trans('filepond_label', {name: inputLabel})"
                :allowReplace="true"
                :instantUpload="true"
                v-model="inputValue"
                :uploader="info.uploader"
        />
        <button-groups v-else-if="type === 'button_groups'"
                :options="info.options"
                :label="inputLabel"
                v-model="inputValue"
                color="primary"
                :item-text="info.optionText"
                :item-value="info.optionId"
                :multiple="info.multi"
                :mandatory="!info.clearable"
        />
        <v-menu v-else-if="type === 'date'"
                :close-on-content-click="false"
                :v-model="`${inputValue}_menu`"
                :nudge-right="40"
                lazy
                transition="scale-transition"
                offset-y
                full-width
                min-width="290px"
        >
            <v-text-field
                    slot="activator"
                    v-model="inputValue"
                    :label="`${inputLabel}`"
                    prepend-icon="event"
                    readonly
                    clearable
                    :error-messages="errorMessages"
            ></v-text-field>
            <v-date-picker v-model="inputValue" @input="menuInput(`${inputValue}_menu`)" color="primary"></v-date-picker>
        </v-menu>
    </v-flex>
</template>

<script>
    export default {
        name: "DynamicInput",
        props:{
            type: {
                type: String,
                require: true,
            },
            info: {
                type: Object,
            },
            value: {
                default: null
            },
            filter: {},
            errorMessages: {
                default: null
            }
        },
        data() {
            return {
                inputValue: this.value,
                // files: [],
                rules: {
                    required: value => !!value || this.$t('validations.required'),
                },
                query: false,
            };
        },
        computed: {
            inputRules() {
                let rules = this.info.rules || [];
                if (typeof rules === 'string') {
                    rules =  rules.split('|');
                }
                let activeRule = [];
                for (let i = 0; i < rules.length; i++) {
                    activeRule[i] = this.rules[rules[i]] || function (){return true}
                }
                return activeRule;
            },
            inputLabel() {
                let label = this.info.text;
                let rules = this.info.rules || [];
                if (typeof rules === 'string') {
                    rules =  rules.split('|');
                }
                if (rules.indexOf('required') !== -1) {
                    label = `${label} *`;
                }
                return label;
            },
            requiredParams() {
                if (this.info.watch) {
                    return [this.info.watch];
                }
                return false;
            }
        },
        methods: {
            updateValue() {
                this.$emit('input', this.inputValue);
            },
            menuInput(input) {
                this[input] = false;
            }
        },
        watch: {
            filter() {
                if (this.info.watch) {
                    this.query = {[this.info.watch]: this.filter};
                }
            },
            value(newval) {
                this.inputValue = newval;
            },
            inputValue() {
                this.updateValue();
            }
        }
    }
</script>

<style scoped>

</style>
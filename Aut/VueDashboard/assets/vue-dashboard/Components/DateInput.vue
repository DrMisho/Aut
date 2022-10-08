<template>
    <v-menu
        v-model="menu"
        :close-on-content-click="false"
        :nudge-right="40"
        lazy
        transition="scale-transition"
        offset-y
        full-width
        min-width="290px"
        v-bind="dateMenuAttr"
    >
        <template v-slot:activator="{ on }">
            <v-text-field
                v-on="{...on, ...$listeners}"
                v-bind="$attrs"
                v-model="inputValue"
                prepend-inner-icon="event"
                mask="####-##-##"
                return-masked-value
                @blur="checkValue"
            ></v-text-field>
        </template>
        <v-date-picker v-model="pickerValue" @input="menu = false" :color="color" v-bind="datePickerAttr"/>
    </v-menu>
</template>

<script>
    export default {
        name: "DateInput",
        inheritAttrs: false,
        props: {
            value: {},
            color: {
                default: 'primary'
            },
            datePickerAttr: {},
            dateMenuAttr: {},
        },
        data() {
            return {
                menu: false,
                inputValue: this.value,
                pickerValue: null,
            }
        },
        watch: {
            value: {
                immediate: true,
                handler(newval) {
                    if (newval && newval.match(/^\d{4}\-\d{2}\-\d{2}$/) && !moment(newval).isValid()) {
                        this.inputValue = null;
                    } else {
                        this.inputValue = newval;
                    }

                    if (newval && newval.match(/^\d{4}\-\d{2}\-\d{2}$/) && moment(newval).isValid()) {
                        this.pickerValue = newval;
                    } else if (!newval) {
                        this.pickerValue = null;
                    }
                }
            },
            inputValue(newval) {
                this.$emit('input', newval);
            },
            pickerValue(newval) {
                this.$emit('input', newval);
            },
        },
        methods: {
            checkValue() {
                if (this.inputValue && (!this.inputValue.match(/^\d{4}\-\d{2}\-\d{2}$/) || !moment(this.inputValue).isValid())) {
                    this.inputValue = null;
                }
            }
        }
    }
</script>

<style scoped>

</style>

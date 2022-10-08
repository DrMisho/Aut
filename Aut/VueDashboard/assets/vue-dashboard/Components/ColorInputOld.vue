<template>
    <v-menu v-model="picker" offset-y :close-on-content-click="false" :min-width="225">
        <template v-slot:activator="{ on }">
            <v-text-field type="text" v-model="color" v-on="on" :clearable="clearable" :label="label">
                <template v-slot:prepend-inner>
                    <v-avatar :color="color || 'black'" :size="20" />
                </template>
            </v-text-field>
        </template>
        <chrome-picker v-model="inputValue" />
    </v-menu>
</template>

<script>
    import {Chrome} from 'vue-color';

    export default {
        name: "ColorInput",
        components: {ChromePicker: Chrome},
        props: {
            value: {
                default: null,
            },
            clearable: {
                type: true,
                default: false,
            },
            label: {
                default: null,
            }
        },
        data() {
            return {
                inputValue: this.value,
                picker: false,
            };
        },
        computed: {
            color: {
                set(newVal) {
                    this.inputValue = newVal;
                },
                get() {
                    if (this.inputValue.hasOwnProperty('hex8')) {
                        return this.inputValue.hex8;
                    } else {
                        return this.inputValue;
                    }
                }
            }
        },
        watch: {
            value: {
                immediate: true,
                handler(newVal) {
                    if (newVal === null) {
                        newVal = '';
                    }
                    this.inputValue = newVal;
                }
            },
            inputValue: {
                deep: true,
                handler(newVal) {
                    if (newVal && newVal.hasOwnProperty('hex8')) {
                        this.$emit('input', newVal.hex8);
                    } else {
                        this.$emit('input', newVal);
                    }
                }
            },
        },
    }
</script>

<style scoped>

</style>
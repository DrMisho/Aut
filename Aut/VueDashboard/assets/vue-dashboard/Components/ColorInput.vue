<template>
    <v-menu v-model="picker" offset-y :close-on-content-click="false" :min-width="225">
        <template v-slot:activator="{ on }">
            <v-combobox
                v-on="{...on, ...$listeners}"
                v-bind="$attrs"
                v-model="color"
                :readonly="readonlyInput"
                :clearable="clearable"
                :label="label"
                :multiple="multiple"
                :append-icon="null"
            >
                <template v-slot:selection="data">
                    <v-chip
                        :small="smallChips"
                        :key="JSON.stringify(data.item)"
                        :selected="data.selected"
                        :disabled="data.disabled"
                        class="v-chip--select-multi"
                        @input="data.parent.selectItem(data.item)"
                        close
                        :color="avatarColored ? undefined : data.item"
                        :text-color="avatarColored ? undefined : `white`"
                    >
                        <v-avatar v-if="avatarColored"
                                  :color="data.item"
                                  class="white--text"
                                  v-text="data.item.slice(0, 1).toUpperCase()"
                        ></v-avatar>
                        {{ data.item }}
                    </v-chip>
                </template>
            </v-combobox>
        </template>
        <chrome-picker v-model="chromePicker" />
    </v-menu>
</template>

<script>
    import {Chrome} from 'vue-color';

    export default {
        name: "ColorInput",
        components: {ChromePicker: Chrome},
        inheritAttrs: false,
        props: {
            value: {
                default: null,
            },
            clearable: {
                type: Boolean,
                default: false,
            },
            label: {
                default: null,
            },
            multiple: {
                type: Boolean,
                default: false,
            },
            chips: {
                type: Boolean,
                default: false,
            },
            smallChips: {
                type: Boolean,
                default: true,
            },
            avatarColored: {
                type: Boolean,
                default: false,
            },
            preventWrite: {
                type: Boolean,
                default: false,
            },
            as: {
                default: 'string',
            }
        },
        data() {
            return {
                inputValue: this.value,
                picker: false,
            };
        },
        methods: {
            _() {
                return _;
            }
        },
        computed: {
            readonlyInput() {
                return this.preventWrite;
            },
            color: {
                set(newVal) {
                    this.inputValue = newVal;
                },
                get() {
                    if (this.multiple) {
                        return this.inputValue;
                    }
                    if (this.inputValue && this.inputValue.hasOwnProperty('hex8')) {
                        return this.inputValue.hex8;
                    } else {
                        return this.inputValue;
                    }
                }
            },
            chromePicker: {
                set(newVal) {
                    if (this.multiple) {
                        if (newVal) {
                            this.inputValue.push(newVal.hex8);
                        }
                    } else {
                        this.inputValue = newVal;
                    }
                },
                get() {
                    if (this.multiple) {
                        return this.inputValue[this.inputValue.length - 1] == null ? '' : this.inputValue[this.inputValue.length - 1];
                    }
                    return this.inputValue === null ? '' : this.inputValue;
                }
            }
        },
        watch: {
            value: {
                immediate: true,
                handler(newVal) {
                    if (newVal === null) {
                        newVal = this.multiple ? [] : null;
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

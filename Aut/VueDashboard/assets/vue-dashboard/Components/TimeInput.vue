<template>
    <v-menu
        ref="menu"
        v-model="menu"
        :return-value.sync="inputValue"
        :close-on-content-click="false"
        :nudge-right="40"
        lazy
        transition="scale-transition"
        offset-y
        full-width
        min-width="290px"
    >
        <template v-slot:activator="{ on }">
            <v-text-field
                v-on="{...on, ...$listeners}"
                v-bind="$attrs"
                v-model="inputValue"
                prepend-inner-icon="access_time"
                readonly
            ></v-text-field>
        </template>
        <v-time-picker v-model="inputValue" :color="color" scrollable v-bind="timePickerAttr">
            <v-spacer></v-spacer>
            <v-btn flat :color="color" @click="menu = false">{{ $t('app.cancel') }}</v-btn>
            <v-btn :color="color" @click="$refs.menu.save(inputValue)">{{ $t('app.save') }}</v-btn>
        </v-time-picker>
    </v-menu>
</template>

<script>
    export default {
        name: "TimeInput",
        inheritAttrs: false,
        props: {
            value: {},
            color: {
                default: 'primary'
            },
            timePickerAttr: {},
        },
        data() {
            return {
                menu: false,
                inputValue: this.value,
            }
        },
        watch: {
            value: {
                immediate: true,
                handler(newval) {
                    this.inputValue = newval;
                }
            },
            inputValue(newval) {
                this.$emit('input', newval);
            }
        }
    }
</script>

<style scoped>

</style>

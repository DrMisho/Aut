<template>
    <v-text-field v-model="inputValue" type="number" :min="1" :max="12" :label="title"/>
</template>

<script>
    export default {
        name: "WidthAttribute",
        props: {
            value: {},
            info: {},
            title: {},
        },
        data() {
            return {
                inputValue: null,
            };
        },
        methods: {

        },
        watch: {
            value: {
                immediate: true,
                handler(newval) {
                    this.inputValue = this.value;
                }
            },
            inputValue() {
                this.$emit('input', this.inputValue);
            }
        }
    }
</script>

<style scoped>

</style>
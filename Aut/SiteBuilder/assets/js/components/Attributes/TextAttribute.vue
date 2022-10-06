<template>
    <v-text-field v-model="inputValue" :label="title"/>
</template>

<script>
    export default {
        name: "TextAttribute",
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
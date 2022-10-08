<template>
    <v-switch v-model="inputValue" color="primary" :label="title"/>
</template>

<script>
    export default {
        name: "StatusAttribute",
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
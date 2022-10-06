<template>
    <select-input v-model="inputValue" resource="site-builder-slider" label="Slider" />
</template>

<script>
    export default {
        name: "SliderAttribute",
        props: {
            value: {},
            info: {},
            title: {},
            attributes: {},
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
        },
        mounted() {
            console.log(this.attributes);
        }
    }
</script>

<style scoped>

</style>
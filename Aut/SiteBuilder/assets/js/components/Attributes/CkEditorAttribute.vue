<template>
    <ckeditor-input v-model="inputValue" :label="title" :language="locale"/>
</template>

<script>
    export default {
        name: "CkEditorAttribute",
        props: {
            value: {
                default: null,
            },
            info: {},
            title: {},
            locale: {
                default() {
                    return this.$automata.config.language.locale;
                },
            }
        },
        data() {
            return {
                inputValue: {},
            };
        },
        methods: {

        },
        watch: {
            value: {
                immediate: true,
                handler (newVal) {
                    this.inputValue = newVal;
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

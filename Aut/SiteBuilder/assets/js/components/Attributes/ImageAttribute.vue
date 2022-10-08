<template>
    <file-pond-input
        :max-files="info.maxFiles"
        :multiple="info.multiple"
        :accepted-file-types="info.fileTypes"
        :label="title"
        :allowReplace="true"
        :instantUpload="true"
        v-model="inputValue"
        :uploader="info.uploader"
        :files="files"
    />
</template>

<script>
    export default {
        name: "ImageAttribute",
        props: {
            value: {},
            info: {},
            title: {},
        },
        data() {
            return {
                inputValue: null,
                files: [],
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
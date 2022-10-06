<template>
    <file-pond
            :ref="field.value"
            class="elevation-1"
            :allow-multiple="field.multiple"
            :max-files="field.maxFiles"
            :accepted-file-types="field.fileTypes"
            :label-idle="trans('filepond_label', {name: field.text})"
            :files="files"
            :allowReplace="true"
            :instantUpload="true"
            :server="server"
            @processfile="fileUploaded(field)"
            @removefile="fileRemoved(field)"
    />
</template>

<script>
    let headers = {
        "Accept-Language": automata.config.language.locale,
        "Accept": 'application/json',
        "X-Requested-With": 'XMLHttpRequest',
    };

    export default {
        name: "FilePond",
        data() {
            return {
                server:{
                    process: {
                        headers,
                        url: `api/file-upload?uploader=${field.uploader}`
                    },
                    load: {
                        headers,
                        url: `api/file-upload?uploader=${field.uploader}&file_id=`
                    },
                    revert: {
                        headers,
                        url: `api/file-upload/?uploader=${field.uploader}`
                    },
                }
            }
        }
    }
</script>

<style scoped>

</style>

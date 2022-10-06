<template>
    <file-pond
            class="elevation-1"
            :allow-multiple="multiple"
            :accepted-file-types="fileTypes"
            :max-files="maxFiles"
            :label-idle="labelIdle"
            :files="inputFiles"
            :allowReplace="allowReplace"
            :instantUpload="instantUpload"
            :server="server"
            @processfile="fileUploaded"
            @removefile="fileRemoved"
    />
</template>

<script>
    let headers = {
        "Accept-Language": automata.config.language.locale,
        "Accept": 'application/json',
        "X-Requested-With": 'XMLHttpRequest',
    };

    export default {
        name: "FilePondInput2",
        props: {
            value: {},
            uploader: {
                default: 'default',
            },
            multiple: {
                type: Boolean,
                default: false
            },
            maxFiles: {
                default: null
            },
            fileTypes: {
                default: undefined
            },
            label: {
                default: ''
            },
            allowReplace: {
                default: true
            },
            instantUpload: {
                default: true
            },
        },
        data() {
            return {
                files: [],
                inputValue: this.value,
                server: {
                    process: {headers, url: `api/file-upload?uploader=${this.uploader}`},
                    load: {headers, url: `api/file-upload?uploader=${this.uploader}&file_id=`},
                    revert: {headers, url: `api/file-upload/?uploader=${this.uploader}`},
                },
            };
        },
        computed: {
            inputFiles() {
                let f = [];
                let files = this.files;
                for (let i in files) {
                    f.push({
                        source: `${files[i]}`,
                        options: {
                            type: 'local',
                        },
                    })
                }
                return f;
            },
            labelIdle() {
                let label = this.label;//`Drag & Drop your ${this.label} or <span class=\'filepond--label-action\'> Browse</span>`;
                if (this.maxFiles) {
                    label = `${label} (${this.maxFiles} files maximum)`;
                }
                return label;
            }
        },
        methods: {
            fileUploaded(i, file) {
                if (!this.multiple) {
                    this.inputValue = file.serverId;
                    return;
                }
                if (this.inputValue === null && file.serverId) {
                    this.inputValue = [];
                }
                this.inputValue.push(file.serverId);
            },
            fileRemoved() {
                let files = this.$children[0].getFiles();
                console.log('fileRemoved', {inputValue: this.inputValue, files});

                if (!this.multiple) {
                    this.inputValue = files.length ? files[0].serverId : null;
                    return;
                }

                let serverIds =  [];

                for (let i in files) {
                    let file = files[i];
                    serverIds.push(file.serverId);
                }
                this.inputValue = serverIds;
            },
            updateValue() {
                this.$emit('input', this.inputValue);
            },
        },
        watch: {
            value: {
                immediate: true,
                handler(newval, oldval) {
                    console.log('value', `new(${newval}), old(${oldval})`);
                    this.inputValue = newval;
                    if (Array.isArray(this.inputValue)) {
                        this.files = this.inputValue;
                    } else {
                        this.files = this.inputValue ? [this.inputValue] : [];
                    }
                },
            },
            inputValue(newval, oldval) {
                console.log('inputValue', `new(${newval}), old(${oldval})`);
                this.updateValue();
            }
        },
    }
</script>

<style scoped>

</style>

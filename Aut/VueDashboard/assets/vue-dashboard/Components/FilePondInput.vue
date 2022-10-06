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
        :credits="null"
        @processfile="fileUploaded"
        @removefile="fileRemoved"
        @error="onerror"
        :disabled="disabled"
    />
</template>

<script>
let headers = {
    "Accept-Language": automata.config.language.locale,
    "Accept": 'application/json',
    "X-Requested-With": 'XMLHttpRequest',
};
// https://levelup.gitconnected.com/creating-a-custom-input-component-for-your-vuetify-form-2306ecfa8e78 """better way"""
export default {
    name: "FilePondInput",
    inject: ['form'],
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
        disabled: {
            type: Boolean,
            default: false,
        },
        files: {
            type: Array,
            default() {
                return [];
            }
        },
        rules: {
            type: Array,
            default() {
                return [];
            },
        },
        errorMessages: {
            default() {
                return [];
            }
        },
    },
    data() {
        return {
            inputValue: this.value,
            internalErrorMessages: [],
            errorBucket: [],
            isResetting: false,
            server: {
                process: {
                    headers,
                    url: `api/file-upload?uploader=${this.uploader}`,
                    // onerror: this.onerror,
                },
                load: {
                    headers,
                    url: `api/file-upload?uploader=${this.uploader}&file_id=`,
                    // onerror: this.onerror,
                },
                revert: {
                    headers,
                    url: `api/file-upload?uploader=${this.uploader}`,
                    // onerror: this.onerror,
                },
            },
            errorMessageTemplate(message) {
                return `
                    <div class="v-messages theme--light error--text">
                        <div class="v-messages__wrapper">
                            <div class="v-messages__message text-sm-center">${message}</div>
                        </div>
                    </div>
                `;
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
            if (this.internalErrorMessages.length) {
                label = `${label} <br> ${this.errorMessageTemplate(this.internalErrorMessages[0])}`;
            }
            return label;
        },
        hasError() {
            return !!(this.errorBucket && this.errorBucket.length);
        },
        error() {
            return !!(this.internalErrorMessages && this.internalErrorMessages.length);
        },
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
            if (!this.multiple) {
                this.inputValue = null;
                return;
            }
            let serverIds =  [];
            let files = this.$children[0].getFiles();
            for (let i in files) {
                let file = files[i];
                serverIds.push(file.serverId);
            }
            this.inputValue = serverIds;
        },
        updateValue() {
            this.$emit('input', this.inputValue);

            this.validateErrorBucket();
            if (!this.isResetting) {
                this.validate();
            } else {
                this.$nextTick(() => this.isResetting = false);
            }
        },
        onerror(response) {
            this.$notification.error(response.body);
        },
        validate() {
            this.internalErrorMessages = [];
            for (let index = 0; index < this.rules.length; index++) {
                const rule = this.rules[index];
                const valid = typeof rule === 'function' ? rule(this.inputValue) : rule;

                if (typeof valid === 'string') {
                    this.internalErrorMessages.push(valid);
                } else if (typeof valid !== 'boolean') {
                    console.error(`Rules should return a string or boolean, received '${typeof valid}' instead`, this);
                }
            }
            return !this.error;
        },
        validateErrorBucket() {
            this.errorBucket = [];
            for (let index = 0; index < this.rules.length; index++) {
                const rule = this.rules[index];
                const valid = typeof rule === 'function' ? rule(this.inputValue) : rule;

                if (typeof valid === 'string') {
                    this.errorBucket.push(valid);
                } else if (typeof valid !== 'boolean') {
                    console.error(`Rules should return a string or boolean, received '${typeof valid}' instead`, this);
                }
            }
            return this.hasError;
        },
        clear() {
            if (!this.multiple) {
                this.inputValue = null;
            } else {
                this.inputValue = [];
            }
        },
        reset() {
            this.isResetting = true;
            this.internalErrorMessages = [];
            this.clear();
            return this.hasError;
        },
    },
    watch: {
        value: {
            immediate: true,
            handler(newval) {
                this.inputValue = newval;
            },
        },
        inputValue(newval) {
            this.updateValue();
        },
        internalErrorMessages() {
            this.$emit('update:error', !!this.internalErrorMessages.length);
        },
        errorMessages: {
            deep: true,
            handler(newval) {
                if (newval === null) {
                    this.internalErrorMessages = [];
                } else if(!Array.isArray(newval)) {
                    this.internalErrorMessages = [newval];
                } else{
                    this.internalErrorMessages = newval;
                }
            }
        },
    },
    created () {
        this.form && this.form.register(this);
        this.validateErrorBucket();
    },
    beforeDestroy () {
        this.form && this.form.unregister(this)
    },
}
</script>

<style scoped>

</style>

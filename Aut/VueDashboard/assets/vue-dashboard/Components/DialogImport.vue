<template>
    <v-dialog v-model="dialog" :width="width" scrollable>
        <v-card>
            <v-card-title class="headline grey lighten-2" primary-title>
                Import
            </v-card-title>

            <v-card-text>
                <file-pond-input label="Upload File" v-model="form.file_id" :files="files" :uploader="uploader"/>
                <slot :form="form" />
            </v-card-text>

            <v-divider />

            <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn :disabled="disabled" flat @click="dialog = false">close</v-btn>
                <v-btn :disabled="disabled" tag="a" download :href="templatePath" color="error">Download Template</v-btn>
                <v-btn :disabled="disableImporting" :loading="importing" color="primary" @click="importData">Import</v-btn>
            </v-card-actions>
        </v-card>
    </v-dialog>
</template>

<script>
export default {
    name: "DialogImport",
    props: {
        width: {
            default: '500',
        },
        value: {
            type: Boolean,
            default: false
        },
        uploader: {
            required: true,
        },
        templatePath: {
            required: true,
        },
        url: {
            required: true,
        },
        extraData: {
            default() {
                return {};
            },
        },
    },
    data() {
        return {
            importing: false,
            dialog: false,
            files: [],
            form: {
                file_id: null,
                neighborhood: false,
                family_relation: false,
            },
        };
    },
    computed: {
        disabled() {
            return this.importing;
        },
        disableImporting() {
            return !this.form.file_id;
        }
    },
    watch: {
        dialog: {
            handler(val) {
                this.$emit('input', val);
            },
        },
        value: {
            immediate: true,
            handler(val) {
                this.dialog = val;
            },
        },
    },
    methods: {
        importData() {
            this.importing = true;
            this.$http
                .post(this.url, {...this.form, ...{uploader: this.uploader}})
                .then(res => {
                    this.$notification.show(`Success Import: ${res.data.success.length}, Failed Import: ${res.data.errors.length}`);
                    this.$emit('imported', res.data);
                })
                .finally(() => this.importing = false);
        }
    },
    beforeMount() {
        for (let key in this.extraData) {
            this.$set(this.form, key, this.extraData[key]);
        }
    }
}
</script>

<style scoped>

</style>

<template>
    <v-flex shrink>
        <data-table
            ref="beneficiaries"
            source="beneficiaries"
            @import="importAction"
            @addBeneficiary="addBeneficiary"
            @editBeneficiary="editBeneficiary"
        />
        <beneficiary-form :dialog.sync="dialog.form" v-model="form" @saved="saved"/>
        <dialog-import
            v-model="dialog.import"
            :uploader="uploader"
            :template-path="template_path"
            :url="url"
            @imported="imported"
            :extra-data="{neighborhood: false, family_relation: false, family_ranking: false, beneficiary_category: false}"
        >
            <template v-slot:default="{ form }">
                <v-list subheader two-line>
                    <v-subheader>{{ $t('organization.import_options') }}</v-subheader>

                    <v-list-tile @click="">
                        <v-list-tile-action>
                            <v-checkbox color="primary" v-model="form.neighborhood"></v-checkbox>
                        </v-list-tile-action>

                        <v-list-tile-content @click="form.neighborhood = !form.neighborhood">
                            <v-list-tile-title>{{ $t('organization.add_neighborhood') }}</v-list-tile-title>
                            <v-list-tile-sub-title>{{ $t('organization.add_neighborhood') + ' ' + $t('organization.as_new_one') }}</v-list-tile-sub-title>
                        </v-list-tile-content>
                    </v-list-tile>

                    <v-list-tile @click="">
                        <v-list-tile-action>
                            <v-checkbox color="primary" v-model="form.family_relation"></v-checkbox>
                        </v-list-tile-action>

                        <v-list-tile-content @click="form.family_relation = !form.family_relation">
                            <v-list-tile-title>{{ $t('organization.add_family_relation') }}</v-list-tile-title>
                            <v-list-tile-sub-title>{{ $t('organization.add_family_relation') + ' ' + $t('organization.as_new_one') }}</v-list-tile-sub-title>
                        </v-list-tile-content>
                    </v-list-tile>

                    <v-list-tile @click="">
                        <v-list-tile-action>
                            <v-checkbox color="primary" v-model="form.family_ranking"></v-checkbox>
                        </v-list-tile-action>

                        <v-list-tile-content @click="form.family_ranking = !form.family_ranking">
                            <v-list-tile-title>{{ $t('organization.add_family_ranking') }}</v-list-tile-title>
                            <v-list-tile-sub-title>{{ $t('organization.add_family_ranking') + ' ' + $t('organization.as_new_one') }}</v-list-tile-sub-title>
                        </v-list-tile-content>
                    </v-list-tile>

                    <v-list-tile @click="">
                        <v-list-tile-action>
                            <v-checkbox color="primary" v-model="form.beneficiary_category"></v-checkbox>
                        </v-list-tile-action>

                        <v-list-tile-content @click="form.beneficiary_category = !form.beneficiary_category">
                            <v-list-tile-title>{{ $t('organization.add_beneficiary_category') }}</v-list-tile-title>
                            <v-list-tile-sub-title>{{ $t('organization.add_beneficiary_category') + ' ' + $t('organization.as_new_one') }}</v-list-tile-sub-title>
                        </v-list-tile-content>
                    </v-list-tile>
                </v-list>
            </template>
        </dialog-import>
        <v-dialog v-model="dialog.result" width="900" scrollable>
            <v-card>
                <v-card-title class="headline grey lighten-2" primary-title>
                    Result
                </v-card-title>

                <v-card-text>
                    <v-alert :value="true" type="warning" dismissible>
                        {{ `Success Import: ${success.length}, Failed Import: ${errors.length}` }}
                    </v-alert>
                    <ol>
                        <template v-for="(message, i) in errors">
                            <li>{{ message }}</li>
                        </template>
                    </ol>
                </v-card-text>

                <v-divider />

                <v-card-actions>
                    <v-spacer></v-spacer>
                    <v-btn :disabled="disabled" flat @click="dialog.result = false">close</v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog>
    </v-flex>
</template>

<script>
    import BeneficiaryForm from "./BeneficiaryForm";
    export default {
        name: "Beneficiaries",
        components: {BeneficiaryForm},
        data() {
            return {
                importing: false,
                dialog: {
                    form: false,
                    import: false,
                    result: false,
                },
                files: [],
                file_id: null,
                uploader: 'beneficiary_import',
                template_path: 'storage/import_templates/beneficiaries.xlsx',
                url: 'api/organizations/beneficiary/import',
                form: {
                    id: null,
                },
                errors: [],
                success: [],
            };
        },
        computed: {
            disabled() {
                return this.importing;
            }
        },
        methods: {
            importAction() {
                this.dialog.import = true;
            },
            imported(res) {
                this.errors = res.errors;
                this.success = res.success;
                this.dialog.result = true;
                this.$refs.beneficiaries.fetchDataSource();
            },
            editBeneficiary(row) {
                this.dialog.form = true;
                this.form = row;
            },
            addBeneficiary() {
                this.dialog.form = true;
                this.form = {
                    id: null,
                };
            },
            saved() {
                this.dialog.form = false;
                this.$refs.beneficiaries.fetchDataSource();
            }
        },
    }
</script>

<style scoped>

</style>

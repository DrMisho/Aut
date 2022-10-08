<template>
    <v-dialog v-model="vDialog" width="1100" scrollable>
        <v-card>
            <v-card-title class="headline primary elevation-5">
                <span style="color: white;" class="headline">{{ $t('app.add') + ' ' + $t('organization.beneficiary')  }}</span>
                <v-spacer/>
                <v-btn :disabled="disabled" icon dark flat @click.native="cancel"><v-icon>fas fa-times-circle</v-icon></v-btn>
            </v-card-title>

            <v-card-text>
                <v-container grid-list-xs text-xs-center>
                    <v-layout row wrap justify-space-between>
                        <v-flex xs12 sm3>
                            <h4>{{ $t('organization.father_info') }}</h4>
                            <v-layout row wrap>
                                <v-flex xs12>
                                    <v-text-field
                                        name="father_name"
                                        v-model="form.father_name"
                                        :label="$t('organization.name')"
                                    ></v-text-field>
                                </v-flex>
                                <v-flex xs12>
                                    <v-text-field
                                        name="father_name"
                                        v-model="form.father_national_number"
                                        :label="$t('organization.national_number')"
                                    ></v-text-field>
                                </v-flex>
                            </v-layout>
                        </v-flex>
                        <v-divider vertical/>
                        <v-flex xs12 sm3>
                            <h4>{{ $t('organization.mother_info') }}</h4>
                            <v-layout row wrap>
                                <v-flex xs12>
                                    <v-text-field
                                        name="mother_name"
                                        v-model="form.mother_name"
                                        :label="$t('organization.name')"
                                    ></v-text-field>
                                </v-flex>
                                <v-flex xs12>
                                    <v-text-field
                                        name="mother_name"
                                        v-model="form.mother_national_number"
                                        :label="$t('organization.national_number')"
                                    ></v-text-field>
                                </v-flex>
                            </v-layout>
                        </v-flex>
                        <v-divider vertical/>
                        <v-flex xs12 sm3>
                            <h4>{{ $t('organization.breadwinner_info') }}</h4>
                            <v-layout row wrap>
                                <v-flex xs12>
                                    <v-text-field
                                        name="breadwinner_name"
                                        v-model="form.breadwinner_name"
                                        :label="$t('organization.name')"
                                    ></v-text-field>
                                </v-flex>
                                <v-flex xs12>
                                    <v-text-field
                                        name="breadwinner_name"
                                        v-model="form.breadwinner_national_number"
                                        :label="$t('organization.national_number')"
                                    ></v-text-field>
                                </v-flex>
                                <v-flex xs12>
                                    <select-input resource="family-relation" v-model="form.family_relation_id" :label="$t('organization.family_relation')" />
                                </v-flex>
                            </v-layout>
                        </v-flex>
                    </v-layout>
                    <v-layout row wrap justify-center>
                        <v-flex xs12 sm8 mt-4>
                            <h4>{{ $t('organization.family_info') }}</h4>
                            <v-layout row wrap>
                                <v-flex xs12 sm6>
                                    <v-text-field
                                        name="family_number"
                                        v-model="form.family_number"
                                        :label="$t('organization.family_number')"
                                    ></v-text-field>
                                </v-flex>
                                <v-flex xs12 sm6>
                                    <mobile-input
                                        name="family_mobile"
                                        v-model="form.family_mobile"
                                        :label="$t('organization.mobile')"
                                    ></mobile-input>
                                </v-flex>
                                <v-flex xs12 sm6>
                                    <v-text-field
                                        name="beneficiary_count"
                                        v-model="form.beneficiary_count"
                                        :label="$t('organization.beneficiary_count')"
                                    ></v-text-field>
                                </v-flex>
                                <v-flex xs12 sm6>
                                    <autocomplete resource="neighborhoods" v-model="form.living_location_id" :label="$t('organization.living_location')" />
                                </v-flex>
                                <v-flex xs12 sm6>
                                    <select-input resource="beneficiary-categories" v-model="form.beneficiary_category_id" :label="$t('organization.beneficiary_category')" />
                                </v-flex>
                                <v-flex xs12 sm6>
                                    <select-input resource="family-ranking" v-model="form.family_ranking_id" :label="$t('organization.family_ranking')" />
                                </v-flex>
                                <v-flex xs12 sm6>
                                    <date-input name="registered_at" v-model="form.registered_at" :label="$t('organization.registered_at')" />
                                </v-flex>
                            </v-layout>
                        </v-flex>
                    </v-layout>
                </v-container>
            </v-card-text>

            <v-divider />

            <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn flat :disabled="disabled" @click="cancel">{{ $t('app.cancel') }}</v-btn>
                <v-btn :loading="vLoading" color="primary" @click="save">{{ $t('app.save') }}</v-btn>
            </v-card-actions>
        </v-card>
    </v-dialog>
</template>

<script>
    export default {
        name: "BeneficiaryForm",
        props: {
            loading: {
                default: false,
                type: Boolean,
            },
            dialog: {
                default: false,
                type: Boolean,
            },
            value: {
                default() {
                    return {
                        id: null,
                    };
                },
                type: Object,
            },
        },
        data() {
            return {
                vLoading: false,
                vDialog: false,
                form: {
                    id: null,
                },
            };
        },
        computed: {
            disabled() {
                return this.vLoading;
            }
        },
        methods: {
            save() {
                this.vLoading = true;
                let request = null;
                if (this.form.id) {
                    request = this.$http.put(`api/organizations/beneficiary/${this.form.id}`, this.form);
                } else {
                    request = this.$http.post(`api/organizations/beneficiary`, this.form);
                }
                return request
                    .then(res => {
                        this.vDialog = false;
                        this.$notification.success(this.$t('message.operation_done'));
                        this.$emit('saved');
                    })
                    .finally(() => this.vLoading = false);
            },
            cancel() {
                this.vDialog = false;
            }
        },
        watch: {
            value: {
                deep: true,
                immediate: true,
                handler(val) {
                    this.form = val;
                }
            },
            form: {
                deep: true,
                handler(val) {
                    this.$emit('input', val);
                }
            },
            dialog: {
                immediate: true,
                handler(val) {
                    this.vDialog = val;
                }
            },
            vDialog: {
                handler(val) {
                    this.$emit('update:dialog', val);
                }
            },
            loading: {
                immediate: true,
                handler(val) {
                    this.vLoading = val;
                }
            },
            vLoading: {
                handler(val) {
                    this.$emit('update:loading', val);
                }
            }
        },
    }
</script>

<style scoped>

</style>

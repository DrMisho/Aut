<template>
    <div>
        <card-list :items="items" :title="trans('bank_accounts')" @btnClicked="addBank" :loading="loading" :no-result="trans('add_your_first_bank_information')" empty-state-src="images/empty-states/banks.svg" empty-state-aspect-ratio="1.8">
            <template slot-scope="{item}">
                <v-flex md3 sm4 xs12>
                    <v-card>
                        <v-card-title>
                            <div>
                                <h3 class="headline mb-0">{{ item.bank }}</h3>
                                <div>{{ item.bank_branch }}</div>
                                <div class="grey--text">{{ item.bank_account_type }}</div>
                            </div>
                        </v-card-title>
                        <v-card-actions>
                            <v-spacer></v-spacer>
                            <v-btn @click="editBank(item)" flat icon color="success"><v-icon>edit</v-icon></v-btn>
                            <v-btn @click="deleteBank(item)" flat icon color="red"><v-icon >delete</v-icon></v-btn>
                        </v-card-actions>
                    </v-card>
                </v-flex>
            </template>
        </card-list>
        <confirm :opened="confirm" @confirmed="deleteConfirmed" @closed="deleteCanceled"></confirm>
        <v-dialog v-model="dialog" scrollable max-width="600px">
            <v-card>
                <v-card-title class="headline primary elevation-5" primary-title>
                    <span style="color: white;" class="headline">{{ trans('bank_information') }}</span>
                </v-card-title>
                <v-card-text>
                    <v-container grid-list-md>
                        <v-form ref="form">
                            <v-layout wrap>
                                <v-flex xs12 sm6>
                                    <v-select
                                            name="bank_id"
                                            v-model="form.bank_id"
                                            :label="`${trans('bank')} *`"
                                            :items="banks"
                                            item-text="bank"
                                            item-value="id"
                                            @change="form.bank_branch_id = null"
                                            :rules="[rules.required]"
                                    ></v-select>
                                </v-flex>
                                <v-flex xs12 sm6>
                                    <v-select
                                            name="bank_branch_id"
                                            v-model="form.bank_branch_id"
                                            :label="`${trans('bank_branch')} *`"
                                            :items="branches"
                                            item-text="bank_branch"
                                            item-value="id"
                                            :disabled="!form.bank_id"
                                            :loading="fetchingBankBranches"
                                            :rules="[rules.required]"
                                    ></v-select>
                                </v-flex>
                                <v-flex xs12 sm6>
                                    <v-select
                                            name="bank_account_type_id"
                                            v-model="form.bank_account_type_id"
                                            :label="`${trans('bank_account_type')} *`"
                                            :items="accountTypes"
                                            item-text="bank_account_type"
                                            item-value="id"
                                            :rules="[rules.required]"
                                    ></v-select>
                                </v-flex>
                            </v-layout>
                            <v-layout wrap>
                                <v-flex xs12 sm6>
                                    <v-text-field
                                            name="account_number"
                                            v-model="form.account_number"
                                            :label="`${trans('account_number')} *`"
                                            :rules="[rules.required]"
                                    ></v-text-field>
                                </v-flex>
                                <v-flex xs12 sm6>
                                    <v-text-field
                                            name="iban"
                                            v-model="form.iban"
                                            :label="`${trans('iban')} *`"
                                            :rules="[rules.required]"
                                    ></v-text-field>
                                </v-flex>
                            </v-layout>
                        </v-form>
                    </v-container>
                </v-card-text>
                <v-divider />
                <v-card-actions>
                    <v-spacer></v-spacer>
                    <v-btn flat @click="dialog = false">{{ $t('app.cancel') }}</v-btn>
                    <v-btn @click="saveBankAccount" :loading="loading" color="primary" flat>{{ $t('app.save') }}</v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog>
    </div>
</template>

<script>
    export default {
        name: "Banks",
        data() {
            return {
                dialog: false,
                confirm: false,
                loading: false,
                fetchingBankBranches: false,
                items: [],
                banks: [],
                branches: [],
                accountTypes: [],
                form: {
                    'id': null,
                    'bank_id': null,
                    'bank_branch_id': null,
                    'bank_account_type_id': null,
                    'account_number': null,
                    'iban': null,
                },
                emptyForm: {
                    'id': null,
                    'bank_id': null,
                    'bank_branch_id': null,
                    'bank_account_type_id': null,
                    'account_number': null,
                    'iban': null,
                },
                rules: {
                    required: value => !!value || this.$t('validations.required'),
                }
            };
        },
        mounted() {
            this.getUserBanks();
            this.getBanks();
            this.getBankAccountTypes();

        },
        watch: {
            'form.bank_id': {
                handler() {
                    this.getBankBranches();
                }
            },
        },
        methods: {
            getUserBanks(){
                this.loading = true;
                this.$http.get('api/profile/finance/banks').then(res => this.items = res.data.data).finally(() => this.loading = false);
            },
            getBanks(){
                this.$http.get('api/banks').then(res => this.banks = res.data.data);
            },
            getBankAccountTypes(){
                this.$http.get('api/account-types').then(res => this.accountTypes = res.data.data);
            },
            getBankBranches() {
                if (this.form.bank_id) {
                    this.fetchingBankBranches = true;
                    this.$http
                        .get(`api/banks/${this.form.bank_id}/branches`)
                        .then(res => this.branches = res.data.data)
                        .finally(() => this.fetchingBankBranches = false);
                }
            },
            addBank() {
                this.dialog = true;
                this.form = this.cloneObject(this.emptyForm);
            },
            editBank(bankInfo){
                this.form = bankInfo;
                this.dialog = true;
            },
            deleteBank(bankInfo) {
                this.form = bankInfo;
                this.confirm = true;
            },
            saveBankAccount() {
                if (!this.$refs.form.validate()) {
                    return;
                }
                this.loading = true;
                if (this.form.id) {
                    this.update();
                } else {
                    this.store();
                }
            },
            store() {
                this.$http
                    .post('api/profile/finance/banks', this.form)
                    .then(res => {
                        this.$notification.success(this.$t('message.operation_done'));
                        this.getUserBanks();
                        this.dialog = false;
                    })
                    .catch(res => this.$notification.error(this.$t('message.operation_failed')))
                    .finally(() => this.loading = false);
            },
            update() {
                this.$http
                    .put(`api/profile/finance/banks/${this.form.id}`, this.form)
                    .then(res => {
                        this.$notification.success(this.$t('message.operation_done'));
                        this.getUserBanks();
                        this.dialog = false;
                    })
                    .catch(res => this.$notification.error(this.$t('message.operation_failed')))
                    .finally(() => this.loading = false);
            },
            destroy() {
                this.$http
                    .delete(`api/profile/finance/banks/${this.form.id}`)
                    .then(res => {
                        this.$notification.success(this.$t('message.operation_done'));
                        this.getUserBanks();
                    })
                    .catch(res => this.$notification.error(this.$t('message.operation_failed')))
                    .finally(() => {});
            },
            deleteCanceled() {
                this.confirm = false;
            },
            deleteConfirmed() {
                this.destroy();
                this.confirm = false;
            },
            cloneObject($obj) {
                return JSON.parse(JSON.stringify($obj));
            },
            trans(key) {
                return this.$t(`profiles.finance.${key}`);
            }
        }
    }
</script>

<style scoped>

</style>
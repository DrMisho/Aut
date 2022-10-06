<template>
    <div>
        <card-list :items="items" :title="trans('prepaid_credit_cards')" @btnClicked="addPrepaidCreditCard" :loading="loading" :no-result="trans('add_your_first_prepaid_credit_card')" empty-state-src="images/empty-states/credit_cards.png" empty-state-aspect-ratio="2">
            <template slot-scope="{item}">
                <v-flex md3 sm4 xs12>
                    <v-card>
                        <v-card-title>
                            <div>
                                <h3 class="headline mb-0">{{ item.card_name }}</h3>
                                <div>{{ item.number }}</div>
                                <div>{{ item.amount }} {{ item.currency }}</div>
                                <div class="grey--text">{{ item.expiration_date }}</div>
                            </div>
                        </v-card-title>
                        <v-card-actions>
                            <v-spacer></v-spacer>
                            <v-btn @click="editPrepaidCreditCard(item)" flat icon color="success"><v-icon>edit</v-icon></v-btn>
                            <v-btn @click="deletePrepaidCreditCard(item)" flat icon color="red"><v-icon >delete</v-icon></v-btn>
                        </v-card-actions>
                    </v-card>
                </v-flex>
            </template>
        </card-list>
        <confirm :opened="confirm" @confirmed="deleteConfirmed" @closed="deleteCanceled"></confirm>
        <v-dialog v-model="dialog" scrollable max-width="600px">
            <v-card>
                <v-card-title class="headline primary elevation-5" primary-title>
                    <span style="color: white;" class="headline">{{ trans('prepaid_credit_card') }}</span>
                </v-card-title>
                <v-card-text>
                    <v-container grid-list-md>
                        <v-form ref="form">
                            <v-layout wrap>
                                <v-flex xs12 sm6>
                                    <v-text-field
                                            name="card_name"
                                            v-model="form.card_name"
                                            :label="`${trans('card_name')} *`"
                                            :rules="[rules.required]"
                                    ></v-text-field>
                                </v-flex>
                                <v-flex xs12 sm6>
                                    <v-text-field
                                            name="number"
                                            v-model="form.number"
                                            :label="`${trans('card_number')} *`"
                                            mask="credit-card"
                                            :rules="[rules.required]"
                                    ></v-text-field>
                                </v-flex>
                                <v-flex xs12 sm6>
                                    <v-text-field
                                            name="amount"
                                            v-model="form.amount"
                                            :label="`${trans('card_amount')} *`"
                                            :rules="[rules.required]"
                                    ></v-text-field>
                                </v-flex>
                                <v-flex xs12 sm6>
                                    <select-input
                                            dense
                                            name="currency_id"
                                            :label="`${trans('currency')} *`"
                                            v-model="form.currency_id"
                                            :resource="`currencies`"
                                    ></select-input>
                                </v-flex>
                            </v-layout>
                            <v-layout wrap>
                                <v-flex xs12 sm6>
                                    <v-text-field
                                            name="sequence_number"
                                            v-model="form.sequence_number"
                                            :label="`${trans('sequence_number')} *`"
                                            :rules="[rules.required]"
                                    ></v-text-field>
                                </v-flex>
                                <v-flex xs12 sm6>
                                    <v-text-field
                                            name="expiration_date"
                                            v-model="form.expiration_date"
                                            :label="`${trans('expiration_date')} *`"
                                            :hint="trans('expiration_date_hint')"
                                            persistent-hint
                                            mask="##/##"
                                            return-masked-value
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
                    <v-btn @click="savePrepaidCreditCard" :loading="loading" color="primary" flat>{{ $t('app.save') }}</v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog>
    </div>
</template>

<script>
    export default {
        name: "PrepaidCreditCards",
        data() {
            return {
                dialog: false,
                confirm: false,
                loading: false,
                items: [],
                form: {
                    'id': null,
                    'card_name': null,
                    'number': null,
                    'amount': null,
                    'sequence_number': null,
                    'expiration_date': null,
                    'currency_id': null,
                },
                emptyForm: {
                    'id': null,
                    'card_name': null,
                    'number': null,
                    'amount': null,
                    'sequence_number': null,
                    'expiration_date': null,
                    'currency_id': null,
                },
                rules: {
                    required: value => !!value || this.$t('validations.required'),
                }
            };
        },
        mounted() {
            this.getUserPrepaidCreditCards();
        },
        methods: {
            getUserPrepaidCreditCards(){
                this.loading = true;
                this.$http.get('api/profile/finance/prepaid-credit-cards').then(res => this.items = res.data.data).finally(() => this.loading = false);
            },
            addPrepaidCreditCard() {
                this.dialog = true;
                this.form = this.cloneObject(this.emptyForm);
            },
            editPrepaidCreditCard(cardInfo){
                this.form = cardInfo;
                this.dialog = true;
            },
            deletePrepaidCreditCard(cardInfo) {
                this.form = cardInfo;
                this.confirm = true;
            },
            savePrepaidCreditCard() {
                if (!this.$refs.form.validate()) {
                    return ;
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
                    .post('api/profile/finance/prepaid-credit-cards', this.form)
                    .then(res => {
                        this.$notification.success(this.$t('message.operation_done'));
                        this.getUserPrepaidCreditCards();
                        this.dialog = false;
                    })
                    .catch(res => this.$notification.error(this.$t('message.operation_failed')))
                    .finally(() => this.loading = false);
            },
            update() {
                this.$http
                    .put(`api/profile/finance/prepaid-credit-cards/${this.form.id}`, this.form)
                    .then(res => {
                        this.$notification.success(this.$t('message.operation_done'));
                        this.getUserPrepaidCreditCards();
                        this.dialog = false;
                    })
                    .catch(res => this.$notification.error(this.$t('message.operation_failed')))
                    .finally(() => this.loading = false);
            },
            destroy() {
                this.$http
                    .delete(`api/profile/finance/prepaid-credit-cards/${this.form.id}`)
                    .then(res => {
                        this.$notification.success(this.$t('message.operation_done'));
                        this.getUserPrepaidCreditCards();
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

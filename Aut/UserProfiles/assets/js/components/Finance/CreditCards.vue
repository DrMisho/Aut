<template>
    <div>
        <card-list :items="items" :title="trans('credit_cards')" @btnClicked="addCreditCard" :loading="loading" :no-result="trans('add_your_first_credit_card')" empty-state-src="images/empty-states/credit_cards.png" empty-state-aspect-ratio="2">
            <template slot-scope="{item}">
                <v-flex md3 sm4 xs12>
                    <v-card>
                        <v-img :src="item.credit_card_type_image" aspect-ratio="2.75" />
                        <v-card-title>
                            <div>
                                <h3 class="headline mb-0">{{ item.holder }}</h3>
                                <div>{{ item.number }}</div>
                                <div class="grey--text">{{ item.expiration_date }}</div>
                            </div>
                        </v-card-title>
                        <v-card-actions>
                            <v-spacer></v-spacer>
                            <v-btn @click="editCreditCard(item)" flat icon color="success"><v-icon>edit</v-icon></v-btn>
                            <v-btn @click="deleteCreditCard(item)" flat icon color="red"><v-icon >delete</v-icon></v-btn>
                        </v-card-actions>
                    </v-card>
                </v-flex>
            </template>
        </card-list>
        <confirm :opened="confirm" @confirmed="deleteConfirmed" @closed="deleteCanceled"></confirm>
        <v-dialog v-model="dialog" scrollable max-width="600px">
            <v-card>
                <v-card-title class="headline primary elevation-5">
                    <span style="color: white;" class="headline">{{ trans('credit_card') }}</span>
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
                                    <v-select
                                            name="credit_card_type_id"
                                            v-model="form.credit_card_type_id"
                                            :label="`${trans('credit_card_type')} *`"
                                            :items="creditCardTypes"
                                            item-text="credit_card_type"
                                            item-value="id"
                                            :rules="[rules.required]"
                                    ></v-select>
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
                            </v-layout>
                            <v-layout wrap>
                                <v-flex xs12 sm6>
                                    <v-text-field
                                            name="holder"
                                            v-model="form.holder"
                                            :label="`${trans('card_holder')} *`"
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
                    <v-btn @click="saveCreditCard" :loading="loading" color="primary" flat>{{ $t('app.save') }}</v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog>
    </div>
</template>

<script>
    export default {
        name: "CreditCards",
        data() {
            return {
                dialog: false,
                confirm: false,
                loading: false,
                items: [],
                creditCardTypes: [],
                form: {
                    'id': null,
                    'card_name': null,
                    'credit_card_type_id': null,
                    'number': null,
                    'holder': null,
                    'expiration_date': null,
                },
                emptyForm: {
                    'id': null,
                    'name': null,
                    'number': null,
                    'holder': null,
                    'expiration_date': null,
                    'credit_card_type_id': null,
                },
                rules: {
                    required: value => !!value || this.$t('validations.required'),
                }
            };
        },
        mounted() {
            this.getUserCreditCards();
            this.getCreditCardTypes();
        },
        methods: {
            getUserCreditCards(){
                this.loading = true;
                this.$http.get('api/profile/finance/credit-cards').then(res => this.items = res.data.data).finally(() => this.loading = false);
            },
            getCreditCardTypes(){
                this.$http.get('api/credit-card-types').then(res => this.creditCardTypes = res.data.data);
            },
            addCreditCard() {
                this.dialog = true;
                this.form = this.cloneObject(this.emptyForm);
            },
            editCreditCard(cardInfo){
                this.form = cardInfo;
                this.dialog = true;
            },
            deleteCreditCard(cardInfo) {
                this.form = cardInfo;
                this.confirm = true;
            },
            saveCreditCard() {
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
                    .post('api/profile/finance/credit-cards', this.form)
                    .then(res => {
                        this.$notification.success(this.$t('message.operation_done'));
                        this.getUserCreditCards();
                        this.dialog = false;
                    })
                    .catch(res => this.$notification.error(this.$t('message.operation_failed')))
                    .finally(() => this.loading = false);
            },
            update() {
                this.$http
                    .put(`api/profile/finance/credit-cards/${this.form.id}`, this.form)
                    .then(res => {
                        this.$notification.success(this.$t('message.operation_done'));
                        this.getUserCreditCards();
                        this.dialog = false;
                    })
                    .catch(res => this.$notification.error(this.$t('message.operation_failed')))
                    .finally(() => this.loading = false);
            },
            destroy() {
                this.$http
                    .delete(`api/profile/finance/credit-cards/${this.form.id}`)
                    .then(res => {
                        this.$notification.success(this.$t('message.operation_done'));
                        this.getUserCreditCards();
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
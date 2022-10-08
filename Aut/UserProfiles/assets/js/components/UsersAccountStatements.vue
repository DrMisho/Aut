<template>
    <v-flex shrink>
        <button-groups
            v-model="currency"
            :options="currencies"
            item-id="value"
            item-text="text"
            mandatory
        />
        <data-table
            v-on="$listeners"
            ref="usersAccountStatements"
            source="users-account-statements"
            @payment="payment"
            @paymentPaid="showPayment"
            :silent-params="query"
        />
        <v-dialog v-model="dialog" width="500" scrollable>
            <v-card>
                <v-card-title class="headline primary">
                    <span style="color: white;" class="headline">{{ dialogTitle }}</span>
                </v-card-title>
                <v-divider />
                <v-card-text>
                    <v-layout row wrap>
                        <v-flex xs12>
                            <price-input disabled :currency="form.currency" :label="`Amount *`" v-model="form.credit"/>
                        </v-flex>
                        <v-flex xs12>
                            <v-textarea box :label="`Note `" v-model="form.note"/>
                        </v-flex>
                        <v-flex xs12>
                            <file-pond-input v-model="form.file_id" uploader="finance_payment_file" :files="files" :label="$t('Payment File')" />
                        </v-flex>
                    </v-layout>
                </v-card-text>
                <v-divider />
                <v-card-actions>
                    <v-spacer></v-spacer>
                    <v-btn flat @click="cancel">{{ $t('app.cancel') }}</v-btn>
                    <v-btn :disabled="disabled" :loading="loading" @click="save" color="primary" >{{ $t('app.save') }}</v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog>
        <slot></slot>
    </v-flex>
</template>

<script>
export default {
    name: "UsersAccountStatements",
    props: {
        currency_id: {}
    },
    data() {
        return {
            loading: false,
            disabled: false,
            dialog: false,
            username: null,
            statement: null,
            currency: parseInt(this.currency_id),
            emptyForm: {
                id: null,
                account_statement_id: null,
                amount: null,
                note: null,
                file_id: null,
                currency: null,
            },
            form: {
                id: null,
                account_statement_id: null,
                amount: null,
                note: null,
                file_id: null,
                currency: null,
            },
            currencies: [],
        };
    },
    computed: {
        files() {
            if (this.form.file_id) {
                return [this.form.file_id];
            }
            return [];
        },
        dialogTitle() {
            let title = this.disabled ? this.$t('app.show_payment') : this.$t('app.make_payment');

            if (this.username) {
                title = `${title} (${this.username})`;
            }

            if (this.statement) {
                title = `${title} (${this.statement})`;
            }

            return title;
        },
        query() {
            return {currency_id: this.currency_id};
        }
    },
    methods: {
        payment(item) {
            this.dialog = true;
            this.disabled = false;
            this.form = automata.helper.cloneObject(this.emptyForm);
            this.form.credit = item.debit;
            this.form.account_statement_id = item.id;
            this.form.id = item.credit_id;
            this.form.file_id = item.file_id;
            this.form.note = item.note;
            this.form.currency = item.currency;
            this.username = item.username;
            this.statement = item.statement;
        },
        showPayment(item) {
            this.dialog = true;
            this.disabled = true;
            this.form = automata.helper.cloneObject(this.emptyForm);
            this.form.credit = item.debit;
            this.form.account_statement_id = item.id;
            this.form.id = item.credit_id;
            this.form.file_id = item.file_id;
            this.form.note = item.note;
            this.form.currency = item.currency;
            this.username = item.username;
            this.statement = item.statement;
        },
        cancel() {
            this.dialog = false;
        },
        save() {
            this.loading = true;
            this.$http.post(`api/profile/finance/account-statements/${this.form.account_statement_id}/payment`, this.form)
                .then(res => {
                    this.$notification.success(this.$t('message.operation_done'));
                    this.dialog = false;
                    this.$refs.usersAccountStatements.fetchDataSource();
                })
                .finally(() => this.loading = false);
        },
        fetchInfo() {
            return this.$http.get(`api/autocomplete/currencies?active=true`).then(res => {
                this.currencies = res.data.data;
            });
        },
    },
    watch: {
        currency: {
            handler(newval) {
                if (newval != this.currency_id) {
                    this.$router.push({name: 'payments', params: {currency_id: newval}});
                }
            }
        },
        currency_id: {
            immediate: true,
            handler(newval) {
                this.currency = parseInt(newval);
            }
        }
    },
    mounted() {
        this.fetchInfo();
    }
}
</script>

<style scoped>

</style>

<template>
    <l-users-account-statements ref="statements" :currency_id="currency_id" @showPaymentDetails="showPaymentDetails" >
        <show-payment v-model="showPayment" ref="payment">
            <template v-slot:activator>
                {{''}}
            </template>
            <template v-slot:actions v-if="!confirmed">
                <v-btn color="primary" @click="confirm" :loading="loading">
                    Confirm
                </v-btn>
            </template>
        </show-payment>
    </l-users-account-statements>
</template>

<script>

import ShowPayment from "../../../../../PaymentGateways/assets/js/components/ShowPayment";
import LUsersAccountStatements from "../../../../../UserProfiles/assets/js/components/UsersAccountStatements";

export default {
    name: "UsersAccountStatements",
    components: {ShowPayment, LUsersAccountStatements},
    props: {
        currency_id: {}
    },
    data() {
        return {
            loading: false,
            showPayment: false,
            id: false,
            confirmed: false,
        };
    },
    computed: {},
    methods: {
        showPaymentDetails(item) {
            this.id = item.id;
            this.confirmed = item.confirmed;
            this.showPayment = true;
            this.$http
                .get(`api/sale-package/pay/${item.id}`)
                .then(res => {
                    this.$refs.payment.form.payment_gateway_id = res.data.data.payment_gateway_id;
                    this.$refs.payment.form.currency = res.data.data.currency;
                    this.$refs.payment.form.credit = res.data.data.credit;
                    this.$refs.payment.form.note = res.data.data.note;
                    this.$refs.payment.form.file_id = res.data.data.file_id;
                    if (res.data.data.file_id) {
                        this.$refs.payment.files = [res.data.data.file_id];
                    } else {
                        this.$refs.payment.files = [];
                    }
                    this.$refs.payment.form.account = res.data.data.account;
                })
                .finally(() => {

                });
        },
        confirm() {
            this.loading = true;
            this.$http
                .post(`api/profile/finance/account-statements/${this.id}/confirm`)
                .then(res => {
                    this.$notification.success(this.$t('message.operation_done'));
                    this.$refs.statements.$refs.usersAccountStatements.fetchDataSource();
                    this.showPayment = false;
                })
                .finally(() => this.loading = false);
        }
    },
    watch: {},
    mounted() {

    }
}
</script>

<style scoped>

</style>

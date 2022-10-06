<template>
    <v-flex shrink>
        <button-groups
            v-model="currency"
            :options="currencies"
            item-id="value"
            item-text="text"
            mandatory
        />
        <data-table source="account-statements" :silent-params="query" />
    </v-flex>
</template>

<script>
export default {
    name: "AccountStatements",
    props: {
        currency_id: {}
    },
    data() {
        return {
            currency: parseInt(this.currency_id),
            currencies: [],
        };
    },
    computed: {
        query() {
            return {currency_id: this.currency_id};
        }
    },
    methods: {
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
                    this.$router.push({name: 'profile.finance.account_statements', params: {currency_id: newval}});
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
    },
}
</script>

<style scoped>

</style>

<template>
    <v-flex>
        <Banks />
        <CreditCards />
        <PrepaidCreditCards />
    </v-flex>
</template>

<script>
    import Banks from './components/Finance/Banks'
    import CreditCards from './components/Finance/CreditCards';
    import PrepaidCreditCards from './components/Finance/PrepaidCreditCards';

    export default {
        name: "Finance",
        components: {Banks, CreditCards, PrepaidCreditCards},
        data() {
            return {

            };
        },
    }
</script>

<style scoped>

</style>
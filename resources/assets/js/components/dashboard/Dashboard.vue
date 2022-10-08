<template>
    <AdminDashboard/>
</template>

<script>
    import AdminDashboard from "./AdminDashboard";

    export default {
        name: "Dashboard",
        components: {AdminDashboard},
        data() {
            return {

            };
        },
        computed: {
            isAdmin() {
                return this.$store.getters['auth/isAdmin'];
            }
        },
    }
</script>

<style scoped>

</style>
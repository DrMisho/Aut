<template>
    <v-flex shrink>
        <data-table source="users" @loginAs="loginAs"/>
    </v-flex>
</template>

<script>
    export default {
        name: "Users",
        methods: {
            loginAs(row) {
                this.$http.post(`login-as/${row.id}`)
                    .then(res => {
                        this.$store.dispatch('auth/loggedIn', true);
                        window.location = res.data.redirectTo;
                    })
                    .catch(error => this.$notification.error(error.response.data.message));
            }
        }
    }
</script>

<style scoped>

</style>

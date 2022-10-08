<template>
    <l-login :extra-form="['username']">
        <template v-slot:default="{form, validationMessage}">
            <v-text-field
                prepend-icon="fas fa-user"
                name="username"
                v-model="form.username"
                :label="`${$t('app.login_input')} *`"
                :error-messages="validationMessage['username']"
                type="text"
                required
                autofocus
            />
        </template>
    </l-login>
</template>

<script>
    import LLogin from "../../../../../Aut/VueDashboard/assets/vue-dashboard/Authentication/Components/LLogin";

    export default {
        name: "Login",
        components: {LLogin}
    }
</script>

<style scoped>

</style>

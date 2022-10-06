<template>
    <l-register :extra-form="['username', 'email']">
        <template #default="{form, validationMessage}">
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
            <v-text-field
                prepend-icon="fas fa-envelope"
                name="email"
                v-model="form.email"
                :label="`${$t('app.email')}`"
                :error-messages="validationMessage['email']"
                type="email"
            />
        </template>
    </l-register>
</template>

<script>
    import LRegister from "../../../../../Aut/VueDashboard/assets/vue-dashboard/Authentication/Components/LRegister";
    export default {
        name: "Register",
        components: {LRegister}
    }
</script>

<style scoped>

</style>

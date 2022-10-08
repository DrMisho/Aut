<template>
    <v-form method="post" :action="action" @submit.prevent="resetRequest">
        <v-card-text>
            <v-text-field
                    prepend-icon="fas fa-envelope"
                    name="email"
                    :label="$t('app.email_input')"
                    type="email"
                    :error-messages="validationMessage['email']"
                    v-model="email"
                    required
            ></v-text-field>
            <v-layout v-if="registration" row justify-space-between align-center>
                <v-spacer />
                <v-flex shrink>
                    <router-link :to="{name: 'register'}">{{ $t('app.create_account') }}</router-link>
                </v-flex>
            </v-layout>
        </v-card-text>
        <v-card-actions>
            <v-spacer />
            <v-btn flat :to="{name: 'login'}">{{ $t('app.login') }}</v-btn>
            <v-btn  type="submit" color="primary" :loading="loading">{{ $t('app.reset_password') }}</v-btn>
        </v-card-actions>
    </v-form>
</template>

<script>
    import config from "../../../Config";

    export default {
        name: "Email",
        data() {
            return {
                email: null,
                loading: false,
                registration: config.registration,
                validationMessage: {
                    email: null,
                }
            }
        },
        computed: {
            action() {
                return automata.helper.localizeUrl('password/email');
            }
        },
        methods: {
            resetRequest() {
                automata.form.validation.reset(this.validationMessage);
                this.loading = true;
                this.$http.post(this.action, {email: this.email})
                    .then(res => this.$notification.success(res.data.status))
                    .catch(error => automata.form.validation.check(this, error, this.validationMessage))
                    .finally(() => this.loading = false);
            }
        }
    }
</script>

<style scoped>

</style>

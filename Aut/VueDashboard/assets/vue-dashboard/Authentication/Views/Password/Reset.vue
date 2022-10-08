<template>
    <v-form method="post" :action="action" @submit.prevent="resetPassword">
        <v-card-text>
            <v-text-field
                    prepend-icon="fas fa-envelope"
                    name="email"
                    :label="$t('app.email_input')"
                    type="email"
                    :error-messages="validationMessage['email']"
                    required
                    v-model="form.email"
            ></v-text-field>
            <password-field
                    name="password"
                    :label="$t('app.password_input')"
                    :error-messages="validationMessage['password']"
                    required
                    v-model="form.password"
            ></password-field>
            <password-field
                    name="password_confirmation"
                    :label="$t('app.confirm_password_input')"
                    required
                    v-model="form.password_confirmation"
            ></password-field>
            <v-layout row justify-space-between align-center>
                <v-spacer />
                <v-flex shrink>
                    <router-link :to="{name: 'register'}">{{ $t('app.create_account') }}</router-link>
                </v-flex>
            </v-layout>
        </v-card-text>
        <v-card-actions>
            <v-spacer />
            <v-btn flat :to="{name: 'login'}">{{ $t('app.login') }}</v-btn>
            <v-btn  type="submit"
                    color="primary"
                    :loading="loading"
            >{{ $t('app.reset_password') }}</v-btn>
        </v-card-actions>
    </v-form>
</template>

<script>
    export default {
        name: "Reset",
        props: {
            token: {
                required: true,
                type: String
            }
        },
        data() {
            return {
                form: {
                    token: this.token,
                    email: null,
                    password: null,
                    password_confirmation: null,
                },
                validationMessage: {
                    email: null,
                    password: null,
                    token: null,
                },
                showPassword: false,
                showConfirmPassword: false,
                loading: false,
            }
        },
        computed: {
            action() {
                return automata.helper.localizeUrl('password/reset');
            }
        },
        methods:{
            resetPassword() {
                automata.form.validation.reset(this.validationMessage);
                this.loading = true;
                this.$http.post(this.action, this.form)
                    .then(res => {
                        this.$notification.success(res.data.status);
                        window.location = res.data.redirectTo;
                    })
                    .catch(error => automata.form.validation.check(this, error, this.validationMessage))
                    .finally(() => this.loading = false);
            }
        },
        created() {
            let urlParams = new URLSearchParams(window.location.search);
            this.form.email = urlParams.get('email');
        }
    }
</script>

<style scoped>

</style>

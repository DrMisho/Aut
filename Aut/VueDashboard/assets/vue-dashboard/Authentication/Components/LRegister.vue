<template>
    <v-form method="post" :action="registerUrl" @submit.prevent="register" >
        <v-card-text>
            <slot :form="form" :validationMessage="validationMessage">
                <v-text-field
                        prepend-icon="fas fa-envelope"
                        name="email"
                        :error-messages="validationMessage['email']"
                        :label="$t('app.email_input')"
                        type="email"
                        v-model="form.email"
                />
            </slot>
            <password-field
                    name="password"
                    :label="`${$t('app.password_input')} *`"
                    :error-messages="validationMessage['password']"
                    v-model="form.password"
            />
            <password-field
                    name="password_confirmation"
                    :label="`${$t('app.confirm_password_input')} *`"
                    :error-messages="validationMessage['password_confirmation']"
                    v-model="form.password_confirmation"
            />
        </v-card-text>
        <v-card-actions>
            <v-spacer></v-spacer>
            <v-btn flat :to="{name: 'login'}">{{ $t('app.login') }}</v-btn>
            <v-btn :loading="loading" color="primary" type="submit">{{ $t('app.register') }}</v-btn>
        </v-card-actions>
    </v-form>
</template>

<script>
    export default {
        name: "LRegister",
        props: {
            extraForm: {
                type: Array,
                default(){
					return [];
				},
            }
        },
        data() {
            return {
                loading: false,
                showPassword: false,
                showConfirmPassword: false,
                registerUrl: `${automata.url.baseFullUrl}/register`,
                form: {
                    email: '',
                    password_confirmation: '',
                },
                validationMessage: {
                    email: null,
                    password: null,
                },
            }
        },
        methods: {
            register() {
                this.loading = true;
                automata.form.validation.reset(this.validationMessage);
                this.$http
                    .post(automata.helper.localizeUrl('register'), this.form)
                    .then(res => window.location = res.data.redirectTo)
                    .catch(error => automata.form.validation.check(this, error, this.validationMessage))
                    .finally(() => this.loading = false);
            }
        },
        mounted() {
            for (let i in this.extraForm) {
                this.$set(this.form, this.extraForm[i], null);
                this.$set(this.validationMessage, this.extraForm[i], null);
            }
        }
    }
</script>

<style scoped>

</style>
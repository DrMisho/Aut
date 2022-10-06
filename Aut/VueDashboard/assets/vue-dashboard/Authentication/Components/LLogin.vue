<template>
    <v-form method="post" :action="baseUrl" @submit.prevent="login">
        <v-card-text>
            <slot :form="form" :validationMessage="validationMessage">
                <v-text-field
                        prepend-icon="fas fa-envelope"
                        name="email"
                        v-model="form.email"
                        :label="`${$t('app.login_input')} *`"
                        :error-messages="validationMessage['email']"
                        type="text"
                        required
                        autofocus
                />
            </slot>
            <password-field
                    name="password"
                    v-model="form.password"
                    :label="`${$t('app.password_input')} *`"
                    :error-messages="validationMessage['password']"
                    id="password"
                    required
            />
            <v-layout row justify-space-between align-center>
                <v-flex shrink>
                    <v-checkbox color="primary" :label="$t('app.remember_me')" name="remember_me" v-model="form.remember_me" :error-messages="validationMessage['remember_me']"/>
                </v-flex>
                <v-flex shrink v-if="forgetPassword">
                    <router-link :to="{name: 'email'}">{{ $t('app.forget_password') }}</router-link>
                </v-flex>
            </v-layout>
        </v-card-text>
        <v-card-actions>
            <v-spacer></v-spacer>
            <slot name="actions" :loading="loading"></slot>
            <v-btn v-if="registration" flat :to="{name: 'register'}">{{ $t('app.register') }}</v-btn>
            <v-btn color="primary" type="submit" :loading="loading">{{ $t('app.login') }}</v-btn>
        </v-card-actions>
        <v-divider v-if="socialLogin" />
        <v-card-actions v-if="socialLogin">
            <v-container grid-list-md class="pa-0">
                <v-layout justify-between row wrap>
                    <template v-for="(social, code) in socialLogin">
                        <social-btn v-if="social"
                                    :attribute="social.attribute"
                                    :color="socialNetworks[code].color"
                                    :icon="socialNetworks[code].icon"
                                    :url="socialNetworks[code].url"
                        >{{ $t(`app.social_login.${code}`)}}</social-btn>
                    </template>
                </v-layout>
            </v-container>
        </v-card-actions>
    </v-form>
</template>

<script>
    import SocialBtn from "./SocialBtn";

    export default {
        name: "LLogin",
        components: {SocialBtn},
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
                rtl: automata.isRtl,
                ltr: !automata.isRtl,
                baseUrl: `${automata.url.baseUrl}/login`,
                form: {
                    email: null,
                    password: null,
                    remember_me: null,
                },
                validationMessage: {
                    email: null,
                    password: null,
                    remember_me: null,
                },
            }
        },
        computed: {
            url() {
                return automata.helper.localizeUrl('login');
            },
            registration() {
                return this.$automata.config.registration;
            },
            forgetPassword() {
                return this.$automata.config.forget_password;
            },
            socialLogin() {
                return this.$automata.config.social_login;
            },
            socialNetworks() {
                return this.$automata.config.social_networks;
            }
        },
        methods: {
            login() {
                automata.form.validation.reset(this.validationMessage);
                this.loading = true;
                this.$http
                    .post(this.url, this.form)
                    .then(res => {
                        this.$store.dispatch('auth/loggedIn', true);
                        window.location = res.data.redirectTo;
                    })
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

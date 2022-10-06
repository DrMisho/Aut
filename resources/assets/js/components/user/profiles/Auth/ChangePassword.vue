<template>
    <v-layout row wrap>
        <v-flex sm12 md8>
            <v-card>
                <v-form method="post" :action="changePasswordUrl" @submit.prevent="change">
                    <v-card-text>
                        <password-field
                                name="password"
                                :label="$t('app.current_password_input')"
                                required
                                v-model="form.current_password"
                        ></password-field>
                        <password-field
                                name="password"
                                :label="$t('app.new_password_input')"
                                required
                                v-model="form.new_password"
                        ></password-field>
                        <password-field
                                name="password_confirmation"
                                :label="$t('app.confirm_new_password_input')"
                                required
                                v-model="form.new_password_confirmation"
                        ></password-field>
                    </v-card-text>
                    <v-card-actions>
                        <v-spacer></v-spacer>
                        <v-btn :loading="loading" color="primary" type="submit">{{ $t('app.change_password') }}</v-btn>
                    </v-card-actions>
                </v-form>
            </v-card>
        </v-flex>
    </v-layout>
</template>

<script>
    export default {
        name: "ChangePassword",
        data() {
            return {
                changePasswordUrl: `api/profile/auth/change-password`,
                form: {
                    current_password: null,
                    new_password: null,
                    new_password_confirmation: null,
                },
                loading: false,
            }
        },

        methods: {
            change() {
                this.loading = true;
                this.$http
                    .put(this.changePasswordUrl, this.form)
                    .then(res => {
                        this.$notification.success(this.$t('message.operation_done'));
                    })
                    .catch(res => this.$notification.error(this.$t('message.operation_failed')))
                    .finally(() => this.loading = false);
            },
        }
    }
</script>

<style scoped>

</style>
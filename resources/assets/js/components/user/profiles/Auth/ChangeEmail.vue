<template>
    <v-layout row wrap>
        <v-flex sm12 md8>
            <v-card>
                <v-form method="post" :action="changeEmailUrl" @submit.prevent="change">
                    <v-card-text>
                        <v-text-field
                                name="new_email"
                                :label="$t('app.new_email_input')"
                                v-model="form.new_email"
                        />
                    </v-card-text>
                    <v-card-actions>
                        <v-spacer></v-spacer>
                        <v-btn :loading="loading" color="primary" type="submit">{{ $t('app.change_email') }}</v-btn>
                    </v-card-actions>
                </v-form>
            </v-card>
        </v-flex>
    </v-layout>
</template>

<script>
    export default {
        name: "ChangeEmail",
        data() {
            return {
                loading: false,
                form: {
                    new_email: null,
                },
                changeEmailUrl: `api/profile/auth/change-email`
            }
        },
        methods: {
            change() {
                this.loading = true;

                this.$http
                    .post(this.changeEmailUrl, this.form)
                    .then(res => this.$notification.success(this.$t('message.change_email')).timeout(8000))
                    .catch(res => this.$notification.error(this.$t('message.operation_failed')))
                    .finally(() => this.loading = false);
            }
        }
    }
</script>

<style scoped>

</style>
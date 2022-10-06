<template>
    <v-flex shrink>
        <data-table ref="partner" source="partners" @socialNetworks="socialNetworks"/>
        <v-dialog v-model="dialog" width="500">
            <v-card>
                <v-card-title class="headline primary dark" primary-title>
                    <span style="color: #fff;">{{ title }}</span>
                </v-card-title>

                <v-card-text>
                    <v-text-field
                            v-for="socialNetwork in social"
                            :key="socialNetwork['id']"
                            :name="`social_network[${socialNetwork['id']}]`"
                            v-model="form.socialNetworks[socialNetwork['id']].account"
                            :label="socialNetwork['social_network']"
                            :prepend-inner-icon="socialNetwork['icon']"
                            :class="{'force-ltr': socialNetwork['id'] === 5}"
                    ></v-text-field>
                </v-card-text>

                <v-divider></v-divider>

                <v-card-actions>
                    <v-spacer></v-spacer>
                    <v-btn :disabled="loading" flat @click="dialog = false">Cancel</v-btn>
                    <v-btn :loading="loading" color="primary" @click="saveSocialNetwork">Save</v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog>
    </v-flex>
</template>

<script>
    export default {
        name: "Partners",
        data() {
            return {
                loading: false,
                dialog: false,
                item: null,
                social: [],
                form: {
                    socialNetworks: {},
                }
            }
        },
        computed: {
            title() {
                if (!this.item) {
                    return null;
                }
                return `${this.$t('profiles.contact.social_networks')} (${this.item.name})`;
            }
        },
        methods: {
            socialNetworks(item) {
                this.dialog = true;
                this.item = item;
                this.social = item.socialNetworks;
                for (let social of this.item.socialNetworks) {
                    this.form.socialNetworks[social.id] = {'account': social.account};
                }
            },
            saveSocialNetwork() {
                this.loading = true;
                this.$http
                    .post(`api/university/partner/${this.item.id}/social-network`, this.form)
                    .then(res => {
                        this.dialog = false;
                        this.$notification.success(
                            this.$t('message.operation_done')
                        );
                        this.$refs.partner.fetchDataSource();
                    })
                    .catch(res => this.$notification.error(this.$t('message.operation_failed')))
                    .finally(() => this.loading = false);
            },
        },
    }
</script>

<style scoped>

</style>
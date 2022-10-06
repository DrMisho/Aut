<template>
    <v-flex>
        <card-list :items="businessCards" @btnClicked="addBusinessCard" :title="trans('jobs')" :loading="loading" :limit="8" :no-result="trans('no_jobs_result')" empty-state-src="images/empty-states/business_profile.png" empty-state-aspect-ratio="1.4">
            <template slot-scope="{item}">
                <v-flex md3 sm4 xs12>
                    <business-card :cardInfo="item" @edit="editBusinessCard"  @delete="deleteBusinessCard"/>
                </v-flex>
            </template>
        </card-list>
        <v-dialog v-model="dialog" fullscreen hide-overlay transition="dialog-bottom-transition">
            <v-card>
                <v-toolbar dark color="primary" fixed>
                    <v-btn icon dark @click="dialog = false">
                        <v-icon>close</v-icon>
                    </v-btn>
                    <v-toolbar-title>{{ dialogTitle }}</v-toolbar-title>
                    <v-spacer />
                    <v-toolbar-items>
                        <v-btn dark flat @click="submit">{{ $t('app.save') }}</v-btn>
                    </v-toolbar-items>
                </v-toolbar>
                <v-card-text>
                    <v-container class="mt-5">
                        <v-flex md7>
                            <BusinessCardForm
                                ref="businessCardForm"
                                :card="editedCard"
                                @cancel="businessCardFormCanceled"
                                @saved="newBusinessCardSaved"
                            />
                        </v-flex>
                    </v-container>
                </v-card-text>
            </v-card>
        </v-dialog>
        <confirm :opened="confirm" @confirmed="deleteConfirmed" @closed="deleteCanceled"></confirm>
    </v-flex>
</template>

<script>
    import BusinessCard from './components/Business/BusinessCard';
    import BusinessCardForm from './components/Business/BusinessCardForm';

    export default {
        name: "Business",
        components: {BusinessCard, BusinessCardForm},
        data() {
            return {
                loading: false,
                // submit: false,
                dialog: false,
                confirm: false,
                businessCards: [],
                editedCard: {
                    company_id: null,
                    job_title_id: null,
                    email: null,
                    started_at: null,
                    ended_at: null,
                    mobile: null,
                    phone: null,
                    country_id: null,
                    state_id: null,
                    city_id: null
                },
                emptyCard: {
                    company_id: null,
                    job_title_id: null,
                    email: null,
                    started_at: null,
                    ended_at: null,
                    mobile: null,
                    phone: null,
                    country_id: null,
                    state_id: null,
                    city_id: null
                },
                deleteCard: null,
            }
        },
        computed:{
            dialogTitle() {
                let prefix = this.editedCard.hasOwnProperty('id') ? this.$t('app.edit') : this.$t('app.add');
                return   `${prefix} ${this.trans('business_card')}`;
            }
        },
        mounted() {
            this.getBusinessProfile();
        },
        methods: {
            submit() {
                this.$refs.businessCardForm.save();
            },
            getBusinessProfile() {
                this.loading = true;
                this.$http
                    .get('api/profile/business')
                    .then(res => this.businessCards = this.initBusinessCards(res.data.data))
                    .catch(res => console.log(res))
                    .finally(() => this.loading = false);
            },
            destroy() {
                this.$http
                    .delete(`api/profile/business/${this.deleteCard.id}`)
                    .then(res => {
                        this.$notification.success(this.$t('message.operation_done'));
                        this.getBusinessProfile();
                    })
                    .catch(res => this.$notification.error(this.$t('message.operation_failed')))
                    .finally(this.deleteCard = null);

            },
            editBusinessCard(editedCard) {
                this.dialog = true;
                this.editedCard = editedCard;
            },
            deleteBusinessCard(editedCard) {
                this.confirm = true;
                this.deleteCard = editedCard;
            },
            addBusinessCard() {
                this.dialog = true;
                this.editedCard = this.cloneObject(this.emptyCard);
            },
            newBusinessCardSaved() {
                // this.submit = false;
                this.dialog = false;
                this.getBusinessProfile();
            },
            businessCardFormCanceled() {
                // this.submit = false;
                this.dialog = false;
            },
            deleteConfirmed() {
                this.confirm = false;
                this.destroy();
            },
            deleteCanceled() {
                this.confirm = false;
                this.deleteCard = null;
            },
            initBusinessCards(businessCards) {
                for (let i = 0; i < businessCards.length; i++) {
                    businessCards[i]['job_title'] = {
                        'id': businessCards[i]['job_title_id'],
                        'job_title': businessCards[i]['job_title'],
                    };
                    businessCards[i]['company'] = {
                        'id': businessCards[i]['company_id'],
                        'company': businessCards[i]['company'],
                    };
                }
                return businessCards;
            },
            cloneObject($obj) {
                return JSON.parse(JSON.stringify($obj));
            },
            trans(key) {
                return this.$t(`profiles.business.${key}`)
            }
        },

    }
</script>

<style scoped>

</style>
<template>
    <v-container grid-list-md text-xs-center class="pa-0 ma-0">
        <v-form method="post" :action="businessUrl" @submit.prevent="save" ref="form">
            <v-layout row wrap class="pb-5">
                <v-flex xs12 sm3>
                    <h4>{{ trans('job_information') }}</h4>
                </v-flex>
                <v-divider vertical />
                <v-spacer />
                <v-flex xs12 sm8>
                    <v-layout justify-between row wrap>
                        <v-flex md6>
                            <v-combobox
                                    name="job_title_id"
                                    v-model="form.job_title"
                                    :label="`${trans('job_title')} *`"
                                    :items="jobTitles"
                                    :disabled="loadingInfo"
                                    :loading="loadingInfo"
                                    :item-text="jobTitleItemText"
                                    item-value="id"
                                    :rules="[rules.required]"
                                    :error-messages="validationMessage['job_title']"
                            ></v-combobox>
                        </v-flex>
                        <v-flex md6>
                            <v-combobox
                                    name="company_id"
                                    v-model="form.company"
                                    :label="`${trans('company')} *`"
                                    :items="companies"
                                    :disabled="loadingInfo"
                                    :loading="loadingInfo"
                                    :item-text="companyItemText"
                                    item-value="id"
                                    :rules="[rules.required]"
                                    :error-messages="validationMessage['company']"
                            >
                                <template v-slot:item="{ item }">
                                    <v-list-tile-avatar size="null" tile>
                                        <v-img v-if="item.company_logo" style="width: 35px;" :src="item.company_logo" :lazy-src="item.company_logo || null">
                                            <v-progress-circular slot="placeholder" indeterminate color="secondary"></v-progress-circular>
                                        </v-img>
                                    </v-list-tile-avatar>
                                    <v-list-tile-content>
                                        <v-list-tile-title v-html="item.company"></v-list-tile-title>
                                    </v-list-tile-content>
                                </template>
                                <template v-slot:selection="{ item }">
                                    <v-list-tile-avatar v-if="item.company_logo" size="null" tile class="px-1">
                                        <v-img style="width: 35px;" :src="item.company_logo" :lazy-src="item.company_logo || null">
                                            <v-progress-circular slot="placeholder" indeterminate color="secondary"></v-progress-circular>
                                        </v-img>
                                    </v-list-tile-avatar>
                                    <v-list-tile-content class="shrink">
                                        <v-list-tile-title v-html="item.company || item"></v-list-tile-title>
                                    </v-list-tile-content>
                                </template>
                            </v-combobox>
                        </v-flex>
                    </v-layout>
                    <v-layout justify-between row wrap>
                        <v-flex xs12>
                            <v-text-field
                                    name="email"
                                    v-model="form.email"
                                    :label="trans('email')"
                                    type="email"
                                    :error-messages="validationMessage['email']"
                            ></v-text-field>
                        </v-flex>
                        <v-flex md6>
                            <phone-input
                                    name="phone"
                                    v-model="form.phone"
                                    :label="trans('phone')"
                                    :error-messages="validationMessage['phone']"
                            ></phone-input>
                        </v-flex>
                        <v-flex md6>
                            <mobile-input
                                    name="mobile"
                                    v-model="form.mobile"
                                    :label="trans('mobile')"
                                    :error-messages="validationMessage['mobile']"
                            ></mobile-input>
                        </v-flex>
                        <v-flex md6>
                            <v-menu
                                    :close-on-content-click="false"
                                    v-model="started_at_menu"
                                    :nudge-right="40"
                                    lazy
                                    transition="scale-transition"
                                    offset-y
                                    full-width
                                    min-width="290px"
                            >
                                <v-text-field
                                        slot="activator"
                                        name="started_at"
                                        v-model="form.started_at"
                                        :label="`${trans('started_at')} *`"
                                        prepend-icon="event"
                                        readonly
                                        :rules="[rules.required]"
                                        :error-messages="validationMessage['started_at']"
                                ></v-text-field>
                                <v-date-picker v-model="form.started_at" @input="started_at_menu = false" color="primary"></v-date-picker>
                            </v-menu>
                        </v-flex>
                        <v-flex md6>
                            <v-menu
                                    :close-on-content-click="false"
                                    v-model="ended_at_menu"
                                    :nudge-right="40"
                                    lazy
                                    transition="scale-transition"
                                    offset-y
                                    full-width
                                    min-width="290px"
                            >
                                <v-text-field
                                        slot="activator"
                                        name="ended_at"
                                        v-model="form.ended_at"
                                        :label="trans('ended_at')"
                                        prepend-icon="event"
                                        readonly
                                        clearable
                                        :hint="experience"
                                        :persistent-hint="!!form.started_at"
                                        :error-messages="validationMessage['ended_at']"
                                ></v-text-field>
                                <v-date-picker v-model="form.ended_at" @input="ended_at_menu = false" color="primary"></v-date-picker>
                            </v-menu>
                        </v-flex>
                    </v-layout>
                </v-flex>
            </v-layout>
            <v-layout row wrap class="pb-2">
                <v-flex xs12 sm3>
                    <h4>{{ trans('job_location') }}</h4>
                </v-flex>
                <v-divider vertical />
                <v-spacer />
                <v-flex xs12 sm8>
                    <v-layout justify-between row wrap>
                        <v-flex md6>
                            <v-select
                                    name="country_id"
                                    v-model="form.country_id"
                                    :label="trans('country')"
                                    :items="countries"
                                    :disabled="loadingInfo"
                                    :loading="loadingInfo"
                                    item-text="country"
                                    item-value="id"
                                    @change="form.state_id = null; form.city_id = null;"
                            ></v-select>
                        </v-flex>
                        <v-flex md6>
                            <v-select
                                    name="state_id"
                                    v-model="form.state_id"
                                    :label="trans('state')"
                                    :items="states"
                                    item-text="state"
                                    item-value="id"
                                    @change="form.city_id = null"
                                    :disabled="!form.country_id"
                                    :loading="fetchingStates"
                            ></v-select>
                        </v-flex>
                        <v-flex md6>
                            <v-select
                                    name="city_id"
                                    v-model="form.city_id"
                                    :label="`${trans('city')} *`"
                                    :items="cities"
                                    item-text="city"
                                    item-value="id"
                                    :disabled="!form.state_id"
                                    :loading="fetchingCities"
                                    :rules="[rules.required]"
                                    :error-messages="validationMessage['city_id']"
                            ></v-select>
                        </v-flex>
                    </v-layout>
                </v-flex>
            </v-layout>
            <v-layout>
                <v-spacer />
                <v-btn @click="$emit('cancel')">{{ $t('app.cancel') }}</v-btn>
                <v-btn :loading="loading" :disabled="loadingInfo" type="submit" color="primary">{{ $t('app.save') }}</v-btn>
            </v-layout>
        </v-form>
    </v-container>
</template>

<script>
    export default {
        name: "BusinessCardForm",
        props: {
            card: {
                type: Object,
                default: {},
            }
        },
        computed: {
            experience() {
                let till = this.form.ended_at || moment();
                return moment(this.form.started_at).from(till);
            }
        },
        data() {
            return {
                businessUrl: `${automata.url.baseFullUrl}/profile/business`,
                form: {
                    id: null,
                    country_id: null,
                    state_id: null,
                    city_id: null,
                    job_title: null,
                    company: null,
                    email: null,
                    phone: null,
                    mobile: "+963 9",
                    started_at: null,
                    ended_at: null,
                },
                validationMessage: {
                    city_id: null,
                    job_title: null,
                    company: null,
                    email: null,
                    phone: null,
                    mobile: null,
                    started_at: null,
                    ended_at: null,
                },

                started_at_menu: false,
                ended_at_menu: false,
                loading: false,
                loadingInfo: false,
                fetchingStates: false,
                fetchingCities: false,

                jobTitles: [],
                companies: [],
                countries: [],
                states: [],
                cities: [],
                rules: {
                    required: value => !!value || this.$t('validations.required'),
                }
            };
        },
        watch:{
            card: {
                immediate: true,
                handler() {
                    this.form = this.card;
                    this.form.mobile = this.form.mobile || "+963 9";
                }
            },
            'form.country_id': {
                handler() {
                    this.getStates();
                }
            },
            'form.state_id': {
                handler() {
                    this.getCities();
                }
            }
        },
        methods:{
            getBusinessInfo() {
                this.loadingInfo = true;
                this.$http
                    .get(`api/profile/business/info`)
                    .then(res => {
                        this.countries = res.data.countries;
                        this.jobTitles = res.data.jobTitles;
                        this.companies = res.data.companies;
                    })
                    .catch(res => console.log(res))
                    .finally(() => this.loadingInfo = false);
            },
            getStates() {
                if (this.form.country_id) {
                    this.fetchingStates = true;
                    this.$http
                        .get(`api/states?country_id=${this.form.country_id}`)
                        .then(res => this.states = res.data.data)
                        .catch(res => console.log(res))
                        .finally(() => this.fetchingStates = false);
                }
            },
            getCities() {
                if (this.form.state_id) {
                    this.fetchingCities = true;
                    this.$http
                        .get(`api/cities?state_id=${this.form.state_id}`)
                        .then(res => this.cities = res.data.data)
                        .catch(res => console.log(res))
                        .finally(() => this.fetchingCities = false);
                }
            },
            save() {
                automata.form.validation.reset(this.validationMessage);
                if (!this.$refs.form.validate()) {
                    return;
                }
                this.loading = true;
                let request;
                if (this.form.id) {
                    request = this.update();
                } else {
                    request = this.store();
                }
                request
                    .then(res => {
                        this.$notification.success(this.$t('message.operation_done'));
                        this.$emit('saved');
                    })
                    .catch(error => automata.form.validation.check(this, error, this.validationMessage))
                    .finally(() => this.loading = false);
            },
            update() {
                let form = automata.helper.cloneObject(this.form);
                if (form.mobile === '+963 9') {
                    form.mobile = null;
                }
                return this.$http.put(`api/profile/business/${form.id}`, form);
            },
            store() {
                let form = automata.helper.cloneObject(this.form);
                if (form.mobile === '+963 9') {
                    form.mobile = null;
                }
                return this.$http.post(`api/profile/business`, form);
            },
            jobTitleItemText(item) {
                if (item.job_title == null) {
                    return '';
                }
                return item.job_title;
            },
            companyItemText(item) {
                if (item.company == null) {
                    return '';
                }
                return item.company;
            },
            trans(key) {
                return this.$t(`profiles.business.${key}`)
            }
        },
        mounted() {
            this.getBusinessInfo();
        }
    }
</script>

<style scoped>

</style>
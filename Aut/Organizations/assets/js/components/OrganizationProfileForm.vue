<template>
    <v-layout row wrap reverse>
        <v-flex sm12 md4>
            <v-layout align-start justify-center row fill-height>
                <v-card class="pa-4" :elevation="elevation">
                    <v-card-title primary-title class="justify-center">
                        <v-avatar :size="130" color="elevation-4">
                            <v-img lazy-src="images/organization.png" :src="organizationAvatar" alt="organization avatar">
                                <v-layout slot="placeholder" fill-height align-center justify-center ma-0>
                                    <v-progress-circular indeterminate color="primary"></v-progress-circular>
                                </v-layout>
                            </v-img>
                        </v-avatar>
                    </v-card-title>
                    <v-card-actions>
                        <v-btn block color="secondary" dark @click="showAvatarDialog">{{ $t('organization.change_avatar_picture') }}</v-btn>
                    </v-card-actions>
                </v-card>
                <v-dialog v-model="avatarDialog" width="500" scrollable>
                    <v-card :elevation="elevation">
                        <v-card-title class="headline primary elevation-5">
                            <span style="color: white;" class="headline">{{ $t('organization.change_avatar_picture') }}</span>
                        </v-card-title>
                        <v-card-text style="max-height: 500px;">
                            <file-pond-input file-types="image/*" :files="files" v-model="form.organization.logo_id" :label="$t('organization.drag_your_avatar')" uploader="organization_avatar"/>
                        </v-card-text>
                        <v-divider></v-divider>
                        <v-card-actions>
                            <v-spacer></v-spacer>
                            <v-btn @click="avatarCancel" flat>
                                {{ $t('app.cancel') }}
                            </v-btn>
                            <v-btn color="primary" @click="saveOrganizationAvatar" :loading="loading">
                                {{ $t('app.save') }}
                            </v-btn>
                        </v-card-actions>
                    </v-card>
                </v-dialog>
            </v-layout>
        </v-flex>
        <v-flex sm12 md8>
            <v-card :elevation="elevation">
                <v-card-text>
                    <v-container grid-list-md text-xs-center>
                        <v-layout v-if="withUserAccount" row wrap class="pb-5">
                            <v-flex xs12 sm3>
                                <h4>{{ $t('organization.account_information') }}</h4>
                            </v-flex>
                            <v-divider vertical />
                            <v-spacer />
                            <v-flex xs12 sm8>
                                <v-text-field
                                    name="username"
                                    v-model="form.account.username"
                                    :label="`${$t('app.username')} *`"
                                ></v-text-field>
                                <v-text-field
                                    name="email"
                                    type="email"
                                    v-model="form.account.email"
                                    :label="`${$t('app.email')} *`"
                                ></v-text-field>
                                <password-field v-model="form.account.password" label="Password" generate/>
                            </v-flex>
                        </v-layout>
                        <v-layout row wrap class="pb-5">
                            <v-flex xs12 sm3>
                                <h4>{{ $t('organization.organization_information') }}</h4>
                            </v-flex>
                            <v-divider vertical />
                            <v-spacer />
                            <v-flex xs12 sm8>
                                <translation-input ref="orgTrans" v-model="form.organization" :fields="['name']">
                                    <template v-slot:default="{ value, locale, lang }">
                                        <v-text-field
                                            v-model="value[lang].name"
                                            :label="`${$t('organization.name')} (${locale.native})`"
                                            :name="`name_${lang}`"
                                        ></v-text-field>
                                    </template>
                                </translation-input>
                                <v-text-field
                                    v-model="form.organization.number"
                                    :label="`${$t('organization.number')}`"
                                    :name="`number`"
                                />
                                <date-input
                                    v-model="form.organization.published_at"
                                    :label="`${$t('organization.published_at')}`"
                                    name="published_at"
                                />
                            </v-flex>
                        </v-layout>
                        <v-layout row wrap class="pb-5">
                            <v-flex xs12 sm3>
                                <h4>{{ $t('organization.location_information') }}</h4>
                            </v-flex>
                            <v-divider vertical />
                            <v-spacer />
                            <v-flex xs12 sm8>
                                <v-layout justify-between row wrap>
                                    <v-flex md6>
                                        <v-select
                                            name="country_id"
                                            v-model="form.contact.country_id"
                                            :label="$t('organization.country')"
                                            :items="countries"
                                            item-text="country"
                                            item-value="id"
                                            @change="form.contact.state_id = null; form.contact.city_id = null;"
                                        ></v-select>
                                    </v-flex>
                                    <v-flex md6>
                                        <v-select
                                            name="state_id"
                                            v-model="form.contact.state_id"
                                            :label="$t('organization.state')"
                                            :items="states"
                                            item-text="state"
                                            item-value="id"
                                            @change="form.city_id = null;"
                                            :disabled="!form.contact.country_id"
                                            :loading="fetchingStates"
                                        ></v-select>
                                    </v-flex>
                                    <v-flex md6>
                                        <v-select
                                            name="city_id"
                                            v-model="form.contact.city_id"
                                            :label="$t('organization.city')"
                                            :items="cities"
                                            item-text="city"
                                            item-value="id"
                                            :disabled="!form.contact.state_id"
                                            :loading="fetchingCities"
                                        ></v-select>
                                    </v-flex>
                                    <v-flex xs12>
                                        <v-textarea
                                            box
                                            name="address_1"
                                            v-model="form.contact.address_1"
                                            :label="$t('organization.address_1')"
                                        ></v-textarea>
                                        <v-textarea
                                            box
                                            name="address_2"
                                            v-model="form.contact.address_2"
                                            :label="$t('organization.address_2')"
                                        ></v-textarea>
                                        <geolocation-input v-model="form.contact.geolocation" :label="$t('organization.geolocation')" :size="['100%', '250px']" />
                                    </v-flex>
                                </v-layout>
                            </v-flex>
                        </v-layout>
                        <v-layout row wrap class="pb-5">
                            <v-flex xs12 sm3>
                                <h4>{{ $t('organization.contact_information') }}</h4>
                            </v-flex>
                            <v-divider vertical />
                            <v-spacer />
                            <v-flex xs12 sm8>
                                <v-layout justify-between row wrap>
                                    <v-flex md6>
                                        <phone-input
                                            name="phone"
                                            v-model="form.contact.phone"
                                            :label="$t('organization.phone')"
                                        />
                                    </v-flex>
                                    <v-flex md6>
                                        <mobile-input
                                            name="mobile"
                                            v-model="form.contact.mobile"
                                            :label="$t('organization.mobile')"
                                        />
                                    </v-flex>
                                    <v-flex md6>
                                        <phone-input
                                            name="fax"
                                            v-model="form.contact.fax"
                                            :label="$t('organization.fax')"
                                        />
                                    </v-flex>
                                </v-layout>
                            </v-flex>
                        </v-layout>
                        <v-layout row wrap >
                            <v-flex xs12 sm3>
                                <h4>{{ $t('organization.social_networks') }}</h4>
                            </v-flex>
                            <v-divider vertical />
                            <v-spacer />
                            <v-flex xs12 sm8>
                                <v-text-field
                                    v-for="socialNetwork in socialNetworks"
                                    :key="socialNetwork['id']"
                                    :name="`social_network[${socialNetwork['id']}]`"
                                    v-model="form.socialNetworks[socialNetwork['id']].account"
                                    :label="socialNetwork['social_network']"
                                    :prepend-inner-icon="socialNetwork['icon']"
                                    :class="{'force-ltr': socialNetwork['id'] === 5}"
                                ></v-text-field>
                            </v-flex>
                        </v-layout>
                    </v-container>
                </v-card-text>
                <v-card-actions>
                    <v-spacer></v-spacer>
                    <v-btn type="submit" color="primary" :loading="loading" @click="save">{{ $t('app.save') }}</v-btn>
                </v-card-actions>
            </v-card>
        </v-flex>
    </v-layout>
</template>

<script>
export default {
    name: "ProfileOrganizationForm",
    props: {
        loading: {
            default: false,
        },
        elevation: {
            default: 0
        },
        withUserAccount: {
            type: Boolean,
            default: false,
        }
    },
    data() {
        return {
            fetchingCities: false,
            fetchingStates: false,
            files: [],
            avatarDialog: false,
            avatarPath: null,
            form: {
                user_id: null,
                account: {
                    username: null,
                    email: null,
                    permission_id: null,
                    role_id: null,
                    password: null,
                },
                organization: {
                    number: null,
                    logo_id: null,
                    published_at: null,
                },
                contact: {
                    country_id: null,
                    state_id: null,
                    city_id: null,
                    address_1: null,
                    address_2: null,
                    geolocation: null,
                    phone: null,
                    mobile: null,
                    fax: null,
                },
                socialNetworks: {},
            },
            countries: [],
            states: [],
            cities: [],
            socialNetworks: {},
        };
    },
    computed: {
        organizationAvatar() {
            return this.avatarPath || 'images/organization.png';
        },
    },
    methods: {
        save() {
            this.$emit('update:loading', true);
            let request;
            if (this.form.user_id) {
                let url = `api/organizations/profile`;
                if (this.form.user_id !== true) {
                    url = `${url}/${this.form.user_id}`;
                }
                request = this.$http.put(url, this.form);
            } else {
                request = this.$http.post(`api/organizations/profile`, this.form);
            }
            request
                .then(res => {
                    this.$notification.success(this.$t('message.operation_done'));
                    this.$emit('saved');
                })
                .finally(() => this.$emit('update:loading', false));
        },
        saveOrganizationAvatar() {
            this.$emit('update:loading', true);
            if (!this.form.organization.id) {
                this.avatarCancel();
                return;
            }
            let url = `api/organizations/profile/avatar`;
            if (this.form.user_id !== true) {
                url = `${url}/${this.form.user_id}`;
            }
            this.$http
                .put(url, {logo_id: this.form.organization.logo_id})
                .then(res => {
                    this.avatarPath = this.form.organization.logo_path;
                    this.avatarCancel();
                })
                .finally(() => this.$emit('update:loading', false));

        },
        avatarCancel() {
            this.avatarDialog = false;
        },
        showAvatarDialog() {
            this.avatarDialog = true;
        },
        init(profile) {
            this.form.user_id = profile.id;
            this.$refs.orgTrans.init(profile.organization);
            this.form.organization.id = profile.organization.id;
            this.form.organization.logo_id = profile.organization.logo_id;
            this.form.organization.number = profile.organization.number;
            this.avatarPath = profile.organization.logo_path;
            this.form.organization.published_at = profile.organization.published_at;
            this.form.contact = profile.contact;
            for (let i in this.socialNetworks) {
                let social = profile.socialNetworks[i] || {account: null};
                this.form.socialNetworks[this.socialNetworks[i].id] = {
                    'account': social.account,
                };
            }
            if (this.form.organization.logo_id) {
                this.files = [this.form.organization.logo_id];
            } else {
                this.files = [];
            }
        },
        clear() {
            this.form.user_id = null;
            this.form.contact = {};
            for (let i in this.socialNetworks) {
                this.form.socialNetworks[this.socialNetworks[i].id] = {
                    'account': null
                };
            }
            this.$refs.orgTrans.init();
            this.avatarPath = null;
            this.form.organization.id = null;
            this.form.organization.logo_id = null;
            this.form.organization.number = null;
            this.form.organization.published_at = null;
            this.files = [];
        },
        fetchInfo() {
            this.$emit('update:loading', true);
            return this.$http
                .get(`api/organizations/profile/info`)
                .then(res => {
                    this.countries = res.data.countries;
                    this.states = res.data.states;
                    this.cities = res.data.cities;
                    this.socialNetworks = res.data.socialNetworks;
                    for (let i in this.socialNetworks) {
                        this.form.socialNetworks[this.socialNetworks[i].id] = {
                            'account': null
                        };
                    }
                    this.$emit('infoFetched');
                }).finally(() => this.$emit('update:loading', false));
        },
        fetchStates(countryId) {
            this.fetchingStates = true;
            return this.$http
                .get(`api/global-settings/states?country_id=${countryId}`)
                .then(res => {
                    this.states = res.data.data;
                }).finally(() => this.fetchingStates = false);
        },
        fetchCities(stateId) {
            this.fetchingCities = true;
            return this.$http
                .get(`api/global-settings/cities?state_id=${stateId}`)
                .then(res => {
                    this.cities = res.data.data;
                }).finally(() => this.fetchingCities = false);
        },
    },
    watch: {
        'form.contact.country_id': {
            handler(newval) {
                if (newval) {
                    this.fetchStates(newval);
                } else {
                    this.states = [];
                }
            }
        },
        'form.contact.state_id': {
            handler(newval) {
                if (newval) {
                    this.fetchCities(newval);
                } else {
                    this.cities = [];
                }
            }
        },
    },
    mounted() {
        this.fetchInfo();
    },
}
</script>

<style scoped>

</style>

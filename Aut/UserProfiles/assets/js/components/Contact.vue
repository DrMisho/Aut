<template>
    <v-flex sm12 md8>
        <v-card>
            <v-form method="post" :action="contactUrl" @submit.prevent="save" ref="form">
                <v-card-text>
                    <v-container grid-list-md text-xs-center>
                        <v-layout row wrap class="pb-5">
                            <v-flex xs12 sm3>
                                <h4>{{ trans('location_information') }}</h4>
                            </v-flex>
                            <v-divider vertical />
                            <v-spacer />
                            <v-flex xs12 sm8>
                                <v-layout justify-between row wrap>
                                    <v-flex md6>
                                        <v-autocomplete
                                                name="country_id"
                                                v-model="form.country_id"
                                                :error-messages="validationMessage['country_id']"
                                                :label="trans('country')"
                                                :items="countries"
                                                item-text="country"
                                                item-value="id"
                                                @change="form.state_id = null; form.city_id = null;"
                                        ></v-autocomplete>
                                    </v-flex>
                                    <v-flex md6>
                                        <v-autocomplete
                                                name="state_id"
                                                v-model="form.state_id"
                                                :error-messages="validationMessage['state_id']"
                                                :label="trans('state')"
                                                :items="states"
                                                item-text="state"
                                                item-value="id"
                                                @change="form.city_id = null;"
                                                :disabled="!form.country_id"
                                                :loading="fetchingStates"
                                        ></v-autocomplete>
                                    </v-flex>
                                    <v-flex md6>
                                        <v-autocomplete
                                                name="city_id"
                                                v-model="form.city_id"
                                                :error-messages="validationMessage['city_id']"
                                                :label="`${trans('city')} *`"
                                                :items="cities"
                                                item-text="city"
                                                item-value="id"
                                                :disabled="!form.state_id"
                                                :loading="fetchingCities"
                                                :rules="[rules.required]"
                                        ></v-autocomplete>
                                    </v-flex>
                                    <v-flex md6>
                                        <v-autocomplete
                                                name="neighborhood_id"
                                                v-model="form.neighborhood_id"
                                                :error-messages="validationMessage['neighborhood_id']"
                                                :label="`${trans('neighborhood')}`"
                                                :items="neighborhoods"
                                                item-text="neighborhood"
                                                item-value="id"
                                                :disabled="!form.city_id"
                                                :loading="fetchingNeighborhoods"
                                                clearable
                                                @click.prevent:clear="form.neighborhood_id = null"
                                        ></v-autocomplete>
                                    </v-flex>
                                </v-layout>
                                <v-layout justify-between row wrap>
                                    <v-flex md4>
                                        <v-text-field
                                                name="building_num"
                                                v-model="form.building_num"
                                                :error-messages="validationMessage['building_num']"
                                                :label="trans('building_num')"
                                                type="text"
                                        ></v-text-field>
                                    </v-flex>
                                    <v-flex md8>
                                        <v-text-field
                                                name="street"
                                                v-model="form.street"
                                                :error-messages="validationMessage['street']"
                                                :label="trans('street')"
                                                type="text"
                                        ></v-text-field>
                                    </v-flex>
                                </v-layout>
                                <v-textarea
                                        box
                                        name="address_1"
                                        v-model="form.address_1"
                                        :error-messages="validationMessage['address_1']"
                                        :label="trans('address_1')"
                                ></v-textarea>
                                <v-textarea
                                        box
                                        name="address_2"
                                        v-model="form.address_2"
                                        :error-messages="validationMessage['address_2']"
                                        :label="trans('address_2')"
                                ></v-textarea>
                            </v-flex>
                        </v-layout>
                        <v-layout row wrap class="pb-5">
                            <v-flex xs12 sm3>
                                <h4>{{ trans('contact_information') }}</h4>
                            </v-flex>
                            <v-divider vertical />
                            <v-spacer />
                            <v-flex xs12 sm8>
                                <v-layout justify-between row wrap>
                                    <v-flex md6>
                                        <phone-input
                                                name="phone"
                                                v-model="form.phone"
                                                :error-messages="validationMessage['phone']"
                                                :label="trans('phone')"
                                        />
                                    </v-flex>
                                    <v-flex md6>
                                        <mobile-input
                                                name="mobile"
                                                v-model="form.mobile"
                                                :error-messages="validationMessage['mobile']"
                                                :label="trans('mobile')"
                                        />
                                    </v-flex>
                                    <v-flex md6>
                                        <phone-input
                                                name="fax"
                                                v-model="form.fax"
                                                :error-messages="validationMessage['fax']"
                                                :label="trans('fax')"
                                        />
                                    </v-flex>
                                </v-layout>
                            </v-flex>
                        </v-layout>
                        <v-layout row wrap >
                            <v-flex xs12 sm3>
                                <h4>{{ trans('social_networks') }}</h4>
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
                    <v-btn type="submit" color="primary" :loading="loading">{{ $t('app.save') }}</v-btn>
                </v-card-actions>
            </v-form>
        </v-card>
    </v-flex>
</template>

<script>
    export default {
        name: "Contact",
        data() {
            return {
                contactUrl: ``,
                form: {
                    "country_id": null,
                    "state_id": null,
                    "city_id": null,
                    "neighborhood_id": null,
                    "phone": null,
                    "mobile": null,
                    "fax": null,
                    "building_num": null,
                    "address_1": null,
                    "address_2": null,
                    "socialNetworks": {},
                },
                validationMessage: {
                    "country_id": null,
                    "state_id": null,
                    "city_id": null,
                    "neighborhood_id": null,
                    "phone": null,
                    "mobile": null,
                    "fax": null,
                    "building_num": null,
                    "address_1": null,
                    "address_2": null,
                },
                loading: false,
                fetchingStates: false,
                fetchingCities: false,
                fetchingNeighborhoods: false,

                socialNetworks: {},
                countries: [],
                states: [],
                cities: [],
                neighborhoods: [],
                rules: {
                    required: value => !!value || this.$t('validations.required'),
                }
            }
        },
        mounted() {
            this.getContactInfo();
        },
        watch:{
            'form.country_id': {
                handler() {
                    this.getStates();
                }
            },
            'form.state_id': {
                handler() {
                    this.getCities();
                }
            },
            'form.city_id': {
                handler() {
                    this.getNeighborhoods();
                }
            }
        },
        methods:{
            getContactInfo() {
                this.loading = true;
                this.$http
                    .get('api/profile/contact/info')
                    .then(res => {
                        this.socialNetworks = res.data.socialNetworks;
                        this.countries = res.data.countries;
                        for(let i in this.socialNetworks){
                            this.form.socialNetworks[this.socialNetworks[i].id] = {
                                'account': null
                            };
                        }
                        this.getUserInfo();
                    })
                    .catch(res => console.log(res))
                    .finally(() => this.loading = false);
            },
            getUserInfo() {
                this.loading = true;
                this.$http
                    .get('api/profile/contact')
                    .then(res => {
                        this.form.country_id = res.data.data.country_id;
                        this.form.state_id = res.data.data.state_id;
                        this.form.city_id = res.data.data.city_id;
                        this.form.neighborhood_id = res.data.data.neighborhood_id;
                        this.form.phone = res.data.data.phone;
                        this.form.mobile = res.data.data.mobile || this.form.mobile;
                        this.form.fax =  res.data.data.fax || this.form.fax;
                        this.form.building_num = res.data.data.building_num;
                        this.form.address_1 = res.data.data.address_1;
                        this.form.address_2 = res.data.data.address_2;
                        for(let i in res.data.data.socialNetworks){
                            let social = res.data.data.socialNetworks[i];
                            this.form.socialNetworks[social.id].account = social.account;
                        }
                    })
                    .catch(res => console.log(res))
                    .finally(() => this.loading = false);
            },
            getStates() {
                if (this.form.country_id) {
                    this.fetchingStates = true;
                    this.$http
                        .get(`api/states?country_id=${this.form.country_id}&limit=all`)
                        .then(res => this.states = res.data.data)
                        .catch(res => console.log(res))
                        .finally(() => this.fetchingStates = false);
                }
            },
            getCities() {
                if (this.form.state_id) {
                    this.fetchingCities = true;
                    this.$http
                        .get(`api/cities?state_id=${this.form.state_id}&limit=all`)
                        .then(res => this.cities = res.data.data)
                        .catch(res => console.log(res))
                        .finally(() => this.fetchingCities = false);
                }
            },
            getNeighborhoods() {
                if (this.form.city_id) {
                    this.fetchingNeighborhoods = true;
                    this.$http
                        .get(`api/neighborhoods?city_id=${this.form.city_id}&limit=all`)
                        .then(res => this.neighborhoods = res.data.data)
                        .catch(res => console.log(res))
                        .finally(() => this.fetchingNeighborhoods = false);
                }
            },
            save() {
                automata.form.validation.reset(this.validationMessage);
                if (!this.$refs.form.validate()) {
                    return ;
                }
                this.loading = true;
                let form = automata.helper.cloneObject(this.form);
                this.$http
                    .post('api/profile/contact', form)
                    .then(res => this.$notification.success(this.$t('message.operation_done')))
                    .catch(error => automata.form.validation.check(this, error, this.validationMessage))
                    .finally(() => this.loading = false);
            },
            trans(key) {
                return this.$t(`profiles.contact.${key}`)
            }
        }
    }
</script>

<style scoped>

</style>

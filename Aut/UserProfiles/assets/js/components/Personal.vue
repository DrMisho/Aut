<template>
    <v-layout row wrap reverse>
        <v-flex sm12 md4>
            <v-layout align-start justify-center row fill-height>
                <v-card class="pa-4">
                    <v-card-title primary-title class="justify-center">
                        <v-avatar :size="130" color="elevation-4">
                            <v-img lazy-src="images/user.png" :src="userAvatar" alt="avatar">
                                <v-layout slot="placeholder" fill-height align-center justify-center ma-0>
                                    <v-progress-circular indeterminate color="primary"></v-progress-circular>
                                </v-layout>
                            </v-img>
                        </v-avatar>
                    </v-card-title>
                    <v-card-actions>
                        <v-btn block color="secondary" dark @click="showAvatarDialog">{{ trans('change_avatar_picture') }}</v-btn>
                    </v-card-actions>
                </v-card>
                <v-dialog v-model="dialog" width="500" scrollable>
                    <v-card>
                        <v-card-title class="headline primary elevation-5">
                            <span style="color: white;" class="headline">{{ trans('change_avatar_picture') }}</span>
                        </v-card-title>
                        <v-card-text style="max-height: 500px;">
                            <file-pond-input file-types="image/*" :files="files" v-model="avatarId" :label="trans('drag_your_avatar')" uploader="user_avatar"/>
                        </v-card-text>
                        <v-divider></v-divider>
                        <v-card-actions>
                            <v-spacer></v-spacer>
                            <v-btn @click="cancel" flat>
                                {{ $t('app.cancel') }}
                            </v-btn>
                            <v-btn color="primary" @click="saveUserAvatar" :loading="loading">
                                {{ $t('app.save') }}
                            </v-btn>
                        </v-card-actions>
                    </v-card>
                </v-dialog>
            </v-layout>
        </v-flex>
        <v-flex sm12 md8>
            <v-card>
                <v-form method="post" :action="personalUrl" @submit.prevent="save" ref="form">
                    <v-card-text>
                        <v-container grid-list-md text-xs-center>
                            <v-layout row wrap class="pb-5">
                                <v-flex xs12 sm3>
                                    <h4>{{ trans('personal_information') }}</h4>
                                </v-flex>
                                <v-divider vertical />
                                <v-spacer />
                                <v-flex xs12 sm8>
                                    <v-select name="title_id" v-model="form.title_id" :label="trans('title')" :items="titles" item-text="title" item-value="id" />
                                    <v-text-field
                                            name="first_name"
                                            v-model="form.first_name"
                                            :label="`${trans('first_name')} *`"
                                            type="text"
                                            :rules="[rules.required]"
                                    ></v-text-field>
                                    <v-text-field
                                            name="middle_name"
                                            v-model="form.middle_name"
                                            :label="trans('middle_name')"
                                            type="text"
                                    ></v-text-field>
                                    <v-text-field
                                            name="last_name"
                                            v-model="form.last_name"
                                            :label="`${trans('last_name')} *`"
                                            type="text"
                                            :rules="[rules.required]"
                                    ></v-text-field>
                                    <v-text-field
                                            name="father_name"
                                            v-model="form.father_name"
                                            :label="trans('father_name')"
                                            type="text"
                                    ></v-text-field>
                                    <v-text-field
                                            name="mother_name"
                                            v-model="form.mother_name"
                                            :label="trans('mother_name')"
                                            type="text"
                                    ></v-text-field>
                                    <v-menu
                                            :close-on-content-click="false"
                                            v-model="birth_date_menu"
                                            :nudge-right="40"
                                            lazy
                                            transition="scale-transition"
                                            offset-y
                                            full-width
                                            min-width="290px"
                                    >
                                        <v-text-field
                                                slot="activator"
                                                name="birth_date"
                                                v-model="form.birth_date"
                                                :label="trans('birth_date')"
                                                prepend-icon="event"
                                                readonly
                                                clearable
                                        ></v-text-field>
                                        <v-date-picker v-model="form.birth_date" @input="birth_date_menu = false" color="primary"></v-date-picker>
                                    </v-menu>
                                    <v-select clearable name="education_level_id" v-model="form.education_level_id" :label="trans('education_level')" :items="educationLevels" item-text="education_level" item-value="id" />
                                </v-flex>
                            </v-layout>
                            <v-layout row wrap class="pb-5">
                                <v-flex xs12 sm3>
                                    <h4>{{ trans('identity_information') }}</h4>
                                </v-flex>
                                <v-divider vertical />
                                <v-spacer />
                                <v-flex xs12 sm8>
                                    <v-text-field
                                            name="national_id"
                                            v-model="form.national_id"
                                            :label="`${trans('national_id')} *`"
                                            type="text"
                                            :rules="[rules.required]"
                                    ></v-text-field>
                                    <v-text-field
                                            name="id_card_num"
                                            v-model="form.id_card_num"
                                            :label="trans('id_card_num')"
                                            type="text"
                                    ></v-text-field>
                                    <v-layout justify-between row wrap>
                                        <v-flex md6>
                                            <v-text-field
                                                    name="civic_record_area"
                                                    v-model="form.civic_record_area"
                                                    :label="trans('civic_record_area')"
                                                    type="text"
                                            ></v-text-field>
                                        </v-flex>
                                        <v-flex md6>
                                            <v-text-field
                                                    name="civic_record_location"
                                                    v-model="form.civic_record_location"
                                                    :label="trans('civic_record_location')"
                                                    type="text"
                                            ></v-text-field>
                                        </v-flex>
                                        <v-flex md6>
                                            <v-text-field
                                                    name="civic_record_number"
                                                    v-model="form.civic_record_number"
                                                    :label="trans('civic_record_number')"
                                                    type="text"
                                            ></v-text-field>
                                        </v-flex>
                                    </v-layout>
                                    <v-layout justify-between row wrap>
                                        <v-flex md6>
                                            <v-select
                                                    name="gender_id"
                                                    v-model="form.gender_id"
                                                    :label="trans('gender')"
                                                    :items="genders"
                                                    item-text="gender"
                                                    item-value="id"
                                            ></v-select>
                                        </v-flex>
                                        <v-flex md6>
                                            <v-select
                                                    name="religion_id"
                                                    v-model="form.religion_id"
                                                    :label="trans('religion')"
                                                    :items="religions"
                                                    item-text="religion"
                                                    item-value="id"
                                                    @change="form.ideology_id = null"
                                            ></v-select>
                                        </v-flex>
                                        <v-flex md6>
                                            <v-select
                                                    name="ideology_id"
                                                    v-model="form.ideology_id"
                                                    :label="trans('ideology')"
                                                    :items="ideologies"
                                                    item-text="ideology"
                                                    item-value="id"
                                                    :disabled="!form.religion_id"
                                                    :loading="fetchingIdeologies"
                                            ></v-select>
                                        </v-flex>
                                        <v-flex md6>
                                            <v-select
                                                    name="blood_type_id"
                                                    v-model="form.blood_type_id"
                                                    :label="trans('blood_type')"
                                                    :items="bloodTypes"
                                                    item-text="blood_type"
                                                    item-value="id"
                                            ></v-select>
                                        </v-flex>
                                        <v-flex md6>
                                            <v-select
                                                    name="marital_status_id"
                                                    v-model="form.marital_status_id"
                                                    :label="trans('marital_status')"
                                                    :items="maritalStatuses"
                                                    item-text="marital_status"
                                                    item-value="id"
                                            ></v-select>
                                        </v-flex>
                                        <v-flex md6 v-if="showChildren">
                                            <v-text-field
                                                    name="num_of_children"
                                                    v-model="form.num_of_children"
                                                    :label="trans('num_of_children')"
                                                    type="number"
                                            ></v-text-field>
                                        </v-flex>
                                    </v-layout>
                                </v-flex>
                            </v-layout>
                            <v-layout row wrap>
                                <v-flex xs12 sm3>
                                    <h4>{{ trans('location_information') }}</h4>
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
                                                    @change="form.city_id = null;"
                                                    :disabled="!form.country_id"
                                                    :loading="fetchingStates"
                                            ></v-select>
                                        </v-flex>
                                        <v-flex md6>
                                            <v-select
                                                    name="city_id"
                                                    v-model="form.city_id"
                                                    :label="trans('city')"
                                                    :items="cities"
                                                    item-text="city"
                                                    item-value="id"
                                                    :disabled="!form.state_id"
                                                    :loading="fetchingCities"
                                            ></v-select>
                                        </v-flex>
                                    </v-layout>
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
    </v-layout>
</template>

<script>
    export default {
        name: "Personal",
        mounted() {
            this.getPersonalInfo();
            this.getUserInfo();
        },
        computed: {
            userAvatar() {
                return this.$store.getters['auth/avatar'] || 'images/user.png';
            },
            showChildren() {
                if (!this.maritalStatuses.length || !this.form.marital_status_id) {
                    return false;
                }
                let maritalStatus = this.maritalStatuses.find((item) => {
                    return item.id === this.form.marital_status_id;
                });
                return maritalStatus.show_child_num;
            },
            age() {

                if (!this.form.birth_date) {
                    return null;
                }
                console.log(this.form.birth_date, moment().diff(this.form.birth_date, 'years'));
                return moment().diff(this.form.birth_date, 'years');
            },
        },
        data() {
            return {
                avatarId: null,
                files: [],
                form: {
                    'title_id': null,
                    'first_name': null,
                    'middle_name': null,
                    'last_name': null,
                    'father_name': null,
                    'mother_name': null,
                    'birth_date': null,
                    'national_id': null,
                    'id_card_num': null,
                    'civic_record_area': null,
                    'civic_record_location': null,
                    'civic_record_number': null,
                    'gender_id': null,
                    'religion_id': null,
                    'ideology_id': null,
                    'blood_type_id': null,
                    'marital_status_id': null,
                    'education_level_id': null,
                    'num_of_children': null,
                    'country_id': null,
                    'state_id': null,
                    'city_id': null,
                },
                birth_date_menu: null,
                personalUrl: `${automata.url.baseFullUrl}/profile/personal`,
                dialog: false,
                loading: false,
                fetchingIdeologies: false,
                fetchingStates: false,
                fetchingCities: false,

                titles: [],
                genders: [],
                religions: [],
                ideologies: [],
                bloodTypes: [],
                maritalStatuses: [],
                educationLevels: [],
                countries: [],
                states: [],
                cities: [],
                rules: {
                    required: value => !!value || this.$t('validations.required'),
                }
            }
        },
        watch:{
            avatarId(newval) {
                console.log('avatar id', newval);
            },
            'form.religion_id': {
                handler() {
                    this.getIdeologies();
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
            getPersonalInfo() {
                this.loading = true;
                this.$http
                    .get('api/profile/personal/info')
                    .then(res => {
                        this.titles = res.data.titles;
                        this.genders = res.data.genders;
                        this.religions = res.data.religions;
                        this.bloodTypes = res.data.bloodTypes;
                        this.maritalStatuses = res.data.maritalStatuses;
                        this.educationLevels = res.data.educationLevels;
                        this.countries = res.data.countries;
                    })
                    .catch(res => console.log(res))
                    .finally(() => this.loading = false);
            },
            getUserInfo() {
                this.loading = true;
                this.$http
                    .get('api/profile/personal')
                    .then(res => {
                        this.form = res.data.data;
                        this.avatarId = this.form.avatar_id;
                        if (this.avatarId) {
                            this.files = [this.avatarId];
                        }
                    })
                    .finally(() => this.loading = false);
            },
            getIdeologies() {
                if (this.form.religion_id) {
                    this.fetchingIdeologies = true;
                    this.$http
                        .get(`api/ideologies?religion_id=${this.form.religion_id}`)
                        .then(res => this.ideologies = res.data.data)
                        .catch(res => console.log(res))
                        .finally(() => this.fetchingIdeologies = false);
                }
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
            showAvatarDialog() {
                this.dialog = true;
            },
            saveUserAvatar() {
                this.loading = true;
                this.$http
                    .post('api/profile/personal/avatar', {avatar_id: this.avatarId})
                    .then(res => {
                        this.$notification.success(this.$t('message.operation_done'));
                        this.dialog = false;
                        this.$store.dispatch('auth/fetchUser');
                    })
                    .catch(res => this.$notification.error(this.$t('message.operation_failed')))
                    .finally(() => this.loading = false);
            },
            cancel() {
                this.dialog = false;
            },
            save() {
                if (!this.$refs.form.validate()) {
                    return ;
                }
                this.loading = true;
                this.$http
                    .post('api/profile/personal', this.form)
                    .then(res => this.$notification.success(this.$t('message.operation_done')))
                    .catch(res => this.$notification.error(this.$t('message.operation_failed')))
                    .finally(() => this.loading = false)
            },
            trans(key) {
                return this.$t(`profiles.personal.${key}`)
            }
        }
    }
</script>

<style scoped>

</style>
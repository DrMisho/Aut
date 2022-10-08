<template>
    <v-dialog v-model="dialog" max-width="700px" scrollable>
        <v-card>
            <v-form method="post" :action="url">
                <v-tabs v-model="tab" centered color="primary" dark icons-and-text>
                    <v-tab href="#site" ref="site">
                        {{trans('seo')}}
                        <v-icon>search</v-icon>
                    </v-tab>

                    <v-tab href="#graph">
                        {{trans('graph')}}
                        <v-icon>call</v-icon>
                    </v-tab>

                    <v-tab href="#card">
                        {{trans('card')}}
                        <v-icon>equalizer</v-icon>
                    </v-tab>

                    <!--<v-tab href="#meta">
                        {{trans('additional_info')}}
                        <v-icon>add</v-icon>
                    </v-tab>-->

                    <v-tab-item value="site">
                        <v-card flat>
                            <v-card-text class="scroll-on-60vh">
                                <template v-for="(lang, locale) in supportedLocales">
                                    <v-flex>
                                        <v-text-field
                                                name="title"
                                                :label="`${trans('title')} (${lang.native})`"
                                                type="text"
                                                v-model="form[locale]['title']"
                                        ></v-text-field>
                                    </v-flex>
                                    <v-flex>
                                        <v-textarea
                                                name="description"
                                                box
                                                v-model="form[locale]['description']"
                                                :label="`${trans('description')} (${lang.native})`"
                                                auto-grow
                                                value=""
                                        ></v-textarea>
                                    </v-flex>
                                    <v-flex>
                                        <tags-input name="keywords" v-model="form[locale]['keywords']" :label="`${trans('keywords')} (${lang.native})`" chips />
                                    </v-flex>
                                </template>
                            </v-card-text>
                        </v-card>
                    </v-tab-item>

                    <v-tab-item value="graph">
                        <v-card flat>
                            <v-card-text class="scroll-on-60vh">
                                <v-select
                                        :label="trans('graph_type')"
                                        :items="graphTypes"
                                        v-model="form.graph_type"
                                        clearable
                                ></v-select>
                                <v-text-field v-if="form.graph_type !== 'website'"
                                        v-model="form.username"
                                        :label="`${trans('username')}`"
                                ></v-text-field>
                                <template v-if="form.graph_type !== 'website'" v-for="(lang, locale) in supportedLocales">
                                    <v-text-field
                                            v-model="form[locale]['first_name']"
                                            :label="`${trans('first_name')} (${lang.native})`"
                                    ></v-text-field>
                                    <v-text-field
                                            v-model="form[locale]['last_name']"
                                            :label="`${trans('last_name')} (${lang.native})`"
                                    ></v-text-field>
                                    <v-text-field v-if="form.graph_type === 'article'"
                                            v-model="form[locale]['section']"
                                            :label="`${trans('section')} (${lang.native})`"
                                            clearable
                                    ></v-text-field>
                                    <tags-input v-if="form.graph_type === 'article' || form.graph_type === 'book'"
                                            v-model="form[locale]['tag']"
                                            :label="`${trans('tag')} (${lang.native})`"
                                            clearable
                                    />
                                </template>
                                <v-select v-if="form.graph_type !== 'website'"
                                        v-model="form.gender"
                                        :label="trans('gender')"
                                        :items="genders"
                                        clearable
                                ></v-select>
                                <date-input v-if="form.graph_type === 'article'"
                                        v-model="form.article_published_time"
                                        :label="trans('article_published_time')"
                                        clearable
                                />
                                <date-input v-if="form.graph_type === 'article'"
                                        v-model="form.article_modified_time"
                                        :label="trans('article_modified_time')"
                                        clearable
                                />
                                <date-input v-if="form.graph_type === 'article'"
                                        v-model="form.article_expiration_time"
                                        :label="trans('article_expiration_time')"
                                        clearable
                                />
                                <date-input v-if="form.graph_type === 'book'"
                                        v-model="form.book_release_date"
                                        :label="trans('book_release_date')"
                                        clearable
                                />
                                <v-text-field v-if="form.graph_type === 'book'"
                                        v-model="form.book_isbn"
                                        :label="`${trans('book_isbn')}`"
                                ></v-text-field>
                                <file-pond-input
                                        class="graphImage"
                                        file-types="image/*"
                                        v-model="form.graph_image_id"
                                        :label="trans('drag_your_image_graph')" :files="graphImage"
                                        uploader="seo-graph"
                                />
                            </v-card-text>
                        </v-card>
                    </v-tab-item>

                    <v-tab-item value="card">
                        <v-card flat>
                            <v-card-text class="scroll-on-60vh">
                                <v-select
                                        v-model="form.card_type"
                                        name="card_type"
                                        :label="trans('card_type')"
                                        :items="cardTypes"
                                        clearable
                                ></v-select>
                                <file-pond-input
                                        file-types="image/*"
                                        v-model="form.card_image_id"
                                        :label="trans('drag_your_image_card')"
                                        :files="cardImage"
                                        uploader="seo-card"/>
                            </v-card-text>
                        </v-card>
                    </v-tab-item>
                    <!--
                    <v-tab-item value="meta">
                        <v-card flat>
                            <v-card-text class="scroll-on-60vh">
                                <v-text-field
                                        v-model="form.theme_color"
                                        :label="`${trans('theme_color')}`"
                                ></v-text-field>
                                <v-text-field
                                        v-model="form.google"
                                        :label="`${trans('google')}`"
                                ></v-text-field>
                                <v-text-field
                                        v-model="form.google_site_verification"
                                        :label="`${trans('google_site_verification')}`"
                                ></v-text-field>
                                <v-text-field
                                        v-model="form.pinterest_verification"
                                        :label="`${trans('pinterest_verification')}`"
                                ></v-text-field>
                                <v-text-field
                                        v-model="form.yandex_verification"
                                        :label="`${trans('yandex_verification')}`"
                                ></v-text-field>
                                <v-text-field
                                        v-model="form.msvalidate_01"
                                        :label="`${trans('msvalidate')}`"
                                ></v-text-field>
                                <v-text-field
                                        v-model="form.alexa_verify_id"
                                        :label="`${trans('alexaVerifyID')}`"
                                ></v-text-field>
                                <v-text-field
                                        v-model="form.domain_verify"
                                        :label="`${trans('domain_verify')}`"
                                ></v-text-field>
                                <v-text-field
                                        v-model="form.norton_safeweb_site_verification"
                                        :label="`${trans('norton_safeweb_site_verification')}`"
                                ></v-text-field>
                                <v-text-field
                                        v-model="form.generator"
                                        :label="`${trans('generator')}`"
                                ></v-text-field>
                                <v-text-field
                                        v-model="form.subject"
                                        :label="`${trans('subject')}`"
                                ></v-text-field>
                                <v-text-field
                                        v-model="form.rating"
                                        :label="`${trans('rating')}`"
                                ></v-text-field>
                                <v-text-field
                                        v-model="form.referrer"
                                        :label="`${trans('referrer')}`"
                                ></v-text-field>
                                <v-text-field
                                        v-model="form.format_detection"
                                        :label="`${trans('format_detection')}`"
                                ></v-text-field>
                                <v-text-field
                                        v-model="form.icbm"
                                        :label="`${trans('ICBM')}`"
                                ></v-text-field>
                                <v-text-field
                                        v-model="form.geo_position"
                                        :label="`${trans('geo_position')}`"
                                ></v-text-field>
                                <v-text-field
                                        v-model="form.geo_region"
                                        :label="`${trans('geo_region')}`"
                                ></v-text-field>
                                <v-text-field
                                        v-model="form.geo_placenam"
                                        :label="`${trans('geo_placename')}`"
                                ></v-text-field>
                            </v-card-text>
                        </v-card>
                    </v-tab-item>
                    -->
                </v-tabs>
            </v-form>
            <v-divider />
            <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn flat @click="cancel">{{ $t('app.cancel') }}</v-btn>
                <v-btn :loading="loading" color="primary" @click="save">{{ $t('app.save') }}</v-btn>
            </v-card-actions>
        </v-card>
    </v-dialog>
</template>

<script>
    export default {
        name: "Seo",
        props: {
            buildable:{
                default() {
                    return {
                        id: null,
                        type: null,
                    }
                }
            },
            value: {
                type: Boolean,
                default: false,
            },
            title: {
                default: null
            }
        },
        data() {
            return {
                tab: 'site',
                dialog: this.value,
                loading: false,
                buildableInfo: this.buildable,
                graphTypes: [
                    {text: 'Website', value: 'website'},

                    {text: 'Article', value: 'article'},
                    {text: 'Book', value: 'book'},
                    {text: 'Profile', value: 'profile'},

                    // {text: 'Song', value: 'music.song'},
                    // {text: 'Album', value: 'music.album'},
                    // {text: 'Playlist', value: 'music.playlist'},
                    // {text: 'Radio Station', value: 'music.radio_station'},

                    // {text: 'Movie', value: 'video.movie'},
                    // {text: 'Episode', value: 'video.episode'},
                    // {text: 'TV Show', value: 'video.tv_show'},
                    // {text: 'Other video Type', value: 'video.other'},
                ],
                genders: [
                    {text: 'Male', value: 'male'},
                    {text: 'Female', value: 'female'},
                ],
                cardTypes: [
                    {text: 'Summary', value: 'summary'},
                    {text: 'Summary Large Image', value: 'summary_large_image'},
                    // {text: 'App', value: 'app'},
                    // {text: 'Gallery', value: 'gallery'},
                    // {text: 'Photo', value: 'photo'},
                    // {text: 'Player', value: 'player'},
                    // {text: 'Product', value: 'product'},
                ],
                graphImage: [],
                cardImage: [],
                id: null,
                form: {},
                emptyFrom: {
                    graph_type: null,
                    username: null,
                    gender: null,
                    article_published_time: null,
                    article_modified_time: null,
                    article_expiration_time: null,
                    book_release_date: null,
                    book_isbn: null,
                    graph_image_id: null,
                    card_type: null,
                    card_image_id: null,

                    application_name: null,
                    theme_color: null,
                    google: null,
                    google_site_verification: null,
                    pinterest_verification: null,
                    yandex_verification: null,
                    msvalidate_01: null,
                    alexa_verify_id: null,
                    domain_verify: null,
                    norton_safe_web_site_verification: null,
                    generator: null,
                    subject: null,
                    rating: null,
                    referrer: null,
                    format_detection: null,
                    icbm: null,
                    geo_position: null,
                    geo_region: null,
                    geo_placename: null,
                },
            };
        },
        computed: {
            url() {
                console.log(this.$automata.helper.localizeUrl('seo'))
                return this.$automata.helper.localizeUrl('seo');
            },
            supportedLocales() {
                return this.$automata.config.language.supportedLocales
            },
        },
        created() {
            for (let locale in this.supportedLocales) {
                this.$set(this.emptyFrom, locale, {
                    title: null,
                    description: null,
                    keywords: null,
                    first_name: null,
                    last_name: null,
                    section: null,
                    tag: null,
                });
            }
            this.form = this.$automata.helper.cloneObject(this.emptyFrom);
        },
        watch: {
            value: {
                immediate: true,
                handler(newval) {
                    this.dialog = newval;
                }
            },
            dialog(newval) {
                this.$emit('input', newval);
                if (newval) {
                    window.dispatchEvent(new Event('resize'));
                }
            },
            buildable:{
                immediate: true,
                deep: true,
                handler(newval) {
                    this.buildableInfo = newval;
                    this.fetchSeoInfo();
                }
            }
        },
        methods: {
            fetchSeoInfo() {
                if (!this.buildableInfo.id || !this.buildableInfo.type) {
                    this.id = null;
                    this.form = this.$automata.helper.cloneObject(this.emptyFrom);
                    this.cardImage = [];
                    this.graphImage = [];
                    return;
                }
                this.loading = true;
                this.$http
                    .get(`api/seo/${this.buildableInfo.id}/${this.buildableInfo.type}`)
                    .then(res => {
                        this.cardImage = [];
                        this.graphImage = [];
                        this.form = res.data.data.value || this.$automata.helper.cloneObject(this.emptyFrom);
                        this.id = res.data.data.id;
                        if (this.form.graph_image_id) {
                            this.graphImage.push(this.form.graph_image_id);
                        }
                        if (this.form.card_image_id) {
                            this.cardImage.push(this.form.card_image_id);
                        }
                    })
                    .finally(() => this.loading = false);
            },
            cancel() {
                this.dialog = false;
            },
            save() {
                this.loading = true;
                let request = null;
                if (!this.id) {
                    request = this.store();
                } else {
                    request = this.update();
                }
                request
                    .then(res => {
                        this.$notification.success(this.$t('message.operation_done'));
                        this.dialog = false;
                    })
                    .catch(res => this.$notification.error(this.$t('message.operation_failed')))
                    .finally(() => this.loading = false);
            },
            store() {
                return this.$http.post(`api/seo`, {
                    id: this.id,
                    buildable_id: this.buildable.id,
                    buildable_type: this.buildable.type,
                    value: this.form,
                });
            },
            update() {
                return this.$http.put(`api/seo/${this.id}`, {
                    id: this.id,
                    buildable_id: this.buildable.id,
                    buildable_type: this.buildable.type,
                    value: this.form,
                });
            },
            trans(key) {
                return this.$t(`seo.${key}`)
            },
        }
    }
</script>

<style >
    .scroll-on-60vh{
        overflow: auto;
        max-height: 60vh;
    }
</style>
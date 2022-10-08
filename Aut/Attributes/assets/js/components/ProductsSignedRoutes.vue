<template>
    <div>
        <data-table ref="signed_routes" source="attribute-products-signed-routes" :silent-params="{product_id}" @addSignedRoute="productSignedRoute(emptyItem)" @editSignedRoute="productSignedRoute"/>
        <v-dialog v-model="dialog" scrollable :max-width="dialogWidth">
            <v-card>
                <v-card-title class="headline primary" style="color: white;">{{ title }}</v-card-title>
                <v-divider></v-divider>
                <v-card-text>
                    <v-container grid-list-xs class="pa-0">
                        <v-layout row wrap justify-space-around>
                            <v-flex :xs12="!(qrPath && url)" :xs6="qrPath && url">
                                <v-container grid-list-xs class="pa-0">
                                    <v-layout row wrap>
                                        <v-flex xs12>
                                            <autocomplete multiple resource="visitor" :label="translate('users')" v-model="form.user_id" clearable/>
                                            <autocomplete multiple resource="products" :label="translate('products')" v-model="form.product_id" clearable/>
                                            <v-list two-line dense>
                                                <v-list-tile @click="">
                                                    <v-list-tile-action>
                                                        <v-checkbox v-model="form.with_qr" color="primary" />
                                                    </v-list-tile-action>

                                                    <v-list-tile-content @click="form.with_qr = !form.with_qr">
                                                        <v-list-tile-title>{{translate('qr_code')}}</v-list-tile-title>
                                                        <v-list-tile-sub-title>{{translate('generate_url')}}</v-list-tile-sub-title>
                                                    </v-list-tile-content>
                                                </v-list-tile>

                                               

                                                <v-list-tile @click="">
                                                    <v-list-tile-action>
                                                        <v-checkbox v-model="form.temp_url" color="primary" />
                                                    </v-list-tile-action>

                                                    <v-list-tile-content @click="form.temp_url = !form.temp_url">
                                                        <v-list-tile-title>{{translate('temp_url')}}</v-list-tile-title>
                                                        <v-list-tile-sub-title>{{translate('msg_temp_url')}}</v-list-tile-sub-title>
                                                    </v-list-tile-content>
                                                </v-list-tile>
                                            </v-list>
                                        </v-flex>
                                        <v-flex xs6 v-if="form.temp_url">
                                            <date-input v-model="form.expire_at" :label="translate('expire_date')" />
                                        </v-flex>
                                        <v-flex xs6 v-if="form.temp_url">
                                            <time-input v-model="form.expire_time_at" :label="translate('expire_time')" />
                                        </v-flex>
                                        <template v-if="url">
                                            <v-flex xs12 >
                                                <v-text-field readonly v-model="url" :label="`Url`" ></v-text-field>
                                            </v-flex>
                                            <v-flex xs12 class="text-xs-center">
                                                <v-tooltip top>
                                                    <template v-slot:activator="{ on }">
                                                        <v-btn
                                                                v-clipboard:copy="url"
                                                                v-clipboard:success="copied"
                                                                v-clipboard:error="notCopied"
                                                                flat
                                                                icon
                                                                v-on="on"
                                                        ><v-icon color="grey darken-2">far fa-copy</v-icon></v-btn>
                                                    </template>
                                                    Copy Url
                                                </v-tooltip>
                                                <v-tooltip top>
                                                    <template v-slot:activator="{ on }">
                                                        <v-btn flat icon v-on="on"><v-icon color="green">fab fa-whatsapp</v-icon></v-btn>
                                                    </template>
                                                    Share via Whatsapp
                                                </v-tooltip>
                                                <v-tooltip top>
                                                    <template v-slot:activator="{ on }">
                                                        <v-btn flat icon v-on="on"><v-icon color="blue">fab fa-telegram</v-icon></v-btn>
                                                    </template>
                                                    Share via Telegram
                                                </v-tooltip>
                                            </v-flex>
                                        </template>
                                    </v-layout>
                                </v-container>
                            </v-flex>
                            <template v-if="qrPath && url">
                                <v-divider vertical/>
                                <v-flex xs5 >
                                    <v-container grid-list-xs>
                                        <v-layout row wrap justify-center>
                                            <v-flex xs12>
                                                <v-img :src="qrPath" aspect-ratio="1"/>
                                            </v-flex>
                                            <v-flex xs12 class="text-xs-center">
                                                <v-tooltip top>
                                                    <template v-slot:activator="{ on }">
                                                        <v-btn tag="a" :download="item.name" :href="qrPath" flat icon v-on="on"><v-icon color="grey darken-2">fas fa-download</v-icon></v-btn>
                                                    </template>
                                                    Download
                                                </v-tooltip>
                                                <v-tooltip top>
                                                    <template v-slot:activator="{ on }">
                                                        <v-btn flat icon v-on="on"><v-icon color="green">fab fa-whatsapp</v-icon></v-btn>
                                                    </template>
                                                    Share via Whatsapp
                                                </v-tooltip>
                                                <v-tooltip top>
                                                    <template v-slot:activator="{ on }">
                                                        <v-btn flat icon v-on="on"><v-icon color="blue">fab fa-telegram</v-icon></v-btn>
                                                    </template>
                                                    Share via Telegram
                                                </v-tooltip>
                                            </v-flex>
                                        </v-layout>
                                    </v-container>
                                </v-flex>
                            </template>
                        </v-layout>
                    </v-container>
                </v-card-text>
                <v-divider></v-divider>
                <v-card-actions>
                    <v-spacer/>
                    <v-btn :disabled="loading" color="primary" flat dark @click="dialog = false">{{translate('disagree')}}</v-btn>
                    <v-btn :disabled="loading" :loading="loadingGenerate" color="secondary" @click="generate">{{translate('genrate')}}</v-btn>
<!--                    <v-btn :disabled="loading" :loading="loadingSave" color="primary" @click="dialog = false">Save</v-btn>-->
                </v-card-actions>
            </v-card>
        </v-dialog>
    </div>
</template>

<script>

    export default {
        name: 'Products',
        props: {
            product_id: {
                default: null
            }
        },
        data() {
            return {
                dialog: false,
                loading: false,
                loadingGenerate: false,
                loadingSave: false,
                qrPath: null,
                url: null,
                id: null,
                form: {
                    user_id: null,
                    product_id: null,
                    with_qr: true,
                    // with_logo: true,
                    with_logo: false,
                    temp_url: false,
                    expire_at: null,
                    expire_time_at: null,
                },
                item: {},
                emptyItem: {
                    id: null,
                    user_id: null,
                    product_id: null,
                    expire_at: null,
                    expire_time_at: null,
                    url: null,
                    image_path: null,
                    expired_at: null,
                }
            };
        },
        computed: {
            title() {
                return this.translate('titel_genrate');
            },
            dialogWidth() {
                if (this.qrPath) {
                    return '700px';
                }
                return '500px';
            }
        },
        methods: {
           translate(key) {
                return this.$t(`attributes.${key}`)
            },
            productSignedRoute(item) {
                console.log('item', item);
                if (item) {
                    this.id = item.id;
                    this.form.user_id = item.user_id;
                    this.form.product_id = item.product_id;
                    this.form.expire_at = item.expire_at;
                    this.form.expire_time_at = item.expire_time_at;
                    this.url = item.url;
                    this.qrPath = item.image_path;
                    this.form.with_qr = !!item.image_path;
                    this.form.temp_url = !!item.expired_at;
                }
                this.dialog = true;
            },
            generate() {
                this.loading = true;
                this.loadingGenerate = true;
                let url = `api/attribute/generate/qr`;
                let request = null;

                if (this.id) {
                    url = `${url}/${this.id}`;
                    request = this.$http.put(url, this.form)
                } else {
                    request = this.$http.post(url, this.form)
                }

                request
                    .then(res => {
                        this.qrPath = res.data.image_path;
                        this.url = res.data.url;
                        console.log(res);
                         this.$refs.signed_routes.fetchDataSource();
                    })
                    .finally(() => {
                        this.loading = false;
                        this.loadingGenerate = false;
                    });
            },
            copied() {
                this.$notification.success('Url copied to clipboard');
            },
            notCopied() {
                this.$notification.success('Oops Could not copy the url');
            },
        },
    }
</script>

<style scoped>

</style>
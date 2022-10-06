<template>
    <v-flex>
        <card-list :items="cards" :title="trans('packages')" @btnClicked="addSalePackage" :loading="loading" :limit="3" class="text-xs-center">
            <template v-slot:add-btn>
                <v-speed-dial v-model="fab" :direction="direction" :open-on-hover="true">
                    <template v-slot:activator>
                        <v-btn v-model="fab" color="primary " dark fab>
                            <v-icon style="width: 22px">subscriptions</v-icon>
                        </v-btn>
                    </template>
                    <v-btn fab dark small color="secondary" @click="fetch">
                        <v-icon style="width: 22px">fas fa-sync-alt</v-icon>
                    </v-btn>
                    <v-btn fab dark small color="primary" @click="addSalePackage">
                        <v-icon>fas fa-plus</v-icon>
                    </v-btn>
                </v-speed-dial>
            </template>
            <template slot-scope="{item}">
                <v-flex md4 sm6 xs12>
                    <pricing-card v-model="item" show-user-type>
                        <template slot-scope="{ attributes, perType, per }">
                            <slot name="card" :attributes="attributes" :per-type="perType" :per="per"></slot>
                        </template>
                        <template v-slot:actions>
                            <v-btn :disabled="disableBtn"  @click="edit(item)" flat icon color="success"><v-icon >edit</v-icon></v-btn>
                            <confirm-btn :disabled="disableBtn" @confirmed="destroy(item)" flat icon color="red">
                                <v-icon >delete</v-icon>
                            </confirm-btn>
                            <v-tooltip top v-if="!item.inactive" >
                                <template v-slot:activator="{ on }">
                                    <v-btn v-on="on" :disabled="disableBtn" @click="deactivate(item)" flat icon >
                                        <v-icon color="green">check_circle_outline</v-icon>
                                    </v-btn>
                                </template>
                                Deactivate
                            </v-tooltip>
                            <v-tooltip top v-if="item.inactive" >
                                <template v-slot:activator="{ on }">
                                    <v-btn v-on="on" :disabled="disableBtn" @click="activate(item)" flat icon >
                                        <v-icon color="red">cancel</v-icon>
                                    </v-btn>
                                </template>
                                Activate
                            </v-tooltip>
                        </template>
                    </pricing-card>
                </v-flex>
            </template>
        </card-list>

        <v-dialog v-model="dialog" fullscreen hide-overlay transition="dialog-bottom-transition">
            <v-card v-if="dialog">
                <v-toolbar dark color="primary" fixed>
                    <v-btn icon dark @click="dialog = false">
                        <v-icon>close</v-icon>
                    </v-btn>
                    <v-toolbar-title>{{dialogTitle}}</v-toolbar-title>
                    <v-spacer />
                    <v-toolbar-items>
                        <v-btn dark flat @click="save">{{ $t('app.save') }}</v-btn>
                    </v-toolbar-items>
                </v-toolbar>
                <v-card-text>
                    <v-container class="mt-5">
                        <v-flex md10>
                            <sale-package-form ref="SalePackageForm" @cancel="cancel" @saved="saved" v-model="card" >
                                <template slot-scope="{attributes}">
                                    <slot name="form" :attributes="attributes"></slot>
                                </template>
                            </sale-package-form>
                        </v-flex>
                    </v-container>
                </v-card-text>
            </v-card>
        </v-dialog>
    </v-flex>
</template>

<script>

    import PricingCard from "./PricingCard";
    import SalePackageForm from "./SalePackageForm";

    export default {
        name: "LSalesPackages",
        components: {PricingCard, SalePackageForm},
        props:{
            attributes: {
                type: Object,
                default: {},
            }
        },
        data() {
            return {
                fab: false,
                loading: false,
                disableBtn: false,
                dialog: false,
                cards: [],
                card: {},
                confirm: false,
                supportedLocales: automata.language.config.supportedLocales,
                emptyForm: {
                    per_type: null,
                    per: null,
                    attributes: {},
                    price: 0,
                    currency_id: null,
                    best_deal: false,
                    color: null,
                    deactivated_at: null,
                    type_id: null,
                },
            }
        },
        computed: {
            dialogTitle() {
                let prefix = this.card.hasOwnProperty('id') ? this.$t('app.edit') : this.$t('app.add');
                return `${prefix} ${this.trans('pricing_card')}`;
            },
            direction() {
                return automata.isRtl ? 'left' : 'right';
            }
        },
        methods: {
            addSalePackage() {
                this.clearForm();
                this.dialog = true;
            },
            clearForm() {
                this.card = automata.helper.cloneObject(this.emptyForm);
            },
            saved() {
                this.fetch();
                this.dialog = false;
            },
            fetch() {
                this.loading = true;
                this.$http
                    .get('api/sale-package')
                    .then(res => this.cards = res.data.data)
                    .finally(() => this.loading = false);
            },
            cancel() {
                this.dialog = false;
            },
            save() {
                this.$refs.SalePackageForm.save();
            },
            trans(key) {
                return this.$t(`sale_package.${key}`)
            },
            edit(card) {
                this.card = card;
                this.dialog = true;
            },
            destroy(card) {
                this.disableBtn = true;
                this.$http
                    .delete(`api/sale-package/${card.id}`)
                    .then(res => {
                        this.$notification.success(this.$t('message.operation_done'));
                        this.fetch();
                    })
                    .catch(res => this.$notification.error(this.$t('message.operation_failed')))
                    .finally(() => this.disableBtn = false);
            },
            activate(card) {
                this.disableBtn = true;
                this.$http.put(`api/sale-package/${card.id}/activate`)
                    .then(res => {
                        this.$notification.success(this.$t('message.operation_done'))
                        card.inactive = false;
                    })
                    .catch(res => this.$notification.error(this.$t('message.operation_failed')))
                    .finally(() => this.disableBtn = false)
            },
            deactivate(card) {
                this.disableBtn = true;
                this.$http.put(`api/sale-package/${card.id}/deactivate`)
                    .then(res => {
                        this.$notification.success(this.$t('message.operation_done'));
                        card.inactive = true;
                    })
                    .catch(res => this.$notification.error(this.$t('message.operation_failed')))
                    .finally(() => this.disableBtn = false)
            }
        },
        mounted() {
            this.fetch();

            // init multi language props
            for (let locale in this.supportedLocales) {
                this.$set(this.emptyForm, locale, {
                    name: null,
                    title: null,
                    description: null,
                    level: null
                });
            }

            // init Attributes props
            for (let key in this.attributes) {
                this.$set(this.emptyForm.attributes, key, this.attributes[key]);
            }
        },
    }
</script>

<style scoped>

</style>

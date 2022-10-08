<template>
    <v-flex>
        <card-list :loading="loading" :items="cards" :add="false" :title="trans('packages')" :limit="3" class="text-xs-center">
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
                </v-speed-dial>
            </template>
            <template v-slot:default="{ item, index}">
                <v-flex md4 sm6 xs12>
                    <pricing-card v-model="item">
                        <template slot-scope="{ attributes, perType, per }">
                            <slot name="card" :attributes="attributes" :per-type="perType" :per="per"></slot>
                        </template>
                        <template v-slot:actions>
                            <v-btn :disabled="disableBtn" v-if="item.subscribed" @click="showDetails(item)" color="primary" outline>
                                {{ trans('details') }}
                            </v-btn>
                            <!--<v-tooltip v-if="item.subscribed" top>
                                <template v-slot:activator="{on}">
                                    <v-btn v-on="on" icon :disabled="disableBtn" @click="markAsDefault(item)">
                                        <v-icon color="primary">far fa-circle</v-icon>
                                    </v-btn>
                                </template>
                                {{ trans('mark_as_default_to_use') }}
                            </v-tooltip>
                            <v-tooltip v-if="item.subscribed" top>
                                <template v-slot:activator="{on}">
                                    <v-btn v-on="on" icon :disabled="disableBtn" @click="removeFromDefault(item)">
                                        <v-icon color="primary">far fa-dot-circle</v-icon>
                                    </v-btn>
                                </template>
                                {{ trans('remove_from_default') }}
                            </v-tooltip>-->
                            <slot v-else name="confirmation" :item="item" :disabled="disableBtn">
                                <confirm-btn :disabled="disableBtn" @confirmed="subscribe(item)" color="primary">
                                    {{ trans('subscribe') }}
                                </confirm-btn>
                            </slot>
                            <slot name="action" :item="item" :index="index" :disabled="disableBtn"></slot>
                        </template>
                    </pricing-card>
                </v-flex>
            </template>
        </card-list>
        <v-dialog v-model="dialog" max-width="800px" scrollable>
            <v-card>
                <v-toolbar dark color="primary">
                    <v-btn icon dark @click="dialog = false">
                        <v-icon>close</v-icon>
                    </v-btn>
                    <v-toolbar-title>{{ trans('package_detail') }} ({{ userCard.subscribed_at }}) -> ({{ userCard.end_at }})</v-toolbar-title>
                    <v-spacer/>
                </v-toolbar>
                <v-card-text>
                    <slot name="attributes-details" :attributes="card.attributes" :user-attributes="userCard.attributes" :per-type="card.per_type" :per="card.per" />
                </v-card-text>
                <v-divider/>
                <v-card-actions>
                    <v-spacer />
                    <v-btn color="primary" flat @click="dialog = false">{{ $t('app.close') }}</v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog>
    </v-flex>
</template>

<script>
    import PricingCard from "./PricingCard";

    export default {
        name: "LSalesPackagesUser",
        components: {PricingCard},
        props: {

        },
        data() {
            return {
                fab: false,
                isRtl: automata.isRtl,
                dialog: false,
                loading: false,
                disableBtn: false,
                cards: [],
                card: {
                    attributes:{},
                },
                userCard: {
                    attributes:{},
                },
                supportedLocales: automata.language.config.supportedLocales,
            };
        },
        computed: {
            direction() {
                return automata.isRtl ? 'left' : 'right';
            },
        },
        mounted() {
            this.fetch();
        },
        methods: {
            fetch() {
                this.loading = true;
                this.$http
                    .get('api/sale-package/pricing')
                    .then(res => this.cards = res.data.data)
                    .finally(() => this.loading = false);
            },
            subscribe(card) {
                this.disableBtn = true;
                this.$http
                    .put(`api/sale-package/${card.id}/subscribe`)
                    .then(res => {
                        this.$notification.success(this.$t('message.operation_done'));
                        this.fetch();
                        this.$navigation.reFetch();
                    })
                    .catch(res => this.$notification.error(this.$t('message.operation_failed')))
                    .finally(() => this.disableBtn = false);
            },
            showDetails(card) {
                this.dialog = true;
                this.card = card;
                this.userCard = card.subscription;
            },
            markAsDefault(card) {

            },
            removeFromDefault(card) {

            },
            trans(key) {
                return this.$t(`sale_package.${key}`)
            },
        }
    }
</script>

<style scoped>

</style>

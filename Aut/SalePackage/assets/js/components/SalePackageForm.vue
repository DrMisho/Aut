<template>
    <v-container grid-list-md text-xs-center class="pa-0 ma-0">
        <v-form method="post" :action="url" @submit.prevent="save" ref="form">
            <v-layout row wrap class="pb-5">
                <v-flex xs12 sm3>
                    <h4>{{ trans('basic_information') }}</h4>
                </v-flex>
                <v-divider vertical />
                <v-spacer />
                <v-flex xs12 sm8 md8>
                    <v-layout justify-between row wrap>
                        <v-flex md12>
                            <template v-for="(lang, locale) in supportedLocales">
                                <v-flex>
                                   <v-text-field
                                        name="name"
                                        :label="`${trans('name')} (${lang.native}) *`"
                                        type="text"
                                        v-model="form[locale]['name']"
                                        :rules="[rules.required]"
                                  ></v-text-field>
                                </v-flex>
                                <v-flex>
                                    <v-text-field
                                            name="title"
                                            :label="`${trans('title')} (${lang.native}) *`"
                                            type="text"
                                            v-model="form[locale]['title']"
                                            :rules="[rules.required]"
                                    ></v-text-field>
                                </v-flex>
                                <v-flex>
                                    <v-text-field
                                            name="level"
                                            :label="`${trans('level')} (${lang.native}) *`"
                                            type="text"
                                            v-model="form[locale]['level']"
                                            :rules="[rules.required]"
                                    ></v-text-field>
                                </v-flex>
                                <v-flex>
                                    <v-textarea
                                            name="description"
                                            box
                                            v-model="form[locale]['description']"
                                            :label="`${trans('description')} (${lang.native})`"
                                            auto-grow
                                            :rules="[rules.required]"
                                    ></v-textarea>
                                </v-flex>
                            </template>
                        </v-flex>
                        <v-flex md6>
                            <v-select
                                    :items="perTypes"
                                    :label="`${trans('per_type')}`"
                                    v-model="form.per_type"
                                    :rules="[rules.required]"
                                    clearable
                            ></v-select>
                        </v-flex>
                        <v-flex md6>
                            <v-text-field
                                    name="per"
                                    :label="`${trans('per')}`"
                                    type="number"
                                    v-model="form.per"
                                    clearable
                            ></v-text-field>
                        </v-flex>
                        <v-flex md6>
                            <price-input
                                name="price"
                                :currency.sync="currency"
                                :currency-id.sync="form.currency_id"
                                :currencies="currencies"
                                item-id="value"
                                item-text="text"
                                select-currency
                                :label="`${trans('price')}`"
                                v-model="form.price"
                                :rules="[rules.required]"
                            ></price-input>
                        </v-flex>
                        <v-flex md6>
                            <color-input
                                    :label="`${trans('color')}`"
                                    v-model="form.color"
                            ></color-input>
                        </v-flex>
                        <v-flex md6>
                            <select-input
                                clearable
                                resource="subscriber_types"
                                :label="`${trans('subscriber_types')}`"
                                v-model="form.type_id"
                            ></select-input>
                        </v-flex>
                        <v-flex md12>
                            <v-switch
                                color="primary"
                                name="best_deal"
                                :label="`${trans('mark_as_best_deal')}`"
                                v-model="form.best_deal"
                            ></v-switch>
                        </v-flex>
                    </v-layout>
                </v-flex>
            </v-layout>
            <v-layout row wrap class="pb-5">
                <v-flex xs12 sm3>
                    <h4>{{ trans('attributes') }}</h4>
                </v-flex>
                <v-divider vertical />
                <v-spacer />
                <v-flex xs12 sm8 md8>
                    <v-layout justify-between row wrap>
                        <slot :attributes="form.attributes"></slot>
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
        name: "SalePackageForm",
        props: {
            value: {
                type: Object,
                default: null,
            },
        },
        data() {
            return {
                url: `${automata.url.baseFullUrl}/sale-package`,
                form: this.value,
                currency: 'Chose Currency',
                perTypes: [
                    {text: `${this.trans('day')}`, value: 'day'},
                    {text: `${this.trans('month')}`, value: 'month'},
                    {text: `${this.trans('year')}`, value: 'year'},
                    {text: `${this.trans('forever')}`, value: 'forever'},
                ],
                currencies: [],
                loadingInfo: false,
                loading: false,
                inputDisable: true,
                supportedLocales: automata.language.config.supportedLocales,
                rules: {
                    required: value => !!value || this.$t('validations.required'),
                },
            };
        },
        watch: {
            value: {
                immediate: true,
                handler(newval) {
                    this.form = newval;
                    if (newval && newval.currency) {
                        this.currency = newval.currency.currency_name;
                    }
                },
            },
            form(newval) {
                this.$emit('input', newval);
            },
        },
        methods: {
            save() {
                if (!this.$refs.form.validate()) {
                    return;
                }

                this.loading = true;
                let request;
                if (!this.form.id) {
                    request = this.store();
                } else {
                    request = this.update();
                }
                request.finally(() => this.loading = false);
            },
            store() {
                return this.$http
                    .post(`api/sale-package`, this.form)
                    .then(res => {
                        this.$notification.success(this.$t('message.operation_done'));
                        this.$emit('saved');
                    })
                    .catch(res => this.$notification.error(this.$t('message.operation_failed')));
            },
            update() {
                return this.$http
                    .put(`api/sale-package/${this.form.id}`, this.form)
                    .then(res => {
                        this.$notification.success(this.$t('message.operation_done'));
                        this.$emit('saved');
                    })
                    .catch(res => this.$notification.error(this.$t('message.operation_failed')));
            },
            fetchInfo() {
                this.$http.get(`api/autocomplete/currencies?active=true`).then(res => this.currencies = res.data.data);
            },
            trans(key) {
                return this.$t(`sale_package.${key}`)
            }
        },
        mounted() {
            this.fetchInfo();
        }
    }
</script>

<style scoped>

</style>

<template>
    <v-card :class="{'elevation-12': inputValue.best_deal}"  height="100%">
        <v-card-title class="justify-center" :style="{backgroundColor : inputValue.color}"  >
            <div style="min-width: 100%">
                <h2>{{ inputValue.level }}</h2><br>
                <h2 v-if="showUserType">{{ inputValue.type }}</h2><br>
                <h3>{{ inputValue.title }}</h3><br>
            </div>
            <div class="pa-6 pb-12 mb-8">
                <div class="d-flex align-center justify-center">
                    <h5 class="display-2 font-weight-black text-xs-right"><sup><small>{{currency}}</small></sup>{{ inputValue.price | money }}</h5>
                    <div class="font-weight-bold mt-1 text-uppercase" :class="{'text-xs-left ml-4': isLtr, 'text-xs-right mr-4': isRtl}">

                        <span v-if="inputValue.per_type !== 'forever'" >  {{trans('per')}}</span>

                        <div v-if="inputValue.per_type !== 'forever'" class="v-responsive base-divider primary mb-0" style="max-width: 28px;" :class="{'mr-auto': isLtr, 'ml-auto': isRtl}">
                            <div class="v-responsive__content">
                                <v-divider role="separator" aria-orientation="horizontal"/>
                            </div>
                        </div>
                        {{  inputValue.per }} {{ trans(`${inputValue.per_type}`) }}
                    </div>
                </div>
            </div>
        </v-card-title>

        <v-card-text class="pb-0">
            <div class="px-8 mb-12">
                <div class="my-3">{{ inputValue.name }}</div>
                <v-divider />
                <div class="my-3">{{ inputValue.description }}</div>
                <v-divider />

                <div class="my-3">
                    <slot :attributes="inputValue.attributes" :per-type="inputValue.per_type" :per="inputValue.per"></slot>
                </div>
            </div>
        </v-card-text>
        <v-card-actions class="justify-center pt-0">
            <slot name="actions"></slot>
        </v-card-actions>
    </v-card>
</template>

<script>
    export default {
        name: "PricingCard",
        props: {
            value: {
                default() {
                    return {};
                }
            },
            showUserType: {
                type: Boolean,
                default: false,
            }
        },
        data() {
            return {
                activating: false,
                deactivating: false,
                isRtl: automata.isRtl,
                isLtr: !automata.isRtl,
                inputValue: this.value,
                currency: this.value.currency ? this.value.currency.currency_sample : null,
            }
        },
        methods : {
            trans(key) {
                return this.$t(`sale_package.${key}`)
            },
        }
    }
</script>

<style scoped>

</style>

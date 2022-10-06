<template>
    <l-sales-packages-user ref="packages" :attributes="{'product_count': 0, 'text_ads_count': 0, 'media_ads_count': 0}">
        <template v-slot:card="{ attributes, perType, per }">
            <h2>{{ trans('services') }}</h2>
            <br>
            <span v-if="attributes.text_ads_count">
                <span class="font-weight-bold mt-3 text-uppercase">
                    {{ attributes.text_ads_count }}
                </span>
                {{ $t('app.text_ads_count') }}
                <span v-if="perType !== 'forever'">{{ trans('per') }}</span>
                <span class="font-weight-bold mt-3 text-uppercase">{{ per }}</span>
                {{ trans(`${perType}`) }}
                <br>
            </span>
            <div v-else>
                <span class="font-weight-bold mt-3 ">{{ trans('unlimited') }} </span>
                {{ $t('app.text_ads') }}
            </div>
            <br>
            <span v-if="attributes.media_ads_count">
                <span class="font-weight-bold mt-3 text-uppercase">
                    {{ attributes.media_ads_count }}
                </span>
                {{ $t('app.media_ads_count') }}
                <span v-if="perType !== 'forever'">
                    {{ trans('per') }}
                </span>
                <span class="font-weight-bold mt-3 text-uppercase">{{ per }} </span>
                {{ trans(`${perType}`) }}
                <br>
            </span>
            <div v-else>
                <span class="font-weight-bold mt-3 ">{{ trans('unlimited') }} </span>
                {{ $t('app.media') }}
            </div>
            <br>
            <span v-if="attributes.product_count">
                <span class="font-weight-bold mt-3 text-uppercase">
                    {{ attributes.product_count }}
                </span>
                   {{ $t('app.product_count') }}
                <span v-if="perType !== 'forever'">
                    {{ trans('per') }}
                </span>
                <span class="font-weight-bold mt-3 text-uppercase"> {{ per }}  </span> {{ trans(`${perType}`) }}
                <br>
            </span>
            <div v-else>
                <span class="font-weight-bold mt-3 ">{{ trans('unlimited') }} </span>
                {{ $t('app.products') }}
            </div>
            <br>
            <v-divider/>
        </template>
        <template v-slot:attributes-details="{attributes, userAttributes}">
            <v-data-table
                :headers="headers"
                :items="[{}]"
                class="elevation-1"
                hide-actions
            >
                <template v-slot:items>
                    <tr>
                        <td>{{ $t('app.product_count') }}</td>
                        <td :class="{'text-xs-left': isRtl}">{{ attributes.product_count }}</td>
                        <td :class="{'text-xs-left': isRtl}">{{ attributes.product_count - userAttributes.product_count }}</td>
                        <td :class="{'text-xs-left': isRtl}">{{ userAttributes.product_count }}</td>
                    </tr>
                    <tr>
                        <td>{{ $t('app.text_ads_count') }}</td>
                        <td :class="{'text-xs-left': isRtl}">{{ attributes.text_ads_count }}</td>
                        <td :class="{'text-xs-left': isRtl}">{{ attributes.text_ads_count - userAttributes.text_ads_count }}</td>
                        <td :class="{'text-xs-left': isRtl}">{{ userAttributes.text_ads_count }}</td>
                    </tr>
                    <tr>
                        <td>{{ $t('app.media_ads_count') }}</td>
                        <td :class="{'text-xs-left': isRtl}">{{ attributes.media_ads_count }}</td>
                        <td :class="{'text-xs-left': isRtl}">{{ attributes.media_ads_count -  userAttributes.media_ads_count }}</td>
                        <td :class="{'text-xs-left': isRtl}">{{ userAttributes.media_ads_count}}</td>
                    </tr>
                </template>
            </v-data-table>
        </template>
        <template v-slot:action="{item, disabled, index }">
            <make-payment
                :ref="`payments_${index}`"
                :key="index"
                v-model="make[index]"
                v-if="item.subscribed && !item.subscription.ready_to_use"
                :loading="loading"
                :amount="item.price"
                :currency="item.currency.currency_sample"
                @save="save($event, item, index)"
            >
                <template v-slot:activator="{on}">
                    <v-btn v-on="on" color="primary" @click="showPayment(item, index)">{{ item.subscription.paid_at ? $t(`Wait Confirmation`) : ($t(`Pay to use`)) }}</v-btn>
                </template>
            </make-payment>
        </template>
    </l-sales-packages-user>
</template>

<script>

import LSalesPackagesUser from "../LSalePackagesUser";
import MakePayment from "../../../../../PaymentGateways/assets/js/components/MakePayment";

export default {
    name: "SalePackagesUser",
    components: {MakePayment, LSalesPackagesUser},
    data() {
        return {
            isRtl: automata.isRtl,
            make: {},
            loading: false,
            headers: [
                {text: ``, sortable: false, value: 'name'},
                {text: `${this.trans('total')}`, value: 'total'},
                {text: `${this.trans('consumed')}`, value: 'consumed'},
                {text: `${this.trans('remaining')}`, value: 'remaining'},
            ],
        };
    },
    methods: {
        trans(key) {
            return this.$t(`sale_package.${key}`)
        },
        save(form, card, index) {
            this.loading = true;
            let request = null;
            if (card.paid === false) {
                request = this.$http
                    .post(`api/sale-package/pay`, {...{sale_package_id: card.id}, ...form})
            } else {
                request = this.$http
                    .put(`api/sale-package/pay/${card.subscription.account_statement_id}`, {...{sale_package_id: card.id}, ...form})
            }
            request
                .then(res => {
                    this.make[index] = false;
                    this.$refs.packages.fetch();
                })
                .finally(() => this.loading = false);
        },
        showPayment(card, index) {
            this.make[index] = true;
            if (card.paid === false) {
                return;
            }
            this.loading = true;
            this.$http
                .get(`api/sale-package/pay/${card.subscription.account_statement_id}`)
                .then(res => {
                    console.log(this.$refs);
                    this.$refs[`payments_${index}`].form = {
                        payment_gateway_id: res.data.data.payment_gateway_id,
                        currency: res.data.data.currency,
                        credit: res.data.data.credit,
                        note: res.data.data.note,
                        file_id: res.data.data.file_id,
                        account: res.data.data.account,
                    };
                })
                .finally(() => this.loading = false);
        },
    },
}
</script>

<style scoped>

</style>

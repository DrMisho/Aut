<template>
    <l-sales-packages :attributes="{'product_count': 0, 'text_ads_count': 0, 'media_ads_count': 0}">
        <template v-slot:form="{attributes}">
            <v-flex md6>
                <v-text-field
                    name="product_count"
                    :label="`${$t('app.product_count')}`"
                    type="number"
                    v-model="attributes.product_count"
                ></v-text-field>
            </v-flex>
            <v-flex md6>
                <v-text-field
                    name="text_ads_count"
                    :label="`${$t('app.text_ads_count')}`"
                    type="number"
                    v-model="attributes.text_ads_count"
                ></v-text-field>
            </v-flex>
            <v-flex md6>
                <v-text-field
                    name="media_ads_count"
                    :label="`${$t('app.media_ads_count')}`"
                    type="number"
                    v-model="attributes.media_ads_count"
                ></v-text-field>
            </v-flex>
        </template>
        <template v-slot:card="{ attributes, perType, per }">
            <h2>{{ trans('services') }}</h2><br>

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
    </l-sales-packages>
</template>

<script>
import LSalesPackages from "../LSalesPackages";
export default {
    name: "SalePackages",
    components: {LSalesPackages},
    methods: {
        trans(key) {
            return this.$t(`sale_package.${key}`)
        },
    }
}
</script>

<style scoped>

</style>

<template>
    <v-text-field
        v-on="$listeners"
        v-bind="$attrs"
        v-model="inputValue"
        class="force-ltr"
        :prefix="currencyPrefix"
    >
        <template v-for="(index, name) in $scopedSlots" v-slot:[name]="data">
            <slot :name="name" v-bind="data"></slot>
        </template>
        <template v-if="selectCurrency" v-slot:prepend-inner>
            <v-menu offset-y>
                <template v-slot:activator="{on}">
                    <v-btn v-on="on" small flat  class="ma-0" style="min-width: auto">
                        {{ selectedCurrency }}
                        <v-icon right small>arrow_drop_down</v-icon>
                    </v-btn>
                </template>
                <v-list>
                    <v-list-tile v-for="cur in currencies" :key="cur[itemId]" @click="syncCurrency(cur)">
                        <v-list-tile-title>{{ cur[itemText] }}</v-list-tile-title>
                    </v-list-tile>
                </v-list>
            </v-menu>
        </template>
    </v-text-field>
</template>

<script>
export default {
    name: "PriceInput",
    props: {
        value: {
            default: null,
        },
        returnFormattedValue: {
            default: false,
            type: Boolean,
        },
        currencies: {
            default() {
                return [
                    {
                        id: 1,
                        name: 'USD',
                        currency_sample: '$',
                    }
                ];
            }
        },
        itemText: {
            default: 'currency_sample',
        },
        itemId: {
            default: 'id',
        },
        currency: {
            default: undefined,
            type: String,
        },
        currencyId: {
            default: null,
            type: [String, Number],
        },
        selectCurrency: {
            default: false,
            type: Boolean,
        }
    },
    data() {
        return {
            inputValue: null,
            selectedCurrency: this.currency,
            selectedCurrencyId: this.currencyId,
        };
    },
    computed: {
        currencyPrefix() {
            return this.selectCurrency ? undefined : this.currency;
        }
    },
    methods: {
        format(num) {
            let val = num + "";
            let i = val.indexOf('.');

            if (i === -1) {
                i = val.length - 1;
            }

            return accounting.format(num, val.length - (i + 1));
        },
        syncCurrency(currency) {
            this.selectedCurrency = currency[this.itemText];
            this.selectedCurrencyId = currency[this.itemId];
            this.$emit('update:currency', this.selectedCurrency);
            this.$emit('update:currencyId', this.selectedCurrencyId);
        }
    },
    watch: {
        value: {
            immediate: true,
            handler(newval) {
                if (newval == null || newval === '') {
                    this.inputValue = null;
                    return;
                }

                this.inputValue = this.format(newval);
            }
        },
        inputValue: {
            immediate: true,
            handler(newval) {
                if (newval == null || newval === '') {
                    this.$emit('input', null);
                    return;
                }
                this.$emit('input', this.returnFormattedValue ? newval : accounting.unformat(newval));
            }
        },
    }
}
</script>

<style scoped>

</style>

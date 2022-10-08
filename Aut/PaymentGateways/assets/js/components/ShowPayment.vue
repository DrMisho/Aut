<template>
    <v-dialog v-model="dialog" width="800" scrollable>
        <template v-slot:activator="{ on }">
            <slot name="activator" :on="on">
                <v-btn v-on="{...on, ...$listeners}" v-bind="$attrs" color="primary"><slot>Make Payment</slot></v-btn>
            </slot>
        </template>
        <v-card>
            <v-card-title class="headline primary">
                <span style="color: white;" class="headline">{{ dialogTitle }}</span>
            </v-card-title>
            <v-divider />
            <v-card-text>
                <v-container class="pa-0 grid-list-xs">
                    <v-layout row wrap class="justify-space-around">
                        <v-flex md5 xs12>
                            <v-layout row wrap>
                                <v-flex xs12>
                                    <v-subheader class="justify-center">Payment Info</v-subheader>
                                </v-flex>
                                <v-flex xs12>
                                    <select-input disabled :options="gateways" item-text="name" item-value="id" :label="`Payment Gateway *`" v-model="form.payment_gateway_id"/>
                                </v-flex>
                                <v-flex xs12>
                                    <price-input disabled :currency="form.currency" :label="`Amount *`" v-model="form.credit"/>
                                </v-flex>
                                <v-flex xs12>
                                    <v-text-field disabled :label="`Your Account *`" v-model="form.account"/>
                                </v-flex>
                                <v-flex xs12>
                                    <v-textarea disabled box :label="`Note `" v-model="form.note"/>
                                </v-flex>
                                <v-flex xs12>
                                    <file-pond-input disabled v-model="form.file_id" uploader="finance_payment_file" :files="files" :label="$t('Payment File')" />
                                </v-flex>
                            </v-layout>
                        </v-flex>
                        <v-flex md5 xs12>
                            <v-layout row wrap>
                                <v-flex xs12>
                                    <v-subheader class="justify-center">Gateway Info</v-subheader>
                                </v-flex>
                                <v-flex xs12>
                                    <v-text-field disabled :label="`Account *`" v-model="gateway.account"/>
                                </v-flex>
                                <v-flex xs12 v-if="gateway.image_path" class="pb-3">
                                    <image-preview :src="gateway.image_path" width="350">
                                        <template v-slot:activator="{ on, src }">
                                            <v-card class="elevation-3 hand" v-on="on" v-ripple>
                                                <v-img :src="src" :lazy-src="src">
                                                    <v-progress-circular slot="placeholder" indeterminate color="secondary"></v-progress-circular>
                                                </v-img>
                                            </v-card>
                                        </template>
                                    </image-preview>
                                </v-flex>
                                <v-flex xs12>
                                    <v-textarea disabled box :label="`Description `" v-model="gateway.description"/>
                                </v-flex>
                            </v-layout>
                        </v-flex>
                    </v-layout>
                </v-container>
            </v-card-text>
            <v-divider />
            <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn flat @click="cancel">{{ $t('app.cancel') }}</v-btn>
                <slot name="actions"></slot>
            </v-card-actions>
        </v-card>
    </v-dialog>
</template>

<script>
export default {
    name: "ShowPayment",
    props: {
        value: {
            default: false,
        },
        loading: {
            default: false,
            type: Boolean,
        },
        amount: {},
        currency: {},
    },
    data() {
        return {
            dialog: this.value,
            files: [],
            form: {
                payment_gateway_id: null,
                currency: this.currency,
                credit: this.amount,
                note: null,
                file_id: null,
                account: null,
            },
            gateway: {},
            gateways: [],
        };
    },
    computed: {
        dialogTitle() {
            return 'Show Payment';
        },
        disabledBtn() {
            return this.loading;
        }
    },
    methods: {
        save() {
            this.$emit('save', this.form);
        },
        cancel() {
            this.dialog = false;
        },
        fetchInfo() {
            this
                .$http
                .get(`api/payment-gateways`)
                .then(res => this.gateways = res.data.data)
            ;
        },
    },
    watch: {
        'form.payment_gateway_id': {
            handler(newval) {
                this.gateway = _.find(this.gateways, {id: newval});
            },
        },
        value: {
            immediate: true,
            handler(newval) {
                this.dialog = newval;
            }
        },
        dialog: {
            handler(newval) {
                this.$emit('input', newval);
            }
        }
    },
    mounted() {
        this.fetchInfo();
    },
}
</script>

<style scoped>

</style>

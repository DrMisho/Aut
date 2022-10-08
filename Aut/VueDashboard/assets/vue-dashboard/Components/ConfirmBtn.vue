<template>
    <v-dialog v-model="dialog" width="500" @input="cancel">
        <template v-slot:activator="{ on }">
            <v-btn v-on="on" :color="color" :flat="flat" :small="small" :icon="icon" :class="btnClass" @click="dialog = true" :disabled="disabledBtn">
                <slot></slot>
            </v-btn>
        </template>
        <v-card>
            <v-card-title class="headline primary" color="white">
                <span style="color: white;" class="headline">{{ trans('title') }}</span>
            </v-card-title>
            <v-card-text>
                {{ trans('message') }}
            </v-card-text>
            <v-divider></v-divider>
            <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn flat @click="cancel">{{ trans('cancel') }}</v-btn>
                <v-btn color="primary" @click="confirmed">{{ trans('confirm') }}</v-btn>
            </v-card-actions>
        </v-card>
    </v-dialog>
</template>

<script>
    export default {
        name: "ConfirmBtn",
        props: {
            btnClass: {
                default() {
                    return [];
                },
            },
            small: {
                type: Boolean,
                default: false,
            },
            icon: {
                type: Boolean,
                default: false,
            },
            flat: {
                type: Boolean,
                default: false,
            },
            color: {
                default: null,
            },
            disabled: {
                type: Boolean,
                default: false,
            }
        },
        data() {
            return {
                dialog: false,
                disabledBtn: this.disabled,
            }
        },
        watch: {
            disabled(newval) {
                this.disabledBtn = newval;
            }
        },
        methods: {
            confirmed() {
                this.close();
                this.$emit('confirmed');
            },
            cancel() {
                this.close();
                this.$emit('cancel');
            },
            close() {
                this.dialog = false;
            },
            trans(key) {
                return this.$t(`confirm.${key}`);
            }
        }
    }
</script>

<style scoped>

</style>

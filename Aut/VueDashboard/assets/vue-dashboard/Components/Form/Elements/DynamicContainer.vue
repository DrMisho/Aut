<template>
    <v-card v-if="type === 'normal'">
        <v-card-text>
            <slot></slot>
        </v-card-text>
        <v-card-actions>
            <v-spacer></v-spacer>
            <slot name="buttons"></slot>
        </v-card-actions>
    </v-card>
    <v-dialog v-else-if="type === 'dialog'" scrollable v-model="dialogStatus" @input="cancelDialog" :fullscreen="properties.fullscreen" :transition="properties.fullscreen ? 'dialog-bottom-transition' : 'dialog-transition'" :max-width="dialogWidth">
        <v-card>
            <v-card-title class="headline primary elevation-5">
                <span style="color: white;" class="headline">{{ properties.title }}</span>
            </v-card-title>
            <v-card-text>
                <slot></slot>
            </v-card-text>
            <v-divider v-if="!properties.fullscreen" />
            <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn flat @click.native="cancelDialog">{{ $t('app.cancel') }}</v-btn>
                <slot name="buttons"></slot>
            </v-card-actions>
        </v-card>
    </v-dialog>
</template>

<script>
    export default {
        name: "DynamicContainer",
        props: {
            type: {
                type: String,
                default: 'normal',
                validator(value) {
                    return ['normal', 'dialog'].indexOf(value) !== -1
                }
            },
            properties: {
                type: Object,
                default: function () {
                    return {

                    }
                },
            },
            dialog: {
                type: Boolean,
                default: false,
            }
        },
        watch: {
            dialog: {
                immediate: true,
                handler() {
                    this.dialogStatus = this.dialog;
                }
            }
        },
        data() {
            return {
                url: '',
                dialogStatus: false,
            };
        },
        computed: {
            dialogWidth() {
                if (this.properties.fullscreen) {
                    return null;
                }
                return this.properties.width || 500;
            }
        },
        methods: {
            cancelDialog() {
                this.$emit('dialogClosed');
            }
        }
    }
</script>

<style scoped>

</style>
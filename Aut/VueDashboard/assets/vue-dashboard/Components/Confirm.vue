<template>
    <v-dialog v-model="dialog" width="500" @input="cancel">
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
        name: "Confirm",
        props: {
            opened: {
                type: Boolean,
                required: true,
            },
            data:{},
        },
        watch: {
            opened: {
                immediate: true,
                handler() {
                    this.dialog = this.opened;
                }
            }
        },
        data() {
            return {
                dialog: false,
            }
        },
        methods: {
            cancel() {
                this.$emit('canceled', this.data);
                this.$emit('closed', true, this.data);
            },
            confirmed() {
                this.$emit('confirmed', this.data);
                this.$emit('closed', false, this.data);
            },
            trans(key) {
                return this.$t(`confirm.${key}`);
            }
        }
    }
</script>

<style scoped>

</style>
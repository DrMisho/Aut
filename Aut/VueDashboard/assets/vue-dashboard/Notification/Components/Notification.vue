<template>
    <v-snackbar
            v-model="snackbar"
            :bottom="y === 'bottom'"
            :left="x === 'left'"
            :multi-line="mode === 'multi-line'"
            :right="x === 'right'"
            :timeout="timeout"
            :top="y === 'top'"
            :vertical="mode === 'vertical'"
            :color="color"
    >
        <v-icon class="ml-2 mr-2" v-if="icon" dark >{{ icon }}</v-icon>
        <div v-html="text" ></div>
        <v-spacer />
        <v-btn small flat icon :color="btnColor" @click="close" class="ma-0">
            <v-icon>close</v-icon>
        </v-btn>
    </v-snackbar>
</template>

<script>
    export default {
        name: "Notification",
        data() {
            return {

            };
        },
        computed: {
            snackbar: {
                get: function () {
                    return this.getters('snackbar', false);
                },
                set: function (newValue) {
                    this.close();
                },
            },
            icon () {
                return this.getters('icon', false);
            },
            y() {
                return this.getters('y', 'bottom');
            },
            x() {
                return this.getters('x', 'right');
            },
            mode() {
                return this.getters('mode', '');
            },
            timeout() {
                return this.getters('timeout', 6000);
            },
            color() {
                return this.getters('color', null);
            },
            text() {
                return this.getters('text', '');
            },
            btnColor() {
                return this.getters('btnColor', 'gray');
            }
        },
        methods: {
            show() {
                this.snackbar = true;
            },
            getters(key, defaultValue) {
                return this.$store.getters[`notification/${key}`] || defaultValue;
            },
            close() {
                this.$notification.color(null);
                this.$store.dispatch('notification/close');
            }
        },
    }
</script>

<style scoped>

</style>

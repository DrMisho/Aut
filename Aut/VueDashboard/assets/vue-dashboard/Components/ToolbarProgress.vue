<template>
    <v-progress-linear
            :active="active"
            class="ma-0 pa-0"
            color="secondary"
            height="4"
            indeterminate
    ></v-progress-linear>
</template>

<script>
    export default {
        name: "ToolbarProgress",
        data() {
            return {

            }
        },
        computed: {
            active() {
                return this.getters('status', false);
            }
        },
        methods: {
            getters(key, defaultValue) {
                return this.$store.getters[`toolbarProgress/${key}`] || defaultValue;
            },
        }
    }
</script>

<style scoped>

</style>
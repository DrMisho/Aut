<template>
    <v-btn @click="$emit('click')" :disabled="disabled" :loading="loading" color="primary" block>{{ $t('app.load_more') }}</v-btn>
</template>

<script>
    export default {
        name: "LoadMore",
        props: {
            pagination: {},
            loading: {
                type: Boolean,
                default: false,
            },
        },
        computed: {
            disabled() {
                return this.pagination.current_page === this.pagination.last_page;
            }
        }
    }
</script>

<style scoped>

</style>
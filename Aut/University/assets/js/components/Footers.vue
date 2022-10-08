<template>
    <v-flex shrink>
        <data-table source="footers" @footerLinks="links"/>
    </v-flex>
</template>

<script>
    export default {
        name: "Footers",
        methods: {
            links(item) {
                this.$router.push({name: 'footer_links', params: {id: item.id}})
            }
        }
    }
</script>

<style scoped>

</style>
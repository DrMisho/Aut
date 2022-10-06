<template>
    <v-flex shrink>
        <data-table source="footer-links" :silent-params="{footer_id: id}"/>
    </v-flex>
</template>

<script>
    export default {
        name: "FooterLinks",
        props: {
            id: {
                required: true,
            }
        },
    }
</script>

<style scoped>

</style>
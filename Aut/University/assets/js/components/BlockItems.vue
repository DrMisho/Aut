<template>
    <v-flex shrink>
        <data-table source="block-items" :silent-params="{block_id: id}"/>
    </v-flex>
</template>

<script>
    export default {
        name: "BlockItems",
        props: {
            id: {
                required: true,
            }
        },
    }
</script>

<style scoped>

</style>
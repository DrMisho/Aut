<template>
    <v-flex shrink>
        <data-table source="blocks" @blockItems="items"/>
    </v-flex>
</template>

<script>
    export default {
        name: "Blocks",
        methods: {
            items(item) {
                this.$router.push({name: 'block_items', params: {id: item.id}})
            }
        }
    }
</script>

<style scoped>

</style>
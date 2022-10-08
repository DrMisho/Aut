<template>
    <v-flex shrink>
        <data-table source="events" :silent-params="{event_group_id: id}"/>
    </v-flex>
</template>

<script>
    export default {
        name:'Events',
        props: {
            id: {}
        }
    }
</script>

<style scoped>

</style>

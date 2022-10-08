<template>
    <v-flex shrink>
        <data-table source="event-groups" @events="events"/>
    </v-flex>
</template>

<script>
    export default {
        name:'EventGroups',
        methods: {
            events(item) {
                this.$router.push({name: 'events.index', params: {id: item.id}});
            }
        }
    }
</script>

<style scoped>

</style>

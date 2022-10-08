<template>
    <v-flex shrink>
        <data-table source="labs" :silent-params="{faculty_id: id}" />
    </v-flex>
</template>

<script>
    export default {
        name: "Labs",
        props: {
            id: {
                required: true,
            }
        },
    }
</script>

<style scoped>

</style>
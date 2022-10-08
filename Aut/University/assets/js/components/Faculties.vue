<template>
    <v-flex shrink>
        <data-table source="faculties" @courses="courses" @labs="labs"/>
    </v-flex>
</template>

<script>
    export default {
        name: "Faculties",
        methods: {
            courses(item) {
                this.$router.push({name: 'courses', params: {id: item.id}})
            },
            labs(item) {
                this.$router.push({name: 'labs', params: {id: item.id}})
            },
        }
    }
</script>

<style scoped>

</style>
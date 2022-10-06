<template>
    <v-flex shrink>
        <data-table source="courses" :silent-params="{faculty_id: id}" @files="files"/>
    </v-flex>
</template>

<script>
    export default {
        name: "Courses",
        props: {
            id: {
                required: true,
            }
        },
        methods: {
            files(item) {
                this.$router.push({name: 'course_files', params: {id: this.id, course_id: item.id}});
            }
        }
    }
</script>

<style scoped>

</style>
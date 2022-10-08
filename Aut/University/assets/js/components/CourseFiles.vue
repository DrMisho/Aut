<template>
    <v-flex shrink>
        <data-table source="course-files" :silent-params="{course_id}"/>
    </v-flex>
</template>

<script>
    export default {
        name: "CourseFiles",
        props: {
            course_id: {
                required: true,
            }
        },
    }
</script>

<style scoped>

</style>
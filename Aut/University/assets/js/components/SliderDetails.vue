<template>
    <v-flex shrink>
        <data-table source="slider-details" :silent-params="{slider_id: id}"/>
    </v-flex>
</template>

<script>
    export default {
        name: "SliderDetails",
        props: {
            id: {
                required: true,
            }
        },
    }
</script>

<style scoped>

</style>
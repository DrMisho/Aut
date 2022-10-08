<template>
    <v-flex shrink>
        <data-table source="sliders" @sliderDetails="sliderDetails"/>
    </v-flex>
</template>

<script>
    export default {
        name: "Sliders",
        methods: {
            sliderDetails(item) {
                this.$router.push({name: 'slider_details', params: {id: item.id}})
            }
        }
    }
</script>

<style scoped>

</style>
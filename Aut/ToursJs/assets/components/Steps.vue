<template>

    <v-flex shrink>
        <data-table source="steps"/>
        <input id="in" type="button" value="Test1   " style="border-style: none !important;"/>
        <input id="ik" type="button" value="Test2  " style="border-style: none !important;"/>
        <input id="im" type="button" value="Test3" style="border-style: none !important;"/>
        <input id="ie" type="button" value="Test4  " style="border-style: none !important;"/>


    </v-flex>

</template>

<script>
    import tours from '../../../../../Aut/ToursJs/config/assets/js/tours'

    export default {
        name: 'Steps',
        mounted() {
            tours.init('steps', tours);
        }
    }
</script>


<style scoped>


</style>
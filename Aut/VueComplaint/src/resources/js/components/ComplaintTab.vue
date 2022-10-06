<template>
    <div>
        <ul class="nav nav-tabs nav-tabs-alt">
            <li v-for="tab in tabs"  :key="tab" @click="selected = tab;" >
                <a href="#">{{ tab }}</a>
            </li>
        </ul>

        <component :is="selected" :data="data" class="tab-content"></component>

<!--       <div v-for="dataum in data['requestGroups']">{{ dataum.GROUP_ID }}</div>-->
    </div>
</template>

<script>
    import AddComplaint from "../components/AddComplaint";
    import ShowComplaint from "../components/ShowComplaint";
    import axios from 'axios';
    export default {
        data: function() {
            return {
                tabs: ["AddComplaint", "ShowComplaint"],
                selected: "AddComplaint",
                data:[]
            };
        },
        components: {
            AddComplaint,
            ShowComplaint
        },
        mounted(){
            axios.get('getData').then(
                response => this.data = response.data);
        }
    }
</script>


<style scoped>

</style>

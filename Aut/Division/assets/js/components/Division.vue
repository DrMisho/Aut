<template>
    <v-flex shrink>
        <data-table  ref="divisions" source="divisions" @add_division_social_network='add_social_network'/>
        <add-social-network @saved='save' ref="add_social_network"></add-social-network>
    </v-flex>
</template>



<script>
    import AddSocialNetwork from './AddSocialNetwork.vue'

    export default {
        name:'Division',
         components:{
            AddSocialNetwork
        },
        methods:{
            add_social_network(item){
                // alert('sss');
                this.$refs.add_social_network.start(item);
            },
              save() {
            this.$refs.divisions.fetchDataSource();
            },
        },

    }

</script>



<style scoped>




</style>

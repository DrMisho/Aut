<template>

    <v-flex shrink>
         <data-table source="attribute-groups" ref="groups" @deletegroup="deletegroup" />

        <delete-group ref='delete_group'  @saved='save()'></delete-group>
    </v-flex>

</template>



<script>
    import DeleteGroup from './components/DeleteGroup.vue'
  
    export default {
        name:'groups',
        components:{
            DeleteGroup
        },
        methods:{
           
            deletegroup(item){
                
                this.$refs.delete_group.showRelated(item);
                
            },
        save() {
        this.$refs.groups.fetchDataSource();
        },
        },


    }

</script>



<style scoped>




</style>
<template>
    <v-flex shrink>
        <data-table source="cars-car-models" @unreadlock="unreadlock"  />
 		

    </v-flex>
</template>

<script>

    export default {
        name: "CarModels",
          
         methods:{
        	addattributegroup(item){
                
        		this.$refs.add_groups.getGroups(item);
                
            },
            unreadlock(){
            }
        },
    }
</script>

<style scoped>

</style>
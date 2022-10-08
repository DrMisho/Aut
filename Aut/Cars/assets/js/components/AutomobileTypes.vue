<template>
    <v-flex shrink>
        <data-table source="cars-automobile-types" @addattributegroup="addItems"/>
    </v-flex>
</template>

<script>
    export default {
        name: "AutomobileTypes",
        components:{
        },
        methods:{
               addItems:function(item){
                this.$router.push({name: 'group_feature_order', params: {orderable_type:item.orderable_type,orderable_id:item.orderable_id}});
            },
        }
    }
</script>

<style scoped>

</style>
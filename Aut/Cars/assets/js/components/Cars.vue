<template>
    <v-flex shrink>
        <data-table  ref="cars" source="cars-car" 
        @addcar='addcar' @editcar="editcar" 
        @resultauction="resultauction"
        @carview="carview" @deletecar="deleteCar" />
        <add-car @saved='save()' ref="add_car"></add-car>
        <delete-car  @saved='save()' ref="delete_car"></delete-car>
        <result-auction  @lockandsaved='added' ref="result_auction"></result-auction>
    </v-flex>
</template>

<script>
    import AddCar from './components/AddCar.vue'
    import DeleteCar from './components/DeleteCar.vue'
    import ResultAuction from './../../../../Auction/assets/js/components/ResultAuction.vue'
    export default {
        name: "Cars",
        components:{
            AddCar,DeleteCar,ResultAuction
        },
        methods:{

            addcar(){
                	this.$refs.add_car.callForm();
            },
            editcar(item){
                this.$refs.add_car.callEditForm(item);
            },
            carview(item){
                let id = item.id;
                this.$router.push({name: 'car_view', query: {id}});
                

            },
            resultauction(item){
                if(item.auction_info){
                this.$refs.result_auction.initial(item.auction_info,item.id);

                }
                else{
                this.$refs.result_auction.initial({});
                }
            },
             added(car){
                this.$http.post(`api/car/lock/${car.id}`,{}).then((response) => {
                    })  .finally(() => {
             this.save();
            });;
            },
            save() {
            this.$refs.cars.fetchDataSource();
            },
            deleteCar(item){
                this.$refs.delete_car.initial(item);
            }
        }
    }

</script>

<style scoped>

</style>
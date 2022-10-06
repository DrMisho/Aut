<template>
<v-layout row wrap class=" justify-center">

    <v-layout wrap row>
        <!-- auction pictures ... -->
        <v-flex md12 sm12 xl12 v-if="config_auction_has_image">
            <v-img v-if="form.file_id.length == 0 " src="https://cdn.vuetifyjs.com/images/cards/sunshine.jpg" height="200px">
            </v-img>
            <v-carousel v-else>
                <v-carousel-item v-for="(item,i) in form.files_path" :key="i" :src="item"></v-carousel-item>
            </v-carousel>

        </v-flex>
        <v-flex md12 sm12 xl12>
            <v-flex md12 sm12 xl12>
                <h1 class="align-center d-flex flat  justify-center">{{form.title}}</h1>
            </v-flex>
            <v-divider></v-divider>

        </v-flex>

        <v-flex md12 sm12 xl12>
            <h1 class="align-center d-flex flat white--text blue-grey darken-4  justify-center">{{translate('auction_content')}}</h1>
        </v-flex>
        <v-flex md12 sm12 xl12>
            <v-flex>
                <v-layout class=" ma-3" wrap row v-for="item_type , position in auction_items " :key='position'>
                    <v-flex md12 xl12 sm12>
                        <h1 class="align-center d-flex flat white--text blue-grey darken-4  justify-center">{{position}}</h1>
                    </v-flex>
                    <v-flex v-for="item,i in item_type" :key="i" md12 sm12 xl12 row>
                        <v-btn  color="white--text blue-grey darken-4 " @click="entryIntoCar(item)">
                              {{translate('entry')}}
                        </v-btn>
                        <view-car :auctionable_id='item.auctionable_id' :auctionable_type='item.auctionable_type'></view-car>
                    </v-flex>
                </v-layout>
            </v-flex>
        </v-flex>
    </v-layout>
    <!-- <view-product ref="viewProduct"></view-product> -->

</v-layout>
</template>

<script>
import ViewCar from './parts/ViewCar.vue'
import IndexAuction from './IndexAuction.vue'
import Temp from "./class/Temp.js";

export default {
    name: 'open_auction',
    props: ['auction'],
    data: function () {
        return {
            config_auction_has_image: '',
            form: this.auction,
            //just title , image , title , description , id , model_type
            auction_items: [],
            //all information with it's attributes
            products: [],
        }
    },
    computed: {
        items: function () {
            let item = new Temp();
            for (let group in this.auction_items) {

                item.setWithVal(group, []);

                console.log('for group', this.auction_items[group]);

                for (let model_index in this.auction_items[group]) {
                    console.log('for model');

                    let model_id = this.auction_items[group][model_index].auctionable_id;
                    for (let product_index in this.products) {
                        console.log('for product_index');
                        console.log('check model_id product_id', model_id, this.products[product_index].id);
                        if (model_id == this.products[product_index].id) {
                            item[group].push(this.products[product_index]);

                        }
                    }
                }
            }
            return item;
        }

    },
    created() {
        this.getItems();
        console.log('auction', this.auction);
        this.$http.get('api/auction/config-auction-has-image').then((response) => {

            this.config_auction_has_image = response.data;

        });
        //auction items define....

    },
    components: {
        ViewCar,IndexAuction
    },
    methods: {
        enterIntoToItem() {

        },
        entryIntoCar(item){
            console.log('item is ', item);
             this.$router.push({
                name: 'index_auction',
                query: {
                    item:item,
                    auction:this.form,
                }
            });
        },
        translate(key) {
            return this.$t(`auction.${key}`)
        },
        getItems() {
            this.$http.get('api/auction/auction-items/' + this.form.id).then(response => {

                this.auction_items = response.data;
                let products_id = [];
                for (let group in this.auction_items) {
                    for (let model_index in this.auction_items[group]) {
                        products_id.push(this.auction_items[group][model_index].auctionable_id);
                    }
                }
                products_id = JSON.stringify(products_id);
                this.$http.get('api/attribute/auction-show-products?products_id=' + products_id).then((response) => {

                    this.products = response.data;
                    let item = new Temp();
                    for (let group in this.auction_items) {

                        item.setWithVal(group, []);

                        console.log('for group', this.auction_items[group]);

                        for (let model_index in this.auction_items[group]) {
                            console.log('for model');

                            let model_id = this.auction_items[group][model_index].auctionable_id;
                            for (let product_index in this.products) {
                                console.log('for product_index');
                                console.log('check model_id product_id', model_id, this.products[product_index].id);
                                if (model_id == this.products[product_index].id) {
                                    item[group].push(this.products[product_index]);

                                }
                            }
                        }
                    }
                    console.log(item);

                });

            });
        },

    }

}
</script>

<style scoped>

</style>

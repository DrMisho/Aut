<template>
<v-layout row wrap md12 sm12 xl12 class="v-card__text">
    <v-flex md12 sm12 xl12>
         <v-card-title md12 sm12 xl12 class="layout wrap row">
            <v-flex sm12 xs12 md6 xl6>
    <v-flex md12 sm12 xl12 class="font-weight-bold d-flex justify-center align-center" v-if="car.title"> {{car.title.brand + ' '}} {{car.title.model}}
            </v-flex>
            
                <!-- <v-flex md12 sm12 xl12 class="font-weight-bold d-flex justify-center align-center" v-if="car.title">{{translate('initial_price') + ':'}} {{'('+car.title.currency_name+')'}} {{car.title.initial_price | money}} -->
                <!-- </v-flex> -->
                <v-flex md12 sm12 xl12 class="d-flex justify-center align-center ">
                    <v-flex md6>
                        <v-divider class="ma-2 warning"></v-divider>

                    </v-flex>
                </v-flex>
            </v-flex>
 <v-flex sm12 xs12 md6 xl6 class="align-center d-flex flex justify-center">
             <v-flex md2 sm2 xl2 v-if="car.title && car.title.brand_image" >
                    <v-img :src="car.title.brand_image" contain> </v-img>
            </v-flex>
             <v-flex md2 sm2 xl2 v-else >
            </v-flex>
 </v-flex>
        <v-divider class="flex ma-3 md12 sm12 xl12 "></v-divider>
        </v-card-title>
    </v-flex>
    <v-flex md6 sm12 xl6>
       

            <group-image :images="car.image"></group-image>

            <!-- <image-preview :src="car.image" width="500">
            <template v-slot:activator="{ on }">
                <v-img v-on="on" :src="car.image" height="300px" contain>
                </v-img>
            </template>
        </image-preview> -->
        </v-flex>
        <v-flex md6 sm12 xl6 style=" overflow-y: scroll;max-height:400px" class="v-card__text ">
          
            <v-flex v-for="feature , key in car.description" :key="key">
                <feature-view :feature=feature></feature-view>
            </v-flex>
        </v-flex>
        
           <slot name="action"></slot>
</v-layout>
</template>

<script>
import FeatureView from "./../../../../Attributes/assets/js/components/components/Parts/FeatureView.vue";
import GroupImage from "./GroupImage.vue"

export default {
    name: "sub-view-car",
    props: ["car"],
    data: function () {
        return {};
    },
    components: {
        FeatureView,
        GroupImage
    },

    watch: {},
    methods: {
        translate(key) {
            return this.$t(`cars.${key}`);
        },
    },
    created() {},
};
</script>

<style scoped></style>

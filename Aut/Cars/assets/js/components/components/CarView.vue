<template>
<v-flex>
    <v-layout class="white">
        <v-flex white>
            <v-progress-linear v-if="setting.loading" :indeterminate="setting.loading"></v-progress-linear>
            <product-view ref="product_view">
                <template v-slot:header>
                    <v-card-actions class="white">
                        <v-flex md1 sm1 xl1>
                        <v-img :src="form.brand_image" contain> </v-img>
                        </v-flex>
                        <v-spacer></v-spacer>
                        <v-btn color="default" @click="
                                initial();
                                back();
                            ">
                            {{ translate("disagree") }}
                        </v-btn>
                    </v-card-actions>
                    <v-container fill-height>
                        <v-layout align-center>
                            <v-flex text-xs-center>
                                <h1 class=" ma-2">{{form.brand}}</h1>
                                <v-flex class="justify-center d-flex">
                                    <v-flex class="warning" md8>
                                        <v-divider inset warning></v-divider>
                                    </v-flex>

                                </v-flex>

                                <h2 class="ma-2">
                                    {{form.model}}
                                </h2>
                                <v-flex class="justify-center d-flex ma-2">
                                    <v-flex class="warning" md6>
                                        <v-divider inset warning></v-divider>
                                    </v-flex>

                                </v-flex>
                                  <v-flex class="font-weight-bold" v-if="form.city_name"> {{'('+form.city_name+')'}} 
                                </v-flex>
                                <v-flex class="d-flex justify-center align-center ">
                                    <v-flex md4>
                                        <v-divider class="ma-2 warning"></v-divider>

                                    </v-flex>
                                </v-flex>
                             
                                <group-image :images="form.image_path" :col="'md2 sm4  xl6'"></group-image>
                                <!-- <v-flex class="font-weight-bold">{{translate('initial_price') + ':'}} {{'('+form.currency_name+')'}} {{form.initial_price | money}}
                                </v-flex> -->
                               
    <!-- car Part  -->
                <car-part ref="car_part" :just_view="true" v-show="form.state"></car-part>
                <v-flex  v-show="!form.state">
                  <v-flex class="font-weight-bold"> {{translate('car_state')}}
                                </v-flex>
                                <v-flex class="d-flex justify-center align-center ">
                                    <v-flex md4>
                                        <v-divider class="ma-2 warning"></v-divider>

                                    </v-flex>
                                </v-flex>
                </v-flex>

                            </v-flex>
                        </v-layout>
                    </v-container>

                </template>
               
            </product-view>

        </v-flex>
    </v-layout>
</v-flex>
</template>

<script>
import ProductView from "./../../../../../Attributes/assets/js/components/components/ProductView.vue";
import GroupImage from "./../GroupImage.vue";
import CarPart from './CarPart.vue'


export default {
  name: "car-view",
  data: function () {
    return {
      setting: {
        car_view_dialog: false,
        loading: true,
      },
      global: {},
      form: {},
      id:null,
    };
  },
  components: {
    ProductView,
    GroupImage,
    CarPart
  },

  watch: {},
  methods: {
    translate(key) {
      return this.$t(`cars.${key}`);
    },
    initial() {},
    back() {
      this.$router.go(-1);
    },
    carview(car) {
      console.log(car);
      this.$refs.product_view.productView(
       car.features
      );
      this.setting.loading = false;
    },
  },
  created() {
    let id = this.$route.query.id;
    this.id = id;
    this.$http.get("api/car/show/" + this.id).then((response) => {
      this.form = response.data.data;
      if(this.form.state){
        this.$refs.car_part.setStyle(this.form.carParts);
      }
      this.carview(response.data.data);
    });
  },
};
</script>

<style scoped></style>

<template>
  <l-show-auction ref="L_show_auction">
    <template v-slot:search>
      <v-flex row md12 sm12 xl12>
        <v-flex class="d-flex flex grey lighten-2 pa-3">
          <v-flex
            :class="{
              'force-rtl': langs_info[locale].dir == 'rtl',
              'force-ltr': langs_info[locale].dir == 'ltr',
            }"
            >{{ translate("search_by_car") }}</v-flex
          >
          <v-spacer></v-spacer>
          <v-flex
            :class="{
              'force-ltr': langs_info[locale].dir == 'rtl',
              'force-rtl': langs_info[locale].dir == 'ltr',
            }"
          >
            <v-icon>fas fa-car</v-icon></v-flex
          >
        </v-flex>
        <v-flex class="pr-2 pl-2">

          <!-- <select-input
              resource="car_types"
              v-model="active_automobile_types"
              :label="translate('automobile_types')"
                 @change="
              loadAttribute = true;
              getAttributes(stoploadAttribute);
            "
            ></select-input> -->
           <v-select
            v-model="active_automobile_types"
            @change="
              loadAttribute = true;
              getAttributes(stoploadAttribute);
            "
            outlined
            :items="automobile_types"
            :loading="loadAttribute||loadTypes"
            item-text="name"
            item-value="id"
            :label="translate('automobile_types')"
            persistent-hint
            return-object
            single-line
          ></v-select>

          <select-input
              resource="brands"
              v-model="active_brands"
              :label="translate('brands')"
            ></select-input>
          <!-- <v-select
            v-model="active_brands"
            outlined
            :items="brands"
            item-text="name"
            item-value="id"
            :label="translate('brands')"
            persistent-hint
            return-object
            single-line
          ></v-select> -->
          <v-select
            v-model="active_car_model"
            outlined
            :items="active_car_model_itmes"
            item-text="name"
            item-value="id"
            :label="translate('car_models')"
            persistent-hint
            return-object
            single-line
          ></v-select>
          

         <autocomplete
             resource="cities"
            v-model="city_id"
              :label="translate('site_car')"
            ></autocomplete>
             <v-flex md12 xl12 sm12>
                <!-- <v-switch
               v-model="with_price_range"
              color="primary"
         :label="translate('price_range')"></v-switch> -->
             </v-flex>
        <v-flex md12 sm12 xl12 >
            <v-subheader>{{ translate("price_range") }}</v-subheader>
          <v-layout row wrap v-for="currency , key in currencies" :key="key">
             <v-flex md12 sm12 xl12 >
        {{ currency.name}} {{'('+currency.sample+')'}}
      </v-flex>
          <v-layout row  md12 sm12 xl12>
                    <v-flex
        shrink
        style="width: 100px"
      >
     
        <v-text-field
          v-model="prices[key].val[0]"
          class="mt-0"
          hide-details
          single-line
          type="number"
        ></v-text-field>
      </v-flex>

      <v-flex>
        <v-range-slider
          v-model="prices[key].val"
          :max="currency.max"
         
          :min="currency.min"
          :step="5"
        ></v-range-slider>
      </v-flex>

      <v-flex
        shrink
        style="width: 100px"
      >
        <v-text-field
          v-model="prices[key].val[1]"
          class="mt-0"
          hide-details
          single-line
          type="number"
        ></v-text-field>
      </v-flex>
          </v-layout>
          </v-layout>
        </v-flex>
          <v-layout row wrap>
            <v-flex class="md10 sm10 xl10">
           <v-card-actions>
                <v-tooltip bottom>
                <template v-slot:activator="{ on }">
                  <v-btn
                    block
                    v-on="on"
                    :loading="loadingSearch"
                    @click="
                      loadingSearch = true;
                      search();
                    "
                  >
                    <v-icon>search</v-icon>
                  </v-btn>
                </template>
                <span> {{ translate("click_to_search_by_car") }}</span>
              </v-tooltip>
           </v-card-actions>
            </v-flex>
            <v-flex class="md2 sm2 xl2 align-center flex justify-center">
              <v-tooltip bottom>
                <template v-slot:activator="{ on }">
                  <v-btn  v-on="on" @click="resetSearch()" icon>
                    <v-icon>fas fa-circle</v-icon>
                  </v-btn>
                </template>
                <span> {{ translate("msg_reset") }}</span>
              </v-tooltip>
            </v-flex>
          </v-layout>
        </v-flex>
      </v-flex>
    </template>
    <template v-slot:auction_items="{ auction_items }">
      <v-flex
        md12
        sm12
        xl12
        row
        class="pa-2"
        v-for="(item, index) in auction_items"
        :key="index"
      >
        <v-card>
          <sub-view-car :car="item.item">
            <template v-slot:action>
              <v-flex md12 sm12 xl12 class="blue-grey darken-4">
                <v-card-actions>
                  <v-tooltip bottom>
                    <template v-slot:activator="{ on }">
                      <v-btn
                        dark
                        v-on="on"
                        color="white--text primary "
                        @click="viewAuctionItem(item)"
                      >
                        {{ translate("car_view") }}
                      </v-btn>
                    </template>
                    <span>
                      {{ translate("car_view_detail") }}
                    </span>
                  </v-tooltip>
                  <v-spacer></v-spacer>
                  <v-tooltip bottom>
                    <template v-slot:activator="{ on }">
                      <v-btn
                        dark
                        v-on="on"
                        color="white--text primary "
                        @click="realtedAuction(item)"
                      >
                        {{ translate("auctions") }}
                      </v-btn>
                    </template>
                    <span>
                      {{ translate("display_auctions") }}
                    </span>
                  </v-tooltip>
                  <v-spacer></v-spacer>
                   <v-tooltip bottom>
                    <template v-slot:activator="{ on }">
                      <v-btn
                        dark
                        v-on="on"
                        @click="ImportentAuction(item)"
                        icon
                      >
                        <v-icon :color='item.like?"yellow":"grey"'>star</v-icon>
                      </v-btn>
                    </template>
                    <span>
                      {{ translate("add_to_list_import") }}
                    </span>
                  </v-tooltip>
                </v-card-actions>
              </v-flex>
            </template>
          </sub-view-car>
        </v-card>
      </v-flex>
    </template>
  </l-show-auction>
</template>

<script>
import LShowAuction from "./../../../../../Auction/assets/js/components/LShowAuctions.vue";
import GroupSearch from "./../../../../../Attributes/assets/js/components/components/Parts/GroupSearch.vue";
import SubViewCar from "./../SubViewCar.vue";
import config from "./../../config/car.js";

export default {
  name: "car-search",
  props: [],
  data: function () {
    return {
      loadTypes:false,
      locale: automata.language.locale,
      langs_info: automata.language.config.supportedLocales,
      setting: {},
      global: {},
      form: {},
      struct: [],
      automobile_types: [],
      active_automobile_types: null,
      active_brands: null,
      with_price_range:false,
      city_id:null,
      cities:[],
      currencies:[],
      prices:[],
      brands: [],
      car_model: [],
      active_car_model_itmes: [],
      active_car_model: "",
      loading: false,
      loadAttribute: false,
      loadingSearch: false,
      search_by_car_feature: false,
      array_car_id: [],
    };
  },
  components: {
    LShowAuction,
    GroupSearch,
    SubViewCar,
  },
  watch: {
    active_automobile_types: function (newValue) {
      if (newValue) {
        this.active_car_model_itmes = [];
        let array = [];
        for (let index in this.car_model) {
          if (this.active_brands) {
            if (
              this.car_model[index].automobile_type_id == newValue.id &&
              this.car_model[index].brand_id == this.active_brands.id
            ) {
              array.push(this.car_model[index]);
            }
          } else {
            if (this.car_model[index].automobile_type_id == newValue.id) {
              array.push(this.car_model[index]);
            }
          }
        }
        this.active_car_model_itmes = array;
        this.result = this.active_automobile_types;
      }
    },

    active_brands: function (newValue) {
      if (newValue) {
        this.active_car_model_itmes = [];
        let array = [];
        for (let index in this.car_model) {
          if (this.active_automobile_types) {
            if (
              this.car_model[index].brand_id == newValue.id &&
              this.car_model[index].automobile_type_id ==
                this.active_automobile_types.id
            ) {
              array.push(this.car_model[index]);
            }
          } else {
            if (this.car_model[index].brand_id == newValue.id) {
              array.push(this.car_model[index]);
            }
          }
        }
        this.active_car_model_itmes = array;
      }
    },
  },
  methods: {
    stoploadAttribute() {
      this.loadAttribute = false;
    },
    ImportentAuction(item) {
      let params ={
        key:'item',
        likeable_id:item.item.id
      };
      let request=`api/auction/like`
            this.$http
            .post(request, params)
            .then((response) => {
              item.like = !item.like;
                if (response.data.state == "success") {
                  this.$notification.success(response.data.msg);
                } else {
                  this.$notification.show(response.data.msg);
                }
            })
            .finally(() => {
          this.loadingLike = false;
        });
    },
    resetSearch() {
      this.$refs.L_show_auction.resetSearch();
      this.active_brands = null;
      this.active_automobile_types = null;
      this.active_car_model = null;
      this.city_id = null;
      this.prices = [];
       this.currencies.forEach(item => {
        this.prices.push({id:item.id,val:[item.min,item.max]});
     });
    },
    viewAuctionItem(item) {
      let id = item.auctionable_id;
      this.$router.push({
        name: "car_view",
        params: {
          id,
        },
      });
    },
    realtedAuction(item) {
      //config.key means --> 'car'
      this.$refs.L_show_auction.realtedAuction(item.auctionable_id, config.key);
    },
    search() {
      let car_path = "Aut\\Cars\\Models\\Car";
      let products_id = this.$refs.L_show_auction.search(
        car_path,
        this.carIdForProductId
      );
    },
    translate(key) {
      return this.$t(`cars.${key}`);
    },
    initial() {},
    back() {
      this.$router.go(-1);
    },
    getAttributes(callback) {
      // let model_type = "Aut\\Cars\\Models\\AutomobileType";
      let model_type = 'car';
      if (this.active_automobile_types.id) {
        this.loading = true;
        let model_id = this.active_automobile_types.id;
        this.struct = this.$refs.L_show_auction.getAttribute(
          model_id,
          model_type,
          callback
        );
      }
    },
    carIdForProductId(cars_id, callback) {
      console.log("inside...", cars_id);
      let rquest = "api/car/car-search";
      let params = {};
      let automobile_type_id = null;
      if (this.active_automobile_types) {
        automobile_type_id = this.active_automobile_types.id;
        // rquest = rquest + `&&active_automobile_types=${automobile_type_id}`;
        params.active_automobile_types = automobile_type_id;
      }
      let active_car_model = null;
      if (this.active_car_model) {
        active_car_model = this.active_car_model.id;
        // rquest = rquest + `&&active_car_model=${active_car_model}`;
        params.active_car_model = active_car_model;
      }
     
      params.prices = this.prices;
      if (this.city_id) {
        // rquest = rquest + `&&active_car_model=${active_car_model}`;
        params.city_id = this.city_id;
      }
      let active_brands = null;
      if (this.active_brands) {
        active_brands = this.active_brands.id;
        //  rquest = rquest + `&&active_brands=${active_brands}`;
        params.active_brands = active_brands;
      }
      //   rquest = rquest + `&&cars_id=${cars_id}`;
      params.cars_id = cars_id;

      let array_car_id = [];
      this.$http.post(rquest, params).then((response) => {
        this.auctionIdForCarId(response.data);
      });
    },
    stopLoadingSearch() {
      this.loadingSearch = false;
    },
    auctionIdForCarId(car_id) {
      //car_id is array ...
      let car_path = "Aut\\Cars\\Models\\Car";
      this.$refs.L_show_auction.filterAuction(
        car_id,
        car_path,
        this.stopLoadingSearch
      );
    },
  },

  created() {
    this.loadTypes = true;
    this.$http.get("api/car/car-types").then((response) => {
      this.automobile_types = response.data.automobile_types;
      this.brands = response.data.brands;
      this.car_model = response.data.car_model;
      this.currencies =  response.data.currencies; 
     this.currencies.forEach(item => {
        this.prices.push({id:item.id,val:[item.min,item.max]});
     });
      this.loadTypes = false;
    });
  },
};
</script>

<style scoped></style>

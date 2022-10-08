<template>
  <v-flex>
    <v-layout row wrap>
      <v-flex md3 x3 sm4 class="grey lighten-4">
        <v-flex class="d-flex flex grey lighten-2 pa-3">
          <v-flex
            :class="{
              'force-rtl': langs_info[locale].dir == 'rtl',
              'force-ltr': langs_info[locale].dir == 'ltr',
            }"
            >{{ translate("search_by_auction") }}</v-flex
          >
          <v-spacer></v-spacer>
          <v-flex
            :class="{
              'force-ltr': langs_info[locale].dir == 'rtl',
              'force-rtl': langs_info[locale].dir == 'ltr',
            }"
          >
            <v-icon>fas fa-coins</v-icon></v-flex
          >
        </v-flex>
        <v-flex class="pr-2 pl-2">
          <v-select
            v-model="global.auction_state"
            color="primary"
            item-value="value"
            item-text="text"
            :items="global.auction_state_list"
            :label="translate('auction_state')"
            @change="filter()"
          ></v-select>
        </v-flex>
        <v-flex class="pr-2 pl-2">
          <v-text-field
            v-model="text_search"
            :label="translate('msg_search')"
            type="text"
            @keyup.enter="
              loadingSearch = true;
              filter();
            "
          >
            <template v-slot:append>
              <v-fade-transition leave-absolute>
                <v-progress-circular
                  v-if="loadingSearch"
                  size="24"
                  color="info"
                  indeterminate
                ></v-progress-circular>
                <v-tooltip bottom>
                  <template v-slot:activator="{ on }">
                    <v-btn
                      @click="
                        loadingSearch = true;
                        filter();
                      "
                      v-on="on"
                      icon
                      ><v-icon small color="gray">fas fa-search</v-icon></v-btn
                    >
                  </template>
                  <span> {{ translate("click_to_search") }}</span>
                </v-tooltip>
              </v-fade-transition>
            </template>
          </v-text-field>
        </v-flex>

        <slot name="search"></slot>
        <v-flex row md12 sm12 xl12 class="pr-2 pl-2">
          <v-switch
            v-model="search_by_feature"
            :label="translate('search_by_car_feature')"
          ></v-switch>
        </v-flex>
        <v-flex
          row
          md12
          sm12
          xl12
          v-if="search_by_feature"
          :class="{
            'pr-2': langs_info[locale].dir == 'rtl',
            'pl-2': langs_info[locale].dir == 'ltr',
          }"
        >
          <v-flex
            row
            v-for="(item, key) in struct"
            :key="key"
            class="md12 sm12 xm12 xl12"
          >
            <group-search :group="struct[key]"></group-search>
          </v-flex>
        </v-flex>
      </v-flex>
      <v-flex md9 xl9 sm9>
        <v-subheader class="pa-0 justify-end">
          <v-flex md5 sm6 xl5 class="d-flex">
            <v-flex class="justify-center align-center d-flex">
              <v-icon small color="gray">fas fa-clock </v-icon
              >{{ translate("chronological_arrangement") }}</v-flex
            >
            <!-- <v-btn
              @click="
                global.auction_time = 'closest';
                filter();
              "
              color="primary"
              flat
              small
            >
              {{ translate("closest") }}
            </v-btn> -->
            <v-radio-group row v-model="global.auction_time" @change="filter();" >
      <v-radio :label="translate('closest')" value="closest"></v-radio>
      <v-radio :label="translate('recent')" value="recent"></v-radio>
    </v-radio-group>
             <!-- <v-checkbox
                    @change="global.auction_time = 'closest';filter()"
                    v-model="closest"
                    :label="translate('closest')"
                    required
                  ></v-checkbox>
                   <v-checkbox
                    @change=" global.auction_time = 'recent';
                filter();"
                    v-model="recent"
                    :label=" translate('recent')"
                    required
                  ></v-checkbox> -->
            <!-- <v-btn
              @click="
                global.auction_time = 'recent';
                filter();
              "
              color="primary"
              flat
              small
            >
              {{ translate("recent") }}
            </v-btn> -->
          </v-flex>
        </v-subheader>
        <v-divider class="ma-1"></v-divider>

        <v-tabs centered  icons-and-text>
          <v-tabs-slider color="warning"></v-tabs-slider>
          <v-tab href="#auction">
            {{ translate("auctions") }}
            <v-icon>fas fa-coins</v-icon>
          </v-tab>
          <v-tab href="#cars">
            {{ translate("cars") }}
            <v-icon>fas fa-car</v-icon>
          </v-tab>
             <v-tab-item value="auction">
          <v-layout md12 xl12 sm12 wrap row v-if="!loading">
            <v-flex md12 xl12 sm12>
              <v-flex>
                <v-layout wrap row>
                  <v-flex
                    md4
                    sm12
                    xl4
                    row
                    class="pa-2"
                    v-for="(auction, index) in auctions"
                    :key="index"
                  >
                    <auction-item :is_admin="false" :auction="auction">
                      <template v-slot:action>
                        <v-card-actions
                          class="blue-grey darken-4 elevation-5 justify-center"
                        >
                          <v-spacer></v-spacer>
                          <v-tooltip bottom v-if="auction.state=='will_open'">
                            <template v-slot:activator="{ on }">
                              <v-btn
                                icon
                                dark
                                v-on="on"
                                :loading="loading"
                                :disabled="loading"
                                @click="viewAuction(auction)"
                              >
                                <v-icon icon dark>event</v-icon>
                              </v-btn>
                            </template>
                            <span> {{ translate("view_items_auction") }}</span>
                          </v-tooltip>
                          <v-tooltip bottom v-else-if="auction.state=='closed'">
                            <template v-slot:activator="{ on }">
                              <v-btn
                                icon
                                dark
                                v-on="on"
                                :loading="loading"
                                :disabled="loading"
                                @click="resultAuction(auction)"
                              >
                                <v-icon icon dark>gavel</v-icon>
                              </v-btn>
                            </template>
                            <span> {{ translate("view_result_auction") }}</span>
                          </v-tooltip>
                           <v-tooltip bottom v-else-if="auction.state=='open'">
                            <template v-slot:activator="{ on }">
                              <v-btn
                                icon
                                dark
                                v-on="on"
                                :loading="loading"
                                :disabled="loading"
                                @click="viewAuction(auction)"
                              >
                                <v-icon icon dark>widgets</v-icon>
                              </v-btn>
                            </template>
                            <span> {{ translate("start_to_bid") }}</span>
                          </v-tooltip>

                          <v-spacer></v-spacer>

                          <v-tooltip bottom>
                    <template v-slot:activator="{ on }">
                      <v-btn
                        dark
                        v-on="on"
                        @click="ImportentAuction(auction)"
                        icon
                        :loading="loadingLike"
                      >
                        <v-icon :color='auction.like?"yellow":"grey"'  >star</v-icon>
                      </v-btn>
                    </template>
                    <span>
                      {{ translate("add_to_list_import") }}
                    </span>
                  </v-tooltip>
                         
                          <v-spacer></v-spacer>
                        </v-card-actions>
                      </template>
                    </auction-item>
                  </v-flex>
                </v-layout>
              </v-flex>
              <v-flex
                class="align-center d-flex justify-center"
                v-if="paginate.next_page_url && auctions.length > 0"
              >
                <v-btn @click="loadMore()" :loading="load_more">{{
                  translate("load_more")
                }}</v-btn>
              </v-flex>
            </v-flex>
          </v-layout>
          <v-layout v-else class="align-center d-flex flex justify-center ma-5">
            <v-progress-circular
              size="100"
              color="info"
              indeterminate
            ></v-progress-circular>
          </v-layout>
        </v-tab-item>
        <v-tab-item value="cars">
          <slot
            name="auction_items"
            v-bind:auction_items="auction_items"
          ></slot>
          <v-flex
            class="align-center d-flex justify-center"
            v-if="paginate_auction_item.params && auction_items.length > 0"
          >
            <v-btn @click="loadMoreItem()" :loading="load_more_item">{{
              translate("load_more")
            }}</v-btn>
          </v-flex>
        </v-tab-item>
        </v-tabs>
     
      </v-flex>
    </v-layout>
  </v-flex>
</template>

<script>
import Temp from "./class/Temp.js";
import GroupSearch from "./../../../../Attributes/assets/js/components/components/Parts/GroupSearch.vue";
import AuctionItem from "./parts/AuctionItem.vue";
export default {
  name: "l-show-auction",
  data: function () {
    return {
      closest:false,
      recent:false,

      locale: automata.language.locale,
      langs_info: automata.language.config.supportedLocales,
      dir: "rtl",
      global: {
        auction_state: null,
        auction_time: null,
        auctionable_id: null,
        auctionable_type: null,
        auction_state_list: [
          {
            value: "all",
            text: this.translate("all"),
          },
          {
            value: "open",
            text: this.translate("open"),
          },
          {
            value: "will_open",
            text: this.translate("will_open"),
          },
          {
            value: "closed",
            text: this.translate("closed"),
          },
        ],
      },
      attributes: [],
      auctions: [],
      auction_items: [],
      struct: [],
      
      loading: false,
      loadingLike:false,
      load_more_item: false,
      search_by_feature: false,
      paginate: {},
      paginate_auction_item: {},
      load_more: false,
      //for search
      text_search: "",
      loadingSearch: false,
    };
  },
  watch: {},
  components: {
    GroupSearch,
    AuctionItem,
  },
  computed: {},
  created() {
    let dir = this.langs_info[this.locale].dir;
    this.dir = dir;

    if (this.auctions.length == 0) {
      this.$http.get("api/auction").then((response) => {
        this.auctions = response.data.data;
        this.paginate = {
          next_page_url: response.data.next_page_url,
          path: response.data.path,
        };
        // this.auctions =[];
      });
    }
  },
  methods: {
    // all auction realted this item ....
    realtedAuction(auctionable_id, auctionable_type) {
      this.global.auctionable_id = auctionable_id;
      this.global.auctionable_type = auctionable_type;
      this.filter();
    },
    filter() {
      this.loading = true;
      this.auctions = [];
      let state = this.global.auction_state;
      let time = this.global.auction_time;
      let auctionable_type = this.global.auctionable_type;
      let auctionable_id = this.global.auctionable_id;

      let search = null;
      if (this.loadingSearch) {
        search = this.text_search;
      }
      let params = `state=${state}&&time=${time}`;
      if (auctionable_id) {
        params = `${params}&&auctionable_id=${auctionable_id}`;
      }
      if (auctionable_type) {
        params = `${params}&&auctionable_type=${auctionable_type}`;
      }
      if (search) {
        params = `${params}&&search=${search}`;
      }
      this.$http
        .get(`api/auction?${params}`)
        .then((response) => {
          this.auctions = response.data.data;
          let next_page_url = null;

          if(response.data.next_page_url != null){
            next_page_url = `${response.data.next_page_url}&&${params}`;
          }
          this.paginate = {
            next_page_url: next_page_url,
            path: response.data.path,
          };
        })

        .finally(() => {
          this.auction_items = [];
          this.loadingSearch = false;
          this.loading = false;
        });
    },
    resetSearch() {
      this.global.auctionable_id = null;
      this.global.auctionable_type = null;
    },
    ImportentAuction(item) {
      let params ={
        key:'auction',
        likeable_id:item.id
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
    getAttribute(model_id, model_type, callback) {
      let array = [];
      this.struct = array;
      this.$http
        .get(
          `api/attribute/search-attribute?id=${model_id}&type=${model_type}`
        )
        .then((response) => {
          this.struct = response.data.struct;
        })
        .finally(() => {
          callback();
        });
      return this.struct;
    },
    loadMore() {
      this.load_more = true;
      this.$http
        .get(this.paginate.next_page_url)
        .then((response) => {
          let new_auction = response.data.data;
          for (let i in new_auction) {
            this.auctions.push(new_auction[i]);
          }
          this.paginate = {
            next_page_url: response.data.next_page_url,
            path: response.data.path,
          };
          // this.auctions =[];
        })

        .finally(() => {
          this.load_more = false;
        });
    },

    search(car_path, callback) {
      let result = [];
      if (this.search_by_feature) {
        let array = [];
        this.attributes = [];
        for (let i in this.struct) {
          console.log("maing group");
          let element = this.struct[i];
          this.groupInfo(element);
        }
        console.log("befor", this.attributes);
        this.$http
          .post("api/attribute/search", {
            search: this.attributes,
            productable_type: car_path,
          })
          .then((response) => {
            console.log("rr result", response.data);
            callback(response.data);
          });
      } else {
        console.log("result", result);
        callback(result);
      }
    },
    groupInfo(element) {
      for (let i in element.tasks) {
        if (element.tasks[i].feature_id != null) {
          let feature = element.tasks[i].feature;
          let value = feature.filter_value;
          if (value) {
            this.attributes.push(value);
          }
        } else {
          console.log(" sub group ");
          this.groupInfo(element.tasks[i]);
        }
      }
    },

    changeAuctionOrder() {
      let time = this.global.auction_time;
      this.$http.get("api/auction?time=" + time).then((response) => {
        this.auctions = response.data;
      });
    },
    translate(key) {
      return this.$t(`auction.${key}`);
    },
    addAuction() {
      this.$refs.add_edit_auction.addAuction();
    },
    editAuction(item) {
      console.log(item);
      this.$refs.add_edit_auction.editAuction(item);
    },
    filterAuction(array_model_id, model_type, callback) {
      this.loading = true;
      let vm = this;
      let params = {};

      params.state = this.global.auction_state;
      params.time = this.global.auction_time;
      params.array_model_id = array_model_id;
      params.model_type = model_type;
      params.just_id = true;

      let rquest = "api/auction";

      this.$http
        .post(rquest, params)
        .then((response) => {
          let array_auction_id = response.data;
          let rquest_auction_item = "api/auction/auction-items";
          let params_auction_item = {};
          params_auction_item.array_auction_id = array_auction_id;
          params_auction_item.array_model_id = array_model_id;
          params_auction_item.model_type = model_type;
          this.$http
            .post(rquest_auction_item, params_auction_item)
            .then((response) => {
              vm.auction_items = response.data.data;

              let last_page = response.data.last_page;
              let current_page = response.data.current_page;

              if (current_page < last_page) {
                params_auction_item.page = current_page + 1;
              } else {
                params_auction_item = null;
              }

              vm.paginate_auction_item = {
                rquest: rquest_auction_item,
                params: params_auction_item,
              };
            });
          //   .finally(() => {
          //   this.loadingSearch = false;
          //   callback();
          // });
          // this.auctions = response.data.data;
          // this.paginate = {
          //   next_page_url: response.data.next_page_url,
          //   path: response.data.path,
          // };
        })
        .finally(() => {
          this.loadingSearch = false;
          this.loading = false;
          this.auctions = [];
          callback();
        });
    },
    loadMoreItem() {
      this.load_more_item = true;
      let rquest_auction_item = this.paginate_auction_item.rquest;
      let params_auction_item = this.paginate_auction_item.params;
      this.$http
        .post(rquest_auction_item, params_auction_item)
        .then((response) => {
          let new_array_item = response.data.data;
          for (let i in new_array_item) {
            let item = new_array_item[i];
            this.auction_items.push(item);
          }

          let last_page = response.data.last_page;
          let current_page = response.data.current_page;

          if (current_page < last_page) {
            params_auction_item.page = current_page + 1;
          } else {
            params_auction_item = null;
          }

          this.paginate_auction_item = {
            rquest: rquest_auction_item,
            params: params_auction_item,
          };
        })
        .finally(() => {
          this.load_more_item = false;
        });
    },
    resultAuction(item){
this.$router.push({
        name: "view_auction",
        query:{
        id: item.id,
        }
      });
    },
    viewAuction(item) {
      console.log("view", item);
      this.$router.push({
        name: "view_auction",
        query:{
        id: item.id,
        }
      });
    },
    participation(auction) {
      this.$http.get("api/attribute/auction-participation").then((response) => {
        if (response.data.state == "success") {
          this.$notification.success(response.data.msg);
        } else {
          this.$notification.show(response.data.msg);
        }
      });
    },

    save() {
      // this.$refs.auctions.fetchDataSource();
    },
  },
};
</script>

<style scoped>
</style>

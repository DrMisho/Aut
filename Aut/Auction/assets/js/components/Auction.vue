<template>
  <v-flex>
    <v-layout warp row class="grey lighten-3">
   
      <v-flex class="align-center d-flex flex justify-center">
        <v-subheader class="pa-0">
          <v-flex
            class="d-flex"
            :class="{
              'ml-5': langs_info[locale].dir == 'rtl',
              'mr-5': langs_info[locale].dir == 'ltr',
            }"
          >
            <v-flex class="justify-center align-center d-flex">
              {{ translate("auction_state") }}</v-flex
            >
            <v-select
              v-model="global.auction_state"
              color="primary"
              item-value="value"
              item-text="text"
              :items="global.auction_state_list"
              @change="filter()"
            ></v-select>
          </v-flex>
          <v-spacer></v-spacer>

          <v-flex>
            <v-text-field
              v-model="text_search"
              :label="translate('msg_search')"
              type="text"
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
                      >
                        <v-icon small color="gray">fas fa-search</v-icon>
                      </v-btn>
                    </template>
                    <span> {{ translate("click_to_search") }}</span>
                  </v-tooltip>
                </v-fade-transition>
              </template>
            </v-text-field>
          </v-flex>
          <v-spacer></v-spacer>
          <v-flex class="d-flex">
            <v-flex class="justify-center align-center d-flex">
              <v-icon small color="gray">fas fa-clock </v-icon
              >{{ translate("chronological_arrangement") }}
            </v-flex>
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
            </v-btn>
            <v-btn
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
               <v-radio-group row v-model="global.auction_time" @change="filter();" >
      <v-radio :label="translate('closest')" value="closest"></v-radio>
      <v-radio :label="translate('recent')" value="recent"></v-radio>
    </v-radio-group>
          </v-flex>
        </v-subheader>
      </v-flex>
      <v-flex
        :class="{
          'force-ltr': langs_info[locale].dir == 'rtl',
          'force-rtl': langs_info[locale].dir == 'ltr',
        }"
        class="pa-2"
      >
        <v-card-actions>
          <v-tooltip bottom>
            <template v-slot:activator="{ on }">
              <v-btn
                dark
                v-on="on"
                color="primary white--text"
                @click="addAuction()"
                icon
              >
               
                <v-icon>add</v-icon>
              </v-btn>
            </template>
            <span> {{ translate("msg_click_to_add_auction") }}</span>
          </v-tooltip>
        </v-card-actions>
      </v-flex>
    </v-layout>
    <v-divider></v-divider>
    <v-flex
      v-if="loadGenrate"
      class="align-center d-flex flex justify-center ma-5"
    >
      <v-progress-circular
        size="100"
        color="info"
        indeterminate
      ></v-progress-circular>
    </v-flex>
    <v-layout v-else wrap row>
        
      <v-layout class="md12 xl12 sm12" wrap row >
        <v-flex
          md4
          sm6
          xl6
          row
          class="pa-2"
          v-for="(auction, index) in auctions"
          :key="index"
        >
          <auction-item :is_admin="true" :auction="auction">
            <template v-slot:action>
              <v-card-actions
                class="blue-grey darken-4 elevation-5 justify-center"
              >
                <v-spacer></v-spacer>
                <v-tooltip bottom>
                  <template v-slot:activator="{ on }">
                    <v-btn
                      icon
                      dark
                      v-on="on"
                      :loading="loading"
                      :disabled="loading"
                      @click="viewAuction(auction)"
                    >
                      <v-icon icon dark>list</v-icon>
                    </v-btn>
                  </template>
                  <span> {{ translate("view_items_auction") }}</span>
                </v-tooltip>

                <v-spacer></v-spacer>

                <v-tooltip bottom>
                  <template v-slot:activator="{ on }">
                    <v-btn
                      icon
                      dark
                      v-on="on"
                      :disabled="!auction.state == 'will_open'"
                      @click="editAuction(auction)"
                    >
                      <v-icon>edit</v-icon>
                    </v-btn>
                  </template>
                  <span>{{ translate("edit") }}</span>
                </v-tooltip>

                <v-spacer></v-spacer>

                <v-tooltip bottom>
                  <template v-slot:activator="{ on }">
                    <v-btn v-on="on" icon dark @click="deleteAuction(auction)">
                      <v-icon>delete</v-icon>
                    </v-btn>
                  </template>
                  <span>{{ translate("delete") }}</span>
                </v-tooltip>
                <v-spacer></v-spacer>
              </v-card-actions>
            </template>
          </auction-item>
        </v-flex>
      </v-layout>
      <v-flex
      md12 sm12 xl12
        class="align-center d-flex justify-center"
        v-if="paginate.next_page_url"
      >
        <v-btn @click="loadMore()" :loading="load_more">{{
          translate("load_more")
        }}</v-btn>
      </v-flex>
      <v-flex 
       md12 sm12 xl12
      class="align-center d-flex justify-center" v-else>
        <v-divider></v-divider>
      </v-flex>
    </v-layout>
    <add-edit-auction
      ref="add_edit_auction"
      @saved="save"
      @added="auctionAdded"
      @edited="auctionEdited"
    ></add-edit-auction>
    <delete-auction
      ref="delete_auction"
      @saved="save"
      @deleted="auctionDeleted"
    ></delete-auction>
  </v-flex>
</template>

<script>
import Form from "./class/Form.js";
import AddEditAuction from "./AddEditAuction";
import DeleteAuction from "./parts/DeleteAuction.vue";
import AuctionItem from "./parts/AuctionItem.vue"
export default {
  name: "auction",

  data: function () {
    return {
      loadGenrate: false,
      locale: automata.language.locale,
      langs_info: automata.language.config.supportedLocales,
      dir:
        automata.language.config.supportedLocales[automata.language.locale].dir,
      auctions: [],
      //for search
      text_search: "",
      loadingSearch: false,

      global: {
        auction_state: null,
        auction_time: null,
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
      loading: false,
      loadAuction:false,
      paginate: {},
      load_more: false,
    };
  },
  computed: {},
  components: {
    AddEditAuction,
    DeleteAuction,
    AuctionItem,
  },
  created() {
    if (this.auctions.length == 0) {
      this.filter();
    }
  },
  methods: {
    translate(key) {
      return this.$t(`auction.${key}`);
    },
    startLoadAuction(){
      this.loadGenrate = true;
    },
    stopLoadAuction(){
      this.loadGenrate = false;
    },
    filter() {
      this.auctions = [];
      this.loadGenrate = true;

      let state = this.global.auction_state;
      let time = this.global.auction_time;
      let params = `state= ${state}&&time= ${time}`;
      let search = null;
      if (this.loadingSearch) {
        search = this.text_search;
        params = `${params}&&search=${search}`;
      }
      let request = `api/auction?${params}`;
      this.$http
        .get(
          request
        )
        .then((response) => {
          this.auctions = response.data.data;
          this.paginate = {
            next_page_url: response.data.next_page_url,
            path: response.data.path,
          };
        })

        .finally(() => {
          this.loadingSearch = false;
          this.loadGenrate = false;
        });
    },
    addAuction() {
      this.$refs.add_edit_auction.addAuction();
    },
    auctionAdded(value) {
      console.log("added", value.auction);
      this.auctions.splice(0, 0, value.auction);
    },
    auctionEdited(value) {
      console.log("edit", value.auction);

      let id = value.auction.id;
      let position = null;
      for (let index in this.auctions) {
        console.log("id", this.auctions[index].id, id);
        if (this.auctions[index].id == id) {
          position = index;
          break;
        }
      }
      if (position) {
        this.auctions.splice(position, 1, value.auction);
      } else {
        alert("not found");
      }
    },
    auctionDeleted(value) {
      let id = value.id;
      let position = null;
      for (let index in this.auctions) {
        if (this.auctions[index].id == id) {
          position = index;
          break;
        }
      }
      if (position) {
        this.auctions.splice(position, 1);
      }
    },
    editAuction(item) {
      this.startLoadAuction();
      console.log(item);
      this.$refs.add_edit_auction.editAuction(item,this.stopLoadAuction);
    },
    resultAuction(item) {
      console.log("result", item);
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
    deleteAuction(item) {
      this.$refs.delete_auction.initial(item.id);
    },

    loadMore() {
      
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

    save() {
      // this.$refs.auctions.fetchDataSource();
    },
  },
};
</script>

<style scoped>
</style>

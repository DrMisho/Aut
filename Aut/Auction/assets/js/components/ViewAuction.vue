<template>
  <v-layout row wrap class="justify-center">
   
    <v-layout wrap row>
      <!-- auction pictures ... -->
      <v-flex
        md12
        sm12
        xl12
        v-if="form.state == 'will_open' || form.state == 'open'"
      >
        <v-img
          v-if="form.element_images_path.length == 0"
          :src="config_default_image"
          height="200px"
        >
        </v-img>
        <v-carousel v-else style="max-height: 300px">
          <v-carousel-item
            v-for="(item, i) in form.element_images_path"
            :key="i"
            style=""
          >
            <image-preview :src="item" width="500">
              <template v-slot:activator="{ on }">
                <v-img v-on="on" :src="item" height="300px" contain> </v-img>
              </template>
            </image-preview>
          </v-carousel-item>
        </v-carousel>
      </v-flex>
      <v-flex md12 sm12 xl12>
        <v-flex md12 sm12 xl12>
          <h1 class="align-center d-flex flat justify-center ma-4">
            {{ form.title }}
          </h1>
        </v-flex>
        <v-divider class="mb-4"></v-divider>
        <v-flex md12 sm12 xl12>
          <v-layout row >
            <v-flex class="align-center d-flex  justify-center md6 primary sm12 v-chip v-chip--active white--text xl12">
              <v-card-text ><h2 class="align-center d-flex justify-center">{{translate('from')+' '}}{{form.starts_at}}</h2></v-card-text>
            </v-flex>
            <v-flex class="align-center d-flex  justify-center md6 primary sm12 v-chip v-chip--active white--text xl12">
              <v-card-text ><h2 class="align-center d-flex justify-center">{{translate('to')+' '}}{{form.ends_at}}</h2></v-card-text>
            </v-flex>
          </v-layout >
          <h1 class="align-center d-flex headline justify-center primary v-chip v-chip--active white--text mb-4 pa-2">{{remming}}</h1>
        </v-flex>
        <v-divider></v-divider>
      </v-flex>
      <v-flex
        md12
        sm12
        xl12
        v-if="form.state == 'will_open' || form.state == 'open'"
      >
        <v-layout md12 sm12 xl12 wrap row class="pa-2">
          <v-flex md6 sm6 xl6 class="grey--text">
            <h4>
              <i
                :class="{
                  'far fa-2x fa-check-circle theme--light success--text':
                    form.just_values,
                  'far fa-2x fa-times-circle theme--light red--text': !form.just_values,
                  'ml-2': dir == 'rtl',
                  'mr-2': dir == 'ltr',
                }"
              ></i>
              {{ translate("just_values") }}
            </h4>
          </v-flex>
          <v-flex md6 sm6 xl6 class="grey--text">
            <h4>
              <i
                :class="{
                  'far fa-2x fa-check-circle theme--light success--text':
                    form.only_multiples_values,
                  'far fa-2x fa-times-circle theme--light red--text': !form.only_multiples_values,
                  'ml-2': dir == 'rtl',
                  'mr-2': dir == 'ltr',
                }"
              ></i>
              {{ translate("only_multiples_values") }}
            </h4>
          </v-flex>
        </v-layout>
        <v-layout md12 sm12 xl12 wrap row class="pa-2">
          <v-flex md6 sm6 xl6 class="grey--text">
            <h4>
              <i
                :class="{
                  'far fa-2x fa-check-circle theme--light success--text':
                    form.allow_username_displayed,
                  'far fa-2x fa-times-circle theme--light red--text': !form.allow_username_displayed,
                  'ml-2': dir == 'rtl',
                  'mr-2': dir == 'ltr',
                }"
              ></i>
              {{ translate("allow_username_displayed") }}
            </h4>
          </v-flex>
          <v-flex md6 sm6 xl6 class="grey--text">
            <h4>
              <i
                :class="{
                  'far fa-2x fa-check-circle theme--light success--text':
                    form.is_secrete,
                  'far fa-2x fa-times-circle theme--light red--text': !form.is_secrete,
                  'ml-2': dir == 'rtl',
                  'mr-2': dir == 'ltr',
                }"
              ></i>
              {{ translate("is_secrete") }}
            </h4>
          </v-flex>
        </v-layout>

        <v-divider></v-divider>
      </v-flex>
      <v-flex
        md12
        sm12
        xl12
        v-if="form.state == 'will_open' || form.state == 'open'"
      >
        <h1 class="align-center d-flex flat justify-center">
          {{ translate("auction_content") }}
        </h1>
        <v-divider></v-divider>
      </v-flex>
      <v-flex
        md12
        sm12
        xl12
        v-if="form.state == 'will_open' || form.state == 'open'"
      >
        <v-layout>
          <!-- <h1
              class="align-center d-flex flat white--text blue-grey darken-4 justify-center"
            >
              {{ position }}
            </h1> -->
          <v-carousel
            delimiter-icon="stop"
            prev-icon="mdi-arrow-left"
            next-icon="mdi-arrow-right"
          >
            <v-carousel-item v-for="(item, i) in auction_items" :key="i" >
             
              <v-flex>
                <v-tooltip bottom>
                  <template v-slot:activator="{ on }">
                    <v-btn
                      dark
                      v-on="on"
                      color="primary"
                      @click="viewAuctionItem(item)"
                    >
                      {{ translate("view_auction_item") }}
                    </v-btn>
                  </template>
                  <span>
                    {{ translate("view_auction_item_detail") }}
                  </span>
                </v-tooltip>
                <v-tooltip bottom v-if="form.state == 'open'">
                  <template v-slot:activator="{ on }">
                    <v-btn
                      dark
                      v-on="on"
                      color="primary"
                      @click="startBidding(item)"
                    >
                      {{ translate("bidding") }}
                    </v-btn>
                  </template>
                  <span>
                    {{ translate("start_bidding") }}
                  </span>
                </v-tooltip>
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
              </v-flex>
              <sub-view-car :car="item.item"></sub-view-car>
            </v-carousel-item>
          </v-carousel>
        </v-layout>
      </v-flex>
      <v-flex>
        <v-layout>
          <!-- <h1
              class="align-center d-flex flat white--text blue-grey darken-4 justify-center"
            >
              {{ position }}
            </h1> -->
          <v-layout wrap row class="">
            <v-flex
              class="md12 sm12 xl12"
              v-for="(item, i) in auction_items"
              :key="i"
            >
              <v-card class="ma-3">
                <v-flex  class="primary d-flex">
                  

                  <v-layout row  class="primary" align="center" justify="center"  v-if="
                        item.initial_price &&
                        (form.state == 'will_open' || form.state == 'open')
                      ">
                    <h2
                      class="white--text v-card__text white--text"
                     
                    >
                      {{ translate("initial_price") }} :
                      {{ item.initial_price | money
                      }}{{ "(" + item.currency_name + ")" }}
                    </h2>
                   <v-spacer></v-spacer>

                    <v-divider vertical class="white" />
                   <v-spacer></v-spacer>

                  </v-layout>
                  
                   
                   
                  <v-layout row class="primary" align="center" justify="center" v-if="
                        (form.state == 'closed' || form.state == 'open') &&
                        form.is_secrete == '0' &&
                        form.allow_username_displayed == '1'
                      ">
                    <h2
                      class="white--text v-card__text white--text"
                     
                    >
                      {{ translate("owner_of_largest_auction") }} :
                      {{ item.name }}
                    </h2>
                   <v-spacer></v-spacer>
                    <v-divider vertical class="white" />
                   <v-spacer></v-spacer>

                  </v-layout>
                  
                   
                   
                    <v-layout row class="primary" align="center" justify="center"  v-if="form.state == 'open' && form.is_secrete == 0">
                    <h2
                      class="white--text v-card__text white--text"
                     
                    >
                      {{ translate("cuurent_price") }} :
                      {{ item.current_price==0?item.initial_price:item.current_price | money
                      }}{{ "(" + item.currency_name + ")" }}
                    </h2>

                  </v-layout>
                  
                   
                   
                  <v-flex class="primary" align="center" justify="center">
                    <h2
                      class="white--text v-card__text white--text"
                      v-if="form.state == 'closed' && form.is_secrete == 0"
                    >
                      {{ translate("final_price") }} :
                       {{ item.current_price==0?item.initial_price:item.current_price | money
                      }}{{ "(" + item.currency_name + ")" }}
                    </h2>
                  </v-flex>
                  

                </v-flex>
                <v-flex class="blue-grey flex lighten-3 pa-1">
                  <v-tooltip bottom>
                    <template v-slot:activator="{ on }">
                      <v-btn
                        dark
                        v-on="on"
                        color="primary"
                        @click="viewAuctionItem(item)"
                      >
                        {{ translate("view_auction_item") }}
                      </v-btn>
                    </template>
                    <span>
                      {{ translate("view_auction_item_detail") }}
                    </span>
                  </v-tooltip>
                  <v-tooltip bottom v-if="form.state == 'open'">
                    <template v-slot:activator="{ on }">
                      <v-btn
                        dark
                        v-on="on"
                        color="primary"
                        @click="startBidding(item)"
                      >
                        {{ translate("bidding") }}
                      </v-btn>
                    </template>
                    <span>
                      {{ translate("start_bidding") }}
                    </span>
                  </v-tooltip>
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
                </v-flex>
                <sub-view-car :car="item.item"></sub-view-car>
              </v-card>
            </v-flex>
          </v-layout>
        </v-layout>
        <v-flex
          class="align-center d-flex justify-center"
          v-if="paginate.next_page_url"
        >
          <v-btn @click="loadMore()" :loading="load_more">{{
            translate("load_more")
          }}</v-btn>
        </v-flex>
        <v-flex class="align-center d-flex justify-center" v-else>
          <v-divider></v-divider>
        </v-flex>
      </v-flex>
    </v-layout>
  </v-layout>
</template>

<script>
import SubViewCar from "./../../../../Cars/assets/js/components/SubViewCar.vue";
import config from "./../config/auction.js";

export default {
  name: "view_auction",
  // props: ["id"],
  data: function () {
    return {
      config_auction_has_image: config.auction_has_image,
      config_default_image: config.default_image,
      locale: automata.language.locale,
      langs_info: automata.language.config.supportedLocales,
      dir:
        automata.language.config.supportedLocales[automata.language.locale].dir,
      id: null,
      form: {
        file_id: [],
        element_images_path: [],
      },
      remming:null,
      auction_items: [],
      paginate: {},
      load_more: false,
    };
  },
  created() {
    let id = this.$route.query.id;
    this.id = id;
    this.$http.get("api/auction/" + this.id).then((response) => {
      this.auction = response.data.data;
      
      this.form = response.data.data;
      let state = this.form.state ; 
      let now = +new Date(this.form.now);
      let end = this.form.ends_at
       end = +new Date(end);
      let res_end = end - now ;
      let start = this.form.starts_at
      start = +new Date(start);
        let res_start = start-now;
      console.log(res_start);


      switch (state) {
        case 'open':
          //var ends_at 
          //ends_at - now
          //call diff time
          setInterval(()=> {

        this.remming = this.millisToHoursMinutesAndSeconds(res_end)
        res_end -=1000;
        // let 
      }, 1000);

    
          break;
           case 'will_open':
          //var starts_at 
          //start-now 
          //call diff time
            setInterval(()=> {
        this.remming = this.millisToHoursMinutesAndSeconds(res_start)
        res_start -=1000;
        // let 
      }, 1000);
          break;
            case 'closed':
          
          break;
      
        default:
          break;
      }
this.getItems();




    
    });
  },
  components: {
    SubViewCar,
  },
  methods: {
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
    translate(key) {
      return this.$t(`auction.${key}`);
    },
     millisToHoursMinutesAndSeconds(millis)  {
       //sec = 60 ; 
       //
       let hours =  Math.floor(millis / 3600000);
      let minutes = Math.floor(((millis % 3600000)) / 60000);
      let seconds = ((((millis % 3600000)) % 60000) / 1000).toFixed(0);
	//ES6 interpolated literals/template literals 
    //If seconds is less than 10 put a zero in front.
    // console.log(hours,minutes,seconds);
    if(hours<0 || minutes <0 || seconds<0){
      return null;

    }
    return `${(hours < 10 ? "0" : "")}${hours}:${(minutes < 10 ? "0" : "")}${minutes}:${(seconds < 10 ? "0" : "")}${seconds}`;
},
    loadMore() {
      this.$http
        .get(this.paginate.next_page_url)
        .then((response) => {
          let new_items = response.data.data;
          for (let i in new_items) {
            this.auction_items.push(new_items[i]);
          }
          this.paginate = {
            next_page_url: response.data.links.next,
            path: response.data.meta.path,
          };
          // this.auctions =[];
        })

        .finally(() => {
          this.load_more = false;
        });
    },
    getItems() {
      this.$http
        .get(`api/auction/auction-items?auction_id=${this.form.id}`)
        .then((response) => {
          this.auction_items = [];
          this.auction_items = response.data.data;

          let next_page_url = null;

          if (response.data.links.next != null) {
            next_page_url = response.data.links.next + `&&auction_id=${this.form.id}`;
          }
          this.paginate = {
            next_page_url,
            path: response.data.meta.path,
          };
          console.log(response.data);
        });
    },
    startBidding(item) {
      let item_id = item.item.id;
      let id = this.id;
      this.$router.push({
        name: "index_auction",
        query: {
          id,
          item_id,
        },
      });
    },

    getKeyModel(auctionable_type) {
      // let auctionable_type = config.model_key;
      for (let key in config.model_key) {
        if (config.model_key[key] == auctionable_type) {
          return key;
        }
      }
    },
    viewAuctionItem(item) {
      let id = item.item.auctionable_id;
      this.$router.push({
        name: "car_view",
        query: {
          id,
        },
      });
    },
  },
};
</script>

<style scoped>
</style>

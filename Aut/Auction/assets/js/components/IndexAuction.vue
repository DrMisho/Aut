<template>
  <v-flex>
    <v-card>
      <v-layout row wrap class="justify-center">
        <v-flex md12 sm12 xl12>
          <v-flex>
            <v-layout>
              <v-flex class="ma-3">
                <v-layout wrap row class="">
                  <v-flex class="md12 sm12 xl12">
                    <v-card class="ma-3">
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
                      <sub-view-car :car="item"></sub-view-car>
                      

           <v-layout row  class="ma-4">
            <v-flex class="align-center d-flex  justify-center md6 primary sm12 v-chip v-chip--active white--text xl12">
              <v-card-text ><h2 class="align-center d-flex justify-center">{{translate('from')+' '}}{{form.starts_at}}</h2></v-card-text>
            </v-flex>
            <v-flex class="align-center d-flex  justify-center md6 primary sm12 v-chip v-chip--active white--text xl12">
              <v-card-text ><h2 class="align-center d-flex justify-center">{{translate('to')+' '}}{{form.ends_at}}</h2></v-card-text>
            </v-flex>
          </v-layout >
          <h1 class="align-center d-flex headline justify-center primary v-chip v-chip--active white--text mb-4 pa-2">{{remming}}</h1>

                      <v-flex
                        class="align flex grey justify justify-center lighten-2 lighten-5 v-card__title"
                      >
                        <h2
                          class="align-center d-flex justify-center "
                          v-if="item.initial_price"
                        >
                          {{ translate("initial_price") }} :
                          {{ item.initial_price | money }}{{ " " + currency }}
                        </h2>
                      </v-flex>
                    </v-card>
                  </v-flex>
                </v-layout>
              </v-flex>
            </v-layout>
          </v-flex>
        </v-flex>
        <v-flex
          class="align-center display-1  green green--text justify-center lighten-4 md8 pa-5 sm12 v-chip white--text xl8"
          >{{ current_price | money }}{{ " " + currency }}</v-flex
        >
        <v-flex
          class="align-center d-flex display-1  green justify-center lighten-2 md8 pa-4 sm12 v-chip white--text xl8"
          v-if="form.allow_username_displayed"
          >{{ name_user_bid }}</v-flex
        >
        <v-flex class="justify-center align-center d-flex md8 sm12 xl8">
          <v-text-field
            v-if="form.just_values == 0"
            :hint="translate('add_more')"
            @keyup.enter="bidValue()"
            v-model="more_value"
            outline
            clearable
            class="headline"
            prefix="$"
            :rules="
              more_value
                ? [
                    (v) => !!v || translate('required'),
                    (v) => (v && !isNaN(v)) || translate('required_number'),
                  ]
                : []
            "
          >
            <template v-slot:append>
              <v-fade-transition leave-absolute>
                <v-select
                  @change="bidValue()"
                  :items="form.values"
                  v-model="more_value"
                ></v-select>
              </v-fade-transition>
            </template>
            <template v-slot:append-outer>
              <v-tooltip bottom>
                          <template v-slot:activator="{ on }">
                            <v-btn
                              dark
                              v-on="on"
                              color="green"
                               @click="bidValue()" :loading="loadBidValue"
                            >
                             <v-icon>gavel</v-icon>
                            </v-btn>
                          </template>
                          <span>
                                            {{ translate("add_value") }}
                          </span>
                        </v-tooltip>
            </template>
          </v-text-field>
          <v-select
          outline
            v-else
            green
            @change="bidValue()"
            :items="form.values"
            v-model="more_value"
          >
           <template v-slot:append-outer>
              <v-tooltip bottom>
                          <template v-slot:activator="{ on }">
                            <v-btn
                              dark
                              v-on="on"
                              color="green"
                               @click="bidValue()" :loading="loadBidValue"
                              
                            >
                             <v-icon>gavel</v-icon>
                            </v-btn>
                          </template>
                          <span>
                                            {{ translate("add_value") }}
                          </span>
                        </v-tooltip>
            </template>
            </v-select>
        </v-flex>
      </v-layout>
      <chat ref="chat"></chat>
    </v-card>
  </v-flex>
</template>

<script>
import SubViewCar from "./../../../../Cars/assets/js/components/SubViewCar.vue";
import config from "./../config/auction.js";
import Chat from "./Chat.vue";
export default {
  name: "index-auction",
 
  data: function () {
    return {
      varInterval:null,
      config_auction_has_image: config.auction_has_image,
      currency: config.currency,
      form: {
        file_id: [],
      },
      item: {},
      more_value: 0,
      current_price: 0,
      loadBidValue: false,
      name_user_bid: "",
      remming:null,
      id:null,
      item_id:null,
      sync:false,
    };
  },
 
  created() {

    let id = this.$route.query.id;
    this.id = id;
    this.item_id = this.$route.query.item_id;
    this.$http.get("api/auction/" + this.id).then((response) => {
      this.auction = response.data.data;
      this.form = response.data.data;
      if (this.form.values) {
        this.form.values = this.form.values.split(",");
      } else {
        this.form.values = [];
      }

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
        this.varInterval =setInterval(()=> {

        this.remming = this.millisToHoursMinutesAndSeconds(res_end)
        res_end -=1000;
        // let 
      }, 1000);

    
          break;
           case 'will_open':
          //var starts_at 
          //start-now 
          //call diff time
          this.varInterval =  setInterval(()=> {
        this.remming = this.millisToHoursMinutesAndSeconds(res_start)
        res_start -=1000;
        // let 
      }, 1000);
          break;
            case 'closed':
              //cant enter to this page auction is finished
            this.$router.push({
        name: "view_auction",
         query:{
        id: this.id,
        }
            });
          break;
      
        default:
          break;
      }
      this.getItems();
    });
  },
   
  mounted(){
     let msg = this.translate('new_bid_fired');
    //Listen to Event NewBid
     console.log('item',this.item_id);
    console.log(`bid.item.${this.item_id}`);
    this.$echo.private(`bid.item.${this.item_id}`).listen("NewBid", (e) => {
      console.log(e,'hi listen');
          this.current_price = e.data.price;
          this.name_user_bid = e.data.name;
       if (e.data.state == "success") {
            this.$notification.success(msg);
          }
    });
        this.$echo.private(`ilike.user.1`).listen("ILike", (e) => {
      console.log(e,'hi listen');
            this.$notification.success(e.msg);
    });

    
  },
  components: {
    SubViewCar,
    Chat,
  },
  methods: {
     syncTimeAuction(){
    this.$http.get("api/auction/" + this.id).then((response) => {
      let state =  response.data.data.state ; 
      let now = +new Date( response.data.data.now);
      let end =  response.data.data.ends_at
       end = +new Date(end);
      let res_end = end - now ;
      let start =  response.data.data.starts_at
      start = +new Date(start);
        let res_start = start-now;
      console.log(res_start);
      switch (state) {
        case 'open':
          //var ends_at 
          //ends_at - now
          //call diff time
        this.varInterval =setInterval(()=> {
        this.remming = this.millisToHoursMinutesAndSeconds(res_end)
        res_end -=1000;
        // let 
      }, 1000);

    
          break;
           case 'will_open':
          //var starts_at 
          //start-now 
          //call diff time
          this.varInterval =  setInterval(()=> {
        this.remming = this.millisToHoursMinutesAndSeconds(res_start)
        res_start -=1000;
        // let 
      }, 1000);
          break;
            case 'closed':
              //cant enter to this page auction is finished
            this.$router.push({
        name: "view_auction",
         query:{
        id: this.id,
        }
            });
          break;
      
      }
 
    });
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
    //when reamming one (1) minute
      if(hours == 0 && minutes =='1' && !this.sync){
        this.sync = true;
        this.syncTimeAuction();
      }
    if(hours == 0 && minutes ==0 && seconds=='1'){
      console.log('auction finish');
      	clearInterval(this.varInterval);
     this.$notification.success(
              this.translate("msg_auction_finich")
            );
       this.$router.push({
        name: "view_auction",
         query:{
        id: this.id,
        }
      });
      
      return this.translate('msg_auction_finich');
    }
    return `${(hours < 10 ? "0" : "")}${hours}:${(minutes < 10 ? "0" : "")}${minutes}:${(seconds < 10 ? "0" : "")}${seconds}`;
},
    // ,'just_values','user_id','allow_username_displayed','only_multiples_values','smallest_possible_value'
    checkOnlyMultiplesValue() {
      for (let i in this.form.values) {
        if (this.more_value % this.form.values[i] == 0) {
          return true;
        }
      }
      return false;
    },

    bidValue() {
      let more_value = parseInt(this.more_value);
      if (!more_value) {
        this.$notification.show(this.translate("msg_add_valud_to_bid"));
        return "";
      }
      if (this.form.just_values == 0) {
        if (this.form.only_multiples_values == 1) {
          if (!this.checkOnlyMultiplesValue()) {
            this.$notification.show(
              this.translate("msg_can_only_bid_multiple_value")
            );
            return "";
          }
        }

        
          if (!(this.form.smallest_possible_value <= more_value)) {
            this.$notification.show(
              this.translate("msg_value_must_big_form_smallest_value") +
                this.form.smallest_possible_value
            );
            return "";
          }
      }
      this.loadBidValue = true;
      let current_price = this.current_price + more_value;
      let request = `api/auction/bid/auction-items/${this.item.id}`;
      let params = {
        current_price,
      };
      this.$http
        .post(request, params)
        .then((response) => {
          if (response.data.state == "info") {
            this.$notification.show(response.data.msg);
          } 
        })
        .finally(() => {
          this.loadBidValue = false;
        });
    },

    getItems() {
      this.$http
        .get(`api/auction/auction-items?id=${this.item_id}`)
        .then((response) => {
          this.item = response.data.data.item;
          this.name_user_bid = response.data.data.name;
          this.user_id = response.data.data.user_id;
          this.current_price = this.item.initial_price;
          if (
            this.item.current_price &&
            this.item.current_price > this.item.initial_price
          ) {
            this.current_price = this.item.current_price;
          } else {
            this.current_price = this.item.initial_price;
          }
          this.$refs.chat.set(
            this.item.id,
            this.name_user_bid,
            this.user_id
          );
        });
    },
    viewAuctionItem(item) {
      let id = item.auctionable_id;
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

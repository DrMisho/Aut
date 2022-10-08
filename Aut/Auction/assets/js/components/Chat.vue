<template>
  <v-layout wrap class="justify-center grey lighten-4">
    <v-flex md8 sm8 xl8>
      <v-card class="align-center justify-center">
        <v-card-title> {{ translate("detail") }} </v-card-title>
        <v-progress-circular
          v-if="loadingGenrate"
          size="100"
          color="info"
          indeterminate
        ></v-progress-circular>
        <v-layout row wrap v-else>
          <v-flex
            md12
            xl12
            sm12
            v-for="(msg, i) in msgs"
            :key="i"
            :class="{
              'force-ltr': langs_info[locale].dir == 'ltr' && msg.self,
              'force-rtl': langs_info[locale].dir == 'ltr' && !msg.self,
              'force-rtl': langs_info[locale].dir == 'rtl' && msg.self,
              'force-ltr': langs_info[locale].dir == 'rtl' && !msg.self,
            }"
          >
            <v-card-text>
              <msg :msg="msg" :user="msg"></msg>
            </v-card-text>
          </v-flex>
        </v-layout>

        <v-card-text>
          <v-text-field
            :label="translate('detail')"
            @keyup.enter="send()"
            v-model="detail"
          >
            <template v-slot:append>
              
                <v-progress-circular
                  v-if="loading"
                  size="24"
                  color="info"
                  indeterminate
                ></v-progress-circular>
                <v-tooltip bottom>
                  <template v-slot:activator="{ on }">
                    <v-btn @click="send()" :loading="loading" v-on="on" icon
                      ><v-icon small color="gray"
                        >fas fa-paper-plane</v-icon
                      ></v-btn
                    >
                  </template>
                  <span> {{ translate("click_to_search") }}</span>
                </v-tooltip>
            </template>
          </v-text-field>
        </v-card-text>
      </v-card>
    </v-flex>
  </v-layout>
</template>



<script>
import Msg from "./Msg.vue";
export default {
  name: "chat",
  props: {},

  data: function () {
    return {
      detail: null,
      locale: automata.language.locale,
      langs_info: automata.language.config.supportedLocales,
      loading: false,
      loadingGenrate: false,
      msgs: [],
      owner: null,
      owner_id: 1,
      item_id:this.$route.query.item_id,
      auction_commodity_id: null,
      paginate: {},
    };
  },
  computed: {},
  components: {
    Msg,
  },
  created() {},
  methods: {
    translate(key) {
      return this.$t(`auction.${key}`);
    },
    set(id, owner, owner_id) {
      this.owner = owner;
      this.owner_id = owner_id;
      this.auction_commodity_id = id;
      let auction_commodity_id = id;
      this.loadingGenrate = true;
      let request = `api/auction/msgs?`;
      let params = `auction_commodity_id=${auction_commodity_id}`;
      this.$http
        .get(`${request}${params}`)
        .then((response) => {
          this.msgs = response.data.data;
          this.paginate = {
            next_page_url: response.data.next_page_url,
            path: response.data.path,
          };
        })
        .finally(() => {
          this.loadingGenrate = false;
        });
    },
    send() {
      if (this.detail) {
        this.loading = true;
        let request = `api/auction/send`;
        let params = {};
        params.detail = this.detail;
        params.auction_commodity_id = this.auction_commodity_id;
        this.$http
          .post(request, params)
          .then((response) => {
            // this.msgs.push(response.data.data);
            // this.$broadcast('newMsg','hi');        
            // this.$broadcast('newMsg')
     this.detail = null;
          })
          .finally(() => {
            this.loading = false;
          });
      }
    },
  },
  echo: {
    //listen event
    newMsg: (payload) => {
      console.log("new msg craeted", payload);
    },
  },
  mounted() {
    console.log('item',this.item_id);
    console.log(`chat.item.${this.item_id}`);
    this.$echo.private(`chat.item.${this.item_id}`).listen("NewChat", (e) => {
      console.log(e,'hi listen');
      this.msgs.push(e.msg);
      // let request = `api/auction/msgs?`;
      // let params = `auction_commodity_id=${this.auction_commodity_id}`;
      // this.$http
      //   .get(`${request}${params}`)
      //   .then((response) => {
      //     let array = response.data.data;
      //     this.msgs = array;
      //     this.paginate = {
      //       next_page_url: response.data.next_page_url,
      //       path: response.data.path,
      //     };
      //   })
      //   .finally(() => {
      //     this.loadingGenrate = false;
      //   });
    });
  },
};
</script>
<style scoped>
</style>              


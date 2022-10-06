<template>
  <v-flex>
    <v-dialog
      v-model="dialog"
      max-width="500"
      persistent
      white
      class="d-flex flex-row justify-center mb-8 white"
    >
      <v-card>
        <v-card-title class="primary white--text">
          <h4>{{ translate("add_social_network") }}</h4>
        </v-card-title>
        <v-card-text   v-for="social_network ,index_social in social_networks"
                :key="index_social">
            <!-- Url -->
            <v-text-field
                v-model="urls[social_network.value]"
              :label="
                social_network.text
              "
            ></v-text-field>
            <!-- End Url -->
        </v-card-text>
        <!-- ازرار العمليات اضافة تعديل  -->
        <v-card-actions class="white">
          <v-spacer></v-spacer>
          <v-btn
            @click="
              cancel();
              dialog = false;
            "
          >
             {{ translate('cancel') }}
          </v-btn>
          <v-btn
            :loading="loadingSocial"
            @click="validate()"
            :disabled="  loading || loadingPage"
            color="primary"
          >
            {{translate('save') }}
          </v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
  </v-flex>
</template>

<script>

export default {
  name: "add-social-network",
  data: function () {
    return {
      //Loading
      loadingSocial: false,
      loadingPage: false,
      loading: false,
      dialog: false,
      supportedLocales: automata.language.config.supportedLocales,
      form: {},
      emptyForm: {
      },
      division:{},
      urls: {},
      social_networks:[],
    };
  },
  watch: {},
  methods: {
    translate(key) {
      return this.$t(`app.${key}`);
    },
    init(division) {
    let edit_url = {};
      if(division.urls){
     
     for(let i in this.division.urls)
        {
          let url = this.division.urls[i];
          edit_url[url.pivot.social_network_id] = url.pivot.url;
        }
      }
      console.log('edit url',edit_url);
      let urls = {};
      this.social_networks.forEach((social_network) => {
        if(edit_url[social_network.value]){
          urls[social_network.value] =  edit_url[social_network.value];
        }
        else{
      console.log('check false url',edit_url[social_network.value]);

        urls[social_network.value] = '';
        }
      });
      this.urls = automata.helper.cloneObject(urls);
    },
    //Return Active Currencies
    getSocialNetworks() {
      this.loadingSocial = true;
      this.$http
        .get(`api/autocomplete/social-networks`)
        .then((response) => {
          this.social_networks = response.data.data;
           let urls = {};
      this.social_networks.forEach((social_network) => {
        urls[social_network.id] = '';
      });
      this.urls = automata.helper.cloneObject(urls);
        })
        .finally(() => {
          this.loadingSocial = false;
        });
    },

    start(division) {
      this.division = division;
      console.log(division)
      this.init(division);
      this.dialog = true;
      this.dialog = true;
    },
    validate() {
      //Chack Validation
        this.loading = true;
        this.loadingGenerate = true;
        let request = `api/division/social-network/${this.division.id}`;
        this.$http
          .post(request, this.urls)
          .then((response) => {
            this.$emit("saved");
           
              this.$notification.success(this.translate('success'));
          
          
          })
          .catch((error) => {
               this.$notification.show(this.translate('warrinng'));

          })
          .finally(() => {
            this.loading = false;
            this.loadingGenerate = false;
            this.cancel();
          });
    },
    cancel() {
      // this.init();
      this.hide();
    },
    hide() {
      this.dialog = false;
    },
    edit(urls) {
    
    },
  },
  created() {
      
    this.getSocialNetworks();
      let urls = {};
      this.social_networks.forEach((social_network) => {
       
        urls[social_network.value] = '';
      
      });
      this.urls = automata.helper.cloneObject(urls);

  },

  mounted() {},
};
</script>

<style scoped></style>

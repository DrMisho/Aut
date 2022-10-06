<template>
  <v-flex>
    <v-dialog
      v-model="auction_dialog"
      max-width="1000"
      white
      class="d-flex flex-row justify-center mb-8 white"
      scrollable
    >
      <v-card>
        <v-toolbar flat dark color="primary">
          <v-btn icon dark @click="auction_dialog = false">
            <v-icon>mdi-close</v-icon>
          </v-btn>
          <v-toolbar-title v-if="!editing">{{
            translate("add_auction_titles")
          }}</v-toolbar-title>
          <v-toolbar-title v-else>{{
            translate("mod_auction_titles")
          }}</v-toolbar-title>
          <v-spacer></v-spacer>
        </v-toolbar>

        <v-card-text>
          <v-layout class="justify-center wrap row white">
            <v-form ref="form" v-model="valid" lazy-validation>
              <v-layout class="justify-center wrap row white mb-2">
                <v-flex md2 sm2 xl2 class="pa-3 d-flex justify-end">
                  <h4 class="d-flex justify-center">
                    {{ translate("global") }}
                  </h4>
                  <v-spacer></v-spacer>
                  <v-divider vertical class="primary" />
                </v-flex>
                <v-flex md10 sm10 xl10>
                  <file-pond-input
                    v-if="config_auction_has_image"
                    md12
                    sm12
                    xm12
                    xl12
                    multiple
                    :label="translate('msg_click_to_add_image')"
                    v-model="form.file_id"
                    :uploader="uploader"
                    :files="form.files"
                  />
                  <v-flex
                    md6
                    sm6
                    xm6
                    xl6
                    v-for="(item, locale) in locales"
                    :key="item"
                  >
                    <v-text-field
                      v-model="form.title[locale]"
                      :rules="nameRules"
                      :label="
                        translate('title') +
                        '(' +
                        langs_info[locales[locale]].native +
                        ')'
                      "
                      required
                      :class="'force-' + langs_info[locales[locale]].dir"
                    ></v-text-field>
                  </v-flex>
                  <v-flex
                    md12
                    sm12
                    xm12
                    xl12
                    v-for="(item, locale) in locales"
                    :key="locale"
                  >
                    <v-textarea
                      :counter="config_summary_length"
                      v-model="form.summary[locale]"
                      :label="
                        translate('summary') +
                        '(' +
                        langs_info[locales[locale]].native +
                        ')'
                      "
                      required
                      :class="'force-' + langs_info[locales[locale]].dir"
                    ></v-textarea>
                  </v-flex>

                  <v-layout class="justify-center wrap row white md12">
                    <!-- ----------------------date ----------------------------- -->
                    <v-flex md6 sm12 xl6 xm12 class="DataTime">
                      <date-time-input
                        v-model="form.starts_at"
                        :label="translate('starts_at')"
                      >
                        <template v-slot:default="{ value }">
                          <v-layout wrap row md10 xm10 sm10 xl10>
                            <v-flex md6 sm6 xl6 xm6>
                              <date-input
                                v-model="value.date"
                                :label="translate('date_start')"
                              />
                            </v-flex>
                            <v-flex md6 sm6 xl6 xm6>
                              <time-input
                                clearable
                                v-model="value.time"
                                :label="translate('time_start')"
                              />
                            </v-flex>
                          </v-layout>
                        </template>
                      </date-time-input>
                    </v-flex>
                    <v-flex md6 sm12 xl6 xm12 class="DataTime">
                      <date-time-input
                        v-model="form.ends_at"
                        :label="translate('ends_at')"
                      >
                        <template v-slot:default="{ value }">
                          <v-layout wrap row md10 xm10 sm10 xl10>
                            <v-flex md6 sm6 xl6 xm6>
                              <date-input
                                v-model="value.date"
                                :label="translate('date_end')"
                              />
                            </v-flex>
                            <v-flex md6 sm6 xl6 xm6>
                              <time-input
                                clearable
                                v-model="value.time"
                                :label="translate('time_end')"
                              />
                            </v-flex>
                          </v-layout>
                        </template>
                      </date-time-input>
                    </v-flex>

                   
                  </v-layout>
                </v-flex>
              </v-layout>
              <v-layout class="justify-center wrap row white mb-2">
                <v-flex md2 sm2 xl2 class="pa-3 d-flex justify-end">
                  <h4 class="d-flex justify-center">
                    {{ translate("element") }}
                  </h4>
                  <v-spacer></v-spacer>
                  <v-divider vertical class="primary" />
                </v-flex>

                <v-flex md10 sm10 xl10>
                  <v-layout xs12 wrap row>
                    <v-flex md12 sm12 xl12>
                      <v-autocomplete
                        :menu-props="{ closeOnContentClick: true }"
                        v-model="selected_commodities"
                        :readonly="!isEditing"
                        :rules="startAtRule"
                        :disabled="isUpdating"
                        :items="data_commodity"
                        box
                        chips
                        color="blue-grey lighten-2"
                        :label="translate('commodity')"
                        item-text="title"
                        return-object
                        multiple
                      >
                        <template v-slot:selection="data" md12>
                          <v-flex md12 xl12 sm12 xs12>
                            <template v-if="typeof data.item !== 'object'">
                              <v-list-tile-content
                                v-text="data.item"
                              ></v-list-tile-content>
                            </template>
                            <template v-else>
                              <v-list-tile-avatar>
                                <img :src="data.item.img" />
                              </v-list-tile-avatar>
                              <v-list-tile-content>
                                <v-list-tile-title
                                  v-html="data.item.title.text"
                                ></v-list-tile-title>
                                <v-list-tile-sub-title>
                                  {{ data.item.group }}
                                </v-list-tile-sub-title>
                              </v-list-tile-content>
                            </template>
                          </v-flex>
                        </template>

                        <template v-slot:item="data" md12>
                          <template v-if="typeof data.item !== 'object'">
                            <v-list-tile-content
                              v-text="data.item"
                            ></v-list-tile-content>
                          </template>
                          <template v-else>
                            <v-list-tile-avatar>
                              <img :src="data.item.img" />
                            </v-list-tile-avatar>
                            <v-list-tile-content>
                              <v-list-tile-title
                                v-html="data.item.title.text"
                              ></v-list-tile-title>
                              <v-list-tile-sub-title>
                                {{ data.item.group }}
                              </v-list-tile-sub-title>
                            </v-list-tile-content>
                          </template>
                        </template>
                      </v-autocomplete>
                    </v-flex>
                  </v-layout>
                  <v-layout wrap>
                    <v-card
                      class="mb-2"
                      v-for="(item, key) in selected_commodities"
                      :key="key"
                    >
                      <v-card-title class="justify-center">
                        <v-flex>
                          <img :src="item.img" width="100%" height="100%" />
                        </v-flex>
                        <v-flex class="flex md12 sm12 xl12"
                          ><v-layout
                            class="align-center flex justify-center md12 sm12 wrap xl8"
                            >{{ item.title.text }}</v-layout
                          ></v-flex
                        >
                      </v-card-title>
                      <v-flex class="d-flex justify-center">
                        <v-divider></v-divider>
                      </v-flex>
                      <v-card-text class="justify-center">
                        <v-flex class="align-center justify-center d-flex"
                          >{{ translate("initial_price") + ":"
                          }}{{ item.id[2] | money }}
                        </v-flex>
                        <v-flex>
                          <v-text-field
                            align-center
                            justify-center
                            class=""
                            :rules="[
                              (v) => !!v || translate('required'),
                              (v) =>
                                (v && !isNaN(v)) ||
                                translate('required_number'),
                            ]"
                            v-model="item.id[2]"
                            :label="translate('initial_price')"
                            @change="itemChange()"
                          >
                          </v-text-field>
                        </v-flex>
                        <v-flex md12 sm12 xl12>
                          <v-select
                            item-value="value"
                            item-text="text"
                            :loading="loadCurrency"
                            :items="currencies"
                            :rules='[(v) => !!v || translate("required")]'
                            v-model="item.id[3]"
                            :label="translate('currency')"
                            @change="itemChange()"
                          ></v-select>
                        </v-flex>
                      </v-card-text>
                    </v-card>
                  </v-layout>
                </v-flex>
              </v-layout>
              <v-layout class="justify-center wrap row white">
                <v-flex md2 sm2 xl2 class="pa-3 d-flex justify-end">
                  <h4 class="d-flex justify-center">
                    {{ translate("option") }}
                  </h4>
                  <v-spacer></v-spacer>
                  <v-divider vertical class="primary" />
                </v-flex>

                <v-flex md10 sm10 xl10>
                  <v-layout>
                    <v-flex md12 sm12 xm12 xl12>
                      <v-container fluid>
                        <tags-input
                          name="keywords"
                          :hint="translate('ex_auction_values')"
                          v-model="form.values"
                          :rules="numberRules"
                          :label="translate('values')"
                          chips
                        />
                      </v-container>
                    </v-flex>
                  </v-layout>
                  <v-layout warp row md12>
                    <v-flex md6 sm16 xm16 xl6>
                      <v-checkbox
                        @change="resetlSmallestValue()"
                        v-model="form.just_values"
                        :label="translate('just_values')"
                        required
                      ></v-checkbox>
                    </v-flex>
                    <v-flex md6 sm16 xm16 xl6>
                      <v-checkbox
                        v-model="form.is_secrete"
                        :label="translate('is_secrete')"
                        required
                      ></v-checkbox>
                    </v-flex>
                  </v-layout>
                  <v-layout warp row md12>
                    <v-flex md6 sm16 xm16 xl6>
                      <v-checkbox
                        v-model="form.allow_username_displayed"
                        :label="translate('allow_username_displayed')"
                        required
                      ></v-checkbox>
                    </v-flex>
                    <v-flex md6 sm16 xm16 xl6>
                      <v-checkbox
                        v-model="form.only_multiples_values"
                        :label="translate('only_multiples_values')"
                        required
                      ></v-checkbox>
                    </v-flex>
                  </v-layout>
                  <v-flex md12 sm112 xm112 xl12>
                    <v-text-field
                      v-if="!form.just_values"
                      md12
                      v-model="form.smallest_possible_value"
                      :rules="
                        !form.just_values
                          ? [
                              (v) => !!v || translate('required'),
                              (v) =>
                                (v && !isNaN(v)) ||
                                translate('required_number'),
                            ]
                          : []
                      "
                      :label="translate('smallest_possible_value')"
                      class=""
                    ></v-text-field>
                  </v-flex>
                </v-flex>
              </v-layout>
            </v-form>
          </v-layout>
        </v-card-text>

        <v-card-actions>
          <v-spacer></v-spacer>

          <v-spacer></v-spacer>
          <v-btn @click="auction_dialog = false;init();">
            {{ translate("disagree") }}
          </v-btn>
          <v-btn
            v-if="!editing"
            :disabled="!valid || loading"
            color="primary"
            :loading="loadingGenerate"
            @click="validate"
          >
            {{ translate("save") }}
          </v-btn>

          <v-btn
            v-else
            :disabled="!valid || loading"
            :loading="loadingGenerate"
            color="primary"
            @click="validate"
          >
            {{ translate("edit") }}
          </v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
  </v-flex>
</template>

<script>
import Form from "./class/Form.js";
import Temp from "./class/Temp.js";
import config, { currency } from "./../config/auction.js";

export default {
  name: "add_edit_auction",

  data: function () {
    return {
      isEditing: true,
      uploader: "auction_image",
      config_auction_has_image: config.auction_has_image,
      config_summary_length: config.summary_length,
      selected_commodities: [],
      form: new Form({
        file_id: [],
        files: [],
        title: [],
        summary: [],
        values: null,
        just_values: false,
        initial_price: "",
        starts_at: "",
        ends_at: "",
        commodities: [],
        is_secrete: false,
        smallest_possible_value: null,
        only_multiples_values: false,
        allow_username_displayed: false,
      }),
      loadCurrency: false,
      currencies: [],
      loading: false,
      loadingGenerate: false,
      items: [],
      auction_dialog: false,
      locales: [],
      valid: true,
      startAtRule: [(v) => !!v || this.translate("date_required")],
      TimeRule: [(v) => !!v || this.translate("date_required")],
      editing: false,
      nameRules: [(v) => !!v || this.translate("required")],
      numberRules: [
        (v) => !!v || "number is required",
        (v) => (v && !isNaN(v)) || "please input number",
      ],
      regex: new RegExp("^[0-9 ]*$"),
      numberValRules: [
        (v) => !!v || "number is required",
        (v) =>
          (v && (!isNaN(v) || this.regex.test(key))) || "please input number",
      ],
      langs_info: automata.language.config.supportedLocales,

      checkbox: false,
      autoUpdate: true,
      commodities: [],
      isUpdating: false,
      name: "Midnight Crew",
      data_commodity: [],
      title: "The summer breeze",
      config_has_initial_price: config.auction_has_initial_price,
    };
  },
  watch: {
    isUpdating(val) {
      if (val) {
        setTimeout(() => (this.isUpdating = false), 3000);
      }
    },
    selected_commodities(val) {
      this.form.commodities = [];
      for (let i in val.length) {
        this.form.commodities.push(val[i].id);
      }
    },
  },

  computed: {},
  created() {
    this.getCommodity();
    this.getLocales();
    this.getCurrencies();
  },
  mounted() {
    this.$parent.$on("add_auction", () => {
      console.log("add_auction fire by its parent");
    });
    this.$parent.$on("edit_auction", (item) => {
      console.log("edit_auction fire by its parent", item);
    });
  },
  methods: {
    init(){
      this.form = new Form({
        file_id: [],
        files: [],
        title: [],
        summary: [],
        values: null,
        just_values: false,
        initial_price: "",
        starts_at: "",
        ends_at: "",
        commodities: [],
        is_secrete: false,
        smallest_possible_value: null,
        only_multiples_values: false,
        allow_username_displayed: false,
      });
      this.selected_commodities = [];
    },
    addElementToForm(val){
      //  console.log('addElementToForm function',val);
      let array = [];
        for (let i = 0; i < val.length; i++) {
        array.push(val[i].id);
      }
      //  console.log('addElementToForm function',array);
      return array;
    },
    itemChange() {
      let array = [];
 
      for (let i = 0; i < this.selected_commodities.length; i++) {
        array.push(this.selected_commodities[i].id);
      }
      this.form.commodities = array;
      console.log('item change',this.form);
    },
    getCurrencies() {
      this.loadCurrency = true;
      this.$http
        .get("api/autocomplete/currencies?active=true")
        .then((response) => {
          this.currencies = response.data.data;
        })
        .finally(() => {
          this.loadCurrency = false;
        });
    },
    resetlSmallestValue() {
      this.form.smallest_possible_value = null;
    },
    auto() {
      alert("auto");
    },

    editCommody(item,callback,stopLoading) {
      let id = item.id;
      this.$http.get("api/auction/edit-commodity/" + id).then((response) => {
        let array = response.data;

        this.selected_commodities = [];
        for (let index in array) {
          let initial_price = array[index].initial_price;
          let currency_id = array[index].currency_id;
          console.log(array[index]);
          let image = array[index].image;
          //check if has image
          if (image != null) {
            //chek if has multi image
            if (Array.isArray(image) && image.length > 0) {
              image = image[0];
            }
            //in state else image is one image ...
          } else {
            image = null;
          }
          this.data_commodity.push(
            {
            title: array[index].title,
            group: "",
            img: image,
            id: [
              array[index].id,
              array[index].model_name,
              initial_price,
              currency_id,
            ],
          }
          );
          this.selected_commodities.push({
            title: array[index].title,
            group: "",
            img: image,
            id: [
              array[index].id,
              array[index].model_name,
              initial_price,
              currency_id,
            ],
          });
        
        }
         callback(item,stopLoading);
      });
      
    },
    getCommodity() {
      this.$http
        .get("api/auction/get-commodity")
        .then((response) => {
          console.log(response.data);
          let array = [];
          for (let group in response.data) {
            let name_group = group;
            console.log("group", group);
            array.push({
              header: group,
            });
            let array_group = response.data[group];
            for (let index in array_group) {
              console.log(array_group[index]);
              let image = array_group[index].image;
              //check if has image
              if (image != null) {
                //chek if has multi image
                if (Array.isArray(image) && image.length > 0) {
                  image = image[0];
                }
                //in state else image is one image ...
              } else {
                image = null;
              }
              array.push({
                title: array_group[index].title,
                group: name_group,
                img: image,
                id: [array_group[index].id, array_group[index].model_name, ""],
              });
            }
            array.push({
              divider: true,
            });
          }
          this.data_commodity = array;
        })
        .catch((error) => {
          // console.log(error.response);
          this.form.onFaild(error);
          this.$notification.show(error.response.data);
        });
    },
    remove(item) {
      const index = this.form.commodities.indexOf(item.title);
      if (index >= 0) this.from.commodities.splice(index, 1);
    },
    initialPrice(item) {},
    //get locale all lang form project
    getLocales() {
      let array = [];
      for (let index in automata.language.config.supportedLocales)
        array.push(index);

      this.locales = array;
    },

    translate(key) {
      return this.$t(`auction.${key}`);
    },
    addAuction() {
      this.init();
      this.editing = false;
      // this.form.reset();
      // this.form.just_values = false;
      // this.form.is_secrete = false;
      // this.form.smallest_possible_value = null;
      // this.form.only_multiples_values = false;
      // this.form.allow_username_displayed = false;

      // this.form.file_id = [];
      // this.form.files = [];
      // this.form.commodities = [];
      // this.form.just_values = false;
      // this.form.title = [];
      // this.form.summary = [];
      // this.form.values = null;
      // this.form.commodity = [];
      this.auction_dialog = true;
    },
   
    
  
    
    editAuction(item,callback) {
      //init form 
      this.init();

      this.editing = true;

      this.getCommodity();

      this.editCommody(item,this.fillForm,callback)
     
      
      
    },
    fillForm(item,stopLoading){
         //store array translate for field title
      let array_title = this.arrayTransTitle(item);
      let array_summary = this.arrayTransSummary(item)
      let commodities = this.addElementToForm(this.selected_commodities);
  // console.log('commm ',commodities);
      let new_form= new Form({
        id: item.id,
        file_id: item.file_id,
        files: item.file_id,
        title: array_title,
        summary: array_summary,
        values: item.values,
        just_values: item.just_values,
        is_secrete: item.is_secrete,
        initial_price: item.initial_price,
        starts_at: item.starts_at,
        ends_at: item.ends_at,
        commodities:[],
        smallest_possible_value: item.smallest_possible_value,
        only_multiples_values: item.only_multiples_values,
        allow_username_displayed: item.allow_username_displayed,
      });
      this.form = new_form;
      this.auction_dialog = true;
      //stop loading in compo Auction.vue
      stopLoading();
      // this.itemChange();

    },
    arrayTransSummary(item) {
      let array = [];
      for (let locale in this.locales) {
        let name_lang = this.locales[locale];
        if (
          item.translations[locale] &&
          item.translations[locale].locale == name_lang
        ) {
          let title_val = item.translations[locale].summary;
          array.push(title_val);
        }
      }
      return array;
    },
    arrayTransTitle(item) {
      let array = [];
      for (let locale in this.locales) {
        let name_lang = this.locales[locale];
        if (
          item.translations[locale] &&
          item.translations[locale].locale == name_lang
        ) {
          let title_val = item.translations[locale].title;
          array.push(title_val);
        }
        // this.form.appand(name_lang,{ title : title_val });
      }
      return array;
    },
    mergeWithTranslate() {
      for (let id in this.locales) {
        let name_lang = this.locales[id];
        let title_val = this.form.title[id];
        let summary_val = this.form.summary[id];
        // let lang[name_lang]= { title : title_val };
        this.form.appand(name_lang, {
          title: title_val,
          summary: summary_val,
        });
      }
    },
    checkLogical() {},
    //to edit or add auction
    validate() {
      //can't edit or add if form has field not validated
      //merge the field wich has traslate (title )
      this.itemChange();
      this.mergeWithTranslate();
      let data = Object.assign({}, this.form);
      if (this.form.commodities.length == 0) {
        this.$notification.show(this.translate("msg_error_auction_elements"));
      }
      if (this.$refs.form.validate()) {
        if (data.starts_at > data.ends_at) {
          this.$notification.show(this.translate("msg_error_data"));
          return "";
        }
        //check values auciton
        if (data.values) data.values = data.values.split(",");
        else data.values = null;

        this.loading = true;
        this.loadingGenerate = true;

        delete data.orginal;
        if (this.editing === false) {
          this.$http
            .post("api/auction/store", data)
            .then((response) => {
              this.auction_dialog = false;
              // this.$refs.auction.fetchDataSource();
              this.form.onSuccess(response);
              
               if (response.data.state == "success") {
                this.$emit("added", { auction: response.data.auction });
                this.$notification.success(response.data.msg);
              } else {
                this.$notification.show(response.data.msg);
              }

              this.form.commodities = [];
              this.selected_commodities = [];
              this.form.just_values = false;
              this.form.is_secrete = false;
              this.form.title = [];
              this.form.summary = [];
              this.form.smallest_possible_value = null;
              this.form.only_multiples_values = false;
              this.fomr.allow_username_displayed = false;
              this.loading = false;
              this.loadingGenerate = false;
             
              // this.reset();
            })
            .catch((error) => {
              // this.form.onFaild(error);
              // this.$notification.show(error.response.data);
            })

            .finally(() => {
              this.loading = false;
              this.loadingGenerate = false;
            });
        }
        //state edit polling
        else {
       
          delete data.orginal;
          this.$http
            .patch("api/auction/store/" + this.form.id, data)
            .then((response) => {

              this.$emit("saved");
              if (response.data.state == "success") {
                this.$emit("edited", { auction: response.data.auction.data });

                this.$notification.success(response.data.msg);
              } else {
                this.$notification.show(response.data.msg);
              }

              this.form.reset();
              // this.form.currency  = this.currency;
              this.form.commodities = [];
              this.selected_commodities = [];

              this.form.just_values = false;
              this.form.title = [];
              this.form.summary = [];
              this.form.is_secrete = false;
      this.form.smallest_possible_value = null;
      this.form.only_multiples_values = false;
      this.form.allow_username_displayed = false;
              this.loading = false;
              this.loadingGenerate = false;
              // this.reset();
             
              this.editing = false;
            })
            .catch((error) => {
              // console.log(error.response);
              this.editing = false;
              this.loading = false;
              this.loadingGenerate = false;

              this.$notification.show(error.response.data);
            })
             .finally(() => {
          this.auction_dialog = false;
        });
        }
      }
    },

   
    //         validate () {
    //   this.$refs.form.validate()
    // },
    reset() {
      this.$refs.form.reset();
      this.form.reset();
      // this.form.currency  = this.currency;

      this.form.commodities = [];
      this.selected_commodities = [];
      this.form.is_secrete = false;
      this.form.smallest_possible_value = null;
      this.form.only_multiples_values = false;
      this.form.allow_username_displayed = false;
      this.form.just_values = false;
      this.form.title = [];
      this.form.summary = [];
    },
  },
};
</script>

<style scoped>
</style>

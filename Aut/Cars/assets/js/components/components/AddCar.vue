<template>
  <v-flex>
    <v-dialog
      v-model="dialog"
      max-width="1000"
      persistent
      white
      class="d-flex flex-row justify-center mb-8 white"
      scrollable
    >
      <v-layout class="white">
        <v-flex white>
          <l-add-product ref="add_product">
            <!-- سلوت لاضافة الخواص الثابتة للسيارة  -->
            <!-- slot to add feature from table car -->
            <template v-slot:product_type>
                 <!-- صور السيارة -->
                <file-pond-input
                  multiple
                  :label="translate('cars_image')"
                  v-model="form.image.value"
                  :uploader="uploader"
                  :rules="[
                        (v) => !!v || translate('required')
                      ]"
                  :files="form.image.files"
                />
              <!-- compo to filter and select the model_car_id -->
              <!-- كومبو لاختيار المودل الخاص بالسيارة  -->
              <product-type-select
                ref="product_type_select"
                v-model="automobile"
                :car_model_id="form.car_model_id"
                :loading="loadingPage"
              ></product-type-select>
              <v-form ref="form" v-model="validcar" lazy-validation>
                  <!-- initial price  -->
                  <!-- السعر المبدأي الذي يحدده المستخدم مع العملة  -->
                <v-layout wrap row>
                  <v-flex md10 sm9 xl10 class="force-ltr pl-2">
                    <v-text-field
                      md12
                      v-model="form.initial_price"
                      :hint="translate('msg_car_initial_price')"
                      :rules="[
                        (v) => !!v || translate('required'),
                        (v) => (v && !isNaN(v)) || translate('required_number'),
                      ]"
                      :label="translate('initial_price')"
                      class=""
                    ></v-text-field>
                  </v-flex>
                  <v-flex md2 sm3 xl2>
                   
                      <select-input
                    :query="{active: true}"
                    resource="currencies"
                    v-model="form.currency_id"
                    :label="translate('currency')"
                  ></select-input>
                  </v-flex>
                </v-layout>
                <!-- cites for site car -->
                <!-- موقع السيارة  -->
                <v-flex md12 sm12 xl12>
                  <autocomplete
                     
                    resource="cities"
                    v-model="form.city_id"
                    :label="translate('site_car')"
                  ></autocomplete>
                </v-flex>
                <!-- Car State -->
                <!--  حالة السيارة  -->
                <v-flex md12 sm12 xl12>
                    <v-switch v-model="form.state"
                    @change="initialCarPart()"
                  color="primary"
                :label="translate('car_state_demage')"></v-switch>
                </v-flex>
                <!-- Damage parts to the car -->
                <v-flex md12 sm12 xl12 v-show="form.state">
                  
                  <car-part ref="car_part">
                  </car-part>

                </v-flex>
              </v-form>
              <!-- loading... -->
              <v-flex
                md12
                sm8
                xl8
                xm8
                v-if="loadingPage"
                class="justify-center align-center d-flex"
              >
               <v-progress-linear
                  v-if="loadingPage"
      indeterminate
      color="info"
    ></v-progress-linear>
              </v-flex>
            </template>
          </l-add-product>
          <!-- option -->
          <!-- ازرار العمليات اضافة تعديل  -->
          <v-card-actions class="white">
            <v-spacer></v-spacer>
            <v-btn
            
              @click="
                initial();
                dialog = false;
              "
            >
              {{ translate("disagree") }}
            </v-btn>
            <v-btn
              v-if="!editing"
              :loading="loadingGenerate"
              @click="save()"
              :disabled="!valid || !validcar || loading || loadingPage"
              color="primary"
            >
              {{ translate("save") }}
            </v-btn>
            <v-btn
              v-else
              @click="save()"
              :disabled="!valid || loading || loadingPage || !validcar"
              color="primary"
            >
              {{ translate("edit") }}
            </v-btn>
          </v-card-actions>
        </v-flex>
      </v-layout>
    </v-dialog>
  </v-flex>
</template>

<script>
import CarPart from './CarPart.vue'
import ProductTypeSelect from "./ProductTypeSelect.vue";
import LAddProduct from "./../../../../../Attributes/assets/js/components/components/LAddProduct.vue";

class Image {
  constructor() {
    this.uploader = "cars_image";
    this.files = [];
    this.value = [];
  }
}
export default {
  name: "add-car",
  data: function () {
    return {
      //متحول الذي يستخدم ك علم لمنع جلب بينة الشجرة اثناء استدعاء دالة جلب البينة مع القيم في حالة التعديل
      i_call_value_attrubute:false,
      automobile: null,
      dialog: false,
      loading: false,
      loadingGenerate: false,
      loadingPage: false,
      editing: false,
      valid: true,
      validcar: false,
      currencies: [],
      loadinCity: false,

      form: {
        id: null,
        product_id: null,
        car_model_id: null,
        attributes: [],
        image: new Image(),
        initial_price: null,
        currency_id: null,
        city_id: null,
        state: false,
        carParts: null,
      },
      uploader: "cars_image",
    };
  },
  components: {
    ProductTypeSelect,
    LAddProduct,
    CarPart
  },

  watch: {
    automobile: function () {
      //الشرط الثاني يمنع الاستدعاء في بداية حالة التعديل حيث يتم استدعاء دالة ااخرى تجلب البنية مع القيم
      if (this.automobile&& !this.i_call_value_attrubute) {
        
        this.startLoading();
        this.getAttributes(this.stopLoading);
      }
    },
  },
  methods: {
    translate(key) {
      return this.$t(`cars.${key}`);
    },
    initial() {
      this.automobile = null;
      this.editing = false;
      this.form = {
        id: null,
        product_id: null,
        car_model_id: null,
        attributes: [],
        image: new Image(),
        initial_price: null,
        currency_id: null,
        state: false,
        carParts: null,
      };
      this.cars_image = [];
      this.$refs.product_type_select.initial();
      this.initialCarPart();
    },
    save() {
      //get car_model_id

      let check = this.getCarModel();
      //get attributes
      if (check) {
        this.validGetData();
      } else {
      }
    },
    submit() {
      this.loading = true;
      this.loadingGenerate = true;
      if(this.form.state == true){
        this.form.carParts = this.$refs.car_part.getStyle();

      }
      this.$http
        .post("api/car", this.form)
        .then((response) => {
          let productable_id = response.data;
          let productable_type = "Aut\\Cars\\Models\\Car";
          let attributes = this.form.attributes;
          this.$http
            .post("api/attribute/products", {
              data: attributes,
              productable_id,
              productable_type,
              id: this.form.product_id,
            })
            .then((response) => {
              this.editing = false;
              this.loading = false;
              this.loadingGenerate = false;
              this.hide();
              this.$emit("saved");
              this.initial();
              if (response.data.state == "success") {
                this.$notification.success(response.data.msg);
              } else {
                this.$notification.show(response.data.msg);
              }
            })

            .finally(() => {
              this.loading = false;
              this.loadingGenerate = false;
            });
        })
        .catch((error) => {
          // handle error
          this.$notification.show(error.response.data.message);
          //   console.log(error.response.data.message, JSON.stringify(error.response.data.message),'sss')
        })
        .finally(() => {
          this.loading = false;
          this.loadingGenerate = false;
        });
    },
    hide() {
      this.dialog = false;
    },
    callForm() {
      this.initial();
      this.$refs.add_product.createProduct();
      this.dialog = true;
    },
    startLoading() {
      this.loadingPage = true;
    },
    stopLoading() {
      this.loadingPage = false;
      this.i_call_value_attrubute = false;
    },
    callEditForm(item) {
      console.log(item);
      // هذا المتحول لكي لا اسمحج باستدعاء دالة جلب بنية الشجرة لاني اقوم بجلب البنية مع القيم
      this.i_call_value_attrubute = true;
      let productable_type = "Aut\\Cars\\Models\\Car";
      let productable_id = item.id;
      let product_id = item.product_id;
      this.editing = true;
      this.form.state = item.state;
      this.form.car_model_id = item.car_model_id;
      this.form.id = item.id;
      this.form.image.files = item.file_id;
      this.form.image.value = item.file_id;
      this.form.product_id = item.product_id;
      this.form.initial_price = item.initial_price;
      this.form.currency_id = item.currency_id;
      this.form.city_id = item.city_id;
      

      if(this.form.state== true){
        this.$refs.car_part.setStyle(item.carParts);
      }

      let orderable_type = "Aut\\Cars\\Models\\AutomobileType";
      let orderable_id = item.automobile_id;
      this.startLoading();
      this.$refs.add_product.editProduct(
        item.product_id,
        productable_type,
        productable_id,
        orderable_type,
        orderable_id,
        this.stopLoading
      );

      this.dialog = true;
    },
    getCarModel() {
      let valid = this.$refs.product_type_select.validate();
      if (valid) {
        this.form.car_model_id = this.$refs.product_type_select.getCarModelId();
        return true;
      } else {
        this.$notification.show(this.translate("msg_car_require"));
        return false;
      }
    },
    getAttributes(callback) {
      let model_type = "Aut\\Cars\\Models\\AutomobileType";
      if (this.automobile.id) {
        this.loadingPage = true;
        let model_id = this.automobile.id;
        this.$refs.add_product.getAttribute(model_id, model_type, callback);
      }
    },
    initialCarPart(){
      this.$refs.car_part.initi();
    },
    validGetData() {
      let state = this.$refs.add_product.getData();
      // console.log("state is ", state);
      if (!this.form.currency_id) {
        this.$notification.show(this.translate("msg_enter_currency"));
        return "";
      }
      if (!this.form.image.value.length > 0) {
        this.$notification.show(this.translate("msg_pleas_add_image"));
        return "";
      }
      if (state.valid && this.validcar) {
        this.form.attributes = state.attributes;
        //send submit
        this.submit();
      }
    },
  },
  created() {
    
  },
};
</script>

<style scoped>
</style>

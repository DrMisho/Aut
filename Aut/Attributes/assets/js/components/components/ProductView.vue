<template>
  <v-flex>
    <slot name="header"> </slot>
    <v-flex>
      <v-layout class="justify-center wrap row white">
        <v-flex md10 sm8 xl8 xm8>
          <slot name="product_view"> </slot>
        </v-flex>
        <v-flex
          md10
          sm8
          xl8
          xm8
          v-if="setting.loading"
          class="justify-center align-center d-flex"
        >
          <v-progress-circular
            :size="70"
            :width="7"
            color="primary"
            :indeterminate="setting.loading"
          ></v-progress-circular>
        </v-flex>
        <v-flex md12 sm12 xm12 xl12 class="mb-4" v-if="setting.with_name">
          <h2 md6 sm6 xm6 xl6 class="primary--text pa-2">
            {{ translate("name") }} :{{ form.name }}
          </h2>
        </v-flex>
        <v-flex md10 sm8 xl8 xm8 v-if="setting.with_price">
          <v-flex
            row
            sm6
            xm6
            xl6
            md6
            v-for="(price, index) in form.prices"
            :key="index"
          >
            <v-card class="mb-2">
              <v-card-title primary-title>
                <div>
                  <h4 class="primary--text mb-0 pa-2">
                    {{ price.name }}
                    {{ price.value ? price.value : translate("msg_not_added") }}
                  </h4>
                </div>
              </v-card-title>
            </v-card>
          </v-flex>
        </v-flex>
        <v-flex md10 sm8 xl8 xm8>
          <v-layout
            wrap
            row
            class="justify-center"
            v-if="structure != ''"
            white
          >
            <v-flex row class="md12 sm12 xm12 xl12">
              <group-view :l_show="true" :group="common_group"></group-view>
            </v-flex>
            <v-flex
              row
              v-for="(struct, key) in structure"
              :key="key"
              class="md12 sm12 xm12 xl12"
            >
              <group-view :group="struct" color='green lighten-3'></group-view>
            </v-flex>
          </v-layout>
        </v-flex>
      </v-layout>
    </v-flex>
    <v-divider></v-divider>
  </v-flex>
</template>

<script>
import FeatureView from "./Parts/FeatureView.vue";
import GroupView from "./Parts/GroupView.vue";
export default {
  name: "product-view",
  data: function () {
    return {
      setting: {
        product_view_dialog: false,
        with_name: false,
        with_price: false,
        loading: false,
      },
      global: {},
      structure: {},
      common_group: {},
      form: {
        name: "",
        prices: [],
      },
    };
  },
  components: {
    FeatureView,
    GroupView,
  },
  methods: {
    translate(key) {
      return this.$t(`attributes.${key}`);
    },
    productView(
      features
    ) {
      this.setting.loading = true;
    
          this.structure = features.struct;
          this.common_group = features.common_group;


        

          this.setting.loading = false;
     
    },
  },
};
</script>

<style scoped></style>

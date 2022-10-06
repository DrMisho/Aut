<template>
  <v-flex>
    <v-layout align-center>
      <v-layout row wrap >
        <v-window v-model="window" class="elevation-1 flex md6 sm12 xl6 xs12" >
          <v-window-item v-for="(image, n) in images" :key="n">
            <v-card flat>
              <v-card-text v-if="image">
                <image-preview :src="image" width="500">
                  <template v-slot:activator="{ on }">
                    <v-img v-on="on" :src="image" contain> </v-img>
                  </template>
                </image-preview>
              </v-card-text>
            </v-card>
          </v-window-item>
        </v-window>
        <v-card-actions class="justify-space-between flex  md6 sm12 xl6 xs12">
          <v-btn icon @click="prev">
            <v-icon>fa fa-arrow-right</v-icon>
          </v-btn>

          <v-item-group
            v-model="window"
            class=" mr-4 flex md12"
            mandatory
            tag="v-flex"
          >
            <v-layout wrap style="max-width: 1000px; overflow-x: auto">
              <v-flex md4 sm4 xl4 v-for="(image, n) in images" :key="n">
                <v-item v-if="image">
                  <div slot-scope="{ active, toggle }">
                    <v-flex :input-value="active" @click="toggle">
                      <v-img :src="image" contain> </v-img>
                    </v-flex>
                  </div>
                </v-item>
              </v-flex>
            </v-layout>
          </v-item-group>

          <v-btn icon @click="next">
            <v-icon>fa fa-arrow-left</v-icon>
          </v-btn>
        </v-card-actions>
      </v-layout>
    </v-layout>
  </v-flex>
</template>

<script>
export default {
  //secroll
  //gallary grid
  //carousel

  name: "group-image",
  props: {
    col: {
      required: false,
      default: "md4 sm6 xl3",
    },
    images: {
      type: Array,
    },
  },
  data: function () {
    return {
      main_image: null,
      window: 0,
      active_index: null,
    };
  },
  methods: {
    show(image) {
      this.main_image = image;
    },
    next() {
      if (this.images) {
        this.window =
          this.window + 1 === this.images.length ? 0 : this.window + 1;
      }
    },
    prev() {
      if (this.images) {
        this.window =
          this.window - 1 < 0 ? this.images.length - 1 : this.window - 1;
      }
    },
  },
  created() {
    if (this.images) {
      if (this.images.length > 0) {
        this.main_image = this.images[0];
      } else {
        this.main_image = null;
      }
    }
  },
};
</script>

<style scoped>
</style>
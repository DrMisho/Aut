<template>
    <v-hover>
        <v-card
            md12
            slot-scope="{ hover }"
            :class="`elevation-${hover ? 10 : 2}`"
            class="justify-center align-center"
        >
            <v-img
                v-if="auction.element_images_path.length == 0"
                src="https://cdn.vuetifyjs.com/images/cards/sunshine.jpg"
                height="300px"
                contain
            >
            </v-img>
            <v-carousel v-else style="max-height: 300px">
                <v-carousel-item
                    v-for="(item, i) in auction.element_images_path"
                    :key="i"
                    style=""
                >
                    <image-preview :src="item" width="500">
                        <template v-slot:activator="{ on }">
                            <v-img v-on="on" :src="item" contain></v-img>
                        </template>
                    </image-preview>
                </v-carousel-item>
            </v-carousel>
            <v-card-title primary-title class="justify-center">
                <div>
                    <h2 class="align-center d-flex flat justify-center mb-2">
                        {{ auction.title }}
                    </h2>
                    <v-divider></v-divider>

                    <v-layout v-if='is_admin' wrap row class="pa-2">
                        <v-flex md12 sm12 xl12 xs12 class="grey--text">
                            <h5>
                                <i class="far fa-2x theme--light"
                                    :class="{
                                        'fa-check-circle  success--text':
                                          auction.just_values,
                                        'fa-times-circle red--text': !auction.just_values,
                                        'ml-2': dir == 'rtl',
                                        'mr-2': dir == 'ltr',
                                      }"
                                ></i>
                                {{ translate("just_values") }}
                            </h5>
                        </v-flex>
                        <v-flex md12 sm12 xl12 xs12 class="grey--text">
                            <h5>
                                <i
                                    :class="{
                                        'far fa-2x fa-check-circle theme--light success--text':
                                          auction.only_multiples_values,
                                        'far fa-2x fa-times-circle theme--light red--text': !auction.only_multiples_values,
                                        'ml-2': dir == 'rtl',
                                        'mr-2': dir == 'ltr',
                                      }"
                                ></i>
                                {{ translate("only_multiples_values") }}
                            </h5>
                        </v-flex>
                    </v-layout>
                    <v-layout v-if='is_admin' wrap row class="pa-2">
                        <v-flex md12 sm12 xl12 xs12 class="grey--text">
                            <h5>
                                <i
                                    :class="{
                    'far fa-2x fa-check-circle theme--light success--text':
                      auction.allow_username_displayed,
                    'far fa-2x fa-times-circle theme--light red--text': !auction.allow_username_displayed,
                    'ml-2': dir == 'rtl',
                    'mr-2': dir == 'ltr',
                  }"
                                ></i>
                                {{ translate("allow_username_displayed") }}
                            </h5>
                        </v-flex>
                        <v-flex md12 sm12 xl12 xs12 class="grey--text">
                            <h5>
                                <i
                                    :class="{
                    'far fa-2x fa-check-circle theme--light success--text':
                      auction.is_secrete,
                    'far fa-2x fa-times-circle theme--light red--text': !auction.is_secrete,
                    'ml-2': dir == 'rtl',
                    'mr-2': dir == 'ltr',
                  }"
                                ></i>
                                {{ translate("is_secrete") }}
                            </h5>
                        </v-flex>
                    </v-layout>
                    <v-flex v-if='!is_admin' class="pa-2" style="overflow-y: auto;
    height: 120px;">
                        <v-card-text v-if="auction.summary">{{ auction.summary }}</v-card-text>
                        <v-card-text v-else>{{ auction.summary }}</v-card-text>
                    </v-flex>

                    <v-divider class="pa-1"></v-divider>


                    <v-layout row wrap>
                        <v-flex md6 sm12 xl12 class=" green lighten-2 v-card ">
                            <v-card-title class="justify-center">
                                <v-icon class="">event</v-icon>
                            </v-card-title>
                            <v-card-text>{{ translate('from') + ' ' }}{{ auction.starts_at }}</v-card-text>
                        </v-flex>
                        <v-flex md6 sm12 xl12 class=" red lighten-2 v-card  ">
                            <v-card-title class="justify-center">
                                <v-icon class="">event</v-icon>
                            </v-card-title>
                            <v-card-text>{{ translate('to') + ' ' }}{{ auction.ends_at }}</v-card-text>
                        </v-flex>
                    </v-layout>
                    <h3 class="justify-center d-flex ma-2 mb-2">
                        {{ auction.remaining }}
                    </h3>
                </div>
            </v-card-title>

            <slot name="action"></slot>
        </v-card>
    </v-hover>
</template>

<script>
export default {
    name: "auction-item",
    props: {
        auction: {
            required: true,
        },
        is_admin: {
            required: false,
            default: false,
        },
    },
    data() {
        return {
            locale: automata.language.locale,
            langs_info: automata.language.config.supportedLocales,
            dir:
            automata.language.config.supportedLocales[automata.language.locale].dir,
        };
    },

    methods: {
        translate(key) {
            return this.$t(`auction.${key}`);
        },
        millisToHoursMinutesAndSeconds(millis) {
            //sec = 60 ;
            //
            let hours = Math.floor(millis / 3600000);
            let minutes = Math.floor(((millis % 3600000)) / 60000);
            let seconds = ((((millis % 3600000)) % 60000) / 1000).toFixed(0);

            //If seconds is less than 10 put a zero in front.
            return `${(hours < 10 ? "0" : "")}${hours}:${(minutes < 10 ? "0" : "")}${minutes}:${(seconds < 10 ? "0" : "")}${seconds}`;
        },
        initial(id) {
            this.id = id;
            this.show();
        },
        show() {
            this.dialog = true;
        },
        hide() {
            this.dialog = false;
        },
        deleteAuction() {
            this.$http.delete("api/auction/auction/" + this.id).then((response) => {
                if (response.data.state == "success") {
                    this.$emit("deleted", {id: response.data.id});

                    this.$notification.success(response.data.msg);
                } else {
                    this.$notification.show(response.data.msg);
                }
                this.hide();
            });
        },
    },
    created() {

    },
};
</script>

<style scoped>
</style>

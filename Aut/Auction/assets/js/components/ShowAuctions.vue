<template>
<v-flex row>
    <v-flex md12>
        <v-flex md8 sm8 xl8>
            <slot name="links"></slot>
        </v-flex>
        <v-flex md4 sm4 xl4>
            <v-select v-model="global.auction_state" color="primary" item-value="value" item-text="text" :items="global.auction_state_list" @change="changeAuctionOrder()" :hint="translate('msg_select_auction_state')" :label="translate('auction_state')"></v-select>
        </v-flex>
    </v-flex>

    <v-layout md12 xl12 sm12 wrap row>
        <v-flex md12 xl12 sm12 >
            <v-card-title>
                <h1 class=" primary--text ">{{translate('auctions')}}</h1>
            </v-card-title>

            <v-flex>
                <v-layout wrap row>
                    <v-flex md6 sm6 xl6 row class="pa-2 " v-for="auction , index in auctions" :key="index">
                        <v-hover>
                            <v-card md12 slot-scope="{ hover }" :class="`elevation-${hover ? 10 : 2}`">
                                <v-img v-if="auction.file_id.length == 0 " src="https://cdn.vuetifyjs.com/images/cards/sunshine.jpg" height="300px" contain>
                                </v-img>
                                <v-carousel v-else style="max-height: 300px;">
                                    <v-carousel-item v-for="(item,i) in auction.files_path" :key="i" :src="item" style=""></v-carousel-item>
                                </v-carousel>
                                <v-card-title primary-title>
                                    <div>
                                        <h2 class="align-center d-flex flat  justify-center mb-2">{{auction.title}}</h2>
                                        <v-divider></v-divider>

                                        <v-layout wrap row>

                                            <v-flex md12 class="grey--text ma-2  ">
                                                <h4>
                                                    <i :class="{'far fa-2x fa-check-circle theme--light success--text':auction.just_values ,'far fa-2x fa-times-circle theme--light red--text':!auction.just_values,'ml-2':dir=='rtl','mr-2':dir=='ltr'  }"></i>
                                                    {{translate('just_values')}}
                                                </h4>
                                            </v-flex>
                                            <v-flex md12 class="grey--text ma-2  ">
                                                <h4>

                                                    <i :class="{'far fa-2x fa-check-circle theme--light success--text':auction.is_secrete ,'far fa-2x fa-times-circle theme--light red--text':!auction.is_secrete,'ml-2':dir=='rtl','mr-2':dir=='ltr' }"></i>
                                                    {{translate('is_secrete')}}
                                                </h4>

                                            </v-flex>

                                        </v-layout>
                                        <v-divider></v-divider>

                                        <h3 class="justify-center d-flex ma-2 mb-2">{{auction.remaining}}</h3>
                                    </div>
                                </v-card-title>

                                <v-card-actions class="blue-grey darken-4 elevation-5 justify-space-around ">
                                    <v-tooltip bottom>
                                        <template v-slot:activator="{ on }">
                                            <v-btn icon dark v-on="on" :loading="loading" :disabled="loading" @click="viewAuction(auction)">
                                                <v-icon icon dark>list</v-icon>
                                            </v-btn>
                                        </template>
                                        <span> {{translate('view_items_auction')}}</span>
                                    </v-tooltip>

                                    <v-tooltip bottom>
                                        <template v-slot:activator="{ on }">
                                            <v-btn icon dark v-on="on" :disabled="!auction.state=='will_open'" @click="editAuction(auction)">
                                                <v-icon>edit</v-icon>
                                            </v-btn>
                                        </template>
                                        <span>{{translate('edit')}}</span>
                                    </v-tooltip>
                                    <v-tooltip bottom>
                                        <template v-slot:activator="{ on }">
                                            <v-btn v-on="on" icon dark @click="deleteAuction(auction)">
                                                <v-icon>delete</v-icon>
                                            </v-btn>
                                        </template>
                                        <span>{{translate('delete')}}</span>
                                    </v-tooltip>
                                </v-card-actions>

                            </v-card>
                        </v-hover>

                    </v-flex>
                </v-layout>
            </v-flex>

        </v-flex>
    </v-layout>
</v-flex>
</template>

<script>
import Temp from "./class/Temp.js";
export default {
    name: 'show-auction',
    data: function () {
        return {
             locale: automata.language.locale,
            langs_info: automata.language.config.supportedLocales,
            dir:automata.language.config.supportedLocales[automata.language.locale].dir,
            global: {
                auction_state: null,
                auction_state_list: [{
                        value: 'closest',
                        text: this.translate('closest')
                    },
                    {
                        value: 'recent',
                        text: this.translate('recent')
                    },
                ],
            },
            auctions: [],
            struct:[],
            filters_field: new Temp(),
            loading: false,
            attributes: [],
            color: ['blue ', 'light-green ', 'red  ', 'teal ', 'indigo  ', 'purple  '],
            current_auction: [],
            field_trans: [],
        }
    },
    components: {
    },
    computed: {

    },
    created() {
        if (this.auctions.length == 0) {

            this.$http.get('api/auction/auction').then(response => {

                this.auctions = response.data;

            });
        }

    },
    methods: {
        changeAuctionOrder() {
            let state = this.global.auction_state;
            this.$http.get('api/auction/auction/order/' + this.state).then(response => {
                this.auctions = response.data;
            });

        },
        translate(key) {
            return this.$t(`auction.${key}`)
        },
        enterAuction(item) {
            this.$router.push({
                name: 'open_auction',
                params: {
                    auction: item
                }
            });
        },
        resultAuction(item) {
            console.log('result', item);
        },
        viewAuction(item) {
            console.log('view', item);
            this.$router.push({
                name: 'view_auction',
                params: {
                    auction: item
                }
            });
        },
        participation(auction) {
            this.$http.get('api/attribute/auction-participation').then(response => {
                if (response.data.state == 'success') {
                    this.$notification.success(response.data.msg);
                } else {
                    this.$notification.show(response.data.msg);
                }
            });
        },

        save() {
            // this.$refs.auctions.fetchDataSource();
        },

    }

}
</script>

<style scoped>

</style>

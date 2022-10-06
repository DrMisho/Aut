<template>
<v-layout wrap row class="" v-if="struct != '' " white>

    <!-- for hide the  id in state edit -->
    <v-layout row wrap>
       <v-flex    row md6 sm12 xl6 >
         <v-flex v-for=" (item , key) in struct" :key="key" v-if="struct[key].type_code == 'image'">
            <v-flex md12 >
                <v-flex v-if='struct[key].value.length > 0'>

                    <v-layout md12 sm12 xl12 xm12 v-if="struct[key].value.length==1 ">
                        <v-layout row class="mb-5">

                            <v-flex md12 sm12 xl12 xm12>

                                <image-preview :src="struct[key].value[0]">
                                    <template v-slot:activator="{ on }">

                                        <v-img v-on="on" :src="struct[key].value[0]" aspect-ratio="1.7"></v-img>

                                    </template>
                                </image-preview>
                            </v-flex>
                        </v-layout>
                    </v-layout>
                    <v-layout md12 sm12 xl12 xm12 v-else-if='struct[key].gallary==false'>
                        <v-carousel>
                            <image-preview :src="item" v-for="(item,i) in  struct[key].value" :key="i">
                                <template v-slot:activator="{ on }">

                                    <v-carousel-item v-on="on" :src="item"></v-carousel-item>

                                </template>
                            </image-preview>
                        </v-carousel>
                    </v-layout>
                    <v-layout md12 sm12 xl12 xm12 v-else>
                        <v-flex md4 sm4 xl4 xm4 v-for="imag ,index in struct[key].value" :key="index">

                            <image-preview :src="struct[key].value[index]">
                                <template v-slot:activator="{ on }">

                                    <v-img v-on="on" :src="struct[key].value[index]" aspect-ratio="1.7"></v-img>

                                </template>
                            </image-preview>
                        </v-flex>

                    </v-layout>

                </v-flex>

            </v-flex>
         </v-flex>
           
        </v-flex>
        <v-flex class="layout" wrap row md6 sm12 xl6>
            <v-flex v-for=" (item , key) in struct" :key="key" class=" md6 sm6  xm6 xl6 " :class="{'md12 sm12 xl12 xm12':struct[key].type_code == 'text_editor' || struct[key].type_code == 'start_group' || struct[key].type_code == 'end_group' || setStateImage(key) || struct[key].type_code == 'file'|| struct[key].type_code == 'colors'|| struct[key].type_code == 'values'|| struct[key].type_code == 'list_select' }">

                <v-card class="mb-2" md12 v-if="struct[key].type_code == 'text'">
                    <v-card-title primary-title>
                        <div>
                            <h4 class=" primary--text mb-0 pa-2">{{struct[key].name}} : {{struct[key].value ? struct[key].value : translate('msg_not_added') }}</h4>
                        </div>
                    </v-card-title>
                </v-card>
                <v-card class="mb-2" md12 v-else-if="struct[key].type_code == 'number'">
                    <v-card-title primary-title>
                        <div>
                            <h4 class=" primary--text mb-0 pa-2">{{struct[key].name}} : {{struct[key].value ? struct[key].value : translate('msg_not_added')  | money}}</h4>
                        </div>
                    </v-card-title>
                </v-card>
                <v-card class="mb-2" md12 v-else-if="struct[key].type_code == 'text_editor'">
                    <v-card-title primary-title>
                        <h4 class=" primary--text mb-0 pa-2">{{struct[key].name}} : </h4>
                        <div v-html='struct[key].value' class="overflow-hidden"></div>
                    </v-card-title>
                </v-card>
                </v-card>
                <v-card class="mb-2" md12 v-else-if="struct[key].type_code == 'email'">
                    <v-card-title primary-title>
                        <div>
                            <h4 class=" primary--text mb-0 pa-2">{{struct[key].name}} : {{struct[key].value ? struct[key].value : translate('msg_not_added') }}</h4>
                        </div>
                    </v-card-title>
                </v-card>
                </v-card>
                <v-card class="mb-2" md12 v-else-if="struct[key].type_code == 'date'">
                    <v-card-title primary-title>
                        <div>
                            <h4 class=" primary--text mb-0 pa-2">{{struct[key].name}} : {{struct[key].value ? struct[key].value : translate('msg_not_added') }}</h4>
                        </div>
                    </v-card-title>
                </v-card>
                </v-card>
                <v-card class="mb-2" md12 v-else-if="struct[key].type_code == 'time'">
                    <v-card-title primary-title>
                        <div>
                            <h4 class=" primary--text mb-0 pa-2">{{struct[key].name}} : {{struct[key].value ? struct[key].value : translate('msg_not_added') }}</h4>
                        </div>
                    </v-card-title>
                </v-card>
                <v-card class="mb-2" md12 v-else-if="struct[key].type_code == 'select'">
                    <v-card-title primary-title>
                        <div>
                            <h4 class=" primary--text mb-0 pa-2">{{struct[key].name}} : {{struct[key].value ? struct[key].value : translate('msg_not_added') }}</h4>
                        </div>
                    </v-card-title>
                </v-card>
                <v-card class="mb-2" md12 v-else-if="struct[key].type_code == 'autocomplate'">
                    <v-card-title primary-title>
                        <div>
                                <v-layout wrap row md12>
                                    <h4 class=" primary--text mb-0 pa-2 ">{{struct[key].name}} </h4>
                                     <v-flex v-for="val ,index in struct[key].value" :key="index" :tile="true" :size="40" class="primary white--text ma-2  pa-2 d-flex justify-center">
                                        {{val}}
                                     </v-flex>
                                </v-layout>
                             
                        </div>
                    </v-card-title>
                </v-card>
                </v-card>
                <v-card class="mb-2" md12 v-else-if="struct[key].type_code == 'number_range'">
                    <v-card-title primary-title>
                        <div>
                            <h4 class=" primary--text mb-0 pa-2">{{struct[key].name}} : {{translate('from') }}{{ struct[key].startValue}} {{translate('to') }} {{ struct[key].endValue}}</h4>
                        </div>
                    </v-card-title>
                </v-card>
                <v-card class="mb-2" md12 v-else-if="struct[key].type_code == 'data_range'">
                    <v-card-title primary-title>
                        <div>
                            <h4 class=" primary--text mb-0 pa-2">{{struct[key].name}} : {{translate('from') }}{{ struct[key].startValue}} {{translate('to') }} {{ struct[key].endValue}}</h4>
                        </div>
                    </v-card-title>
                </v-card>
                <v-card class="mb-2" md12 v-else-if="struct[key].type_code == 'date_time'">
                    <v-card-title primary-title>
                        <div>
                            <h4 class=" primary--text mb-0 pa-2">{{struct[key].name}}: {{ struct[key].startValue}} {{ struct[key].endValue}}</h4>
                        </div>
                    </v-card-title>
                </v-card>

                <v-card class="mb-2" md12 v-else-if="struct[key].type_code == 'color'">
                    <div primary-title>

                        <div>
                            <h4 class=" primary--text mb-0 pa-2">{{struct[key].name}} </h4>
                        </div>
                        <v-avatar :tile="false" :size="35" :color="struct[key].value">

                        </v-avatar>
                    </div>
                </v-card>
                <v-card class="mb-2" md12 v-else-if="struct[key].type_code == 'colors'">
                    <v-card-title primary-title>
                        <v-flex>
                            <v-flex>
                                <h4 class=" primary--text mb-0 pa-2 ">{{struct[key].name}} </h4>
                            </v-flex>

                            <v-layout wrap row md12>

                                <v-avatar v-for="color ,index in struct[key].value" :key="index" :tile="false" :size="40" :color="color">

                                </v-avatar>
                            </v-layout>

                        </v-flex>
                    </v-card-title>
                </v-card>
                <v-card class="mb-2" md12 v-else-if="struct[key].type_code == 'values'">
                    <v-card-title primary-title>
                        <v-flex>
                            <v-flex>
                                <h4 class=" primary--text mb-0 pa-2 ">{{struct[key].name}} </h4>
                            </v-flex>
                            <v-layout wrap row md12>
                                <v-flex v-for="val ,index in struct[key].value" :key="index" :tile="true" :size="40" class="primary white--text ma-2  pa-2 d-flex justify-center">
                                    {{val}}
                                </v-flex>

                            </v-layout>
                        </v-flex>
                    </v-card-title>
                </v-card>
                <v-card class="mb-2" md12 v-else-if="struct[key].type_code == 'list_select'">
                    <v-card-title primary-title>
                        <v-flex>
                            <h4 class=" primary--text mb-0 pa-2 ">{{struct[key].name}} </h4>
                        </v-flex>
                        <v-layout wrap row md12>
                            <v-flex v-for="val ,index in struct[key].value" :key="index" :tile="true" :size="40" class="primary white--text ma-2  pa-2 d-flex justify-center">
                                {{val}}
                            </v-flex>

                        </v-layout>
                    </v-card-title>
                </v-card>
                <v-card class="mb-2" md12 v-else-if="struct[key].type_code == 'switch'">
                    <v-card-title primary-title>
                        <div>
                            <h4 md12 class=" primary--text mb-0 pa-2">{{struct[key].name}} :<i class="green--text fa  fa-check-circle" v-if="struct[key].value==true"></i><i class="red--text fa-times-circle" v-else></i></h4>
                        </div>
                    </v-card-title>
                </v-card>

                <!-- state type image  -->
                <v-flex md12 v-else-if="struct[key].type_code == 'file'">

                    <v-flex v-if='struct[key].value'>

                        <v-layout md12 sm12 xl12 xm12>
                            <v-flex md12 sm12 xl12 xm12>
                                <h2>{{struct[key].name}} : <a :href="struct[key].value"> {{translate('click_to_view')}}<i class="fa  fa-eye green--text"></i></a></h2>
                            </v-flex>
                        </v-layout>

                    </v-flex>

                </v-flex>

                <!-- state type group  -->
                <v-flex md12 class='mb-3 primary ' v-else-if="struct[key].type_code == 'end_group'">

                    <v-divider></v-divider>

                </v-flex>
                <v-flex md12 v-else-if="struct[key].type_code == 'start_group'">

                    <v-layout wrap row md12>
                        <v-flex md4 sm4 xl4 xm4>
                            <v-divider class="primary"></v-divider>
                        </v-flex>
                        <v-flex md4 sm4 text-capitalize xl4 xm4 class="primary--text">
                            <p class="d-flex justify-center">{{struct[key].name}}</p>
                        </v-flex>
                        <v-flex md4 sm4 xl4 xm4>
                            <v-divider class="primary"></v-divider>
                        </v-flex>
                    </v-layout>

                </v-flex>
            </v-flex>
        </v-flex>
       
    </v-layout>

</v-layout>
</template>

<script>
export default {
    name: 'view-car',
    props: ['auctionable_id', 'auctionable_type'],
    data: function () {
        return {
          
            product: '',
            struct: '',
            model_id: this.auctionable_id,
            model_name: this.auctionable_type
        };
    

    },
   
    methods: {
        translate(key) {
            return this.$t(`attributes.${key}`)
        },
        setStateImage(key) {
            if (this.struct[key].type_code == 'image') {
                // if( this.struct[key].value.length==1  && this.imag_position == 0)
                return true;
            } else
                return false;

        },

    },
    created() {
        console.log('auction', this.auction);

        this.$http.get('api/attribute/products/' + this.model_id + '?auctionable_type=' + this.model_name).then(response => {

            this.product = response.data.product;
            this.struct = response.data.attrs;

        });
    }

}
</script>

<style scoped>

</style>

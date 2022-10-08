<template>
<v-flex  class="">

    <v-flex md12 v-if="feature.type_code == 'text_with_lang'&&feature.value_trans != null">
        <v-hover>
            <v-layout wrap row class=" ma-2 pa-2" slot-scope="{ hover }" :class="`elevation-${hover ? 1 : ''}`">
                <v-flex>{{feature.name}}</v-flex>
                <v-spacer></v-spacer>
                <v-flex>{{feature.value_trans}}</v-flex>
            </v-layout>
        </v-hover>

        <v-divider ></v-divider>
    </v-flex>
    <!-- state type number-->
    <v-flex md12 v-else-if="feature.type_code == 'number'&&feature.value != null">
        <v-hover>
            <v-layout wrap row class=" ma-2 pa-2" slot-scope="{ hover }" :class="`elevation-${hover ? 1 : ''}`">
                <v-flex>{{feature.name}}</v-flex>
                <v-spacer></v-spacer>
                <v-flex>{{feature.value}}<span v-if="feature.unit_id">({{feature.unit_name}})</span></v-flex>
            </v-layout>
        </v-hover>

        <v-divider ></v-divider>
    </v-flex>
    <!-- text normal -->
    <v-flex md12 v-else-if="feature.type_code == 'text'&&feature.value != null">
        <v-hover>

            <v-layout wrap row class=" ma-2 pa-2" slot-scope="{ hover }" :class="`elevation-${hover ? 1 : ''}`">
                <v-flex>{{feature.name}}</v-flex>
                <v-spacer></v-spacer>
                <v-flex>{{feature.value}}</v-flex>
            </v-layout>
        </v-hover>

        <v-divider ></v-divider>
    </v-flex>
    <!-- tel -->
    <v-flex md12 v-else-if="feature.type_code == 'tel'&&feature.value != null">
        <v-hover>
            <v-layout wrap row class=" ma-2 pa-2" slot-scope="{ hover }" :class="`elevation-${hover ? 1 : ''}`">
                <v-flex>{{feature.name}}</v-flex>
                <v-spacer></v-spacer>
                <v-flex>{{feature.value }}</v-flex>
            </v-layout>
        </v-hover>

        <v-divider ></v-divider>
    </v-flex>
    <!-- url -->
    <v-flex md12 v-else-if="feature.type_code == 'url'&&feature.value != null">
        <v-hover>
            <v-layout wrap row class=" ma-2 pa-2" slot-scope="{ hover }" :class="`elevation-${hover ? 1 : ''}`">
                <v-flex>{{feature.name}}</v-flex>
                <v-spacer></v-spacer>
                <v-flex><a :href="feature.value">link</a></v-flex>
            </v-layout>
        </v-hover>

        <v-divider ></v-divider>
    </v-flex>
    <!-- state type number rangg-->
    <v-flex md12 v-else-if="feature.type_code == 'number_range'&&feature.number_start != null">
            <v-hover>
                <v-layout wrap row class=" ma-2 pa-2" slot-scope="{ hover }" :class="`elevation-${hover ? 1 : ''}`">
                    <v-flex>{{feature.name}}</v-flex>
                    <v-spacer></v-spacer>
                    <v-flex>{{feature.number_start}}</v-flex>
                    <v-spacer></v-spacer>
                    <v-flex>{{feature.number_end}}</v-flex>
                </v-layout>
            </v-hover>

        <v-divider ></v-divider>
    </v-flex>
    <!-- state type date -->
    <v-flex md12 v-else-if="feature.type_code == 'date'&&feature.value != null " class="DataTime">
        <v-hover>
            <v-layout wrap row class=" ma-2 pa-2" slot-scope="{ hover }" :class="`elevation-${hover ? 1 : ''}`">
                <v-flex>{{feature.name}}</v-flex>
                <v-spacer></v-spacer>
                <v-flex>{{feature.value}}</v-flex>
            </v-layout>
        </v-hover>

        <v-divider ></v-divider>
    </v-flex>
    <!-- state type date range -->
    <v-flex md12 row wrap md12 v-else-if="feature.type_code == 'data_range'&&feature.date_start != null " class="DataTime">
        <v-hover>
            <v-layout wrap row class=" ma-2 pa-2" slot-scope="{ hover }" :class="`elevation-${hover ? 1 : ''}`">
                <v-flex>{{feature.name}}</v-flex>
                <v-spacer></v-spacer>
                <v-flex>{{feature.date_start}}</v-flex>
                <v-spacer></v-spacer>
                <v-flex>{{feature.date_end}}</v-flex>
            </v-layout>
        </v-hover>

        <v-divider ></v-divider>
    </v-flex>
    <!-- state type date_time -->
    <v-layout md12 wrap row v-else-if="feature.type_code == 'date_time'&&feature.value != null " class="DataTime">
        <v-hover>
            <v-layout wrap row class=" ma-2 pa-2" slot-scope="{ hover }" :class="`elevation-${hover ? 1 : ''}`">
                <v-flex>{{feature.name}}</v-flex>
                <v-spacer></v-spacer>
                <v-flex>{{feature.value}}</v-flex>
            </v-layout>
        </v-hover>

        <v-divider ></v-divider>
    </v-layout>
    <!-- state type time  -->
    <v-flex md12 v-else-if="feature.type_code == 'time'&&feature.value != null ">
        <v-hover>
            <v-layout wrap row class=" ma-2 pa-2" slot-scope="{ hover }" :class="`elevation-${hover ? 1 : ''}`">
                <v-flex>{{feature.name}}</v-flex>
                <v-spacer></v-spacer>
                <v-flex>{{feature.value}}</v-flex>
            </v-layout>
        </v-hover>

        <v-divider ></v-divider>

    </v-flex>
    <!-- state type email  -->
    <v-flex md12 v-else-if="feature.type_code == 'email'&&feature.value != null">
        <v-hover>
            <v-layout wrap row class=" ma-2 pa-2" slot-scope="{ hover }" :class="`elevation-${hover ? 1 : ''}`">
                <v-flex>{{feature.name}}</v-flex>
                <v-spacer></v-spacer>
                <v-flex>{{feature.value}}</v-flex>
            </v-layout>
        </v-hover>

        <v-divider ></v-divider>
    </v-flex>
    <v-flex md12 v-else-if="feature.type_code == 'location'&&feature.value != null">
        <v-hover>
            <v-flex wrap row class=" ma-2 pa-2" slot-scope="{ hover }" :class="`elevation-${hover ? 1 : ''}`">
                <v-flex>{{feature.name}}</v-flex>
                <v-spacer></v-spacer>
                <geolocation-preview  :center="{lat: '45', lng: '45'}" :size="['100%', '400px']" :zoom="8" :geolocation="feature.value" ></geolocation-preview>
            </v-flex>
        </v-hover>

        <v-divider ></v-divider>
    </v-flex>
    <!-- state type color  -->
    <v-flex md12 v-else-if="feature.type_code == 'color'&&feature.value != null">
        <v-hover>
            <v-layout wrap row class=" ma-2 pa-2" slot-scope="{ hover }" :class="`elevation-${hover ? 1 : ''}`">
                <v-flex>{{feature.name}}</v-flex>
                <v-spacer></v-spacer>
                       
                        <v-chip style="width: 40px; height: 40px;" :color="feature.value" ></v-chip>

            </v-layout>
        </v-hover>

        <v-divider ></v-divider>
    </v-flex>
    <!-- state type switch  -->
    <v-flex md12 v-else-if="feature.type_code == 'switch'&&feature.value != null&&feature.value">
        <v-hover>
            <v-layout wrap row class=" ma-2 pa-2" slot-scope="{ hover }" :class="`elevation-${hover ? 1 : ''}`">
                <v-flex>{{feature.name}}</v-flex>
            </v-layout>
        </v-hover>

        <v-divider ></v-divider>
    </v-flex>
    <!-- state type image  -->
    <v-flex md12 v-else-if="feature.type_code == 'image'&&feature.value != null">
        <v-hover>
            <v-layout wrap row class=" ma-2 pa-2" slot-scope="{ hover }" :class="`elevation-${hover ? 1 : ''}`">
                <v-flex>{{feature.name}}</v-flex>
                <v-spacer></v-spacer>
                <v-layout row warp>
                    <v-flex md4 sm4 xl4 v-for="image ,key in feature.value" :key=key>
                        <image-preview :src="image" width="500">
                            <template v-slot:activator="{ on }">

                                <v-img v-on="on" :src="image" aspect-ratio="1.7" contain></v-img>

                            </template>
                        </image-preview>
                        </v-img>
                    </v-flex>
                </v-layout>
            </v-layout>
        </v-hover>

        <v-divider ></v-divider>
    </v-flex>
    <!-- state type image  -->
    <v-flex md12 v-else-if="feature.type_code == 'file'&&feature.value != null">
        <v-hover>
            <v-layout wrap row class=" ma-2 pa-2" slot-scope="{ hover }" :class="`elevation-${hover ? 1 : ''}`">
                <v-flex>{{feature.name}}</v-flex>
                <v-spacer></v-spacer>
                <v-layout row warp>
                    <v-flex md4 sm4 xl4 v-for="value ,key in feature.value" :key=key>

                        <a :href="value">Link</a>

                    </v-flex>
                </v-layout>
            </v-layout>
        </v-hover>
        <v-divider ></v-divider>
    </v-flex>
    <!-- state type text_editor  -->
    <v-flex md12 v-else-if="feature.type_code == 'text_editor'&&feature.value_trans != null">
        <v-hover>
            <v-flex wrap row class=" ma-2 pa-2" slot-scope="{ hover }" :class="`elevation-${hover ? 1 : ''}`">
                <v-flex>{{feature.name}}</v-flex>
                <v-divider></v-divider>
                <v-flex pa-2 v-html="feature.value_trans"></v-flex>
            </v-flex>
        </v-hover>
        <v-divider ></v-divider>
    </v-flex>
    <!-- state type select  -->
    <v-flex md12 v-else-if="feature.type_code == 'select'&&feature.value != null">
        <v-hover>
            <v-layout wrap row class=" ma-2 pa-2" slot-scope="{ hover }" :class="`elevation-${hover ? 1 : ''}`">
                <v-flex>{{feature.name}}</v-flex>
                <v-spacer></v-spacer>
                <v-flex>{{feature.value}}</v-flex>
            </v-layout>
        </v-hover>
        <v-divider ></v-divider>
    </v-flex>
    <v-flex md12 v-else-if="feature.type_code == 'autocomplate'&&feature.value != null">
        <v-hover>
            <v-layout wrap row class=" ma-2 pa-2" slot-scope="{ hover }" :class="`elevation-${hover ? 1 : ''}`">
                <v-flex>{{feature.name}}</v-flex>
                <v-spacer></v-spacer>
                <v-flex>{{feature.value}}</v-flex>
            </v-layout>
        </v-hover>
        <v-divider ></v-divider>
    </v-flex>
    <v-flex md12 v-else-if="feature.type_code == 'values'&&feature.value != null">
        <v-hover>
            <v-layout wrap row class=" ma-2 pa-2" slot-scope="{ hover }" :class="`elevation-${hover ? 1 : ''}`">
                <v-flex>{{feature.name}}</v-flex>
                <v-spacer></v-spacer>
                <v-layout row warp>
                    <v-flex md4 sm4 xl4 v-for="value , key in feature.value_trans" :key="key">{{value}}</v-flex>
                </v-layout>

            </v-layout>
        </v-hover>
        <v-divider ></v-divider>
    </v-flex>
    <v-flex md12 v-else-if="feature.type_code == 'list_select'&&feature.value != null">
        <v-hover>
            <v-layout wrap row class=" ma-2 pa-2" slot-scope="{ hover }" :class="`elevation-${hover ? 1 : ''}`">
                <v-flex>{{feature.name}}</v-flex>
                <v-spacer></v-spacer>
                <v-layout row warp>
                    <v-flex md4 sm4 xl4 v-for="value , key in feature.value" :key="key">{{value}}</v-flex>
                </v-layout>
            </v-layout>
        </v-hover>
        <v-divider ></v-divider>
    </v-flex>
    <v-flex md12 v-else-if="feature.type_code == 'colors'&&feature.value != null">
        <v-hover>
            <v-layout wrap row class=" ma-2 pa-2" slot-scope="{ hover }" :class="`elevation-${hover ? 1 : ''}`">
                <v-flex>{{feature.name}}</v-flex>
                <v-spacer></v-spacer>
                <v-layout row warp>
                    <v-flex md4 sm4 xl4 v-for="color , key in feature.value" :key="key">
                        
                        <v-chip style="width: 40px; height: 40px;" :color="color" ></v-chip>
                    </v-flex>
                </v-layout>

            </v-layout>
        </v-hover>
        <v-divider ></v-divider>
    </v-flex>

</v-flex>
</template>

<script>
export default {

    name: 'feature-view',
    props: ['feature'],
    data: function () {
        return {
            locales: [],
            langs_info: automata.language.config.supportedLocales,
        }
    },
    components: {

    },
    methods: {
        getLocales() {
            let array = [];
            for (let index in automata.language.config.supportedLocales)
                array.push(index);

            this.locales = array;

        },
        translate(key) {
            return this.$t(`attributes.${key}`)
        },

    },
    created() {
        this.getLocales();
    }

}
</script>

<style scoped>

</style>

<template>
<draggable class="   pa-3 pb-3  " :list="tasks" style=" overflow-y: scroll;" :style="'max-height:'+ max_height+';'" :group="{ name: name_group }">
    <v-flex v-for="el , i in tasks" :key="i">
        <v-card class=" white--text mb-2">
            <v-layout wrap row class=" blue " :class="{'warning mb-3':!el.tasks}">
                <v-list-tile class="  " :class="{' d-flex align-center   justify-center warning mb-3':!el.tasks}+'  force-'+langs_info[locale].dir">{{ el.name }}</v-list-tile>
                <v-flex :class="{'force-ltr':langs_info[locale].dir=='rtl','force-rtl':langs_info[locale].dir=='ltr'}" v-if="el.tasks" >
                    <v-btn class="white--text"   icon @click="show=!show;">
                        <v-icon>{{ show ?   'remove' :'add'}}</v-icon>
                    </v-btn>
                </v-flex>
            </v-layout>

            <v-slide-y-transition>

                <v-flex class="pa-3 pb-3   elevation-5" v-show="show" v-if="el.tasks">

                    <v-flex v-if="el.tasks.length ==0" class=" black--text">{{translate('drag_element_to_add')}}</v-flex>
                    <nested-group-draggable :tasks="el.tasks" :name_group='"g1"' />

                </v-flex>
            </v-slide-y-transition>

        </v-card>
    </v-flex>

</draggable>
</template>

<script>
import draggable from "vuedraggable";
export default {
    name: "nested-group-draggable",
    props: {
        tasks: {
            required: false,
        },
        name_group: {
            required: false,

        },
         max_height: {
            required: false,

        }
    },

    methods: {
        translate(key) {
            return this.$t(`attributes.${key}`)
        },

    },
    data: function () {
        return {
            show: false,
            locale: automata.language.locale,
            langs_info: automata.language.config.supportedLocales,
        }
    },
    watch: {

    },
    created() {

    },
    computed: {},
    components: {
        draggable,
    },

};
</script>

<style scoped>
.dragArea {
    min-height: 50px;
    outline: 1px dashed;
}
</style>

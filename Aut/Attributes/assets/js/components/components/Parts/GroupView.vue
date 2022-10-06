<template>
<v-flex>
    <!-- start group -->

    <group-start :name="group.name" v-model="show" :color='color'></group-start>

    <v-slide-y-transition>
        <!-- group content -->
        <v-flex v-show="show">
            <v-flex  v-for="element , key in group.tasks" :key="key"  :class="{'pl-4':langs_info[locale].dir == 'rtl' ,'pr-4':langs_info[locale].dir == 'ltr'}">
                <feature-view v-if="element.feature_id" :feature="element.feature"></feature-view>
                <group-view v-else :group="element"></group-view>
            </v-flex>
            <group-end></group-end>

        </v-flex>
        <!-- end group -->

    </v-slide-y-transition>

</v-flex>
</template>

<script>
import FeatureView from './FeatureView.vue';
import GroupStart from './GroupStart.vue';
import GroupEnd from './GroupEnd.vue';
export default {
    name: 'group-view',
     props: {
            group: {
                required: true,
            },
            l_show: {
                type: Boolean,
                default: false,
            },
            color:{
                required:false,
                default:'green lighten-4'
            }
        },
    components: {
        FeatureView,
        GroupStart,
        GroupEnd
    },
    data: function () {
        return {
            show: this.l_show,

            locale: automata.language.locale,
            langs_info: automata.language.config.supportedLocales,

        }
    }

}
</script>

<style scoped>

</style>

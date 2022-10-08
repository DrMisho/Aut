<template>
<v-flex>
    <!-- start group -->

    <group-start :name="group.name" v-model="show"></group-start>

    <v-slide-y-transition>
        <!-- group content -->
        <v-flex v-show="show">
            <v-flex  v-for="element , key in group.tasks" :key="key" :class="{'pl-4':langs_info[locale].dir == 'rtl' ,'pr-4':langs_info[locale].dir == 'ltr'}">
                <feature-search v-if="element.feature_id" :feature="element.feature" :id='element.id'></feature-search>
                <group-search v-else :group="element"></group-search>
            </v-flex>
            <group-end></group-end>

        </v-flex>
        <!-- end group -->

    </v-slide-y-transition>

</v-flex>
</template>

<script>
import FeatureSearch from './FeatureSearch.vue';
import GroupStart from './GroupStart.vue';
import GroupEnd from './GroupEnd.vue';
export default {
    name: 'group-search',
    props: ['group'],
    components: {
        FeatureSearch,
        GroupStart,
        GroupEnd
    },
    data: function () {
        return {
            show: false,
            locale: automata.language.locale,
            langs_info: automata.language.config.supportedLocales,

        }
    }

}
</script>

<style scoped>

</style>

<template>
    <div>
        <v-subheader class="mt-3 grey--text text--darken-1">{{ nav.title }}</v-subheader>
        <template v-for="item in nav.items">
            <navigation-link v-if="item.type === 'link'" :nav="item" />
            <navigation-dropdown v-else-if="item.type === 'dropdown'" :nav="item" />
            <navigation-model v-else-if="item.type === 'model'" :items="item" />
<!--            <navigation-partial v-else-if="item.type === 'partial'" :items="item" />-->
        </template>
    </div>
</template>

<script>
    import NavigationLink from './NavigationLink';
    import NavigationDropdown from './NavigationDropdown';
    import NavigationModel from './NavigationModel';
    // import NavigationPartial from "./NavigationPartial";

    export default {
        name: "NavigationPanel",
        components: {NavigationLink, NavigationDropdown, NavigationModel/*, NavigationPartial*/},
        props: {
            nav: {
                type: Object,
                require: true,
            }
        },
    }
</script>

<style scoped>

</style>
<template>
    <div>
        <template v-for="nav in items.items">
            <navigation-panel v-if="nav.type === 'panel'" :nav="nav" />
            <navigation-link v-if="nav.type === 'link'" :nav="nav" />
            <navigation-dropdown v-if="nav.type === 'dropdown'" :nav="nav" />
            <navigation-model v-if="nav.type === 'model'" :items="nav" />
<!--            <navigation-partial v-if="nav.type === 'partial'" :items="nav" />-->
        </template>
    </div>
</template>

<script>
    import NavigationDropdown from './NavigationDropdown';
    import NavigationLink from './NavigationLink';
    import NavigationPanel from './NavigationPanel';
    import NavigationModel from './NavigationModel';
    // import NavigationPartial from "./NavigationPartial";

    export default {
        name: "NavigationPermission",
        components: {/*NavigationPartial, */NavigationDropdown, NavigationLink, NavigationPanel, NavigationModel},
        props: {
            items: {
                type: Object,
                require: true,
            }
        }
    }
</script>

<style scoped>

</style>
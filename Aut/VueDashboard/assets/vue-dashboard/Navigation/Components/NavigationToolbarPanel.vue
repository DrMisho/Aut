<template>
    <div>
        <v-list-tile>
            <v-list-tile-sub-title>{{ nav.title }}</v-list-tile-sub-title>
        </v-list-tile>
        <template v-for="item in nav.items">
            <navigation-link v-if="item.type === 'link'" :nav="item" />
            <navigation-toolbar-partial v-if="item.type === 'partial'" :items="item" />
        </template>
    </div>
</template>

<script>
    import NavigationLink from './NavigationLink';
    import NavigationToolbarPartial from "./NavigationToolbarPartial";

    export default {
        name: "NavigationToolbarPanel",
        components: {NavigationToolbarPartial, NavigationLink},
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
<template>
    <v-list-group v-model="nav.model" :append-icon="appendIcon" :prepend-icon="nav.icon" :id="nav.id">
        <v-list-tile slot="activator">
            <v-list-tile-content>
                <v-list-tile-title>
                    {{ nav.title }}
                </v-list-tile-title>
            </v-list-tile-content>
        </v-list-tile>
        <template v-for="item in nav.items">
            <navigation-link v-if="item.type === 'link'" :nav="item"></navigation-link>
            <navigation-model v-if="item.type === 'model'" :items="item"></navigation-model>
<!--            <navigation-partial v-if="item.type === 'partial'" :items="item"></navigation-partial>-->
        </template>
    </v-list-group>
</template>

<script>
    import NavigationLink from './NavigationLink';
    import NavigationModel from './NavigationModel';
    // import NavigationPartial from "./NavigationPartial";

    export default {
        name: "NavigationDropdown",
        components: {/*NavigationPartial, */NavigationLink, NavigationModel},
        props: {
            nav: {
                type: Object,
                require: true,
            }
        },
        computed:{
            appendIcon() {
                // return this.nav.model ? this.nav.openedIcon : this.nav.closedIcon;
                return this.nav.closedIcon;
            }
        }
    }
</script>

<style scoped>

</style>
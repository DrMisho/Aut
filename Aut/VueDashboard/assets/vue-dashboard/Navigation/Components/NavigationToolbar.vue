<template>
    <v-menu offset-y :left="!right" :right="right">
        <template #activator="{ on: menu }">
            <v-tooltip v-if="nav.tooltip" bottom>
                <template #activator="{ on: tooltip }">
                    <v-btn icon v-on="{...tooltip, ...menu}">
                        <v-icon>{{ nav.icon }}</v-icon>
                    </v-btn>
                </template>
                <span>{{ nav.tooltip }}</span>
            </v-tooltip>

            <v-btn v-else icon v-on="menu">
                <v-icon>{{ nav.icon }}</v-icon>
            </v-btn>
        </template>
        <v-list dense>
            <template v-for="item in nav.items">
                <navigation-toolbar-panel v-if="item.type === 'panel'" :nav="item"/>
                <navigation-link v-if="item.type === 'link'" :nav="item" />
                <navigation-toolbar-partial v-if="item.type === 'partial'" :items="item" />
            </template>
        </v-list>
    </v-menu>
</template>

<script>
    import NavigationLink from './NavigationLink';
    import NavigationToolbarPanel from './NavigationToolbarPanel';
    import NavigationToolbarPartial from './NavigationToolbarPartial';

    export default {
        name: "NavigationToolbar",
        components: {NavigationLink, NavigationToolbarPanel, NavigationToolbarPartial},
        props: {
            nav: {
                type: Object,
            }
        },
        data() {
            return {
                right: automata.isRtl,
            }
        },
    }
</script>

<style scoped>

</style>

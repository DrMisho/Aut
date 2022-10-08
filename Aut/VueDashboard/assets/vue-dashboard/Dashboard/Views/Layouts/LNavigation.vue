<template>
    <v-navigation-drawer
            width="270"
            :mini-variant.sync="minimize"
            v-model="drawer"
            fixed
            :clipped="$vuetify.breakpoint.mdAndUp"
            app
            :right="right"
            class="elevation-4"
    >
        <v-toolbar flat class="transparent">
            <v-list class="pa-0">
                <v-list-tile avatar>
                    <v-list-tile-avatar color="elevation-2">
                        <img alt="User Avatar" :src="userAvatar">
                    </v-list-tile-avatar>
                    <v-list-tile-content>
                        <v-list-tile-title>{{ username }}</v-list-tile-title>
                    </v-list-tile-content>
                </v-list-tile>
            </v-list>
        </v-toolbar>
        <v-list v-if="!error" class="pt-0" dense>
            <v-divider></v-divider>
            <template v-for="nav in navigation">
                <navigation-panel v-if="nav.type === 'panel'" :nav="nav" />
                <navigation-link v-if="nav.type === 'link'" :nav="nav" />
                <navigation-dropdown v-if="nav.type === 'dropdown'" :nav="nav" />
                <navigation-permission v-if="nav.type === 'permission'" :items="nav" />
                <navigation-model v-if="nav.type === 'model'" :items="nav" />
<!--                <navigation-partial v-if="nav.type === 'partial'" :items="nav" />-->
            </template>
        </v-list>
        <v-layout v-if="error" align-center justify-center row fill-height>
            <v-flex shrink v-if="loading" >
                <v-progress-circular :indeterminate="loading" color="secondary"/>
            </v-flex>
            <v-flex v-if="!loading" shrink @click="reFetch" class="hand">
                <v-img :aspect-ratio="1" contain :src="'images/empty-states/navigation-error-state.svg'" />
                <v-subheader class="text-xs-center secondary--text" small>{{ 'Oops! Something went wrong, Press to try again' }}</v-subheader>
            </v-flex>
        </v-layout>
        <v-toolbar flat class="transparent">
            <v-list class="pa-0">
                <v-list-tile>
                    <v-list-tile-content>
                        <v-list-tile-title></v-list-tile-title>
                    </v-list-tile-content>
                </v-list-tile>
            </v-list>
        </v-toolbar>
    </v-navigation-drawer>
</template>

<script>
    import NavigationPermission from '../../../Navigation/Components/NavigationPermission';
    import NavigationDropdown from '../../../Navigation/Components/NavigationDropdown';
    import NavigationLink from '../../../Navigation/Components/NavigationLink';
    import NavigationPanel from '../../../Navigation/Components/NavigationPanel';
    import NavigationModel from '../../../Navigation/Components/NavigationModel';
    // import NavigationPartial from '../../../Navigation/Components/NavigationPartial';

    export default {
        name: "LNavigation",
        components: {NavigationPermission, NavigationDropdown, NavigationLink, NavigationPanel, NavigationModel/*, NavigationPartial*/},
        props: {
            value: {
                type: Boolean,
                default: true,
            },
            navigation: {
                type: Array,
                default: [],
            }
        },
        watch:{
            drawer() {
                this.$emit('input', this.drawer);
            },
            value(newval) {
                this.drawer = newval;
            },
        },
        data() {
            return {
                drawer: this.value,
                minimize: false,
                right: automata.isRtl,
            }
        },
        computed: {
            userAvatar() {
                return this.$store.getters['auth/avatar'];
            },
            username() {
                return this.$store.getters['auth/name'];
            },
            error() {
                return this.$navigation.error();
            },
            loading() {
                return this.$navigation.loading();
            },
        },
        methods: {
            reFetch() {
                this.$navigation.reFetch()
            }
        }
    }
</script>

<style>

</style>

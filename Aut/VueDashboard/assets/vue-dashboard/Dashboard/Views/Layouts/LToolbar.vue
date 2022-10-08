<template>
    <v-toolbar
        color="primary darken-3 fluid-extension"
        dark
        fixed
        app
        :clipped-right="right"
        :clipped-left="!right"
        extension-height="7"
    >
        <v-toolbar-side-icon @click.stop="toggleToolbar">
            <v-icon>fas fa-bars</v-icon>
        </v-toolbar-side-icon>
        <v-toolbar-title style="width: 180px" class="ml-0 pl-0">
            <span class="hidden-sm-and-down">{{ appName }}</span>
        </v-toolbar-title>
        <site-search />

        <v-spacer></v-spacer>

        <v-form method="post" :action="logoutUrl" @submit="logout">
            <csrf-token/>
            <v-tooltip bottom>
                <template v-slot:activator="{ on }">
                    <v-btn v-on="on" type="submit" icon :loading="loading">
                        <v-icon>fas fa-power-off</v-icon>
                    </v-btn>
                </template>
                <span>{{ 'Logout' }}</span>
            </v-tooltip>
        </v-form>
        <template v-for="nav in navigation">
            <navigation-toolbar v-if="nav.type === 'toolbar'" :nav="nav"/>
        </template>
        <notification-menu />
        <template v-slot:extension>
            <ToolbarProgress />
        </template>
    </v-toolbar>
</template>

<script>
import CsrfToken from '../../../Components/CsrfToken';
import ToolbarProgress from '../../../Components/ToolbarProgress';
import SiteSearch from '../../../Components/SiteSearch';
import NavigationToolbar from '../../../Navigation/Components/NavigationToolbar';
import NotificationMenu from "../../../Components/NotificationMenu";

export default {
    name: "LToolbar",
    components: {NotificationMenu, CsrfToken, SiteSearch, ToolbarProgress, NavigationToolbar},
    props: {
        navigation: {
            type: Array,
            default: [],
        }
    },
    data() {
        return {
            loading: false,
            right: automata.isRtl,
            logoutUrl: `${automata.url.baseFullUrl}/logout`,
        }
    },
    computed: {
        appName() {
            if (this.$automata.config.app_name.includes('.')) {
                return this.$t(this.$automata.config.app_name);
            }
            return this.$automata.config.app_name;
        }
    },
    methods: {
        toggleToolbar() {
            this.$emit('toggleToolbar');
        },
        logout() {
            this.loading = true;
        }
    }
}
</script>

<style scoped>

</style>

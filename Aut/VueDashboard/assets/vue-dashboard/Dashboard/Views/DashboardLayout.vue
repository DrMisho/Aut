<template>
    <div>
        <l-nav-tool></l-nav-tool>
        <v-content>
            <v-container class="pt-1 pb-1">
                <v-layout align-center justify-space-between row>
                    <v-flex shrink>
                        <l-breadcrumbs :route="$route"></l-breadcrumbs>
                    </v-flex>
                    <v-flex shrink>
                        <languages-menu></languages-menu>
                    </v-flex>
                </v-layout>
            </v-container>
            <v-divider></v-divider>
            <v-container fluid fill-height>
                <v-layout>
                    <v-fade-transition leave-absolute>
                        <router-view></router-view>
                    </v-fade-transition>
                </v-layout>
            </v-container>
        </v-content>
    </div>
</template>

<script>
    import LNavTool from '../../Dashboard/Views/Layouts/LNavTool';
    import LBreadcrumbs from '../../Dashboard/Views/Layouts/LBreadcrumbs';
    import LanguagesMenu from '../../Langs/Components/LanguagesMenu';

    export default {
        name: "DashboardLayout",
        components: {LNavTool, LBreadcrumbs, LanguagesMenu},
        data() {
            return {};
        },
        mounted() {
            this.$store.dispatch('auth/fetchUser');
        }
    }
</script>

<style scoped>

</style>

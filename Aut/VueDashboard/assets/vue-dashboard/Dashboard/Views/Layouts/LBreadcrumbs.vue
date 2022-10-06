<template>
    <v-breadcrumbs :items="items">
        <template slot="item" slot-scope="props">
            <a :to="props.item.href">{{ props.item.text }}</a>
        </template>
    </v-breadcrumbs>
</template>

<script>
    export default {
        name: "LBreadcrumbs",
        props: {
            route: {
                type: Object,
                required: true,
            }
        },
        data() {
            return {
                items: []
            };
        },
        watch:{
            route: {
                immediate: true,
                handler(){
                    this.initBreadcrumbs();
                }
            }
        },
        methods:{
            hasTrans(key) {
                return `navigation.breadcrumbs.${key}` !== this.$t(`navigation.breadcrumbs.${key}`);
            },
            trans(key) {
                if (this.hasTrans(key)) {
                    return this.$t(`navigation.breadcrumbs.${key}`);
                }

                return this.$t(`navigation.${key}`);
            },
            initBreadcrumbs() {
                let $route = this.route;
                let routeName = $route.name;
                let matchedRoutes = $route.matched;
                let matchedRoute = '';
                for (let i in matchedRoutes) {
                    if (matchedRoutes[i].name === routeName) {
                        matchedRoute = matchedRoutes[i];
                        break;
                    }
                }
                this.items = [];
                while (matchedRoute) {
                    if (matchedRoute.meta.breadcrumbs !== false) {
                        this.items.push({
                            text: this.trans(matchedRoute.meta.breadcrumbs),
                            disabled: false,
                            href: matchedRoute.name ? {name: matchedRoute.name} : matchedRoute.path,
                        });
                    }
                    matchedRoute = matchedRoute.parent;
                }
                this.items.reverse();
            }
        },
    }
</script>

<style scoped>

</style>
<template>
    <v-list-tile :to="nav.to" :exact="nav.exact" :id="nav.id">
        <v-list-tile-action>
            <v-icon v-if="isCustom" v-html="custom"></v-icon>
            <v-icon v-else>{{ nav.icon }}</v-icon>
        </v-list-tile-action>
        <v-list-tile-content>
            <v-list-tile-title>{{ nav.title }}</v-list-tile-title>
        </v-list-tile-content>
    </v-list-tile>
</template>

<script>
    export default {
        name: "NavigationLink",
        props: {
            nav: {
                type: Object,
                require: true,
            }
        },
        computed: {
            isCustom() {
                return this.nav.icon && !!this.nav.icon.match('^custom-');
            },
            custom() {
                return `$vuetify.icons.${this.nav.icon.replace('custom-', '')}`;
            }
        }
    }
</script>

<style scoped>

</style>
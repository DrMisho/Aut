<template>
    <div>
        <l-navigation v-model="drawer" :navigation="navigation"></l-navigation>
        <l-toolbar @toggleToolbar="toggle" :navigation="navigation"></l-toolbar>
    </div>
</template>

<script>
    import LNavigation from './LNavigation';
    import LToolbar from './LToolbar';
    export default {
        name: "LNavTool",
        components: {LNavigation, LToolbar},
        data() {
            return {
                drawer: null,
                navigation: [],
            };
        },
        computed: {
            nav() {
                return this.$navigation.get();
            }
        },
        watch: {
            nav() {
                this.navigation = this.cloneObject(this.nav);
            }
        },
        methods: {
            toggle() {
                this.drawer = !this.drawer;
            },
            cloneObject($obj) {
                return JSON.parse(JSON.stringify($obj));
            },
        },
        mounted() {
            this.$navigation.reFetch();
        }
    }
</script>

<style scoped>

</style>
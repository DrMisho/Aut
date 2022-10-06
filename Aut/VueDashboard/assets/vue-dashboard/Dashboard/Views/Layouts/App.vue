<template>
    <v-app id="inspire">
        <v-fade-transition hide-on-leave>
            <router-view></router-view>
        </v-fade-transition>
        <l-footer/>
        <notification/>
    </v-app>
</template>

<script>
    import LFooter from './LFooter';
    import Notification from './../../../Notification/Components/Notification';

    export default {
        name: "App",
        components: {LFooter, Notification},
        data() {
            return {

            }
        },
        mounted: function () {

        }
    }
</script>

<style scoped>

</style>
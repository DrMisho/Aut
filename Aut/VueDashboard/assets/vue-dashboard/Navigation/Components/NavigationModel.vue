<template>
    <div>
        <template v-for="nav in items.items">
            <navigation-link v-if="nav.type === 'link'" :nav="nav"></navigation-link>
<!--            <navigation-partial v-if="nav.type === 'partial'" :items="nav"></navigation-partial>-->
        </template>
    </div>
</template>

<script>
    import NavigationLink from './NavigationLink';
    // import NavigationPartial from "./NavigationPartial";

    export default {
        name: "NavigationModel",
        components: {/*NavigationPartial, */NavigationLink},
        props: {
            items: {
                type: Object,
                require: true,
            }
        }
    }
</script>

<style scoped>

</style>
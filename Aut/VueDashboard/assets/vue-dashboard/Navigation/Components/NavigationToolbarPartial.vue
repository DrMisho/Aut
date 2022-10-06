<template>
    <div>
        <template v-for="nav in items.items">
            <NavigationToolbarPanel v-if="nav.type === 'panel'" :nav="nav" />
            <navigation-link v-if="nav.type === 'link'" :nav="nav" />
        </template>
    </div>
</template>

<script>
    import NavigationLink from './NavigationLink';
    import NavigationToolbarPanel from './NavigationToolbarPanel';

    export default {
        name: "NavigationToolbarPartial",
        components: {NavigationLink, NavigationToolbarPanel},
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
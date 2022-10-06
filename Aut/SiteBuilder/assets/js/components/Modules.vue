<template>
    <v-flex xs12>
        <v-container fluid grid-list-xl class="pa-0 ma-0">
            <v-layout row wrap>
                <v-flex v-for="module in modules" :key="module.code" xs12 sm6 md4>
                    <module-card :module="module" />
                </v-flex>
            </v-layout>
        </v-container>
    </v-flex>
</template>

<script>
    import ModuleCard from "./ModuleCard";
    export default {
        name: "Modules",
        components: {ModuleCard},
        data() {
            return {
                modules: [],
            };
        },
        methods: {
            fetch() {
                this.$http
                    .get('api/site-builder/modules')
                    .then(res => this.modules = res.data.data);
            }
        },
        mounted() {
            this.fetch();
        }
    }
</script>

<style scoped>

</style>
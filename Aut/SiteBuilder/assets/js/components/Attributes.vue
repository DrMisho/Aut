<template>
    <v-flex xs12>
        <v-container fluid grid-list-xl class="pa-0 ma-0">
            <v-layout row wrap>
                <v-flex v-for="attribute in attributes" :key="attribute.code" xs12 sm6 md4 lg3>
                    <attribute-card :attribute="attribute" />
                </v-flex>
            </v-layout>
        </v-container>
    </v-flex>
</template>

<script>
    import AttributeCard from "./AttributeCard";
    export default {
        name: "Attributes",
        components: {AttributeCard},
        data() {
            return {
                attributes: [],
            };
        },
        methods: {
            fetch() {
                this.$http
                    .get('api/site-builder/attributes')
                    .then(res => this.attributes = res.data.data);
            }
        },
        mounted() {
            this.fetch();
        }
    }
</script>

<style scoped>

</style>
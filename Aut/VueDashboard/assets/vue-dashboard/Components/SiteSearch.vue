<template>
    <v-autocomplete
            flat
            solo-inverted
            prepend-inner-icon="search"
            :label="$t('app.search_input')"
            class="hidden-sm-and-down mx-3"
            :loading="loading"
            :items="items"
            :search-input.sync="search"
            v-model="select"
            hide-no-data
            hide-details
            clearable
            item-text="first_name"
            item-value="id"
    >
        <template slot="no-data">
            <v-list-tile>
                <v-list-tile-title>
                    Oops nothing found
                    <strong>Try Something else</strong>
                </v-list-tile-title>
            </v-list-tile>
        </template>
        <template slot="item" slot-scope="{ item, tile }">
            <v-list-tile-content>
                <v-list-tile-title>{{ item.title }}</v-list-tile-title>
                <v-list-tile-sub-title>{{ item.type }}</v-list-tile-sub-title>
            </v-list-tile-content>
        </template>
    </v-autocomplete>

</template>

<script>
    export default {
        name: "SiteSearch",
        data() {
            return {
                loading: false,
                items: [],
                select: null,
                search: null,
            }
        },
        computed: {
            api() {
                let api = 'test';
                if (this.search) {
                    api = `${api}?search=${this.search}`;
                }
                return api;
            }
        },
        watch: {
            search() {
                this.loading = true;

                this.$http.get(`${this.api}`)
                    .then(res => {
                        console.log(res);
                        this.items = res.data
                    })
                    .catch(err => {
                        console.log(err)
                    })
                    .finally(() => (this.loading = false))
            }
        }
    }
</script>

<style scoped>

</style>
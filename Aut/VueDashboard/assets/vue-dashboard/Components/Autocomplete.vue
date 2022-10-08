<template>
    <v-autocomplete
        v-on="$listeners"
        v-bind="$attrs"
        :dense="dense"
        :clearable="clearable"
        :hide-no-data="hideNoData"
        :items="items"
        v-model="inputValue"
        :loading="loading"
        :search-input.sync="search"
        no-filter
    >
        <template v-for="(index, name) in $scopedSlots" v-slot:[name]="data">
            <slot :name="name" v-bind="data"></slot>
        </template>
    </v-autocomplete>
</template>

<script>
export default {
    name: "Autocomplete",
    props: {
        resource: {
            required: true,
        },
        dense: {
            default: true
        },
        clearable: {
            default: true
        },
        hideNoData: {
            default: true
        },
        query: {
            type: [Boolean, Object],
            default: false,
        },
        value: {},
        delayTime: {
            default: 600
        },
    },
    data() {
        return {
            inputValue: this.value,
            loading: false,
            search: null,
            delayTimer: null,
            items: [],
        }
    },
    methods: {
        fetch() {
            this.loading = true;

            let resource = this.resource;
            let query = this.query || {};
            if (this.search) {
                query['search'] = this.search;
            }
            query = this.getQueryParams(query);
            if (query) {
                resource = `${resource}?${query}`;
            }
            this.$http
                .post(`api/autocomplete/${resource}`, {'values': this.inputValue})
                .then(res => {
                    this.items = res.data.data;
                })
                .finally(() => this.loading = false);
        },
        getQueryParams(params) {
            let queryParams = {};
            for (let key in params) {
                if (params[key]) {
                    queryParams[key] = params[key];
                }
            }
            return Object.keys(queryParams).map(key => key + '=' + queryParams[key]).join('&');
        },
    },
    watch: {
        search: {
            handler() {
                clearTimeout(this.delayTimer);
                this.delayTimer = setTimeout(() => this.fetch(), this.delayTime);
            },
            immediate: true,
        },
        inputValue() {
            this.$emit('input', this.inputValue);
        },
        value(newval) {
            this.inputValue = newval;
            this.fetch();
        },
    }
}
</script>

<style scoped>

</style>

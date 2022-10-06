<template>
    <v-select
        v-on="$listeners"
        v-bind="$attrs"
        :dense="dense"
        :items="items"
        :loading="loading"
        v-model="inputValue"
    >
        <!-- Not work when try to pass props
        <template v-for="(index, name) in $scopedSlots" v-slot:[name]="data">
            <slot :name="name" v-bind="data"></slot>
        </template>-->
        <template v-for="(index, name) in $scopedSlots" v-slot:[name]>
            <slot :name="name"></slot>
        </template>
    </v-select>
</template>

<script>
    export default {
        name: "SelectInput",
        props: {
            dense: {
                default: true
            },
            value: {},
            resource: {},
            options: {},
            query: {
                type: [Boolean, Object],
                default: false,
            },
            requiredParams: {
                type: [Boolean, Array],
                default: false,
            },
        },
        data() {
            return {
                loading: false,
                inputValue: this.value,
                items: [],
            };
        },
        methods: {
            fetch() {
                if (!this.resource) {
                    this.items = this.options;
                    return;
                }
                if (!this.checkRequiredParams()) {
                    this.items = [];
                    return;
                }
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
                    .post(`api/autocomplete/${resource}`)
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
            checkRequiredParams() {
                if (!this.requiredParams) {
                    return true;
                }
                for (let key in this.requiredParams) {
                    let val = this.query[this.requiredParams[key]] || false;
                    if (!val) {
                        return false;
                    }
                }
                return true;
            }
        },
        watch: {
            inputValue() {
                this.$emit('input', this.inputValue || null);
            },
            value(newval) {
                this.inputValue = newval;
            },
            query: {
                deep: true,
                handler(newval) {
                    this.fetch();
                },
            },
            options: {
                handler(newval) {
                    this.fetch();
                },
            }
        },
        mounted() {
            this.fetch();
        }
    }
</script>

<style scoped>

</style>

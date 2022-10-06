<template>
    <div class="elevation-1">
        <v-toolbar flat color="white" >
            <v-toolbar-title>{{ title }}</v-toolbar-title> <v-subheader v-if="subHeader">{{ subHeader }}</v-subheader>
            <v-divider class="mx-2" inset vertical></v-divider>
            <v-spacer></v-spacer>
            <v-text-field
                    v-model="search"
                    append-icon="search"
                    :label="trans('search')"
                    single-line
                    hide-details
            ></v-text-field>
            <v-menu v-if="shownFilters.length" offset-x :left="!isRtl" :right="isRtl" :nudge-width="150" :close-on-content-click="false">
                <v-btn slot="activator" icon>
                    <v-icon>more_vert</v-icon>
                </v-btn>
                <v-card>
                    <v-list dense>
                        <template v-for="(filterPanel, index) in shownFilters">
                            <v-list-tile>
                                <v-list-tile-sub-title>{{ filterPanel.title }}</v-list-tile-sub-title>
                            </v-list-tile>
                            <template v-for="filterOption in filterPanel.options">
                                <v-list-tile v-if="filterOption.type === 'button'" @click="applyFilter(filterOption)">
                                    <v-list-tile-title>{{ filterOption.label }}</v-list-tile-title>
                                </v-list-tile>
                                <v-list-tile v-if="filterOption.type === 'button_groups'">
                                    <v-list-tile-action>
                                        <button-groups v-model="filter[filterOption.name]" :options="filterOption.options" :item-text="filterOption.optionText" :item-value="filterOption.optionValue" :label="filterOption.label" color="primary"/>
                                    </v-list-tile-action>
                                </v-list-tile>
                            </template>
                            <v-divider v-if="shownFilters.length !== (index + 1)"/>
                        </template>
                    </v-list>
                </v-card>
            </v-menu>
        </v-toolbar>
        <v-data-table
            :headers="visibleHeaders"
            :items="items"
            :pagination.sync="pagination"
            :loading="loading"
            :total-items="total"
            hide-actions
        >
            <v-progress-linear slot="progress" color="secondary" indeterminate></v-progress-linear>
            <template slot="items" slot-scope="props">
                <tr :key="props.item[keyBy]">
                    <template v-for="head in visibleHeaders">
                        <td v-if="sortableRows && head.type === 'sortable_td'" class="sortable-rows move"><v-icon small>fas fa-exchange-alt fa-rotate-90</v-icon></td>
                        <table-dynamic-input v-else :loading="loading" :item="props.item" :head="head" :dialog="dialog"  @click="actionClicked"></table-dynamic-input>
                    </template>
                </tr>
            </template>
            <template slot="footer">
                <td colspan="100%" text-xs-center>
                    <v-layout align-center justify-start row>
                        <v-flex shrink>
                            {{ trans('pagination_info', {start: pageStart, end: pageStop, total: pagination.totalItems}) }}
                        </v-flex>
                        <v-flex>
                            <v-pagination :total-visible="totalPaginationVisible" v-model="pagination.page" :length="pagination.pages"></v-pagination>
                        </v-flex>
                        <v-flex xs3 sm2>
                            <v-select :label="trans('per_page')" :items="perPage" v-model="pagination.rowsPerPage"></v-select>
                        </v-flex>
                    </v-layout>
                </td>
            </template>
            <template slot="no-data">
                <v-layout align-center justify-center row fill-height>
                    <v-flex shrink>
                        <v-btn v-if="fields.length"
                               class="text-xs-center"
                               :loading="loading"
                               color="secondary"
                               :disabled="loading"
                               flat
                               small
                               @click="fetchDataSource()"
                        >{{ noData }}</v-btn>
                        <v-btn v-if="!fields.length"
                               class="text-xs-center"
                               :loading="loading"
                               color="secondary"
                               :disabled="loading"
                               flat
                               small
                               @click="fetchStructure()"
                        >{{ noData }}</v-btn>
                    </v-flex>
                </v-layout>
            </template>
            <template slot="no-results">
                <v-layout align-center justify-center row fill-height>
                    <v-flex shrink>
                        <v-btn
                                class="text-xs-center"
                                :loading="loading"
                                color="secondary"
                                :disabled="loading"
                                flat
                                small
                                @click="clearSearch"
                        >{{ trans('no_result') }}</v-btn>
                    </v-flex>
                </v-layout>
            </template>
        </v-data-table>
        <v-toolbar flat>
            <template v-for="(action, key) in toolbarActions">
                <template v-if="action.name === 'save_order'">
                    <v-tooltip :key="action.name" top>
                        <template slot="activator">
                            <v-btn :id="action.id" :disabled="loading" v-if="sortableRows" flat icon @click="saveOrder">
                                <v-badge :value="sortableRowsChanged.length" color="red" overlap class="badge-size-10">
                                    <template slot="badge">
                                        <span></span>
                                    </template>
                                    <v-icon dark>save</v-icon>
                                </v-badge>
                            </v-btn>
                        </template>
                        <span>{{ trans('save_order') }}</span>
                    </v-tooltip>
                    <v-divider v-if="sortableRows" class="mx-2" inset vertical />
                </template>
                <template v-else-if="action.name === 'settings'">
                    <v-menu offset-x :left="isRtl" :right="!isRtl" :nudge-width="150" :close-on-content-click="false">
                        <v-btn slot="activator" icon>
                            <v-icon>fas fa-cog</v-icon>
                        </v-btn>
                        <v-card>
                            <v-subheader>{{ 'Columns Show/Hide' }}</v-subheader>
                            <v-list dense subheader style="max-height: 200px;overflow: auto">
                                <template v-for="head in headers">
                                    <v-list-tile @click="">
                                        <v-list-tile-action>
                                            <v-checkbox color="primary" v-model="head.show"></v-checkbox>
                                        </v-list-tile-action>

                                        <v-list-tile-content @click="head.show = !head.show">
                                            <v-list-tile-title>{{ head.text }}</v-list-tile-title>
                                        </v-list-tile-content>
                                    </v-list-tile>
                                </template>
                            </v-list>
                        </v-card>
                    </v-menu>
                </template>
                <template v-else>
                    <action-button :action="action" :disabled="loading" @click="actionClicked(action)" />
                    <v-divider v-if="toolbarActions.length > (key + 1)" class="mx-2" inset vertical></v-divider>
                </template>
            </template>
        </v-toolbar>
        <confirm :opened="confirm" :data="confirmData" @confirmed="confirmed" @closed="confirmClosed" />
        <v-dialog v-model="dialog" scrollable :persistent="persistent" max-width="500">
            <v-card>
                <v-card-title class="headline primary elevation-5">
                    <span style="color: white;" class="headline">{{ formTitle }}</span>
                    <v-spacer/>
                    <v-btn icon dark flat @click.native="cancel"><v-icon>fas fa-times-circle</v-icon></v-btn>
                </v-card-title>
                <v-card-text>
                    <v-container grid-list-md>
                        <v-layout wrap>
                            <slot name="form-input" :form="form" :files="files">
                                <template v-for="(field, i) in fields.filter(function (item){return item.editable !== false})">
                                    <template v-if="field.multiLang">
                                        <template v-for="(locale, key, z) in supportedLocales">
                                            <v-flex xs12 v-show="!(field.hideFromForm || (field.hideOnEdit && editing) || (field.hideOnAdd && !editing))">
                                                <form-dynamic-input
                                                        v-model="form[key][field.name]"
                                                        :label="`${field.text} (${locale.native})`"
                                                        :field="field"
                                                        :files="files[field.name]"
                                                        :reverse="key !== currentLocale && locale.dir !== supportedLocales[currentLocale].dir"
                                                        :class="`force-${locale.dir}`"
                                                        :filter="filterOn[field.watch]"
                                                        v-show="showWhen[field.value]"
                                                        :dialog="dialog"
                                                        :autofocus="i == 1 && z == 0"
                                                        :error-messages="validationMessage[`${key}.${field.name}`]"
                                                />
                                            </v-flex>
                                        </template>
                                    </template>
                                    <template v-else>
                                        <v-flex xs12 v-show="!(field.hideFromForm || (field.hideOnEdit && editing) || (field.hideOnAdd && !editing))">
                                            <form-dynamic-input
                                                    v-model="form[field.name]"
                                                    :label="`${field.text}`"
                                                    :field="field"
                                                    :files="files[field.name]"
                                                    :filter="filterOn[field.watch]"
                                                    v-show="showWhen[field.value]"
                                                    :dialog="dialog"
                                                    :autofocus="i == 1"
                                                    :error-messages="validationMessage[field.name]"
                                            ></form-dynamic-input>
                                        </v-flex>
                                    </template>
                                </template>
                            </slot>
                        </v-layout>
                    </v-container>
                </v-card-text>
                <v-divider />
                <v-card-actions>
                    <v-spacer></v-spacer>
                    <v-btn flat @click.native="cancel">{{ trans('cancel') }}</v-btn>
                    <v-btn :loading="loading" color="primary" @click.native="save">{{ trans('save') }} {{ singular }}</v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog>
    </div>
</template>

<script>
    import TableDynamicInput from './Table/TableDynamicInput';
    import FormDynamicInput from './Form/FormDynamicInput';
    import ActionButton from "./Table/ActionButton";

    export default {
        name: "DataTable",
        components: {TableDynamicInput, FormDynamicInput, ActionButton},
        props: {
            source: {
                type: [String],
                default: null,
            },
            fetch: {
                type: Boolean,
                default: true,
            },
            params: {
                type: Object,
                default: null,
            },
            silentParams: {
                type: Object,
                default: null,
            },
            subTitle: {
                type: String,
                default: null,
            },
            silentRoute: {
                type: Boolean,
                default: false,
            },
        },
        data() {
            return {
                title: null,
                singular: null,
                subHeader: this.subTitle,
                noDataMsg: null,
                dialog: false,
                loadingStructure: true,
                loadingData: true,
                confirm: false,
                confirmData: null,
                keyBy: 'id',
                fields: [],
                filters: [],
                toolbarActions: [],
                headers: [],
                queryParams: {},
                perPage: [
                    {text: '5', value: 5},
                    {text: '10', value: 10},
                    {text: '25', value: 25},
                    {text: '50', value: 50},
                ],
                items: [],
                total: 0,
                search: this.$route.query.search || '',
                totalPaginationVisible: 7,
                persistent: false,
                pagination: {
                    descending: this.$route.query.sortType === 'desc',
                    page: (this.$route.query.page ? parseInt(this.$route.query.page) : 1),
                    pages: 0,
                    rowsPerPage: this.$route.query.limit ? parseInt(this.$route.query.limit) : 5,
                    sortBy: this.$route.query.sortBy ? this.$route.query.sortBy : null,
                    totalItems: 0,
                },
                filter: {},
                editing: false,
                files: {},
                form: {},
                emptyForm: {},
                validationMessage: {},
                delayTimer: null,
                delayTime: 600,
                isRtl: automata.isRtl,
                sortableRows: false,
                sortableRowsChanged: [],
                showWhen: {},
                filterOn: {},
            };
        },
        computed: {
            supportedLocales() {
                return this.$automata.config.language.supportedLocales;
            },
            currentLocale() {
                return this.$automata.config.language.locale;
            },
            loading() {
                return this.loadingStructure || this.loadingData;
            },
            dataSource() {
                if (!this.source) {
                    return null;
                }
                return `data-table/${this.source}`;
            },
            formTitle() {
                return this.editing ? `${this.trans('edit')} ${this.singular}` : `${this.trans('add')} ${this.singular}`;
            },
            pageStart() {
                return ((this.pagination.page - 1) * this.pagination.rowsPerPage) + 1;
            },
            pageStop() {
                let val = ((this.pagination.page) * this.pagination.rowsPerPage);
                if (val > this.pagination.totalItems) {
                    val = this.pagination.totalItems;
                }
                return val;
            },
            hasItems() {
                return this.items.length;
            },
            noData() {
                if (this.noDataMsg) {
                    return this.noDataMsg;
                }
                return this.trans('no_data', {title: this.singular});
            },
            shownFilters() {
                return this.filters.filter(item => !item.hidden);
            },
            visibleHeaders() {
                return this.headers.filter((item) => item.show);
            }
        },
        mounted() {
            this.fetchStructure();
        },
        watch: {
            '$route.query': {
                immediate: true,
                handler() {
                    this.fetchDataSource();
                },
                deep: true,
            },
            'pagination.page': {
                handler() {
                    this.pushQueryString();
                },
            },
            'pagination.rowsPerPage': {
                handler(newVal) {
                    if (newVal > this.pagination.totalItems && this.pagination.page > 1) {
                        this.pagination.page = 1;
                    } else {
                        this.pushQueryString();
                    }
                },
            },
            'pagination.sortBy': {
                handler() {
                    if (this.pagination.page === 1) {
                        this.pushQueryString();
                    }
                },
            },
            'pagination.descending': {
                handler() {
                    this.pushQueryString();
                },
            },
            'search': {
                handler() {
                    clearTimeout(this.delayTimer);
                    this.delayTimer = setTimeout(() => this.pushQueryString(), this.delayTime);
                },
            },
            'params': {
                handler() {
                    this.queryParams = this.params;
                },
                deep: true,
            },
            'subTitle': {
                handler() {
                    this.subHeader = this.subTitle;
                },
            },
            'queryParams': {
                immediate: true,
                handler() {
                    this.pushQueryString();
                },
                deep: true,
            },
            'filter': {
                handler() {
                    this.pushQueryString();
                },
                deep: true,
            },
            form: {
                handler() {
                    this.initShowWhen();
                    this.initFilterOn();
                },
                deep: true,
            },
        },
        methods: {
            pushQueryString(extra) {
                let queryString = this.getQueryString(extra);
                if (this.silentRoute) {
                    let params = _.extend(automata.helper.cloneObject(this.silentParams), queryString);
                    let query = automata.helper.getQueryString(params);
                    // let query = Object.keys(params).map(key => key + '=' + params[key]).join('&');
                    this.fetchDataSource(query);
                } else {
                    this.$router.push({query: queryString}).catch(() => {});
                }
            },
            getQueryString(extra) {
                let params = {};
                if (this.pagination.page && this.pagination.page > 1) {
                    params['page'] = this.pagination.page;
                }
                if (this.pagination.rowsPerPage && this.pagination.rowsPerPage !== 5) {
                    params['limit'] = this.pagination.rowsPerPage;
                }
                if (this.pagination.sortBy) {
                    params['sortBy'] = this.pagination.sortBy;
                }
                if (this.pagination.descending) {
                    params['sortType'] = 'desc';
                }
                if (this.search) {
                    params['search'] = this.search;
                }
                if (this.filter) {
                    for (let key in this.filter) {
                        if (this.filter[key] !== null && this.filter[key] !== undefined) {
                            params[key] = this.filter[key];
                        }
                    }
                }
                if (typeof this.queryParams === 'object') {
                    for (let key in this.queryParams) {
                        if (this.queryParams[key]) {
                            params[key] = this.queryParams[key];
                        }
                    }
                }
                if (typeof extra === 'object') {
                    for (let key in extra) {
                        if (extra[key]) {
                            params[key] = extra[key];
                        }
                    }
                }
                return params;
            },
            getQueryParams() {
                let params = _.extend(automata.helper.cloneObject(this.silentParams), this.$route.query);
                return automata.helper.getQueryString(params);
                //return Object.keys(params).map(key => key + '=' + params[key]).join('&');
            },
            //@todo add resource name to query param
            fetchDataSource(queryString) {
                if (!this.dataSource) {
                    return;
                }
                this.loadingData = true;
                let queryParams = queryString || this.getQueryParams();
                this.$http
                    .get(`api/${this.dataSource}?${queryParams}`)
                    .then(res => {
                        this.items = res.data.data;
                        this.pagination.pages = res.data.meta.last_page;
                        this.pagination.totalItems = res.data.meta.total;
                        this.total = this.pagination.totalItems;
                        this.sortableRowsChanged = [];
                        this.$emit('sourceFetched');
                    })
                    .catch(res => {
                        console.log(res);
                    })
                    .finally(() => this.loadingData = false);
            },
            fetchStructure() {
                if (!this.dataSource) {
                    return;
                }
                this.loadingStructure = true;
                let queryParams = this.getQueryParams();
                this.noDataMsg = null;
                return this.$http
                    .get(`api/${this.dataSource}/structure?${queryParams}`)
                    .then(res => {
                        this.fields = res.data.data.fields;
                        this.title = res.data.data.meta.title;
                        this.singular = res.data.data.meta.singular;
                        this.totalPaginationVisible = res.data.data.meta.pagination.limit;
                        this.persistent = res.data.data.meta.persistent;
                        this.filters = res.data.data.filters;
                        this.toolbarActions = res.data.data.actions;
                        this.initFilter();
                        this.initHeaders();
                        this.initEmptyForm();
                        this.initShowWhen();
                        this.initFilterOn();
                        this.$emit('structureFeted');
                    })
                    .catch(error => {
                        switch (error.response.status) {
                            case 403: {
                                this.noDataMsg = `${error.response.status} - ${error.response.data.message}`;
                                this.$notification.error(this.noDataMsg);
                            } break;
                            default: {
                                this.$notification.error(`${error.response.status} - ${error.response.data.message}`);
                            }
                        }
                    })
                    .finally(() => this.loadingStructure = false);
            },
            resetDataTable() {
                this.fields = [];
                this.headers = [];
                this.toolbarActions = [];
                this.items = [];
            },
            reBuild() {
                this.resetDataTable();
                this.fetchStructure();
                this.fetchDataSource();
            },
            reFetch(params) {
                this.pushQueryString(params);
            },
            initFilter() {
                for (let key in this.filters) {
                    let option = this.filters[key].options[0] || {};
                    if (this.$route.query.hasOwnProperty(option.name)) {
                        this.$set(this.filter, option.name, this.$route.query[option.name]);
                    }
                }
            },
            initHeaders() {
                for (let filed in this.fields) {
                    if (this.fields[filed].type !== 'hidden' && !this.fields[filed].hideFromTable) {
                        this.headers.push(this.cloneObject(this.fields[filed]));
                    }
                    if (this.fields[filed].type === "order" && !this.sortableRows) {
                        this.sortableRows = true;
                        this.initReorderRows();
                        this.headers.unshift({
                            show: true,
                            text: "",
                            sortable: false,
                            type: 'sortable_td',
                        });
                    }
                }
            },
            initEmptyForm() {
                if (this.$scopedSlots.hasOwnProperty('form-input')) {
                    return;
                }
                for (let filed in this.fields) {
                    if (this.fields[filed].type !== 'actions') {
                        if (this.fields[filed].multiLang) {
                            for (let locale in this.supportedLocales) {
                                if (!this.emptyForm.hasOwnProperty(locale)) {
                                    this.emptyForm[locale] = {};
                                }
                                this.emptyForm[locale][this.fields[filed].name] = '';

                                this.validationMessage[`${locale}.${this.fields[filed].name}`] = null;
                            }
                        } else {
                            this.validationMessage[this.fields[filed].name] = null;
                            if (this.fields[filed].type === 'switch') {
                                this.emptyForm[this.fields[filed].name] = this.fields[filed].fixedValue || this.fields[filed].defaultValue || false;
                            } else if(this.fields[filed].type === 'multi_select') {
                                this.emptyForm[this.fields[filed].name] = this.fields[filed].fixedValue || [];
                            } else if (this.fields[filed].type === 'geolocation'){
                                this.emptyForm[this.fields[filed].name] = this.fields[filed].multiple ? [] : {lat: null, lng: null};
                            } else {
                                this.emptyForm[this.fields[filed].name] = this.fields[filed].fixedValue || this.fields[filed].defaultValue || null;
                            }
                        }
                    }
                }
                this.form = this.cloneObject(this.emptyForm);
            },
            initReorderRows() {
                let tbody = this.$children[1].$el.querySelector('tbody');
                const _self = this;
                Sortable.create(tbody, {
                    animation: 150,
                    handle: '.sortable-rows',
                    onEnd({newIndex, oldIndex}) {
                        if (newIndex === oldIndex) {
                            return;
                        }
                        const rowSelected = _self.items.splice(oldIndex, 1)[0];
                        _self.sortableRowsChanged.push({
                            key: rowSelected[_self.keyBy],
                            old: oldIndex,
                            new: newIndex,
                            page: _self.page,
                        });
                        _self.items.splice(newIndex, 0, rowSelected);
                    }
                });
            },
            applyFilter(filterOption) {
                this.filter[filterOption.name] = filterOption.value;
                this.pushQueryString();
                this.$emit('filterChanged', {
                    name: filterOption.name,
                    value: filterOption.value,
                });
            },
            clearSearch() {
                this.search = '';
            },
            add() {
                this.files = {};
                this.fields.map((field) => {
                    if (field.type === 'filepond') {
                        this.$set(this.files, field.name, []);
                    }
                });
                this.form = this.cloneObject(this.emptyForm);
                this.dialog = true;
                this.editing = false;
            },
            edit(item) {
                let index = this.items.indexOf(item);
                this.form = this.cloneForm(this.items[index]);
                this.files = {};
                this.fields.map((field) => {
                    if (field.type === 'filepond') {
                        let value = item[field.value];
                        if (!field.multiple && value) {
                            value = [value];
                        }
                        this.$set(this.files, field.name, value || []);

                    } else if (field.multiLang) {
                        for (let locale in this.supportedLocales) {
                            if (!this.form.hasOwnProperty(locale)) {
                                this.form[locale] = {};
                            }
                            if (!this.form[locale].hasOwnProperty(field.name)) {
                                this.form[locale][field.name] = null;
                            }
                        }
                    }
                });
                this.editing = true;
                this.dialog = true;
            },
            openConfirm(item) {
                this.confirmData = this.items.indexOf(item);
                this.confirm = true;
            },
            confirmClosed(status, data) {
                this.confirm = false;
            },
            confirmed(data) {
                this.destroy(data);
            },
            cancel() {
                this.dialog = false;
            },
            save() {
                this.$automata.form.validation.reset(this.validationMessage);
                this.loadingData = true;
                this.$loader.start();
                if (this.form[this.keyBy]) {
                    this.update();
                } else {
                    this.store();
                }
            },
            store() {
                let queryParams = this.getQueryParams();
                this.$http
                    .post(`api/${this.dataSource}?${queryParams}`, this.form)
                    .then(res => {
                        this.$notification.success(this.$t('message.operation_done'));
                        this.cancel();
                        this.fetchDataSource();
                    })
                    .catch(error => {
                        this.$automata.form.validation.check(this, error, this.validationMessage);
                        this.loadingData = false;
                    })
                    .finally(() => {
                        this.$loader.stop();
                    });
            },
            update() {
                let queryParams = this.getQueryParams();
                this.$http
                    .put(`api/${this.dataSource}/${this.form[this.keyBy]}?${queryParams}`, this.form)
                    .then(res => {
                        this.$notification.success(this.$t('message.operation_done'));
                        this.cancel();
                        this.fetchDataSource();
                    })
                    .catch(error => {
                        this.$automata.form.validation.check(this, error, this.validationMessage);
                        this.loadingData = false
                    })
                    .finally(() => {
                        this.$loader.stop();
                    });
            },
            destroy(index) {
                this.loadingData = true;
                let id = this.items[index][this.keyBy];
                let queryParams = this.getQueryParams();
                this.$http
                    .delete(`api/${this.dataSource}/${id}?${queryParams}`)
                    .then(res => {
                        this.$notification.success(this.$t('message.operation_done'));
                        this.fetchDataSource();
                    })
                    .catch(res => {
                        this.$notification.error(this.$t('message.operation_failed'));
                        this.loadingData = false;
                    });
            },
            restore(item) {
                this.loadingData = true;
                let id = item[this.keyBy];
                let queryParams = this.getQueryParams();
                this.$http
                    .put(`api/${this.dataSource}/${id}/restore?${queryParams}`)
                    .then(res => {
                        this.$notification.success(this.$t('message.operation_done'));
                        this.fetchDataSource();
                    })
                    .catch(res => {
                        this.$notification.error(this.$t('message.operation_failed'));
                        this.loadingData = false;
                    });
            },
            saveOrder() {
                this.loadingData = true;
                let queryParams = this.getQueryParams();
                this.$http
                    .put(`api/${this.dataSource}/order?${queryParams}`, {changes: this.sortableRowsChanged, items: this.items})
                    .then(res => {
                        this.$notification.success(this.$t('message.operation_done'));
                        this.fetchDataSource();
                    })
                    .catch(res => {
                        this.$notification.error(this.$t('message.operation_failed'));
                        this.loadingData = false;
                    });
            },
            initShowWhen() {
                for (let i in this.fields) {
                    let field = this.fields[i];
                    if (!field.hasOwnProperty('showWhen')) {
                        this.showWhen[field.value] = true;
                        continue;
                    }
                    this.showWhen[field.value] = this.evaluateCondition(this.form[field.showWhen.field], field.showWhen.condition, field.showWhen.value);
                }
            },
            initFilterOn() {
                for (let i in this.fields) {
                    let field = this.fields[i];
                    if (field.hasOwnProperty('watch') && field.watch) {
                        this.filterOn[field.watch] = this.form[field.watch];
                    }
                }
            },
            cloneObject($obj) {
                return automata.helper.cloneObject($obj);
            },
            cloneForm($obj) {
                return this.cloneObject($obj);
            },
            actionClicked(action, item, head) {
                if (action.name === "add") {
                    this.add();
                } else if(action.name === "edit") {
                    this.edit(item);
                } else if(action.name === "delete") {
                    this.openConfirm(item);
                } else if(action.name === "restore") {
                    this.restore(item);
                } else if(action.name === "reload") {
                    this.fetchDataSource();
                } else if (action.event === 'toolbarEvent') {
                    this.loadingData = true;
                    let params = this._().merge({'action_name': action.name}, this.$route.query);
                    this.$http
                        .put(`api/${this.dataSource}/action`, params)
                        .then(res => {
                            this.$notification.success(this.$t('message.operation_done'));
                            this.fetchDataSource();
                            this.$emit(action.event);
                            if (action.emit) {
                                this.$emit(action.emit);
                            }
                        })
                        .catch(res => {
                            this.$notification.error(this.$t('message.operation_failed'));
                            this.loadingData = false;
                        });
                }  else if (action.event === "tableActionEvent") {
                    this.loadingData = true;
                    let params = this._().merge({
                        'action_name': action.name,
                        'item': item
                    }, this.$route.query);
                    this.$http
                        .put(`api/${this.dataSource}/action`, params)
                        .then(res => {
                            this.$notification.success(this.$t('message.operation_done'));
                            this.fetchDataSource();
                            this.$emit(action.event);
                            if (action.emit) {
                                this.$emit(action.emit, item);
                            }
                        })
                        .catch(res => {
                            this.$notification.error(this.$t('message.operation_failed'));
                            this.loadingData = false;
                        });
                } else if (action.type === 'toolbar_action') {
                    this.$emit(action.event);
                } else if (action.type === "table_action") {
                    this.$emit(action.event, item);
                } else {
                    console.log(action);
                }
            },
            evaluateCondition(first, condition, second) {
                switch (condition) {
                    case '=':
                    case '==':
                    case '===':
                        return first == second;

                    case '<>':
                    case '!=':
                    case '!==':
                        return first != second;

                    case '>':
                        return first > second;
                    case '>=':
                        return first >= second;

                    case '<':
                        return first < second;
                    case '<=':
                        return first <= second;

                    case 'null':
                        return first == null;

                    case 'notnull':
                        return first != null;

                    case 'inArray':
                    case 'in':
                        return second.includes(first);

                    default:
                        return false;
                }
            },
            trans(key, params) {
                params = params || {};
                return this.$t(`datatable.${key}`, params);
            },
            _() {
                return _;
            }
        }
    }
</script>

<style scoped>

</style>

<template>
    <v-flex>
        <v-container fluid grid-list-md class="pa-0 ma-0">
            <v-layout row wrap>
                <v-flex md6 v-for="code in pageable" :key="code">
                    <data-table
                            :ref="`pageable_${code}`"
                            silent-route
                            :silent-params="{'model': code}"
                            source="page-content"
                            @buildPage="buildPage(code, $event)"
                            @buildGeneralPage="buildGeneralPage(code)"
                            @pageMenu="pageMenu(code, $event)"
                            @generalMenu="generalMenu(code)"
                            @seo="buildSeo(code, $event)"
                            @pageLink="pageLink(code, $event)"
                            @pageUnlink="pageUnlink(code, $event)"
                            @pageCached="pageCached(code, $event)"
                            @pageNotCached="pageNotCached(code, $event)"
                    />
                </v-flex>
            </v-layout>
        </v-container>
        <v-dialog v-model="dialog" fullscreen hide-overlay transition="dialog-bottom-transition">
            <v-card>
                <v-toolbar dark color="primary" fixed>
                    <v-btn icon dark @click="dialog = false">
                        <v-icon>close</v-icon>
                    </v-btn>
                    <v-toolbar-title>{{ dialogTitle }}</v-toolbar-title>
                    <v-spacer></v-spacer>
                    <v-toolbar-items>
                        <v-btn :loading="loading" dark flat @click="saveModule">{{ $t('app.save') }}</v-btn>
                    </v-toolbar-items>
                </v-toolbar>
                <v-card-text class="pt-5 mt-5">
                    <v-layout>
                        <v-flex xs12>
                            <v-layout align-center justify-center row wrap>
                                <v-flex md8 xs12 v-if="!pageModules.length">
                                    <v-img width="40%" class="ma-auto" src="images/empty-states/custom_module.svg" :aspect-ratio="100/86"/>
                                </v-flex>
                                <v-flex  md8 xs12>
                                    <div id="modules-sortable-container">
                                        <module-container v-for="(pageModule, index) in pageModules"
                                                          :key="index"
                                                          :modules="modules"
                                                          :info="pageModule"
                                                          :index="index"
                                                          :last="pageModules.length - 1"
                                                          v-model="pageModule.children"
                                                          @delete="removeModule(pageModule, index)"
                                                          @up="moveUp(index)"
                                                          @down="moveDown(index)"
                                        />
                                    </div>
                                    <v-btn :disabled="loading" block :dark="!loading" color="primary" class="mx-0" @click="dialogs.container = true">
                                        Add Container Module
                                    </v-btn>
                                </v-flex>
                            </v-layout>
                        </v-flex>
                    </v-layout>
                </v-card-text>
            </v-card>
        </v-dialog>
        <v-dialog v-model="dialogs.container" max-width="700px" scrollable>
            <v-card>
                <v-toolbar dark color="primary">
                    <v-toolbar-title>{{ 'Container Module' }}</v-toolbar-title>
                    <v-spacer />
                    <v-btn icon @click="dialogs.container = false"><v-icon>close</v-icon></v-btn>
                </v-toolbar>
                <v-divider></v-divider>
                <v-card-text>
                    <v-container fluid grid-list-xl class="pa-0 ma-0">
                        <v-layout row wrap fill-height>
                            <v-flex xs12>
                                <v-text-field  placeholder="Type to search for module" clearable/>
                            </v-flex>
                            <v-flex xs4 v-for="module in modules" :key="module.id" v-if="module.module_info.is_parent">
                                <v-card>
                                    <v-img v-if="module.image_path" :src="module.image_path" aspect-ratio="2.75"></v-img>
                                    <v-card-title class="pb-1 justify-center text-xs-center">
                                        <div>
                                            <h6 class="title">{{ module.name }}</h6>
                                            <div> {{ module.module_code }} </div>
                                        </div>
                                    </v-card-title>
                                    <v-card-actions class="pt-0 justify-center">
                                        <v-btn flat color="primary" @click="selectCustomModule(module)">select</v-btn>
                                    </v-card-actions>
                                </v-card>
                            </v-flex>
                        </v-layout>
                    </v-container>
                </v-card-text>
                <v-divider></v-divider>
                <v-card-actions>
                    <v-spacer />
                    <v-btn flat @click="dialogs.container = false">Close</v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog>
        <v-dialog v-model="dialogs.menu" max-width="700px" scrollable>
            <v-card>
                <v-toolbar dark color="primary">
                    <v-toolbar-title>{{ menuDialogTitle }}</v-toolbar-title>
                    <v-spacer />
                    <v-btn :disabled="loadingMenu" icon @click="dialogs.menu = false"><v-icon>close</v-icon></v-btn>
                </v-toolbar>
                <v-divider></v-divider>
                <v-card-text>
                    <v-flex xs12 >
                        <autocomplete :disabled="loadingMenu" v-model="menu_id" resource="site-builder-menus" />
                    </v-flex>
                </v-card-text>
                <v-divider></v-divider>
                <v-card-actions>
                    <v-spacer />
                    <v-btn :disabled="loadingMenu" flat @click="dialogs.menu = false">Close</v-btn>
                    <v-btn :loading="loadingMenu" color="primary" @click="savePageMenu">Save</v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog>
        <seo v-model="dialogs.seo" :buildable="buildable" :title="`Title`"/>
        <seo-preview />
    </v-flex>
</template>

<script>
    import ModuleContainer from "./PageBuilder/ModuleContainer";

    import Seo from "../../../../SeoBuilder/assets/js/components/Seo";
    import SeoPreview from "../../../../SeoBuilder/assets/js/components/SeoPreview";

    export default {
        name: "PageBuilder",
        components: {SeoPreview, Seo, ModuleContainer},
        data() {
            return {
                loading: false,
                loadingMenu: false,
                pageable: [],
                modules: [],
                dialog: false,
                dialogs: {
                    container: false,
                    menu: false,
                    seo: false,
                },
                pageModules: [],
                pageInfo: {
                    name: null,
                    pageable_type: null,
                    pageable_id: null,
                },
                buildable: {id: null, type: null},
                menu_id: null,
            };
        },
        computed: {
            pageableTitle() {
                let pageable = '';
                if (this.$refs[`pageable_${this.pageInfo.pageable_type}`] || false) {
                    let table = this.$refs[`pageable_${this.pageInfo.pageable_type}`][0];
                    if (this.pageInfo.pageable_id) {
                        pageable = table.singular || '';
                    } else {
                        pageable = table.title || '';
                    }
                }
                return pageable
            },
            dialogTitle() {
                let global = this.pageInfo.name || 'General Page';

                return `Page Builder (${this.pageableTitle}) (${global})`;
            },
            menuDialogTitle() {
                let global = this.pageInfo.name || 'General Menu';

                return `Page Menu (${this.pageableTitle}) (${global})`;
            },
            saveColor() {
                return 'primary';
            },
            saveLabel() {
                return this.$t('app.save');
            },
        },
        methods: {
            getPageableModels() {
                this
                    .$http
                    .get('api/site-builder/page-builder/pageable')
                    .then(res => this.pageable = res.data.data);
            },
            getCustomModels() {
                this
                    .$http
                    .get('api/site-builder/modules/custom')
                    .then(res => this.modules = res.data.data);
            },
            setPageInfo(code, item) {
                this.pageInfo.name = JSPath.apply('.*[1]', item);
                this.pageInfo.pageable_id = item.id;
                this.pageInfo.pageable_type = code;
            },
            buildPage(code, item) {
                this.setPageInfo(code, item);
                this.loading = true;
                this
                    .$http
                    .get(`api/site-builder/page-builder/page?pageable_id=${this.pageInfo.pageable_id}&pageable_type=${this.pageInfo.pageable_type}`)
                    .then(res => this.pageModules = res.data.data)
                    .finally(() => this.loading = false);
                this.dialog = true;
            },
            pageMenu(code, item) {
                this.dialogs.menu = true;
                this.loadingMenu = true;
                this.setPageInfo(code, item);
                this
                    .$http
                    .get(`api/site-builder/page-builder/menu?pageable_id=${this.pageInfo.pageable_id}&pageable_type=${this.pageInfo.pageable_type}`)
                    .then(res => this.menu_id = res.data.data.menu_id)
                    .finally(() => this.loadingMenu = false);
            },
            buildGeneralPage(code) {
                this.setPageInfo(code, {name: null, pageable_id: null, pageable_type: code});
                this.dialog = true;
                this.loading = true;
                this
                    .$http
                    .get(`api/site-builder/page-builder/page?pageable_type=${this.pageInfo.pageable_type}`)
                    .then(res => this.pageModules = res.data.data)
                    .finally(() => this.loading = false);
            },
            generalMenu(code) {
                this.setPageInfo(code, {name: null, pageable_id: null, pageable_type: code});
                this.dialogs.menu = true;
                this.loadingMenu = true;
                this
                    .$http
                    .get(`api/site-builder/page-builder/menu?pageable_type=${this.pageInfo.pageable_type}`)
                    .then(res => this.menu_id = res.data.data.menu_id)
                    .finally(() => this.loadingMenu = false);
            },
            saveModule() {
                this.loading = true;
                this.$http
                    .post(`api/site-builder/page-builder/page`, {
                        modules: this.pageModules,
                        pageable_id: this.pageInfo.pageable_id,
                        pageable_type: this.pageInfo.pageable_type,
                    })
                    .then(res => {
                        this.dialog = false;
                        this.$notification.success(this.$t('message.operation_done'))
                    })
                    .finally(() => this.loading = false);
            },
            savePageMenu() {
                this.loadingMenu = true;
                this.$http
                    .post(`api/site-builder/page-builder/menu`, {
                        menu_id: this.menu_id,
                        pageable_id: this.pageInfo.pageable_id,
                        pageable_type: this.pageInfo.pageable_type,
                    })
                    .then(res => {
                        this.dialogs.menu = false;
                        this.$notification.success(this.$t('message.operation_done'))
                    })
                    .finally(() => this.loadingMenu = false);
            },
            selectCustomModule(module) {
                let m = automata.helper.cloneObject(module);
                m.custom_module_id = m.id;
                m.id = null;
                this.$set(m, 'children', []);
                this.pageModules.push(m);
            },
            removeModule(pageModule, index) {
                if (!pageModule.id) {
                    this.pageModules.splice(index, 1);
                    return;
                }
                this.loading = true;
                this.$http
                    .delete(`api/site-builder/page-builder/page/${pageModule.id}`)
                    .then(res => this.pageModules.splice(index, 1))
                    .finally(() => this.loading = false);
            },
            buildSeo(code, item) {
                this.dialogs.seo = true;
                this.buildable.id = item.id;
                this.buildable.type = code;
            },
            pageLink(code, item) {
                window.open(item.page_url, '_blank');
            },
            pageUnlink(code, item) {
                this.$notification.error('Sorry. Page should have place in one of the menus');
            },
            pageCached(code, item) {
                this.$refs[`pageable_${code}`][0].loadingData = true;
                this.$http.post('api/site-builder/page-builder/page/cache/clear', {
                    url: item.page_url,
                }).then(res => {
                    this.$notification.success('Page cache cleared');
                    this.$refs[`pageable_${code}`][0].fetchDataSource();
                }).catch(() => this.$refs[`pageable_${code}`][0].loadingData = false);
            },
            pageNotCached(code, item) {
                if (!item.page_url) {
                    this.$notification.error('Sorry. Page should have place in one of the menus');
                    return;
                }
                this.$refs[`pageable_${code}`][0].loadingData = true;
                this.$http.get(item.page_url).then(res => {
                    this.$notification.success('Page Cached');
                    this.$refs[`pageable_${code}`][0].fetchDataSource();
                }).catch(() => this.$refs[`pageable_${code}`][0].loadingData = false);
            },
            moveUp(index) {
                let module = this.pageModules.splice(index, 1)[0];
                this.pageModules.splice(index - 1, 0, module);
            },
            moveDown(index) {
                let module = this.pageModules.splice(index, 1)[0];
                this.pageModules.splice(index + 1, 0, module);
            },
            initSortableModules() {
                const _self = this;
                Sortable.create(document.getElementById('modules-sortable-container'), {
                    animation: 150,
                    handle: '.sortable-module',
                    onEnd({newIndex, oldIndex}) {
                        if (newIndex === oldIndex) {
                            return;
                        }
                        const rowSelected = _self.pageModules.splice(oldIndex, 1)[0];
                        _self.pageModules.splice(newIndex, 0, rowSelected);
                        console.log(_.map(_self.pageModules, 'module_code'));
                    }
                });
            }
        },
        watch: {
            'dialogs.container': {
                handler(newval) {
                    if (newval === false) {
                        setTimeout(() => {
                            document.getElementsByTagName('html')[0].classList.add('overflow-y-hidden');
                        }, 900);
                    }
                }
            },
        },
        mounted() {
            this.getPageableModels();
            this.getCustomModels();
            this.initSortableModules();
        }
    }
</script>

<style scoped>

</style>

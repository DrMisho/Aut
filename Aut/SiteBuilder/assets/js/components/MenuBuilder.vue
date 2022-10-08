<template>
    <v-flex shrink>
        <data-table source="menus" @menuItems="menuItems" />
        <v-dialog v-model="dialog" fullscreen hide-overlay transition="dialog-bottom-transition">
            <v-card>
                <v-toolbar dark color="primary" fixed>
                    <v-btn icon dark @click="closeMenuBuilder" :disabled="disableButtons">
                        <v-icon>close</v-icon>
                    </v-btn>
                    <v-toolbar-title>{{ menuInfo.name }}</v-toolbar-title>
                    <v-spacer></v-spacer>
                    <v-toolbar-items>
                        <v-btn :loading="loading" :disabled="disableButtons" dark flat @click="saveMenu">{{ $t('app.save') }}</v-btn>
                    </v-toolbar-items>
                </v-toolbar>
                <v-card-text class="pt-4 mt-5">
                    <v-layout>
                        <v-flex xs12 class="pt-3">
                            <v-layout justify-center row wrap>
                                <v-flex md6 xs12 class="dd">
                                    <div id="dd-empty-placeholder" class="mb-3 hidden-lg-and-down"></div>
                                    <ol class="dd-list pa-0">
                                        <menu-item v-for="(item, i) in tree"
                                                   :key="i"
                                                   :item="item"
                                                   remove
                                                   edit
                                                   hidden
                                                   @removeItem="removeItem"
                                                   @hideItem="hideItem"
                                                   @showItem="showItem"
                                                   @editItem="editItem"
                                                   :disabled="disableButtons"
                                        />
                                    </ol>
                                </v-flex>
                                <v-flex md6 xs12 class="dd2" :class="{'pr-4': isRtl, 'pl-4': isLtr}">
                                    <v-btn block @click="addNode">Add Node</v-btn>
                                    <menuable-items v-for="(menuable, key) in menuables" :title="menuable.title" :key="key">
                                        <ol class="dd-list pa-0">
                                            <menu-item v-if="menuable.is_dynamic"
                                                       :item="menuable.dynamic_template"
                                                       add
                                                       @addToEndOfTree="addToEndOfTree"
                                                       @addToTree="addToTree"
                                                       :disabled="disableButtons"
                                            />
                                            <menu-item v-if="menuable.is_pageable"
                                                       :item="menuable.pageable_template"
                                                       add
                                                       @addToEndOfTree="addToEndOfTree"
                                                       @addToTree="addToTree"
                                                       :disabled="disableButtons"
                                            />
                                            <menu-item v-for="(item, z) in menuable.data"
                                                       :item="item"
                                                       :key="z"
                                                       add
                                                       @addToEndOfTree="addToEndOfTree"
                                                       @addToTree="addToTree"
                                                       :disabled="disableButtons"
                                            />
                                        </ol>
                                    </menuable-items>
                                </v-flex>
                            </v-layout>
                        </v-flex>
                    </v-layout>
                </v-card-text>
            </v-card>
        </v-dialog>
        <v-dialog v-model="nodeDialog" max-width="700px" scrollable>
            <v-card v-if="nodeDialogForm">
                <v-toolbar dark color="primary">
                    <v-toolbar-title>{{ nodeDialogForm.menuable_item_title }}</v-toolbar-title>
                    <v-spacer />
                    <v-btn icon @click="cancelNodeSave" :disabled="disableButtons"><v-icon>close</v-icon></v-btn>
                </v-toolbar>
                <v-divider></v-divider>
                <v-card-text>
                    <v-container grid-list-sm>
                        <v-layout row wrap justify-between>
                            <v-flex xs12 v-if="nodeWithType || nodeTypesCode.includes(nodeDialogForm.node_type)">
                                <v-select v-model="nodeDialogForm.node_type"
                                        :items="nodeTypes"
                                        label="Node Type"
                                ></v-select>
                            </v-flex>
                            <v-flex v-for="(locale, key) in supportedLocales" :key="`name_${key}`" xs12 sm6>
                                <v-text-field :label="`name (${locale.native})`" v-model="nodeDialogForm[key].name"/>
                            </v-flex>
                            <v-flex xs12 v-if="nodeDialogForm.node_type !== 'url'">
                                <slug-input :label="`prefix slug`" v-model="nodeDialogForm.prefix"/>
                            </v-flex>
                            <v-flex xs12 v-if="nodeDialogForm.node_type === 'url'">
                                <v-text-field type="url" label="url" v-model="nodeDialogForm.url" />
                            </v-flex>
                            <!--<v-flex xs12>
                                <v-autocomplete :items="parents" :label="`Parent`" clearable v-model="nodeDialogForm.parent_id"/>
                            </v-flex>-->
                        </v-layout>
                    </v-container>
                </v-card-text>
                <v-divider></v-divider>
                <v-card-actions>
                    <v-spacer />
                    <v-btn flat @click="cancelNodeSave" :disabled="disableButtons">Close</v-btn>
                    <v-btn color="primary" @click="addNodeTree" :disabled="disableButtons">save</v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog>
    </v-flex>
</template>

<script>
    import jQuery from 'jquery';
    import MenuItem from "./MenuBuilder/MenuItem";
    import MenuableItems from "./MenuBuilder/MenuableItems";

    window.jQuery = jQuery;
    window.$ = window.jQuery;

    /**
     * jquery.nestable.js -> dragMove after
     *
     * // distance mouse moved between events
     * mouse.distX = mouse.nowX - mouse.lastX;
     *
     * This Code
     *
     * if (opt.rtl) {
     *      mouse.distX = -1 * mouse.distX;
     * }
     * -------------------------------------------------------
     *
     * jquery.nestable.js -> setParent in the end of condition
     * this.options.onSetParentFirstChild.call(this, this.el)
     * -------------------------------------------------------
     *
     * jquery.nestable.js -> setParent in the end of Function
     * this.options.onSetParent.call(this, this.el);
     * -------------------------------------------------------
     *
     * jquery.nestable.js -> unsetParent in the end of Function
     * this.options.onUnsetParent.call(this, this.el);
     * -------------------------------------------------------
     *
     * jquery.nestable.js -> var defaults  after beforeDragStop
     * onSetParentFirstChild: function(l, e) {},
     * onSetParent: function(l, e) {},
     * onUnsetParent: function(l, e) {},
     * rtl: false,
     * -------------------------------------------------------
     *
     *
     */

    require('nestable2');

    export default {
        name: "MenuBuilder",
        components: {MenuableItems, MenuItem},
        data() {
            return {
                loading: false,
                disableButtons: false,
                dialog: false,
                editNode: false,
                nodeDialog: false,
                nodeDialogItem: null,
                nodeDialogForm: null,
                nodeDialogEmpty: {
                    "id": null,
                    "primary_id": null,
                    "menuable_type": null,
                    "menuable_item_title": null,
                    "name": null,
                    "node_type": null,
                    "prefix": null,
                    "url": null,
                    "hidden": false,
                },
                nodeWithType: false,
                nodeTypes: [
                    {value: 'list', text: 'List'},
                    {value: 'mega_list', text: 'Mega List'},
                    {value: 'url', text: 'Url'},
                ],
                menuables: [],
                menuInfo: {
                    id: null,
                    name: null,
                },
                tree: [],
                isRtl: this.$automata.isRtl,
                isLtr: !this.$automata.isRtl,
                parents: [],
            };
        },
        computed: {
            nodeTypesCode() {
                return _.map(this.nodeTypes, 'value');
            },
            supportedLocales() {
                return this.$automata.config.language.supportedLocales;
            },
        },
        methods: {
            closeMenuBuilder() {
                this.dialog = false;
                this.clearTree();
            },
            menuItems(item) {
                this.menuInfo.id = item.id;
                this.menuInfo.name = item.name;
                this.dialog = true;
                this.disableButtons = true;
                this.$http
                    .get(`api/site-builder/menu-builder/menu/${this.menuInfo.id}/item`)
                    .then((res) => {
                        this.tree = res.data.data;
                        this.initNested();
                    })
                    .finally(() => this.disableButtons = false);
            },
            saveMenu() {
                this.loading = true;
                this.disableButtons = true;
                let menu = $('.dd').nestable('serialise');
                this.$http
                    .post(`api/site-builder/menu-builder/menu/${this.menuInfo.id}/item`, {menu})
                    .then(res => {
                        this.$notification.success(this.$t('app.done'));
                        this.closeMenuBuilder();
                    })
                    .finally(() => {
                        this.loading = false;
                        this.disableButtons = false;
                    });
            },
            getMenuableModels() {
                this.disableButtons = true;
                this
                    .$http
                    .get('api/site-builder/menu-builder/menuable')
                    .then(res => {
                        this.menuables = res.data.data;
                    })
                    .finally(() => this.disableButtons = false);
            },
            addNode() {
                this.nodeDialog = true;
                this.nodeWithType = true;
                this.nodeDialogForm = automata.helper.cloneObject(this.nodeDialogEmpty);
                this.nodeDialogItem = this.nodeDialogForm;
            },
            addToTree(item) {
                this.nodeDialog = true;
                this.nodeDialogForm = automata.helper.cloneObject(item);
                this.nodeDialogItem = item;
                //this.setParentsItems();
            },
            editItem(item) {
                this.nodeDialog = true;
                this.editNode = true;
                this.nodeDialogForm = automata.helper.cloneObject(item);
                this.nodeDialogItem = item;
            },
            addNodeTree() {
                if (!this.editNode) {
                    this.nodeDialogItem = automata.helper.cloneObject(this.nodeDialogItem);
                    this.pushTreeItem(this.nodeDialogItem);
                }
                for (let locale in this.supportedLocales) {
                    this.nodeDialogItem[locale].name = this.nodeDialogForm[locale].name;
                }
                this.nodeDialogItem.name = this.nodeDialogForm[this.$automata.config.language.locale].name;
                this.nodeDialogItem.prefix = this.nodeDialogForm.prefix;
                this.nodeDialogItem.url = this.nodeDialogForm.url;
                this.nodeDialogItem.node_type = this.nodeDialogForm.node_type;
                this.cancelNodeSave();
            },
            cancelNodeSave() {
                this.nodeDialog = false;
                this.editNode = false;
                this.nodeWithType = false;
                this.nodeDialogForm = null;
                this.nodeDialogItem = null;
            },
            addToEndOfTree(item) {
                this.nodeDialog = false;
                this.pushTreeItem(
                    automata.helper.cloneObject(item)
                );
            },
            removeItem(item, $li) {
                if (!item.id) {
                    $('.dd').nestable('removeItem', $li.$el);
                    return;
                }
                this.disableButtons = true;
                this.$http.delete(`api/site-builder/menu-builder/menu/${this.menuInfo.id}/item/${item.id}`).then(() => {
                    $('.dd').nestable('remove', item.id);
                    this.$notification.success(this.$t('app.done'));
                }).catch(error => {
                    if (error.response.status == 404) {
                        $('.dd').nestable('remove', item.id);
                    }
                }).finally(() => this.disableButtons = false);
            },
            hideItem(item) {
                if (!item.id) {
                    item.hidden = true;
                    return;
                }
                this.disableButtons = true;
                this.$http.put(`api/site-builder/menu-builder/menu/${this.menuInfo.id}/item/${item.id}/hide`).then(() => {
                    item.hidden = true;
                    this.$notification.success(this.$t('app.done'));
                }).finally(() => this.disableButtons = false);
            },
            showItem(item) {
                if (!item.id) {
                    item.hidden = false;
                    return;
                }
                this.disableButtons = true;
                this.$http.put(`api/site-builder/menu-builder/menu/${this.menuInfo.id}/item/${item.id}/show`).then(() => {
                    item.hidden = false;
                    this.$notification.success(this.$t('app.done'));
                }).finally(() => this.disableButtons = false);
            },
            pushTreeItem(item) {
                if (this.checkItemExists(item)) {
                    this.$notification.close(false).error(this.$t('app.already_exists'));
                    return false;
                }
                this.tree.push(item);
                return true;
            },
            clearTree() {
                this.tree = [];
                $('.dd').nestable('removeAll');
            },
            checkItemExists(item) {
                let tree = $('.dd').nestable('toArray');
                return _.some(tree, {id: item.id});
            },
            initNested() {
                $('.dd').nestable({
                    group: 1,
                    placeClass: 'module-container mb-3 grey lighten-3 elevation-4 dd-placeholder',
                    // scroll: true,
                    expandBtnHTML: null,
                    collapseBtnHTML: null,
                    rtl: this.isRtl,
                    onSetParentFirstChild(el) {
                        let $el = el.get(0).__vue__;
                        if (!$el) {
                            return;
                        }
                        if ($el.$options.name === 'v-sheet') {
                            $el = $el.$parent;
                        }
                        if ($el.$options.name === 'MenuItem') {
                            $el.toggleDisabled(false);
                        }
                    },
                    onUnsetParent(el) {
                        let $el = el.get(0).__vue__;
                        if (!$el) {
                            return;
                        }
                        if ($el.$options.name === 'v-sheet') {
                            $el = $el.$parent;
                        }
                        if ($el.$options.name === 'MenuItem') {
                            $el.toggleDisabled(true);
                        }
                    },
                });
            },
            setParentsItems() {
                let tree = $('.dd').nestable('toArray');
                this.parents = [];
                for (let item of tree) {
                    let info = $('.dd').nestable('_getItemById', item.id).data();

                    this.parents.push(
                        {
                            value: info.id,
                            text: info.menuable_item_title,
                        }
                    )
                }
            }
        },
        mounted() {
            for (let locale in this.supportedLocales) {
                this.$set(this.nodeDialogEmpty, locale, {"name": null});
            }
            this.getMenuableModels();
        }
    }
</script>

<style>
    .dd-expand,
    .dd-collapse {
        display: none;
    }

    li.dd-collapsed > ol.dd-list {
        display: none;
    }
</style>

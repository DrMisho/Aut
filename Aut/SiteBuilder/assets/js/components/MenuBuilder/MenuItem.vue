<template>
    <v-sheet ref="sheet" tag="li" class="dd-item" color="transparent" :data-id="item.id" :data-item="itemInfo">
        <v-layout row wrap class="module-container grey lighten-3 elevation-4 mb-3">
            <v-subheader class="px-2">
                <v-btn id="collapse_btn" ref="collapseBtn" :disabled="collapseDisabled" class="mx-0" small icon @click="toggle">
                    <v-icon small>{{ collapseIcon }}</v-icon>
                </v-btn>
            </v-subheader>
            <v-subheader class="px-2 dd-handle move"> {{ title }} </v-subheader>
            <v-spacer class="dd-handle move" />
            <v-subheader class="px-2">
                <confirm-btn v-if="remove" btn-class="mx-0" small icon @confirmed="removeItem(item, $refs.sheet)" :disabled="disableButtons">
                    <v-icon small>fas fa-times</v-icon>
                </confirm-btn>
                <v-btn v-if="edit" class="mx-0" small icon @click="editItem(item)" :disabled="disableButtons">
                    <v-icon small>fas fa-edit</v-icon>
                </v-btn>
                <v-btn v-if="hidden" class="mx-0" small icon @click="hideItem(item)" :disabled="disableButtons">
                    <v-icon small>{{ item.hidden ? 'visibility_off' : 'visibility' }}</v-icon>
                </v-btn>
                <v-btn v-if="add" class="mx-0" small icon @dblclick="addToEndOfTree(item)" @click="addToTree(item)" :disabled="disableButtons">
                    <v-icon small>fas fa-plus</v-icon>
                </v-btn>
            </v-subheader>
        </v-layout>
        <ol v-if="item.hasOwnProperty('children') && item.children.length" class="dd-list">
            <menu-item v-for="(child, z) in item.children"
                       :item="child"
                       :key="z"
                       :depth="depth + 1"
                       :add="add"
                       :remove="remove"
                       :edit="edit"
                       :hidden="hidden"
                       @removeItem="removeItem"
                       @editItem="editItem"
                       @hideItem="hideItem"
                       @showItem="hideItem"
                       @addToEndOfTree="addToEndOfTree"
                       @addToTree="addToTree"
                       :disabled="disableButtons"
            />
        </ol>
    </v-sheet>
</template>

<script>
    export default {
        name: "MenuItem",
        props: {
            depth: {
                default: 0
            },
            disabled: {
                type: Boolean,
                default: false,
            },
            remove: {
                type: Boolean,
                default: false
            },
            edit: {
                type: Boolean,
                default: false
            },
            hidden: {
                type: Boolean,
                default: false
            },
            add: {
                type: Boolean,
                default: false
            },
            item: {
                default() {
                    return {
                        id: null,
                        menuable_item_title: null,
                        node_type: 'link',
                        menuable_type: null,
                        hidden: false,
                        children: [],
                    }
                }
            },
        },
        data() {
            return {
                collapse: false,
                disableButtons: this.disabled,
                collapseDisabled: true,
                itemInfo: JSON.stringify(this.item),
            }
        },
        computed: {
            title() {
                if (this.item.name) {
                    return this.item.name;
                }
                return this.item.menuable_item_title;
            },
            collapseIcon() {
                return this.collapse ? 'fas fa-angle-up' : 'fas fa-angle-down';
            },
        },
        watch: {
            disabled(newval) {
                this.disableButtons = newval
            },
            item: {
                immediate: true,
                deep: true,
                handler(nweval) {
                    let item = automata.helper.cloneObject(nweval || this.item);
                    item.id = this.item.primary_id;
                    delete item.primary_id;
                    delete item.children;
                    this.itemInfo = JSON.stringify(item);
                    if (this.$refs.sheet) {
                        $(this.$refs.sheet.$el).data('item', JSON.parse(this.itemInfo));
                    }
                }
            },
        },
        methods: {
            toggle() {
                this.collapse = !this.collapse;
                if (this.collapse === true) {
                    $('.dd').nestable('collapseItem', $(this.$el))
                }else {
                    $('.dd').nestable('expandItem', $(this.$el))
                }
            },
            collapseItem() {
                this.collapse = true;
                $('.dd').nestable('collapseItem', $(this.$el));
            },
            expandItem() {
                $('.dd').nestable('expandItem', $(this.$el));
                this.collapse = false;
            },
            toggleDisabled(val) {
                this.collapseDisabled = val;
            },
            removeItem(item, sheet) {
                this.$emit('removeItem', item, sheet);
            },
            editItem(item) {
                this.$emit('editItem', item);
            },
            hideItem(item) {
                if (item.hidden) {
                    this.$emit('showItem', item);
                } else {
                    this.$emit('hideItem', item);
                }
            },
            addToEndOfTree(item) {
                this.$emit('addToEndOfTree', item);
            },
            addToTree(item) {
                this.$emit('addToTree', item);
            },
        },
        mounted() {
            if (this.item.hasOwnProperty('children') && this.item.children.length) {
                this.collapseDisabled = false;
            }
        }
    }
</script>

<style scoped>

</style>

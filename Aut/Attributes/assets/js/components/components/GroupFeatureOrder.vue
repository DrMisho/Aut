<template>
<v-flex>

    <v-layout class="mb-4">
        <v-flex>{{translate('order_group_and_feature')}}</v-flex>
        <v-spacer></v-spacer>
        <v-toolbar-items>
            <v-btn large class="pa-1 ma-1"  @click="back()">{{translate('disagree')}}</v-btn>
                        <v-spacer></v-spacer>
            <v-btn large color="primary" class=" white--text pa-1"  @click="save()">{{translate('save')}}</v-btn>
        </v-toolbar-items>
    </v-layout>

    <v-divider></v-divider>
    <v-layout wrap row>
        <v-flex md3 class="lime lighten-4">
            <v-flex class=" align-center  justify-center d-flex elevation-11   precedent_item pa-3">
                <h4 class="  align-center justify-center d-flex">{{translate('precedent_item')}}</h4>
                <v-select v-model="precedent_item" :items="precedent_items" item-text="name" item-value="id" @change="fetchPreviousshapes()"></v-select>

            </v-flex>
            <v-flex class=" align-center  justify-center d-flex elevation-11  primary darken-1 pa-3">
                <h3 class="white--text  align-center justify-center d-flex">{{translate('groups')}}</h3>
            </v-flex>

            <nested-group-draggable :tasks="groups" name_group="g1" max_height='400px' />

            <v-spacer></v-spacer>

            <v-flex class=" align-center  justify-center d-flex elevation-11  primary darken-1 pa-3">
                <h3 class="white--text  align-center   justify-center d-flex">{{translate('features')}}</h3>
            </v-flex>

            <v-list id="features" style="max-height: 400px; overflow-y: scroll;">


                <draggable  class="list-group  justify-center lime lighten-4" :list="features" group="g1" @change="log">
                            <div  class="d-flex list-group-item mb-2 ma-2 elevation-5 warning " v-for="(feature, index) in features" :key="feature.name">
                                <div class="white--text  align-center justify-center d-flex pa-1">{{feature.name}}</div>
                            </div>


                </draggable>
                  

            </v-list>

        </v-flex>

        <v-flex md9 class="">
            <v-list id="main_list">
                <v-flex v-if="main_list.length == 0" class="headline pa-3 grey--text">{{translate('drag_element_to_add')}}</v-flex>
                <nested-group-draggable :tasks="main_list" name_group="g1" max_height='800px' />

            </v-list>
        </v-flex>

    </v-layout>
    <v-list three-line subheader>

    </v-list>
</v-flex>
</template>

<script>
import draggable from "vuedraggable";
import NestedGroupDraggable from "./NestedGroupDraggable";
export default {
    name: "group_feature_order",
    props: {
        orderable_type: {
            required: false,
            default: {}
        },
         orderable_id: {
            required: false,
            default: {}
        },
    },

    display: "Nested",
    order: 15,
    components: {
        NestedGroupDraggable,
        draggable
    },
    data() {
        return {

            precedent_item: null,
            precedent_items: [],
            features: [],
            groups: [],
            product_type: {},
            main_list: [],
            result: [],
        };
    },
    watch: {
        main_list: function (newValue) {
            console.log('change');
            for (let i in newValue) {
                if (newValue[i].feature_id != null) {
                    this.features.push(newValue[i]);
                    newValue.splice(i, 1);
                    break;
                }
            }

        },
        groups: function (newValue) {
            console.log('change');
            for (let i in newValue) {
                if (newValue[i].feature_id != null) {
                    this.features.push(newValue[i]);
                    newValue.splice(i, 1);
                    break;
                }
            }

        },
        features: function (newValue) {
            console.log('change');
            for (let i in newValue) {
                if (newValue[i].feature_id == null && newValue[i].group_id != null) {
                    this.groups.push(newValue[i]);
                    newValue.splice(i, 1);
                    break;
                }
            }

        },

    },
    methods: {
        back(){
                this.$router.go(-1);

        },
        save() {
            // console.log('h');
            this.result = [];
            for (let order in this.main_list) {
                let item = this.main_list[order];
                item.group_order = order;
                item.orderable_id = this.orderable_id;
                item.orderable_type = this.orderable_type;
                if (this.isGroup(item)) {
                    this.storeGroupInfo(item);
                    item.parent_group_id = null;
                    item.feature_order = null;
                    this.result.push(item);

                } else {
                    item.feature_order = order;
                    this.result.push(item);
                }

            }
            this.submitResult();

        },
        submitResult() {
            this.$http.post('api/attribute/product-type-group-order', {
                data: this.result,
                orderable_id: this.orderable_id,
                orderable_type: this.orderable_type
            }).then((response) => {
                // this.dialog = false;

                if (response.data.state == 'success') {
                    this.$notification.success(response.data.msg);
                } else {
                    this.$notification.show(response.data.msg);
                }
                this.$router.go(-1);
            });
        },
        storeGroupInfo(item) {
            for (let order in item.tasks) {
                let element = item.tasks[order];
                element.feature_order = order;
                element.orderable_id = this.orderable_id;
                element.orderable_type = this.orderable_type;

                if (this.isGroup(element)) {
                    this.storeGroupInfo(element);
                    element.parent_group_id = item.group_id;
                    element.feature_order = order;
                    this.result.push(element);

                } else {
                    element.group_id = item.group_id;
                    this.result.push(element);
                }
            }
            return '';

        },
        isGroup(item) {
            if (item.feature_id) {
                return false;
            } else {
                return true;
            }
        },
        translate(key) {
            return this.$t(`attributes.${key}`)
        },
        getGroups(item) {
            this.fetchingPrecedentItems();
            this.previousItems(item);
            // this.dialog = true;
            this.product_type = item;
        },
        fetchingPrecedentItems() {
            this.$http.get('api/attribute/precedent-items?orderable_type=' + this.orderable_type).then((response) => {
                this.precedent_items = response.data;

            });
        },
        fetchPreviousshapes() {
            this.$http.get('api/attribute/product-type-groups-previous-element/' + this.precedent_item + '?orderable_type=' + this.orderable_type).then((response) => {
                // this.major_groups
                this.main_list = [];
                this.main_list = Object.values(response.data.main_list);
                this.features = [];
                this.features = response.data.features;
                this.groups = [];
                this.groups = response.data.groups;

            });
        },
        previousItems(item) {
            let vm = this;
            this.$http.get('api/attribute/product-type-groups/' +this.orderable_id + '?orderable_type=' + this.orderable_type).then((response) => {
                // this.major_groups
                this.main_list = [];

                this.main_list = Object.values(response.data.main_list);
                this.features = [];
                this.features = response.data.features;
                this.groups = [];
                this.groups = response.data.groups;

            });
        },
        initializeMenuItems() {
            this.$http.get('api/attribute/all-group-feature').then((response) => {
                this.features = [];
                this.features = response.data.features;
                this.groups =[];
                this.groups = response.data.groups;
            });
        },
        log: function (evt) {
            window.console.log(evt);
        }
    },
    created() {
        this.initializeMenuItems();
        this.getGroups(this.item);
    }
};
</script>

<style scoped></style>

<template>
<v-flex shrink>

    <data-table ref='features' source="attribute-features" @addfeature='addfeature()' @addlist="addList" @editfeature="editfeature" @searchable="searchable" @deletefeature="deletefeature" @commongroup="commongroup" @all_lock="allLock" />
    <feature-searchable ref="feature_searchabel"></feature-searchable>
    <add-feature ref='add_edit' @saved='save()'></add-feature>
    <delete-feature ref='delete_feature' @saved='save()'></delete-feature>
    <sky-select ref="sky_list" v-model="option" :name_field_trans="'value'" :table_title="translate(faeture.name)" :table_type_code="translate(faeture.type_code)" :option="option"></sky-select>
    <common-group ref="common_group"></common-group>
    <feature-lock ref="feature_lock"  @saved='save()'></feature-lock>
</v-flex>
</template>

<script>
import AddFeature from './components/AddFeature.vue'
import FeatureSearchable from './components/FeatureSearchable.vue'
import DeleteFeature from './components/DeleteFeature.vue'
import SkySelect from "./components/SkySelect";
import CommonGroup from "./components/CommonGroup";
import FeatureLock from "./components/FeatureLock";

export default {
    name: 'features',
    components: {
        AddFeature,
        DeleteFeature,
        SkySelect,
        FeatureSearchable,
        CommonGroup,
        FeatureLock
    },
    data: function () {
        return {
            option: [],
            faeture: {
                type_code: 'select',
                name: ''
            },
        }
    },
    methods: {
        translate(key) {
            return this.$t(`attributes.${key}`)
        },
        edittype(item) {
            this.$refs.edit_type.getTypesCode(item);
        },
        showTable(feature_id) {
            let withSave = true;
            this.$refs.sky_list.initializeAndShow(this.option, feature_id, withSave);
        },
        save() {

            this.$refs.features.fetchDataSource();
        },
        addfeature() {

            this.$refs.add_edit.createFeature();
        },
        editfeature(item) {
            this.$refs.add_edit.editFeautres(item);
        },
        deletefeature(item) {
            this.$refs.delete_feature.showRelated(item);
        },
        commongroup(item) {
            this.$refs.common_group.initial();
        },

        searchable(item) {
            this.$refs.feature_searchabel.edit();
        },
        addList(item) {
            //call to component skylist....
            this.faeture = item;
            if (item.type_code == 'select' || item.type_code == 'list_select') {

                this.$http.get('api/attribute/attributes-list/' + item.id).then((response) => {

                    this.option = response.data;

                    this.showTable(item.id);

                });

            }
        },
        allLock(){
            this.$refs.feature_lock.initial();
        }
    },

}
</script>

<style scoped>

</style>

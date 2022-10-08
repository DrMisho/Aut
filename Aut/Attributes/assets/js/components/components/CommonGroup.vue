<template>
<v-flex shrink>

    <v-dialog v-model="setting.dialog"  max-width="1000"  scrollable>

        <v-card>
            <v-card-title class="headline primary white--text  justify-center" success-title>
                {{translate('common_group')}}
            </v-card-title>
            <v-progress-linear v-if="setting.loadingGenerate" :indeterminate="setting.loadingGenerate"></v-progress-linear>

            <v-card-text>

                <v-layout row wrap class="justify-center">
                    <v-flex md10 sm10 xl4 xm10>
                        <v-layout class=" justify-center wrap row white ">
                            <v-select 
                            v-model="feature_selected"
                               item-text="name" 
                               :item-value="store"
                              :items="features" color="primary"
                               multiple 
                               :label="translate('msg_feature_common_group')"></v-select>
                        </v-layout>
                    </v-flex>
                    <v-flex md10 sm10 xl4 xm10>
                        <draggable class="list-group  justify-center " :list="feature_selected" group="feature_group" >
                            <v-flex v-for="feature , key in feature_selected" :key="key" class="elevation-5 align-center d-flex flex justify-center mb-2 pa-1 primary white--text">
                                {{feature.name}}
                            </v-flex>
                        </draggable>

                    </v-flex>
                </v-layout>

                <v-flex md6 slot="footer">
                </v-flex>

            </v-card-text>

            <v-divider></v-divider>

            <v-card-actions class=" justify-center">
                <v-spacer></v-spacer>
                <v-btn color="danger"  :loading="setting.loading"  flat @click="hide()">
                    {{translate('disagree')}}
                </v-btn>
                <v-btn color="white" :loading="setting.loading" class="primary" flat @click="save()">
                    {{translate('save')}}
                </v-btn>

            </v-card-actions>
        </v-card>
    </v-dialog>

</v-flex>
</template>

<script>
import draggable from "vuedraggable";
export default {
    name: 'common-group',
    data: function () {
        return {
            features: [],
            feature_selected: [],
            setting: {
                dialog: false,
                loading: false,
                loadingGenerate: false,
            },
        }
    },
    computed: {

    },
    components: {
        draggable
    },
    created() {
        let feature_selected = [];
        this.$http.get('api/attribute/features').then((response) => {
            this.features = response.data;
            for (let index in this.features) {
                if (this.features[index].common_group_order != null) {
                   feature_selected.push(this.features[index]);
                }
            }
        })
        .finally(() => {
            this.setting.loadingGenerate = false;
                       
                    });
        this.feature_selected = feature_selected;
    },
    methods: {

        translate(key) {
            return this.$t(`attributes.${key}`)
        },
        initial() {
            this.show();
        },
        show() {
            this.setting.dialog = true;
        },
        hide() {
            this.setting.dialog = false;
        },
        save() {
            for (let index in this.feature_selected) {
                let order = index;
                this.feature_selected[index].common_group_order = order;
            }
            this.setting.loading = true;
              this.$http.put('api/attribute/feature-common-group', {
                feature_selected: this.feature_selected
            }).then((response) => {
                this.setting.loading = false;
               
                this.hide();
                if (response.data.state == 'success') {

                    this.$notification.success(response.data.msg);
                } else {
                    this.$notification.show(response.data.msg);
                }
            }).finally(() => {
                           this.setting.loading = false;
                    });
        },
        store(item){
            return item;
        }

    },
    mounted() {

    }

}
</script>

<style scoped>

</style>

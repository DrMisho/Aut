<template>
<v-layout class="white">
    <!-- mdoel dialog  -->
    <v-dialog v-model="setting.dialog"   width="600" white class="d-flex flex-row  justify-center mb-8 white" scrollable>

        <v-card>

            <v-toolbar flat dark color="primary">
                <v-toolbar-title>{{translate('feature_searchable')}}</v-toolbar-title>
            </v-toolbar>
            <v-progress-linear v-if="setting.loadingGenerate" :indeterminate="setting.loadingGenerate"></v-progress-linear>

            <v-card-text>
                <v-form ref="form" lazy-validation>
                    <v-layout class=" justify-center wrap row white ">

                        <v-select v-model="features_searchable" item-value="id" item-text="name" :items="features" color="primary" multiple :label="translate('msg_feature_searchable')"></v-select>
                    </v-layout>
                </v-form>

            </v-card-text>
            <v-divider />
            <v-card-actions>

                <v-spacer></v-spacer>
                  <v-btn  @click="initi() ;setting.dialog = false ">
                    {{translate('disagree')}}
                </v-btn>

                <v-btn :loading="setting.loading" :disabled="setting.loadingGenerate" color="primary" @click="save">
                    {{translate('save')}}
                </v-btn>
              
            </v-card-actions>
        </v-card>
    </v-dialog>
</v-layout>
</template>

<script>
export default {
    name: 'feature-searchable',
    components: {},
    data: function () {
        return {
            features: [],
            features_searchable: [],
            global: {
                msg: '',
            },
            setting: {
                dialog: false,
                loading: false,
                loadingGenerate: false,
            },
        }
    },
    computed: {

    },
    methods: {
        translate(key) {
            return this.$t(`attributes.${key}`)
        },
        initi() {
            this.feature = {};
        },
        edit(){
 this.setting.loadingGenerate = true;
            this.$http.get('api/attribute/features/searchable').then((response) => {
                this.features_searchable = response.data;
                this.setting.loadingGenerate = false;
            });
            this.show();
        },
        show() {
            this.setting.dialog = true;
           
        },
        hide() {
            this.setting.dialog = false;
        },
        save() {
            this.setting.loading = true;
            this.$http.put('api/attribute/feature-searchable', {
                features_searchable: this.features_searchable
            }).then((response) => {
                this.setting.loading = false;
                this.$emit('saved');
                this.hide();
                if (response.data.state == 'success') {

                    this.$notification.success(response.data.msg);
                } else {
                    this.$notification.show(response.data.msg);
                }
            })
            .finally(() => {
                        this.setting.loading = false;

                    });
        },
    },
    created() {
        this.setting.loadingGenerate = true;
        this.$http.get('api/attribute/features').then((response) => {
            this.features = response.data;
            this.setting.loadingGenerate = false;
        });
    },
    mounted() {}
}
</script>

<style scoped>
</style>

<template>
<v-layout class="white">
    <!-- mdoel dialog  -->
    <v-dialog v-model="setting.dialog" width="600" white class="d-flex flex-row  justify-center mb-8 white" scrollable>
        <v-card>

            <v-toolbar flat dark color="primary">
                <v-toolbar-title>{{translate('msg_lock')}}</v-toolbar-title>
                <v-progress-linear v-if="setting.loadingGenerate" :indeterminate="setting.loadingGenerate"></v-progress-linear>

            </v-toolbar>

            <v-card-text>
                <v-form ref="form" lazy-validation>
                    <v-layout class=" justify-center wrap row white ">
                        <v-select multiple :label="translate('features')" v-model="locked_features" item-value="id" item-text="name" :items="features" color="primary">
                            <template v-slot:prepend-item>
                                <v-list-tile ripple @click="toggle">
                                    <v-list-tile-action>
                                        <v-icon :color="locked_features.length > 0 ? 'grey ' : 'primary'">{{ icon }}</v-icon>
                                    </v-list-tile-action>
                                    <v-list-tile-content>
                                        <v-list-tile-title>{{translate('select_all')}}</v-list-tile-title>
                                    </v-list-tile-content>
                                </v-list-tile>
                                <v-divider class="mt-2"></v-divider>
                            </template>
                        </v-select>
                    </v-layout>
                </v-form>

            </v-card-text>
            <v-divider />
            <v-card-actions>

                <v-spacer></v-spacer>
                <v-btn @click="initial() ;setting.dialog = false ">
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
    name: 'feature-lock',
    components: {},
    data: function () {
        return {
            features: [],
            locked_features: [],
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
        allFeatureSelected(){
            if(this.locked_features != null && this.features != null ){
            return this.features.length === this.locked_features.length
            }
            return true;
        },
        icon() {
        if (this.allFeatureSelected) return 'remove_circle';
        return 'check_circle';
      }
    },
    methods: {
        translate(key) {
            return this.$t(`attributes.${key}`)
        },
         toggle() {
            this.$nextTick(() => {
          if ( this.allFeatureSelected) {

            this.locked_features = []
          } else {
              let array = [];
              for(let index in this.features){
                      array.push(this.features[index].id);
              }
            this.locked_features = array;
          }
        })
      },
        initial() {
            this.edit();
        },
        edit() {
            this.setting.loadingGenerate = true;
            this.$http.get('api/attribute/features/lock').then((response) => {
                this.locked_features = response.data;
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
            this.$http.put('api/attribute/features/lock', {
                locked_features: this.locked_features
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

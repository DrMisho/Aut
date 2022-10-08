<template>
    <v-flex shrink>
        <data-table ref="customModule" source="custom-module" @addModule="addModule" @editModule="editModule"/>
        <v-dialog v-model="dialog" fullscreen hide-overlay transition="dialog-bottom-transition">
            <v-card>
                <v-toolbar dark color="primary" fixed>
                    <v-btn icon dark @click="dialog = false">
                        <v-icon>close</v-icon>
                    </v-btn>
                    <v-toolbar-title>{{ dialogTitle }}</v-toolbar-title>
                    <v-spacer></v-spacer>
                    <v-toolbar-items>
                        <v-btn dark flat @click="saveModule">{{ $t('app.save') }}</v-btn>
                    </v-toolbar-items>
                </v-toolbar>
                <v-card-text class="pt-5 mt-4">
                    <v-layout>
                        <v-flex xs3>
                            <v-container fluid grid-list-xl class="pa-0 ma-0">
                                <v-layout row wrap fill-height>
                                    <v-flex xs12>
                                        <v-text-field  placeholder="Type to search for module" clearable/>
                                    </v-flex>
                                    <v-flex v-for="module in modules" :key="module.code">
                                        <v-card>
                                            <image-preview v-if="module.image_path" :src="module.image_path" width="500">
                                                <template v-slot:activator="{ on, src }">
                                                    <v-img v-on="on" :src="src" class="hand" v-ripple></v-img>
                                                </template>
                                            </image-preview>
                                            <v-card-title class="pb-1 justify-center text-xs-center">
                                                <div>
                                                    <h6 class="title">{{ module.name }}</h6>
                                                    <div> {{ module.code }} </div>
                                                </div>
                                            </v-card-title>
                                            <v-card-actions class="pt-0 justify-center">
                                                <v-btn flat color="secondary">View</v-btn>
                                                <v-divider vertical />
                                                <v-btn flat color="primary" @click="create(module)">Create</v-btn>
                                            </v-card-actions>
                                        </v-card>
                                    </v-flex>
                                </v-layout>
                            </v-container>
                        </v-flex>
                        <v-divider vertical class="mx-2"/>
                        <v-flex>
                            <v-layout align-center justify-center row>
                                <v-flex md4 v-if="!attributes.length">
                                    <v-img src="images/empty-states/custom_module.svg" :aspect-ratio="100/86"/>
                                </v-flex>
                                <v-flex v-else md6>
                                    <v-text-field v-for="(lang, locale) in supportedLocales"
                                                  :key="`name_${locale}`"
                                                  v-model="form[locale]['name']"
                                                  :label="`name ${lang.native}`"
                                    ></v-text-field>
                                    <template v-for="attribute in attributes">
                                        <component v-if="!attribute.multiLanguage"
                                                   v-model="form.value[attribute.code]"
                                                   :attributes="form"
                                                   :title="attribute.title"
                                                   :info="attribute"
                                                   :is="`${attribute.component}`"
                                        />

                                        <component v-else v-for="(lang, locale) in supportedLocales"
                                                   :key="`${attribute.code}_${locale}`"
                                                   v-model="form.value[attribute.code][locale]"
                                                   :attributes="form"
                                                   :info="attribute"
                                                   :title="`${attribute.title} (${lang.native})`"
                                                   :is="`${attribute.component}`" :locale="locale"
                                        />

                                    </template>
                                    <v-btn :loading="loading" dark :color="saveColor" @click="saveModule">
                                        {{ saveLabel }}
                                    </v-btn>
                                </v-flex>
                            </v-layout>
                        </v-flex>
                    </v-layout>
                </v-card-text>
            </v-card>
        </v-dialog>
    </v-flex>
</template>

<script>
    const requireComponent = require.context(
        './Attributes',
        false,
        /[A-Z]\w+Attribute\.(vue|js)$/
    );
    const components = {};

    requireComponent.keys().forEach(fileName => {
        // Get component config
        const componentConfig = requireComponent(fileName);

        // Get PascalCase name of component
        const componentsName = _.upperFirst(
            _.camelCase(
                // Gets the file name regardless of folder depth
                fileName
                    .split('/')
                    .pop()
                    .replace(/\.\w+$/, '')
            )
        );
        components[componentsName] = componentConfig.default || componentConfig;
    });

    import Attributes from './../../../../../resources/assets/js/components/SiteBuilder/Attributes';

    _.extend(components, Attributes);

    export default {
        name: "CustomModules",
        components,
        computed: {
            saveColor() {
                return this.form.id ? 'green' : 'primary';
            },
            saveLabel() {
                return this.form.id ? this.$t('app.edit') : this.$t('app.save');
            },
            dialogTitle() {
                let title =  (this.form.id ? this.$t('app.edit') : this.$t('app.add')) + ' ' + this.$t('app.custom_module');

                if (this.moduleName) {
                    title = `${title} (${this.moduleName})`;
                }

                return title;
            },
            supportedLocales() {
                return this.$automata.config.language.supportedLocales;
            },
        },
        data() {
            return {
                loading: false,
                dialog: false,
                modules: [],
                moduleName: null,
                attributes: [],
                emptyForm: {
                    id: null,
                    module_code: null,
                    value: {},
                },
                form: {
                    id: null,
                    module_code: null,
                    value: {},
                },
            }
        },
        methods: {
            addModule() {
                this.dialog = true;
                this.reset();
            },
            create(module) {
                this.reset();
                this.moduleName = module.name;
                this.form.module_code = module.code;
                for (let i in module.attributes) {
                    let attribute = module.attributes[i];
                    this.$set(this.form.value, attribute.code, attribute.multiLanguage ? {} : null);
                }
                this.attributes = automata.helper.cloneObject(module.attributes);
            },
            editModule(item) {
                this.dialog = true;
                let module = _.find(this.modules, {'code': item.module_code});
                this.moduleName = module.name;
                for (let i in module.attributes) {
                    let attribute = module.attributes[i];
                    let value = item.value[attribute.code] || null;
                    if (value && attribute.multiLanguage === false && automata.helper.isObject(value)) {
                        item.value[attribute.code] = null;
                    }
                    if (value && attribute.multiValue === false && Array.isArray(value)) {
                        item.value[attribute.code] = value[0] || null;
                    }
                    if (value === null && attribute.multiLanguage) {
                        item.value[attribute.code] = {};
                    }
                }
                this.form = automata.helper.cloneObject(item);
                this.attributes = automata.helper.cloneObject(module.attributes);
            },
            fetchModules() {
                this.$http
                    .get('api/site-builder/modules/project')
                    .then(res => this.modules = res.data.data);
            },
            saveModule() {
                this.loading = true;
                let url = 'api/site-builder/modules/custom';
                if (this.form.id) {
                    url = `${url}/${this.form.id}`;
                }
                this.$http
                    .post(url, this.form)
                    .then(res => {
                        this.$notification.success(this.$t('message.operation_done'));
                        this.$refs.customModule.fetchDataSource();
                    })
                    .catch(error => automata.form.validation.check(this, error, {}, ['module_code']))
                    .finally(() => this.loading = false);
            },
            reset() {
                this.moduleName = null;
                this.attributes = [];
                this.form = automata.helper.cloneObject(this.emptyForm);
            }
        },
        mounted() {
            for (let locale in this.supportedLocales) {
                this.$set(this.emptyForm, locale, {name: null});
                this.$set(this.form, locale, {name: null});
            }
            this.fetchModules();
        }
    }
</script>

<style scoped>

</style>

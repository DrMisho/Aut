<template>
    <v-flex>
        <v-layout row>
            <v-flex md6>
                <template v-for="attribute in attributes">
                    <component v-if="!attribute.multilingual"
                               v-model="form.value[attribute.code]"
                               :attributes="form"
                               :title="attribute.name"
                               :info="attribute"
                               :is="`${attribute.component}`"
                    />
                    <component v-else v-for="(lang, locale) in supportedLocales"
                               :key="`${attribute.code}_${locale}`"
                               v-model="form.value[attribute.code][locale]"
                               :attributes="form"
                               :info="attribute"
                               :title="`${attribute.name} (${lang.native})`"
                               :locale="locale"
                               :is="`${attribute.type.component}`"
                    />
                </template>
            </v-flex>
        </v-layout>
    </v-flex>
</template>

<script>
const requireComponent = require.context(
    './InputTypes',
    false,
    /[A-Z]\w+InputType\.(vue|js)$/
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

export default {
    name: "SiteSettingsPreview",
    components,
    data() {
        return {
            attributes: [],
            supportedLocales: this.$automata.language.config.supportedLocales,
            form: {},
        };
    },
    methods: {
        fetchSettings() {
            this.$http
                .get('api/site-settings')
                .then(res => {

                })
                .catch()
                .finally();
        }
    },
    mounted() {
        this.fetchSettings();
    }
}
</script>

<style scoped>

</style>

<template>
    <v-layout>
        <v-flex xs12>
            <template v-for="(translator, key) in translators">
                <v-layout row wrap>
                    <template v-for="(info, local) in supportedLocales" >
                        <v-flex :key="`${local}_${key}`" md4 pa-1>
                            <v-card>
                                <v-card-title><h4>{{ translator[local]['name'] }} ({{ info.native }})</h4></v-card-title>
                                <v-divider></v-divider>
                                <v-list dense>
                                    <template v-for="(translated, translatedKey) in translator[local]['keys']">
                                        <v-list-tile :key="`${local}_${key}_${translatedKey}`">
                                            <v-list-tile-content>{{ translatedKey }}:</v-list-tile-content>
                                            <v-list-tile-content class="align-end"><v-text-field v-model="translator[local]['keys'][translatedKey]" :reverse="info.dir !== currentDir" /></v-list-tile-content>
                                        </v-list-tile>
                                    </template>
                                </v-list>
                                <v-divider></v-divider>
                                <v-card-actions>
                                    <v-spacer />
                                    <v-btn :disabled="disabled" color="primary" @click="save(local, key)">{{ $t('app.save') }}</v-btn>
                                </v-card-actions>
                            </v-card>
                        </v-flex>
                    </template>
                </v-layout>
                <v-divider class="my-2" />
            </template>
        </v-flex>
    </v-layout>
</template>

<script>
export default {
    name: "TranslationFiles",
    data() {
        return {
            translators: [],
            loading: false,
        }
    },
    computed: {
        supportedLocales() {
            return this.$automata.config.language.supportedLocales;
        },
        currentDir() {
            return this.$automata.dir;
        },
        disabled() {
            return this.loading;
        }
    },
    methods: {
        fetch() {
            this.$http
                .get('api/dashboard/translation')
                .then(res => {
                    console.log(res.data);
                    this.translators = res.data;
                });
        },
        save(local, translator) {
            console.log(local, translator);
            this.loading = true;
            this.$http
                .put(`api/dashboard/translation`, {local, translator, keys: this.translators[translator][local]['keys']})
                .then(res => this.$notification.success(this.$t('message.done_successfully')))
                .catch(error => this.$automata.form.validation.check(this, error))
                .finally(() => this.loading = false);
        },
    },
    mounted() {
        this.fetch();
    }
}
</script>

<style scoped>

</style>

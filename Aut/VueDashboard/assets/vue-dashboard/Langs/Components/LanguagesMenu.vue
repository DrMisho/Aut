<template>
    <v-menu offset-y>
        <v-btn slot="activator" color="secondary" dark>
            {{ currentLocale.native }}
        </v-btn>
        <v-list>
            <v-list-tile v-for="(language, locale) in supportedLocales" :key="locale" @click="href(locale)">
                <v-list-tile-title >{{ language.native }}</v-list-tile-title>
            </v-list-tile>
        </v-list>
    </v-menu>
</template>

<script>
    export default {
        name: "LanguagesMenu",
        data(){
            return {

            }
        },
        computed:{
            currentLocaleCode() {
                return this.$automata.config.language.locale;
            },
            currentLocale() {
                return this.supportedLocales[this.currentLocaleCode];
            },
            supportedLocales() {
                return this.$automata.config.language.supportedLocales;
            },
            hideDefault() {
                return this.$automata.config.language.hideDefault;
            },
            defaultLocale() {
                return this.$automata.config.language.defaultLocale;
            },
        },
        methods:{
            href(locale) {
                if (locale === this.currentLocaleCode) {
                    return;
                }

                let currentUrl = this.$route.fullPath;
                let url = '';
                if(locale === this.defaultLocale && this.hideDefault){
                    url = currentUrl.replace('/', '');
                } else {
                    url = `${locale}${currentUrl}`;
                }

                window.location = url;
            }
        }
    }
</script>

<style scoped>

</style>

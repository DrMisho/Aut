<template>
    <v-content :style="{backgroundImage: background, backgroundSize: 'cover'}">
        <v-container fluid fill-height>
            <v-layout align-center justify-center>
                <v-flex xs12 sm8 md7>
                    <v-card class="elevation-12">
                        <v-layout row wrap align-center justify-center :style="{backgroundImage: backgroundPattern, backgroundRepeat: 'repeat'}">
                            <v-flex md12>
                                <v-toolbar dark color="primary">
                                    <v-toolbar-title>{{ $t(`app.${message}`) }}.</v-toolbar-title>
                                    <v-spacer></v-spacer>
                                    <language-menu></language-menu>
                                </v-toolbar>
                            </v-flex>
                            <v-flex xs5 class="hidden-sm-and-down text-xs-center pa-3">
                                <v-img :src="logo" :aspect-ratio="logoAspectRatio" contain></v-img>
                                <h2 v-if="motto" :class="{'headline': isAr}">{{ motto }}</h2>
                            </v-flex>
                            <v-flex md7>
                                <v-fade-transition leave-absolute>
                                    <router-view />
                                </v-fade-transition>
                            </v-flex>
                        </v-layout>
                    </v-card>
                </v-flex>
            </v-layout>
        </v-container>
    </v-content>
</template>

<script>
    import LanguageMenu from '../../Langs/Components/LanguagesMenu';

    export default {
        name: "AuthLayout",
        components:{LanguageMenu},
        data(){
            return {
                message: '',
            }
        },
        computed: {
            isAr() {
                return this.$automata.config.language.locale === 'ar';
            },
            motto() {
                if (!this.$automata.config.motto) {
                    return this.$automata.config.motto;
                }

                if (this.$automata.config.motto.includes('.')) {
                    return this.$t(this.$automata.config.motto);
                }

                return this.$automata.config.motto;
            },
            background() {
                if (this.$automata.config.background) {
                    return `url('${this.$automata.config.background}')`;
                }
                return false;
            },
            backgroundPattern() {
                if (this.$automata.config.pattern.background) {
                    return `url('${this.$automata.config.pattern.background}')`;
                }
                return false;
            },
            logo() {
                if (!this.$automata.config.logo.src) {
                    return undefined;
                }
                return this.$automata.config.logo.src.replace('{locale}', this.$automata.config.language.locale);
            },
            logoAspectRatio() {
                return this.$automata.config.logo.aspectRatio;
            },
        },
        beforeRouteUpdate(to, from, next) {
            this.message = to.meta.message;
            next();
        },
        mounted() {
            this.message = this.$route.meta.message;
            this.$store.dispatch('auth/loggedIn', false);
        }
    }
</script>

<style scoped>

</style>

<template>
    <v-footer dark fixed height="26" style="min-height: 26px">
        <v-card class="flex" flat tile>
            <v-card-actions class="grey darken-3 justify-center caption py-1">
                <span v-html="$t('app.copyright')"></span><span v-if="privacyLink">&nbsp;&nbsp; . &nbsp;&nbsp;<router-link :to="{name: 'privacy'}" class="primary--text text--lighten-4">{{ $t('app.privacy_and_terms') }}</router-link></span>
            </v-card-actions>
        </v-card>
    </v-footer>
</template>

<script>
export default {
    name: "LFooter",
    data() {
        return {

        }
    },
    computed: {
        privacyLink() {
            return this.$automata.config.privacy_link;
        }
    }
}
</script>

<style scoped>

</style>

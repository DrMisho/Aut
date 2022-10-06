<template>
    <v-dialog v-model="showDialog" fullscreen hide-overlay transition="dialog-bottom-transition">
        <v-card >
            <v-toolbar dark color="primary" fixed>
                <v-btn icon dark @click="showDialog = false">
                    <v-icon>close</v-icon>
                </v-btn>
                <v-toolbar-title>{{ dialogTitle }}</v-toolbar-title>
                <v-spacer />
                <v-toolbar-items>
                    <v-btn dark flat @click="save" :loading="loading">{{ $t('app.save') }}</v-btn>
                </v-toolbar-items>
            </v-toolbar>
            <v-card-text>
                <v-container class="mt-5">
                    <profile-organization-form ref="organization" :loading.sync="loading" :with-user-account="withUserAccount" :elevation="0" @saved="saved" />
                </v-container>
            </v-card-text>
        </v-card>
    </v-dialog>
</template>

<script>
import ProfileOrganizationForm from "./OrganizationProfileForm";
export default {
    name: "OrganizationProfileDialog",
    components: {ProfileOrganizationForm},
    props: {
        dialog: {
            default: false,
        },
        withUserAccount: {
            type: Boolean,
            default: false,
        },
    },
    data() {
        return {
            loading: false,
            showDialog: this.dialog,
            username: null,
        };
    },
    computed: {
        dialogTitle() {
            if (this.username) {
                return this.username;
            }
            return this.$t('app.add');
        },
    },
    methods: {
        save() {
            this.$refs.organization.save();
        },
        saved() {
            this.showDialog = false;
            this.$emit('saved');
        },
        clear() {
            this.username = null;
            this.$refs.organization.clear();
        },
        init(item) {
            this.username = item.username;
            this.$refs.organization.init(item);
        }
    },
    watch: {
        dialog: {
            immediate: true,
            handler(newval) {
                this.showDialog = newval;
            }
        },
        showDialog: {
            handler(newval) {
                this.$emit('update:dialog', newval);
            }
        },
    },
}
</script>

<style scoped>

</style>

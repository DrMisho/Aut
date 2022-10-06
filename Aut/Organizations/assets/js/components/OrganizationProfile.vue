<template>
    <v-flex shrink>
        <v-container>
            <profile-organization-form :loading.sync="loading" ref="organization" :elevation="null" @saved="saved" @infoFetched="infoFetched"/>
        </v-container>
    </v-flex>
</template>

<script>
import ProfileOrganizationForm from "./OrganizationProfileForm";
export default {
    name: "OrganizationProfile",
    components: {ProfileOrganizationForm},
    data() {
        return {
            dialog: false,
            withUserAccount: false,
            loadingProfile: false,
            loading: false,
        };
    },
    computed: {
        /*loading: {
            get() {
                return this.loadingProfile;
            },
            set(newval) {
                this.loadingProfile = newval || this.loadingProfile;
            }
        }*/
    },
    methods: {
        addOrganization() {
            this.dialog = true;
            this.withUserAccount = true;
        },
        editOrganization(item) {
            this.dialog = true;
            this.withUserAccount = false;
        },
        saved() {
            this.loadingProfile = false;
        },
        fetch() {
            this.loadingProfile = true;
            this.$http.get('api/organizations/profile').then(res => {
                let org = this.$automata.helper.cloneObject(res.data.data);
                delete org.contact;
                let profile = {
                    id: true,
                    organization: org,
                    contact: res.data.data.contact,
                    socialNetworks: res.data.data.socialNetworks,
                };
                this.$refs.organization.init(profile);
            }).finally(() => this.loadingProfile = false);
        },
        infoFetched() {
            this.fetch();
        }
    },
}
</script>

<style scoped>

</style>

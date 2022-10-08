<template>
    <v-flex shrink>
        <data-table
            source="organizations"
            ref="organizations"
            @editOrganization="editOrganization"
            @addOrganization="addOrganization"
        />
        <organization-profile-dialog ref="organization" :dialog.sync="dialog" :with-user-account="withUserAccount" @saved="saved"/>
    </v-flex>
</template>

<script>
import OrganizationProfileDialog from "./OrganizationProfileDialog";
export default {
    name: "Organizations",
    components: {OrganizationProfileDialog},
    data() {
        return {
            dialog: false,
            withUserAccount: false,
        };
    },
    methods: {
        addOrganization() {
            this.dialog = true;
            this.withUserAccount = true;
            this.$refs.organization.clear();
        },
        editOrganization(item) {
            this.dialog = true;
            this.withUserAccount = false;
            this.$refs.organization.init(item);
        },
        saved() {
            this.$refs.organizations.fetchDataSource();
        }
    }
}
</script>

<style scoped>

</style>

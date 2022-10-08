<template>
    <l-privacy>

    </l-privacy>
</template>

<script>
import LPrivacy from "../../../../../Aut/VueDashboard/assets/vue-dashboard/Authentication/Components/LPrivacy";

export default {
    name: "Privacy",
    components: {LPrivacy},
    data() {
        return {

        }
    },
    computed: {
        locale() {
            return this.$automata.config.language.locale;
        }
    }
}
</script>

<style scoped>

</style>

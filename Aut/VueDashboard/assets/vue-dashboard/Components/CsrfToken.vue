<template>
    <v-text-field v-show="false"
            name="_token"
            type="hidden"
            v-model="csrfToken"
    ></v-text-field>
</template>

<script>
    export default {
        name: "CsrfToken",
        data() {
            return {
                csrfToken: automata.helper.csrfToken,
            }
        }
    }
</script>

<style scoped>

</style>
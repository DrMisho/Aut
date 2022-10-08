<template>
    <v-dialog v-model="dialog" :width="width" scrollable>
        <template v-slot:activator="{ on }">
            <slot :on="on"></slot>
        </template>
        <v-card>
            <v-card-text class="pa-0">
                <data-table ref="table" :source="source" silent-route />
            </v-card-text>
        </v-card>
    </v-dialog>
</template>

<script>
    export default {
        name: "DataTableBtn",
        props: {
            source: {},
            width: {},
            fullscreen: {},
        },
        data() {
            return {
                dialog: false,
            };
        },
        watch: {
            dialog(newval) {
                if (newval) {
                    this.$refs.table.reFetch({user_id: 1});
                }
            }
        }
    }
</script>

<style scoped>

</style>
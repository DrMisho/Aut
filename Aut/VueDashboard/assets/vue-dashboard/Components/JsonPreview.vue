<template>
    <v-dialog v-model="dialog" :width="width">
        <template v-slot:activator="{ on }">
            <slot name="activator" :on="on" :json="json">
                <v-btn flat v-on="on">
                    <v-icon v-if="!showPath">fas fa-code</v-icon>
                    {{ showPathValue }}
                </v-btn>
            </slot>
        </template>
        <v-card>
            <code v-text="json" style="width:100%; direction:ltr;"></code>
        </v-card>
    </v-dialog>
</template>

<script>
    export default {
        name: "JsonPreview",
        props: {
            json: {
                default() {
                    return {};
                }
            },
            showPath: {
                default: null,
            },
            width: {
                default: null
            }
        },
        data() {
            return {
                dialog: false,
            };
        },
        computed: {
            showPathValue() {
                if (!this.showPath) {
                    return null;
                }
                return JSPath.apply(this.showPath, this.json);
            }
        }
    }
</script>

<style scoped>

</style>
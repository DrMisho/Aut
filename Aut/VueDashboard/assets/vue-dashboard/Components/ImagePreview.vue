<template>
    <v-dialog v-model="dialog" :width="usedWidth" style="display: block">
        <template v-slot:activator="{ on }">
            <slot name="activator" :on="on" :src="src">
                <v-avatar class="elevation-4 hand" v-on="on" v-ripple>
                    <v-img :src="src" />
                </v-avatar>
            </slot>
        </template>
        <v-card >
            <v-img @dblclick.left.native="large" :src="src" />
        </v-card>
    </v-dialog>
</template>

<script>
    export default {
        name: "ImagePreview",
        props: {
            src: {
                type: String,
                required: true,
            },
            thump: {
                type: String,
                default: null,
            },
            width: {
                default: null,
            }
        },
        data() {
            return {
                dialog: false,
                baseWidth: null,
                usedWidth: this.width,
            }
        },
        methods: {
            large() {
                if (this.usedWidth == null && this.baseWidth != null) {
                    this.usedWidth = this.baseWidth;
                    this.baseWidth = null;
                } else if (this.usedWidth != null && this.baseWidth == null) {
                    this.baseWidth = this.usedWidth;
                    this.usedWidth = null;
                }
            }
        },
        watch: {
            width() {
                this.usedWidth = this.width;
            }
        }
    }
</script>

<style scoped>

</style>
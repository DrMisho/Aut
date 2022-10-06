<template>
    <v-flex v-bind="attr">
        <v-btn @click="loading = true" :loading="loading" tag="a" :href="href" :color="color" dark block><v-icon :right="rtl" :left="ltr">{{ icon }}</v-icon> <slot></slot></v-btn>
    </v-flex>
</template>

<script>
    export default {
        name: "SocialBtn",
        props: {
            color: {},
            attribute: {
                default() {
                    return {
                        xs12: true,
                        md6: true,
                    }
                }
            },
            icon: {},
            url: {},
        },
        data() {
            return {
                loading: false,
            }
        },
        computed: {
            rtl() {
                return this.$automata.isRtl;
            },
            ltr() {
                return !this.$automata.isRtl;
            },
            attr() {
                if (typeof this.attribute === "boolean") {
                    return {
                        xs12: true,
                        md6: true,
                    }
                }
                return this.attribute;
            },
            href() {
                return this.$automata.helper.localizeUrl(this.url);
            }
        }
    }
</script>

<style scoped>

</style>

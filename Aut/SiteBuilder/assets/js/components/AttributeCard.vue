<template>
    <v-card>
        <v-card-title primary-title>
            <div style="width: 100%;">
                <div class="headline">{{ attribute.code }}</div>
                <span class="grey--text">{{ attribute.projects.join(', ') }}</span>
            </div>
        </v-card-title>
        <v-divider class="mx-0" />
        <v-card-actions>
            <v-spacer></v-spacer>
            <v-btn icon @click="show = !show">
                <v-icon>{{ show ? 'keyboard_arrow_up' : 'keyboard_arrow_down' }}</v-icon>
            </v-btn>
        </v-card-actions>
        <v-slide-y-transition>
            <v-card-text v-show="show">
                <code v-html="attribute.json" style="width: 100%; direction: ltr;"></code>
            </v-card-text>
        </v-slide-y-transition>
    </v-card>
</template>

<script>
    export default {
        name: "AttributeCard",
        props: {
            attribute: {}
        },
        data() {
            return {
                show: false,
            }
        }
    }
</script>

<style scoped>

</style>
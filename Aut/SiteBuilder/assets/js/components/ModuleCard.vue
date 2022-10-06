<template>
    <v-card>
        <v-card-title primary-title>
            <div style="width: 100%;">
                <div class="headline">{{ module.code }}</div>
                <div class="grey--text">{{ module.projects.join(', ') }}</div>
                <div class="grey--text my-3">
                    <v-chip v-for="attribute in module.attributes" :key="attribute.code">{{ attribute.code }}</v-chip>
                </div>
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
                <code v-html="module.json" style="width: 100%; direction: ltr;"></code>
            </v-card-text>
        </v-slide-y-transition>
    </v-card>
</template>

<script>
    export default {
        name: "ModuleCard",
        props: {
            module: {}
        },
        data() {
            return {
                show: false,
                lodash: _,
            }
        }
    }
</script>

<style scoped>

</style>
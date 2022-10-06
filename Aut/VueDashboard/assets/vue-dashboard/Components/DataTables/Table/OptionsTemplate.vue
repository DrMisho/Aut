<template>
    <span v-if="template.type === 'string'" v-html="options.join(template.separator)"></span>
    <ul v-else-if="template.type === 'ul'" :style="{listStyleType: template.style}">
        <li v-for="(option, i) in options" :key="i" v-html="option"></li>
    </ul>
    <ol v-else-if="template.type === 'ol'" :style="{listStyleType: template.style}">
        <li v-for="(option, i) in options" :key="i" v-html="option"></li>
    </ol>
    <v-container v-else-if="template.type === 'chips'" fluid class="pa-0">
        <v-layout row wrap>
            <v-flex v-for="(option, i) in options" :key="i">
                <div class="text-xs-center">
                    <v-chip small>{{ option }}</v-chip>
                </div>
            </v-flex>
        </v-layout>
    </v-container>
</template>

<script>
    export default {
        name: "OptionsTemplate",
        props: {
            template: {
                default() {
                    return {
                        type: 'string',
                        separator: ', ',
                        style: null,
                    };
                }
            },
            items: {
                type: [String, Array],
                default: [],
            }
        },
        computed: {
            options() {
                if (typeof this.items == 'string') {
                    return this.items.split(',');
                }
                return this.items;
            }
        },
    }
</script>

<style scoped>

</style>
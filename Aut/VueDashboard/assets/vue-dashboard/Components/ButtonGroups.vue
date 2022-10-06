<template>
    <div class="mb-3">
        <p class="mb-1" v-if="label">{{ label }}</p>
        <v-btn-toggle v-model="values" :multiple="multiple" :mandatory="mandatory">
            <template v-for="option in options">
                <v-btn flat :value="option[itemValue]" :color="color">
                    {{ option[itemText] }}
                </v-btn>
            </template>
        </v-btn-toggle>
    </div>
</template>

<script>
    export default {
        name: "ButtonGroups",
        props: {
            options: {
                type: [Object, Array]
            },
            label: {
                type: String,
                default: null
            },
            color: {
                type: String,
                default: null
            },
            itemText: {
                type: String,
                default: 'text'
            },
            itemValue: {
                type: String,
                default: 'value'
            },
            value: {
                default: null
            },
            multiple: {
                type: Boolean,
                default: false
            },
            mandatory: {
                type: Boolean,
                default: false
            },
        },
        data() {
            return {
                values: this.value,
            }
        },
        watch: {
            value() {
                this.values = this.value;
            },
            values() {
                this.$emit('input', this.values);
            }
        },
        methods: {}
    }
</script>

<style scoped>

</style>
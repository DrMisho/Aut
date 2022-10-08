<template>
    <v-text-field
        v-on="$listeners"
        v-bind="$attrs"
        v-model="inputValue"
    >
        <template v-for="(index, name) in $scopedSlots" v-slot:[name]="data">
            <slot :name="name" v-bind="data"></slot>
        </template>
    </v-text-field>
</template>

<script>
    export default {
        name: "SlugInput",
        props: {
            value: {},
        },
        data() {
            return {
                inputValue: this.value,
            };
        },
        methods: {
            updateValue() {
                if (this.inputValue) {
                    this.inputValue = automata.helper.slugify(this.inputValue);
                }
                this.$emit('input', this.inputValue);
            }
        },
        watch: {
            value: {
                immediate: true,
                handler(newval) {
                    this.inputValue = newval;
                }
            },
            inputValue() {
                this.updateValue();
            }
        }
    }
</script>

<style scoped>

</style>

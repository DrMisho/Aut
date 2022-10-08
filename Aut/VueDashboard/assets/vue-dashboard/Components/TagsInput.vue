<template>
    <v-combobox
        v-on="$listeners"
        v-bind="$attrs"
        v-model="inputValue"
        multiple
        deletable-chips
        :append-icon="null"
    >
        <template v-for="(index, name) in $scopedSlots" v-slot:[name]="data">
            <slot :name="name" v-bind="data"></slot>
        </template>
    </v-combobox>
</template>

<script>
export default {
    name: "TagsInput",
    props: {
        value: {
            default: null,
        },
    },
    data() {
        return {
            inputValue: null,
        };
    },
    methods: {
        updateValue(newval) {
            if (!newval) {
                this.inputValue = [];
            } else if (typeof newval === "string") {
                this.inputValue = newval.split(',');
            } else {
                this.inputValue = newval;
            }
        }
    },
    watch: {
        value: {
            immediate: true,
            handler(newval) {
                this.updateValue(newval);
            }
        },
        inputValue: {
            handler(newval) {
                this.$emit('input', newval);
            }
        }
    }
}
</script>

<style scoped>

</style>

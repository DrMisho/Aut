<template>
    <v-text-field
        v-on="$listeners"
        v-bind="$attrs"
        v-model="inputValue"
        :mask="`${maskPrefix} ## ###-####`"
        return-masked-value
        class="force-ltr"
        persistent-hint
        :hint="`ex: ${hintPrefix} 21 000-0000`"
    >
        <template v-for="(index, name) in $scopedSlots" v-slot:[name]="data">
            <slot :name="name" v-bind="data"></slot>
        </template>
    </v-text-field>
</template>

<script>
import config from "../Config/config";
export default {
    name: "PhoneInput",
    props: {
        value: {
            default: null,
        },
        prefix: {
            default() {
                return config.phone_prefix || '+963';
            },
        },
        selectPrefix: {
            default: false,
            type: Boolean,
        },
        prefixes: {
            default() {
                return [];
            },
            type: Array,
        },
    },
    data() {
        return {
            inputValue: this.value,
            emptyVal: `${this.prefix} `,
        };
    },
    computed: {
        hintPrefix() {
            if (!this.prefix) {
                return '+999';
            }
            return this.prefix;
        },
        maskPrefix() {
            if (!this.prefix) {
                return '+###';
            }
            return this.prefix;
        }
    },
    watch: {
        value: {
            immediate: true,
            handler(newval) {
                if (newval == null) {
                    this.inputValue = this.emptyVal;
                } else {
                    this.inputValue = newval;
                }
            }
        },
        inputValue: {
            handler(newval) {
                if (newval == this.emptyVal) {
                    this.$emit('input', null);
                } else {
                    this.$emit('input', newval);
                }
            }
        },
    }
}
</script>

<style scoped>

</style>

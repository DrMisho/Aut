<template>
    <v-text-field
        v-on="$listeners"
        v-bind="$attrs"
        v-model="inputValue"
        :mask="`${maskPrefix} ${format}`"
        return-masked-value
        class="force-ltr"
        persistent-hint
        :hint="`ex: ${hintPrefix} ${hintFormatted}`"
    >
        <template v-for="(index, name) in $scopedSlots" v-slot:[name]="data">
            <slot :name="name" v-bind="data"></slot>
        </template>
    </v-text-field>
</template>

<script>
    export default {
        name: "MobileInput",
        props: {
            value: {
                default: null,
            },
            prefix: {
                default() {
                    return this.phonePrefix || '+963';
                },
            },
            format: {
                default() {
                    return this.phoneFormat || '## ###-####';
                }
            }
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
            },
            hintFormatted() {
                return this.format.replaceAll('#', '0');
            },
            phonePrefix() {
                return this.$automata.config.phone_prefix;
            },
            phoneFormat() {
                return this.$automata.config.phone_format;
            },
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

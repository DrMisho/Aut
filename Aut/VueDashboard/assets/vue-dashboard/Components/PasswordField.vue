<template>
    <v-text-field
        v-on="$listeners"
        v-bind="$attrs"
        prepend-icon="fas fa-lock"
        :append-outer-icon="generate ? 'settings_backup_restore' : undefined"
        @click:append-outer="generatePassword"
        :append-icon="visibility"
        :type="fieldType"
        v-model="inputValue"
        @click:append="show = !show"
    >
        <template v-for="(index, name) in $scopedSlots" v-slot:[name]="data">
            <slot :name="name" v-bind="data"></slot>
        </template>
    </v-text-field>
</template>

<script>
    export default {
        name: "PasswordField",
        props: {
            generate: {
                type: Boolean,
                default: false,
            },
            value: {
                default: null
            },
        },
        data() {
            return {
                inputValue: this.value,
                show: false,
            }
        },
        computed: {
            visibility() {
                return this.show ? 'visibility_off' : 'visibility';
            },
            fieldType() {
                return this.show ? 'text' : 'password';
            }
        },
        methods: {
            updateValue() {
                this.$emit('input', this.inputValue);
            },
            generatePassword() {
                this.inputValue = automata.helper.generator.generate({
                    length: 10,
                    numbers: true,
                });
            }
        },
        watch: {
            value: {
                immediate: true,
                handler(val) {
                    this.inputValue = val;
                },
            },
            inputValue() {
                this.updateValue();
            }
        }
    }
</script>

<style scoped>

</style>

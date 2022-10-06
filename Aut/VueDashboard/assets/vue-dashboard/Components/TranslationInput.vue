<template>
    <div>
        <slot name="locales" :supportedLocales="supportedLocales" :value="inputValue">
            <template v-for="(locale, lang) in supportedLocales">
                <slot :locale="locale" :lang="lang" :value="inputValue" />
            </template>
        </slot>
    </div>
</template>

<script>
export default {
    name: "TranslationInput",
    props: {
        value: {
            type: Object,
            default() {
                return {};
            }
        },
        fields: {
            type: [String, Array, Object],
            require: true,
        },
    },
    data() {
        return {
            inputValue: {},
            supportedLocales: [],
        };
    },
    computed: {

    },
    watch: {
        value: {
            immediate: true,
            deep: true,
            handler(newval) {
                this.inputValue = newval;
            }
        },
        inputValue: {
            deep: true,
            handler() {
                this.$emit('input', this.inputValue);
            }
        }
    },
    methods: {
        init(fill) {
            let supportedLocales = this.$automata.config.language.supportedLocales;

            let fields = this.fields;
            if (typeof fields === 'string') {
                fields = [fields];
            }

            if (this.$automata.helper.isObject(fields)) {
                this.initFields(fields, supportedLocales, (local, field, key, fields) => {
                    this.$set(this.inputValue[local], key, (fill && fill[local]) ? fill[local][key] : field);
                });
            } else {
                this.initFields(fields, supportedLocales, (local, field, key, fields) => {
                    this.$set(this.inputValue[local], field, (fill && fill[local]) ? fill[local][field] : null)
                });
            }

            this.supportedLocales = supportedLocales;
        },
        initFields(fields, supportedLocales, setter) {
            for (let local in supportedLocales) {
                this.$set(this.inputValue, local, {});
                for (let key in fields) {
                    setter(local, fields[key], key, fields);
                }
            }
        },
    },
    mounted() {
        this.init();
    }
}
</script>

<style scoped>

</style>

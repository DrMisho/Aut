<script>
    export default {
        name: "TestComponent",
        props: {
            input: {
                default: 'span',
            },
            label: null,
            value: null,
            field: {},
            reverse: false,
            files: {
                type: Array,
                default: []
            },
        },
        render: function (createElement) {
            let self = this;
            return createElement(`${this.input}`, {
                props: {
                    label: self.label,
                    value: self.value,
                    files: self.files,
                    field: self.field,
                    reverse: self.reverse,
                },
                domProps: {

                },
                nativeOn: {
                    input: function (value) {
                        console.log('input', arguments);
                        self.$emit('input', self.value);
                    },
                    change: function () {
                        console.log('change', arguments)
                    }
                }
            })
        },
    }
</script>

<style scoped>

</style>
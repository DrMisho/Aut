<template>
    <dynamic-container v-if="fields.length" :type="containerType" :dialog="dialog" @dialogClosed="dialogClosed" :properties="containerProperties">
        <v-form :id="`${source}_form`" ref="form">
            <v-layout row wrap>
                <v-flex>
                    <template v-for="field in fields" >
                        <dynamic-input
                                v-if="field.type"
                                :type="field.type"
                                :info="field"
                                :filter="filterOn[field.watch]"
                                v-model="form[field.value]"
                                :error-messages="validationMessage[field.value]"
                                v-show="showWhen[field.value]"
                        />
                    </template>
                </v-flex>
            </v-layout>
        </v-form>
        <template slot="buttons">
            <v-btn color="primary" :disabled="disableSave" :loading="loading" @click="save">{{ $t('app.save') }}</v-btn>
        </template>
        <confirm :opened="confirm" :data="destroyData"  @canceled="confirm = false; destroyData = null" @confirmed="destroy"/>
    </dynamic-container>
</template>

<script>
    import DynamicContainer from './Elements/DynamicContainer';
    import DynamicInput from './Elements/DynamicInput';

    export default {
        name: "Form",
        components: {DynamicInput, DynamicContainer},
        props: {
            source: {
                type: String,
                required: true,
            },
            dialog: {
                type: Boolean,
                default: false,
            },
            disableSave: {
                type: Boolean,
                default: false,
            }
        },
        data() {
            return {
                primaryKey: 'id',
                loading: false,
                confirm: false,
                destroyData: null,
                fields: [],
                form: {},
                emptyForm: {},
                validationMessage: {},
                showWhen: {},
                filterOn: {},
                containerType: 'normal',
                containerProperties: {},
            }
        },
        computed: {
            url(){
                return `api/form/${this.source}`;
            },
        },
        watch: {
            form: {
                handler() {
                    this.initShowWhen();
                    this.initFilterOn();
                },
                deep: true,
            }
        },
        mounted() {
            this.fetchFields();
        },
        methods: {
            fetchFields() {
                this.$http
                    .get(`${this.url}/fields`)
                    .then(res => {
                        this.fields = this.initFields(res.data.data);
                        this.initEmptyForm();
                        this.initShowWhen();
                        this.initFilterOn();
                    });
            },
            initEmptyForm() {
                for (let i in this.fields) {
                    let field = this.fields[i];
                    if (field.type === 'switch') {
                        this.emptyForm[field.value] = field.fixedValue || false;
                    } else{
                        this.emptyForm[field.value] = field.fixedValue || null;
                    }
                    this.validationMessage[field.value] = null;
                }
                this.form = this.cloneObject(this.emptyForm);
            },
            initFields(fields) {
                if (fields.length === 1 && fields[0].type === 'dialog') {
                    let inputs = fields[0].inputs;
                    delete fields[0].inputs;
                    this.containerType = 'dialog';
                    this.containerProperties = fields[0];
                    return inputs;
                }
                return fields;
            },
            initShowWhen() {
                for (let i in this.fields) {
                    let field = this.fields[i];
                    if (!field.hasOwnProperty('showWhen')) {
                        this.showWhen[field.value] = true;
                        continue;
                    }
                    this.showWhen[field.value] = this.evaluateCondition(this.form[field.showWhen.field], field.showWhen.condition, field.showWhen.value);
                }
            },
            initFilterOn() {
                for (let i in this.fields) {
                    let field = this.fields[i];
                    if (field.hasOwnProperty('watch') && field.watch) {
                        this.filterOn[field.watch] = this.form[field.watch];
                    }
                }
            },
            evaluateCondition(first, condition, second) {
                switch (condition) {
                    case '=':
                    case '==':
                    case '===':
                        return first == second;

                    case '<>':
                    case '!=':
                    case '!==':
                        return first != second;

                    case '>':
                        return first > second;
                    case '>=':
                        return first >= second;

                    case '<':
                        return first < second;
                    case '<=':
                        return first <= second;

                    case 'null':
                        return first == null;

                    case 'notnull':
                        return first != null;

                    default:
                        return false;
                }
            },
            dialogClosed() {
                this.$emit('dialogClosed');
            },
            sourceChanged() {
                this.$emit('sourceChanged');
            },
            save() {
                automata.form.validation.reset(this.validationMessage);
                if (!this.$refs.form.validate()) {
                    return ;
                }
                this.loading = true;
                if (this.form[this.primaryKey]) {
                    this.update();
                } else {
                    this.store();
                }
            },
            store() {
                this.$http
                    .post(this.url, this.form)
                    .then(res => {
                        this.$notification.success(this.$t('message.operation_done'));
                        this.dialogClosed();
                        this.sourceChanged();
                        this.$emit('stored');
                    })
                    .catch(error => automata.form.validation.check(this, error, this.validationMessage))
                    .finally(() => this.loading = false);
            },
            update() {
                this.$http
                    .put(`${this.url}/${this.form[this.primaryKey]}`, this.form)
                    .then(res => {
                        this.$notification.success(this.$t('message.operation_done'));
                        this.dialogClosed();
                        this.sourceChanged();
                        this.$emit('updated');
                    })
                    .catch(error => automata.form.validation.check(this, error, this.validationMessage))
                    .finally(() => this.loading = false);
            },
            delete(id) {
                this.destroyData = id;
                this.confirm = true;
            },
            destroy() {
                this.confirm = false;
                if (!this.destroyData) {
                    return;
                }
                this.loading = true;
                return this.$http
                    .delete(`${this.url}/${this.destroyData}`)
                    .then(res => {
                        this.$notification.success(this.$t('message.operation_done'));
                        this.loading = false;
                        this.sourceChanged();
                        this.$emit('deleted');
                    })
                    .finally(() => this.destroyData = null);
            },
            fetchData() {
                return this.$http.get(this.url);
            },
            setForm(item) {
                if (item) {
                    this.form = item;
                } else {
                    this.form = this.cloneObject(this.emptyForm);
                }
            },
            cloneObject($obj) {
                return JSON.parse(JSON.stringify($obj));
            },
        }
    }
</script>

<style scoped>

</style>
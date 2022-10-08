<template>
    <v-tooltip v-if="action.tooltip" :key="action.name" top>
        <template v-slot:activator="{ on }">
            <v-btn v-if="showWhen"
                   :disabled="disabled"
                   :small="!!action.small"
                   :flat="action.style === 'flat'"
                   :icon="!!action.icon"
                   :color="action.color"
                   :id="action.id"
                   :class="action.classes"
                   v-on="on"
                   v-bind="action.attributes"
                   :to="getLinkTo(item, action)"
                   @click="actionClicked">
                <v-icon v-if="action.icon" :small="smallIcon">{{ action.icon }}</v-icon>
            </v-btn>
        </template>
        <span>{{ action.tooltip }}</span>
    </v-tooltip>

    <v-btn v-else-if="showWhen"
           :small="!!action.small"
           :disabled="disabled"
           :flat="action.style === 'flat'"
           :icon="!!action.icon"
           :color="action.color"
           :id="action.id"
           :class="action.classes"
           v-bind="action.attributes"
           :to="getLinkTo(item, action)"
           @click="actionClicked">
        <v-icon v-if="action.icon" :small="smallIcon">{{ action.icon }}</v-icon>
    </v-btn>
</template>

<script>
    export default {
        name: "ActionButton",
        props: {
            disabled: {
                default: false
            },
            action: {},
            item: {},
            head: {},
        },
        data() {
            return {};
        },
        computed: {
            showWhen() {
                if (!this.action.hasOwnProperty('showWhen')) {
                    return true;
                }
                return this.evaluateCondition(this.item[this.action.showWhen.field], this.action.showWhen.condition, this.action.showWhen.value)
            },
            smallIcon() {
                if (this.action.icon.startsWith('fa')) {
                    return !!this.action.small;
                }
                return false;
            }
        },
        methods: {
            getLinkTo(item, action) {
                if (action.hasOwnProperty('to')) {
                    let to = this.cloneObject(action.to);
                    for(let key in to.params){
                        if (to.params[key].match('^:')) {
                            to.params[key] = item[to.params[key].replace(':', '')];
                        }
                    }
                    return to;
                }
                return null;
            },
            actionClicked() {
                if (this.action.emit === null && this.action.event === null) {
                    return;
                }
                if (!this.action.hasOwnProperty('to')) {
                    this.$emit('click');
                }
            },
            cloneObject($obj) {
                return JSON.parse(JSON.stringify($obj));
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
        }
    }
</script>

<style scoped>

</style>

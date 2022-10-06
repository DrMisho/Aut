<template>
<v-autocomplete v-model="autocomplete_value"
    :hint="feature.hint"
    

 :items="items_after_filter" :disabled="disabled" box chips color="blue-grey lighten-2" :label="feature.name" item-text="name" item-value="id" multiple>
    <template v-slot:selection="data">
        <v-chip :selected="data.selected" close class="chip--select-multi" @input="removeAutocomplate(data.item)">
            {{ data.item.value }}
        </v-chip>
    </template>
    <template v-slot:item="data">
        <template v-if="typeof data.item !== 'object'">
            <v-list-tile-content v-text="data.item"></v-list-tile-content>
        </template>
        <template v-else>
            <v-list-tile-content>
                <v-list-tile-title v-html="data.item.value"></v-list-tile-title>
                <v-list-tile-sub-title v-html="data.item.group"></v-list-tile-sub-title>
            </v-list-tile-content>
        </template>
    </template>
</v-autocomplete>
</template>

<script>
import Temp from './../../Class/Temp.js'
export default {
    name: 'att-autocomplete',
    props: ['feature', 'id'],
    data: function () {
        return {

            value: this.initialValue(),
            autocomplete_rule: [v => !!v || this.translate('required')],
            autocomplete_value: this.storeAutocomplete(),
            items_after_filter: this.filter(),
            disabled: true,

        }
    },
    watch: {
        autocomplete_value() {
            this.storeValue();
        },
        value() {
            this.$emit('input', this.value);
        },

    },
    methods: {

        translate(key) {
            return this.$t(`attributes.${key}`)
        },
        filter() {
            this.feature.items_after_filter;
        },
        applayFilter(type_code) {

        },
        storeAutocomplete() {
            if (this.feature.value) {
                return this.feature.value.value

            }
            return null;
        },
        initialValue() {
            let value = this.storeAutocomplete();
            let temp = new Temp();
            temp.setWithVal('value', value);
            temp.setWithVal('id', this.id);
            temp.setWithVal('type_code', 'autocomplate');
            temp.setWithVal('feature_id', this.feature.id);
            this.value = temp;
            this.feature.value = temp;

            return temp;
        },
        storeValue() {
            let temp = new Temp();
            temp.setWithVal('value', this.autocomplete_value);
            temp.setWithVal('id', this.id);
            temp.setWithVal('type_code', 'autocomplate');
            temp.setWithVal('feature_id', this.feature.id);
            this.value = temp;
            this.feature.value = temp;

            return temp;
        },

    },
    created() {},
    mounted() {
        window.event.$on('feature_filter', (select_item) => {
            let field_filter_id = select_item.feature_id;
            let group_id = select_item.select_value;
            console.log('feature_filter in id', field_filter_id, group_id);

            if (this.feature.is_filter == field_filter_id) {
                let array = [];
                for (let item in this.feature.feature_options) {
                    let element = this.feature.feature_options[item];
                    if (element.group_id == group_id) {
                        array.push(element);
                    }
                }
                this.autocomplete_value = [];
                this.items_after_filter = array;
                this.disabled = false;
            }
        });
    }

}
</script>

<style scoped>

</style>

<template>
    <td v-if="head.type === 'text'" :class="[`${item[head.text_color]}--text`]" v-html="item[head.value]" :align="head.align"></td>
    <td v-else-if="head.type === 'label'" :class="[`${item[head.text_color]}--text`]" :align="head.align">{{ item[head.value] }}</td>
    <td v-else-if="head.type === 'password'" :class="[`${item[head.text_color]}--text`]" :align="head.align">{{ item[head.value] }}</td>
    <td v-else-if="head.type === 'phone'" :class="{'force-ltr': isRtl}" :align="head.align">{{ item[head.value] }}</td>
    <td v-else-if="head.type === 'mobile'"  :class="{'force-ltr': isRtl}" :align="head.align">{{ item[head.value] }}</td>
    <td v-else-if="head.type === 'chips_label'" style="text-align: center;"><v-chip color=" lighten-5" :class="[item[head.color]]" :text-color="item[head.color]" style="font-weight: bold;" :align="head.align">{{ item[head.value] }}</v-chip></td>
    <td v-else-if="head.type === 'money'" :class="[`${item[head.text_color]}--text`]" :align="head.align">{{ item[head.value] | money(head.symbol, head.precision) }}</td>
    <td v-else-if="head.type === 'icon'" style="text-align: center;" :align="head.align">
        <v-icon >{{ item[head.value] }}</v-icon>
    </td>
    <td v-else-if="head.type === 'color'" :align="head.align">
        <v-list-tile avatar>
            <v-list-tile-avatar>
                <v-avatar :color="item[head.value] || '#000000'" :size="20" />
            </v-list-tile-avatar>
            <v-list-tile-content v-if="!head.hideColorTextFromTable">
                <v-list-tile-sub-title>{{ item[head.value] || '#000000' }}</v-list-tile-sub-title>
            </v-list-tile-content>
        </v-list-tile>
    </td>
    <td v-else-if="head.type === 'number'" :align="head.align">{{ item[head.value] }}</td>
    <td v-else-if="head.type === 'order'" :align="head.align">{{ item[head.value] }}</td>
    <td v-else-if="head.type === 'url'" :align="head.align">
        <a :target="head.blank ? '_blank' : false" :download="(typeof head.download == 'string') ? item[head.download] : (head.download ? '' : false)" :href="item[head.value]">{{ item[head.url_label || head.value] }}</a>
    </td>
    <td v-else-if="head.type === 'email'" :align="head.align">
        <a :href="`mailto:${item[head.value]}`">{{ item[head.value] }}</a>
    </td>
    <td v-else-if="head.type === 'select'" :align="head.align">{{ item[head.relation || head.value] }}</td>
    <td v-else-if="head.type === 'autocomplete'" v-html="item[head.relation]" :align="head.align"></td>
    <td v-else-if="head.type === 'switch'" :align="head.align">
        <v-icon key="true" v-if="item[head.value]" :color="`success`">far fa-check-circle</v-icon>
        <v-icon key="false" v-else :color="`red`">far fa-times-circle</v-icon>
    </td>
    <td v-else-if="head.type === 'filepond'" :align="head.align">
        <image-preview v-if="head.file_type === 'file'" :src="filePath" width="500">
            <template v-slot:activator="{ on, src }">
                <v-card class="elevation-3 hand" v-on="on" v-ripple>
                    <object :data="src" :width="head.width" :height="head.height"></object>
                </v-card>
            </template>
        </image-preview>
        <image-preview v-if="head.file_type === 'image'" :src="filePath" width="500">
            <template v-slot:activator="{ on, src }">
                <v-card class="elevation-3 hand" v-on="on" v-ripple>
                    <v-img :src="src" :lazy-src="src || null">
                        <v-progress-circular slot="placeholder" indeterminate color="secondary"></v-progress-circular>
                    </v-img>
                </v-card>
            </template>
        </image-preview>
    </td>
    <td v-else-if="head.type === 'avatar'" :align="head.align">
        <image-preview :src="item[head.full_path] || 'images/user.png'" width="500">
            <template v-slot:activator="{ on, src }">
                <v-avatar class="elevation-4 hand" v-on="on" v-ripple>
                    <v-img :src="src" :lazy-src="src">
                        <v-layout slot="placeholder" fill-height align-center justify-center ma-0>
                            <v-progress-circular indeterminate color="secondary"></v-progress-circular>
                        </v-layout>
                    </v-img>
                </v-avatar>
            </template>
        </image-preview>
    </td>
    <td v-else-if="head.type === 'actions'" class="align-center justify-center layout px-0" :align="head.align">
        <template v-for="action in head.actions">
            <action-button
                    :disabled="loading"
                    :action="action"
                    :item="item"
                    :head="head"
                    @click="callEvent(action, item, head)"
            />
        </template>
    </td>
    <td v-else-if="head.type === 'multi_select'" :align="head.align">
        <options-template :template="head.optionsTemplate" :items="_().map(item[head.relation], head.optionText)"/>
    </td>
    <td v-else-if="head.type === 'tags'" :align="head.align">
        <options-template :template="head.optionsTemplate" :items="item[head.value]" />
    </td>
    <td v-else-if="head.type === 'geolocation'" :align="head.align">
        <geolocation-preview :geolocation="item[head.value]" width="700px">
            <template v-slot:activator="{ on, geolocation }">
                <v-btn v-on="on" flat>
                    {{ geolocation }}
                </v-btn>
            </template>
        </geolocation-preview>
    </td>
    <td v-else-if="head.type === 'json'" :align="head.align">
        <json-preview :json="item[head.value]" :show-path="head.jsPath" />
    </td>
    <td v-else-if="head.type === 'textarea'" v-text="textareaValue" :align="head.align"></td>
    <td v-else v-html="item[head.value]" :align="head.align"></td>
</template>

<script>
    import ActionButton from './ActionButton';
    import OptionsTemplate from "./OptionsTemplate";

    export default {
        components: {OptionsTemplate, ActionButton},
        name: "TableDynamicInput",
        props: {
            item: {},
            head: {},
            loading: false,
        },
        data() {
            return {
                isRtl: automata.isRtl,
            };
        },
        methods: {
            callEvent(action) {
                this.$emit('click', action, this.item, this.head);
            },
            _(){
                return _;
            }
        },
        computed: {
            filePath() {
                if (this.head.type !== 'filepond') {
                    return null;
                }
                if (this.head.multiple) {
                    return this.item[this.head.full_path][0] || '';
                }
                return this.item[this.head.full_path] || ''
            },
            textareaValue() {
				if (!this.item[this.head.value]) {
                    return null;
                }
                let value = this.item[this.head.value].split(' ');
                let length = value.length;
                value = value.splice(0, 4).join(' ');

                if (length > 4) {
                    value = value + ' ...';
                }

                return value;
            }
        }
    }
</script>

<style scoped>

</style>

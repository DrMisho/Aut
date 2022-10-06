<template>
    <v-container grid-list-md class="pa-0 pb-5">
        <v-subheader class="pa-0 mb-2">
            <slot name="add-btn">
                <v-btn v-if="add" @click="$emit('btnClicked')" small color="primary" fab dark>
                    <v-icon>fas fa-plus</v-icon>
                </v-btn>
            </slot>
            <h2 class="font-weight-thin text-truncate" :title="title">{{ title }}</h2>
            <v-spacer  />
            <v-btn v-if="!disableLimit" :disabled="items.length <= limit" @click="showAll = !showAll" flat small>{{ showAllTitle }}</v-btn>
        </v-subheader>
        <v-layout row wrap fill-height v-if="items.length && !loading">
            <slot v-for="(item, index) in items" :item="item" :index="index" v-if="(index < limit) || showAll">
                <h1>no content provided</h1>
            </slot>
        </v-layout>
        <v-layout align-center justify-center row fill-height v-else>
            <v-flex shrink v-if="loading" >
                <v-progress-circular :indeterminate="loading" color="secondary"/>
            </v-flex>
            <v-flex shrink v-if="!loading" @click="$emit('btnClicked')" class="hand">
                <v-img v-if="emptyStateSrc !== null" :aspect-ratio="emptyStateAspectRatio" contain :src="emptyStateSrc" />
                <v-subheader
                        class="text-xs-center secondary--text"
                        small
                >{{ noResult }}</v-subheader>
            </v-flex>
        </v-layout>
    </v-container>
</template>

<script>
    export default {
        name: "CardList",
        props: {
            title: {
                type: String,
                default: null,
            },
            items: {
                type: Array,
                default: [],
            },
            add: {
                type: Boolean,
                default: true,
            },
            limit: {
                type: Number,
                default: 4
            },
            disableLimit: {
                type: Boolean,
                default: false
            },
            loading:{
                type: Boolean,
                default: false,
            },
            noResult:{
                type: String,
                default: null,
            },
            emptyStateSrc: {
                type: String,
                default: null,
            },
            emptyStateAspectRatio: {
                type: [String, Number],
                default: undefined,
            }
        },
        computed:{
            showAllTitle() {
                return this.showAll ? this.$t('profiles.hide__') : this.$t('profiles.view_all__');
            },
        },
        data() {
            return {
                showAll: this.disableLimit,
            };
        },
    }
</script>

<style scoped>

</style>
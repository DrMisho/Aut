<template>
    <v-sheet class="module-container mb-3 grey lighten-3 elevation-4">
        <v-layout row wrap>
            <v-subheader class="px-2"> {{ info.name }}</v-subheader>
            <v-spacer />
            <v-subheader class="px-2">
                <!--<v-btn class="mx-0 move sortable-module" small icon>
                    <v-icon small>fas fa-arrows-alt</v-icon>
                </v-btn>-->
                <v-btn class="mx-0" small icon :disabled="index === 0" @click="$emit('up')">
                    <v-icon small>fas fa-arrow-up</v-icon>
                </v-btn>
                <v-btn class="mx-0" small icon :disabled="index === last" @click="$emit('down')">
                    <v-icon small>fas fa-arrow-down</v-icon>
                </v-btn>
                <confirm-btn btn-class="mx-0" small icon @confirmed="$emit('delete')">
                    <v-icon small>fas fa-times</v-icon>
                </confirm-btn>
                <v-btn v-if="info.module_info.has_children" class="mx-0" small icon @click="dialog = true">
                    <v-icon small>fas fa-plus</v-icon>
                </v-btn>
                <v-btn v-if="info.module_info.has_children" class="mx-0" small icon @click="show = !show">
                    <v-icon small>{{ show ? 'fas fa-angle-up' : 'fas fa-angle-down' }}</v-icon>
                </v-btn>
            </v-subheader>
        </v-layout>
        <v-divider/>
        <v-slide-y-transition>
        <v-layout v-if="info.module_info.has_children" v-show="show" row wrap fill-height>
            <v-flex xs12 style="min-height: 113px;max-height: 260px;overflow: auto;">
                <v-container grid-list-md class="ma-0 pa-1">
                    <v-layout row wrap fill-height :id="`modules-sortable-children-${index}`">
                        <v-flex md12 v-if="!children.length">
                            <v-img @click="dialog = true" class="hand ma-auto" width="25%" src="images/empty-states/custom_module.svg" :aspect-ratio="100/86"/>
                        </v-flex>
                        <v-flex v-for="(child, i) in children" :key="i" :class="[`xs` + ((typeof child.width === typeof undefined) ? 12 : child.width)]">
                            <v-card class="grey lighten-5">
                                <v-card-title class="pb-1 justify-center text-xs-center">
                                    <div>
                                        <h6 class="title">{{ child.name }}</h6>
                                        <div> {{ child.module_code }} </div>
                                    </div>
                                </v-card-title>
                                <v-card-actions class="pt-0 justify-center">
                                    <v-btn class="mx-0" small icon :disabled="i === 0" @click="movePrevious(i)">
                                        <v-icon small>fas fa-arrow-right</v-icon>
                                    </v-btn>
                                    <v-divider vertical />
                                    <!--<v-btn class="mx-0" small icon>
                                        <v-icon small>fas fa-forward</v-icon>
                                    </v-btn>-->
                                    <confirm-btn flat icon small btn-class="mx-0" color="red" @confirmed="removeModule(child, i)"><v-icon small>fas fa-trash</v-icon></confirm-btn>
                                    <v-divider vertical />
                                    <v-btn class="mx-0" small icon :disabled="i === children.length - 1" @click="moveNext(i)">
                                        <v-icon small>fas fa-arrow-left</v-icon>
                                    </v-btn>
                                </v-card-actions>
                            </v-card>
                        </v-flex>
                    </v-layout>
                </v-container>
            </v-flex>
        </v-layout>
        </v-slide-y-transition>

        <v-dialog v-model="dialog" max-width="700px" scrollable>
            <v-card>
                <v-toolbar dark color="primary">
                    <v-toolbar-title>{{ dialogTitle }}</v-toolbar-title>
                    <v-spacer />
                    <v-btn icon @click="dialog = false"><v-icon>close</v-icon></v-btn>
                </v-toolbar>
                <v-divider></v-divider>
                <v-card-text >
                    <v-container fluid grid-list-xl class="pa-0 ma-0">
                        <v-layout row wrap fill-height>
                            <v-flex xs12>
                                <v-text-field  placeholder="Type to search for module" clearable/>
                            </v-flex>
                            <v-flex xs4 v-for="module in modules" :key="module.id" v-if="module.module_info.is_child">
                                <v-card class="grey lighten-5">
                                    <v-img v-if="module.image_path" :src="module.image_path" aspect-ratio="2.75"></v-img>
                                    <v-card-title class="pb-1 justify-center text-xs-center">
                                        <div>
                                            <h6 class="title">{{ module.name }}</h6>
                                            <div> {{ module.module_code }} </div>
                                        </div>
                                    </v-card-title>
                                    <v-card-actions class="pt-0 justify-center">
                                        <v-btn flat color="primary" @click="selectCustomModule(module)">select</v-btn>
                                    </v-card-actions>
                                </v-card>
                            </v-flex>
                        </v-layout>
                    </v-container>
                </v-card-text>
                <v-divider></v-divider>
                <v-card-actions>
                    <v-spacer />
                    <v-btn flat @click="close">Close</v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog>
    </v-sheet>
</template>

<script>
    export default {
        name: "ModuleContainer",
        props: {
            value: {
                default() {
                    return [];
                }
            },
            modules: {},
            info: {},
            index: {},
            last: {},
        },
        computed: {
            dialogTitle() {
                return `Custom Module (${this.info.name})`;
            }
        },
        data() {
            return {
                dialog: false,
                show: false,
                children: [],
            };
        },
        methods: {
            selectCustomModule(customModule) {
                let m = automata.helper.cloneObject(customModule);
                m.custom_module_id = m.id;
                m.id = null;
                this.children.push(m);
            },
            movePrevious(index) {
                let module = this.children.splice(index, 1)[0];
                this.children.splice(index - 1, 0, module);
            },
            moveNext(index) {
                let module = this.children.splice(index, 1)[0];
                this.children.splice(index + 1, 0, module);
            },
            initSortableModules() {
                if (!this.info.has_children) {
                    return;
                }
                Sortable.create(document.getElementById(`modules-sortable-children-${this.index}`), {
                    animation: 150,
                    handle: '.sortable-children'
                });
            },
            removeModule(pageModule, index) {
                if (!pageModule.id) {
                    this.children.splice(index, 1);
                    return;
                }
                this.$http
                    .delete(`api/site-builder/page-builder/page/${pageModule.id}`)
                    .then(res => this.children.splice(index, 1));
            },
            close() {
                this.dialog = false;
            }
        },
        watch: {
            dialog(newval) {
                if (newval === false) {
                    setTimeout(() => {
                        document.getElementsByTagName('html')[0].classList.add('overflow-y-hidden');
                    }, 900);
                }
            },
            value: {
                immediate: true,
                handler(newval) {
                    this.children = newval || [];
                }
            },
            children(newval) {
                this.$emit('input', this.children);
            },
        },
        mounted() {
            this.initSortableModules();
        }
    }
</script>

<style scoped>

</style>

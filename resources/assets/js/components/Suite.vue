<template>
    <v-flex shrink>
        <data-table source="suite" @addSeo="openDialog" @addSuite="add_suite" @editSuite="edit" @deleteSuite="delete_suite"/>
        <seo v-model="dialog_seo" :buildable="buildable" :title="Title"/>
        <v-layout>
            <v-flex xs6 sm6 md6 offset-sm3>
                <v-dialog max-width="1000" v-model="dialog_add">
                    <v-card>
                        <v-card-title>
                            <span class="headline">Add Suite</span>
                        </v-card-title>
                        <v-card-text>
                            <v-container grid-list-md>
                                <v-layout wrap>
                                    <v-flex xs12>
                                        <v-text-field label="Suite Code" required v-model="form.suite_code"></v-text-field>
                                    </v-flex>
                                    <v-flex xs12>
                                        <v-text-field label="Suite Order" required v-model="form.show_order"></v-text-field>
                                    </v-flex>
                                    <v-flex xs12>
                                        <v-text-field label="Suite Name" required v-model="form.en.name"></v-text-field>
                                    </v-flex>
                                    <v-flex xs12>
                                        <v-text-field label="Suite Name (العربية)" required v-model="form.ar.name"></v-text-field>
                                    </v-flex>
                                    <v-flex xs12>
                                        <v-text-field label="Suite Long Name" required v-model="form.en.long_name"></v-text-field>
                                    </v-flex>
                                    <v-flex xs12>
                                        <v-text-field label="Suite Long Name (العربية)" required v-model="form.ar.long_name"></v-text-field>
                                    </v-flex>
                                    <v-flex xs12>
                                        <v-text-field label="Vision" required v-model="form.en.vision"></v-text-field>
                                    </v-flex>
                                    <v-flex xs12>
                                        <v-text-field label="Vision (العربية)" required v-model="form.ar.vision"></v-text-field>
                                    </v-flex>
                                    <v-flex>
                                        <v-select
                                            @change="append_solution"
                                            v-model="solution_value"
                                            :items="solution_items"
                                            box
                                            chips
                                            label="Solutions"
                                            multiple
                                        ></v-select>
                                    </v-flex>
                                    <v-flex>
                                        <v-select
                                            @change="append_module"
                                            v-model="module_value"
                                            :items="module_items"
                                            box
                                            chips
                                            label="Modules"
                                            multiple
                                        ></v-select>
                                    </v-flex>

                                    <v-flex xs12>
                                      <file-pond-input
                                          v-model="form.image_id"
                                          accepted-file-types="image/jpeg, image/png"
                                          :label="$t('app.upload_file')"
                                          :files="files"
                                          :uploader="uploader"
                                      />
                                    </v-flex>

                                </v-layout>
                            </v-container>
                            <small>*indicates required field</small>
                        </v-card-text>
                        <v-card-actions>
                            <v-spacer></v-spacer>
                            <v-btn color="blue darken-1" flat @click.prevent="dialog_add = false">Close</v-btn>
                            <v-btn color="blue darken-1" flat @click.prevent="addSuite()">Add</v-btn>
                        </v-card-actions>
                    </v-card>
                </v-dialog>
            </v-flex>
        </v-layout>

        <v-layout>
            <v-flex xs6 sm6 md6 offset-sm3>
                <v-dialog max-width="1000" v-model="dialog_edit">
                    <v-card>
                        <v-card-title>
                            <span class="headline">edit Suite</span>
                        </v-card-title>
                        <v-card-text>
                            <v-container grid-list-md>
                                <v-layout wrap>
                                    <v-flex xs12>
                                        <v-text-field label="Suite Code" required v-model="form.suite_code"></v-text-field>
                                    </v-flex>
                                    <v-flex xs12>
                                        <v-text-field label="Suite Order" required v-model="form.show_order"></v-text-field>
                                    </v-flex>
                                    <v-flex xs12>
                                        <v-text-field label="Suite Name" required v-model="form.en.name"></v-text-field>
                                    </v-flex>
                                    <v-flex xs12>
                                        <v-text-field label="Suite Name (العربية)" required v-model="form.ar.name"></v-text-field>
                                    </v-flex>
                                    <v-flex xs12>
                                        <v-text-field label="Suite Long Name" required v-model="form.en.long_name"></v-text-field>
                                    </v-flex>
                                    <v-flex xs12>
                                        <v-text-field label="Suite Long Name (العربية)" required v-model="form.ar.long_name"></v-text-field>
                                    </v-flex>
                                    <v-flex xs12>
                                        <v-text-field label="Vision" required v-model="form.en.vision"></v-text-field>
                                    </v-flex>
                                    <v-flex xs12>
                                        <v-text-field label="Vision (العربية)" required v-model="form.ar.vision"></v-text-field>
                                    </v-flex>
                                    <v-flex xs12>
                                        <v-select
                                            @change="append_solution"
                                            v-model="solution_value"
                                            :items="solution_items"
                                            box
                                            chips
                                            label="Solutions"
                                            multiple
                                        ></v-select>
                                    </v-flex>
                                    <v-flex xs12>
                                        <v-select
                                            @change="append_module"
                                            v-model="module_value"
                                            :items="module_items"
                                            box
                                            chips
                                            label="Modules"
                                            multiple
                                        ></v-select>
                                    </v-flex>

                                    <v-flex xs12>
                                      <file-pond-input
                                          v-model="form.image_id"
                                          accepted-file-types="image/jpeg, image/png"
                                          :label="$t('app.upload_file')"
                                          :files="files"
                                          :uploader="uploader"
                                      />
                                    </v-flex>

                                </v-layout>
                            </v-container>
                            <small>*indicates required field</small>
                        </v-card-text>
                        <v-card-actions>
                            <v-spacer></v-spacer>
                            <v-btn color="blue darken-1" flat @click.prevent="dialog_edit = false">Close</v-btn>
                            <v-btn color="blue darken-1" flat @click.prevent="editSuite()">Add</v-btn>
                        </v-card-actions>
                    </v-card>
                </v-dialog>
            </v-flex>
        </v-layout>


    </v-flex>
</template>

<script>
import Seo from '../../../../Aut/SeoBuilder/assets/js/components/Seo.vue';
    export default {

        name:'Suite',
        components: {
            'seo': Seo
        },
        data(){
            return {
                dialog_seo: false,
                buildable: {id: '', type: ''},
                Title: 'Hello There',

                dialog_add: false,
                dialog_edit: false,

                uploader: "suite",
                files: [],

                form: {
                    id: null,
                    en: {name: '', long_name: '', vision: ''},
                    ar: {name: '', long_name: '', vision: ''},
                    suite_order: null,
                    show_order: null,
                    solutions: [],
                    modules: [],
                    image_id: null
                },

                solutions: [],
                solution_items: [],
                solution_value: [],
                modules: [],
                module: [],
                module_value: [],
                module_items: [],
            }
        },
        methods:
            {
                openDialog(item)
                {
                    console.log(item)
                    this.dialog_seo = true;
                    this.buildable['id'] = item.id;
                    this.buildable['type'] = item.model;

                },
                initial()
                {
                    this.form =
                        {
                            id: null,
                            en: {name: '', long_name: '', vision: ''},
                            ar: {name: '', long_name: '', vision: ''},
                            suite_order: null,
                            show_order: null,
                            solutions: [],
                            modules: [],
                            image_id: null,
                        }
                        this.files = [];
                        this.solution_value = []
                        this.module_value = []
                        this.module_items = []
                },
                add_suite()
                {
                    this.initial();
                    this.dialog_add = true;
                },
                edit(item)
                {
                    this.initial();
                    this.dialog_edit = true;
                    if (item.image_id) {
                      this.files.push(item.image_id);
                    }

                    this.form.suite_code = item.suite_code;
                    this.form.show_order = item.show_order;
                    this.form.en.name = item.en.name;
                    this.form.ar.name = item.ar.name;
                    this.form.en.long_name = item.en.long_name;
                    this.form.ar.long_name = item.ar.long_name;
                    this.form.en.vision = item.en.vision;
                    this.form.ar.vision = item.ar.vision;
                    this.form.id = item.id;
                    this.form.image_id = item.image_id;
                    this.sync_value(item.id);

                },
                async delete_suite(item)
                {
                    console.log(item.id)
                    await this.$http.delete('api/suite/'+ item.id);
                },
                async addSuite()
                {
                    await this.$http.post('api/suite', this.form);
                    this.dialog_add = false;
                },
                async editSuite()
                {
                    await this.$http.patch('api/suite/'+ this.form.id , this.form);
                    this.dialog_edit = false;

                },
                sync_value(id)
                {
                    this.$http.get('api/module_solution/'+ id)
                        .then((response)=>{
                        this.form.modules = response.data.module_ids;
                        this.form.solutions = response.data.solution_ids;
                        this.solution_value = response.data.solutions.map(s => s.name);
                        this.update_module(response.data.solutions.map(s => s.id))
                        this.module_value = response.data.modules.map(m => m.name);
                    })
                },
                async update_module(solutions)
                {

                    this.modules = []
                    solutions.forEach ((solution) => {
                        if(solution>0)
                        {
                            this.$http.get('api/module/' + solution)
                            .then((response)=>{
                                this.modules.push(response.data.modules)
                                response.data.modules.forEach((module)=>{
                                    this.modules.push(module)
                                })
                            })
                            .finally(()=>{
                                this.module_items = []
                                this.module = []
                                for(let i =0 ; i<this.modules.length; i++)
                                {
                                    if(this.modules[i].id)
                                    {
                                        this.module_items.push(this.modules[i].name)
                                        this.module.push(this.modules[i])
                                    }
                                }
                            })

                        }
                    })
                },
                append_solution(e)
                {
                    let item = []
                    this.solutions.forEach((solution)=> {
                        this.solution_value.forEach((value)=>{
                            if(solution['name'] == value)
                            {
                                item.push(solution['id']);
                            }
                        })
                    })
                    this.form.solutions = item;
                    this.update_module(item);
                },
                append_module()
                {
                    let item = []
                    console.log(this.module)
                    this.module.forEach((m)=> {
                        this.module_value.forEach((value)=>{
                            if(m['name'] == value)
                            {
                                item.push(m['id']);
                            }
                        })
                    })
                    this.form.modules = Array.from(new Set(item))
                }
            },
        async mounted()
        {
            const response = await this.$http.get('api/solution');
            const solutions = response.data.solution;
            this.solutions = solutions;
            this.solution_items = solutions.map(s => s.name)
        }
    }
</script>

<style scoped>

</style>
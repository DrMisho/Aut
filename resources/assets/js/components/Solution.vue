<template>
    <v-flex shrink>
        <data-table source="solution" @addSolution="add" @editSolution="edit" @deleteSolution="deleteSolution"/>
        <v-layout>
            <v-flex xs6 sm6 md6 offset-sm3>
                <v-dialog max-width="1000" v-model="dialog">
                    <v-card>
                        <v-card-title>
                            <span class="headline">Add Solution</span>
                        </v-card-title>
                        <v-card-text>
                            <v-container grid-list-md>
                                <v-layout wrap>
                                    <v-flex xs12>
                                        <v-text-field label="Solution Code" required v-model="form.solution_code"></v-text-field>
                                    </v-flex>
                                    <v-flex xs12>
                                        <v-text-field label="Solution Name" required v-model="form.en.name"></v-text-field>
                                    </v-flex>
                                    <v-flex xs12>
                                        <v-text-field label="Solution Name (العربية)" required v-model="form.ar.name"></v-text-field>
                                    </v-flex>
                                    <div v-for="suite in temp_solution_suite" :key="suite.id">
                                        <v-flex xs12>
                                            <v-layout align-center>
                                                <v-checkbox v-model="suite.enabled" hide-details :label="suite.suite" class="shrink mr-2"></v-checkbox>
                                                <v-spacer></v-spacer>
                                                <v-text-field :disabled="!suite.enabled" label="Suite Order" v-model="suite.show_order"></v-text-field>
                                            </v-layout>
                                        </v-flex> 
                                        <br>
                                    </div>
                                </v-layout>
                            </v-container>
                            <small>*indicates required field</small>
                        </v-card-text>
                        <v-card-actions>
                        <v-spacer></v-spacer>
                        <v-btn color="blue darken-1" flat @click.prevent="dialog = false">Close</v-btn>
                        <v-btn color="blue darken-1" flat @click.prevent="addSolution()">Add</v-btn>
                        </v-card-actions>
                    </v-card>
                </v-dialog>
            </v-flex>


        </v-layout>

        <div v-if="dialogEdit">
            <v-layout>
            <v-flex xs6 sm6 md6 offset-sm3>
                <v-dialog v-model="dialogEdit">
                    <v-card>
                        <v-card-title>
                            <span class="headline">Add Solution</span>
                        </v-card-title>
                        <v-card-text>
                            <v-container grid-list-md>
                                <v-layout wrap>
                                    <v-flex xs12>
                                        <v-text-field label="Solution Code" required v-model="form.solution_code"></v-text-field>
                                    </v-flex>
                                    <v-flex xs12>
                                        <v-text-field label="Solution Name" required v-model="form.en.name"></v-text-field>
                                    </v-flex>
                                    <v-flex xs12>
                                        <v-text-field label="Solution Name (العربية)" required v-model="form.ar.name"></v-text-field>
                                    </v-flex>
                                    <div v-for="suite in temp_solution_suite" :key="suite.id">
                                        <v-flex xs12>
                                            <v-layout align-center>
                                                <v-checkbox v-model="suite.enabled" hide-details :label="suite.suite" class="shrink mr-2"></v-checkbox>
                                                <v-spacer></v-spacer>
                                                <v-text-field label="Suite Order" :disabled="!suite.enabled" v-model="suite.show_order"></v-text-field>
                                            </v-layout>
                                        </v-flex> 
                                        <br>
                                    </div>
                                </v-layout>
                            </v-container>
                            <small>*indicates required field</small>
                        </v-card-text>
                        <v-card-actions>
                        <v-spacer></v-spacer>
                        <v-btn color="blue darken-1" flat @click.prevent="dialogEdit = false">Close</v-btn>
                        <v-btn color="blue darken-1" flat @click.prevent="editSolution()">Edit</v-btn>
                        </v-card-actions>
                    </v-card>
                </v-dialog>
            </v-flex>
        </v-layout>
        </div>
        
    </v-flex>
</template>

<script>
    import axios from 'axios';
    export default {
        name:'Solution',
        data(){
            return {
                dialog: false,
                dialogEdit: false,
                form: {
                    en: {name: ''},
                    ar: {name: ''},
                    solution_code: null,
                    solution_suite: []

                },
                solution_suite: [],
                temp_solution_suite: [],
                item: {},

            };
        },
        methods: {
            initial()
            {
                this.form = {
                    en: {name: ''},
                    ar: {name: ''},
                    solution_code: null,
                    solution_suite: [],

                }
                this.temp_solution_suite = this.solution_suite;
                this.dialog = false
                this.dialogEdit = false
            },
            add(){
                this.initial();
                this.dialog = true;
            },
            edit(item)
            {
                this.dialogEdit = true;
                this.item = item;
                this.form.solution_code = this.item.solution_code;
                this.form.en.name = this.item.en.name;
                this.form.ar.name = this.item.ar.name;
                this.temp_solution_suite = this.solution_suite;
                item.suites.forEach((suite) => {

                    this.temp_solution_suite = this.temp_solution_suite.map(s => s.id == suite.id ? {
                        ...s,
                        enabled: suite.show_order == 0? false: true,
                        show_order: suite.show_order
                    } : s)
                })
            },
            async addSolution()
            {
                this.form.solution_suite = this.temp_solution_suite;
                const response = await this.$http.post('api/solution', this.form);
                this.dialog = false;
            },
            async editSolution()
            {
                this.form.solution_suite = this.temp_solution_suite;
                const response = await this.$http.patch('api/solution/'+ this.item.id , this.form);
                this.initial()
            },
            async deleteSolution(item)
            {
                await this.$http.delete('api/solution/'+ item.id);
            }
        },
        async mounted () {
            const response = await this.$http.get('api/suite')
        
            const suites = response.data.suites
            suites.forEach((suite)=>{
                this.solution_suite.push({id: suite.id ,suite: suite.name, show_order: 0, enabled: false})
            })
            this.temp_solution_suite = this.solution_suite;
        }
    }
</script>

<style scoped>

</style>
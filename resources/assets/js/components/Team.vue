<template>
    <v-flex shrink>
        <data-table source="team" @addTeam="add" @editTeam="edit" @deleteTeam="deleteTeam"/>
            <v-container fluid>
             <v-layout align-center justify-center>
                <v-flex xs12 sm8 md4>
                <v-dialog max-width="1000" v-model="dialog">
                    <v-card>
                        <v-card-title>
                            <span class="headline">Add Team</span>
                        </v-card-title>
                        <v-card-text>

                            <v-container grid-list-md>
                                <v-layout wrap>
                                  <v-flex xs12>
                                    <v-text-field label="Team Tag" required v-model="form.tags"></v-text-field>

                                    <v-text-field label="Team Name" required v-model="form.en.name"></v-text-field>
                                  </v-flex>
                                  <v-flex xs12>
                                        <v-text-field label="Team Name (العربية)" required v-model="form.ar.name"></v-text-field>
                                    </v-flex>
                                    <v-flex xs12>
                                        <v-text-field label="Show Order" required v-model="form.show_order"></v-text-field>
                                    </v-flex>
                                    <v-flex xs12> 
                                        <label>Social Networks</label>
                                        <div v-for="social in socials" :key="social.id">
                                            <v-flex xs12>
                                                <v-layout align-center>
                                                    <v-checkbox v-model="social.enabled" hide-details :label="social.social" class="shrink mr-2"></v-checkbox>
                                                    <v-spacer></v-spacer>
                                                    <v-text-field :disabled="!social.enabled" label="Social Account" v-model="social.account"></v-text-field>
                                                </v-layout>
                                            </v-flex> 
                                            <br>
                                        </div>
                                    </v-flex>
                                    <br>
                                    <v-flex xs12> 
                                        <label>Job Title</label>
                                        
                                            <v-flex xs12>
                                                <v-layout align-center>
                                                    <v-select  
                                                        item-value="id" 
                                                        v-model="form.job_title" 
                                                        outlined 
                                                        :items="job_item" 
                                                        item-text="text" 
                                                        :rules="[v => !!v ||  'required_item']" 
                                                        label="Job Title" 
                                                        persistent-hint 
                                                        return-object 
                                                        single-line
                                                    ></v-select>
                                                </v-layout>
                                            </v-flex> 
                                            <br>
                                        
                                    </v-flex>

                                    <v-flex>
                                        <file-pond-input
                                            v-model="form.pic_name_id"
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
                        <v-btn color="blue darken-1" flat @click.prevent="dialog = false">Close</v-btn>
                        <v-btn color="blue darken-1" flat @click.prevent="addTeam()">Add</v-btn>
                        </v-card-actions>
                    </v-card>
                
                </v-dialog>
            </v-flex>
            </v-layout>
            </v-container>

        <div v-if="dialogEdit">
            <v-layout>
            <v-flex xs6 sm6 md6 offset-sm3>
                <v-dialog max-width="1000" v-model="dialogEdit">
                    <v-card>
                        <v-card-title>
                            <span class="headline">Edit Team</span>
                        </v-card-title>
                        <v-card-text>
                            <v-container grid-list-md>
                                <v-layout wrap>
                                    <v-flex xs12>
                                        <v-text-field label="Team Tag" required v-model="form.tags"></v-text-field>
                                    </v-flex>
                                    <v-flex xs12>
                                        <v-text-field label="Team Name" required v-model="form.en.name"></v-text-field>
                                    </v-flex>
                                    <v-flex xs12>
                                        <v-text-field label="Team Name (العربية)" required v-model="form.ar.name"></v-text-field>
                                    </v-flex>
                                    <v-flex xs12>
                                        <v-text-field label="Show Order" required v-model="form.show_order"></v-text-field>
                                    </v-flex>
                                    <v-flex xs12> 
                                        <label>Social Networks</label>
                                        <div v-for="social in socials" :key="social.id">
                                            <v-flex xs12>
                                                <v-layout align-center>
                                                    <v-checkbox v-model="social.enabled" hide-details :label="social.social" class="shrink mr-2"></v-checkbox>
                                                    <v-spacer></v-spacer>
                                                    <v-text-field :disabled="!social.enabled" label="Social Account" v-model="social.account"></v-text-field>
                                                </v-layout>
                                            </v-flex> 
                                            <br>
                                        </div>
                                    </v-flex>
                                    <br>
                                    <v-flex xs12> 
                                        <label>Job Title</label>
                                        
                                            <v-flex xs12>
                                                <v-layout align-center>
                                                    <v-select  
                                                        item-value="id" 
                                                        v-model="form.job_title"
                                                        outlined 
                                                        :items="job_item" 
                                                        item-text="text" 
                                                        :rules="[v => !!v ||  'required_item']" 
                                                        label="Job Title" 
                                                        persistent-hint 
                                                        return-object 
                                                        single-line
                                                    ></v-select>
                                                </v-layout>
                                            </v-flex> 
                                            <br>
                                        
                                    </v-flex>

                                    <v-flex>
                                        <file-pond-input
                                            v-model="form.pic_name_id"
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
                        <v-btn color="blue darken-1" flat @click.prevent="dialogEdit = false">Close</v-btn>
                        <v-btn color="blue darken-1" flat @click.prevent="editTeam()">Edit</v-btn>
                        </v-card-actions>
                    </v-card>
                </v-dialog>
            </v-flex>
        </v-layout>
        </div>
        
    </v-flex>
</template>

<script>
    export default {
        name: 'Team',
        data() {
            return {
                dialog: false,
                dialogEdit: false,

                job_item: [],
                social_networks: [],
                item: {},

                form: {
                    tags: null,
                    show_order: null,
                    en: {name: ''},
                    ar: {name: ''},
                    pic_name_id: null,
                    job_title_id: '',
                    job_title: '',
                    social: []
                },
                uploader: "team",
                socials: [],
                files: []
            };
        },
        methods: {
            initial_network() {
                this.$http.get('api/social')
                .then((response) => {
                    this.social_networks = []
                    const socials = response.data.socials
                    socials.forEach((social) => {
                        this.social_networks.push({id: social.id, social: social.name, enabled: false, account: null})
                    })
                })
            },
            initial() {
                this.form = {
                    tags: null,
                    show_order: null,
                    en: {name: ''},
                    ar: {name: ''},
                    pic_name_id: null,
                    job_title_id: '',
                    job_title: '',
                    social: []
                }
                this.files = [];
                // this.socials = this.social_networks.forEach((social) => {
                //     social['enabled'] = false
                //         social['account'] = null
                // } )
                this.initial_network();
                this.socials = this.social_networks
                console.log(this.socials)
                console.log(this.social_networks)
                this.dialog = false
                this.dialogEdit = false
            },
            add() {
                this.initial();
                this.dialog = true;
            },
            edit(item) {
                this.initial();
                this.item = item;
                if (item.pic_name_id) {
                    this.files.push(item.pic_name_id);
                }

                this.form.tags = item.tags;
                this.form.show_order = item.show_order
                this.form.job_title = item.job_title
                this.form.job_title_id = item.job_title_id
                this.form.en.name = item.en.name
                this.form.ar.name = item.ar.name
                this.form.pic_name_id = item.pic_name_id

                this.socials = this.social_networks
                console.log(this.socials)
                // item.socialNetworks.forEach((socialNetwork) => {
                //
                //     this.socials = this.socials.map(social => social.id == socialNetwork.id ? {
                //         ...social,
                //         account: socialNetwork.account
                //     } : social)
                // });

                this.socials.forEach((social) => {
                    const result = item.socialNetworks.find((socialNetwork) => {
                        return socialNetwork.id === social.id
                    })
                    if(result)
                    {
                        social['account'] = result['account'];
                        social['enabled'] = true
                    }
                    else
                    {
                        social['account'] = null
                        social['enabled'] = false
                    }
                });

                this.form.social = this.socials
                this.dialogEdit = true;
            },
            async addTeam() {
                this.form.social = this.socials.filter(social => social.enabled == true)
                // this.form.pic_name_id = this.form.pic_name_id
                const response = await this.$http.post('api/team', this.form);
                this.initial();
            },
            async editTeam() {
                const response = await this.$http.patch('api/team/' + this.item.id, this.form);
                this.dialogEdit = false;
                this.initial();
            },
            async deleteTeam(item) {
                await this.$http.delete('api/team/' + item.id);
                this.initial();
            },

        },
        async mounted() {

            const response_social = await this.$http.get('api/social')
            const response_job = await this.$http.get('api/jobTitle')
            const socials = response_social.data.socials
            const jobs = response_job.data.jobs
            console.log(socials)
            console.log(jobs)
            socials.forEach((social) => {
                this.social_networks.push({id: social.id, social: social.name, enabled: false, account: null})
            })
            this.socials = this.social_networks;
            jobs.forEach((job) => {
                this.job_item.push(job.name)
            })
        }
    }
</script>

<style scoped>

</style>
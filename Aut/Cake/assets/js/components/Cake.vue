<!-- <template>
    <div>
        <v-dialog v-model="dialog2" persistent max-width="600px">
        <template v-slot:activator="{ on }">
            <v-btn small flat color="primary" dark v-on="on">Add Cake</v-btn>
        </template>
        <v-card>
            <v-card-title>
                <span class="headline">User Profile</span>
            </v-card-title>
            <v-card-text>
                <v-container grid-list-md>
                    <v-layout wrap>
                <v-flex xs12>
                    <v-text-field label="Cake Name" required v-model="name"></v-text-field>
                </v-flex>
                <v-flex xs12>
                    <v-text-field label="Cake Price" required v-model="price"></v-text-field>
                </v-flex>
                <v-flex xs12>
                    <v-text-field label="Cake Description" required v-model="description"></v-text-field>
                </v-flex>
                </v-layout>
            </v-container>
            <small>*indicates required field</small>
            </v-card-text>
            <v-card-actions>
            <v-spacer></v-spacer>
            <v-btn color="blue darken-1" flat @click.prevent="dialog2 = false">Close</v-btn>
            <v-btn color="blue darken-1" flat @click.prevent="addCake()">Add</v-btn>
            </v-card-actions>
        </v-card>
        </v-dialog>


        <v-data-table
            :headers="headers"
            :items="cakes"
            class="elevation-1"
    >
      <template v-slot:items="props">
        <td>{{ cakes[props.index].cake_name }}</td>
        <td class="text-xs-right">{{ cakes[props.index].price }}</td>
        <td class="text-xs-right">{{ cakes[props.index].description }}</td>
        <v-dialog v-model="dialog" persistent max-width="600px">
        <template v-slot:activator="{ on }">
            <v-btn small flat color="primary" dark v-on.prevent="on" @click="edit(cakes[props.index].id)"><v-icon>fa fa-edit</v-icon></v-btn>
        </template>
        <v-card>
            <v-card-title>
                <span class="headline">User Profile</span>
            </v-card-title>
            <v-card-text>
                <v-container grid-list-md>
                    <v-layout wrap>
                <v-flex xs12>
                    <v-text-field label="Cake Name" required v-model="cakeEdit.cake_name"></v-text-field>
                </v-flex>
                <v-flex xs12>
                    <v-text-field label="Cake Price" required v-model="cakeEdit.price"></v-text-field>
                </v-flex>
                <v-flex xs12>
                    <v-text-field label="Cake Description" required v-model="cakeEdit.description"></v-text-field>
                </v-flex>
                </v-layout>
            </v-container>
            <small>*indicates required field</small>
            </v-card-text>
            <v-card-actions>
            <v-spacer></v-spacer>
            <v-btn color="blue darken-1" flat @click.prevent="dialog = false">Close</v-btn>
            <v-btn color="blue darken-1" flat @click.prevent="editCake(id)">Save</v-btn>
            </v-card-actions>
        </v-card>
        </v-dialog>
        <td class="text-xs-right"><v-icon @click.prevent="deleteCake(cakes[props.index].id)">remove_circle</v-icon></td>
        </template>
        
    </v-data-table>
    
    </div>
    
</template>
<script>
export default {
    name: "Cake",
    data() {
        return {
            dialog: false,
            dialog2: false,
            id: null,
            cakeEdit: {},
            name: '',
            price: null,
            description: '',
            cakes: [],
            headers: [
            {
                text: 'Cake Name',
                align: 'left',
                sortable: false,
                value: 'name'
            },
            { text: 'Price', value: 'price' },
            { text: 'Description', value: 'description' },
            { text: 'Edit' , value: 'id' },
            { text: 'Delete', value: 'id'}
            ],
            
        }
    },
    methods: {
        edit(id)
        {
            this.id = id
            this.cakeEdit = this.cakes.filter((cake)=> cake.id == this.id);
            this.cakeEdit = this.cakeEdit[0]
        },
        async fetch(){
            await this.$http.get('api/cake').then(res => { this.cakes = res.data.cakes.data});
        },
        async editCake(id)
        {
            const data = {cake_name: this.cakeEdit.cake_name, price: this.cakeEdit.price, description: this.cakeEdit.description};
            console.log(id ,data);
            this.dialog = false;
            await this.$http.put('api/cake/'+id, data).then(res => this.cakes = res.data.cakes.data);
        },
        async deleteCake(id)
        {
            await this.$http.delete('api/cake/'+id).then(res => this.cakes = res.data.cakes.data);
        },
        async addCake()
        {
            this.dialog2 = false;
            await this.$http.post('api/cake', {cake_name: this.name, price: this.price, description: this.description});
        }
    },
    mounted() {
        this.fetch();
    }
}   
</script> -->




<template>
    <v-flex shrink>
        <data-table source="cakes" @addCake="showDialog"/>
    </v-flex>
</template>

<script>
    export default {
        name:'News',
        methods: {
            showDialog(){
                // this.dialog = true;
            }
        }

    }
</script>

<style scoped>

</style>
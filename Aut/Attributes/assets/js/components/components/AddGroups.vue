<template>

    <v-flex shrink>
        
                    <v-dialog
                            v-model="dialog"
                           fullscreen
                            scrollable
                    >


                        <v-card>
                            <v-card-title
                                    class="headline primary white--text  justify-center"
                                    success-title
                            >
                              {{translate('add_groups')}}
                            </v-card-title>
                                <v-card-text id='itemsGroup' class='test_sort' >
                                 
                                    <v-layout row wrap class="justify-center  " v-for="(item,index) in info" :key='item.id'>
                                            <v-flex md10 sm10 xl4 xm10>
                                               <v-select
                                                  @change="toggelDisable()"
                                                  v-model="info[index]"
                                                 
                                                  :items="items"
                                                  item-text="name"
                                                  item-value="id"
                                                  :rules="[v => !!v || translate('msg_required')]"
                                                  :label="translate('add_element')"
                                                  persistent-hint
                                                  return-object
                                                  single-line
                                                  
                                                ></v-select>
                                              
                                            </v-flex>
                                        
                                             <v-flex md2 sm2 xl2 xm2 >
                                                    <v-btn md1  wrap row icon    @click="removeAttr(index)" >
                                                         <v-icon color='red' >remove</v-icon>
                                                      </v-btn>
                                                      
                                                                          
                                                 </v-flex>
                                          

                                          
                                    </v-layout>
                                
                                  
                                
                                                <v-flex md6 slot="footer">

                                                           <v-btn md1  wrap row icon   @click="addAttr()" >
                                                                   <v-icon color='blue' >add</v-icon>
                                                           </v-btn> 
                                                           <p v-if="info.length == 0 ">
                                                             {{translate('add_msg')}}
                                                           </p> 
                                                 
                                                </v-flex>
                                                      
                                 </v-card-text>

                            <v-divider></v-divider>

                            <v-card-actions class=" justify-center">
                                <v-spacer></v-spacer>
                                 <v-btn
                                        color="danger"
                                        flat
                                        @click="hide()"
                                >
                                   {{translate('disagree')}}
                                </v-btn>
                                <v-btn
                                        color="white"
                                        class="primary"
                                        flat
                                        @click="save()"
                                >
                                   {{translate('agree')}}
                                </v-btn>
                               
                                
                            </v-card-actions>
                        </v-card>
                    </v-dialog>
               

    </v-flex>


</template>



<script>
    // import SkySelect from './SkySelect.vue'
    import Sortable from 'sortablejs';

    export default {
        name:'add-form',
        data:function(){
            return {
          current_sys: process.env.MIX_NATURE_OF_SYSTEM,
            
                dialog:false,
                product_type_id:'',
                info:[],
                items:[],
                select:{},
                groups_copy:[]
            }
        },
        computed:{
         
        },
         components:{
            Sortable
        
        },
        created(){
        
                 
         },
        methods:{
           sortableList: function () {
              // this.info.splice(event.newIndex, 0, this.list.splice(event.oldIndex, 1)[0])
                var el = document.getElementById('itemsGroup');
          // var sortable = Sortable.create(el);
          let vm = this ;
          Sortable.create(el, {
            animation: 300,
             onUpdate:evt =>{
               
               
               // console.log(evt.oldIndex,evt.newIndex);

                vm.info.splice(evt.newIndex, 0, vm.info.splice(evt.oldIndex, 1)[0])
              },
          });
            },
            translate(key) {
                return this.$t(`attributes.${key}`)
            },  
            show(){
                this.dialog = true;
            },
            hide(){
                this.dialog = false;
            },
            save(){
              let array = [] ;
              for(let index in this.info){
                 if(this.info[index] == ''){
                  this.index.splice(index,1);
                 }
              }
              for(let index in this.info){
               

                 let group_id = this.info[index].id;
                  array.push({group_id, order:index});

              }
              // console.log('array order ',array);
               this.$http.post('api/attribute/product-type-group-order/'+this.product_type_id,array).then((response) => {
                  // this.items = response.data;
                  // this.groups_copy = response.data;
                    // this.attributes = response.data;
                    this.hide();
                     if(response.data.state =='success'){

                      this.$notification.success(response.data.msg);
                    }
                    else{
                      this.$notification.show(response.data.msg);
                    }
                    // console.log('attributes is :',response.data);

                           
                     // array = response.data;
                   });
            },
            toggelDisable(){
              // alert('chang value ');
              // console.log(this.info);
              this.items.forEach(val =>{
                      if(true) {
                      
                        val.disabled = false;
                      }
                      else{
                       
                        // alert('false'+val.name +'----'+attr_name);
                      }
                  });
              for(let index in this.info){
                  //get name attributes
                  let group_name = this.info[index].name;

                  this.items.forEach(val =>{
                      if(val.name == group_name) {
                      
                        val.disabled = true;
                      }
                      else{
                       
                        // alert('false'+val.name +'----'+attr_name);
                      }
                  });
            }
          },
          addValue(val){
            cosnole.log('add value');
          },
          getGroups(item){

                 if(this.dialog == false){
                    this.info = [];
                    this.toggelDisable();
                  }
                //set id
                this.product_type_id = item.id;


                  this.$http.get('api/attribute/product-type-groups/'+item.id).then((response) => {
                    this.info = response.data;
                   this.toggelDisable();
                     
                      // console.log('attributes for this group is :',response.data);
                             
                       // array = response.data;
                     });

                if(this.items.length == 0)
                {

                  this.$http.get('api/attribute/groups/').then((response) => {
                    this.items = response.data;
                    this.groups_copy = response.data;
                      // this.attributes = response.data;
                     
                      // console.log('Groups is :',response.data);
                             
                       // array = response.data;
                     });
                }
                 this.show();

            },
          addAttr(){
            this.info.push('');

            
          },
          removeAttr(i){
            if(this.info.length >1)
            // this.poll.options.pop();
            this.info.splice(i, 1)
            
          },

        },
        mounted(){
         // this.info.splice(event.newIndex, 0, this.list.splice(event.oldIndex, 1)[0])

                var el = document.getElementById('itemsGroup');
          // var sortable = Sortable.create(el);
          let vm = this ;
          if(el != null || el != ''){

          Sortable.create(el, {
            animation: 300,
             onUpdate:evt =>{
               
               
               // console.log(evt.oldIndex,evt.newIndex);

                vm.info.splice(evt.newIndex, 0, vm.info.splice(evt.oldIndex, 1)[0])
              },
          });
          }

        }

    }

</script>



<style scoped>




</style>              


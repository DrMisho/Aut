<template>

    <v-flex shrink>
        
                    <v-dialog
                            v-model="DeleteFeatureDialog"
                            width="500"
                            scrollable
                    >


                        <v-card>
                            <v-card-title
                                    class="headline primary white--text "
                                    success-title
                            >
                              {{translate('confirm')}}
                            </v-card-title>
                                <v-card-text >
                                 
                                <v-layout row wrap class=""  >


                                 
                                      <v-layout wrap row v-if="state == 'used'">
                                        <v-flex md6 sm6 xl6 xm6 v-if='msg.groups'>
                                          
                                        <table  >
                                          <h2>
                                            <th>{{'| '+translate('group')}}</th>
                                          </h2>
                                          <ul>
                                            <li v-for='item in msg.groups'>{{item}}</li>
                                          </ul>
                                        </table>
                                        </v-flex>

                                        <v-flex x md6 sm6 xl6 xm6  v-if='msg.product_type'>
                                          
                                        <table v-if='msg.product_type'>
                                          <h2>
                                            <th>{{'| '+translate('prodcut_type')}}</th>
                                          </h2>
                                          <ul>
                                            <li v-for='item in msg.product_type'>{{item}}</li>
                                          </ul>
                                        </table>
                                        </v-flex>
                                        
                                      </v-layout>
                                       
                                
                               
                                       <h4 v-else class=" primary--text mb-0 pa-2">{{msg}}</h4>
                                   

                                </v-layout>
                                
                                            
                                                      
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
                                   {{translate('confirm')}}
                                </v-btn>
                               
                                
                            </v-card-actions>
                        </v-card>
                    </v-dialog>
               

    </v-flex>


</template>



<script>
    

    export default {
        name:'delete-feature',
        data:function(){
            return {
          current_sys: process.env.MIX_NATURE_OF_SYSTEM,
            
                DeleteFeatureDialog:false,
                msg:'',
                state:'',
                id:'',
                            
              }
        },
        computed:{
         
        },
         components:{
            
        
        },
        created(){
        
                 
         },
        methods:{
          
             translate(key) {
                return this.$t(`attributes.${key}`)
            },  
            show(){
                this.DeleteFeatureDialog = true;
            },
            hide(){
                this.DeleteFeatureDialog = false;
            },
            save(){
             
              
               this.$http.delete('api/attribute/features/'+this.id).then((response) => {
                    this.hide();
                    this.$emit('saved');
                    if(response.data.state =='success'){

                      this.$notification.success(response.data.msg);
                    }
                    else{
                      this.$notification.show(response.data.msg);
                    }
                   });
            },
            
         
         async showRelated(item){
                  this.id = item.id;

                    // this.$http.get('api/attribute/features-realated/'+this.id).then((response) => {
                    
                    //  this.state  = response.data.state;
                    //  this.msg = response.data.msg;
                               
                    //      // array = response.data;
                    //    });
                 this.show();
            },
            initi(){
              this.state = '';
              this.id = '';
              this.msg = '';
            }
          

        },
        mounted(){
       
                

        }

    }

</script>



<style scoped>




</style>              


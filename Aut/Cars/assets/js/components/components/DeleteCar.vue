<template>

    <v-flex shrink>
                    <v-dialog
                            v-model="dialog"
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
                                        {{translate('msg_confirm')}}                                                      
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
                dialog:false,
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
                return this.$t(`cars.${key}`)
            },  
            show(){
                this.dialog = true;
            },
            hide(){
                this.dialog = false;
            },
            save(){
             
              
               this.$http.delete('api/car/'+this.id).then((response) => {
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
            
         
          initial(item){

                  this.id = item.id;
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


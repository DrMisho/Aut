<template>
<v-dialog v-model="dialog" width="500" scrollable>

    <v-card>
        <v-card-title class=" primary white--text " success-title>
             <v-icon icon dark >fa fa-gavel</v-icon> {{'   ' +translate('result')}}
        </v-card-title>
        <v-card-text>
            <h1>{{form.title}}</h1>
            <h2>{{translate('final_price')}}{{form.current_price}}{{'('+form.currency_name+')'}}</h2>
        </v-card-text>

        <v-divider></v-divider>

        <v-card-actions class=" justify-center">
            <v-spacer></v-spacer>
            <v-btn color="danger" flat @click="dialog=false">
                {{translate('disagree')}}
            </v-btn>
             <v-btn color="white" class="red" flat @click="result(false)">
                {{translate('do_not_want')}}
            </v-btn>
            <v-btn color="white" class="primary" flat @click="result(true)">
                {{translate('want')}}
            </v-btn>

        </v-card-actions>
    </v-card>
</v-dialog>
</template>

<script>
export default {
    name: 'result-auction',
    data: function () {
        return {

            dialog: false,
            id: '',
            form:{},
        };

    },

    methods: {
        translate(key) {
            return this.$t(`auction.${key}`)
        },
        initial(form,id){
            this.form = form ;
            this.id = id;
            this.show();
        },
        show(){
            this.dialog = true;
        },
        hide() {
            this.dialog = false;
        },
        result(res) {
            let request = `api/auction/item/result`;
            let params = {
                id:this.form.id,
                is_sold:res
            };
            this.$http.post(request,params).then(response => {

                if (response.data.state == 'success') {
                              this.$emit('lockandsaved',{id:this.id});
                    this.$notification.success(response.data.msg);
                } else {
                    this.$notification.show(response.data.msg);
                }
                this.hide();

            });
        },

    },
    created() {

    }

}
</script>

<style scoped>

</style>

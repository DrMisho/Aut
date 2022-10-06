<template>
<v-dialog v-model="dialog" width="500" scrollable>

    <v-card>
        <v-card-title class="headline primary white--text " success-title>
            {{translate('confirm')}}
        </v-card-title>
        <v-card-text>

            {{translate('msg_confirm')}}

        </v-card-text>

        <v-divider></v-divider>

        <v-card-actions class=" justify-center">
            <v-spacer></v-spacer>
            <v-btn color="danger" flat @click="dialog=false">
                {{translate('disagree')}}
            </v-btn>
            <v-btn color="white" class="primary" flat @click="deleteAuction()">
                {{translate('confirm')}}
            </v-btn>

        </v-card-actions>
    </v-card>
</v-dialog>
</template>

<script>
export default {
    name: 'delete-auction',
    data: function () {
        return {

            dialog: false,
            id: '',
        };

    },

    methods: {
        translate(key) {
            return this.$t(`auction.${key}`)
        },
        initial(id){
            this.id = id ;
            this.show();
        },
        show(){
            this.dialog = true;
        },
        hide() {
            this.dialog = false;
        },
        deleteAuction() {
            this.$http.delete('api/auction/' + this.id).then(response => {

                if (response.data.state == 'success') {
                              this.$emit('deleted',{id:response.data.id});

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

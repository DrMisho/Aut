<template>

    <v-flex shrink>
        <data-table ref="city_governorate" source="region" @show_cities="showCity"/>

        <div class="text-xs-center">
            <v-dialog
                    v-model="dialog"
                    width="700"
            >
                <v-card>
                    <div v-if="result != 'error'" class="vProgress">
                        <data-table source="city_governorate"/>
                    </div>
                    <v-divider></v-divider>
                    <v-card-actions>
                        <v-spacer></v-spacer>
                        <v-btn
                                color="success"
                                flat
                                @click="dialog = false"
                        >
                            موافق
                        </v-btn>
                    </v-card-actions>
                </v-card>
            </v-dialog>
        </div>
    </v-flex>
</template>



<script>

    export default {
        name:'Region',
        data () {
            return {
                dialog: false,
                result:'no thing',
                rotate: 360,
                color:['#86BE3C','#E4B645','#C33734','#748EC4','#Black'],
            }
        },
        methods:{
            showCity(item){
                // console.log(item);
                this.$refs.city_governorate.applyFilter({
                        name:'region_id',
                        value:item.id,
                    }

                );
                this.dialog=true;
            },
        }

    }

</script>



<style scoped>




</style>
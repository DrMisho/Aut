<template>
    <v-flex shrink>
        <data-table source="page" @addSeo="openDialog"/>
        <seo v-model="dialog" :buildable="buildable" :title="Title"/>
    </v-flex>
</template>

<script>
import Seo from '../../../../Aut/SeoBuilder/assets/js/components/Seo.vue';
    export default {
        name:'Page',
        components: {
            'seo': Seo
        },
        data(){
            return {
                dialog: false,
                buildable: {id: '', type: ''},
                Title: 'Hello There'
            }
        },
        methods:
            {
                openDialog(item)
                {
                    console.log(item)
                    this.dialog = true;
                    this.buildable['id'] = item.id;
                    this.buildable['type'] = item.model;

                }
            }
    }
</script>

<style scoped>

</style>
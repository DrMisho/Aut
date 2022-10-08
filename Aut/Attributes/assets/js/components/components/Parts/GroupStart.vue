<template>
<!-- start group -->
<v-flex md12  :class="color" class="mb-2" >
    <v-layout wrap row md12 sm12 text-capitalize xl12 xm12   @click="show = !show">
        <v-flex :class="'force-'+langs_info[locale].dir">
        <v-card-title class="align-center" >{{name}}</v-card-title>

        </v-flex>

        <v-flex :class="{'force-ltr':langs_info[locale].dir=='rtl','force-rtl':langs_info[locale].dir=='ltr'}">
            <v-btn icon>
                <v-icon>{{ show ?   'keyboard_arrow_down' :'keyboard_arrow_up'}}</v-icon>
            </v-btn>
        </v-flex>

    </v-layout>
        <v-divider class="color"></v-divider>

</v-flex>
</template>

<script>
export default {
    name: 'group-start',
     props: {
            name: {
                required: true,
            },
          
            color:{
                required:false,
                default:'green lighten-4'
            }
        },
    data: function () {
        return {
            show: false,
            locale: automata.language.locale,
            langs_info: automata.language.config.supportedLocales,
        }
    },
    components: {},
    watch: {
        show() {
            //     console.log(this.result);
            // this.result = this.getDataForLang();

            this.$emit('input', this.show);
        }
    }

}
</script>

<style scoped>

</style>

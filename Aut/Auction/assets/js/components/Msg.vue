<template>
    <v-layout wrap row md8 sm8 xl8>
          <v-chip  color="primary white--text"> {{user.name}}</v-chip>
          <v-layout wrap>
              <v-card  color="primary--text white">
                  <v-card-text>{{msg.detail}}</v-card-text>
              </v-card>
          </v-layout>
    </v-layout>
</template>

<script>
    export default {
        name: 'msg',
        props: {
            msg: {
                required: true,
            },
            user: {
                required: true,
            },

        },

        data: function () {
            return {}
        },
        computed: {},
        components: {},
        created() {


        },
        methods: {

            translate(key) {
                return this.$t(`cars.${key}`)
            },
            send() {

            },

        },
        mounted() {
        }

    }
</script>

<style scoped>

</style>


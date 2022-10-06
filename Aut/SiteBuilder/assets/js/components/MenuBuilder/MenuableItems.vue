<template>
    <v-card class="mb-3">
        <v-card-actions class="primary hand" @click="show = !show" v-ripple>
            <v-subheader class="px-2 white--text" dark>{{ title }}</v-subheader>
            <v-spacer></v-spacer>
            <v-btn dark icon>
                <v-icon>{{ show ? 'keyboard_arrow_up' : 'keyboard_arrow_down' }}</v-icon>
            </v-btn>
        </v-card-actions>
        <v-divider v-show="show" />
        <v-slide-y-transition>
            <v-card-text v-show="show" style="max-height: 290px; overflow: auto;">
                <slot />
            </v-card-text>
        </v-slide-y-transition>
    </v-card>
</template>

<script>
    export default {
        name: "MenuableItems",
        props: {
            title:{},
        },
        data() {
            return {
                show: false,
            }
        }
    }
</script>

<style scoped>

</style>
<template>
    <v-dialog v-model="dialog" :width="width">
        <template v-slot:activator="{ on }">
            <slot name="activator" :on="on" :geolocation="latlng" :zoom="zoom" :center="center" :size="['100%', height]">
                <v-btn v-on="on">{{ latlng }}</v-btn>
            </slot>
        </template>
        <v-card>
            <geolocation-input v-model="latlng" :draggable="false" :center="center" :size="['100%', height]" :dialog="dialog" :zoom="zoom"/>
        </v-card>
    </v-dialog>
</template>

<script>
    export default {
        name: "GeolocationPreview",
        props: {
            geolocation: {
                default: null,
            },
            width: {
                default: null,
            },
            height: {
                default: 300
            },
            zoom: {
                default: 12,
            }
        },
        data() {
            return {
                dialog: false,
                latlng: this.geolocation,
            }
        },
        computed: {
            center() {
                if (this.geolocation && typeof this.geolocation == 'string') {
                    let x = this.geolocation.split(',');
                    return {lat: x[0], lng: x[1]};
                } else if (this.geolocation && typeof this.geolocation == 'object') {
                    return this.geolocation;
                }
                return {lat: null, lng: null};
            }
        }
    }
</script>

<style scoped>

</style>
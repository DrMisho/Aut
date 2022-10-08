<template>
    <div>
        <v-label v-if="label" :class="{'error--text': error}" >{{ label }}</v-label>
        <v-messages color="error" v-model="internalErrorMessages" />
        <l-map
            class="elevation-1"
            :style="mapStyle"
            :zoom="mapZoom"
            :center="mapCenter"
            @click="addMarker"
            :options="{zoomControl: false}"
            @update:zoom="zoomUpdated"
            @update:center="centerUpdated"
            @update:bounds="boundsUpdated"
        >
            <l-control position="topleft">
                <v-tooltip right>
                    <template v-slot:activator="{ on }">
                        <v-btn :disabled="mapZoom === 18" v-on="on" icon color="white" class="ma-0" @click="mapZoom = mapZoom + 1">
                            <v-icon >add</v-icon>
                        </v-btn>
                    </template>
                    <span>Zoom In</span>
                </v-tooltip>
            </l-control>
            <l-control position="topleft">
                <v-tooltip right>
                    <template v-slot:activator="{ on }">
                        <v-btn :disabled="mapZoom === 0" v-on="on" icon color="white" class="ma-0" @click="mapZoom = mapZoom - 1">
                            <v-icon >remove</v-icon>
                        </v-btn>
                    </template>
                    <span>Zoom Out</span>
                </v-tooltip>
            </l-control>
            <l-control position="bottomleft" >
                <v-tooltip right>
                    <template v-slot:activator="{ on }">
                        <v-btn v-on="on" icon color="white" class="ma-0" @click="openOnGoogle">
                            <v-icon v-html="`$vuetify.icons.google-map`"></v-icon>
                        </v-btn>
                    </template>
                    <span>Open on Google Map</span>
                </v-tooltip>
            </l-control>
            <l-control position="bottomleft" v-if="draggable">
                <v-menu v-model="coordinatesMenu" :close-on-content-click="false" :nudge-width="250" offset-x>
                    <template #activator="{ on: menu }">
                        <v-tooltip right>
                            <template #activator="{ on: tooltip }">
                                <v-btn v-on="{ ...tooltip, ...menu }" icon color="white" class="ma-0" >
                                    <v-icon>edit</v-icon>
                                </v-btn>
                            </template>
                            <span>Enter Coordinates</span>
                        </v-tooltip>
                    </template>
                    <v-card>
                        <v-card-actions class="py-0">
                            <v-text-field v-model="coordinates"/>
                            <v-btn color="primary" icon flat small @click="addCoordinates">
                                <v-icon size="15">fas fa-check</v-icon>
                            </v-btn>
                            <v-btn flat small icon @click="coordinatesMenu = false">
                                <v-icon size="15">fas fa-times</v-icon>
                            </v-btn>
                        </v-card-actions>
                    </v-card>
                </v-menu>
            </l-control>
            <l-control position="bottomleft" v-if="clearable">
                <v-tooltip right>
                    <template v-slot:activator="{ on }">
                        <v-btn v-on="on" icon color="white" class="ma-0" @click="clear">
                            <v-icon>fas fa-times</v-icon>
                        </v-btn>
                    </template>
                    <span>Clear</span>
                </v-tooltip>
            </l-control>
            <l-tile-layer :url="url"></l-tile-layer>
            <l-marker v-for="(marker, i) in markers" v-if="marker && !!marker.lat" :key="i" @update:lat-lng="geolocationUpdated($event, i)" :draggable="draggable" :lat-lng="marker" />
        </l-map>
    </div>
</template>

<script>

export default {
    name: "GeolocationInput",
    inject: ['form'],
    props: {
        label: {},
        value: {
            default() {
                return {
                    lat: null,
                    lng: null,
                }
            }
        },
        size: {
            type: [Number, Array, String],
            default: '100%',
        },
        multiMarkers: {
            type: [Number, Boolean],
            default: false,
        },
        draggable: {
            default: true,
        },
        clearable: {
            type: Boolean,
            default: false,
        },
        zoom: {
            default: 5
        },
        center: {
            type: Object,
            default() {
                return {lat: null, lng: null};
            },
        },
        rules: {
            type: Array,
            default() {
                return [];
            },
        },
        errorMessages: {
            default() {
                return [];
            }
        },
        dialog: {
            type: Boolean,
            default: false,
        },
    },
    data() {
        return {
            layouts: {
                'street': 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
                'osm': 'http://{s}.tile.osm.org/{z}/{x}/{y}.png',
            },
            layout: 'osm',
            mapZoom: this.zoom,
            mapCenter: {lat: null, lng: null},
            bounds: null,
            markersLimit: typeof this.multiMarkers === 'boolean' ? null : this.multiMarkers,
            markers: [],
            googleMenu: false,
            coordinatesMenu: false,
            coordinates: null,
            internalErrorMessages: [],
            errorBucket: [],
            isResetting: false,
        }
    },
    computed: {
        url() {
            return this.layouts[this.layout];
        },
        mapWidth() {
            let val = this.size;

            if (typeof val === 'object') {
                val = val[0];
            }

            if (isNaN(val)) {
                return val;
            }

            return `${val}px`;
        },
        mapHeight() {
            let val = this.size;

            if (typeof val === 'object') {
                val = val[1]
            }

            if (isNaN(val)) {
                return val;
            }

            return `${val}px`;
        },
        mapStyle() {
            return {
                width: this.mapWidth,
                height: this.mapHeight,
            }
        },
        hasError() {
            return !!(this.errorBucket && this.errorBucket.length);
        },
        error() {
            return !!(this.internalErrorMessages && this.internalErrorMessages.length);
        },
    },
    methods: {
        updateValue() {
            if (!this.multiMarkers) {
                this.$emit('input', this.markers[0] || {lat: null, lng: null});
            } else {
                this.$emit('input', this.markers);
            }
            this.validateErrorBucket();
            if (!this.isResetting) {
                this.validate();
            } else {
                this.$nextTick(() => this.isResetting = false);
            }
        },
        zoomUpdated (zoom) {
            this.mapZoom = zoom;
        },
        centerUpdated (center) {
            this.mapCenter = center;
        },
        boundsUpdated (bounds) {
            this.bounds = bounds;
        },
        geolocationUpdated(latlng, index) {
            this.markers[index].lat = latlng.lat;
            this.markers[index].lng = latlng.lng;
        },
        addMarker(event) {
            if (!this.draggable) {
                return;
            }
            let latlng = event.latlng;
            if (!this.multiMarkers) {
                this.markers[0].lat = latlng.lat;
                this.markers[0].lng = latlng.lng;
            } else if (this.markersLimit === null || this.markers.length !== this.markersLimit) {
                this.markers.push(latlng);
            }
        },
        addCoordinates() {
            if (!this.coordinates) {
                this.coordinatesMenu = false;
                return;
            }
            let latlng = this.coordinates.split(',');
            if (latlng.length < 2) {
                this.coordinatesMenu = false;
                return;
            }
            this.addMarker({
                latlng: {
                    lat: latlng[0],
                    lng: latlng[1],
                }
            });
            this.coordinatesMenu = false;
            this.coordinates = null;
        },
        openOnGoogle() {
            window.open(this.$automata.helper.googleMapUrl(this.markers[0] || null), '_blank');
        },
        validate() {
            this.internalErrorMessages = [];
            for (let index = 0; index < this.rules.length; index++) {
                const rule = this.rules[index];
                const valid = typeof rule === 'function' ? rule(this.multiMarkers ? this.markers : (this.markers[0])) : rule;

                if (typeof valid === 'string') {
                    this.internalErrorMessages.push(valid);
                } else if (typeof valid !== 'boolean') {
                    console.error(`Rules should return a string or boolean, received '${typeof valid}' instead`, this);
                }
            }
            return !this.error;
        },
        validateErrorBucket() {
            this.errorBucket = [];
            for (let index = 0; index < this.rules.length; index++) {
                const rule = this.rules[index];
                const valid = typeof rule === 'function' ? rule(this.multiMarkers ? this.markers : (this.markers[0])) : rule;

                if (typeof valid === 'string') {
                    this.errorBucket.push(valid);
                } else if (typeof valid !== 'boolean') {
                    console.error(`Rules should return a string or boolean, received '${typeof valid}' instead`, this);
                }
            }
            return this.hasError;
        },
        clear() {
            this.markers = [];
        },
        reset() {
            this.isResetting = true;
            this.internalErrorMessages = [];
            this.clear();
            return this.hasError;
        },
    },
    watch: {
        value: {
            immediate: true,
            handler (newval) {
                if (newval === null) {
                    this.markers = [{lat: null, lng: null}];
                    return;
                }
                if (!this.multiMarkers && !Array.isArray(newval)) {
                    if (typeof newval === 'string') {
                        let x = newval.split(',');
                        newval = {lat: x[0], lng: x[1]};
                    }
                    newval = [newval];
                }
                this.markers = newval;
            },
        },
        markers: {
            deep: true,
            handler() {
                this.updateValue();
            }
        },
        center: {
            immediate: true,
            handler() {
                this.mapCenter = this.center;
            }
        },
        dialog: {
            immediate: true,
            handler(newval) {
                if (newval) {
                    /**
                     * for map re-render position on dialog dimensions
                     */
                    window.dispatchEvent(new Event('resize'));
                }
            }
        },
        internalErrorMessages() {
            this.$emit('update:error', !!this.internalErrorMessages.length);
        },
        errorMessages: {
            deep: true,
            handler(newval) {
                if (newval === null) {
                    this.internalErrorMessages = [];
                } else if(!Array.isArray(newval)) {
                    this.internalErrorMessages = [newval];
                } else{
                    this.internalErrorMessages = newval;
                }
            }
        },
    },
    created () {
        this.form && this.form.register(this);
        this.validateErrorBucket();
    },
    beforeDestroy () {
        this.form && this.form.unregister(this)
    },
}
</script>

<style scoped>

</style>

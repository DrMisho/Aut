import Vue from 'vue';
import { LMap, LTileLayer, LMarker, LControl } from 'vue2-leaflet';
import { Icon } from 'leaflet'

Vue.component('l-map', LMap);
Vue.component('l-tile-layer', LTileLayer);
Vue.component('l-marker', LMarker);
Vue.component('l-control', LControl);

delete Icon.Default.prototype._getIconUrl;

Icon.Default.mergeOptions({
    iconRetinaUrl: 'images/maps/marker-icon-2x.png',
    iconUrl: 'images/maps/marker-icon.png',
    shadowUrl: 'images/maps/marker-shadow.png'
});

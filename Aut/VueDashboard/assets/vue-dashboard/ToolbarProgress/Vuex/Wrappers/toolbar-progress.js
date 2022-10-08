import store from "./../../../Vuex";

let namespace = 'toolbarProgress/';

export default {
    start() {
        store.dispatch(`${namespace}start`);
        return this;
    },
    stop() {
        store.dispatch(`${namespace}stop`);
        return this;
    },
    state(status) {
        store.dispatch(`${namespace}state`, status);
        return this;
    },
}
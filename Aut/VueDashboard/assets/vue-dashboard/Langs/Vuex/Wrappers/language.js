import store from "./../../../Vuex";

let namespace = 'language/';

export default {
    reFetch() {
        store.dispatch(`${namespace}fetch`);
        return this;
    },
    get(){
        return store.getters[`${namespace}getMenu`];
    },
    error() {
        return store.getters[`${namespace}getError`];
    },
    loading() {
        return store.getters[`${namespace}loading`];
    }
}

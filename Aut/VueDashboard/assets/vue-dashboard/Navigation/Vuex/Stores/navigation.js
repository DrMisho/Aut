import axios from './../../../axios';

const state = {
    menu: [],
    error: null,
    loading: false,
};

const mutations = {
    setMenu(state, menu) {
        state.menu = menu;
        state.error = null;
    },
    setError(state, error) {
        state.error = error;
    },
    setLoading(state, status) {
        state.loading = status;
    }
};

const actions = {
    fetch(context) {
        context.commit('setLoading', true);
        axios
            .get('api/menu/links')
            .then(res => context.commit('setMenu', res.data.data))
            .catch(error => context.commit('setError', error.response))
            .finally(() => context.commit('setLoading', false));
    },
};

const getters = {
    getMenu(state) {
        return state.menu;
    },
    getError(state) {
        return state.error;
    },
    loading(state) {
        return state.loading;
    },
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
};

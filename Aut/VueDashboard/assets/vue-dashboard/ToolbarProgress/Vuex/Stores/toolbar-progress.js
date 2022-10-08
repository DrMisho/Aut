const state = {
    active: false,
};

const mutations = {
    setActive(state, status) {
        state.active = status;
    },
};

const actions = {
    start(context) {
        context.commit('setActive', true);
    },
    stop(context) {
        context.commit('setActive', false);
    },
    state(context, state) {
        context.commit('setActive', state);
    }
};

const getters = {
    status(state) {
        return state.active;
    },
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
};
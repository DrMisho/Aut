import axios from './../../../axios';
// Globally Actions call mutation and mutation update the state
// same as data in component
const state = {
    user: {},
    loggedIn: localStorage.getItem('dashboard_loggedIn'),
    admin: null,
};

// commit and track state changes
const mutations = {
    setUser(state, user) {
        state.user = user;
        state.admin = user.admin;
    },
    loggedIn(state, status) {
        state.loggedIn = status;
        localStorage.setItem('dashboard_loggedIn', status);
    }
};

// same as methods in component
const actions = {
    fetchUser(context) {
        axios
            .get('api/dashboard/user')
            .then(res => context.commit('setUser', res.data.data));
    },
    loggedIn(context, status) {
        context.commit('loggedIn', status);
    }
};

// same as computed
const getters = {
    avatar(state) {
        return state.user.avatar_path || 'images/user.png';
    },
    name(state) {
        return state.user.username || '';
    },
    loggedIn(state) {
        return state.loggedIn || false;
    },
    verified(state) {
        return !!state.user.email_verified_at;
    },
    isAdmin(state) {
        if (state.admin === null) {
            return null;
        }
        return !!state.admin;
    },
    info(state) {
        return state.user;
    },
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
};

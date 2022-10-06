import automata from "../../../automata";
const state = {
    snackbar: false,
    y: 'bottom',
    x: automata.isRtl ? 'left' : 'right',
    color: null,
    mode: '',//['', 'vertical', 'multi-line']
    timeout: 6000,
    text: ``,
    btnColor: null,
    icon: false,
};

const mutations = {
    setSnackbar(state, status) {
        state.snackbar = status;
    },
    setIcon(state, icon) {
        state.icon = icon;
    },
    setY(state, position) {
        state.y = position;
    },
    setX(state, position) {
        state.x = position;
    },
    setColor(state, color) {
        state.color = color;
    },
    setMode(state, mode) {
        state.mode = mode;
    },
    setTimeout(state, timeout) {
        state.timeout = timeout;
    },
    setText(state, message) {
        state.text = message;
    },
    setBtnColor(state, color) {
        state.btnColor = color;
    },
    setState(state, object) {
        for(let key in state){
            if (state.hasOwnProperty(key) && object.hasOwnProperty(key)) {
                state[key] = object[key];
            }
        }
    }
};

const actions = {
    show(context, message) {
        context.commit('setSnackbar', true);
        context.commit('setText', message);
    },
    success(context, message) {
        context.commit('setSnackbar', true);
        context.commit('setText', message);
        context.commit('setColor', 'success');
        context.commit('setIcon', 'check');
    },
    error(context, message) {
        context.commit('setSnackbar', true);
        context.commit('setText', message);
        context.commit('setColor', 'red');
        context.commit('setIcon', 'error');
    },
    close(context) {
        context.commit('setSnackbar', false);
    },
    top(context) {
        context.commit('setY', 'top');
    },
    bottom(context) {
        context.commit('setY', 'bottom');
    },
    left(context) {
        if (automata.isRtl) {
            context.commit('setX', 'right');
        }else{
            context.commit('setX', 'left');
        }
    },
    right(context) {
        if (automata.isRtl) {
            context.commit('setX', 'left');
        } else {
            context.commit('setX', 'right');
        }

    },
    color(context, color) {
        context.commit('setColor', color);
    },
    icon(context, icon) {
        context.commit('setIcon', icon);
    },
    multiLine(context, status) {
        context.commit('setMode', status ? 'multi-line' : '');
    },
    timeout(context, duration) {
        context.commit('setTimeout', duration);
    },
    message(context, message) {
        context.commit('setText', message);
    },
    snackbar(context, object) {
        context.commit('setState', object);
    },
    btnColor(context, color) {
        context.commit('setBtnColor', color);
    }
};

const getters = {
    snackbar(state) {
        return state.snackbar;
    },
    icon(state) {
        return state.icon;
    },
    y(state) {
        return state.y;
    },
    x(state) {
        return state.x;
    },
    mode(state) {
        return state.mode
    },
    timeout(state) {
        return state.timeout;
    },
    color(state) {
        return state.color;
    },
    btnColor(state) {
        return state.btnColor;
    },
    text(state) {
        return state.text;
    },
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
};

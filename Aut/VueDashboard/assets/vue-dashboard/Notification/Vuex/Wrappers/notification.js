import store from "./../../../Vuex";

let namespace = 'notification/';

export default {
    show(message) {
        store.dispatch(`${namespace}show`, message);
        return this;
    },
    success(message) {
        store.dispatch(`${namespace}success`, message);
        return this;
    },
    error(message) {
        store.dispatch(`${namespace}error`, message);
        return this;
    },
    close() {
        store.dispatch(`${namespace}close`);
        return this;
    },
    top() {
        store.dispatch(`${namespace}top`);
        return this;
    },
    bottom() {
        store.dispatch(`${namespace}bottom`);
        return this;
    },
    left() {
        store.dispatch(`${namespace}left`);
        return this;
    },
    right() {
        store.dispatch(`${namespace}right`);
        return this;
    },
    color(color) {
        store.dispatch(`${namespace}color`, color);
        return this;
    },
    icon(icon) {
        store.dispatch(`${namespace}icon`, icon);
        return this;
    },
    multiLine(status) {
        store.dispatch(`${namespace}multiLine`, status);
        return this;
    },
    timeout(duration) {
        store.dispatch(`${namespace}timeout`, duration);
        return this;
    },
    message(message) {
        store.dispatch(`${namespace}message`, message);
        return this;
    },
    snackbar(object) {
        store.dispatch(`${namespace}snackbar`, object);
        return this;
    },
    btnColor(color) {
        store.dispatch(`${namespace}btnColor`, color);
        return this;
    }
}

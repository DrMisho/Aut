import automata from "../automata";
import Vue from 'vue'
import VueRouter from 'vue-router'
import routes from './routes';
import store from './../Vuex';

import './middleware';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    base: `${automata.url.baseUrl}`,
    routes
});

router.beforeEach((to, from, next) => {
    let middle = [];
    let pass = true;
    to.matched.forEach(record => {
        let m = record.meta.middleware || [];
        _.merge(middle, m);
    });

    if (middle.indexOf('auth') !== -1) {
        console.log('auth', store.getters['auth/loggedIn']);
    }

    if (middle.indexOf('guest') !== -1) {
        console.log('guest');
    }

    if (middle.indexOf('verified') !== -1) {
        console.log('verified', store.getters['auth/loggedIn']);
    }

    next();
});

export default router;

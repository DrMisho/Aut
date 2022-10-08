import './bootstrap';
import VueApp from '../../../Aut/VueDashboard/assets/vue-dashboard';

/*Vue.prototype.$http.get('js/app.config.json')
    .then(res => {
        _.merge(
            Vue.prototype.$automata.config,
            res.data
        );
    })
    .finally(() => {
        const app = new Vue(
            VueApp
        );
    });*/

const app = new Vue(
    VueApp
);

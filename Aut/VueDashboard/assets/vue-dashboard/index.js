import './Vuetify';
import icons from './Icons';
import './Tour';
import './Maps';
import router from "./Router";
import store from "./Vuex";
import './Vuex/Wrappers';
import './Ckeditor';
import './Clipboard';
import './Filters';
import i18n from "./Langs/i18n";
import components from './Components';
// import './Directives';

export default {
    el: '#app',
    components,
    template: `
        <app/>`,
    router,
    store,
    i18n,
    created() {
        this.initConfig();
        this.initFirebase();
        this.initPusher();
        this.initTranslationMessage();
        this.initVuetify();
    },
    methods: {
        initVuetify() {
            if (this.$automata.config.color.primary) {
                this.$vuetify.theme.primary = this.$automata.config.color.primary;
            }
            if (this.$automata.config.color.secondary) {
                this.$vuetify.theme.secondary = this.$automata.config.color.secondary;
            }
            this.$vuetify.rtl = this.$automata.isRtl;
            this.$vuetify.lang.current = this.$automata.config.language.locale;

            for (let key in icons) {
                this.$vuetify.icons[key] = icons[key];
            }
        },
        initConfig() {
            this.$automata.config = _.merge(JSON.parse(CONFIG), this.$automata.config);
            document.querySelector('#configuration').remove();
        },
        initFirebase() {
            Vue.prototype.$firebase = this.$firebase[this.$automata.config.firebase.driver || 'null'];

            this.$firebase.initializeApp({
                apiKey: this.$automata.config.firebase.apiKey,
                authDomain: this.$automata.config.firebase.authDomain,
                databaseURL: this.$automata.config.firebase.databaseURL,
                projectId: this.$automata.config.firebase.projectId,
                storageBucket: this.$automata.config.firebase.storageBucket,
                messagingSenderId: this.$automata.config.firebase.messagingSenderId,
                appId: this.$automata.config.firebase.appId,
                measurementId: this.$automata.config.firebase.measurementId
            });
        },
        initPusher() {
            let echo = this.$echo[this.$automata.config.echo.driver || 'null'];

            let $options = {
                broadcaster: 'pusher',
                key: this.$automata.config.echo.key,
                cluster: this.$automata.config.echo.cluster,
                wsHost: window.location.hostname,
                wsPort: 6001,
                authEndpoint: `${this.$automata.url.baseFullUrl}/broadcasting/auth`,
                forceTLS: false,
                //disableStats: true,
            };

            if (this.$automata.config.echo.forceTLS) {
                $options['wssHost'] = window.location.hostname;
                $options['wssPort'] = 6001;
                $options['encrypted'] = true;
                $options['forceTLS'] = true;
            }

            Vue.prototype.$echo = new echo($options);

            this.$echo.connector.pusher.connection.bind('connected', () => {
                if (this.$echo.socketId()) {
                    Vue.prototype.$http.defaults.headers.common['X-Socket-Id'] = this.$echo.socketId();
                }
            });
        },
        initTranslationMessage() {
            let translations = JSON.parse(TRANSLATIONS);
            for (let key in translations) {
                this.$i18n.mergeLocaleMessage(key, translations[key]);
            }
            document.querySelector('#translations_lines').remove();
        }
    }
}

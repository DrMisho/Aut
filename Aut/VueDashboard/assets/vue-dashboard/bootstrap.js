import automata from './automata';
import JSPath from 'jspath';
import accounting from 'accounting/accounting';
window.JSPath = JSPath;
window.automata = automata;
window.accounting = accounting;
window._ = require('lodash');
window.Vue = require('vue');
window.moment = require('moment');
import axios from './axios';
import Sortable from  './VueDraggable';
window.Sortable = Sortable;
import './Apexchart';
import echo from './Websockets';
import firebase from './Firebase';

moment.locale(automata.config.language.locale);

Vue.prototype.$automata = automata;
Vue.prototype.$http = axios;
Vue.prototype.$echo = echo;
Vue.prototype.$firebase = firebase;

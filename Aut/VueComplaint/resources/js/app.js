import './bootstrap';
import Vue from 'vue';
// import Lang from 'lang.js';
// var lang = new Lang({
//     messages: './messages.js',
//     locale: 'en',
//     fallback: 'en'
// });
// console.log(Lang,Lang.getLocale());
// import translations from './messages.js';
// var lang = new Lang();
// lang.setLocale('en');
// lang.setMessages(translations);
// Vue.filter('trans', (...args) => {
//    return lang.get(...args);
//   });
require('bootstrap');
import axios from 'axios';
import DateInput from '../js/components/DateInput.vue';
import TextArea from '../js/components/TextArea.vue';
import TextInput from '../js/components/TextInput.vue';
import TimeInput from '../js/components/TimeInput.vue';
import NumberInput from '../js/components/NumberInput.vue';
import FormButton from '../js/components/FormButton.vue';
import SelectInput from '../js/components/SelectInput.vue';
import BtnModal from "../js/components/BtnModal";
import LinkModal from "../js/components/LinkModal";
import Modal from "../js/components/Modal";
import Tabs from "../js/components/Tabs";
import ComplaintTab from "../js/components/ComplaintTab";
import AddComplaint from "../js/components/AddComplaint";
import ShowComplaint from "../js/components/ShowComplaint";
Vue.component('date-input',DateInput);
Vue.component('text-area',TextArea);
Vue.component('text-input',TextInput);
Vue.component('time-input',TimeInput);
Vue.component('number-input',NumberInput);
Vue.component('form-button',FormButton);
Vue.component('select-input',SelectInput);
Vue.component('btn-modal',BtnModal);
Vue.component('link-modal',LinkModal);
Vue.component('modal',Modal);
Vue.component('tabs',Tabs);
Vue.component('complaint-tab',ComplaintTab);
Vue.component('add-complaint',AddComplaint);
Vue.component('show-complaint',ShowComplaint);
// Vue.component("tab", {
//     template: "#tab",
//     data: function() {
//         return {
//             databaseOptions: [],
//         };
//     },
//     props: ["tab"],
//     methods: {
//     },
//     components:
//         {
//         }
//
// });
new Vue({
    el: '#app',
    // data:
    //     {
    //         // tabs: [
    //         //     {
    //         //         name: "tab1",
    //         //         id: 6,
    //         //         isActive: true
    //         //     },
    //         //     {
    //         //         name: "tab2",
    //         //         id: 8,
    //         //         isActive: false
    //         //     },
    //         //     {
    //         //         name: "tab3",
    //         //         id: 5,
    //         //         isActive: false
    //         //     },
    //         //     {
    //         //         name: "tab3",
    //         //         id: 5,
    //         //         isActive: false
    //         //     }
    //         // ],
    //         activeTab: {}
    //     },
    data () {
        return {

        }
    },
    // created() {
    //     // Make an ajax request to our server -Skills
    //     axios.get('vueComp').then(response=> this.skills = response.data);
    // }

});

import automata from "./automata";
import router from './Router';

let axios = require('axios');

axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
axios.defaults.headers.common['Accept-Language'] = automata.config.language.locale;

let token = document.head.querySelector('meta[name="csrf-token"]');
axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;

let webp = document.head.querySelector('meta[name="support-webp"]');
axios.defaults.headers.common['Accept'] = `${axios.defaults.headers.common['Accept']}${webp.content}`;

// Add a response interceptor
axios.interceptors.response.use( function (response) {
    return response;
}, function (error)  {
    //router.push({name: 'errors.404'});
    //Vue.prototype.$notification.error('Test Show notification');
    if (error.response) {
        // The request was made and the server responded with a status code
        // that falls out of the range of 2xx
        //console.log(error.response.data);
        //console.log(error.response.status);
        //console.log(error.response.headers);
    } else if (error.request) {
        // The request was made but no response was received
        // `error.request` is an instance of XMLHttpRequest in the browser and an instance of
        // http.ClientRequest in node.js
        //console.log(error.request);
    } else {
        // Something happened in setting up the request that triggered an Error
        //console.log('Error', error.message);
    }
    return Promise.reject(error);
});

export default axios;

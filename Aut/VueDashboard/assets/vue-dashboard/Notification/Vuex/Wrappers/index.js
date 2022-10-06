/**
 * @Note Make it like this because notification object used in axios.js
 */

import notification from './notification';

Vue.prototype.$notification = notification;

/*Vue.prototype.$http.interceptors.response.use((response) => {
    let method = response.config.method;
    if (method !== 'get') {
        console.log('response', Vue.$store);
    }
    return response;
}, function (error) {
    console.log('error', error);
    return Promise.reject(error);
});*/

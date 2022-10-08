import EchoManager from './EchoManager';

window.Pusher = require('pusher-js');

export default EchoManager;

/*
let $options = {
    broadcaster: 'pusher',
    key: process.env.MIX_PUSHER_APP_KEY,
    cluster: process.env.MIX_PUSHER_APP_CLUSTER,
    wsHost: window.location.hostname,
    wsPort: 6001,
    authEndpoint: `${document.querySelector('meta[name="base-full-url"]').content}/broadcasting/auth`,
    forceTLS: false,
    //disableStats: true,
};

if (process.env.MIX_PUSHER_FORCE_TLS) {
    $options['wssHost'] = window.location.hostname;
    $options['wssPort'] = 6001;
    $options['encrypted'] = true;
    $options['forceTLS'] = true;
}

/!**
 * Use broadcaster driver (null, pusher) instead
 *!/
let echo = new EchoManager(process.env.MIX_PUSHER_ECHO_DRIVER, $options);

echo.connector.pusher.connection.bind('connected', () => {
    if (echo.socketId()) {
        Vue.prototype.$http.defaults.headers.common['X-Socket-Id'] = echo.socketId();
    }
});

export default echo;
*/

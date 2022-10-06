import Vuetify from 'vuetify';
import ar from 'vuetify/es5/locale/ar';
// import icons from './../Icons';

Vue.use(Vuetify, {//@todo options not work we changed when init the App
    rtl: automata.isRtl,
    iconfont: 'fa',
    lang: {
        locales: {ar},
        current: automata.config.language.locale,
    },
    theme: {
        primary: '#19608a',//b81416
        secondary: '#219b6c',//f68010
    },
    // icons,
});

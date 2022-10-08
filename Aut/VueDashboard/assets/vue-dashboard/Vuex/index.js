import Vue from 'vue';
import Vuex from 'vuex';
import auth from './../Authentication/Vuex/Stores/auth';
import notification from './../Notification/Vuex/Stores/notification';
import navigation from './../Navigation/Vuex/Stores/navigation';
import toolbarProgress from './../ToolbarProgress/Vuex/Stores/toolbar-progress';
// import language from './../Langs/Vuex/Stores/language';

Vue.use(Vuex);

const debug = process.env.NODE_ENV !== 'production';

export default new Vuex.Store({
    modules: {
        auth,
        notification,
        navigation,
        toolbarProgress,
        // language,
    },
    strict: debug,
});

import VueI18n from 'vue-i18n';
import messages from './../../../../../resources/assets/js/Langs';

Vue.use(VueI18n);

const i18n = new VueI18n({
    locale: automata.config.language.locale,
    fallbackLocale: automata.config.language.fallbackLocale,
    messages,
});

export default i18n;

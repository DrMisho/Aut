import config from "../Config";

export let
    supportedLocales = config.supportedLocales,
    hideDefault = true,
    defaultLocale = config.defaultLocale,
    vuetifyLocales = {};


export default {
    supportedLocales,
    hideDefault,
    defaultLocale,
    vuetifyLocales
};

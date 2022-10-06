export default {
    color: {
        primary: null,
        secondary: null,
    },
    background: '',
    pattern: {
        background: undefined,
        nav: undefined,
        navigation: undefined,
        content: undefined,
    },
    logo: {
        /**
         * you can place {locale} to replace it with current locale
         */
        src: '',
        aspectRatio: undefined,
    },
    motto: '',
    app_name: '',
    registration: true,
    forget_password: true,
    supportedLocales: {
        'ar': {name: 'Arabic', script: 'Arab', native: 'العربية', regional: 'ar_AE', dir: 'rtl'},
        'en': {name: 'English', script: 'Latn', native: 'English', regional: 'en_GB', dir: 'ltr'},
    },
    defaultLocale: 'ar',
    phone_prefix: '+963',
    phone_format: '## ###-####',
    social_networks: {
        'facebook': {
            icon: 'fab fa-facebook-f',
            color: '#3b5998',
            url: 'login/facebook',
        },
        'instagram': {
            icon: 'fab fa-instagram',
            color: '#833ab4',
            url: 'login/instagram',
        },
        'youtube': {
            icon: 'fab fa-youtube',
            color: '#ff0000',
            url: 'login/youtube',
        },
        'google': {
            icon: 'fab fa-google',
            color: '#ea4335',
            url: 'login/google',
        },
        'linkedin': {
            icon: 'fab fa-linkedin-in',
            color: '#0077b5',
            url: 'login/linkedin',
        },
        'twitter': {
            icon: 'fab fa-twitter',
            color: '#1da1f2',
            url: 'login/twitter',
        },
        'apple': {
            icon: 'fab fa-apple',
            color: '#a3aaae',
            url: 'login/apple',
        },
    },
    /** do not activate in this file "to take the order as they defined in dashboard.config.js" */
    social_login: false,
    /*{
        facebook: true,
        instagram: true,
        youtube: true,
        linkedin: true,
        google: {
            attribute: {xs12: true}
        },
        twitter: false,
        apple: false,
    },*/
    /** Show Privacy Link  */
    privacy_link: false,
}

<?php

return [
    'fonts' => [
        'ar' => [
            'url' => "https://fonts.googleapis.com/css?family=Tajawal&amp;subset=arabic&display=swap",
            'name' => "'Tajawal', sans-serif",
            'preload' => 'https://fonts.gstatic.com/s/tajawal/v3/Iura6YBj_oCad4k1nzGBCw.woff2',
        ],
        'en' => [
            'url' => "https://fonts.googleapis.com/css?family=Raleway&display=swap",
            'name' => "'Raleway', sans-serif",
        ],
    ],

    'google_analytics' => env('DASHBOARD_GOOGLE_ANALYTICS', false),

    /** for meta tags */
    'tile_color' => '#00aba9',

    /** for meta tags */
    'theme_color' => '#ffffff',

    'color' => [
        'primary' => '#197896',
        'secondary' => '#f89b1e',
    ],

    'background' => 'images/background.jpg',

    'pattern' => [
        'background' => null,
        'nav' => null,
        'navigation' => null,
        'content' => null,
    ],

    'logo' => [
        /**
         * you can place {locale} to replace it with current locale
         */
        'src' => 'images/logo.png',
        'aspectRatio' => null,
    ],

    'loader_logo' => 'images/logo.png',

    'favicon' => 'favicon.ico',

    'fav_folder' => 'images/favicon/',

    'motto' => '',

    'app_name' => env('APP_NAME'),

    'registration' => true,

    'forget_password' => true,

    'phone_prefix' => '+963',

    'phone_format' => '## ###-####',

    'social_networks' => [
        'facebook' => [
            'icon' => 'fab fa-facebook-f',
            'color' => '#3b5998',
            'url' => 'login/facebook',
        ],
        'instagram' => [
            'icon' => 'fab fa-instagram',
            'color' => '#833ab4',
            'url' => 'login/instagram',
        ],
        'youtube' => [
            'icon' => 'fab fa-youtube',
            'color' => '#ff0000',
            'url' => 'login/youtube',
        ],
        'google' => [
            'icon' => 'fab fa-google',
            'color' => '#ea4335',
            'url' => 'login/google',
        ],
        'linkedin' => [
            'icon' => 'fab fa-linkedin-in',
            'color' => '#0077b5',
            'url' => 'login/linkedin',
        ],
        'twitter' => [
            'icon' => 'fab fa-twitter',
            'color' => '#1da1f2',
            'url' => 'login/twitter',
        ],
        'apple' => [
            'icon' => 'fab fa-apple',
            'color' => '#a3aaae',
            'url' => 'login/apple',
        ],
    ],

    /**
     * do not activate in this file "to take the order as they defined in project/config/vue-dashboard"
     * Available Options:
     * [
     *  facebook => true,
     *  instagram => true,
     *  youtube => true,
     *  linkedin => true,
     *  google => [
     *      attribute => [xs12 => true]
     *  ],
     *  twitter => false,
     *  apple => false,
     * ]
     */
    'social_login' => false,

    /** Show Privacy Link  */
    'privacy_link' => false,

    'firebase' => [
        /**
         * null, sdk
         */
        'driver' => env('FIREBASE_DRIVER', null),

        "apiKey" => env('FIREBASE_API_KEY', null),

        "authDomain" => env('FIREBASE_AUTH_DOMAIN', null),

        "databaseURL" => env('FIREBASE_DATABASE_URL', null),

        "projectId" => env('FIREBASE_PROJECT_ID', null),

        "storageBucket" => env('FIREBASE_STORAGE_BUCKET', null),

        "messagingSenderId" => env('FIREBASE_MESSAGING_SENDER_ID', null),

        "appId" => env('FIREBASE_APP_ID', null),

        "measurementId" => env('FIREBASE_MEASUREMENT_ID', null),

        'service_worker_script' => env('FIREBASE_SW_SCRIPT', 'js/firebase-messaging-sw.js'),
    ],

    'echo' => [
        /**
         * null, laravel-echo
         */
        'driver' => env('PUSHER_ECHO_DRIVER', null),

        'key' => env('PUSHER_APP_KEY', null),

        'cluster' => env('PUSHER_APP_CLUSTER', null),

        'forceTLS' => env('PUSHER_APP_TLS', null),
    ],

    /**
     * This to merge translation lines to vue-i18n
     */
    'translation_lines' => [
        'navigation',
        'app' => [
            'except' => [],
        ],
        'auth' => [
            'only' => [],
        ],
        'global-settings::global_settings',
        'global-settings::app',
    ],
];

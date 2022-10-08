<?php

return [
//    'fake_ip' => '8.8.8.8', //us
//    'fake_ip' => '109.228.192.2', // tr
//    'fake_ip' => '178.171.128.2', // sy

    //'domain' => env('COUNTRYTIZED_DOMAIN', 'acp.local'),

    'countries' => [
        'sy' => [
            'localize' => [
                'supportedLocal' => [
                    'ar' => ['name' => 'Arabic', 'script' => 'Arab', 'native' => 'العربية', 'regional' => 'ar_AE', 'dir' => 'rtl'],
                    'en' => ['name' => 'English', 'script' => 'Latn', 'native' => 'English', 'regional' => 'en_GB', 'dir' => 'ltr']
                ],
                'locale' => 'ar',
            ],
            'db' => [
                'connection' => 'sy',
            ],
        ],
        'ly' => [
            'localize' => [
                'supportedLocal' => [
                    'ar' => ['name' => 'Arabic', 'script' => 'Arab', 'native' => 'العربية', 'regional' => 'ar_AE', 'dir' => 'rtl'],
                    'en' => ['name' => 'English', 'script' => 'Latn', 'native' => 'English', 'regional' => 'en_GB', 'dir' => 'ltr']
                ],
                'locale' => 'ar',
            ],
            'db' => [
                'connection' => 'ly',
            ],
        ],
        'eg' => [
            'localize' => [
                'supportedLocal' => [
                    'ar' => ['name' => 'Arabic', 'script' => 'Arab', 'native' => 'العربية', 'regional' => 'ar_AE', 'dir' => 'rtl'],
                    'en' => ['name' => 'English', 'script' => 'Latn', 'native' => 'English', 'regional' => 'en_GB', 'dir' => 'ltr']
                ],
                'locale' => 'ar',
            ],
            'db' => [
                'connection' => 'ly',
            ],
        ],
        'iq' => [
            'localize' => [
                'supportedLocal' => [
                    'ar' => ['name' => 'Arabic', 'script' => 'Arab', 'native' => 'العربية', 'regional' => 'ar_AE', 'dir' => 'rtl'],
                    'en' => ['name' => 'English', 'script' => 'Latn', 'native' => 'English', 'regional' => 'en_GB', 'dir' => 'ltr']
                ],
                'locale' => 'ar',
            ],
            'db' => [
                'connection' => 'ly',
            ],
        ],
        'tr' => [
            'localize' => [
                'supportedLocal' => [
                    'tr' => ['name' => 'Turkish', 'script' => 'Latn', 'native' => 'Türkçe', 'regional' => 'tr_TR', 'dir' => 'ltr'],
                    'en' => ['name' => 'English', 'script' => 'Latn', 'native' => 'English', 'regional' => 'en_GB', 'dir' => 'ltr']
                ],
                'locale' => 'tr',
            ],
            'db' => [
                'connection' => 'tr',
            ],
        ],
    ],
];
<?php
/**
 * This Configuration to display Translations to User
 */
return [
    'app' => [
        'navigation' => [
            'name' => 'translator.navigation',
            'excepts' => [
                'authentication'
            ],
        ],
        'app' => [
            'name' => 'translator.app',
            'excepts' => [

            ],
        ],
    ],
    'vendor' => [
        'global-settings' => [
            'global_settings' => [
                'name' => 'translator.global-settings.global_settings',
                'excepts' => [],
            ],
            'app' => [
                'name' => 'translator.global-settings.app',
                'excepts' => [],
            ],
        ],
        'rii' => [
            'app' => [
                'name' => 'translator.rii.app',
                'excepts' => [],
            ],
        ]
    ],
    'json' => [
        'name' => 'translator.global_variable',
        'excepts' => [],
    ],
];

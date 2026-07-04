<?php

return [

    'apc_enabled' => false,
    'apc_prefix' => 'laravel:',
    'num_formatter' => 'Locale',
    'pcntl_max' => 4,

    'version' => env('APP_VERSION', 1),

    'roles' => ['admin', 'editor'],
    'panel' => 'dashboard',

    'multishop' => false,
    'multilocale' => false,

    'routes' => [
        'home' => [
            'middleware' => ['web']
        ],

        'default' => [
            'prefix' => 'shop',
            'middleware' => ['web']
        ],

        'basket' => [
            'prefix' => 'shop',
            'middleware' => ['web']
        ],

        'checkout' => [
            'prefix' => 'shop',
            'middleware' => ['web']
        ],

        'confirm' => [
            'prefix' => 'shop',
            'middleware' => ['web']
        ],

        'account' => [
            'prefix' => 'profile',
            'middleware' => ['web']
        ],
    ],

    'resource' => [
        'db' => [
            'adapter' => 'mysql',
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'marketplace'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
        ],
    ],

    'page' => [],

    'client' => [],

    'controller' => [],

    'i18n' => [],

    'madmin' => [],

    'mshop' => [
        'locale' => [
            'site' => 'default'
        ]
    ],
];
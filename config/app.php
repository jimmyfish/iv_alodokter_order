<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application. This value is used when the
    | framework needs to place the application's name in a notification or
    | any other location as required by the application or its packages.
    |
    */

    'url' => env('APP_URL'),
    'name'              => env('APP_NAME', 'Laravel'),
    'env'               => env('APP_ENV', 'production'),
    'debug'             => (bool)env('APP_DEBUG', false),
    'locale'            => 'en',
    'fallback_locale'   => 'en',
    'key'               => env('APP_KEY'),
    'cipher'            => 'AES-256-CBC',
    'aliases'           => [
        'App' => Illuminate\Support\Facades\App::class,
    ],
];
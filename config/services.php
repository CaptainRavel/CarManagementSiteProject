<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'google' => [
        'client_id' => '993589762366-6j6j2ljn1ls05973fptfa9rerm6h23vu.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'https://ilezaauto.pl/login/google/callback',
    ],

    'facebook' => [
        'client_id' => '582157317060770',
        'client_secret' => '98291d35f5cc63a302ef203a90e0ec0b',
        'redirect' => 'https://ilezaauto.pl/login/facebook/callback',
    ],
];

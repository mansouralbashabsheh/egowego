<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => env('SES_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
        'webhook' => [
            'secret' => env('STRIPE_WEBHOOK_SECRET'),
            'tolerance' => env('STRIPE_WEBHOOK_TOLERANCE', 300),
        ],
    ],

    'google' => [
        'client_id' => env('GOOGLE_CLIENT_ID','949918470892-g9ff8ednmkus7fo03lb9l4i4u357jsbi.apps.googleusercontent.com'),         
'client_secret' => env('GOOGLE_CLIENT_SECRET','g9Us8yRkL3GhMJhYun1KtXRU'),   
    'redirect' => 'http://localhost:8000/login/google/callback',
],








'facebook' => [
    'client_id' => '1428615833935494',  // Your Facebook App ID
    'client_secret' => 'c0c87ef5ffb661586e98682c5273ecd4', // Your Facebook App Secret
    'redirect' =>'http://localhost:8000/login/facebook/callback',
],
];

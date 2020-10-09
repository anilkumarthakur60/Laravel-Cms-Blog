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

    'github' => [
        'client_id' => '94963c1a233ffbd2969e',
        'client_secret' => '12f9c5c346e9ccd0dcdf9fce68e70e83a2da1df9',
        'redirect' => 'http://laravelblog.com/login/github/callback',
    ],
    'facebook' => [
        'client_id' => '1242232086176521',
        'client_secret' => '7057f026e551de6c4241d91782d70da5',
        'redirect' => 'http://laravelblog.com/login/facebook/callback',
    ],
    'google' => [
        'client_id' => '355555850224-sd36iloqrstscqti0n8n6m5rvhchpch2.apps.googleusercontent.com',
        'client_secret' => 'MVtT3qO9rtF0yxBku8kLCKjq',
        'redirect' => 'http://laravelblog.com/login/google/callback',
    ],

];

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
        'client_id' => '185469859816-cft4qlma7vkjosj7do4acb7nkemmgl0s.apps.googleusercontent.com',
        'client_secret' => 'DPpapa8oh0NXI_fat-PKycgR',
        'redirect' => 'http://127.0.0.1:8000/auth/google/callback' 
    ],

    'facebook' => [
        'client_id' => '138405131433117',
        'client_secret' => '114ea14ba3fdc7fe508aa783cbca3401',
        'redirect' => 'http://localhost:8000/auth/facebook/callback',
    ],



];

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

    'firebase' => [

        'apiKey' => 'AIzaSyAdFe_D2wILouwG8jNbEr9YedC-yR0CzrA',
        'authDomain' => 'sotrali.firebaseapp.com',
        'projectId' => 'sotrali',
        'storageBucket' => 'sotrali.appspot.com',
        'messagingSenderId' => '655314199601',
        'appId' => '1:655314199601:web:b9965d68cf7487cb262110',
        'measurementId' => 'G-9ELWCJ1XY9',
        'databaseURL' => 'https://sotrali-default-rtdb.firebaseio.com/'

    ],

];

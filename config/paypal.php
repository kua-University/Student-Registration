<?php

return [
    'mode' => env('PAYPAL_MODE', 'sandbox'), // or 'live'
    'client_id' => env('PAYPAL_SANDBOX_CLIENT_ID'),
    'client_secret' => env('PAYPAL_SANDBOX_CLIENT_SECRET'),
    'log' => [
        'active' => true,
        'level' => 'DEBUG', // PLEASE USE `INFO` LEVEL FOR LOGGING IN PRODUCTION
        'file' => storage_path('logs/paypal.log'),
    ],
];

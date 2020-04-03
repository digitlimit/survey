<?php

return [
    /*
    |--------------------------------------------------------------------------
    | SMS configuration.
    |--------------------------------------------------------------------------
    |
    |
    |
    */
    'default' => [
        'driver' => 'xwireless',
    ],

    'drivers' => [
        'xwireless' => [
            'base_url' => 'http://panel.xwireless.net/API/WebSMS/Http/v1.0a/index.php'
        ],
    ],
];
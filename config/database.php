<?php

use Illuminate\Support\Str;

return [
    'default' => env('DB_CONNECTION', 'null'),
    'connections' => [
        'null' => [
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => '',
        ],
    ],
];


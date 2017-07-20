<?php

return [
    'oracle' => [
        'driver'        => 'oracle',
        'tns'           => env('DB_TNS', ''),
        'host'          => env('DB_HOST', '192.168.57.70'),
        'port'          => env('DB_PORT', '1521'),
        'database'      => env('DB_DATABASE', 'orclcs'),
        'username'      => env('DB_USERNAME', 'yzy'),
        'password'      => env('DB_PASSWORD', '88888888'),
        'charset'       => env('DB_CHARSET', 'AL32UTF8'),
        'prefix'        => env('DB_PREFIX', ''),
        'prefix_schema' => env('DB_SCHEMA_PREFIX', ''),
    ],
];

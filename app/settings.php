<?php
return [

    // View settings
    'view' => [
        'template_path' => __DIR__ . '/templates',
        'twig' => [
            'cache' => __DIR__ . '/../cache/twig',
            'debug' => true,
            'auto_reload' => true,
        ],
        'globals' => [
            'ga_code' => getenv('GA_CODE')
        ]
    ],

    // monolog settings
    'logger' => [
        'name' => 'app',
        'path' => __DIR__ . '/../log/app.log',
    ],

    'github_client_id' => getenv('GITHUB_CLIENT_ID'),
    'github_client_secret' => getenv('GITHUB_CLIENT_SECRET')
];

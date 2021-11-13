<?php

return [
    'path_prefix' => '/SmartSoft',

    'providers' => [
        App\Providers\RouteProvider::class,
        App\Providers\ViewProvider::class,
        App\Providers\DatabaseProvider::class
    ],

    'middlewares' => [
        'auth' => App\Middlewares\Auth::class
    ]
];
<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    // Other properties...

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            // Other middleware...
        ],

        'api' => [
            // Other middleware...
        ],
    ];

    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [
        // Other middleware...
        'admin' => \App\Http\Middleware\AdminMiddleware::class,
    ];
    protected $middleware = [
        \App\Http\Middleware\AdminMiddleware::class,
        // ...
    ];

    // Other methods...
}


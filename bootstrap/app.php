<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

// Register Middleware
use App\Http\Middleware\SuperAdminMiddleware;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\UserMiddleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
        $middleware->alias([
            SuperAdminMiddleware::class => 'superadmin',
            AdminMiddleware::class => 'admin',
            UserMiddleware::class => 'user',
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();

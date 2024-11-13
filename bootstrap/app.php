<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
// user cookies
use App\Http\Middleware\TrackUserActivity;
// track log
use App\Http\Middleware\LogUserActions;
use App\Http\Middleware\UpgradeToHttpsUnderNgrok;
use ErlandMuchasaj\LaravelGzip\Middleware\GzipEncodeResponse;
use Spatie\Permission\Middleware\RoleMiddleware;
use Spatie\Permission\Middleware\PermissionMiddleware;
use Spatie\Permission\Middleware\RoleOrPermissionMiddleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // roles
        $middleware->alias([
            'role' => RoleMiddleware::class,
            'permission' => PermissionMiddleware::class,
            'role_or_permission' => RoleOrPermissionMiddleware::class
        ]);

        $middleware->prepend(GzipEncodeResponse::class);
        $middleware->append(TrackUserActivity::class);
        $middleware->append(LogUserActions::class);
        $middleware->append(UpgradeToHttpsUnderNgrok::class);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();

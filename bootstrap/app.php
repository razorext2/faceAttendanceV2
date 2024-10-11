<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
// user cookies
use App\Http\Middleware\TrackUserActivity;
// track log
use App\Http\Middleware\LogUserActions;
use App\Http\Middleware\UpgradeToHttpsUnderNgrok;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // roles
        $middleware->alias([
            'role' => \Spatie\Permission\Middleware\RoleMiddleware::class,
            'permission' => \Spatie\Permission\Middleware\PermissionMiddleware::class,
            'role_or_permission' => \Spatie\Permission\Middleware\RoleOrPermissionMiddleware::class
        ]);

        $middleware->append(TrackUserActivity::class);
        $middleware->append(LogUserActions::class);
        $middleware->append(UpgradeToHttpsUnderNgrok::class);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();

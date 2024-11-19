<?php

use App\Http\Controllers\Api\ApiCollectorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// api for collectors, cancel using group
// Route::prefix('v1')->group(function () {
Route::apiResource('/collectors', ApiCollectorController::class);
// });

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

<?php

use App\Http\Controllers\Api\ApiCollectorController;
use App\Http\Controllers\Api\ApiPhotoCollectController;
use App\Http\Controllers\PegawaiController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::apiResource('/collectors', ApiCollectorController::class);

Route::patch('collectors/{collector}/confirm', [ApiCollectorController::class, 'confirmCollect']);

Route::patch('collectors/{collector}/deny', [ApiCollectorController::class, 'denyCollect']);

Route::apiResource('/collector-photos', ApiPhotoCollectController::class);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

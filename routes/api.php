<?php

use App\Http\Controllers\Api\ApiCollectorController;
use App\Http\Controllers\Api\ApiPhotoCollectController;
use App\Http\Controllers\PegawaiController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;


Route::apiResource('/collectors', ApiCollectorController::class);

Route::patch('collectors/{collector}/confirm', [ApiCollectorController::class, 'confirmCollect']);

Route::patch('collectors/{collector}/deny', [ApiCollectorController::class, 'denyCollect']);

Route::apiResource('/collector-photos', ApiPhotoCollectController::class);

// api ke server utama
Route::post('proxy/server/attendance', function (Request $request) {
    // 
    $response = Http::post('https://indodacin.nusa.net.id/web/finger/secureapi.php?tipe=insertAttendance', [
        'kode_jari' => $request->input('kode_jari'),
    ]);

    return $response->json();
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

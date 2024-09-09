<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// breeze for regist, verif, login and logout
Route::get('/', function () {
    return view('home');
})->name('landing.page');


Route::get('/dashboard', [\App\Http\Controllers\AdminController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
// end breeze

// api for get pegawai data
Route::get('/api/getPegawai', [\App\Http\Controllers\PegawaiController::class, 'getPegawai']);
Route::get('/api/pegawai-images/{id}', [\App\Http\Controllers\PegawaiController::class, 'getPegawaiImages']);
Route::post('/api/saveImage', [\App\Http\Controllers\PegawaiController::class, 'storeImage']);
Route::get('/api/getPegawaiData/{label}', [\App\Http\Controllers\PegawaiController::class, 'getPegawaiDataByLabel']);

// absen
Route::post('/check-attendance', [\App\Http\Controllers\PegawaiController::class, 'checkAttendance']);
Route::post('/store-attendance', [\App\Http\Controllers\AttendanceController::class, 'storeAttendance']);
Route::post('/store-attendance-out', [\App\Http\Controllers\AttendanceOutController::class, 'storeAttendance']);

// daftar
Route::get('/photo-regist', [\App\Http\Controllers\PegawaiController::class, 'photoRegist'])->name('photo.regist');
Route::post('/photo-regist-process', [\App\Http\Controllers\PegawaiController::class, 'photoRegistProcess'])->name('photo.registProcess');

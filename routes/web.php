<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
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

// admin
Route::get('/dashboard', [\App\Http\Controllers\AdminController::class, 'index'])->name('dashboard');

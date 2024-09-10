<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\AttendanceOutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\JabatanController;
use Illuminate\Support\Facades\Route;

// breeze for regist, verif, login and logout
Route::get('/', function () {
    return view('home');
})->name('landing.page');


Route::get('/dashboard', [AdminController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/dashboard/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/dashboard/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // menu di admin
    Route::get('dashboard/attendance', [AttendanceController::class, 'index'])->name('dashboard.attendance');
    Route::get('dashboard/pegawai', [PegawaiController::class, 'index'])->name('dashboard.pegawai');
    Route::get('dashboard/jabatan', [JabatanController::class, 'index'])->name('dashboard.jabatan');
});

require __DIR__ . '/auth.php';
// end breeze

// api for get pegawai data
Route::get('/api/getPegawai', [PegawaiController::class, 'getPegawai']);
Route::get('/api/pegawai-images/{id}', [PegawaiController::class, 'getPegawaiImages']);
Route::post('/api/saveImage', [PegawaiController::class, 'storeImage']);
Route::get('/api/getPegawaiData/{label}', [PegawaiController::class, 'getPegawaiDataByLabel']);

// absen
Route::post('/check-attendance', [PegawaiController::class, 'checkAttendance']);
Route::post('/store-attendance', [AttendanceController::class, 'storeAttendance']);
Route::post('/store-attendance-out', [AttendanceOutController::class, 'storeAttendance']);

// daftar
Route::get('/photo-regist', [PegawaiController::class, 'photoRegist'])->name('photo.regist');
Route::post('/photo-regist-process', [PegawaiController::class, 'photoRegistProcess'])->name('photo.registProcess');

<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\AttendanceOutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\JabatanController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

// breeze for regist, verif, login and logout
// landing page
Route::get('/', function () {
    return view('home');
})->name('landing.page');

// route bisa diakses jika login
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/dashboard/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/dashboard/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // menu di admin
    Route::get('/dashboard/attendance', [AttendanceController::class, 'index'])->name('dashboard.attendance');

    // pegawai
    Route::get('/dashboard/pegawai', [PegawaiController::class, 'index'])->name('dashboard.pegawai');
    Route::get('/dashboard/pegawai/add', [PegawaiController::class, 'create'])->name('pegawai.add');
    Route::post('/dashboard/pegawai/store', [PegawaiController::class, 'store'])->name('pegawai.store');
    Route::get('/dashboard/pegawai/edit/{pegawai}', [PegawaiController::class, 'edit'])->name('pegawai.edit');
    Route::put('/dashboard/pegawai/update/{pegawai}', [PegawaiController::class, 'update'])->name('pegawai.update');
    Route::delete('/dashboard/pegawai/delete/{pegawai}', [PegawaiController::class, 'destroy'])->name('pegawai.delete');

    // jabatan
    Route::get('dashboard/jabatan', [JabatanController::class, 'index'])->name('dashboard.jabatan');
    Route::get('/dashboard/jabatan/add', [JabatanController::class, 'create'])->name('jabatan.add');
    Route::post('/dashboard/jabatan/store', [JabatanController::class, 'store'])->name('jabatan.store');
    Route::get('/dashboard/jabatan/edit/{jabatan}', [JabatanController::class, 'edit'])->name('jabatan.edit');
    Route::put('/dashboard/jabatan/update/{jabatan}', [JabatanController::class, 'update'])->name('jabatan.update');
    Route::delete('/dashboard/jabatan/delete/{jabatan}', [JabatanController::class, 'destroy'])->name('jabatan.delete');

    // attendanceIn
    Route::get('/dashboard/attendanceIn', [AttendanceController::class, 'index'])->name('attendanceIn.view');

    // attendanceOut
    Route::get('/dashboard/attendanceOut', [AttendanceOutController::class, 'index'])->name('attendanceOut.view');
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

// route untuk manipulasi url pemanggilan foto
Route::get('/libs/{filename}', function ($filename) {
    $directories = Storage::directories('public/labels');

    $filePath = null;

    foreach ($directories as $directory) {
        $fullpath = $directory . '/capturedImg/' . $filename;

        if (Storage::exists($fullpath)) {
            $filePath = $fullpath;
            break;
        }
    }

    if ($filePath) {
        return Storage::response($filePath);
    } else {
        abort(404);
    }
})->where('filename', '.*');

<?php

use App\Http\Controllers\DayoffController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\AttendanceOutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\GolonganController;
use App\Http\Controllers\PlacementController;
use App\Http\Controllers\LoghistoryController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\CaptureController;
use App\Http\Controllers\AllowanceController;
use App\Http\Controllers\DeductionController;
use App\Http\Controllers\CollectController;
use App\Models\Placement;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

// breeze for regist, verif, login and logout
// Route::get('/foo', function () {
//     Artisan::call('storage:link');
// });

// landing page
// turn off for a while, redirect to dashboard
Route::get('/', function () {
    return view('home', ['title' => 'Take attendance']);
    // return redirect('login');
})->name('landing.page');

Route::get('photo-regist', function () {
    return view('regist', ['title' => 'Register your face.']);
})->name('photo.regist');

// route bisa diakses jika login
Route::middleware('auth')->group(function () {
    // pegawai
    Route::get('api/get-attendance-data', [PegawaiController::class, 'getAttendanceData'])->name('pegawai.getattendance');

    // ini dulu ya brader yang digrouping
    Route::prefix('dashboard')->as('')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('dashboard');
        Route::get('profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        // attendanceIn
        Route::get('attendanceIn', [AttendanceController::class, 'index'])->name('attendanceIn.index');

        // attendanceOut
        Route::get('attendanceOut', [AttendanceOutController::class, 'index'])->name('attendanceOut.index');

        // log
        Route::get('log', [LoghistoryController::class, 'index'])->name('log.index');

        // record attendance
        Route::get('capture', [CaptureController::class, 'index'])->name('capture.index');

        // route kolektor
        Route::resource('collect', CollectController::class);

        // route dayoff
        Route::get('dayoff/autocomplete/', [DayoffController::class, 'autocomplete'])->name('dayoff.autocomplete');
        Route::post('dayoff/upload-image', [DayoffController::class, 'uploadImage'])->name('dayoff.uploadimage');
        Route::put('dayoff/confirm/{dayoff}', [DayoffController::class, 'confirm'])->name('dayoff.confirm');
        Route::put('dayoff/ignore/{dayoff}', [DayoffController::class, 'ignore'])->name('dayoff.ignore');
        Route::resource('dayoff', DayoffController::class);

        // route permission
        Route::resource('permissions', PermissionController::class);

        // route roles
        Route::resource('roles', RoleController::class);

        // route users
        Route::resource('users', UserController::class);

        // route golongan
        Route::resource('golongan', GolonganController::class);

        // route placement
        Route::resource('placement', PlacementController::class);

        // route division
        Route::resource('division', DivisionController::class);

        // route jabatan
        Route::resource('jabatan', JabatanController::class);

        // route pegawai
        Route::get('pegawai/{pegawai}/detail', [PegawaiController::class, 'detail'])->name('pegawai.detail');
        Route::get('pegawai/{pegawai}/attendance', [PegawaiController::class, 'attendanceList'])->name('pegawai.attendancelist');
        Route::get('pegawai/{pegawai}/payroll', [PegawaiController::class, 'payrollInfo'])->name('pegawai.payrollinfo');
        Route::get('pegawai/{pegawai}/timeline', [PegawaiController::class, 'timeline'])->name('pegawai.timeline');
        Route::get('pegawai/{pegawai}/collectors', [PegawaiController::class, 'reportCollectors'])->name('pegawai.collectors');
        Route::resource('pegawai', PegawaiController::class);

        // route pegawai allowance & deductions
        Route::resource('pegawai/allowances', AllowanceController::class);
        Route::resource('pegawai/deductions', DeductionController::class);
    });
});

require __DIR__ . '/auth.php';

// api for get pegawai data
Route::get('api/getPegawai', [PegawaiController::class, 'getPegawai']);
Route::get('api/getPegawai/{id}', [PegawaiController::class, 'getPegawaiByKode']);
Route::get('api/pegawai-images/{id}', [PegawaiController::class, 'getPegawaiImages']);
Route::post('api/saveImage', [PegawaiController::class, 'storeImage']);
Route::get('api/getPegawaiData/{label}', [PegawaiController::class, 'getPegawaiDataByLabel']);

// absen
Route::post('check-attendance', [PegawaiController::class, 'checkAttendance']);
Route::post('store-attendance', [AttendanceController::class, 'storeAttendance']);
Route::post('store-attendance-out', [AttendanceOutController::class, 'storeAttendance']);

// daftar
Route::post('photo-regist-process', [PegawaiController::class, 'photoRegistProcess'])->name('photo.registProcess');

// route untuk manipulasi url pemanggilan foto
$libs = sha1('libs');

Route::get('/' . $libs . '/{filename}', function ($filename) {
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

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
    Route::get('/getdata-pegawai', [PegawaiController::class, 'getData'])->name('getDataPegawai');
    Route::get('/dashboard/pegawai', [PegawaiController::class, 'index'])->name('dashboard.pegawai');
    Route::get('/dashboard/pegawai/add', [PegawaiController::class, 'create'])->name('pegawai.add');
    Route::post('/dashboard/pegawai/store', [PegawaiController::class, 'store'])->name('pegawai.store');
    Route::get('/dashboard/pegawai/edit/{pegawai}', [PegawaiController::class, 'edit'])->name('pegawai.edit');
    Route::put('/dashboard/pegawai/update/{pegawai}', [PegawaiController::class, 'update'])->name('pegawai.update');
    Route::delete('/dashboard/pegawai/delete/{pegawai}', [PegawaiController::class, 'destroy'])->name('pegawai.delete');
    Route::get('dashboard/pegawai/detail/{pegawai}', [PegawaiController::class, 'detail'])->name('pegawai.detail');
    // Route::post('/dashboard/pegawai/photo-update', [PegawaiController::class, 'updatePhoto'])->name('pegawai.photo');
    Route::get('/api/get-attendance-data', [PegawaiController::class, 'getAttendanceData'])->name('pegawai.getattendance');
    Route::get('/dashboard/pegawai/timeline/{pegawai}', [PegawaiController::class, 'timeline'])->name('pegawai.timeline');
    Route::get('/dashboard/pegawai/timeline/{pegawai}?date={tanggal}', [PegawaiController::class, 'timelineByDate'])->name('pegawai.timelinebydate');

    // jabatan
    Route::get('/getdata-jabatan', [JabatanController::class, 'getData'])->name('getDataJabatan');
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

    // divisi

    Route::get('/getdata-division', [DivisionController::class, 'getData'])->name('getDataDivision');
    Route::get('dashboard/division', [DivisionController::class, 'index'])->name('dashboard.division');
    Route::get('dashboard/division/add', [DivisionController::class, 'create'])->name('division.add');
    Route::post('dashboard/division/store', [DivisionController::class, 'store'])->name('division.store');
    Route::get('dashboard/division/edit/{division}', [DivisionController::class, 'edit'])->name('division.edit');
    Route::put('dashboard/division/update/{division}', [DivisionController::class, 'update'])->name('division.update');
    Route::delete('dashboard/division/delete/{division}', [DivisionController::class, 'destroy'])->name('division.delete');

    // placement
    Route::get('/getdata-placement', [PlacementController::class, 'getData'])->name('getDataPlacement');
    Route::get('dashboard/placement', [PlacementController::class, 'index'])->name('dashboard.placement');
    Route::get('dashboard/placement/add', [PlacementController::class, 'create'])->name('placement.add');
    Route::post('dashboard/placement/store', [PlacementController::class, 'store'])->name('placement.store');
    Route::get('dashboard/placement/edit/{placement}', [PlacementController::class, 'edit'])->name('placement.edit');
    Route::put('dashboard/placement/update/{placement}', [PlacementController::class, 'update'])->name('placement.update');
    Route::delete('dashboard/placement/delete/{placement}', [PlacementController::class, 'destroy'])->name('placement.delete');

    // golongan
    Route::get('/getdata-golongan', [GolonganController::class, 'getData'])->name('getDataGolongan');
    Route::get('dashboard/golongan', [GolonganController::class, 'index'])->name('dashboard.golongan');
    Route::get('dashboard/golongan/add', [GolonganController::class, 'create'])->name('golongan.add');
    Route::post('dashboard/golongan/store', [GolonganController::class, 'store'])->name('golongan.store');
    Route::get('dashboard/golongan/edit/{golongan}', [GolonganController::class, 'edit'])->name('golongan.edit');
    Route::put('dashboard/golongan/update/{golongan}', [GolonganController::class, 'update'])->name('golongan.update');
    Route::delete('dashboard/golongan/delete/{golongan}', [GolonganController::class, 'destroy'])->name('golongan.delete');

    // users
    Route::get('/getdata-users', [UserController::class, 'getData'])->name('getDataUsers');
    Route::get('dashboard/users', [UserController::class, 'index'])->name('dashboard.users');
    Route::get('dashboard/users/add', [UserController::class, 'create'])->name('users.add');
    Route::post('dashboard/users/store', [UserController::class, 'store'])->name('users.store');
    Route::get('dashboard/users/edit/{users}', [UserController::class, 'edit'])->name('users.edit');
    Route::put('dashboard/users/update/{users}', [UserController::class, 'update'])->name('users.update');
    Route::delete('dashboard/users/delete/{users}', [UserController::class, 'destroy'])->name('users.delete');

    // roles
    Route::get('/getdata-roles', [RoleController::class, 'getData'])->name('getDataRoles');
    Route::get('dashboard/roles', [RoleController::class, 'index'])->name('dashboard.roles');
    Route::get('dashboard/roles/add', [RoleController::class, 'create'])->name('roles.add');
    Route::post('dashboard/roles/store', [RoleController::class, 'store'])->name('roles.store');
    Route::get('dashboard/roles/edit/{roles}', [RoleController::class, 'edit'])->name('roles.edit');
    Route::put('dashboard/roles/update/{roles}', [RoleController::class, 'update'])->name('roles.update');
    Route::delete('dashboard/roles/delete/{roles}', [RoleController::class, 'destroy'])->name('roles.delete');

    // permissions
    Route::get('/getdata-permissions', [PermissionController::class, 'getData'])->name('getDataPermissions');
    Route::get('dashboard/permissions', [PermissionController::class, 'index'])->name('dashboard.permissions');
    Route::get('dashboard/permissions/add', [PermissionController::class, 'create'])->name('permissions.add');
    Route::post('dashboard/permissions/store', [PermissionController::class, 'store'])->name('permissions.store');
    Route::get('dashboard/permissions/edit/{permissions}', [PermissionController::class, 'edit'])->name('permissions.edit');
    Route::put('dashboard/permissions/update/{permissions}', [PermissionController::class, 'update'])->name('permissions.update');
    Route::delete('dashboard/permissions/delete/{permissions}', [PermissionController::class, 'destroy'])->name('permissions.delete');

    // dayoff
    Route::get('/dashboard/dayoff/autocomplete', [DayoffController::class, 'autocomplete'])->name('autocomplete');
    Route::get('/getdata-dayoff', [DayoffController::class, 'getData'])->name('getDataDayoff');
    Route::get('dashboard/dayoff', [DayoffController::class, 'index'])->name('dashboard.dayoff');
    Route::get('dashboard/dayoff/add', [DayoffController::class, 'create'])->name('dayoff.add');
    Route::post('dashboard/dayoff/store', [DayoffController::class, 'store'])->name('dayoff.store');
    Route::get('dashboard/dayoff/edit/{dayoff}', [DayoffController::class, 'edit'])->name('dayoff.edit');
    Route::put('dashboard/dayoff/update/{dayoff}', [DayoffController::class, 'update'])->name('dayoff.update');
    Route::delete('dashboard/dayoff/delete/{dayoff}', [DayoffController::class, 'destroy'])->name('dayoff.delete');
    Route::post('/upload-image', [DayoffController::class, 'uploadImage']);
    Route::get('dashboard/dayoff/detail/{dayoff}', [DayoffController::class, 'detail'])->name('dayoff.detail');

    Route::put('dashboard/dayoff/detail/confirm/{dayoff}', [DayoffController::class, 'confirm'])->name('dayoff.confirm');
    Route::put('dashboard/dayoff/detail/ignore/{dayoff}', [DayoffController::class, 'ignore'])->name('dayoff.ignore');

    // log
    Route::get('dashboard/log', [LoghistoryController::class, 'index'])->name('dashboard.log');

    // record attendance
    Route::get('dashboard/capture', [CaptureController::class, 'index'])->name('dashboard.capture');
});

require __DIR__ . '/auth.php';
// end breeze

// api for get pegawai data
Route::get('/api/getPegawai', [PegawaiController::class, 'getPegawai']);
Route::get('/api/getPegawai/{id}', [PegawaiController::class, 'getPegawaiByID']);
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

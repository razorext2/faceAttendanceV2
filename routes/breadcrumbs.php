<?php // routes/breadcrumbs.php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
    $trail->push('Dashboard', route('dashboard'));
});

Breadcrumbs::for('errors.404', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Page Not Found');
});

Breadcrumbs::for('dashboard.pegawai', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Pegawai', route('dashboard.pegawai'));
});

Breadcrumbs::for('pegawai.edit', function (BreadcrumbTrail $trail, $pegawai) {
    $trail->parent('dashboard.pegawai');
    $trail->push('Pegawai Edit', route('pegawai.edit', $pegawai));
});

Breadcrumbs::for('pegawai.add', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard.pegawai');
    $trail->push('Pegawai Add', route('pegawai.add'));
});

Breadcrumbs::for('jabatan.add', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard.jabatan');
    $trail->push('Jabatan Add', route('jabatan.add'));
});

Breadcrumbs::for('jabatan.edit', function (BreadcrumbTrail $trail, $jabatan) {
    $trail->parent('dashboard.jabatan');
    $trail->push('Jabatan Edit', route('jabatan.edit', $jabatan));
});

Breadcrumbs::for('attendanceIn.view', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Absen Masuk', route('attendanceIn.view'));
});

Breadcrumbs::for('attendanceOut.view', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Absen Keluar', route('attendanceOut.view'));
});

Breadcrumbs::for('dashboard.jabatan', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Jabatan', route('dashboard.jabatan'));
});

Breadcrumbs::for('profile.edit', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Edit Profile', route('profile.edit'));
});

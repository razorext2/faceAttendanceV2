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

Breadcrumbs::for('dashboard.attendance', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Attendance', route('dashboard.attendance'));
});

Breadcrumbs::for('dashboard.jabatan', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Jabatan', route('dashboard.jabatan'));
});

Breadcrumbs::for('profile.edit', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Edit Profile', route('profile.edit'));
});

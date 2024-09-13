<div class="mb-8 mt-2">
    @if (Route::currentRouteName() == 'dashboard')
    <h2 class="mb-4 text-3xl font-bold leading-none tracking-tight text-gray-900 md:text-4xl">Dashboard</h2>
    @elseif (Route::currentRouteName() == 'dashboard.pegawai')
    <h2 class="mb-4 text-3xl font-bold leading-none tracking-tight text-gray-900 md:text-4xl">Pegawai</h2>
    @elseif (Route::currentRouteName() == 'pegawai.edit')
    <h2 class="mb-4 text-3xl font-bold leading-none tracking-tight text-gray-900 md:text-4xl">Edit Pegawai</h2>
    @elseif (Route::currentRouteName() == 'pegawai.add')
    <h2 class="mb-4 text-3xl font-bold leading-none tracking-tight text-gray-900 md:text-4xl">Tambah Pegawai</h2>
    @elseif (Route::currentRouteName() == 'dashboard.jabatan')
    <h2 class="mb-4 text-3xl font-bold leading-none tracking-tight text-gray-900 md:text-4xl">Jabatan</h2>
    @elseif (Route::currentRouteName() == 'jabatan.add')
    <h2 class="mb-4 text-3xl font-bold leading-none tracking-tight text-gray-900 md:text-4xl">Tambah Jabatan</h2>
    @elseif (Route::currentRouteName() == 'jabatan.edit')
    <h2 class="mb-4 text-3xl font-bold leading-none tracking-tight text-gray-900 md:text-4xl">Edit Jabatan</h2>
    @elseif (Route::currentRouteName() == 'attendanceIn.view')
    <h2 class="mb-4 text-3xl font-bold leading-none tracking-tight text-gray-900 md:text-4xl">Absen Masuk</h2>
    @elseif (Route::currentRouteName() == 'attendanceOut.view')
    <h2 class="mb-4 text-3xl font-bold leading-none tracking-tight text-gray-900 md:text-4xl">Absen Keluar</h2>
    @elseif (Route::currentRouteName() == 'profile.edit')
    <h2 class="mb-4 text-3xl font-bold leading-none tracking-tight text-gray-900 md:text-4xl">
        Profile -
        <span class="text-lg font-bold md:text-xl" style="font-size: 24px !important;">{{ Auth::user()->name }}</span>
    </h2>
    @endif
</div>
<div class="dark:text-white mb-8 mt-2 text-gray-800">
	@if (Route::currentRouteName() == 'dashboard')
		<h2 class="mb-4 text-3xl font-bold leading-none tracking-tight md:text-4xl">Dashboard</h2>
		<!-- pegawai -->
	@elseif (Route::currentRouteName() == 'dashboard.pegawai')
		<h2 class="mb-4 text-3xl font-bold leading-none tracking-tight md:text-4xl">Pegawai</h2>
	@elseif (Route::currentRouteName() == 'pegawai.edit')
		<h2 class="mb-4 text-3xl font-bold leading-none tracking-tight md:text-4xl">Edit Pegawai</h2>
	@elseif (Route::currentRouteName() == 'pegawai.add')
		<h2 class="mb-4 text-3xl font-bold leading-none tracking-tight md:text-4xl">Tambah Pegawai</h2>
	@elseif (Route::currentRouteName() == 'pegawai.detail')
		<h2 class="mb-4 text-3xl font-bold leading-none tracking-tight md:text-4xl">Detail Absensi</h2>
	@elseif (Route::currentRouteName() == 'pegawai.timeline')
		<h2 class="mb-4 text-3xl font-bold leading-none tracking-tight md:text-4xl">Linimasa</h2>
		<!-- end pegawai -->
		<!-- jabatan -->
	@elseif (Route::currentRouteName() == 'dashboard.jabatan')
		<h2 class="mb-4 text-3xl font-bold leading-none tracking-tight md:text-4xl">Jabatan</h2>
	@elseif (Route::currentRouteName() == 'jabatan.add')
		<h2 class="mb-4 text-3xl font-bold leading-none tracking-tight md:text-4xl">Tambah Jabatan</h2>
	@elseif (Route::currentRouteName() == 'jabatan.edit')
		<h2 class="mb-4 text-3xl font-bold leading-none tracking-tight md:text-4xl">Edit Jabatan</h2>
		<!-- end jabatan -->
		<!-- division -->
	@elseif (Route::currentRouteName() == 'dashboard.division')
		<h2 class="mb-4 text-3xl font-bold leading-none tracking-tight md:text-4xl">Divisi</h2>
	@elseif (Route::currentRouteName() == 'division.add')
		<h2 class="mb-4 text-3xl font-bold leading-none tracking-tight md:text-4xl">Tambah Divisi</h2>
	@elseif (Route::currentRouteName() == 'division.edit')
		<h2 class="mb-4 text-3xl font-bold leading-none tracking-tight md:text-4xl">Edit Divisi</h2>
		<!-- end division -->
		<!-- placement -->
	@elseif (Route::currentRouteName() == 'dashboard.placement')
		<h2 class="mb-4 text-3xl font-bold leading-none tracking-tight md:text-4xl">Penempatan</h2>
	@elseif (Route::currentRouteName() == 'placement.add')
		<h2 class="mb-4 text-3xl font-bold leading-none tracking-tight md:text-4xl">Tambah Penempatan</h2>
	@elseif (Route::currentRouteName() == 'placement.edit')
		<h2 class="mb-4 text-3xl font-bold leading-none tracking-tight md:text-4xl">Edit Penempatan</h2>
		<!-- end placement -->
		<!-- dayoff -->
	@elseif (Route::currentRouteName() == 'dashboard.dayoff')
		<h2 class="mb-4 text-3xl font-bold leading-none tracking-tight md:text-4xl">Pengajuan</h2>
	@elseif (Route::currentRouteName() == 'dayoff.add')
		<h2 class="mb-4 text-3xl font-bold leading-none tracking-tight md:text-4xl">Tambah Pengajuan</h2>
	@elseif (Route::currentRouteName() == 'dayoff.edit')
		<h2 class="mb-4 text-3xl font-bold leading-none tracking-tight md:text-4xl">Edit Pengajuan</h2>
	@elseif (Route::currentRouteName() == 'dayoff.detail')
		<h2 class="mb-4 text-3xl font-bold leading-none tracking-tight md:text-4xl">Detail Pengajuan</h2>
		<!-- end dayoff -->
		<!-- absence -->
	@elseif (Route::currentRouteName() == 'attendanceIn.view')
		<h2 class="mb-4 text-3xl font-bold leading-none tracking-tight md:text-4xl">Absen Masuk</h2>
	@elseif (Route::currentRouteName() == 'attendanceOut.view')
		<h2 class="mb-4 text-3xl font-bold leading-none tracking-tight md:text-4xl">Absen Keluar</h2>
	@elseif (Route::currentRouteName() == 'dashboard.capture')
		<h2 class="mb-4 text-3xl font-bold leading-none tracking-tight md:text-4xl">Rekam Absensi</h2>
		<!-- end absence -->
	@elseif (Route::currentRouteName() == 'profile.edit')
		<h2 class="mb-4 text-3xl font-bold leading-none tracking-tight md:text-4xl">
			Profile -
			<span class="text-lg font-bold md:text-xl" style="font-size: 24px !important;">{{ Auth::user()->name }}</span>
		</h2>
	@endif
</div>

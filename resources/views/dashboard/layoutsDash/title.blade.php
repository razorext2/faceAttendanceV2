<div class="dark:text-white mb-8 mt-2 text-gray-800">
	@if (Route::currentRouteName() == 'dashboard')
		<h2 class="dark:text-white text-2xl font-bold tracking-tight text-gray-950 sm:text-3xl">Dashboard
		</h2>
		<!-- pegawai -->
	@elseif (Route::currentRouteName() == 'dashboard.pegawai')
		<h2 class="dark:text-white text-2xl font-bold tracking-tight text-gray-950 sm:text-3xl">Pegawai</h2>
	@elseif (Route::currentRouteName() == 'pegawai.edit')
		<h2 class="dark:text-white text-2xl font-bold tracking-tight text-gray-950 sm:text-3xl">Edit Pegawai
		</h2>
	@elseif (Route::currentRouteName() == 'pegawai.add')
		<h2 class="dark:text-white text-2xl font-bold tracking-tight text-gray-950 sm:text-3xl">Tambah
			Pegawai</h2>
	@elseif (Route::currentRouteName() == 'pegawai.detail')
		<h2 class="dark:text-white text-2xl font-bold tracking-tight text-gray-950 sm:text-3xl">Detail
			Absensi</h2>
	@elseif (Route::currentRouteName() == 'pegawai.timeline')
		<h2 class="dark:text-white text-2xl font-bold tracking-tight text-gray-950 sm:text-3xl">Linimasa</h2>
	@elseif (Route::currentRouteName() == 'pegawai.collectors')
		<h2 class="dark:text-white text-2xl font-bold tracking-tight text-gray-950 sm:text-3xl">Laporan Rute</h2>
	@elseif (Route::currentRouteName() == 'pegawai.payrollinfo')
		<h2 class="dark:text-white text-2xl font-bold tracking-tight text-gray-950 sm:text-3xl">Payroll</h2>
	@elseif (Route::currentRouteName() == 'pegawai.attendancelist')
		<h2 class="dark:text-white text-2xl font-bold tracking-tight text-gray-950 sm:text-3xl">Attendance Summary</h2>
		<!-- end pegawai -->
		<!-- jabatan -->
	@elseif (Route::currentRouteName() == 'dashboard.jabatan')
		<h2 class="dark:text-white text-2xl font-bold tracking-tight text-gray-950 sm:text-3xl">Jabatan</h2>
	@elseif (Route::currentRouteName() == 'jabatan.add')
		<h2 class="dark:text-white text-2xl font-bold tracking-tight text-gray-950 sm:text-3xl">Tambah
			Jabatan</h2>
	@elseif (Route::currentRouteName() == 'jabatan.edit')
		<h2 class="dark:text-white text-2xl font-bold tracking-tight text-gray-950 sm:text-3xl">Edit Jabatan
		</h2>
		<!-- end jabatan -->
		<!-- division -->
	@elseif (Route::currentRouteName() == 'dashboard.division')
		<h2 class="dark:text-white text-2xl font-bold tracking-tight text-gray-950 sm:text-3xl">Divisi</h2>
	@elseif (Route::currentRouteName() == 'division.add')
		<h2 class="dark:text-white text-2xl font-bold tracking-tight text-gray-950 sm:text-3xl">Tambah
			Divisi</h2>
	@elseif (Route::currentRouteName() == 'division.edit')
		<h2 class="dark:text-white text-2xl font-bold tracking-tight text-gray-950 sm:text-3xl">Edit Divisi
		</h2>
		<!-- end division -->
		<!-- collect -->
	@elseif (Route::currentRouteName() == 'dashboard.collect.index')
		<h2 class="dark:text-white text-2xl font-bold tracking-tight text-gray-950 sm:text-3xl">Laporan Kolektor</h2>
	@elseif (Route::currentRouteName() == 'dashboard.collect.create')
		<h2 class="dark:text-white text-2xl font-bold tracking-tight text-gray-950 sm:text-3xl">Tambah
			Laporan</h2>
	@elseif (Route::currentRouteName() == 'dashboard.collect.edit')
		<h2 class="dark:text-white text-2xl font-bold tracking-tight text-gray-950 sm:text-3xl">Edit Laporan
		</h2>
	@elseif (Route::currentRouteName() == 'dashboard.collect.show')
		<h2 class="dark:text-white text-2xl font-bold tracking-tight text-gray-950 sm:text-3xl">Detail Laporan
		</h2>
		<!-- end collect -->
		<!-- placement -->
	@elseif (Route::currentRouteName() == 'dashboard.placement')
		<h2 class="dark:text-white text-2xl font-bold tracking-tight text-gray-950 sm:text-3xl">Penempatan
		</h2>
	@elseif (Route::currentRouteName() == 'placement.add')
		<h2 class="dark:text-white text-2xl font-bold tracking-tight text-gray-950 sm:text-3xl">Tambah
			Penempatan</h2>
	@elseif (Route::currentRouteName() == 'placement.edit')
		<h2 class="dark:text-white text-2xl font-bold tracking-tight text-gray-950 sm:text-3xl">Edit
			Penempatan</h2>
		<!-- end placement -->
		<!-- dayoff -->
	@elseif (Route::currentRouteName() == 'dashboard.dayoff')
		<h2 class="dark:text-white text-2xl font-bold tracking-tight text-gray-950 sm:text-3xl">Pengajuan
		</h2>
	@elseif (Route::currentRouteName() == 'dayoff.add')
		<h2 class="dark:text-white text-2xl font-bold tracking-tight text-gray-950 sm:text-3xl">Tambah
			Pengajuan</h2>
	@elseif (Route::currentRouteName() == 'dayoff.edit')
		<h2 class="dark:text-white text-2xl font-bold tracking-tight text-gray-950 sm:text-3xl">Edit
			Pengajuan</h2>
	@elseif (Route::currentRouteName() == 'dayoff.detail')
		<h2 class="dark:text-white text-2xl font-bold tracking-tight text-gray-950 sm:text-3xl">Detail
			Pengajuan</h2>
		<!-- end dayoff -->
		<!-- absence -->
	@elseif (Route::currentRouteName() == 'attendanceIn.index')
		<h2 class="dark:text-white text-2xl font-bold tracking-tight text-gray-950 sm:text-3xl">Absen Masuk
		</h2>
	@elseif (Route::currentRouteName() == 'attendanceOut.index')
		<h2 class="dark:text-white text-2xl font-bold tracking-tight text-gray-950 sm:text-3xl">Absen Keluar
		</h2>
	@elseif (Route::currentRouteName() == 'capture.index')
		<h2 class="dark:text-white text-2xl font-bold tracking-tight text-gray-950 sm:text-3xl">Rekam
			Absensi</h2>
		<!-- end absence -->
	@elseif (Route::currentRouteName() == 'profile.edit')
		<h2 class="dark:text-white text-2xl font-bold tracking-tight text-gray-950 sm:text-3xl">
			Profile -
			<span class="dark:text-white sm:text-3xlfont-size: 24px !important; text-2xl font-bold tracking-tight text-gray-950">
				{{ Auth::user()->name }}</span>
		</h2>
	@endif
</div>

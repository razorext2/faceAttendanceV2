@extends('dashboard.layoutsDash.app')
@section('content')
	<div class="dark:bg-[#18181b] dark:border-gray-700 mb-8 rounded-xl border border-gray-200 bg-white p-6 pt-2">

		<div class="w-full">
			<div class="">
				<ul class="flex flex-wrap text-center text-sm font-medium" id="default-tab" data-tabs-toggle="#default-tab-content"
					role="tablist">
					<li role="presentation">
						<button class="inline-block rounded-t-lg border-b-2 p-4" id="profile-tab" data-tabs-target="#profile" type="button"
							role="tab" aria-controls="profile" aria-selected="false">Profile</button>
					</li>

					<li role="presentation">
						<button
							class="dark:hover:text-gray-300 inline-block rounded-t-lg border-b-2 p-4 hover:border-gray-300 hover:text-gray-600"
							id="timeline-tab" data-tabs-target="#timeline" type="button" role="tab" aria-controls="timeline"
							aria-selected="false">Attendance</button>
					</li>
					<li role="presentation">
						<button
							class="dark:hover:text-gray-300 inline-block rounded-t-lg border-b-2 p-4 hover:border-gray-300 hover:text-gray-600"
							id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts"
							aria-selected="false">Payroll</button>
					</li>
					<li role="presentation">
						<button
							class="dark:hover:text-gray-300 inline-block rounded-t-lg border-b-2 p-4 hover:border-gray-300 hover:text-gray-600"
							id="update-tab" data-tabs-target="#update" type="button" role="tab" aria-controls="update"
							aria-selected="false">Timeline</button>
					</li>
					<li role="presentation">
						<button
							class="dark:hover:text-gray-300 inline-block rounded-t-lg border-b-2 p-4 hover:border-gray-300 hover:text-gray-600"
							id="actions-tab" data-tabs-target="#actions" type="button" role="tab" aria-controls="actions"
							aria-selected="false">Actions</button>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="dark:bg-[#18181b] dark:border-gray-700 mb-8 rounded-xl border border-gray-200 bg-white p-6"
		id="default-tab-content">
		<div class="grid gap-6 xl:grid-cols-2" id="profile" role="tabpanel" aria-labelledby="profile-tab">
			<div class="w-full">
				<div class="grid rounded-xl">
					<div class="relative w-full">
						<header class="flex flex-row">
							<h2 class="font-base text-sm text-gray-400">
								Personal Info
							</h2>
						</header>
						<h2 class="dark:text-white text-xl font-medium text-gray-900">
							{{ $pegawai->full_name }}
						</h2>

						@if (auth()->user()->can('pegawai-edit'))
							<a class="absolute bottom-0 right-0 p-1 text-sm text-blue-500 hover:underline"
								href="{{ route('pegawai.edit', $pegawai->id) }}">
								Edit
							</a>
						@endif
					</div>

					<div class="w-full">
						<div class="grid gap-2 md:grid-cols-2">
							@foreach ($images as $image)
								@if (!is_null($image))
									<div class="mt-4 rounded-xl">
										<img class="border-1 h-56 w-full rounded-xl border-gray-500 object-cover blur-sm hover:blur-none"
											src="{{ asset('storage/' . $pegawai->storage . $image) }}" alt="">
									</div>
								@endif
							@endforeach
						</div>

						<div class="mt-4">

							<div class="grid gap-2 md:grid-cols-2">

								<div
									class="dark:bg-gray-700 dark:border-gray-700 flex flex-col items-start justify-center rounded-xl border border-gray-200 bg-gray-100 p-3 md:col-span-2">
									<p class="dark:text-gray-300 text-sm text-gray-600">Kode Pegawai</p>
									<p class="text-navy-700 dark:text-white text-base font-medium">
										{{ $pegawai->kode_pegawai ?? 'N/A' }}
									</p>
								</div>

								<div
									class="dark:bg-gray-700 dark:border-gray-700 flex flex-col items-start justify-center rounded-xl border border-gray-200 bg-gray-100 p-3">
									<p class="dark:text-gray-300 text-sm text-gray-600">Nama Lengkap</p>
									<p class="text-navy-700 dark:text-white text-base font-medium">
										{{ $pegawai->full_name ?? 'N/A' }}
									</p>
								</div>

								<div
									class="dark:bg-gray-700 dark:border-gray-700 flex flex-col items-start justify-center rounded-xl border border-gray-200 bg-gray-100 p-3">
									<p class="dark:text-gray-300 text-sm text-gray-600">Panggilan</p>
									<p class="text-navy-700 dark:text-white text-base font-medium">
										{{ $pegawai->nick_name ?? 'N/A' }}
									</p>
								</div>

								<div
									class="dark:bg-gray-700 dark:border-gray-700 flex flex-col items-start justify-center rounded-xl border border-gray-200 bg-gray-100 p-3">
									<p class="dark:text-gray-300 text-sm text-gray-600">No Telepon</p>
									<p class="text-navy-700 dark:text-white text-base font-medium">
										{{ $pegawai->no_telp ?? 'N/A' }}
									</p>
								</div>

								<div
									class="dark:bg-gray-700 dark:border-gray-700 flex flex-col items-start justify-center rounded-xl border border-gray-200 bg-gray-100 p-3">
									<p class="dark:text-gray-300 text-sm text-gray-600">Tanggal Lahir</p>
									<p class="text-navy-700 dark:text-white text-base font-medium">
										{{ $pegawai->tgl_lahir ?? 'N/A' }}
									</p>
								</div>

								<div
									class="dark:bg-gray-700 dark:border-gray-700 flex flex-col items-start justify-center rounded-xl border border-gray-200 bg-gray-100 p-3 md:col-span-2">
									<p class="dark:text-gray-300 text-sm text-gray-600">Alamat</p>
									<p class="text-navy-700 dark:text-white text-base font-medium">
										{{ $pegawai->alamat ?? 'N/A' }}
									</p>
								</div>

								<div
									class="dark:bg-gray-700 dark:border-gray-700 flex flex-col items-start justify-center rounded-xl border border-gray-200 bg-gray-100 p-3">
									<p class="dark:text-gray-300 text-sm text-gray-600">Jabatan</p>
									<p class="text-navy-700 dark:text-white text-base font-medium">
										{{ $pegawai->jabatanRelasi->nama_jabatan ?? 'N/A' }}
									</p>
								</div>

								<div
									class="dark:bg-gray-700 dark:border-gray-700 flex flex-col items-start justify-center rounded-xl border border-gray-200 bg-gray-100 p-3">
									<p class="dark:text-gray-300 text-sm text-gray-600">Storage</p>
									<p class="text-navy-700 dark:text-white text-base font-medium">
										{{ $pegawai->storage ?? 'N/A' }}
									</p>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
			<div class="w-full grow space-y-6">
				<div class="w-full space-y-6 xl:col-span-2">
					<div class="rounded-xl py-2.5">

						<div class="mb-4 w-full">
							<header class="-mt-2.5 flex flex-col">
								<h2 class="dark:text-white text-xl font-medium text-gray-900">
									<span class="dark:text-gray-300 !text-md text-gray-700">Periode: </span>
									{{ $startOfMonth }}
								</h2>
								<p class="dark:text-gray-300 text-sm text-gray-700">
									Lorem ipsum, dolor sit amet consectetur adipisicing elit, doloremque repellat atque illum
									aliquid.
								</p>
							</header>
						</div>

						<div
							class="dark:border-gray-700 grid grid-cols-7 gap-2 rounded-xl border border-gray-200 bg-[#242427] p-4 text-center">
							<!-- Nama-nama hari -->
							<div class="dark:text-white font-medium text-gray-900">Min</div>
							<div class="dark:text-white font-medium text-gray-900">Sen</div>
							<div class="dark:text-white font-medium text-gray-900">Sel</div>
							<div class="dark:text-white font-medium text-gray-900">Rab</div>
							<div class="dark:text-white font-medium text-gray-900">Kam</div>
							<div class="dark:text-white font-medium text-gray-900">Jum</div>
							<div class="dark:text-white font-medium text-gray-900">Sab</div>

							<!-- Looping untuk menampilkan tanggal -->
							@foreach ($dd as $date)
								@if ($date)
									@php
										// Cek apakah ada data untuk tanggal ini
										$hasData = $attendanceData->contains(function ($attendance) use ($date) {
										    return \Carbon\Carbon::parse($attendance->jam_masuk)->isSameDay($date);
										});
									@endphp
									<div>
										<button
											class="{{ $hasData
											    ? 'bg-green-500 hover:bg-green-600 text-white dark:bg-green-800 dark:hover:bg-green-900 dark:text-white'
											    : 'bg-gray-200 text-gray-400 hover:bg-gray-300 dark:bg-transparent dark:text-gray-300' }} dark:border-gray-700 h-full w-full cursor-pointer rounded-lg border border-gray-200 p-2"
											data-date="{{ $date }}" data-popover-placement="left"
											data-popover-target="popover-click{{ $date }}" data-popover-trigger="click" type="button">
											{{ \Carbon\Carbon::parse($date)->isoFormat('D') }}
										</button>
									</div>

									<div
										class="dark:text-gray-400 dark:border-gray-600 invisible absolute z-10 inline-block rounded-xl border border-gray-200 bg-white text-sm text-gray-500 opacity-0 transition-opacity duration-300"
										id="popover-click{{ $date }}" data-popover role="tooltip">
										<div
											class="dark:border-gray-600 dark:bg-gray-700 rounded-t-xl border-b border-gray-200 bg-gray-100 px-3 py-2">
											<h3 class="dark:text-white font-semibold text-gray-900">Absen pada:
												{{ $date }}</h3>
										</div>
										<div class="popover-content dark:bg-[#18181b] max-h-[250px] overflow-y-auto p-4">
											<p>Tunggu sebentar, data sedang dimuat...</p>
										</div>
										<div data-popper-arrow></div>
									</div>
								@else
									<div></div> <!-- Grid kosong untuk hari sebelum tanggal 1 -->
								@endif
							@endforeach
						</div>

					</div>
				</div>
			</div>
		</div>
		<div class="hidden rounded-lg p-4" id="update" role="tabpanel" aria-labelledby="update-tab">
			<p class="dark:text-gray-400 text-sm text-gray-500">This is some placeholder content the <strong
					class="dark:text-white font-medium text-gray-800">Dashboard tab's associated content</strong>. Clicking another tab
				will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content
				visibility and styling.</p>
		</div>
		<div class="hidden rounded-lg p-4" id="timeline" role="tabpanel" aria-labelledby="timeline-tab">
			<p class="dark:text-gray-400 text-sm text-gray-500">This is some placeholder content the <strong
					class="dark:text-white font-medium text-gray-800">Settings tab's associated content</strong>. Clicking another tab
				will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content
				visibility and styling.</p>
		</div>
		<div class="hidden rounded-lg p-4" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
			<p class="dark:text-gray-400 text-sm text-gray-500">This is some placeholder content the <strong
					class="dark:text-white font-medium text-gray-800">Contacts tab's associated content</strong>. Clicking another tab
				will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content
				visibility and styling.</p>
		</div>
		<div class="hidden rounded-lg p-4" id="actions" role="tabpanel" aria-labelledby="actions-tab">
			<p class="dark:text-gray-400 text-sm text-gray-500">This is some placeholder content the <strong
					class="dark:text-white font-medium text-gray-800">Contacts tab's associated content</strong>. Clicking another tab
				will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content
				visibility and styling.</p>
		</div>
	</div>

	<script>
		document.addEventListener('DOMContentLoaded', () => {
			const buttons = document.querySelectorAll('[data-popover-trigger="click"]');

			buttons.forEach(button => {
				button.addEventListener('click', function() {
					const date = this.getAttribute('data-date');
					const popoverContent = document.querySelector(
						`#popover-click${date} .popover-content`);

					// Mengambil data menggunakan AJAX
					fetch(
							`/api/get-attendance-data?date=${date}&kode_pegawai={{ $pegawai->kode_pegawai }}`
						)
						.then(response => response.json())
						.then(data => {
							// Membuat tabel untuk data kehadiran
							let attendanceTable = `
                        <table class="min-w-full text-gray-800 divide-y divide-gray-200 dark:text-white dark:divide-gray-500">
                            <thead class="bg-gray-100 dark:bg-gray-700">
                                <tr>
                                    <th class="px-4 py-2 text-left rounded-tl-xl">ID</th>
                                    <th class="px-4 py-2 text-left">Jam Masuk</th>
                                    <th class="px-4 py-2 text-left rounded-tr-xl">Foto</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:bg-gray-600 dark:divide-gray-500">`;

							data.attendance.forEach(item => {
								const jamMasuk = new Date(item.jam_masuk);
								const formattedjamMasuk = jamMasuk.toLocaleTimeString(
									'id-ID', {
										year: 'numeric',
										month: 'long',
										day: 'numeric',
									});

								const photoURL =
									'{{ sha1('libs') }}'; // Ambil dari Blade
								const url = item.photoURL; // URL dari item
								const path =
									`{{ asset('') }}${photoURL}/${url}.png`; // Gabungkan URL

								attendanceTable += `
                                <tr>
                                    <td class="px-4 py-2">${item.id}</td>
                                    <td class="px-4 py-2">${formattedjamMasuk}</td>
                                    <td class="px-4 py-2"><img src="${path}" alt="Foto" class="object-cover w-16 h-16 rounded-lg"></td>
                                </tr>`;
							});

							attendanceTable += `
                            </tbody>
                        </table>`;

							// Membuat tabel untuk data keluar
							let attendanceOutTable = `
                        <table class="min-w-full text-gray-800 divide-y divide-gray-200 dark:text-white dark:divide-gray-500">
                            <thead class="bg-gray-100 dark:bg-gray-700">
                                <tr>
                                    <th class="px-4 py-2 text-left">ID</th>
                                    <th class="px-4 py-2 text-left">Jam Keluar</th>
                                    <th class="px-4 py-2 text-left">Foto</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:bg-gray-600 dark:divide-gray-500">`;
							data.attendanceOut.forEach(item => {
								const jamKeluar = new Date(item.jam_keluar);
								const formattedjamKeluar = jamKeluar.toLocaleTimeString(
									'id-ID', {
										year: 'numeric',
										month: 'long',
										day: 'numeric',
									});

								const photoURL =
									'{{ sha1('libs') }}'; // Ambil dari Blade
								const url = item.photoURL; // URL dari item
								const path =
									`{{ asset('') }}${photoURL}/${url}.png`; // Gabungkan URL

								attendanceOutTable += `
                                <tr>
                                    <td class="px-4 py-2">${item.id}</td>
                                    <td class="px-4 py-2">${formattedjamKeluar}</td>
                                    <td class="px-4 py-2"><img src="${path}" alt="Foto" class="object-cover w-16 h-16 rounded-lg"></td>
                                </tr>`;
							});

							attendanceOutTable += `
                            </tbody>
                            <tfooter>
                                <tr>
                                    <th class="px-4 py-2 text-left bg-gray-100 rounded-bl-xl dark:bg-gray-700"></th>
                                    <th class="px-4 py-2 text-left bg-gray-100 dark:bg-gray-700"></th>
                                    <th class="px-4 py-2 text-left bg-gray-100 rounded-br-xl dark:bg-gray-700"></th>
                                </tr>
                            </tfooter>
                        </table>`;

							// Memperbarui konten popover dengan tabel
							popoverContent.innerHTML = `
            ${attendanceTable}
            ${attendanceOutTable}
        `;
						})
						.catch(error => {
							console.error('Error fetching data:', error);
							popoverContent.innerHTML =
								'<p>Terjadi kesalahan saat memuat data.</p>';
						});
				});
			});
		});
	</script>
@endsection

@extends('dashboard.pegawai.detail')
@section('menus')
	<div class="rounded-lg" id="timeline" role="tabpanel" aria-labelledby="timeline-tab">
		<div class="w-full">
			<div class="grid gap-6 md:grid-cols-2">
				<div class="w-full md:col-span-2">
					<form id="dateForm" action="{{ route('pegawai.timeline', ['pegawai' => $pegawai->kode_pegawai]) }}" method="GET">
						@csrf
						<label class="dark:text-white sr-only mb-2 text-sm font-medium text-gray-900" for="search">Search</label>
						<div class="relative">
							<div class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3">
								<svg class="dark:text-gray-400 h-4 w-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
									fill="none" viewBox="0 0 20 20">
									<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
								</svg>
							</div>
							<input
								class="dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 block w-full rounded-lg border border-gray-300 bg-white px-2.5 py-4 ps-10 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
								id="datepicker-actions" type="text" datepicker datepicker-buttons datepicker-autoselect-today
								placeholder="Filter tanggal">
							<button
								class="dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 absolute bottom-2.5 end-2.5 rounded-lg bg-blue-700 px-4 py-2 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300"
								type="submit">Search</button>
						</div>
					</form>
				</div>
				<div class="dark:bg-[#18181b] dark:border-gray-700 w-full rounded-xl border border-gray-200 bg-white p-6 shadow-sm">
					<div class="mb-4">
						<p class="dark:text-white text-xl font-bold leading-none text-gray-900 md:text-2xl">{{ $pegawai->full_name }}</p>
						<p class="dark:text-white text-lg font-semibold leading-none text-gray-900 md:text-xl">
							@if (Request::query('date'))
								Lini masa,
								{{ \Carbon\Carbon::parse(Request::query('date'))->locale('id')->isoFormat('D MMMM YYYY') }}
							@else
								Lini masa,
								{{ \Carbon\Carbon::today()->locale('id')->isoFormat('D MMMM YYYY') }}
							@endif
						</p>
					</div>

					<ol class="dark:border-gray-700 relative ml-3 border-s border-gray-200" id="timelineContent"></ol>

				</div>

				<div
					class="dark:bg-[#18181b] dark:border-gray-700 h-max w-full rounded-xl border border-gray-200 bg-white p-6 shadow-sm">
					<div class="mb-4">
						<p class="dark:text-white text-xl font-bold leading-none text-gray-900 md:text-2xl">
							Mapping
						</p>
					</div>

					<div class="z-10 h-[500px] rounded-lg" id="map"></div>
				</div>
			</div>
		</div>
	</div>

	<script>
		document.addEventListener('DOMContentLoaded', function() {
			// Fungsi untuk inisialisasi peta dengan koordinat yang diberikan
			function initializeMap() {
				// Inisialisasi peta tanpa titik awal, kita akan menggunakan fitBounds
				var map = L.map('map');

				// Menambahkan Tile Layer dari OpenStreetMap
				L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
					maxZoom: 19,
					attribution: '&copy; OpenStreetMap contributors'
				}).addTo(map);

				// Koordinat Titik Awal, Titik Tengah, dan Titik Akhir dengan deskripsi
				var waypoints = [
					@if (!is_null($data2) && $data2->isNotEmpty())
						@foreach ($data2 as $index => $item)
							@if (!is_null($item->latitude) && !is_null($item->longitude))
								{
									coords: L.latLng({{ $item->latitude }}, {{ $item->longitude }}),
									name: '<p>Lokasi {{ $index + 1 }}</p><p>Koordinat: {{ $item->latitude }}, {{ $item->longitude }}</p><p>Waktu: {{ $item->created_at }}</p>'
								},
							@endif
						@endforeach
					@endif

					// Tambahkan titik default jika tidak ada data yang valid
					@if (
						$data2->isEmpty() ||
							!$data2->contains(function ($item) {
								return !is_null($item->latitude) && !is_null($item->longitude);
							}))
						{
							coords: L.latLng(3.591516090416829, 98.66902828216554),
							name: 'Lokasi Default'
						}
					@endif
				];

				var customIcon = L.icon({
					iconUrl: "{{ asset('assets/img/marker.png') }}", // Ganti dengan path ke ikon Anda
					iconSize: [25, 41], // Ukuran ikon
					iconAnchor: [12, 41], // Titik untuk mengaitkan ikon ke koordinat
					shadowUrl: "{{ asset('assets/img/marker-shadow.png') }}", // Ganti dengan path ke bayangan Anda
					shadowSize: [41, 41] // Ukuran bayangan
				});

				// Menentukan bounds (batas) untuk menampilkan semua marker
				var bounds = L.latLngBounds(waypoints.map(point => point.coords));
				map.fitBounds(bounds); // Otomatis menyesuaikan peta agar mencakup semua titik

				// Menambahkan Routing dari Titik Awal ke Titik Akhir
				L.Routing.control({
					waypoints: waypoints.map(point => point.coords),
					routeWhileDragging: false, // Mencegah rute diubah saat dragging
					createMarker: function(i, waypoint, n) {
						// Menambahkan marker dengan pop-up informasi
						return L.marker(waypoint.latLng, {
							icon: customIcon,
							draggable: false // Menonaktifkan draggable pada marker
						}).bindPopup(`<b>${waypoints[i].name}</b>`);
					},
					router: L.Routing.osrmv1({
						serviceUrl: 'https://router.project-osrm.org/route/v1/'
					}),
					show: false // Menyembunyikan panel rute di map
				}).addTo(map);
			}

			function getTimeline() {
				timelineContent = document.getElementById('timelineContent');

				fetch(
						`/api/get-attendance-data?id={{ $pegawai->kode_pegawai }}&date={{ \Carbon\Carbon::parse(Request::query('date'))->isoFormat('Y-MM-DD') }}`
					)
					.then(response => response.json())
					.then(data => {
						// Membuat tabel untuk data kehadiran
						let checkIn = '';
						let checkOut = '';

						// Membuat daftar check-in
						if (data.attendance.length > 0) {
							data.attendance.forEach(item => {
								const jamMasuk = new Date(item.jam_masuk);
								const formattedjamMasuk = jamMasuk.toLocaleTimeString(
									'id-ID', {
										year: 'numeric',
										month: 'long',
										day: 'numeric',
									});

								const photoURL = '{{ sha1('libs') }}'; // Ambil dari Blade
								const url = item.photoURL; // URL dari item
								const path = `{{ asset('') }}${photoURL}/${url}.png`; // Gabungkan URL
								const long_lat = `${item.longitude}, ${item.latitude}`;

								// Check if latitude or longitude is null
								const isOnsite = item.longitude === null || item.latitude === null;

								checkIn += `
                                    <li class="mb-10 ms-8 relative">
                                        <span class="dark:bg-green-900 absolute -start-11 flex h-6 w-6 items-center justify-center rounded-full bg-green-800">
                                            <svg class="dark:text-green-300 h-2.5 w-2.5 text-green-100" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                            </svg>
                                        </span>
                                        <h3 class="dark:text-white mb-1 flex items-center text-lg font-semibold text-gray-900">
                                            Check-in
                                            ${isOnsite ? `<span class="bg-green-100 text-green-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300 ms-3">Onsite</span>` : '<span class="bg-yellow-100 text-yellow-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300 ms-3">Rute</span>'}
                                        </h3>
                                        <span class="dark:text-gray-300 mb-2 block text-md font-normal leading-none text-gray-400">
											${isOnsite ? `Tidak ada data koordinat` : `${long_lat}`}	
										</span>
                                        <time class="dark:text-gray-500 mb-2 block text-sm font-normal leading-none text-gray-400">${formattedjamMasuk}</time>
                                        <img src="${path}" alt="Foto" class="absolute right-0 !-top-2.5 object-cover w-16 h-16 rounded-lg">
                                    </li>
                                `;
							});
						}

						// Membuat daftar check-out
						if (data.attendanceOut.length > 0) {
							const totalCount = data.attendanceOut.length; // Hitung total data

							data.attendanceOut.forEach((item, index) => {
								const jamKeluar = new Date(item.jam_keluar);
								const formattedjamKeluar = jamKeluar.toLocaleTimeString('id-ID', {
									year: 'numeric',
									month: 'long',
									day: 'numeric',
								});

								const photoURL = '{{ sha1('libs') }}'; // Ambil dari Blade
								const url = item.photoURL; // URL dari item
								const path = `{{ asset('') }}${photoURL}/${url}.png`; // Gabungkan URL
								const long_lat = `${item.longitude}, ${item.latitude}`;

								const isOnsite = item.longitude === null || item.latitude === null;

								// Tentukan teks berdasarkan indeks
								let statusText = 'Check-out'; // Default untuk data terakhir
								let iconColor = 'red';
								if (index < totalCount - 1) {
									statusText = 'Checkpoint';
									iconColor = 'yellow';
								}

								checkOut += `
									<li class="mb-10 ms-8 relative">
										<span class="dark:bg-${iconColor}-900 absolute -start-11 flex h-6 w-6 items-center justify-center rounded-full bg-${iconColor}-800">
											<svg class="dark:text-${iconColor}-300 h-2.5 w-2.5 text-${iconColor}-100" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
												fill="currentColor" viewBox="0 0 20 20">
												<path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
											</svg>
										</span>
										<h3 class="dark:text-white mb-1 flex items-center text-lg font-semibold text-gray-900">
											${statusText}
											${isOnsite ? `<span class="bg-green-100 text-green-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300 ms-3">Onsite</span>` : '<span class="bg-yellow-100 text-yellow-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300 ms-3">Rute</span>'}
										</h3>
										<span class="dark:text-gray-300 mb-2 block text-md font-normal leading-none text-gray-400">
											${isOnsite ? `Tidak ada data koordinat` : `${long_lat}`}
										</span>
										<time class="dark:text-gray-500 mb-2 block text-sm font-normal leading-none text-gray-400">${formattedjamKeluar}</time>
										<img src="${path}" alt="Foto" class="absolute right-0 !-top-2.5 object-cover w-16 h-16 rounded-lg">
									</li>
								`;
							});

						}

						// Memperbarui konten popover dengan tabel atau menampilkan pesan "Tidak ada data"
						if (checkIn === '' && checkOut === '') {
							timelineContent.innerHTML = `
                                    <h1 class="text-center text-gray-500 text-lg font-semibold">Tidak ada data</h1>
                                `;
						} else {
							timelineContent.innerHTML = `
                                ${checkIn}
                                ${checkOut}
                            `;
						}
					}).catch(error => {
						console.error('Error fetching data:', error);
						timelineContent.innerHTML =
							'<p>Terjadi kesalahan saat memuat data.</p>';
					});
			}

			// Inisialisasi peta dengan koordinat default
			initializeMap();
			getTimeline();
		});

		document.getElementById('dateForm').addEventListener('submit', function(event) {
			event.preventDefault(); // Prevent the default form submission
			const dateInput = document.getElementById('datepicker-actions').value;
			const url = new URL(this.action);

			if (dateInput) {
				url.searchParams.set('date', dateInput); // Add or update the 'd' parameter with the date value
			}

			// Redirect with the new URL, including the date parameter
			window.location.href = url;
		});
	</script>
@endsection

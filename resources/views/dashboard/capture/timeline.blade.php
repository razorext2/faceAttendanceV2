@extends('dashboard.layoutsDash.app')
@section('content')
	<div class="w-full">
		<div class="grid gap-4 md:grid-cols-2">
			<div
				class="dark:bg-gray-800 dark:border-gray-500 w-full rounded-xl border border-gray-200 bg-white p-6 shadow-sm md:col-span-2">
				<div class="relative w-full">
					<div class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3">
						<svg class="dark:text-gray-400 h-4 w-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
							fill="currentColor" viewBox="0 0 20 20">
							<path
								d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
						</svg>
					</div>
					<input
						class="dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 ps-10 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
						id="datepicker-actions" type="text" datepicker datepicker-buttons datepicker-autoselect-today
						placeholder="Filter tanggal">

				</div>
			</div>
			<div class="dark:bg-gray-800 dark:border-gray-500 w-full rounded-xl border border-gray-200 bg-white p-6 shadow-sm">
				<div class="mb-4">
					<p class="dark:text-white text-xl font-bold leading-none text-gray-900 md:text-2xl">
						Lini masa, {{ \Carbon\Carbon::today()->locale('id')->isoFormat('D MMMM YYYY') }}</p>
				</div>

				<ol class="dark:border-gray-700 relative ml-3 border-s border-gray-200" id="timelineContent"></ol>

			</div>

			<div
				class="dark:bg-gray-800 dark:border-gray-500 h-max w-full rounded-xl border border-gray-200 bg-white p-6 shadow-sm">
				<div class="mb-4">
					<p class="dark:text-white text-xl font-bold leading-none text-gray-900 md:text-2xl">
						Mapping
					</p>
				</div>

				<div class="h-[500px] rounded-lg" id="map"></div>
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
									name: 'Lokasi {{ $index + 1 }}: {{ $item->latitude }}, {{ $item->longitude }}'
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

				fetch(`/api/get-attendance-data?kode_pegawai={{ Request::segment(4) }}`)
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
                                        <span class="dark:text-gray-300 mb-2 block text-md font-normal leading-none text-gray-400">${long_lat}</span>
                                        <time class="dark:text-gray-500 mb-2 block text-sm font-normal leading-none text-gray-400">${formattedjamMasuk}</time>
                                        <img src="${path}" alt="Foto" class="absolute right-0 !-top-2.5 object-cover w-16 h-16 rounded-lg">
                                    </li>
                                `;
							});
						}

						// Membuat daftar check-out
						if (data.attendanceOut.length > 0) {
							data.attendanceOut.forEach(item => {
								const jamKeluar = new Date(item.jam_keluar);
								const formattedjamKeluar = jamKeluar.toLocaleTimeString(
									'id-ID', {
										year: 'numeric',
										month: 'long',
										day: 'numeric',
									});

								const photoURL = '{{ sha1('libs') }}'; // Ambil dari Blade
								const url = item.photoURL; // URL dari item
								const path = `{{ asset('') }}${photoURL}/${url}.png`; // Gabungkan URL
								const long_lat = `${item.longitude}, ${item.latitude}`;

								const isOnsite = item.longitude === null || item.latitude === null;

								checkOut += `
                                    <li class="mb-10 ms-8 relative">
                                        <span class="dark:bg-red-900 absolute -start-11 flex h-6 w-6 items-center justify-center rounded-full bg-red-800">
                                            <svg class="dark:text-red-300 h-2.5 w-2.5 text-red-100" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                            </svg>
                                        </span>
                                        <h3 class="dark:text-white mb-1 flex items-center text-lg font-semibold text-gray-900">
                                            Check-out
                                            ${isOnsite ? `<span class="bg-green-100 text-green-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300 ms-3">Onsite</span>` : '<span class="bg-yellow-100 text-yellow-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300 ms-3">Rute</span>'}
                                        </h3>
                                        <span class="dark:text-gray-300 mb-2 block text-md font-normal leading-none text-gray-400">${long_lat}</span>
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
	</script>
@endsection

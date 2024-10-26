@extends('dashboard.layoutsDash.app')
@section('content')
	<div class="w-full">
		<div class="grid gap-4 md:grid-cols-2">
			<div
				class="dark:bg-gray-800 dark:border-gray-500 h-32 w-full rounded-xl border border-gray-200 bg-white shadow-sm md:col-span-2">

			</div>
			<div class="dark:bg-gray-800 dark:border-gray-500 w-full rounded-xl border border-gray-200 bg-white p-6 shadow-sm">
				<div class="mb-4">
					<p class="dark:text-white text-xl font-bold leading-none text-gray-900 md:text-2xl">
						Timeline</p>
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
					@foreach ($data as $index => $item)
						{
							coords: L.latLng({{ $item->latitude }}, {{ $item->longitude }}),
							name: 'Lokasi {{ $index + 1 }}: {{ $item->latitude }}, {{ $item->longitude }}' // Using the index for numbering
						},
					@endforeach

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
						// `/api/get-attendance-data?date=${date}&kode_pegawai={{ Auth::user()->kode_pegawai }}`
						`/api/get-attendance-data?kode_pegawai={{ Auth::user()->kode_pegawai }}`
					)
					.then(response => response.json())
					.then(data => {
						// Membuat tabel untuk data kehadiran
						let attendanceTable = '';

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

							attendanceTable += `
                                <li class="mb-10 ms-8 relative">
                                    <span
                                        class="dark:bg-green-900 absolute -start-11 flex h-6 w-6 items-center justify-center rounded-full bg-green-800">
                                        <svg class="dark:text-green-300 h-2.5 w-2.5 text-green-100" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                        </svg>
                                    </span>
                                    <h3 class="dark:text-white mb-1 flex items-center text-lg font-semibold text-gray-900">
                                        Check-in
                                    </h3>
                                    <span class="dark:text-gray-300 mb-2 block text-md font-normal leading-none text-gray-400">${long_lat}</span>
                                    <time class="dark:text-gray-500 mb-2 block text-sm font-normal leading-none text-gray-400">${formattedjamMasuk}</time>
                                    <img src="${path}" alt="Foto" class="absolute right-0 !-top-2.5 object-cover w-16 h-16 rounded-lg">
                                </li>
                                `;
						});

						// Membuat tabel untuk data keluar
						let attendanceOutTable = '';
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
							const path = `{{ asset('') }}${photoURL}/${url}.png`; // Gabungkan URL
							const long_lat = `${item.longitude}, ${item.latitude}`;

							attendanceOutTable += `
                                <li class="mb-10 ms-8 relative">
                                    <span
                                        class="dark:bg-red-900 absolute -start-11 flex h-6 w-6 items-center justify-center rounded-full bg-red-800">
                                        <svg class="dark:text-red-300 h-2.5 w-2.5 text-red-100" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                        </svg>
                                    </span>
                                    <h3 class="dark:text-white mb-1 flex items-center text-lg font-semibold text-gray-900">
                                        Check-out
                                    </h3>
                                    <span class="dark:text-gray-300 mb-2 block text-md font-normal leading-none text-gray-400">${long_lat}</span>
                                    <time class="dark:text-gray-500 mb-2 block text-sm font-normal leading-none text-gray-400">${formattedjamKeluar}</time>
                                    <img src="${path}" alt="Foto" class="absolute right-0 !-top-2.5 object-cover w-16 h-16 rounded-lg">
                                </li>
                                `;
						});

						// Memperbarui konten popover dengan tabel
						timelineContent.innerHTML = `
                        ${attendanceTable}
                        ${attendanceOutTable}
                    `;
					})
					.catch(error => {
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

@extends('dashboard.pegawai.detail')
@section('menus')
	<div class="rounded-lg" id="collectors" role="tabpanel" aria-labelledby="collectors-tab">
		<div class="w-full">
			<div class="grid gap-6 md:grid-cols-2">

				{{-- search --}}
				<div class="w-full md:col-span-2">
					<form id="dateForm" action="{{ route('pegawai.collectors', ['pegawai' => $pegawai->kode_pegawai]) }}" method="GET">
						@csrf
						<label class="dark:text-white sr-only mb-2 text-sm font-medium text-gray-900" for="datepicker-actions">Filter
							Tanggal</label>
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
								id="datepicker-actions" name="date" type="text" datepicker datepicker-buttons datepicker-autoselect-today
								placeholder="Filter tanggal" autocomplete="off">
							<button
								class="dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 absolute bottom-2.5 end-2.5 rounded-lg bg-blue-700 px-4 py-2 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300"
								type="submit">Search</button>
						</div>
					</form>
				</div>
				{{-- endsearch --}}

				<div class="dark:bg-[#18181b] dark:border-gray-700 w-full rounded-xl border border-gray-200 bg-white p-6 shadow-sm">
					<div class="mb-4">
						<p class="dark:text-white text-xl font-bold leading-none text-gray-900 md:text-2xl">
							{{ $pegawai->full_name ?? 'N/A' }}
						</p>
						<p class="dark:text-white text-lg font-semibold leading-none text-gray-900 md:text-xl">
							@if (Request::query('date'))
								Laporan Rute,
								{{ \Carbon\Carbon::parse(Request::query('date'))->locale('id')->isoFormat('D MMMM YYYY') }}
							@else
								Laporan Rute,
								{{ \Carbon\Carbon::today()->locale('id')->isoFormat('D MMMM YYYY') }}
							@endif
						</p>
					</div>

					<ol class="dark:border-gray-700 relative ml-3 border-s border-gray-200" id="collectorsContent">

						@if ($report->isNotEmpty())
							@foreach ($report as $data)
								<li class="relative mb-10 ms-8">
									<span
										class="dark:bg-green-900 absolute -start-11 flex h-6 w-6 items-center justify-center rounded-full bg-green-800">
										<svg class="dark:text-green-300 h-2.5 w-2.5 text-green-100" aria-hidden="true"
											xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
											<path
												d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0-2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
										</svg>
									</span>
									<h3 class="dark:text-white mb-1 flex items-center text-sm text-gray-900">
										<a class="group" href="{{ route('dashboard.collect.show', $data->id) }}" target="_blank">
											{{ $data->title }}
											<span class="text-blue-500 group-hover:underline">
												[ 👁 ]
											</span>
										</a>
										@if ($data->status == 0)
											<span
												class="dark:bg-yellow-900 dark:text-yellow-300 me-2 ms-3 rounded bg-yellow-100 p-0.5 text-sm font-medium text-yellow-800">Unapproved</span>
										@elseif($data->status == 1)
											<span
												class="dark:bg-green-900 dark:text-green-300 me-2 ms-3 rounded bg-green-100 p-0.5 text-sm font-medium text-green-800">Approved</span>
										@else
											<span
												class="dark:bg-green-900 dark:text-green-300 me-2 ms-3 rounded bg-green-100 p-0.5 text-sm font-medium text-green-800">Unapproved</span>
										@endif

									</h3>
									<span class="dark:text-gray-300 text-md mb-2 block font-normal leading-none text-gray-400">
										<!-- Add any additional data from $data here -->
									</span>
									<time class="dark:text-gray-500 mb-2 block text-sm font-normal leading-none text-gray-400">
										{{ $data->created_at->locale('id')->isoFormat('DD MMM YYYY HH:mm:ss') }}
									</time>
								</li>
							@endforeach
						@else
							<h1 class="text-center text-lg font-semibold text-gray-500">Tidak ada data</h1>
						@endif

					</ol>

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
				// Inisialisasi peta tanpa titik awal
				var map = L.map('map').setView([3.591516090416829, 98.66902828216554], 13); // Default location

				// Menambahkan Tile Layer dari OpenStreetMap
				L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
					maxZoom: 19,
					attribution: '&copy; OpenStreetMap contributors'
				}).addTo(map);

				// Koordinat Titik Awal, Titik Tengah, dan Titik Akhir dengan deskripsi
				var waypoints = [
					@foreach ($report as $data)
						{
							coords: L.latLng({{ $data->latitude ? $data->latitude : '3.591516090416829' }},
								{{ $data->longitude ? $data->longitude : '98.66902828216554' }}),
							name: '{{ $data->type ?? 'Unknown Location' }}' // Ganti 'location_name' dengan nama lokasi atau deskripsi lain
						},
					@endforeach
				];

				// Custom icon untuk marker
				var customIcon = L.icon({
					iconUrl: "{{ asset('assets/img/marker.png') }}", // Ganti dengan path ke ikon Anda
					iconSize: [25, 41], // Ukuran ikon
					iconAnchor: [12, 41], // Titik untuk mengaitkan ikon ke koordinat
					shadowUrl: "{{ asset('assets/img/marker-shadow.png') }}", // Ganti dengan path ke bayangan Anda
					shadowSize: [41, 41] // Ukuran bayangan
				});

				// Menambahkan marker untuk setiap titik di waypoints
				waypoints.forEach(function(point) {
					L.marker(point.coords, {
							icon: customIcon
						})
						.addTo(map)
						.bindPopup(`<b>${point.name}</b>`);
				});

				// Menentukan bounds (batas) untuk menampilkan semua marker
				if (waypoints.length > 1) {
					var bounds = L.latLngBounds(waypoints.map(point => point.coords));
					map.fitBounds(bounds); // Otomatis menyesuaikan peta agar mencakup semua titik
				}

				// Menambahkan Routing dari Titik Awal ke Titik Akhir
				if (waypoints.length > 1) {
					L.Routing.control({
						waypoints: waypoints.map(point => point.coords),
						routeWhileDragging: false, // Mencegah rute diubah saat dragging
						createMarker: function(i, waypoint) {
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
			}

			// Inisialisasi peta dengan koordinat default
			initializeMap();
		});

		document.getElementById('dateForm').addEventListener('submit', function(e) {
			const dateInput = document.getElementById('datepicker-actions').value;

			if (dateInput) {
				// Update action URL to include 'date' parameter
				this.action += `?date=${dateInput}`;
			} else {
				// Prevent submission if date is not selected
				e.preventDefault();
				alert('Pilih tanggal terlebih dahulu!');
			}
		});
	</script>
@endsection
@extends('dashboard.layoutsDash.app')
@section('content')
	<div
		class="dark:bg-gray-800/70 dark:ring-gray-500 relative rounded-xl bg-white/70 p-0 ring-1 ring-black lg:max-w-screen-lg lg:p-4"
		id="Scan" data-aos="zoom-in-up" data-aos-delay="50">
		<div class="grid h-auto w-full grid-cols-1 lg:grid-cols-3 lg:gap-4">

			<div class="video-container h-auto p-3 text-center lg:col-span-2 lg:p-0" data-aos="zoom-in" data-aos-delay="100">
				<div class="relative h-[30rem] w-full">
					<video class="dark:ring-gray-500 flex h-full w-full rounded-lg object-cover p-0 ring-1 ring-black" id="video"
						data-aos="zoom-in" data-aos-delay="100"
						style="background: url('{{ asset('assets/img/noCamera.webp') }}') center center / cover no-repeat;" autoplay>
					</video>
					<canvas class="absolute left-0 top-0 flex h-full w-full rounded-xl object-cover p-0" id="overlay"></canvas>
				</div>
				<div class="mt-3 inline-flex w-full lg:px-0">
					<button
						class="dark:bg-blue-800 dark:hover:bg-blue-900 dark:text-white dark:ring-gray-500 w-full rounded-lg bg-blue-400 p-2 font-bold text-white ring-1 ring-black hover:bg-blue-700"
						id="startButton">Start</button>
				</div>
				<div class="dark:bg-gray-800 mt-3 h-auto w-full rounded-lg lg:px-0">
					<div class="min-h-10 dark:ring-gray-500 h-auto rounded-lg p-3 text-left ring-1 ring-black">
						<p class="dark:text-white text-sm font-bold text-black">Log</p>
						<hr class="dark:bg-gray-800 my-2 bg-black">
						<pre class="dark:text-white max-h-32 overflow-y-auto scroll-smooth" id="consoleOutput"></pre>
					</div>
				</div>
			</div>

			<!-- #region -->
			<div class="col-span-1 px-3 pb-3 md:px-3 md:pb-3 lg:col-span-1 lg:p-0" data-aos="zoom-in" data-aos-delay="100">
				<div class="dark:ring-gray-500 dark:bg-gray-800 mb-4 rounded-lg p-2 text-center ring-1 ring-black"
					data-aos="fade-left" data-aos-delay="100">
					<p class="dark:text-white text-xl font-bold text-black">INFORMASI</p>
				</div>

				<div class="grid grid-cols-1 gap-4 md:grid-cols-1">

					<div class="relative flex w-full flex-col gap-4 rounded-lg md:flex-row lg:flex-col lg:gap-0" data-aos="fade-right"
						data-aos-delay="100">
						<div class="h-full w-full rounded-lg md:rounded-lg lg:w-full lg:object-fill">
							<img
								class="dark:ring-gray-500 h-60 w-full rounded-lg object-cover ring-1 ring-black md:h-auto lg:h-full lg:object-fill"
								id="canvLogo" src="{{ asset('assets/img/noImage.webp') }}" alt="">
							<canvas
								class="dark:ring-gray-500 absolute left-0 top-0 h-60 w-full rounded-lg object-cover ring-1 ring-black md:h-full lg:h-full"
								id="canvAttend"></canvas>
						</div>
					</div>

					<div
						class="dark:ring-gray-500 relative flex h-auto w-full flex-col rounded-lg p-4 leading-normal ring-1 ring-black lg:justify-between"
						data-aos="fade-left" data-aos-delay="100">
						<div id="pegawaiInfo"></div>
						<div id="pegawaiKosong">
							<ul class="dark:text-white space-y-4 text-left text-gray-500">
								<li class="flex items-center space-x-3 rtl:space-x-reverse">
									<svg class="h-3.5 w-3.5 flex-shrink-0 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
										fill="none" viewBox="0 0 16 12">
										<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
											d="M1 5.917 5.724 10.5 15 1.5" />
									</svg>
									<span>Lokasi: <span id="lokasi"></span></span>
								</li>
								<li class="flex items-center space-x-3 rtl:space-x-reverse">
									<svg class="h-3.5 w-3.5 flex-shrink-0 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
										fill="none" viewBox="0 0 16 12">
										<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
											d="M1 5.917 5.724 10.5 15 1.5" />
									</svg>
									<span>Kode Pegawai: {{ Auth::user()->kode_pegawai }}<input id="kode_pegawai" name="kode_pegawai" type="hidden"
											value="{{ Auth::user()->kode_pegawai }}"> </span>
								</li>
								<li class="flex items-center space-x-3 rtl:space-x-reverse">
									<svg class="h-3.5 w-3.5 flex-shrink-0 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
										fill="none" viewBox="0 0 16 12">
										<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
											d="M1 5.917 5.724 10.5 15 1.5" />
									</svg>
									<span>NIK: {{ $data->nik_pegawai }}</span>
								</li>
								<li class="flex items-center space-x-3 rtl:space-x-reverse">
									<svg class="h-3.5 w-3.5 flex-shrink-0 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
										fill="none" viewBox="0 0 16 12">
										<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
											d="M1 5.917 5.724 10.5 15 1.5" />
									</svg>
									<span>Nama: {{ $data->full_name }}</span>
								</li>
								{{-- <li class="flex items-center space-x-3 rtl:space-x-reverse">
									<svg class="h-3.5 w-3.5 flex-shrink-0 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
										fill="none" viewBox="0 0 16 12">
										<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
											d="M1 5.917 5.724 10.5 15 1.5" />
									</svg>
									<span>Jabatan: {{ $data->nama_jabatan }}</span>
								</li>
								<li class="flex items-center space-x-3 rtl:space-x-reverse">
									<svg class="h-3.5 w-3.5 flex-shrink-0 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
										fill="none" viewBox="0 0 16 12">
										<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
											d="M1 5.917 5.724 10.5 15 1.5" />
									</svg>
									<span>Penempatan: {{ $data->penempatan }}</span>
								</li> --}}
							</ul>
						</div>
					</div>

				</div>
			</div>

		</div>
	</div>

	<script>
		var lat, lng;
		const specifiedLat = "{{ $data->latitude }}"; // Latitude of the specified point
		const specifiedLng = "{{ $data->longitude }}"; // Longitude of the specified point
		const radius = "{{ $data->radius }}"; // Radius in meters

		document.addEventListener('DOMContentLoaded', function() {
			const lokasiSpan = document.getElementById('lokasi'); // Get the span element

			if (navigator.geolocation) {
				navigator.geolocation.getCurrentPosition(
					function(position) {
						lat = position.coords.latitude;
						lng = position.coords.longitude;

						// Display the latitude and longitude in the span
						lokasiSpan.innerHTML = `${lat}, ${lng}`;

						// Calculate distance from the specified point
						const distance = calculateDistance(specifiedLat, specifiedLng, lat, lng);

						// Check if within the specified radius
						if (distance > radius) {
							// console.log(`${lat}, ${lng}`);
							Swal.fire({
								title: "Gagal!",
								html: `Anda berada ${distance.toFixed(2)} meter dari tempat yang ditentukan.`,
								timer: 1500,
								icon: "error",
								showConfirmButton: false,
							}).then(() => {
								// Show and hide elements after the alert disappears
								pegawaiKosong.style.display = "block";
								pegawaiInfo.style.display = "none";

								setTimeout(() => {
									window.location.href = "{{ route('dashboard.capture') }}";
								}, 750);
							});
						} else {
							// Dynamically load the scripts after the log
							loadScript("{{ asset('face-api.min.js') }}", function() {
								loadScript("{{ asset('selfDetect.min.js') }}", function() {});
							});

						}
					},

					function(error) {
						Swal.fire({
							title: "Gagal!",
							html: `Anda harus mengaktifkan izin Lokasi.`,
							timer: 1500,
							icon: "error",
							showConfirmButton: false,
						}).then(() => {
							// Show and hide elements after the alert disappears
							pegawaiKosong.style.display = "block";
							pegawaiInfo.style.display = "none";

							setTimeout(() => {
								window.location.href = "{{ route('dashboard.capture') }}";
							}, 750);
						});
					}
				);
			} else {
				Swal.fire({
					title: "Gagal!",
					html: `Browser anda tidak memiliki support Geolocation.`,
					timer: 1500,
					icon: "error",
					showConfirmButton: false,
				}).then(() => {
					// Show and hide elements after the alert disappears
					pegawaiKosong.style.display = "block";
					pegawaiInfo.style.display = "none";

					setTimeout(() => {
						window.location.href = "{{ route('dashboard') }}";
					}, 750);
				});
			}
		});

		function loadScript(url, callback) {
			const script = document.createElement("script");
			script.src = url;
			script.defer = true;
			script.onload = callback;
			document.head.appendChild(script);
		}

		// Function to calculate distance between two coordinates using Haversine formula
		function calculateDistance(lat1, lng1, lat2, lng2) {
			const R = 6371000; // Radius of Earth in meters
			const dLat = (lat2 - lat1) * (Math.PI / 180);
			const dLng = (lng2 - lng1) * (Math.PI / 180);
			const a =
				Math.sin(dLat / 2) * Math.sin(dLat / 2) +
				Math.cos(lat1 * (Math.PI / 180)) * Math.cos(lat2 * (Math.PI / 180)) *
				Math.sin(dLng / 2) * Math.sin(dLng / 2);
			const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
			return R * c; // Distance in meters
		}
	</script>
@endsection

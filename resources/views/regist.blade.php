<x-landing.layout>
	<div class="relative flex min-h-screen flex-col justify-center overflow-hidden md:py-12 lg:py-32" id="Home"
		data-aos="fade-down">
		<div class="relative">
			<img class="dark:opacity-80 fixed inset-0 -z-50 h-full w-full object-cover opacity-40"
				src="{{ asset('assets/img/hero-bg-light.webp') }}" alt="Background Image" />
			<img class="fixed inset-0 -z-40 h-full w-full object-cover opacity-40 mix-blend-overlay"
				src="{{ asset('assets/img/grid.webp') }}" alt="Background Image" />

			<!-- Overlay -->
			<div class="dark:opacity-70 fixed inset-0 -z-40 w-full bg-gray-800 opacity-0"></div>
		</div>

		<div class="relative z-10 mb-0 grid grid-cols-1 px-6 md:mb-10">
			<div class="flex h-full flex-col items-center justify-center py-5 text-left md:text-center">
				<h1 class="dark:text-white mb-4 text-4xl font-bold">Verifikasi Wajah Pegawai</h1>
				<p class="dark:text-gray-300 hidden text-lg md:block">
					Masukkan kode pegawai anda, kemudian start kamera <br />
					Proses pengambilan gambar akan dilakukan sebanyak <span class="dark:text-white font-bold"> DUA </span> kali <br />
				</p>
			</div>
		</div>

		<div
			class="dark:bg-[#18181b]/70 dark:ring-gray-700 relative bg-white/70 p-0 ring-1 ring-black lg:mx-auto lg:rounded-lg lg:p-4"
			id="Scan" data-aos="zoom-in-up" data-aos-delay="50">
			<form id="photoForm" action="{{ route('photo.registProcess') }}" method="POST" enctype="multipart/form-data">
				<div class="grid h-auto grid-cols-1 gap-6 lg:w-[900px] lg:grid-cols-3">
					@csrf
					@php
						$path = 'assets/img/noCamera.webp';
					@endphp
					<div class="video-container col-span-1 h-auto p-3 text-center lg:col-span-2 lg:p-0" data-aos="zoom-in"
						data-aos-delay="100">
						<video
							class="dark:ring-gray-700 flex h-60 w-full rounded-lg object-cover p-0 ring-1 ring-black md:h-auto lg:h-[480px] lg:w-[640px]"
							id="video" data-aos="zoom-in" data-aos-delay="100"
							style="background: url({{ $path }}) center center / cover no-repeat;" autoplay>
						</video>

						<canvas class="absolute left-0 top-0 flex h-auto w-full object-cover p-0 lg:rounded-lg" id="overlay"></canvas>
						<div class="mt-3 inline-flex w-full lg:px-0">
							<div class="relative w-full">
								<input
									class="border-1 dark:border-gray-700 dark:text-white dark:bg-gray-500 peer block w-full appearance-none rounded-lg border-black bg-transparent px-2.5 pb-2.5 pt-4 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0"
									id="floating_outlined" id="kodePegawai" name="kode_pegawai" type="text" placeholder=" " required />

								<label
									class="dark:bg-gray-500 dark:text-white dark:peer-focus:text-white dark:peer-focus:rounded-xl absolute start-1 top-2 z-10 origin-[0] -translate-y-4 scale-75 transform bg-white px-2 text-sm text-gray-500 duration-300 peer-placeholder-shown:top-1/2 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:scale-100 peer-focus:top-2 peer-focus:-translate-y-4 peer-focus:scale-75 peer-focus:px-2 peer-focus:text-blue-600 rtl:peer-focus:left-auto rtl:peer-focus:translate-x-1/4"
									for="floating_outlined">Kode Pegawai</label>
							</div>
						</div>
						<div class="mt-3 inline-flex w-full" data-aos="fade-right" data-aos-delay="150">
							<button
								class="dark:bg-blue-800 dark:hover:bg-blue-900 dark:text-white dark:ring-gray-700 w-full rounded-lg bg-blue-400 p-2 font-bold text-white ring-1 ring-black hover:bg-blue-700"
								id="capturePhoto" type="button">Start Kamera</button>
							<input id="photo1Data" name="photo1" type="hidden">
							<input id="photo2Data" name="photo2" type="hidden">
						</div>

						<div class="mt-3 inline-flex w-full" data-aos="fade-left" data-aos-delay="150">
							<button
								class="dark:bg-green-800 dark:hover:bg-green-900 dark:text-white dark:ring-gray-700 w-full rounded-lg bg-green-400 p-2 font-bold text-white ring-1 ring-black hover:bg-green-700"
								type="submit">Upload Photos</button>
						</div>

						<div class="mt-3 h-auto w-full rounded-lg" data-aos="fade-right" data-aos-delay="150">
							<div class="min-h-10 dark:ring-gray-700 dark:bg-[#18181b] h-auto rounded-lg p-3 text-left ring-1 ring-black">
								<p class="dark:text-white text-sm font-bold text-black">Log</p>
								<hr class="my-2 bg-black">
								<pre class="dark:text-white max-h-32 overflow-y-auto scroll-smooth" id="consoleOutput"></pre>
							</div>
						</div>
					</div>

					<div class="col-span-1 px-3 pb-3 md:px-3 md:pb-3 lg:col-span-1 lg:p-0" data-aos="zoom-in" data-aos-delay="100">
						<div class="grid grid-cols-1 gap-6">
							<div class="dark:ring-gray-700 dark:bg-[#18181b] rounded-lg p-2 text-center ring-1 ring-black"
								data-aos="fade-left" data-aos-delay="100">
								<p class="dark:text-white text-xl font-bold text-black">INFORMASI</p>
							</div>
							<div class="relative flex w-full flex-col gap-6 rounded-lg md:flex-row lg:flex-col lg:gap-0"
								data-aos="fade-right" data-aos-delay="100">
								<div class="h-full w-full rounded-lg md:rounded-lg lg:w-full lg:object-fill">
									<img
										class="dark:ring-gray-700 w-full rounded-lg object-cover ring-1 ring-black md:h-auto lg:h-full lg:object-fill"
										id="canvLogo" src="{{ asset('assets/img/noImage.webp') }}" alt="">
									<canvas
										class="dark:ring-gray-700 absolute left-0 top-0 h-full w-full rounded-lg object-cover ring-1 ring-black md:h-full lg:h-full"
										id="canvRegist"></canvas>
								</div>
							</div>
							<div class="relative flex w-full flex-col gap-6 rounded-lg md:flex-row lg:flex-col lg:gap-0" data-aos="fade-left"
								data-aos-delay="100">
								<div class="h-full w-full rounded-lg md:rounded-lg lg:w-full lg:object-fill">
									<img
										class="dark:ring-gray-700 w-full rounded-lg object-cover ring-1 ring-black md:h-auto lg:h-full lg:object-fill"
										id="canvLogo" src="{{ asset('assets/img/noImage.webp') }}" alt="">
									<canvas
										class="dark:ring-gray-700 absolute left-0 top-0 h-full w-full rounded-lg object-cover ring-1 ring-black md:h-full lg:h-full"
										id="canvRegistt"></canvas>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>

	</div>
</x-landing.layout>
@push('script')
	<script>
		const currentUrl = window.location.pathname;
		let stream = null;

		if (currentUrl === "/photo-regist") {
			window.onload = function() {
				document.getElementById('floating_outlined')
					.focus(); // Fokus pada input ketika halaman pertama kali di-load
			};

			const video = document.getElementById('video');
			const canvas = document.getElementById('canvRegist');
			const canvass = document.getElementById('canvRegistt');
			const photo1Data = document.getElementById('photo1Data');
			const photo2Data = document.getElementById('photo2Data');
			const captureButton = document.getElementById('capturePhoto');
			const overlay = document.getElementById('overlay');

			const originalConsoleLog = console.log;

			function customConsoleLog(message) {
				const consoleOutput = document.getElementById("consoleOutput");
				if (consoleOutput) {
					consoleOutput.textContent += message + "\n";
					consoleOutput.scrollTop = consoleOutput.scrollHeight; // Auto-scroll ke bagian bawah
				}
				originalConsoleLog(message); // Gunakan referensi asli
			}

			console.log = customConsoleLog;

			function startCamera() {
				navigator.mediaDevices.getUserMedia({
						video: true
					})
					.then(userStream => {
						stream = userStream;
						video.srcObject = stream;
						video.play();
						console.log("Camera started");
					})
					.catch(err => console.error('Error accessing camera: ', err));
			}

			function capturePhoto(targetCanvas, targetWidth, targetHeight) {
				const context = targetCanvas.getContext('2d');
				targetCanvas.width = targetWidth;
				targetCanvas.height = targetHeight;
				context.drawImage(video, 0, 0, targetWidth, targetHeight);
				return targetCanvas.toDataURL('image/jpeg');
			}

			function displayTimer(seconds, callback) {
				let remainingTime = seconds;
				overlay.textContent = remainingTime; // Menampilkan waktu awal
				console.log(`Foto diambil dalam: ${remainingTime} detik`);

				// Menampilkan timer di consoleOutput

				const timerInterval = setInterval(() => {
					remainingTime--;
					overlay.textContent = remainingTime;
					console.log(`${remainingTime} `);

					// Menampilkan waktu tersisa di consoleOutput
					if (remainingTime <= 0) {
						clearInterval(timerInterval);
						overlay.textContent = ''; // Hapus teks overlay
						console.log('Captured.');
						if (callback) callback();
					}
				}, 1000);
			}

			function captureTwoPhotos() {

				// Menyusun kamera jika belum dimulai
				if (!stream) {
					startCamera();
					setTimeout(() => {
						displayTimer(3, () => {
							const photo1 = capturePhoto(canvas, video.videoWidth, video.videoHeight);
							photo1Data.value = photo1;

							// Menunggu 3 detik sebelum menangkap foto kedua
							setTimeout(() => {
								displayTimer(3, () => {
									const photo2 = capturePhoto(canvass, video.videoWidth,
										video.videoHeight);
									photo2Data.value = photo2;
								});
							}, 3000); // Jeda sebelum menangkap foto kedua
						});
					}, 3000); // Jeda sebelum menangkap foto pertama

				}
			}

			// Event listener untuk tombol capture
			captureButton.addEventListener('click', () => {
				captureTwoPhotos();
			});

			// Optional: Set up form submission untuk memastikan foto telah diambil
			document.getElementById('photoForm').addEventListener('submit', (event) => {
				if (!photo1Data.value || !photo2Data.value) {
					event.preventDefault();

					Swal.fire({
						title: "Foto masih kosong!",
						text: "Silahkan capture foto wajah anda terlebih dahulu.",
						icon: "error",
						timer: 2000,
					});

					captureTwoPhotos();


				}
			});
		}
	</script>
@endpush

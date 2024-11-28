<x-landing.layout>
	<div class="relative flex min-h-screen flex-col justify-center overflow-hidden md:py-12 lg:py-32" id="Home">
		<div class="relative">
			<img class="dark:opacity-80 fixed inset-0 -z-50 h-full w-full object-cover opacity-40"
				src="{{ asset('assets/img/hero-bg-light.webp') }}" alt="Background Image" />
			<img class="fixed inset-0 -z-40 h-full w-full object-cover opacity-40 mix-blend-overlay"
				src="{{ asset('assets/img/grid.webp') }}" alt="Background Image" />

			<!-- Overlay -->
			<div class="dark:opacity-70 fixed inset-0 -z-40 w-full bg-gray-800 opacity-0"></div>
		</div>

		<div class="relative z-10 mb-0 px-6 md:mb-10 md:grid md:grid-cols-1" data-aos="fade-down">
			<div class="h-full items-center justify-center py-5 text-left text-black md:flex md:flex-col md:text-center">
				<h1 class="dark:text-white mb-4 text-4xl font-bold">FaceID Attendance System</h1>
				<p class="dark:text-gray-300 hidden text-lg md:block">
					Klik tombol start, kemudian biarkan aplikasi mendeteksi wajah anda. <br />
					Informasi mengenai anda akan muncul di bagian sebelah kanan<br />
				</p>
				<p class="dark:text-gray-300 hidden md:block">Tekan tombol <span
						class="dark:text-white text-xl font-bold text-black">[-]</span>
					untuk melihat tutorial</p>
			</div>
		</div>

		<div
			class="dark:bg-[#18181b]/70 dark:ring-gray-700 relative bg-white/70 pb-8 ring-1 ring-black sm:p-0 lg:mx-auto lg:rounded-lg lg:p-4"
			id="Scan" data-aos="zoom-in-up" data-aos-delay="50">
			<div class="grid h-auto grid-cols-1 lg:w-[900px] lg:grid-cols-3 lg:gap-4">
				<div class="video-container col-span-1 h-auto p-3 text-center lg:col-span-2 lg:p-0" data-aos="zoom-in"
					data-aos-delay="100">
					<video
						class="dark:ring-gray-700 flex h-60 w-full rounded-lg object-cover p-0 ring-1 ring-black md:h-auto lg:h-[480px] lg:w-[640px]"
						id="video" data-aos="zoom-in" data-aos-delay="100"
						style="background: url('assets/img/noCamera.webp') center center / cover no-repeat;" autoplay>
					</video>
					<canvas
						class="absolute left-0 top-0 flex h-60 w-full rounded-lg object-cover p-0 md:h-auto lg:h-[480px] lg:w-[640px]"
						id="overlay"></canvas>
					<div class="mt-3 inline-flex w-full lg:px-0">
						<button
							class="dark:bg-blue-800 dark:hover:bg-blue-900 dark:text-white dark:ring-gray-700 mr-2 w-1/2 rounded-lg bg-blue-400 p-2 font-bold text-white ring-1 ring-black hover:bg-blue-700"
							id="startButton">Start</button>
						<button
							class="dark:bg-red-800 dark:hover:bg-red-900 dark:text-white dark:ring-gray-700 w-1/2 rounded-lg bg-red-400 p-2 font-bold text-white ring-1 ring-black hover:bg-red-700"
							id="endAttendance">Stop</button>
					</div>
					<div class="dark:bg-[#18181b] mt-3 h-auto w-full rounded-lg lg:px-0">
						<div class="min-h-10 dark:ring-gray-700 h-auto rounded-lg p-3 text-left ring-1 ring-black">
							<p class="dark:text-white text-sm font-bold text-black">Log</p>
							<hr class="dark:bg-[#18181b] my-2 bg-black">
							<pre class="dark:text-white max-h-32 overflow-y-auto scroll-smooth" id="consoleOutput"></pre>
						</div>
					</div>
				</div>

				<!-- #region -->
				<div class="col-span-1 px-3 pb-3 md:px-3 md:pb-3 lg:col-span-1 lg:p-0" data-aos="zoom-in" data-aos-delay="100">
					<div class="dark:ring-gray-700 dark:bg-[#18181b] mb-4 rounded-lg p-2 text-center ring-1 ring-black"
						data-aos="fade-left" data-aos-delay="100">
						<p class="dark:text-white text-xl font-bold text-black">INFORMASI</p>
					</div>

					<div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-1">

						<div class="relative flex w-full flex-col gap-6 rounded-lg md:flex-row lg:flex-col lg:gap-0" data-aos="fade-right"
							data-aos-delay="100">
							<div class="h-full w-full rounded-lg md:rounded-lg lg:w-full lg:object-fill">
								<img
									class="dark:ring-gray-700 h-60 w-full rounded-lg object-cover ring-1 ring-black md:h-auto lg:h-full lg:object-fill"
									id="canvLogo" src="{{ asset('assets/img/noImage.webp') }}" alt="">
								<canvas
									class="dark:ring-gray-700 absolute left-0 top-0 h-60 w-full rounded-lg object-cover ring-1 ring-black md:h-full lg:h-full"
									id="canvAttend"></canvas>
							</div>
						</div>

						<div
							class="dark:ring-gray-700 relative flex h-auto w-full flex-col rounded-lg p-4 leading-normal ring-1 ring-black lg:justify-between"
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
										<span>Lokasi: </span>
									</li>
									<li class="flex items-center space-x-3 rtl:space-x-reverse">
										<svg class="h-3.5 w-3.5 flex-shrink-0 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
											fill="none" viewBox="0 0 16 12">
											<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
												d="M1 5.917 5.724 10.5 15 1.5" />
										</svg>
										<span>Kode Pegawai: </span>
									</li>
									<li class="flex items-center space-x-3 rtl:space-x-reverse">
										<svg class="h-3.5 w-3.5 flex-shrink-0 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
											fill="none" viewBox="0 0 16 12">
											<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
												d="M1 5.917 5.724 10.5 15 1.5" />
										</svg>
										<span>NIK: </span>
									</li>
									<li class="flex items-center space-x-3 rtl:space-x-reverse">
										<svg class="h-3.5 w-3.5 flex-shrink-0 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
											fill="none" viewBox="0 0 16 12">
											<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
												d="M1 5.917 5.724 10.5 15 1.5" />
										</svg>
										<span>Nama: </span>
									</li>
									<li class="flex items-center space-x-3 rtl:space-x-reverse">
										<svg class="h-3.5 w-3.5 flex-shrink-0 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
											fill="none" viewBox="0 0 16 12">
											<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
												d="M1 5.917 5.724 10.5 15 1.5" />
										</svg>
										<span>Jabatan: </span>
									</li>
									<li class="flex items-center space-x-3 rtl:space-x-reverse">
										<svg class="h-3.5 w-3.5 flex-shrink-0 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
											fill="none" viewBox="0 0 16 12">
											<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
												d="M1 5.917 5.724 10.5 15 1.5" />
										</svg>
										<span>Golongan: </span>
									</li>
									<li class="flex items-center space-x-3 rtl:space-x-reverse">
										<svg class="h-3.5 w-3.5 flex-shrink-0 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
											fill="none" viewBox="0 0 16 12">
											<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
												d="M1 5.917 5.724 10.5 15 1.5" />
										</svg>
										<span>Waktu Masuk: </span>
									</li>
									<li class="flex items-center space-x-3 rtl:space-x-reverse">
										<svg class="h-3.5 w-3.5 flex-shrink-0 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
											fill="none" viewBox="0 0 16 12">
											<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
												d="M1 5.917 5.724 10.5 15 1.5" />
										</svg>
										<span>Waktu Keluar: </span>
									</li>
								</ul>
							</div>
						</div>

					</div>
				</div>

			</div>
		</div>
	</div>
</x-landing.layout>

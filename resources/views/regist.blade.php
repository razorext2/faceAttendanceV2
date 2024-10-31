@extends('layouts.app')
@section('content')
	<div class="relative flex min-h-screen flex-col justify-center overflow-hidden py-32" id="Home" data-aos="fade-down">
		<div class="relative">
			<img class="dark:opacity-80 fixed inset-0 -z-50 h-full w-full object-cover opacity-40"
				src="{{ asset('assets/img/hero-bg-light.webp') }}" alt="Background Image" />
			<img class="fixed inset-0 -z-40 h-full w-full object-cover opacity-40 mix-blend-overlay"
				src="{{ asset('assets/img/grid.webp') }}" alt="Background Image" />

			<!-- Overlay -->
			<div class="dark:opacity-70 fixed inset-0 -z-40 w-full bg-gray-800 opacity-0"></div>
		</div>

		<div class="relative z-10 mb-10 grid grid-cols-1 px-6">
			<div class="flex h-full flex-col items-center justify-center py-5 text-left md:text-center">
				<h1 class="dark:text-white mb-4 text-4xl font-bold">Verifikasi Wajah Pegawai</h1>
				<p class="dark:text-gray-300 text-lg">
					Masukkan kode pegawai anda, kemudian start kamera <br />
					Proses pengambilan gambar akan dilakukan sebanyak <span class="dark:text-white font-bold"> DUA </span> kali <br />
				</p>
			</div>
		</div>

		<div
			class="dark:bg-gray-800/70 dark:ring-gray-500 relative bg-white/70 p-0 ring-1 ring-black lg:mx-auto lg:rounded-lg lg:p-4"
			id="Scan" data-aos="zoom-in-up" data-aos-delay="50">
			<form id="photoForm" action="{{ route('photo.registProcess') }}" method="POST" enctype="multipart/form-data">
				<div class="grid h-auto grid-cols-1 gap-4 lg:w-[900px] lg:grid-cols-3">
					@csrf
					@php
						$path = 'assets/img/noCamera.webp';
					@endphp
					<div class="video-container col-span-1 h-auto p-3 text-center lg:col-span-2 lg:p-0" data-aos="zoom-in"
						data-aos-delay="100">
						<video
							class="dark:ring-gray-500 flex h-60 w-full rounded-lg object-cover p-0 ring-1 ring-black md:h-auto lg:h-[480px] lg:w-[640px]"
							id="video" data-aos="zoom-in" data-aos-delay="100"
							style="background: url({{ $path }}) center center / cover no-repeat;" autoplay>
						</video>

						<canvas class="absolute left-0 top-0 flex h-auto w-full object-cover p-0 lg:rounded-lg" id="overlay"></canvas>
						<div class="mt-3 inline-flex w-full lg:px-0">
							<div class="relative w-full">
								<input
									class="border-1 dark:border-gray-500 dark:text-white dark:bg-gray-500 peer block w-full appearance-none rounded-lg border-black bg-transparent px-2.5 pb-2.5 pt-4 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0"
									id="floating_outlined" id="kodePegawai" name="kode_pegawai" type="text" placeholder=" " />

								<label
									class="dark:bg-gray-500 dark:text-white dark:peer-focus:text-white dark:peer-focus:rounded-xl absolute start-1 top-2 z-10 origin-[0] -translate-y-4 scale-75 transform bg-white px-2 text-sm text-gray-500 duration-300 peer-placeholder-shown:top-1/2 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:scale-100 peer-focus:top-2 peer-focus:-translate-y-4 peer-focus:scale-75 peer-focus:px-2 peer-focus:text-blue-600 rtl:peer-focus:left-auto rtl:peer-focus:translate-x-1/4"
									for="floating_outlined">Kode Pegawai</label>
							</div>
						</div>
						<div class="mt-3 inline-flex w-full" data-aos="fade-right" data-aos-delay="150">
							<button
								class="dark:bg-blue-800 dark:hover:bg-blue-900 dark:text-white dark:ring-gray-500 w-full rounded-lg bg-blue-400 p-2 font-bold text-white ring-1 ring-black hover:bg-blue-700"
								id="capturePhoto" type="button">Start Kamera</button>
							<input id="photo1Data" name="photo1" type="hidden">
							<input id="photo2Data" name="photo2" type="hidden">
						</div>

						<div class="mt-3 inline-flex w-full" data-aos="fade-left" data-aos-delay="150">
							<button
								class="dark:bg-green-800 dark:hover:bg-green-900 dark:text-white dark:ring-gray-500 w-full rounded-lg bg-green-400 p-2 font-bold text-white ring-1 ring-black hover:bg-green-700"
								type="submit">Upload Photos</button>
						</div>

						<div class="mt-3 h-auto w-full rounded-lg" data-aos="fade-right" data-aos-delay="150">
							<div class="min-h-10 dark:ring-gray-500 dark:bg-gray-800 h-auto rounded-lg p-3 text-left ring-1 ring-black">
								<p class="dark:text-white text-sm font-bold text-black">Log</p>
								<hr class="my-2 bg-black">
								<pre class="dark:text-white max-h-32 overflow-y-auto scroll-smooth" id="consoleOutput"></pre>
							</div>
						</div>
					</div>

					<div class="col-span-1 px-3 pb-3 md:px-3 md:pb-3 lg:col-span-1 lg:p-0" data-aos="zoom-in" data-aos-delay="100">
						<div class="grid grid-cols-1 gap-4">
							<div class="dark:ring-gray-500 dark:bg-gray-800 rounded-lg p-2 text-center ring-1 ring-black" data-aos="fade-left"
								data-aos-delay="100">
								<p class="dark:text-white text-xl font-bold text-black">INFORMASI</p>
							</div>
							<div class="relative flex w-full flex-col gap-4 rounded-lg md:flex-row lg:flex-col lg:gap-0" data-aos="fade-right"
								data-aos-delay="100">
								<div class="h-full w-full rounded-lg md:rounded-lg lg:w-full lg:object-fill">
									<img
										class="dark:ring-gray-500 w-full rounded-lg object-cover ring-1 ring-black md:h-auto lg:h-full lg:object-fill"
										id="canvLogo" src="{{ asset('assets/img/noImage.webp') }}" alt="">
									<canvas
										class="dark:ring-gray-500 absolute left-0 top-0 h-full w-full rounded-lg object-cover ring-1 ring-black md:h-full lg:h-full"
										id="canvRegist"></canvas>
								</div>
							</div>
							<div class="relative flex w-full flex-col gap-4 rounded-lg md:flex-row lg:flex-col lg:gap-0" data-aos="fade-left"
								data-aos-delay="100">
								<div class="h-full w-full rounded-lg md:rounded-lg lg:w-full lg:object-fill">
									<img
										class="dark:ring-gray-500 w-full rounded-lg object-cover ring-1 ring-black md:h-auto lg:h-full lg:object-fill"
										id="canvLogo" src="{{ asset('assets/img/noImage.webp') }}" alt="">
									<canvas
										class="dark:ring-gray-500 absolute left-0 top-0 h-full w-full rounded-lg object-cover ring-1 ring-black md:h-full lg:h-full"
										id="canvRegistt"></canvas>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>

	</div>
@endsection

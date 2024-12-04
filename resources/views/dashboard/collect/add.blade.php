@extends('dashboard.layoutsDash.app')
@section('content')
	<div class="grid w-full grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-6">
		{{-- form add --}}
		<div
			class="dark:bg-[#18181b] dark:ring-gray-700 rounded-xl bg-white p-4 shadow-sm ring-1 ring-gray-200 sm:p-6 lg:col-span-2">
			<div class="w-full">
				<header class="flex flex-row">

					<form id="index-collector" action="{{ route('collect.index') }}"></form>
					<x-dashboard.button class="me-4 flex flex-row px-2.5 py-2" form="index-collector" type="submit" :color="'red'">
						<x-slot name="icon">
							<x-icons.arrow-left class="dark:fill-white icon h-6 w-6" />
						</x-slot>
						Kembali
					</x-dashboard.button>

					<h2 class="dark:text-white mt-2 text-lg font-medium text-gray-900">
						{{ __('Tambah Laporan') }}
					</h2>

				</header>
				<p class="dark:text-gray-300 mt-1 text-sm text-gray-600">
					{{ __('Silahkan sesuaikan data dibawah ini dengan data yang benar.') }}
				</p>

				<form class="mt-4" method="POST">
					@csrf

					<input id="kode_pegawai" name="kode_pegawai" type="hidden" value="{{ auth()->user()->kode_pegawai ?? '281099' }}">

					<div class="relative mb-4 w-full">
						<label class="dark:text-white mb-2 block text-sm font-medium text-gray-900" for="title">Judul laporan</label>
						<input class="block w-full rounded-lg border border-gray-300 bg-white p-2.5 text-sm text-gray-900" id="title"
							name="title" type="text" placeholder="Judul laporan.." required>
						<div class="mt-2 text-sm text-red-500" id="alert-title"></div>
					</div>

					<div class="relative mb-4 w-full">
						<label class="dark:text-white mb-2 block text-sm font-medium text-gray-900" for="location">Lokasi </label>
						<input class="block w-full rounded-lg border border-gray-300 bg-white p-2.5 text-sm text-gray-900" id="location"
							name="location" type="text" placeholder="Isikan lokasi checkpoint.." required>
						<div class="mt-2 text-sm text-red-500" id="alert-location"></div>
					</div>

					<!-- Tombol Ambil Gambar -->
					<div class="relative mb-4 w-full">
						<label class="dark:text-white block text-sm font-medium text-gray-900" for="capture-button">Dokumentasi
						</label>
						<p class="mb-2 text-xs text-red-500"> *Dokumentasi tidak dapat diubah setelah laporan diinput. </p>

						<x-dashboard.button class="px-5 py-2.5" id="capture-button" type="button" :color="'blue'">
							<x-slot name="icon">
								<x-icons.plus class="icon h-4 w-4" />
							</x-slot>
							Ambil Foto
						</x-dashboard.button>
					</div>

					<div class="relative overflow-auto">
						<div class="flex overflow-x-auto" id="captured-images">
							<!-- Thumbnail gambar yang diambil akan muncul di sini -->
						</div>
					</div>

					<div class="mb-2 text-sm text-red-500" id="alert-images"></div>

					<div class="relative mb-4 w-full">
						<label class="dark:text-white mb-2 block text-sm font-medium text-gray-900">
							Keterangan
						</label>
						<div class="dark:bg-white h-32 w-full" id="editor"></div>
						<input id="keterangan" name="keterangan" type="hidden">
						<div class="mt-2 text-sm text-red-500" id="alert-keterangan"></div>
					</div>

					<input class="block w-full rounded-lg border border-gray-300 bg-gray-400 p-2.5 text-sm text-gray-900" id="longitude"
						name="longitude" type="hidden" readonly>

					<input class="block w-full rounded-lg border border-gray-300 bg-gray-400 p-2.5 text-sm text-gray-900" id="latitude"
						name="latitude" type="hidden" readonly>

					<div class="mb-4 text-sm text-red-500" id="alert-coordinate"></div>

					<div class="relative w-full">
						<x-dashboard.button class="px-2.5 py-2" id="store" type="button" :color="'blue'">
							<x-slot name="icon">
								<x-icons.arrow-left class="h-5 w-5 rotate-180" />
							</x-slot>
							Submit
						</x-dashboard.button>
					</div>
				</form>
			</div>

		</div>
	</div>

	<div
		class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0"
		id="camera-modal">
		<div class="relative max-h-full w-full max-w-2xl p-4">
			<div class="dark:bg-gray-700 relative rounded-xl bg-white shadow">
				<div class="space-y-4 p-1">
					<div class="relative">
						<!-- Video -->
						<video class="rounded-lg" id="video" width="100%" height="auto" autoplay></video>

						<!-- Button -->
						<button
							class="absolute bottom-4 left-1/2 h-14 w-14 -translate-x-1/2 transform rounded-full bg-white/60 shadow-lg ring-2 ring-white hover:bg-white/80 focus:outline-none md:bottom-6 md:h-16 md:w-16"
							id="capture-image">
							<x-icons.camera class="mx-auto w-10 stroke-white md:w-12" />
						</button>

						{{-- close button --}}
						<button class="absolute right-2 top-2 h-auto w-auto transform rounded-full focus:outline-none md:top-2"
							id="close-button" data-modal-hide="camera-modal" type="button">
							<x-icons.close class="h-8 w-8 stroke-red-600 hover:stroke-red-800" />
						</button>

					</div>
				</div>

			</div>
		</div>
	</div>
@endsection
@push('script')
	<script>
		apiURL = "{{ route('collectors.store') }}";
		indexURL = "{{ route('collect.index') }}";
		createURL = "{{ route('collect.create') }}";
	</script>
	@vite(['resources/js/collect/backStreamcamera.js'])
@endpush

@extends('dashboard.layoutsDash.app')
@section('content')
	<div class="w-full space-y-6">
		<div
			class="dark:bg-[#18181b] dark:ring-gray-700 grid gap-6 rounded-xl bg-white p-4 shadow-sm ring-1 ring-gray-200 sm:p-6">
			<div class="w-full">
				<header class="flex flex-row">

					<form id="index-collector" action="{{ route('collect.index') }}"></form>
					<x-dashboard.button class="me-4 flex flex-row px-2.5 py-2" form="index-collector" type="submit" :color="'red'">
						<x-slot name="icon">
							<x-icons.arrow-left class="dark:fill-white icon h-6 w-6" />
						</x-slot>
						Kembali
					</x-dashboard.button>

					<h2 class="dark:text-gray-300 font-base mt-2 text-lg text-gray-900">
						Ubah: <span class="font-bold text-white">{{ $data->title ?? 'N/A' }}</span>
					</h2>
				</header>
			</div>

			<div class="w-full">

				<div class="grid gap-2 md:grid-cols-2" id="laporan-content">
					<input id="id" name="id" type="hidden" value="{{ $data->id ?? 'N/A' }}">

					<div
						class="dark:bg-gray-700 dark:border-gray-700 flex flex-col items-start justify-center rounded-xl border border-gray-200 bg-white p-3">
						<p class="dark:text-gray-300 text-sm text-gray-600">Kode Pegawai</p>
						<p class="text-navy-700 dark:text-white text-base font-medium">
							{{ $data->kode_pegawai ?? 'N/A' }}
						</p>
					</div>

					<div
						class="dark:bg-gray-700 dark:border-gray-700 flex flex-col items-start justify-center rounded-xl border border-gray-200 bg-white p-3">
						<p class="dark:text-gray-300 text-sm text-gray-600">Nama Pegawai</p>
						<p class="text-navy-700 dark:text-white text-base font-medium">
							{{ $data->pegawaiRelasi->full_name ?? 'N/A' }}
						</p>
					</div>

					<div
						class="dark:bg-gray-700 dark:border-gray-700 flex flex-col items-start justify-center rounded-xl border border-gray-200 bg-white p-3">
						<p class="dark:text-gray-300 text-sm text-gray-600">Waktu Laporan Dibuat</p>
						<p class="text-navy-700 dark:text-white text-base font-medium">
							{{ $data->created_at->locale('id')->isoFormat('D MMMM YYYY HH:mm:ss') ?? 'N/A' }}
						</p>
					</div>

					<div
						class="dark:bg-gray-700 dark:border-gray-700 flex flex-col items-start justify-center rounded-xl border border-gray-200 bg-white p-3">
						<p class="dark:text-gray-300 text-sm text-gray-600">Waktu Laporan Diupdate</p>
						<p class="text-navy-700 dark:text-white text-base font-medium">
							{{ $data->updated_at->locale('id')->isoFormat('D MMMM YYYY HH:mm:ss') ?? 'N/A' }}
						</p>
					</div>

					<div
						class="dark:bg-gray-700 dark:border-gray-700 flex flex-col items-start justify-center rounded-xl border border-gray-200 bg-white p-3 md:col-span-2">
						<p class="dark:text-gray-300 mb-2 text-sm text-gray-600">Judul Laporan <span class="text-sm text-red-500">*</span>
						</p>
						<input class="block w-full rounded-lg bg-gray-300 p-2.5 text-sm text-gray-900" id="title" name="title"
							type="text" value="{{ $data->title ?? 'N/A' }}" placeholder="Judul laporan.." required>
						<div class="mt-2 hidden text-sm text-red-500" id="alert-title"></div>
					</div>

					<div
						class="dark:bg-gray-700 dark:border-gray-700 flex flex-col items-start justify-center rounded-xl border border-gray-200 bg-white p-3 md:col-span-2">
						<p class="dark:text-gray-300 mb-2 text-sm text-gray-600">Lokasi <span class="text-sm text-red-500">*</span>
						</p>
						<input class="block w-full rounded-lg bg-gray-300 p-2.5 text-sm text-gray-900" id="location" name="location"
							type="text" value="{{ $data->location ?? 'N/A' }}" placeholder="Judul laporan.." required>
						<div class="mt-2 hidden text-sm text-red-500" id="alert-location"></div>
					</div>

					<div
						class="dark:bg-gray-700 dark:border-gray-700 flex flex-col items-start justify-center rounded-xl border border-gray-200 bg-white p-3 md:col-span-2">
						<p class="dark:text-gray-300 mb-2 text-sm text-gray-600">Dokumentasi</p>
						<div class="relative overflow-auto">
							<div class="flex overflow-x-auto" id="captured-images">
								<!-- Thumbnail gambar yang diambil akan muncul di sini -->
								@if ($data->photoCollectRelasi)
									@foreach ($data->photoCollectRelasi as $photo)
										<div class="relative me-2 flex-none items-center gap-4 rounded-xl p-2">
											<img
												class="h-36 w-36 rounded-xl object-cover blur-sm transition duration-300 ease-in-out hover:scale-105 hover:blur-0"
												id="documentations" data-url="{{ asset($photo->photourl) }}" src="{{ asset($photo->photourl) }}"
												alt="" onclick="javascript:void(0)">
										</div>
									@endforeach
								@endif
							</div>
						</div>
					</div>

					<div class="relative col-span-2 mb-4">
						<p class="dark:text-gray-300 mb-2 text-sm text-gray-600">Keterangan <span class="text-sm text-red-500">*</span>
						</p>
						<div class="dark:bg-white h-32 w-full" id="editor"></div>
						<input id="keterangan" name="keterangan" type="hidden">
						<div class="mt-2 hidden text-sm text-red-500" id="alert-keterangan"></div>
					</div>

					<div class="relative col-span-2 w-full">
						<x-dashboard.button class="float-right flex flex-row px-2.5 py-2" id="store" type="button" :color="'blue'">
							<x-slot name="icon">
								<x-icons.send-right class="icon h-4 w-4" />
							</x-slot>
							Update laporan
						</x-dashboard.button>
					</div>

				</div>
			</div>
		</div>
	</div>
@endsection
@push('script')
	<script>
		const data = @json($data->keterangan);
	</script>
	@vite(['resources/js/collect/edit.js'])
@endpush

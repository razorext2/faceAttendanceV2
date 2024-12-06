@extends('dashboard.layoutsDash.app')
@section('content')
	<form id="add-collector" action="{{ route('collect.create') }}"></form>
	<div class="relative grid grid-cols-1 gap-6">

		{{-- @can('collect-add') --}}
		<div class="max-w-xs">
			<x-dashboard.button class="px-2.5 py-2" id="add-button" form="add-collector" type="submit" :color="'green'">
				<x-slot name="icon">
					<x-icons.arrow-left class="icon h-6 w-6 rotate-180 dark:fill-white" />
				</x-slot>
				Tambah Data
			</x-dashboard.button>
		</div>
		{{-- @endcan --}}

		<div class="flex h-auto items-center justify-center">
			<div
				class="grid w-full grid-cols-2 gap-2 rounded-xl bg-white p-2 shadow-sm ring-1 ring-gray-200 dark:bg-[#18181b] dark:ring-gray-700 md:gap-4 md:p-6">

				{{-- filter dll --}}
				@can('collect-approve')
					<div class="col-span-2">
						<x-filter.filter-bar>
							<div class="col-span-2 mx-auto flex w-full items-center lg:col-span-1">
								<x-filter.filter-input-text id="kode-pegawai" name="kode-pegawai" :text="'kode pegawai'">
									<x-icons.fingerprint class="h-4 w-4 text-gray-500 dark:text-gray-400" />
								</x-filter.filter-input-text>
							</div>

							<div class="col-span-2 mx-auto flex w-full items-center lg:col-span-1">
								<x-filter.filter-input-text id="title" name="title" :text="'judul laporan'">
									<x-icons.font-case class="h-4 w-4 text-gray-500 dark:text-gray-400" />
								</x-filter.filter-input-text>
							</div>

							<div class="col-span-2 mx-auto w-full items-center lg:col-span-1">
								<x-filter.filter-input-select id="status" name="status" :options="['0' => 'Pending', '1' => 'Approved', '2' => 'Rejected']" default-option="Filter by status" />
							</div>

							<div class="col-span-2 mx-auto w-full items-center lg:col-span-1">
								<x-filter.date-range />
							</div>

						</x-filter.filter-bar>
					</div>
				@endcan

				<div class="col-span-2" x-data="{ openRow: null }">
					<table class="z-10 mt-20 w-full text-left text-sm text-gray-500 dark:text-gray-300 sm:mt-4" id="table-collector">
						<thead class="text-xs uppercase">
							<tr class="h-12">
								<th>
									<span class="flex items-center text-gray-800 dark:text-white">
										#
									</span>
								</th>
								<th>
									<span class="flex items-center text-gray-800 dark:text-white">
										Aksi
									</span>
								</th>
								<th>
									<span class="flex items-center text-gray-800 dark:text-white">
										Nama Pegawai
									</span>
								</th>
								<th>
									<span class="flex items-center text-gray-800 dark:text-white">
										Tanggal laporan
									</span>
								</th>
								<th>
									<span class="flex items-center text-gray-800 dark:text-white">
										Judul
									</span>
								</th>
							</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection
@push('script')
	<script>
		let kode_pegawai = "{{ Auth::user()->kode_pegawai }}";
		const permissionDelete = @json(auth()->user()->can('collect-delete'));

		if (!kode_pegawai) {
			src = "{{ route('collectors.index') }}";
		} else {
			src = "{{ route('collect.index') }}";
		}
	</script>
	@vite(['resources/js/collect/index.js'])
@endpush

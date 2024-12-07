<table class="z-10 mt-20 w-full text-left text-sm text-gray-800 dark:text-gray-300 sm:mt-4" id="{{ $id }}">
	<thead class="text-xs uppercase">
		<tr class="h-12">
			@foreach ($tablename as $row => $label)
				<th>
					<span class="flex items-center text-gray-800 dark:text-white">
						{{ $label }}
					</span>
				</th>
			@endforeach
		</tr>
	</thead>
	<tbody>
		{{-- filter --}}
		@can('collect-approve')
			<div class="col-span-2 mb-4">
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
		{{-- end filter --}}
	</tbody>
</table>

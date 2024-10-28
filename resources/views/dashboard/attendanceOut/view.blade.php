@extends('dashboard.layoutsDash.app')
@section('content')
	<div class="grid grid-cols-1 gap-6">
		<div
			class="dark:bg-gray-800 dark:ring-gray-500 flex h-auto items-center justify-center rounded-xl bg-gray-50 p-4 shadow-sm ring-1 ring-gray-200">

			<table id="filter-table">
				<thead>
					<tr>
						<th>
							<span class="dark:text-white flex items-center text-gray-800">
								Foto
								<svg class="ms-1 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
									fill="none" viewBox="0 0 24 24">
									<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="m8 15 4 4 4-4m0-6-4-4-4 4" />
								</svg>
							</span>
						</th>
						<th>
							<span class="dark:text-white flex items-center text-gray-800">
								Kode Pegawai
								<svg class="ms-1 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
									fill="none" viewBox="0 0 24 24">
									<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="m8 15 4 4 4-4m0-6-4-4-4 4" />
								</svg>
							</span>
						</th>
						<th>
							<span class="dark:text-white flex items-center text-gray-800">
								Full Name
								<svg class="ms-1 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
									fill="none" viewBox="0 0 24 24">
									<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="m8 15 4 4 4-4m0-6-4-4-4 4" />
								</svg>
							</span>
						</th>
						<th>
							<span class="dark:text-white flex items-center text-gray-800">
								Absen Keluar
								<svg class="ms-1 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
									fill="none" viewBox="0 0 24 24">
									<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="m8 15 4 4 4-4m0-6-4-4-4 4" />
								</svg>
							</span>
						</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($datas as $index => $data)
						<tr class="dark:text-gray-300 dark:hover:bg-gray-700/50 dark:hover:text-white hover:bg-gray-100 hover:text-black">
							<td>
								@php
									$photoURL = sha1('libs');
									$url = $data->photoURL;
									$path = asset($photoURL . '/' . $url);
								@endphp
								<img class="w-32 rounded-lg blur-sm transition-all duration-300 hover:blur-none" src="{{ $path . '.png' }}"
									alt="image description">
							</td>
							<td>{{ $data->pegawaiRelasi->kode_pegawai ?? 'N/A' }}</td>
							<td>{{ $data->pegawaiRelasi->full_name ?? 'N/A' }}</td>
							<td>
								{{ $data->jam_keluar ?? 'N/A' }}
								@if (
									\Carbon\Carbon::parse($data->jam_keluar)->lt(
										\Carbon\Carbon::parse(\Carbon\Carbon::parse($data->jam_keluar)->toDateString() . '17:00:00')))
									<span
										class="dark:bg-red-900 dark:text-white dark:ring-gray-500 ml-2 rounded-full bg-red-100 px-2.5 py-0.5 text-xs font-medium text-red-800 shadow-sm ring-1 ring-gray-300">Pulang
										Cepat</span>
								@else
									<span
										class="dark:bg-green-800 dark:text-white dark:ring-gray-500 ml-2 rounded-full bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800 shadow-sm ring-1 ring-gray-300">Tepat
										Waktu</span>
								@endif
							</td>
						</tr>
					@endforeach

				</tbody>
			</table>
		</div>
	</div>
@endsection

@extends('dashboard.layoutsDash.app')
@section('content')

	<div class="mb-4 grid grid-cols-1 gap-0 xl:grid-cols-3 xl:gap-4">

		<!-- Chart -->
		<div class="col-span-2 mb-4 flex items-center justify-center xl:mb-0">
			<div class="dark:bg-[#18181b] dark:border-gray-700 w-full rounded-xl border border-gray-200 bg-white p-4 md:p-6">
				<div class="mb-5 flex justify-between">
					<div>
						<p class="dark:text-white mb-2 text-3xl font-bold leading-none text-gray-900">{{ $yearNow }}
						</p>
						<p class="dark:text-gray-300 text-base font-normal text-gray-500">Data 7 hari kebelakang</p>
					</div>
					<div class="dark:text-white flex items-center px-2.5 py-0.5 text-center text-base font-semibold text-green-500">
						{{ $formattedDateRange }}
					</div>
				</div>
				<div id="tooltip-chart" data-late-counts='@json($lateCounts)'
					data-ontime-counts='@json($ontimeCounts)' data-outtime-counts="@json($outtimeCounts)"
					data-fast-counts='@json($fastCounts)' data-dates='@json($dates)'></div>
				<div class="dark:border-gray-700 mt-5 grid grid-cols-1 items-center justify-between border-t border-gray-200">
					<div class="flex items-center justify-between pt-5">
						<a
							class="dark:hover:bg-gray-900 dark:text-white dark:hover:text-blue-500 inline-flex items-center rounded-lg px-3 py-2 text-sm font-semibold uppercase text-blue-600 hover:bg-blue-200 hover:text-blue-700"
							href="{{ route('attendanceIn.index') }}">
							Absen masuk
							<svg class="ms-1.5 h-2.5 w-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
								fill="none" viewBox="0 0 6 10">
								<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
							</svg>
						</a>

						<a
							class="dark:hover:bg-gray-900 dark:text-white dark:hover:text-red-500 inline-flex items-center rounded-lg px-3 py-2 text-sm font-semibold uppercase text-red-600 hover:bg-red-200 hover:text-red-700"
							href="{{ route('attendanceOut.index') }}">
							Absen keluar
							<svg class="ms-1.5 h-2.5 w-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
								fill="none" viewBox="0 0 6 10">
								<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
							</svg>
						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- End Chart -->

		<!-- Notification -->
		<div class="grid grid-cols-1">

			<div class="dark:bg-[#18181b] dark:border-gray-700 flex flex-col rounded-xl border border-gray-200 bg-white p-4">

				<p class="font-base dark:text-gray-400 text-sm text-gray-500">
					Absen Masuk
				</p>
				<p class="dark:text-white text-md font-medium text-gray-900">
					{{ \Carbon\Carbon::today()->locale('id')->isoFormat('D MMMM YYYY') }}
				</p>
				<ul class="h-44 overflow-y-auto text-gray-700" aria-labelledby="dropdownUsersButton">

					@if (!empty($attendance_today))
						@foreach ($attendance_today as $at)
							<li>
								<p
									class="dark:bg-green-700 dark:hover:bg-green-800 my-2 flex rounded-lg bg-green-500 bg-none p-2 text-xs text-white hover:bg-green-600">
									<img class="me-3 h-6 w-6 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
										alt="Jese image">
									<span class="leading-relaxed">
										{{ $at->pegawaiRelasi->full_name ?? 'N/A' }}, melakukan absensi <b
											class="rounded bg-green-800 px-1 py-0.5 text-white">Masuk</b> pada
										pukul
										{{ \Carbon\Carbon::parse($at->jam_masuk)->format('H:i') }}
									</span>
								</p>
							</li>
						@endforeach
					@else
						<li>
							<span class="my-2 flex items-center rounded-xl">
								Belum ada absensi hari ini
							</span>
						</li>
					@endif

				</ul>
			</div>

			<div class="dark:bg-[#18181b] dark:border-gray-700 mt-3 flex flex-col rounded-xl border border-gray-200 bg-white p-4">

				<p class="font-base text-sm text-gray-400">
					Absen Keluar
				</p>
				<p class="dark:text-white text-md font-medium text-gray-900">
					{{ \Carbon\Carbon::today()->locale('id')->isoFormat('D MMMM YYYY') }}
				</p>
				<ul class="h-44 overflow-y-auto text-gray-700" aria-labelledby="dropdownUsersButton">
					@foreach ($attendance_out_today as $at)
						<p
							class="dark:bg-red-700 dark:hover:bg-red-800 my-2 flex rounded-lg bg-red-500 bg-none p-2 text-xs text-white hover:bg-red-600">
							<img class="me-3 h-6 w-6 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
								alt="Jese image">
							<span class="leading-relaxed">
								{{ $at->pegawaiRelasi->full_name ?? 'N/A' }}, melakukan absensi <b
									class="rounded bg-red-800 px-1 py-0.5 text-white">Keluar</b> pada
								pukul
								{{ \Carbon\Carbon::parse($at->jam_keluar)->format('H:i') }}
							</span>
						</p>
					@endforeach
				</ul>
			</div>
		</div>
		<!-- End Notification -->
	</div>

	<div class="grid grid-cols-1 gap-6">
		<div
			class="dark:bg-[#18181b] dark:border-gray-700 flex h-auto items-center justify-center rounded-xl border border-gray-200 bg-white p-4 shadow-sm">
			<!-- Table -->
			<div class="relative w-full overflow-x-auto">
				<table class="w-full text-left text-sm" id="filter-table">
					<thead>
						<tr>
							<th class="dark:text-white">
								<span class="flex items-center">
									Waktu
									<svg class="ms-1 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
										fill="none" viewBox="0 0 24 24">
										<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
											d="m8 15 4 4 4-4m0-6-4-4-4 4" />
									</svg>
								</span>
							</th>
							<th class="dark:text-white">
								<span class="flex items-center">
									Kode Pegawai
									<svg class="ms-1 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
										fill="none" viewBox="0 0 24 24">
										<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
											d="m8 15 4 4 4-4m0-6-4-4-4 4" />
									</svg>
								</span>
							</th>
							<th class="dark:text-white">
								<span class="flex items-center">
									Full Name
									<svg class="ms-1 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
										fill="none" viewBox="0 0 24 24">
										<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
											d="m8 15 4 4 4-4m0-6-4-4-4 4" />
									</svg>
								</span>
							</th>
							<th class="dark:text-white">
								<span class="flex items-center">
									Nick Name
									<svg class="ms-1 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
										height="24" fill="none" viewBox="0 0 24 24">
										<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
											d="m8 15 4 4 4-4m0-6-4-4-4 4" />
									</svg>
								</span>
							</th>
							<th class="dark:text-white">
								<span class="flex items-center">
									No Telepon
									<svg class="ms-1 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
										height="24" fill="none" viewBox="0 0 24 24">
										<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
											d="m8 15 4 4 4-4m0-6-4-4-4 4" />
									</svg>
								</span>
							</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($attendance_all as $index => $attendance)
							<tr
								class="dark:text-gray-300 dark:hover:bg-gray-700/50 dark:hover:text-white hover:bg-gray-100 hover:text-black">
								<td class="flex flex-col text-center">
									<!-- jam masuk -->
									@if ($attendance['jam_masuk'])
										<span
											class="dark:text-white dark:ring-1 dark:ring-gray-700 dark:bg-green-800 dark:hover:bg-green-900 my-1 w-full rounded-lg py-1 text-black ring-1 ring-green-400 hover:bg-green-300 md:px-1">
											Masuk : {{ \Carbon\Carbon::parse($attendance['jam_masuk'])->format('H:i') }}
										</span>
									@else
										<span
											class="dark:text-white dark:ring-1 dark:ring-gray-700 dark:bg-red-800 dark:hover:bg-red-900 my-1 w-full rounded-lg py-1 text-black ring-1 ring-red-400 hover:bg-red-300 md:px-1">
											Belum Absen
										</span>
									@endif

									<!-- jam keluar -->
									@if ($attendance['latest_jam_keluar'])
										<span
											class="dark:text-white dark:ring-1 dark:ring-gray-700 dark:bg-green-800 dark:hover:bg-green-900 my-1 w-full rounded-lg py-1 text-black ring-1 ring-green-400 hover:bg-green-300 md:px-1">
											Keluar :
											{{ \Carbon\Carbon::parse($attendance['latest_jam_keluar'])->format('H:i') }}
										</span>
									@else
										<span
											class="dark:text-white dark:ring-1 dark:ring-gray-700 dark:bg-red-800 dark:hover:bg-red-900 my-1 w-full rounded-lg py-1 text-black ring-1 ring-red-400 hover:bg-red-300 md:px-1">
											Belum Absen
										</span>
									@endif

								</td>
								<td>{{ $attendance['kode_pegawai'] ?? 'N/A' }}</td>
								<td>{{ $attendance['full_name'] ?? 'N/A' }}</td>
								<td>{{ $attendance['nick_name'] ?? 'N/A' }}</td>
								<td>{{ $attendance['no_telp'] ?? 'N/A' }}</td>
							</tr>
						@endforeach

					</tbody>
				</table>
			</div>
			<!-- End Table -->
		</div>

	</div>

@endsection

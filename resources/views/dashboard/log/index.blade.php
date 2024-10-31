@extends('dashboard.layoutsDash.app')
@section('content')
	<div class="relative grid grid-cols-1 gap-6">

		<div
			class="dark:bg-[#18181b] dark:ring-gray-700 flex h-auto items-center justify-center rounded-xl bg-white px-2 pb-2 pt-16 shadow-sm ring-1 ring-gray-200 lg:p-4">
			<table id="filter-table">
				<thead>
					<tr>
						<th>
							<span class="dark:text-white flex items-center text-gray-800">
								User
								<svg class="ms-1 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
									fill="none" viewBox="0 0 24 24">
									<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="m8 15 4 4 4-4m0-6-4-4-4 4" />
								</svg>
							</span>
						</th>
						<th>
							<span class="dark:text-white flex items-center text-gray-800">
								Action
								<svg class="ms-1 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
									fill="none" viewBox="0 0 24 24">
									<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="m8 15 4 4 4-4m0-6-4-4-4 4" />
								</svg>
							</span>
						</th>
						<th>
							<span class="dark:text-white flex items-center text-gray-800">
								IP Address
								<svg class="ms-1 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
									fill="none" viewBox="0 0 24 24">
									<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="m8 15 4 4 4-4m0-6-4-4-4 4" />
								</svg>
							</span>
						</th>
						<th>
							<span class="dark:text-white flex items-center text-gray-800">
								User Agent
								<svg class="ms-1 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
									fill="none" viewBox="0 0 24 24">
									<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="m8 15 4 4 4-4m0-6-4-4-4 4" />
								</svg>
							</span>
						</th>
						<th>
							<span class="dark:text-white flex items-center text-gray-800">
								User Location
								<svg class="ms-1 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
									fill="none" viewBox="0 0 24 24">
									<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="m8 15 4 4 4-4m0-6-4-4-4 4" />
								</svg>
							</span>
						</th>
						<th>
							<span class="dark:text-white flex items-center text-gray-800">
								Datetime
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
					@foreach ($log as $index => $data)
						<tr class="dark:text-gray-300 dark:hover:bg-gray-700/50 dark:hover:text-white hover:bg-gray-100 hover:text-black">
							<td>
								<p>Userid: {{ $data->user_id }}</p>
								<p class="font-medium">{{ $data->userRelasi->name ?? 'N/A' }}</p>
							</td>
							<td>
								@php
									$str = $data->user_action;
									$st = '';

									if (str_contains($str, 'create')) {
									    $st = 'bg-green-400 dark:bg-transparent dark:text-green-400';
									} elseif (str_contains($str, 'update')) {
									    $st = 'bg-blue-400 dark:bg-transparent dark:text-blue-400';
									} elseif (str_contains($str, 'delete')) {
									    $st = 'bg-red-400 dark:bg-transparent dark:text-red-400';
									} else {
									    $st = 'bg-gray-400 dark:bg-transparent dark:text-gray-300';
									}
								@endphp

								<span
									class="{{ $st }} cursor-default rounded-lg px-3 py-1 font-medium text-black">{{ ucfirst($data->user_action) ?? 'N/A' }}</span>
							</td>
							<td>{{ $data->ip_address ?? 'N/A' }}</td>
							<td>{{ $data->user_agent ?? 'N/A' }}</td>
							<td>{{ $data->user_location ?? 'N/A' }}</td>
							<td>Create: {{ $data->created_at ?? 'N/A' }} / Updated: {{ $data->updated_at ?? 'N/A' }}</td>
						</tr>
					@endforeach

				</tbody>
			</table>
		</div>
	</div>
@endsection

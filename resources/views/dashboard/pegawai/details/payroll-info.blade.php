@extends('dashboard.pegawai.detail')
@section('menus')
	<div
		class="dark:bg-[#18181b] dark:border-gray-700 mb-8 grid gap-4 rounded-xl border border-gray-200 bg-white p-6 lg:grid-cols-2"
		id="payroll" role="tabpanel" aria-labelledby="payroll-tab">
		<div class="col-span-2 w-full">
			<div class="grid">
				<div class="relative w-full">
					<header class="flex flex-row">
						<h2 class="font-base text-sm text-gray-400">
							Salary Info
						</h2>
					</header>
					<h2 class="dark:text-white text-xl font-medium text-gray-900">
						{{ $pegawai->full_name }}
					</h2>

					@if (auth()->user()->can('salary-edit'))
						<a class="absolute bottom-0 right-0 p-1 text-sm text-blue-500 hover:underline"
							href="{{ route('salary.edit', $pegawai->id) }}">
							Edit
						</a>
					@endif
				</div>

				<div class="w-full">

					<div class="mt-4">

						<div class="grid gap-2 md:grid-cols-2">

							<div
								class="dark:bg-gray-700 dark:border-gray-700 flex flex-col items-start justify-center rounded-xl border border-gray-200 bg-gray-100 p-3">
								<p class="dark:text-gray-300 text-sm text-gray-600">Kode Pegawai</p>
								<p class="text-navy-700 dark:text-white text-base font-medium">
									{{ $pegawai->kode_pegawai ?? 'N/A' }}
								</p>
							</div>

							<div
								class="dark:bg-gray-700 dark:border-gray-700 flex flex-col items-start justify-center rounded-xl border border-gray-200 bg-gray-100 p-3">
								<p class="dark:text-gray-300 text-sm text-gray-600">Nama Lengkap</p>
								<p class="text-navy-700 dark:text-white text-base font-medium">
									{{ $pegawai->full_name ?? 'N/A' }}
								</p>
							</div>

							<div
								class="dark:bg-gray-700 dark:border-gray-700 flex flex-col items-start justify-center rounded-xl border border-gray-200 bg-gray-100 p-3">
								<p class="dark:text-gray-300 text-sm text-gray-600">Payroll Type</p>
								<p class="text-navy-700 dark:text-white text-base font-medium first-letter:uppercase">
									{{ $pegawai->salaryRelasi->payroll_type }}
								</p>
							</div>

							<div
								class="dark:bg-gray-700 dark:border-gray-700 flex flex-col items-start justify-center rounded-xl border border-gray-200 bg-gray-100 p-3">
								<p class="dark:text-gray-300 text-sm text-gray-600">Base Salary</p>
								<p class="text-navy-700 dark:text-white text-base font-medium">
									{{ Number::currency($pegawai->salaryRelasi->salary_fee, 'IDR', 'id') }}
								</p>
							</div>

							<div
								class="dark:bg-gray-700 dark:border-gray-700 flex flex-col items-start justify-center rounded-xl border border-gray-200 bg-gray-100 p-3 md:col-span-2">
								<p class="dark:text-gray-300 text-sm text-gray-600">Periode</p>
								<p class="text-navy-700 dark:text-white text-base font-medium">
									{{ \Carbon\Carbon::parse('1-' . $pegawai->salaryRelasi->period)->locale('id')->isoFormat('MMMM YYYY') }}
								</p>
							</div>

						</div>

					</div>
				</div>
			</div>
		</div>

	</div>

	<div
		class="dark:text-white dark:bg-[#18181b] dark:border-gray-700 col-span-2 mb-8 w-full rounded-xl border border-gray-200 bg-white p-6">
		<div class="relative mb-4 w-full">
			<header class="flex flex-row">
				<h2 class="font-base text-sm text-gray-400">
					Detail
				</h2>
			</header>
			<h2 class="dark:text-white text-xl font-medium text-gray-900">
				Allowances
			</h2>

			<button class="absolute bottom-0 right-0 p-1 text-sm text-blue-500 hover:underline" id="openAddModal"
				data-modal-target="allowanceadd" data-modal-toggle="allowanceadd" type="button">
				Add
			</button>
		</div>

		<table id="allowanceTable">
			<thead>
				<tr>
					<th>
						<span class="flex items-center">
							#
						</span>
					</th>
					<th>
						<span class="flex items-center">
							Allowance Name
						</span>
					</th>
					<th>
						<span class="flex items-center">
							Type (% or Terbilang)
						</span>
					</th>
					<th>
						<span class="flex items-center">
							Allowance Period
						</span>
					</th>
					<th>
						<span class="flex items-center">
							Allowance Fee
						</span>
					</th>
				</tr>
			</thead>
			<tbody>
				@php
					$totalFee = 0;
				@endphp
				@foreach ($allowance as $data)
					<tr>
						<td class="whitespace-nowrap font-medium">
							<a class="text-sm text-blue-500 hover:underline" href="#">Edit</a>
						</td>
						<td class="dark:text-white whitespace-nowrap font-medium text-gray-900">{{ $data->allowance_name }}</td>
						<td>
							@if ($data->allowance_type > 100)
								{{ Number::currency($data->allowance_type, 'IDR', 'id') }}
							@else
								{{ $data->allowance_type . '%' }}
							@endif
						</td>
						<td>{{ Carbon\Carbon::parse($data->allowance_period)->locale('id')->isoFormat('MMMM YYYY') }}</td>
						<td>{{ Number::currency($data->allowance_fee, 'IDR', 'id') }}</td>
						@php
							$totalFee += $data->allowance_fee;
						@endphp
					</tr>
				@endforeach
				<tr>
					<td class="font-bold" colspan="4">Total</td>
					<td>{{ Number::currency($totalFee, 'IDR', 'id') }}</td>
				</tr>
			</tbody>
		</table>
	</div>

	<div
		class="dark:text-white dark:bg-[#18181b] dark:border-gray-700 col-span-2 mb-8 w-full rounded-xl border border-gray-200 bg-white p-6">
		<div class="relative mb-4 w-full">
			<header class="flex flex-row">
				<h2 class="font-base text-sm text-gray-400">
					Detail
				</h2>
			</header>
			<h2 class="dark:text-white text-xl font-medium text-gray-900">
				Deductions
			</h2>

			<a class="absolute bottom-0 right-0 p-1 text-sm text-blue-500 hover:underline" href="#">
				Add
			</a>
		</div>

		<table id="deductionsTable">
			<thead>
				<tr>
					<th>
						<span class="flex items-center">
							#
						</span>
					</th>
					<th>
						<span class="flex items-center">
							Deduction Name
						</span>
					</th>
					<th>
						<span class="flex items-center">
							Type (% or Terbilang)
						</span>
					</th>
					<th>
						<span class="flex items-center">
							Deduction Period
						</span>
					</th>
					<th>
						<span class="flex items-center">
							Deduction Fee
						</span>
					</th>
				</tr>
			</thead>
			<tbody>
				@php
					$totalFee = 0;
				@endphp
				@foreach ($deduction as $data)
					<tr>
						<td class="whitespace-nowrap font-medium">
							<a class="text-sm text-blue-500 hover:underline" href="#">Edit</a>
						</td>
						<td class="dark:text-white whitespace-nowrap font-medium text-gray-900">{{ $data->deduction_name }}</td>
						<td>
							@if ($data->deduction_type > 100)
								{{ Number::currency($data->deduction_type, 'IDR', 'id') }}
							@else
								{{ $data->deduction_type . '%' }}
							@endif
						</td>
						<td>{{ Carbon\Carbon::parse($data->deduction_period)->locale('id')->isoFormat('MMMM YYYY') }}</td>
						<td>{{ Number::currency($data->deduction_fee, 'IDR', 'id') }}</td>
					</tr>

					@php
						$totalFee += $data->deduction_fee;
					@endphp
				@endforeach
				<tr>
					<td class="font-bold" colspan="4">Total</td>
					<td>{{ Number::currency($totalFee, 'IDR', 'id') }}</td>
				</tr>
			</tbody>
		</table>
	</div>

	<div
		class="fixed left-0 right-0 top-0 z-50 h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0"
		id="allowanceadd" aria-hidden="true" tabindex="-1">
		<div class="modal-body relative max-h-full w-full max-w-md p-4" id="modalBody">
			@include('dashboard.allowance.add') <!-- Modal form will be loaded here -->
		</div>
	</div>
@endsection

@section('scripts')
	<script>
		document.getElementById('openAddModal').addEventListener('click', function() {
			fetch('{{ route('allowances.create') }}')
				.then(response => response.text())
				.then(data => {
					document.getElementById('modalBody').innerHTML = data;
					document.getElementById('allowanceadd').classList.remove('hidden');
				})
				.catch(error => console.error('Error:', error));
		});

		// Handle form submission
		document.addEventListener('submit', function(e) {
			if (e.target.id === 'allowanceForm') {
				e.preventDefault();
				const formData = new FormData(e.target);
				const id = formData.get('id');

				const method = id ? 'PUT' : 'POST'; // Determine if we're creating or updating
				fetch(id ? `/allowances/${id}` : '#', {
						method: method,
						body: formData,
					})
					.then(response => response.json())
					.then(data => {
						if (data.success) {
							window.location.reload(); // Reload the page to see changes
						}
					});
			}
		});
	</script>
@endsection

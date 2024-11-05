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
		Add Allowances
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
		@if ($allowance->count() > 0)
			@foreach ($allowance as $data)
				<tr>
					<td class="whitespace-nowrap font-medium">
						<button class="text-sm text-blue-500 hover:underline" id="openEditModal" data-id="{{ $data->id }}"
							data-modal-target="allowanceedit" data-modal-toggle="allowanceedit">
							<span class="hover:underline"> Edit </span>
						</button>
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
						if ($totalFee) {
						    $totalFee += $data->allowance_fee;
						} else {
						    $totalFee = 0;
						}
					@endphp
				</tr>
			@endforeach
			<tr>
				<td class="font-bold" colspan="4">Total</td>
				<td>{{ Number::currency($totalFee, 'IDR', 'id') }}</td>
			</tr>
		@endif

	</tbody>
</table>

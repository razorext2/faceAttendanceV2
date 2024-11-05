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
		Add Deductions
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
		@if ($deduction->count() > 0)
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
		@endif
	</tbody>
</table>

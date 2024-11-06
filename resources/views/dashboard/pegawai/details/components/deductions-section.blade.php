<div class="relative mb-4 w-full">
	<header class="flex flex-row">
		<h2 class="font-base text-sm text-gray-400">
			Detail
		</h2>
	</header>
	<h2 class="dark:text-white text-xl font-medium text-gray-900">
		Deductions
	</h2>

	<button class="absolute bottom-0 right-0 p-1 text-sm text-blue-500 hover:underline" id="btn-create-deduction"
		type="button">
		Add Deductions
	</button>
</div>

<table id="table-deduction">
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
					Deduction Period
				</span>
			</th>
			<th>
				<span class="flex items-center">
					Type (% or Terbilang)
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
	</tbody>
	<tfoot>
		<tr>
			<th colspan="4">Total Deduction: </th>
			<th id="total-deduction-fee"></th>
		</tr>
	</tfoot>
</table>

@include('dashboard.deduction.add-modal')
@include('dashboard.deduction.edit-modal')

<script type="text/javascript">
	function showDeductionData() {
		// Initialize DataTable
		let table = $('#table-deduction').DataTable({
			processing: true,
			serverSide: true,
			responsive: true,
			searchable: true,
			ajax: "{{ url()->current() }}",
			columns: [{
					data: 'actions',
					name: 'actions',
				}, {
					data: 'deduction_name',
					name: 'deduction_name'
				},
				{
					data: 'deduction_period',
					name: 'deduction_period'
				},
				{
					data: 'deduction_type',
					name: 'deduction_type',
				},
				{
					data: 'deduction_fee',
					name: 'deduction_fee'
				},
			],
			dom: `<"text-left dark:text-white"l>S<"relative overflow-x-auto w-full mt-20 lg:mt-4"t><"grid text-center gap-6 lg:grid-cols-2 mt-4 dark:text-white"<"lg:mt-3 lg:text-left"i><"lg:text-right dark:text-gray-900"p>>`,
		});
	}

	$(document).ready(function() {
		showDeductionData();
	});
</script>

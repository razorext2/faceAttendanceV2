<div class="relative mb-4 w-full">
	<header class="flex flex-row">
		<h2 class="font-base text-sm text-gray-400">
			Detail
		</h2>
	</header>
	<h2 class="dark:text-white text-xl font-medium text-gray-900">
		Allowances
	</h2>

	<button class="absolute bottom-0 right-0 p-1 text-sm text-blue-500 hover:underline" id="btn-create-allowance"
		type="button">
		Add Allowances
	</button>
</div>

<table id="table-allowance">
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
					Allowance Period
				</span>
			</th>
			<th>
				<span class="flex items-center">
					Type (% or Terbilang)
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
	</tbody>
	<tfoot>
		<tr>
			<th colspan="4">Total Allowance: </th>
			<th id="total-allowance-fee"></th>
		</tr>
	</tfoot>
</table>

@include('dashboard.allowance.add-modal')
@include('dashboard.allowance.edit-modal')

<script type="text/javascript">
	function showAllowanceData() {
		// Initialize DataTable
		let table = $('#table-allowance').DataTable({
			processing: true,
			serverSide: true,
			responsive: true,
			searchable: true,
			ajax: "{{ url()->current() }}",
			columns: [{
					data: 'actions',
					name: 'actions',
				}, {
					data: 'allowance_name',
					name: 'allowance_name'
				},
				{
					data: 'allowance_period',
					name: 'allowance_period'
				},
				{
					data: 'allowance_type',
					name: 'allowance_type',
				},
				{
					data: 'allowance_fee',
					name: 'allowance_fee'
				},
			],
			dom: `<"text-left dark:text-white"l>S<"relative overflow-x-auto w-full mt-20 lg:mt-4"t><"grid text-center gap-6 lg:grid-cols-2 mt-4 dark:text-white"<"lg:mt-3 lg:text-left"i><"lg:text-right dark:text-gray-900"p>>`,
			footerCallback: function(row, data, start, end, display) {
				let api = this.api();

				// Calculate the total for numeric-only values in the allowance_fee column
				let total = api
					.column(4, {
						page: 'current'
					}) // Column index for allowance_fee
					.data()
					.reduce(function(a, b) {
						// Strip out non-numeric characters and convert commas to dots for decimals
						let numericValue = b.replace(/Rp\s?|\./g, '').replace(',', '.');
						let parsedValue = parseFloat(numericValue) || 0;
						return a + parsedValue;
					}, 0);

				// Format and display the total in the footer
				$(api.column(4).footer()).html(
					`Rp ${total.toLocaleString('id-ID', { minimumFractionDigits: 2 })}`);
			}
		});
	}

	$(document).ready(function() {
		showAllowanceData();
	});
</script>

@extends('dashboard.layoutsDash.app')
@section('content')
	<form id="add-collector" action="{{ route('collect.create') }}"></form>
	<div class="relative grid grid-cols-1 gap-6">

		{{-- @can('collect-add') --}}
		<div class="max-w-xs">
			<x-dashboard.button form="add-collector">Tambah Data</x-dashboard.button>
		</div>
		{{-- @endcan --}}

		<div class="flex h-auto items-center justify-center">
			<div
				class="dark:bg-[#18181b] dark:ring-gray-700 grid w-full grid-cols-2 gap-2 rounded-xl bg-white p-2 shadow-sm ring-1 ring-gray-200 md:gap-4 md:p-6">

				{{-- filter dll --}}
				<div class="col-span-2">
					<x-filter.filter-bar>
						<div class="col-span-2 mx-auto flex w-full items-center lg:col-span-1">
							<x-filter.filter-input-text name="kode-pegawai" :text="'kode pegawai'">
								<x-icons.fingerprint class="dark:text-gray-400 h-4 w-4 text-gray-500" />
							</x-filter.filter-input-text>
						</div>

						<div class="col-span-2 mx-auto flex w-full items-center lg:col-span-1">
							<x-filter.filter-input-text name="title" :text="'judul laporan'">
								<x-icons.font-case class="dark:text-gray-400 h-4 w-4 text-gray-500" />
							</x-filter.filter-input-text>
						</div>

						<div class="col-span-2 mx-auto w-full items-center lg:col-span-1">
							<x-filter.filter-input-select id="status" name="status" :options="['0' => 'Pending', '1' => 'Approved', '2' => 'Rejected']" default-option="Filter by status" />
						</div>

					</x-filter.filter-bar>
				</div>

				<div class="col-span-2">
					<table class="dark:text-gray-300 mt-20 w-full text-left text-sm text-gray-500 sm:mt-4" id="table-collector">
						<thead class="text-xs uppercase">
							<tr>
								<th>
									<span class="dark:text-white flex items-center text-gray-800">
										#
									</span>
								</th>
								<th>
									<span class="dark:text-white flex items-center text-gray-800">
										Action
									</span>
								</th>
								<th>
									<span class="dark:text-white flex items-center text-gray-800">
										Nama Pegawai
									</span>
								</th>
								<th>
									<span class="dark:text-white flex items-center text-gray-800">
										Tanggal laporan
									</span>
								</th>
								<th>
									<span class="dark:text-white flex items-center text-gray-800">
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

	<script>
		function showDatatables() {
			let kode_pegawai = "{{ Auth::user()->kode_pegawai }}";

			// if (!kode_pegawai) {
			src = "{{ route('collectors.index') }}"
			// } else {
			// 	src = "{{ route('collect.index') }}"
			// }

			let table = $('#table-collector').DataTable({
				processing: true,
				serverSide: true,
				responsive: true,
				"lengthMenu": [15, 25, 50, 75, 100, -1],
				ajax: {
					url: src,
					type: "GET",
					data: function(d) {
						d.title = $('#title').val();
						d.kode_pegawai = $('#kode-pegawai').val();
						d.status = $('#status').val()
					}
				},
				columns: [{
						data: "DT_RowIndex",
						name: "DT_RowIndex",
						searchable: false,
						orderable: false,
					}, {
						data: 'null',
						name: 'actions',
						render: function(data, type, row) {
							return `<div class="inline-flex" role="group">
												<a href="collect/${row.id}" class="mx-1 text-md font-medium rounded-lg focus:z-10">
													👁 <span class="hover:underline text-blue-500"> Show </span>
												</a>
												<a href="collect/${row.id}/edit"class="mx-1 text-md font-medium rounded-lg focus:z-10">
													&#9999; <span class="hover:underline text-green-500"> Edit </span>
												</a>
												@can('collect-delete')
												<a href="javascript:void(0)" id="delete-btn" data-id="${row.id}" class="mx-1 text-md font-medium rounded-lg focus:z-10">
													&#x26D4; <span class="hover:underline text-red-500"> Delete </span>
												</a>
												@endcan
											</div>`
						},
						orderable: false,
						searchable: false,
					}, {
						data: "kode_pegawai",
						name: "kode_pegawai"
					},
					{
						data: "created_updated_at",
						name: "created_updated_at",
					},
					{
						data: "title_status",
						name: "title_status"
					}
				],
				dom: `<"absolute top-1 md:left-0 mt-14 lg:mt-0 dark:text-white max-w-xs"B><"text-left lg:text-right dark:text-white"l><"relative overflow-x-auto w-full mt-20 lg:mt-4"t><"grid text-center gap-6 lg:grid-cols-2 mt-4 dark:text-white"<"lg:mt-3 lg:text-left"i><"lg:text-right dark:text-gray-900"p>>`,
				buttons: [{
						extend: "csv",
						exportOptions: {
							stripHtml: false
						}
					},
					"print",
				],
				"deferRender": true,
				"language": {
					"infoFiltered": ""
				}
			});



			// jika tombol clear diklik
			$('#clear').click(function() {
				// kosongkan semua value
				$('#title').val('');
				$('#kode-pegawai').val('');
				$('#status')[0].selectedIndex = 0;

				// reload table
				table.draw();
			})
		}

		function deleteData() {
			$("body").on("click", "#delete-btn", function() {
				let id = $(this).data("id");
				let token = $("meta[name='csrf-token']").attr("content");

				Swal.fire({
					title: "Apakah Kamu Yakin?",
					text: "Ingin menghapus data ini!",
					icon: "warning",
					showCancelButton: true,
					cancelButtonText: "Tidak",
					confirmButtonText: "Ya, Hapus!"
				}).then((result) => {
					if (result.isConfirmed) {
						// fetch data to ajax
						$.ajax({
							url: `/api/collectors/${id}`,
							type: "DELETE",
							cache: false,
							data: {
								"_token": token
							},
							success: function(response) {
								Swal.fire({
									icon: "success",
									title: response.message,
									showConfirmButton: false,
									timer: 3000
								});

								$('#table-collector').DataTable().ajax.reload(null, false);
							}
						})
					}
				})
			})
		}

		$(document).ready(function() {
			showDatatables();
			deleteData();
		});
	</script>
@endsection

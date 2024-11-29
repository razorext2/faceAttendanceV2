@extends('dashboard.layoutsDash.app')
@section('content')
	<form id="add-collector" action="{{ route('dashboard.collect.create') }}"></form>
	<div class="relative grid grid-cols-1 gap-6">
		{{-- @can('collect-add') --}}
		<div class="absolute left-2.5 top-48 z-10 max-w-xs sm:left-auto sm:right-6 md:top-40 lg:left-6 lg:right-auto lg:top-24">
			<button
				class="dark:bg-green-800 dark:text-white dark:hover:bg-green-900 dark:ring-gray-700 flex flex-row rounded-lg px-4 py-2 ring-1 ring-green-700 hover:bg-green-300 lg:px-8"
				form="add-collector">
				<svg class="dark:fill-white rotate-180" class="icon" xmlns="http://www.w3.org/2000/svg" width="25" height="25"
					viewBox="0 0 1024 1024" fill="#000000" version="1.1">
					<path
						d="M669.6 849.6c8.8 8 22.4 7.2 30.4-1.6s7.2-22.4-1.6-30.4l-309.6-280c-8-7.2-8-17.6 0-24.8l309.6-270.4c8.8-8 9.6-21.6 2.4-30.4-8-8.8-21.6-9.6-30.4-2.4L360.8 480.8c-27.2 24-28 64-0.8 88.8l309.6 280z"
						fill="" />
				</svg>
				<span class="hidden sm:block">Tambah</span> <span class="hidden sm:block">Data</span>
			</button>
		</div>
		{{-- @endcan --}}
		<div class="flex h-auto items-center justify-center">
			<div
				class="dark:bg-[#18181b] dark:ring-gray-700 grid w-full grid-cols-2 gap-2 rounded-xl bg-white p-2 shadow-sm ring-1 ring-gray-200 md:gap-4 md:p-6">
				<div class="col-span-2 grid grid-cols-2 gap-2 md:col-span-2 md:gap-4 lg:col-span-1">
					<div>
						<div class="relative">
							<div class="pointer-events-none absolute inset-y-0 end-0 top-0 flex items-center pe-3.5">
								<svg class="dark:text-gray-400 h-4 w-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
									fill="currentColor" viewBox="0 0 24 24">
									<path fill-rule="evenodd"
										d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z"
										clip-rule="evenodd" />
								</svg>
							</div>
							<input
								class="dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 block w-full cursor-pointer rounded-lg border border-gray-300 bg-white p-4 text-sm leading-none text-gray-900 focus:border-blue-500 focus:ring-blue-500"
								id="min" name="min" type="text" placeholder="Start" required />
						</div>
					</div>
					<div>
						<div class="relative">
							<div class="pointer-events-none absolute inset-y-0 end-0 top-0 flex items-center pe-3.5">
								<svg class="dark:text-gray-400 h-4 w-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
									fill="currentColor" viewBox="0 0 24 24">
									<path fill-rule="evenodd"
										d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z"
										clip-rule="evenodd" />
								</svg>
							</div>
							<input
								class="dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 block w-full cursor-pointer rounded-lg border border-gray-300 bg-white p-4 text-sm leading-none text-gray-900 focus:border-blue-500 focus:ring-blue-500"
								id="max" name="max" type="text" placeholder="End" required />
						</div>
					</div>
				</div>
				<div class="relative col-span-2 md:col-span-2 lg:col-span-1">
					<form id="searchForm" action="" method="get">
						<div class="relative">
							<div class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3">
								<svg class="dark:text-gray-400 h-4 w-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
									fill="none" viewBox="0 0 20 20">
									<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
								</svg>
							</div>
							<input
								class="dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 block w-full rounded-lg border border-gray-300 bg-white p-4 ps-10 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
								id="searchText" type="search" placeholder="Search..." />

							<div class="absolute inset-y-0 right-24 flex cursor-pointer items-center" id="clearIcon" style="display:none;">
								<svg class="h-4 w-4 text-gray-500 hover:text-gray-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
									fill="none" viewBox="0 0 20 20">
									<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="M6 6l8 8M6 14L14 6" />
								</svg>
							</div>
							<div>
								<button
									class="dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 absolute bottom-2.5 end-2.5 rounded-lg bg-blue-700 px-4 py-2 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300"
									id="mySearchButton" type="submit">
									Search
								</button>
							</div>
						</div>
					</form>
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

			if (!kode_pegawai) {
				src = "{{ route('collectors.index') }}"
			} else {
				src = "{{ route('dashboard.collect.getdata') }}"
			}

			let table = $('#table-collector').DataTable({
				processing: true,
				serverSide: true,
				responsive: true,
				"lengthMenu": [15, 25, 50, 75, 100, -1],
				ajax: {
					url: src,
					type: "GET",
					dataSrc: 'data',
				},
				columns: [{
						data: 'DT_RowIndex',
						name: 'DT_RowIndex'
					},
					{
						data: null,
						name: "actions",
						render: function(data, type, row) {
							return `
							<div class="inline-flex" role="group">
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
							</div>
						`
						}
					},
					{
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
				dom: `<"absolute top-1 md:left-0 {{ auth()->user()->can('divisi-create') ? 'lg:left-48 right-0' : '' }} mt-14 lg:mt-0 dark:text-white max-w-xs"B><"text-left lg:text-right dark:text-white"l><"relative overflow-x-auto w-full mt-20 lg:mt-4"t><"grid text-center gap-6 lg:grid-cols-2 mt-4 dark:text-white"<"lg:mt-3 lg:text-left"i><"lg:text-right dark:text-gray-900"p>>`,
				buttons: [{
						extend: "csv",
						exportOptions: {
							stripHtml: false
						}
					},
					{
						extend: "excel",
						exportOptions: {
							stripHtml: false,
							decodeEntities: false
						}
					},
					"print",
				],
				"deferRender": true,
				"language": {
					"infoFiltered": ""
				}
			});
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

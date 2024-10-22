@extends('dashboard.layoutsDash.app')
@section('content')
	<div class="grid gap-4 xl:grid-cols-2">
		<div class="w-full space-y-6">
			<div
				class="dark:bg-gray-800 dark:ring-gray-500 grid gap-4 rounded-xl bg-gray-50 p-4 shadow-sm ring-1 ring-gray-200 sm:p-6">
				<div class="mb-2 w-full">
					<header class="flex flex-row">
						<a
							class="dark:bg-red-800 dark:hover:bg-red-900 dark:text-white dark:ring-gray-500 mr-3 flex flex-row rounded-lg px-2.5 py-2.5 align-middle ring-1 ring-red-700 hover:bg-red-300 md:px-4"
							href="{{ route('dashboard.dayoff') }}">
							<svg class="dark:fill-white" class="icon" xmlns="http://www.w3.org/2000/svg" width="25" height="25"
								viewBox="0 0 1024 1024" fill="#000000" version="1.1">
								<path
									d="M669.6 849.6c8.8 8 22.4 7.2 30.4-1.6s7.2-22.4-1.6-30.4l-309.6-280c-8-7.2-8-17.6 0-24.8l309.6-270.4c8.8-8 9.6-21.6 2.4-30.4-8-8.8-21.6-9.6-30.4-2.4L360.8 480.8c-27.2 24-28 64-0.8 88.8l309.6 280z"
									fill="" />
							</svg>
							Kembali
						</a>
					</header>
				</div>

				<div class="w-full">

					<div class="grid gap-2 md:grid-cols-2">

						<div
							class="dark:bg-gray-700 dark:border-gray-500 flex flex-col items-start justify-center rounded-xl border border-gray-200 bg-gray-100 p-3 md:col-span-2">
							<p class="dark:text-gray-300 text-sm text-gray-600">Nama Pegawai</p>
							<p class="text-navy-700 dark:text-white text-base font-medium">
								{{ $dayoff->pegawaiRelasi->full_name ?? 'N/A' }}
							</p>
						</div>

						<div
							class="dark:bg-gray-700 dark:border-gray-500 flex flex-col items-start justify-center rounded-xl border border-gray-200 bg-gray-100 p-3">
							<p class="dark:text-gray-300 text-sm text-gray-600">Kode Pegawai</p>
							<p class="text-navy-700 dark:text-white text-base font-medium">
								{{ $dayoff->id_user ?? 'N/A' }}
							</p>
						</div>

						<div
							class="dark:bg-gray-700 dark:border-gray-500 flex flex-col items-start justify-center rounded-xl border border-gray-200 bg-gray-100 p-3">
							<p class="dark:text-gray-300 text-sm text-gray-600">Peruntukan</p>
							<p class="text-navy-700 dark:text-white text-base font-medium">
								{{ $dayoff->dayoff_for ?? 'N/A' }}
							</p>
						</div>

						<div
							class="dark:bg-gray-700 dark:border-gray-500 flex flex-col items-start justify-center rounded-xl border border-gray-200 bg-gray-100 p-3">
							<p class="dark:text-gray-300 text-sm text-gray-600">Waktu Mulai</p>
							<p class="text-navy-700 dark:text-white text-base font-medium">
								{{ $dayoff->tgl_dari ?? 'N/A' }}
							</p>
						</div>

						<div
							class="dark:bg-gray-700 dark:border-gray-500 flex flex-col items-start justify-center rounded-xl border border-gray-200 bg-gray-100 p-3">
							<p class="dark:text-gray-300 text-sm text-gray-600">Waktu Selesai</p>
							<p class="text-navy-700 dark:text-white text-base font-medium">
								{{ $dayoff->tgl_hingga ?? 'N/A' }}
							</p>
						</div>

						<div
							class="dark:bg-gray-700 dark:border-gray-500 flex flex-col items-start justify-center rounded-xl border border-gray-200 bg-gray-100 p-3 md:col-span-2">
							<p class="dark:text-gray-300 text-sm text-gray-600">Keterangan</p>
							<span class="text-navy-700 dark:text-white text-base">
								{!! $dayoff->keterangan !!}
							</span>
						</div>

						<div
							class="dark:bg-gray-700 dark:border-gray-500 flex flex-col items-start justify-center rounded-xl border border-gray-200 bg-gray-100 p-3">
							<p class="dark:text-gray-300 text-sm text-gray-600">Status</p>
							<p class="text-navy-700 dark:text-white pt-1.5 text-base font-medium">
								@php
									$status = $dayoff->status;

									if ($status == 1) {
									    echo '<span class="dark:ring-gray-500 dark:bg-green-900 dark:text-green-300 rounded-full bg-green-100 px-4 py-1 text-sm font-medium text-green-800 ring-1 ring-gray-300"> Diterima </span>';
									} elseif ($status == 2) {
									    echo '<span class="dark:ring-gray-500 dark:bg-yellow-900 dark:text-yellow-300 rounded-full bg-yellow-100 px-4 py-1 text-sm font-medium text-yellow-800 ring-1 ring-gray-300"> Diajukan </span>';
									} elseif ($status == 3) {
									    echo '<span class="dark:ring-gray-500 dark:bg-red-900 dark:text-red-300 rounded-full bg-red-100 px-4 py-1 text-sm font-medium text-red-800 ring-1 ring-gray-300"> Ditolak </span>';
									} else {
									    echo '<span class="dark:ring-gray-500 dark:bg-red-900 dark:text-red-300 rounded-full bg-red-100 px-4 py-1 text-sm font-medium text-red-800 ring-1 ring-gray-300"> Dibatalkan </span>';
									}
								@endphp
							</p>
						</div>

						<div
							class="dark:bg-gray-700 dark:border-gray-500 flex flex-col items-start justify-center rounded-xl border border-gray-200 bg-gray-100 p-3">
							<p class="dark:text-gray-300 text-sm text-gray-600">Lampiran</p>
							<p class="text-navy-700 dark:text-white text-base font-medium">
								{{ $dayoff->url ?? 'N/A' }}
							</p>
						</div>
						@can('dayoff-confirm')
							@if ($dayoff->status == 2)
								<div class="col-span-2 mt-2 flex flex-col justify-end" id="action">
									<div class="float-right text-right">

										<button
											class="confirm-btn dark:bg-green-800 dark:hover:bg-green-900 dark:text-white mx-1 rounded-lg border border-green-800 bg-transparent px-4 py-2 text-sm font-medium text-gray-900 hover:bg-green-600 hover:text-white focus:z-10 focus:bg-green-600 focus:text-white focus:ring-green-500"
											data-id="{{ $dayoff->id }}" data-modal-target="confirmModal" data-modal-toggle="confirmModal">
											Konfirmasi
										</button>

										<button
											class="ignore-btn dark:bg-red-800 dark:hover:bg-red-900 dark:text-white mx-1 rounded-lg border border-red-800 bg-transparent px-4 py-2 text-sm font-medium text-gray-900 hover:bg-red-600 hover:text-white focus:z-10 focus:bg-red-600 focus:text-white focus:ring-red-500"
											data-id="{{ $dayoff->id }}" data-modal-target="ignoreModal" data-modal-toggle="ignoreModal">
											Tolak
										</button>
									</div>
								</div>
							@endif
						@endcan
					</div>
				</div>
			</div>
		</div>
	</div>

	@include('dashboard.layoutsDash.confirm-modals')
	@include('dashboard.layoutsDash.ignore-modals')

	<script>
		function ignoreModal() {
			const modalEl = document.getElementById('ignoreModal');
			if (modalEl) {
				new Modal(modalEl); // Assuming you have imported Modal from Flowbite

				const currentRoute = '{{ request()->segment(2) }}';

				// Delegate click event to the table
				$('#action').on('click', '.ignore-btn', function() {
					// Get the id from data attribute
					var id = $(this).data('id');
					// Set the form action for deletion
					$('#ignoreForm').attr('action', 'ignore/' + id);
					// Show the modal
					$('#ignoreModal').removeClass('hidden');
				});

				// Close modal
				$('[data-modal-hide="ignoreModal"]').on('click', function() {
					$('#ignoreModal').addClass('hidden');
				});
			}
		}

		function confirmModal() {
			const modalEl = document.getElementById('confirmModal');
			if (modalEl) {
				new Modal(modalEl); // Assuming you have imported Modal from Flowbite

				const currentRoute = '{{ request()->segment(2) }}';

				// Delegate click event to the table
				$('#action').on('click', '.confirm-btn', function() {
					// Get the id from data attribute
					var id = $(this).data('id');
					// Set the form action for deletion
					$('#confirmForm').attr('action', 'confirm/' + id);
					// Show the modal
					$('#confirmModal').removeClass('hidden');
				});

				// Close modal
				$('[data-modal-hide="confirmModal"]').on('click', function() {
					$('#confirmModal').addClass('hidden');
				});
			}
		}

		$(document).ready(function() {
			ignoreModal();
			confirmModal();
		});
	</script>
@endsection

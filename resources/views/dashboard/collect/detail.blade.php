@extends('dashboard.layoutsDash.app')
@section('content')
	<div class="w-full space-y-6">
		<div
			class="dark:bg-[#18181b] dark:ring-gray-700 grid gap-6 rounded-xl bg-white p-4 shadow-sm ring-1 ring-gray-200 sm:p-6">
			<div class="w-full">
				<header class="flex flex-row">

					<form id="index-collector" action="{{ route('collect.index') }}"></form>
					<x-dashboard.button class="me-4 flex flex-row px-2.5 py-2" id="back-button" form="index-collector" type="submit"
						:color="'red'">
						<x-slot name="icon">
							<x-icons.arrow-left class="dark:fill-white icon h-6 w-6" />
						</x-slot>
						Kembali
					</x-dashboard.button>

					<h2 class="dark:text-gray-300 font-base mt-2 text-lg text-gray-900">
						Detail: <span class="font-bold text-white">{{ $data->title ?? 'N/A' }}</span>
					</h2>
				</header>
			</div>

			<div class="w-full">

				<div class="grid gap-2 md:grid-cols-2" id="laporan-content">
					<div
						class="dark:bg-gray-700 dark:border-gray-700 col-span-2 flex flex-col items-start justify-center rounded-xl border border-gray-200 bg-white p-3 lg:col-span-1">
						<p class="dark:text-gray-300 text-sm text-gray-600">Kode Pegawai</p>
						<p class="text-navy-700 dark:text-white text-base font-medium">
							{{ $data->kode_pegawai ?? 'N/A' }}
						</p>
					</div>

					<div
						class="dark:bg-gray-700 dark:border-gray-700 col-span-2 flex flex-col items-start justify-center rounded-xl border border-gray-200 bg-white p-3 lg:col-span-1">
						<p class="dark:text-gray-300 text-sm text-gray-600">Nama Pegawai</p>
						<p class="text-navy-700 dark:text-white text-base font-medium">
							{{ $data->pegawaiRelasi->full_name ?? 'N/A' }}
						</p>
					</div>

					<div
						class="dark:bg-gray-700 dark:border-gray-700 flex flex-col items-start justify-center rounded-xl border border-gray-200 bg-white p-3">
						<p class="dark:text-gray-300 text-sm text-gray-600">Waktu Dibuat</p>
						<p class="text-navy-700 dark:text-white text-base font-medium">
							{{ $data->created_at->locale('id')->isoFormat('D MMM YYYY HH:m:s') ?? 'N/A' }}
						</p>
					</div>

					<div
						class="dark:bg-gray-700 dark:border-gray-700 flex flex-col items-start justify-center rounded-xl border border-gray-200 bg-white p-3">
						<p class="dark:text-gray-300 text-sm text-gray-600">Waktu Diupdate</p>
						<p class="text-navy-700 dark:text-white text-base font-medium">
							{{ $data->updated_at->locale('id')->isoFormat('D MMM YYYY HH:m:s') ?? 'N/A' }}
						</p>
					</div>

					<div
						class="dark:bg-gray-700 dark:border-gray-700 col-span-2 flex flex-col items-start justify-center rounded-xl border border-gray-200 bg-white p-3">
						<p class="dark:text-gray-300 text-sm text-gray-600">Lokasi checkpoint</p>
						<p class="text-navy-700 dark:text-white text-base font-medium">
							{{ $data->location ?? 'N/A' }}
						</p>
					</div>

					<div
						class="dark:bg-gray-700 dark:border-gray-700 col-span-2 flex flex-col items-start justify-center rounded-xl border border-gray-200 bg-white p-3">
						<p class="dark:text-gray-300 mb-2 text-sm text-gray-600">Dokumentasi</p>
						<div class="relative overflow-auto">
							<div class="flex overflow-x-auto" id="captured-images">
								<!-- Thumbnail gambar yang diambil akan muncul di sini -->
								@if ($data->photoCollectRelasi)
									@foreach ($data->photoCollectRelasi as $photo)
										<div class="relative me-2 flex-none items-center gap-4 rounded-xl p-2">
											<img
												class="h-36 w-36 rounded-xl object-cover blur-sm transition duration-300 ease-in-out hover:scale-105 hover:blur-0"
												id="documentations" data-url="{{ asset($photo->photourl) }}" src="{{ asset($photo->photourl) }}"
												alt="" onclick="javascript:void(0)">
										</div>
									@endforeach
								@endif
							</div>
						</div>
					</div>

					<div
						class="dark:bg-gray-700 dark:border-gray-700 col-span-2 flex flex-col items-start justify-center rounded-xl border border-gray-200 bg-white p-3">
						<p class="dark:text-gray-300 text-sm text-gray-600">Keterangan</p>
						<div class="text-navy-700 quill-content dark:text-white text-wrap !mt-1 w-full !border-none !p-0 !text-base"
							id="editor">
							{!! $data->keterangan !!}
						</div>
					</div>

					<div
						class="dark:bg-gray-700 dark:border-gray-700 col-span-2 flex flex-col items-start justify-center rounded-xl border border-gray-200 bg-white p-3">
						<p class="dark:text-gray-300 text-sm text-gray-600">Status</p>
						<p class="text-navy-700 dark:text-white pt-1.5 text-base font-medium">
							@php
								$status = $data->status;

								if ($status == 1) {
								    echo '<span class="dark:ring-gray-700 dark:bg-green-900 dark:text-green-300 rounded-xl bg-green-100 px-4 py-2 text-sm font-medium text-green-800 ring-1 ring-gray-300"> Approved! </span>';
								} elseif ($status == 0) {
								    echo '<span class="dark:ring-gray-700 dark:bg-yellow-900 dark:text-yellow-300 rounded-xl bg-yellow-100 px-4 py-2 text-sm font-medium text-yellow-800 ring-1 ring-gray-300"> Belum di Approve. </span>';
								} else {
								    echo '<span class="dark:ring-gray-700 dark:bg-red-900 dark:text-red-300 rounded-xl bg-red-100 px-4 py-2 text-sm font-medium text-red-800 ring-1 ring-gray-300"> Laporan di Tolak! </span>';
								}
							@endphp
						</p>
					</div>

					<div
						class="dark:bg-gray-700 dark:border-gray-700 col-span-2 flex flex-col items-start justify-center rounded-xl border border-gray-200 bg-white p-3">
						<p class="dark:text-gray-300 text-sm text-gray-600">Catatan</p>
						<p class="text-navy-700 dark:text-white text-base font-medium">
							{{ $data->notes ? $data->notes : 'Tidak ada catatan' }}
						</p>
					</div>

					@can('collect-approve')
						@if (!$data->status)
							<div class="col-span-2 mt-2 flex flex-col justify-end" id="action">
								<div class="text-right">

									<x-dashboard.button class="confirm-btn float-right px-2.5 py-2" id="confirm-btn" data-id="{{ $data->id }}"
										type="button" :color="'green'">
										<x-slot name="icon">
											<x-icons.arrow-left class="h-5 w-5 rotate-180" />
										</x-slot>
										Konfirmasi
									</x-dashboard.button>

								</div>
							</div>
						@endif
					@endcan
				</div>

			</div>
		</div>
	</div>
@endsection
@push('script')
	<script>
		function quillText() {
			const BlockEmbed = Quill.import('blots/block/embed');

			class CustomEmbed extends BlockEmbed {
				static create(value) {
					let node = super.create();
					node.setAttribute('data-value', value);
					return node;
				}

				static format(node) {
					return node.getAttribute('data-value');
				}
			}

			// Initialize Quill
			const quill = new Quill('#editor', {
				theme: 'snow',
				readOnly: true,
				modules: {
					toolbar: false,
				},
			});

			document.querySelector('.ql-editor').classList.add('!p-0')
		}

		function zoomImage() {
			$('body').on('click', '#documentations', function() {
				let url = $(this).data("url");

				Swal.fire({
					showCancelButton: false,
					showConfirmButton: false,
					html: `
					<img src="${url}" class="w-full mx-auto rounded-xl "/>
					`,
				})
			})
		}

		async function confirmAction() {
			$('body').on('click', '#confirm-btn', async function() { // Make the handler async to use await
				let id = $(this).data("id");
				let token = $("meta[name='csrf-token']").attr("content");

				// Display SweetAlert2 dialog
				const result = await Swal.fire({
					title: "Konfirmasi",
					text: "Apakah kamu yakin ingin approve laporan ini?",
					icon: 'info',
					showCancelButton: true,
					showDenyButton: true,
					denyButtonText: "Tolak",
					cancelButtonText: "Batal",
					confirmButtonText: "Ya",
				});

				// If the action is confirmed
				if (result.isConfirmed) {
					$.ajax({
						url: `/api/collectors/${id}/confirm`,
						type: 'PATCH',
						cache: false,
						data: {
							"_token": token
						},
						success: function(response) {
							Swal.fire("Laporan berhasil diapprove!", "", "success");
							setTimeout(() => {
								window.location.href = window.location.href;
							}, 1000);
						},
						error: function() {
							Swal.fire("Ada kegagalan pada server.", "", "error");
						}
					});
				}
				// If the action is denied
				else if (result.isDenied) {
					const {
						value: text
					} = await Swal.fire({
						input: "textarea",
						title: "Tulis alasan penolakan",
						inputPlaceholder: "Type your message here...",
						inputAttributes: {
							"aria-label": "Type your message here"
						},
						showCancelButton: true
					});

					// If the user enters a message, you can display it or send it to the server
					if (text) {
						// For now, just display the message
						$.ajax({
							url: `/api/collectors/${id}/deny`,
							type: 'PATCH',
							cache: false,
							data: {
								"_token": token,
								"notes": text // Send the message with the request
							},
							success: function(response) {
								Swal.fire("Laporan telah ditolak!", "", "error");
								setTimeout(() => {
									window.location.href = window.location.href;
								}, 1000);
							},
							error: function() {
								Swal.fire("Ada kegagalan pada server.", "", "error");
							}
						});
					} else {
						Swal.fire("Catatan harus diisi.	", "", "error");
					}
				}
			});
		}

		document.addEventListener("DOMContentLoaded", function() {
			quillText();
			confirmAction();
			zoomImage();
		})
	</script>
@endpush

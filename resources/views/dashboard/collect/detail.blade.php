@extends('dashboard.layoutsDash.app')
@section('content')
	<div class="w-full space-y-6">
		<div
			class="dark:bg-[#18181b] dark:ring-gray-700 grid gap-6 rounded-xl bg-white p-4 shadow-sm ring-1 ring-gray-200 sm:p-6">
			<div class="w-full">
				<header class="flex flex-row">
					<a
						class="dark:bg-red-800 dark:hover:bg-red-900 dark:text-white dark:ring-gray-700 mr-3 flex flex-row rounded-lg px-2.5 py-2.5 align-middle ring-1 ring-red-700 hover:bg-red-300 md:px-4"
						href="{{ route('collect.index') }}">
						<svg class="dark:fill-white" class="icon" xmlns="http://www.w3.org/2000/svg" width="25" height="25"
							viewBox="0 0 1024 1024" fill="#000000" version="1.1">
							<path
								d="M669.6 849.6c8.8 8 22.4 7.2 30.4-1.6s7.2-22.4-1.6-30.4l-309.6-280c-8-7.2-8-17.6 0-24.8l309.6-270.4c8.8-8 9.6-21.6 2.4-30.4-8-8.8-21.6-9.6-30.4-2.4L360.8 480.8c-27.2 24-28 64-0.8 88.8l309.6 280z"
								fill="" />
						</svg>
						Kembali
					</a>
					<h2 class="dark:text-gray-300 font-base mt-2 text-lg text-gray-900">
						Detail: <span class="font-bold text-white">{{ $data->title ?? 'N/A' }}</span>
					</h2>
				</header>
			</div>

			<div class="w-full">

				<div class="grid gap-2 md:grid-cols-2" id="laporan-content">
					<div
						class="dark:bg-gray-700 dark:border-gray-700 flex flex-col items-start justify-center rounded-xl border border-gray-200 bg-white p-3">
						<p class="dark:text-gray-300 text-sm text-gray-600">Kode Pegawai</p>
						<p class="text-navy-700 dark:text-white text-base font-medium">
							{{ $data->kode_pegawai ?? 'N/A' }}
						</p>
					</div>

					<div
						class="dark:bg-gray-700 dark:border-gray-700 flex flex-col items-start justify-center rounded-xl border border-gray-200 bg-white p-3">
						<p class="dark:text-gray-300 text-sm text-gray-600">Nama Pegawai</p>
						<p class="text-navy-700 dark:text-white text-base font-medium">
							{{ $data->pegawaiRelasi->full_name ?? 'N/A' }}
						</p>
					</div>

					<div
						class="dark:bg-gray-700 dark:border-gray-700 flex flex-col items-start justify-center rounded-xl border border-gray-200 bg-white p-3">
						<p class="dark:text-gray-300 text-sm text-gray-600">Waktu Laporan Dibuat</p>
						<p class="text-navy-700 dark:text-white text-base font-medium">
							{{ $data->created_at->locale('id')->isoFormat('D MMMM YYYY HH:m:s') ?? 'N/A' }}
						</p>
					</div>

					<div
						class="dark:bg-gray-700 dark:border-gray-700 flex flex-col items-start justify-center rounded-xl border border-gray-200 bg-white p-3">
						<p class="dark:text-gray-300 text-sm text-gray-600">Waktu Laporan Diupdate</p>
						<p class="text-navy-700 dark:text-white text-base font-medium">
							{{ $data->updated_at->locale('id')->isoFormat('D MMMM YYYY HH:m:s') ?? 'N/A' }}
						</p>
					</div>

					<div
						class="dark:bg-gray-700 dark:border-gray-700 flex flex-col items-start justify-center rounded-xl border border-gray-200 bg-white p-3 md:col-span-2">
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
						class="dark:bg-gray-700 dark:border-gray-700 flex flex-col items-start justify-center rounded-xl border border-gray-200 bg-white p-3 md:col-span-2">
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
								<div class="float-right text-right">
									<a
										class="confirm-btn dark:bg-green-800 dark:hover:bg-green-900 dark:text-white mx-1 rounded-lg border border-green-800 bg-transparent px-4 py-2 font-medium text-gray-900 hover:bg-green-600 hover:text-white focus:z-10 focus:bg-green-600 focus:text-white focus:ring-green-500"
										id="confirm-btn" data-id="{{ $data->id }}" href="javascript:void(0)">
										Konfirmasi
									</a>
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

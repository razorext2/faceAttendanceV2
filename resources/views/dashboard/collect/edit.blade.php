@extends('dashboard.layoutsDash.app')
@section('content')
	<div class="w-full space-y-6">
		<div
			class="dark:bg-[#18181b] dark:ring-gray-700 grid gap-6 rounded-xl bg-white p-4 shadow-sm ring-1 ring-gray-200 sm:p-6">
			<div class="w-full">
				<header class="flex flex-row">
					<a
						class="dark:bg-red-800 dark:hover:bg-red-900 dark:text-white dark:ring-gray-700 mr-3 flex flex-row rounded-lg px-2.5 py-2.5 align-middle ring-1 ring-red-700 hover:bg-red-300 md:px-4"
						href="{{ route('dashboard.collect.index') }}">
						<svg class="dark:fill-white" class="icon" xmlns="http://www.w3.org/2000/svg" width="25" height="25"
							viewBox="0 0 1024 1024" fill="#000000" version="1.1">
							<path
								d="M669.6 849.6c8.8 8 22.4 7.2 30.4-1.6s7.2-22.4-1.6-30.4l-309.6-280c-8-7.2-8-17.6 0-24.8l309.6-270.4c8.8-8 9.6-21.6 2.4-30.4-8-8.8-21.6-9.6-30.4-2.4L360.8 480.8c-27.2 24-28 64-0.8 88.8l309.6 280z"
								fill="" />
						</svg>
						Kembali
					</a>
					<h2 class="dark:text-gray-300 font-base mt-2 text-lg text-gray-900">
						Ubah: <span class="font-bold text-white">{{ $data->title ?? 'N/A' }}</span>
					</h2>
				</header>
			</div>

			<div class="w-full">

				<div class="grid gap-2 md:grid-cols-2" id="laporan-content">
					<input id="id" name="id" type="hidden" value="{{ $data->id ?? 'N/A' }}">

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
							{{ $data->created_at->locale('id')->isoFormat('D MMMM YYYY HH:mm:ss') ?? 'N/A' }}
						</p>
					</div>

					<div
						class="dark:bg-gray-700 dark:border-gray-700 flex flex-col items-start justify-center rounded-xl border border-gray-200 bg-white p-3">
						<p class="dark:text-gray-300 text-sm text-gray-600">Waktu Laporan Diupdate</p>
						<p class="text-navy-700 dark:text-white text-base font-medium">
							{{ $data->updated_at->locale('id')->isoFormat('D MMMM YYYY HH:mm:ss') ?? 'N/A' }}
						</p>
					</div>

					<div
						class="dark:bg-gray-700 dark:border-gray-700 flex flex-col items-start justify-center rounded-xl border border-gray-200 bg-white p-3 md:col-span-2">
						<p class="dark:text-gray-300 mb-2 text-sm text-gray-600">Judul Laporan <span class="text-sm text-red-500">*</span>
						</p>
						<input class="block w-full rounded-lg bg-gray-300 p-2.5 text-sm text-gray-900" id="title" name="title"
							type="text" value="{{ $data->title ?? 'N/A' }}" placeholder="Judul laporan.." required>
						<div class="mt-2 hidden text-sm text-red-500" id="alert-title"></div>
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
											{{-- <button class="absolute left-1/2 top-1/2 z-50 h-6 w-6 translate-x-0 rounded-full bg-white hover:scale-110">
												👁 </button> --}}
										</div>
									@endforeach
								@endif
							</div>
						</div>
					</div>

					<div
						class="dark:bg-gray-700 dark:border-gray-700 flex flex-col items-start justify-center rounded-xl border border-gray-200 bg-white p-3 md:col-span-2">
						<p class="dark:text-gray-300 mb-2 text-sm text-gray-600">Keterangan <span class="text-sm text-red-500">*</span>
						</p>
						<div class="dark:bg-white w-full" id="editor"></div>
						<input id="keterangan" name="keterangan" type="hidden">
						<div class="mt-2 hidden text-sm text-red-500" id="alert-keterangan"></div>
					</div>

					<div class="relative w-full">
						<button
							class="dark:bg-blue-800 dark:text-white dark:hover:bg-blue-900 dark:ring-gray-700 inline-flex items-center rounded-lg px-5 py-2.5 text-center text-sm font-medium text-gray-900 ring-1 ring-blue-700 hover:bg-blue-800 hover:text-white focus:text-white focus:ring-4 focus:ring-blue-300"
							id="store" type="button">
							Update Laporan
							<svg class="ms-2 h-3.5 w-3.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
								viewBox="0 0 14 10">
								<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
									d="M1 5h12m0 0L9 1m4 4L9 9" />
							</svg>
						</button>
					</div>

				</div>
			</div>
		</div>
	</div>
@endsection
@push('script')
	<script>
		function quillText() {
			// Ensure you import Quill and its CSS correctly
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
			// Register the custom blot
			CustomEmbed.blotName = 'customEmbed'; // The name you want to use
			CustomEmbed.tagName = 'div'; // HTML tag
			Quill.register(CustomEmbed);

			// Initialize Quill
			const quill = new Quill('#editor', {
				theme: 'snow',
				placeholder: 'Tulis keterangan...',
				modules: {
					toolbar: [
						[{
							'header': [1, 2, false]
						}],
						['bold', 'italic', 'underline'],
						['code-block'],
						[{
							'list': 'ordered'
						}, {
							'list': 'bullet'
						}]
					],
				}
			});

			// Set the initial content for the editor
			const initialContent = @json($data->keterangan); // Ambil data dari database
			quill.root.innerHTML = initialContent; // Isi editor dengan nilai dari keterangan

			document.querySelector('.ql-toolbar').classList.add('dark:bg-gray-300', 'rounded-t-lg', 'w-full');
			document.querySelector('.ql-picker').classList.add('dark:bg-gray-200');
			document.getElementById('editor').classList.add('!h-96', 'rounded-b-lg', 'dark:bg-gray-300');

			// kirim data di quill editor ke input keterangan
			$('#store').on('click', function() {
				const content = quill.root.innerHTML;
				$('#keterangan').val(content);
			});
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

		function editDataHandler() {
			$('#store').click(function(e) {
				e.preventDefault();

				// define var
				let id = $('#id').val();
				let judul = $("#title").val();
				let ket = $("#keterangan").val();
				let token = $("meta[name='csrf-token']").attr("content");

				// ajax request
				$.ajax({
					url: `/api/collectors/${id}`,
					type: "PATCH",
					data: {
						"title": judul,
						"keterangan": ket,
						"_token": token
					},
					success: function(response) {
						// tampilkan alert
						window.Swal.fire({
							icon: "success",
							title: "Laporan berhasil diubah!",
							showConfirmButton: false,
							timer: 1000
						});

						// redirect
						setTimeout(() => {
							location.reload();
						}, 1000);
					},
					error: function(xhr, status, error) {
						// error handler
						Swal.fire({
							icon: "error",
							title: "Terjadi kesalahan!",
							text: "Tidak dapat menyimpan data."
						});

						let err = xhr.responseJSON;

						// Menampilkan error untuk field tertentu
						if (err.title) {
							$('#alert-title')
								.removeClass('hidden')
								.addClass('block')
								.html(err.title[0]);
						} else {
							$('#alert-title')
								.removeClass('block')
								.addClass('hidden');
						}

						if (err.keterangan) {
							$('#alert-keterangan')
								.removeClass('hidden')
								.addClass('block')
								.html(err.keterangan[0]);
						} else {
							$('#alert-keterangan')
								.removeClass('block')
								.addClass('hidden');
						}
					}
				});
			});
		}

		document.addEventListener("DOMContentLoaded", function() {
			quillText();
			zoomImage();
			editDataHandler();
		})
	</script>
@endpush

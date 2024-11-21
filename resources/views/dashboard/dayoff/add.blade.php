@extends('dashboard.layoutsDash.app')
@section('content')
	<div class="w-full space-y-6">
		<div class="dark:bg-[#18181b] dark:ring-gray-700 rounded-xl bg-white p-4 shadow-sm ring-1 ring-gray-200 sm:p-6">
			<div class="w-full">
				<header class="flex flex-row">
					<a
						class="dark:bg-red-800 dark:hover:bg-red-900 dark:text-white dark:ring-gray-700 mb-4 mr-3 flex flex-row rounded-lg px-2.5 py-2.5 align-middle ring-1 ring-red-700 hover:bg-red-300 md:px-4"
						href="{{ route('dashboard.dayoff') }}">
						<svg class="dark:fill-white" class="icon" xmlns="http://www.w3.org/2000/svg" width="25" height="25"
							viewBox="0 0 1024 1024" fill="#000000" version="1.1">
							<path
								d="M669.6 849.6c8.8 8 22.4 7.2 30.4-1.6s7.2-22.4-1.6-30.4l-309.6-280c-8-7.2-8-17.6 0-24.8l309.6-270.4c8.8-8 9.6-21.6 2.4-30.4-8-8.8-21.6-9.6-30.4-2.4L360.8 480.8c-27.2 24-28 64-0.8 88.8l309.6 280z"
								fill="" />
						</svg>
						Kembali
					</a>
					<h2 class="dark:text-white mt-2 text-lg font-medium text-gray-900">
						{{ __('Tambah Pengajuan Off') }}
					</h2>

				</header>
				<p class="dark:text-gray-300 mt-1 text-sm text-gray-600">
					{{ __('Silahkan sesuaikan data dibawah ini dengan data yang benar.') }}
				</p>

				<form class="mt-4" id="content-form" action="{{ route('dayoff.store') }}" method="POST">
					@csrf
					<div class="mb-4 grid grid-cols-2 gap-6 sm:mb-5 sm:gap-6">

						<div class="w-full">
							<label class="dark:text-white mb-2 block text-sm font-medium text-gray-900" for="name">Nama
								Pegawai</label>
							@if (Auth::user()->hasPermissionTo('dayoff-confirm'))
								<input class="block w-full rounded-lg border border-gray-300 bg-white p-2.5 text-sm text-gray-900" id="name"
									name="name" type="text" placeholder="Cari nama karyawan.." required="">
								<div class="autocomplete-results" id="autocomplete-results"></div>
							@else
								<input class="block w-full rounded-lg border border-gray-300 bg-white p-2.5 text-sm text-gray-900" id="name"
									name="name" type="text" value="{{ $data->full_name }}" required="" readonly>
							@endif
						</div>

						<div class="w-full">
							<label class="dark:text-white mb-2 block text-sm font-medium text-gray-900" for="kode_pegawai">Kode
								Pegawai</label>
							@if (Auth::user()->hasPermissionTo('dayoff-confirm'))
								<input
									class="dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 block w-full cursor-not-allowed rounded-lg border border-gray-300 p-2.5 text-sm text-gray-900"
									id="kode_pegawai" name="kode_pegawai" type="text" placeholder="Kode pegawai" required="" readonly>
							@else
								<input
									class="dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 block w-full cursor-not-allowed rounded-lg border border-gray-300 p-2.5 text-sm text-gray-900"
									id="kode_pegawai" name="kode_pegawai" type="text" value="{{ $data->kode_pegawai }}" required="" readonly>
							@endif
						</div>

						<div class="col-span-2 w-full">
							<label class="dark:text-white mb-2 block text-sm font-medium text-gray-900" for="dayoff_for">Peruntukan</label>
							<select
								class="focus:ring-primary-500 focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-white p-2.5 text-sm text-gray-900"
								id="dayoff_for" name="dayoff_for">
								<option selected>Pilih</option>
								<option value="Izin"> Izin </option>
								<option value="Sakit"> Sakit </option>
								<option value="Absen"> Absen </option>
								<option value="PC"> Pulang Cepat </option>
							</select>
						</div>

						<div class="w-full">
							<label class="dark:text-white mb-2 block text-sm font-medium text-gray-900" for="start-time">Start time:</label>
							<input
								class="dark:bg-white dark:border-gray-700 dark:placeholder-gray-400 dark:text-gray-800 dark:focus:ring-blue-500 dark:focus:border-blue-500 block w-full rounded-lg border border-gray-300 bg-white p-2.5 text-sm leading-none text-gray-900 focus:border-blue-500 focus:ring-blue-500"
								id="start-time" name="start_time" type="datetime-local" required />
						</div>
						<div class="w-full">
							<label class="dark:text-white mb-2 block text-sm font-medium text-gray-900" for="end-time">End
								time:</label>
							<input
								class="dark:bg-white dark:border-gray-700 dark:placeholder-gray-400 dark:text-gray-800 dark:focus:ring-blue-500 dark:focus:border-blue-500 block w-full rounded-lg border border-gray-300 bg-white p-2.5 text-sm leading-none text-gray-900 focus:border-blue-500 focus:ring-blue-500"
								id="end-time" name="end_time" type="datetime-local" required />
						</div>
					</div>

					<div class="relative mb-4 w-full">
						<label class="dark:text-white mb-2 block text-sm font-medium text-gray-900">
							Keterangan
						</label>
						<div class="dark:bg-white h-32 w-full" id="editor"></div>
						<input id="keterangan" name="keterangan" type="hidden">
					</div>

					<div class="relative w-full">
						<button
							class="dark:bg-blue-800 dark:text-white dark:hover:bg-blue-900 dark:ring-gray-700 inline-flex items-center rounded-lg px-5 py-2.5 text-center text-sm font-medium text-gray-900 ring-1 ring-blue-700 hover:bg-blue-800 hover:text-white focus:text-white focus:ring-4 focus:ring-blue-300"
							type="submit">
							Submit
							<svg class="ms-2 h-3.5 w-3.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
								viewBox="0 0 14 10">
								<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
									d="M1 5h12m0 0L9 1m4 4L9 9" />
							</svg>
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection
@push('script')
	<script>
		function quillEditor() {
			// Ensure you import Quill and its CSS correctly
			const BlockEmbed = window.Quill.import('blots/block/embed');

			// Create a custom blot
			class CustomEmbed extends BlockEmbed {
				static create(value) {
					let node = super.create();
					node.setAttribute('data-value', value);
					return node;
				}

				static formats(node) {
					return node.getAttribute('data-value');
				}
			}

			// Image handler function
			function imageHandler() {
				const input = document.createElement('input');
				input.setAttribute('type', 'file');
				input.setAttribute('accept', 'image/*');
				input.click();

				input.onchange = async () => {
					const file = input.files[0];

					if (file) {
						const formData = new FormData();
						formData.append('image', file);

						// Use fetch API to upload the image
						const response = await fetch('/upload-image', {
							method: 'POST',
							headers: {
								'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
									'content')
							},
							body: formData
						});

						if (response.ok) {
							const data = await response.json();
							const range = quill.getSelection();
							if (range) {
								quill.insertEmbed(range.index, 'image', data.url); // Insert the image into Quill
							} else {
								console.error('No selection in Quill to insert image');
							}
						} else {
							console.error('Failed to upload image');
						}
					}
				};
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
						['image', 'code-block'],
						[{
							'list': 'ordered'
						}, {
							'list': 'bullet'
						}]
					],
				}
			});

			document.querySelector('.ql-toolbar').classList.add('dark:bg-white', 'rounded-t-lg');
			document.querySelector('.ql-picker').classList.add('dark:bg-white');
			document.getElementById('editor').classList.add('!h-96', 'rounded-b-lg');

			// Kirim isi dari konten ke textarea
			document.getElementById('content-form').onsubmit = function() {
				const content = document.getElementById('keterangan');
				content.value = quill.root.innerHTML; // Get the HTML content
			};

			// Register the image handler
			quill.getModule('toolbar').addHandler('image', imageHandler);
		}

		function searchDataHandler() {
			$('#name').on('input', function() {
				let query = $(this).val();

				if (query.length > 2) { // Mulai pencarian saat input lebih dari 2 karakter
					$.ajax({
						url: "{{ route('autocomplete') }}",
						type: "GET",
						data: {
							query: query
						},
						success: function(data) {
							$('#autocomplete-results').empty(); // Kosongkan hasil sebelumnya

							if (data.length > 0) {
								data.forEach((pegawai, index) => {
									// Jika ini adalah elemen terakhir, tambahkan kelas tambahan
									let roundedClass = (index === data.length - 1) ?
										'rounded-b-lg' : '';

									$('#autocomplete-results').append(`
                                <div class="autocomplete-result bg-white border border-gray-300 dark:bg-white p-2.5 divide-y w-full ${roundedClass}" data-fullname="${pegawai.full_name}" data-id="${pegawai.kode_pegawai}">${pegawai.full_name}</div>
                            `);
								});
							} else {
								$('#autocomplete-results').append(
									'<div class="autocomplete-result">No results found</div>'
								);
							}
						}
					});
				} else {
					$('#autocomplete-results').empty(); // Kosongkan hasil jika input dihapus
				}
			});

			// Saat hasil diklik, isi input dengan nilai yang dipilih
			$(document).on('click', '.autocomplete-result', function() {
				let name = $(this).data('fullname');
				let kodePegawai = $(this).data('id');

				// Isi input 'name' dengan nama yang dipilih
				$('#name').val(name);

				// Isi input 'kode_pegawai' dengan kode pegawai yang dipilih
				$('#kode_pegawai').val(kodePegawai);

				$('#autocomplete-results').empty(); // Kosongkan hasil setelah memilih
			});
		}

		$(document).ready(function() {
			searchDataHandler()
			quillEditor()
		});
	</script>
@endpush

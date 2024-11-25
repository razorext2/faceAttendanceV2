@extends('dashboard.layoutsDash.app')
@section('content')
	<div class="grid w-full grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-6">
		{{-- form add --}}
		<div
			class="dark:bg-[#18181b] dark:ring-gray-700 rounded-xl bg-white p-4 shadow-sm ring-1 ring-gray-200 sm:p-6 lg:col-span-2">
			<div class="w-full">
				<header class="flex flex-row">
					<a
						class="dark:bg-red-800 dark:hover:bg-red-900 dark:text-white dark:ring-gray-700 mb-4 mr-3 flex flex-row rounded-lg px-2.5 py-2.5 align-middle ring-1 ring-red-700 hover:bg-red-300 md:px-4"
						href="{{ route('dashboard.collect.index') }}">
						<svg class="dark:fill-white" class="icon" xmlns="http://www.w3.org/2000/svg" width="25" height="25"
							viewBox="0 0 1024 1024" fill="#000000" version="1.1">
							<path
								d="M669.6 849.6c8.8 8 22.4 7.2 30.4-1.6s7.2-22.4-1.6-30.4l-309.6-280c-8-7.2-8-17.6 0-24.8l309.6-270.4c8.8-8 9.6-21.6 2.4-30.4-8-8.8-21.6-9.6-30.4-2.4L360.8 480.8c-27.2 24-28 64-0.8 88.8l309.6 280z"
								fill="" />
						</svg>
						Kembali
					</a>
					<h2 class="dark:text-white mt-2 text-lg font-medium text-gray-900">
						{{ __('Tambah Laporan') }}
					</h2>

				</header>
				<p class="dark:text-gray-300 mt-1 text-sm text-gray-600">
					{{ __('Silahkan sesuaikan data dibawah ini dengan data yang benar.') }}
				</p>

				<form class="mt-4" method="POST">
					@csrf

					<input id="kode_pegawai" name="kode_pegawai" type="hidden" value="{{ auth()->user()->kode_pegawai ?? '281099' }}">

					<div class="relative mb-4 w-full">
						<label class="dark:text-white mb-2 block text-sm font-medium text-gray-900" for="title">Judul laporan</label>
						<input class="block w-full rounded-lg border border-gray-300 bg-white p-2.5 text-sm text-gray-900" id="title"
							name="title" type="text" placeholder="Judul laporan.." required>
						<div class="mt-2 text-sm text-red-500" id="alert-title"></div>
					</div>

					<!-- Tombol Ambil Gambar -->
					<div class="relative mb-4 w-full">
						<label class="dark:text-white block text-sm font-medium text-gray-900" for="capture-button">Dokumentasi
						</label>
						<p class="mb-2 text-xs text-red-500"> *Dokumentasi tidak dapat diubah setelah laporan diinput. </p>
						<button
							class="dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 block rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300"
							id="capture-button" data-modal-target="camera-modal" data-modal-toggle="camera-modal" type="button">
							<span class="font-semibold">+ Ambil Foto </span>
						</button>
					</div>

					<div class="relative overflow-auto">
						<div class="flex overflow-x-auto" id="captured-images">
							<!-- Thumbnail gambar yang diambil akan muncul di sini -->
						</div>
					</div>

					<div class="mb-2 text-sm text-red-500" id="alert-images"></div>

					<div class="relative mb-4 w-full">
						<label class="dark:text-white mb-2 block text-sm font-medium text-gray-900">
							Keterangan
						</label>
						<div class="dark:bg-white h-32 w-full" id="editor"></div>
						<input id="keterangan" name="keterangan" type="hidden">
						<div class="mt-2 text-sm text-red-500" id="alert-keterangan"></div>
					</div>

					{{-- <div class="mb-4 grid grid-cols-2 gap-4">
						<div class="relative w-full">
							<label class="dark:text-white mb-2 block text-sm font-medium text-gray-900" for="longitude">Longitude</label> --}}
					<input class="block w-full rounded-lg border border-gray-300 bg-gray-400 p-2.5 text-sm text-gray-900" id="longitude"
						name="longitude" type="hidden" readonly>
					{{-- </div>

						<div class="relative w-full">
							<label class="dark:text-white mb-2 block text-sm font-medium text-gray-900" for="latitude">Latitude</label> --}}
					<input class="block w-full rounded-lg border border-gray-300 bg-gray-400 p-2.5 text-sm text-gray-900" id="latitude"
						name="latitude" type="hidden" readonly>
					{{-- </div>
					</div> --}}

					<div class="mb-4 text-sm text-red-500" id="alert-location"></div>

					<div class="relative w-full">
						<button
							class="dark:bg-blue-800 dark:text-white dark:hover:bg-blue-900 dark:ring-gray-700 inline-flex items-center rounded-lg px-5 py-2.5 text-center text-sm font-medium text-gray-900 ring-1 ring-blue-700 hover:bg-blue-800 hover:text-white focus:text-white focus:ring-4 focus:ring-blue-300"
							id="store" type="button">
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

	<div
		class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0"
		id="camera-modal">
		<div class="relative max-h-full w-full max-w-2xl p-4">
			<div class="dark:bg-gray-700 relative rounded-xl bg-white shadow">
				<div class="space-y-4 p-1">
					<div class="relative">
						<!-- Video -->
						<video class="rounded-lg" id="video" width="100%" height="auto" autoplay></video>

						<!-- Button -->
						<button
							class="absolute bottom-4 left-1/2 h-14 w-14 -translate-x-1/2 transform rounded-full bg-white/60 shadow-lg ring-2 ring-white hover:bg-white/80 focus:outline-none md:bottom-6 md:h-16 md:w-16"
							id="capture-image">
							<!-- Icon (Optional) -->
							<svg class="mx-auto w-10 stroke-white md:w-12" viewBox="0 0 24 24" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
								<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
								<g id="SVGRepo_iconCarrier">
									<path
										d="M12 16C13.6569 16 15 14.6569 15 13C15 11.3431 13.6569 10 12 10C10.3431 10 9 11.3431 9 13C9 14.6569 10.3431 16 12 16Z"
										stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
									<path
										d="M3 16.8V9.2C3 8.0799 3 7.51984 3.21799 7.09202C3.40973 6.71569 3.71569 6.40973 4.09202 6.21799C4.51984 6 5.0799 6 6.2 6H7.25464C7.37758 6 7.43905 6 7.49576 5.9935C7.79166 5.95961 8.05705 5.79559 8.21969 5.54609C8.25086 5.49827 8.27836 5.44328 8.33333 5.33333C8.44329 5.11342 8.49827 5.00346 8.56062 4.90782C8.8859 4.40882 9.41668 4.08078 10.0085 4.01299C10.1219 4 10.2448 4 10.4907 4H13.5093C13.7552 4 13.8781 4 13.9915 4.01299C14.5833 4.08078 15.1141 4.40882 15.4394 4.90782C15.5017 5.00345 15.5567 5.11345 15.6667 5.33333C15.7216 5.44329 15.7491 5.49827 15.7803 5.54609C15.943 5.79559 16.2083 5.95961 16.5042 5.9935C16.561 6 16.6224 6 16.7454 6H17.8C18.9201 6 19.4802 6 19.908 6.21799C20.2843 6.40973 20.5903 6.71569 20.782 7.09202C21 7.51984 21 8.0799 21 9.2V16.8C21 17.9201 21 18.4802 20.782 18.908C20.5903 19.2843 20.2843 19.5903 19.908 19.782C19.4802 20 18.9201 20 17.8 20H6.2C5.0799 20 4.51984 20 4.09202 19.782C3.71569 19.5903 3.40973 19.2843 3.21799 18.908C3 18.4802 3 17.9201 3 16.8Z"
										stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
								</g>
							</svg>
						</button>

						{{-- close button --}}
						<button class="absolute right-2 top-2 h-auto w-auto transform rounded-full focus:outline-none md:top-2"
							id="close-button" data-modal-hide="camera-modal" type="button">
							<svg class="h-8 w-8 stroke-red-600 hover:stroke-red-800" viewBox="0 0 24 24" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
								<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
								<g id="SVGRepo_iconCarrier">
									<path d="M4 4L20 20M20 4L4 20" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
								</g>
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
		let capturedImages = []; // Define it globally so that it's accessible across functions

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

			document.querySelector('.ql-toolbar').classList.add('dark:bg-white', 'rounded-t-lg');
			document.querySelector('.ql-picker').classList.add('dark:bg-white');
			document.getElementById('editor').classList.add('!h-96', 'rounded-b-lg');
			document.getElementById("keterangan").classList.add("mt-2");

			// kirim data di quill editor ke input keterangan
			$('#store').on('click', function() {
				const content = quill.root.innerHTML;
				$('#keterangan').val(content);
			});
		}

		function addDataHandler() {
			$('#store').click(function(e) {
				e.preventDefault();

				// define var
				let kode_pegawai = $("#kode_pegawai").val();
				let judul = $("#title").val();
				let ket = $("#keterangan").val();
				let long = $("#longitude").val();
				let lat = $("#latitude").val();
				let token = $("meta[name='csrf-token']").attr("content");

				// Buat objek FormData
				let formData = new FormData();

				// Masukkan data lain ke FormData
				formData.append("kode_pegawai", kode_pegawai);
				formData.append("title", judul);
				formData.append("keterangan", ket);
				formData.append("longitude", long);
				formData.append("latitude", lat);
				formData.append("_token", token);

				// Masukkan gambar-gambar ke FormData
				capturedImages.forEach((image, index) => {
					// Mengonversi base64 menjadi Blob
					const blob = dataURItoBlob(image);
					formData.append("images[]", blob, `image${index}.png`);
				});

				// ajax request
				$.ajax({
					url: "{{ route('collectors.store') }}", // Sesuaikan dengan URL route Anda
					type: "POST",
					dataType: "json",
					data: formData,
					processData: false,
					contentType: false,
					success: function(response) {
						// tampilkan alert
						window.Swal.fire({
							icon: "success",
							title: "Laporan berhasil ditambahkan!",
							showConfirmButton: false,
							timer: 1000
						});

						// redirect
						setTimeout(() => {
							window.location.href = "{{ route('dashboard.collect.index') }}";
						}, 1000);
					},
					error: function(xhr, status, error) {
						// error handler
						Swal.fire({
							icon: "error",
							title: "Terjadi kesalahan!",
							text: "Tidak dapat menyimpan data."
						});

						let err = xhr.responseJSON.errors;

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

						if (err.images) {
							$('#alert-images')
								.removeClass('hidden')
								.addClass('block')
								.html(err.images[0]);
						} else {
							$('#alert-images')
								.removeClass('block')
								.addClass('hidden');
						}

						if (err.longitude || err.latitude) {
							$('#alert-location')
								.removeClass('hidden')
								.addClass('block')
								.html(err.longitude[0] || err.latitude[0]);
						} else {
							$('#alert-location')
								.removeClass('block')
								.addClass('hidden');
						}

					}
				});
			});
		}

		// Fungsi untuk mengonversi data URL ke Blob
		function dataURItoBlob(dataURI) {
			const byteString = atob(dataURI.split(',')[1]);
			const arrayBuffer = new ArrayBuffer(byteString.length);
			const uintArray = new Uint8Array(arrayBuffer);
			for (let i = 0; i < byteString.length; i++) {
				uintArray[i] = byteString.charCodeAt(i);
			}
			return new Blob([uintArray], {
				type: 'image/png'
			});
		}

		function backCameraStream() {
			const captureButton = document.getElementById("capture-button");
			const closeModalButton = document.getElementById("close-button");
			const captureImageButton = document.getElementById("capture-image");
			const cameraModal = document.getElementById('camera-modal');
			const videoElement = document.getElementById("video");
			const capturedImagesContainer = document.getElementById("captured-images");

			const modal = new Modal(cameraModal, {
				closable: true,
				backdrop: 'dynamic'
			}, {
				id: 'camera-modal',
				override: true
			});
			let stream;

			// Fungsi untuk membuka kamera dan menampilkan stream
			async function startCamera() {
				try {
					stream = await navigator.mediaDevices.getUserMedia({
						video: {
							facingMode: "environment"
						} // Menggunakan kamera belakang
					});
					videoElement.srcObject = stream;
					modal.show();
				} catch (err) {
					console.error("Gagal mengakses kamera:", err);
				}
			}

			// Menangani tombol "Ambil Gambar"
			captureButton.addEventListener("click", startCamera);

			// Menangani tombol capture (mengambil snapshot)
			captureImageButton.addEventListener("click", function() {
				const canvas = document.createElement("canvas");
				canvas.width = videoElement.videoWidth;
				canvas.height = videoElement.videoHeight;
				canvas.getContext("2d").drawImage(videoElement, 0, 0, canvas.width, canvas.height);
				const imgData = canvas.toDataURL("image/png");

				// Simpan gambar ke array
				capturedImages.push(imgData);

				// Membuat elemen pembungkus untuk gambar dan tombol hapus
				const imageWrapper = document.createElement("div");
				imageWrapper.classList.add("relative", "me-2", "flex-none", "items-center", "gap-4", "p-2");

				// Membuat elemen gambar
				const imgElement = document.createElement("img");
				imgElement.src = imgData;
				imgElement.classList.add("w-36", "h-36", "object-cover", "rounded-lg", "border");

				// Membuat tombol hapus
				const removeButton = document.createElement("button");
				removeButton.classList.add(
					"absolute", "top-0", "right-0", "bg-red-500", "text-white",
					"rounded-full", "w-6", "h-6", "flex", "items-center", "justify-center",
					"hover:bg-red-700", "focus:outline-none", "z-50"
				);
				removeButton.innerHTML = "×";
				removeButton.title = "Hapus gambar";

				// Menambahkan event listener untuk tombol hapus
				removeButton.addEventListener("click", function() {
					capturedImagesContainer.removeChild(imageWrapper);
					// Hapus gambar dari array
					capturedImages = capturedImages.filter(image => image !== imgData);
				});

				// Menyusun elemen
				imageWrapper.appendChild(imgElement);
				imageWrapper.appendChild(removeButton);
				capturedImagesContainer.appendChild(imageWrapper);

				// Menambah margin kontainer gambar
				capturedImagesContainer.classList.add("mb-2");

				// Stop streaming setelah capture
				stream.getTracks().forEach(track => track.stop());
				document.querySelector('.bg-gray-900\\/50').classList.add("hidden");

				window.Swal.fire({
					title: "Captured!",
					text: "Foto berhasil diambil.",
					icon: "success",
					timer: 1000,
				});

				modal.hide();
			});

			closeModalButton.addEventListener("click", function() {
				stream.getTracks().forEach(track => track.stop());
				modal.hide();
			});
		}

		function getLocation() {
			var long, lat;
			let longitude = document.getElementById('longitude');
			let latitude = document.getElementById('latitude');

			// check jika browser support geolocation
			if (navigator.geolocation) {
				// jika support
				navigator.geolocation.watchPosition(
					function(position) {
						lat = position.coords.latitude;
						long = position.coords.longitude;

						$('#longitude').val(long);
						$('#latitude').val(lat);
					},
					function(error) {
						window.Swal.fire({
							title: "Gagal!",
							html: "Anda harus mengaktifkan izin lokasi.",
							timer: 1500,
							icon: "error",
							showConfirmButton: false,
						}).then(() => {
							setTimeout(() => {
								window.location.href = "{{ route('dashboard.collect.create') }}"
							})
						})
					}
				)
			} else {
				// jika tidak
				window.Swal.fire({
					title: "Gagal!",
					html: "Browser anda tidak memiliki support Geolocation.",
					timer: 1500,
					icon: "error",
					showConfirmButton: false,
				}).then(() => {
					setTimeout(() => {
						window.location.href = "{{ route('dashboard.collect.index') }}";
					}, 1000);
				})
			}
		}

		document.addEventListener("DOMContentLoaded", function() {
			quillText();
			backCameraStream();
			getLocation();
			addDataHandler();
		});
	</script>
@endpush

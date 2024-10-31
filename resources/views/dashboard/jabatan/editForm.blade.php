<div class="w-full space-y-6 xl:w-6/12 2xl:w-1/3">
	<div class="dark:bg-[#18181b] dark:ring-gray-700 rounded-xl bg-white p-4 shadow-sm ring-1 ring-gray-200 sm:p-6">
		<div class="max-w-xl">
			<header class="flex flex-row">
				<a
					class="dark:bg-red-800 dark:text-white dark:hover:bg-red-900 dark:ring-gray-700 mb-4 mr-3 flex flex-row rounded-lg px-2.5 py-2.5 align-middle ring-1 ring-red-700 hover:bg-red-300 md:px-4"
					href="{{ route('dashboard.jabatan') }}">
					<svg class="dark:fill-white" class="icon" xmlns="http://www.w3.org/2000/svg" width="25" height="25"
						viewBox="0 0 1024 1024" fill="#000000" version="1.1">
						<path
							d="M669.6 849.6c8.8 8 22.4 7.2 30.4-1.6s7.2-22.4-1.6-30.4l-309.6-280c-8-7.2-8-17.6 0-24.8l309.6-270.4c8.8-8 9.6-21.6 2.4-30.4-8-8.8-21.6-9.6-30.4-2.4L360.8 480.8c-27.2 24-28 64-0.8 88.8l309.6 280z"
							fill="" />
					</svg>
					Kembali
				</a>
				<h2 class="dark:text-white mt-2 text-lg font-medium text-gray-900">
					{{ __('Edit Data Jabatan') }}
				</h2>

			</header>
			<p class="dark:text-gray-300 mt-1 text-sm text-gray-600">
				{{ __('Silahkan sesuaikan data dibawah ini dengan data yang benar.') }}
			</p>

			<form class="mt-4" action="{{ route('jabatan.update', $jabatan) }}" method="POST">
				@csrf
				@method('put')
				<div class="mb-4 grid gap-6 sm:mb-5 sm:grid-cols-2 sm:gap-6">
					<div class="sm:col-span-2">
						<label class="dark:text-white mb-2 block text-sm font-medium text-gray-900" for="nama_jabatan">Nama
							Jabatan</label>
						<input
							class="focus:ring-primary-600 focus:border-primary-600 block w-full rounded-lg border border-gray-300 p-2.5 text-sm text-gray-900"
							id="nama_jabatan" name="nama_jabatan" type="text" value="{{ $jabatan->nama_jabatan }}"
							placeholder="Nama Jabatan" required="">
					</div>
					<div class="w-full">
						<label class="dark:text-white mb-2 block text-sm font-medium text-gray-900" for="divisi">Divisi</label>
						<select
							class="focus:ring-primary-500 focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-white p-2.5 text-sm text-gray-900"
							id="divisi" name="divisi">
							<option selected>Pilih</option>
							@foreach ($division as $data)
								<option value="{{ $data->id }}" @if ($data->id == $jabatan->divisi) selected @endif>
									{{ $data->nama_divisi }}
								</option>
							@endforeach

						</select>
					</div>
					<div class="w-full">
						<label class="dark:text-white mb-2 block text-sm font-medium text-gray-900" for="penempatan">Penempatan</label>
						<select
							class="focus:ring-primary-500 focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-white p-2.5 text-sm text-gray-900"
							id="penempatan" name="penempatan">
							<option selected>Pilih</option>
							@foreach ($placement as $data)
								<option value="{{ $data->id }}" @if ($data->id == $jabatan->penempatan) selected @endif>
									{{ $data->penempatan }}
								</option>
							@endforeach

						</select>
					</div>

				</div>
				<div class="flex items-center">
					<button
						class="dark:bg-blue-800 dark:text-white dark:hover:bg-blue-900 dark:ring-gray-700 inline-flex items-center rounded-lg px-5 py-2.5 text-center text-sm font-medium text-gray-900 ring-1 ring-blue-700 hover:bg-blue-800 hover:text-white focus:text-white focus:ring-4 focus:ring-blue-300"
						type="submit">
						Update
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

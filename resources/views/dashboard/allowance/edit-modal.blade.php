<div
	class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0"
	id="allowanceedit" aria-hidden="true" tabindex="-1">
	<div class="modal-body relative max-h-full w-full max-w-md p-4" id="modalEditBody">
		<!-- Modal content -->
		<div class="dark:bg-gray-700 relative rounded-lg bg-white shadow">
			<!-- Modal header -->
			<div class="dark:border-gray-600 flex items-center justify-between rounded-t border-b p-4 md:p-5">
				<h3 class="dark:text-white text-lg font-semibold text-gray-900">
					Edit allowance
				</h3>
				<button
					class="dark:hover:bg-gray-600 dark:hover:text-white ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900"
					data-modal-toggle="allowanceedit" type="button">
					<svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
						<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
							d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
					</svg>
					<span class="sr-only">Close modal</span>
				</button>
			</div>
			<!-- Modal body -->
			<form class="p-4 md:p-5" id="allowanceForm" action="#" method="POST">
				@csrf
				<div class="mb-4 grid grid-cols-2 gap-4">
					<input name="id" type="hidden" value="{{ $pegawai->id }}">
					<input name="kode_pegawai" type="hidden" value="{{ $pegawai->kode_pegawai }}">
					<div class="col-span-2">
						<label class="dark:text-white mb-2 block text-sm font-medium text-gray-900" for="name">Name</label>
						<input
							class="dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-600 focus:ring-blue-600"
							id="name" name="allowance_name" type="text" placeholder="Type allowance name" required="">
					</div>
					<div class="col-span-2 sm:col-span-1">
						<label class="dark:text-white mb-2 block text-sm font-medium text-gray-900" for="type">Type</label>
						<select
							class="dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
							id="type" name="allowance_type">
							<option selected="">Select type</option>
							<option value="Terbilang">Terbilang</option>
							<option value="Persenan">% (Persenan)</option>
						</select>
					</div>
					<div class="col-span-2 sm:col-span-1">
						<label class="dark:text-white mb-2 block text-sm font-medium text-gray-900" for="price">Nilai</label>
						<input
							class="dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-600 focus:ring-blue-600"
							id="price" name="allowance_fee" type="number" placeholder="Rp. xxx.xxx" required="">
					</div>

					<div class="col-span-2">
						<label class="dark:text-white mb-2 block text-sm font-medium text-gray-900" for="description"> Periode</label>

						<div class="relative max-w-sm">
							<div class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3">
								<svg class="dark:text-gray-400 h-4 w-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
									fill="currentColor" viewBox="0 0 20 20">
									<path
										d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
								</svg>
							</div>
							<input
								class="dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 ps-10 text-sm text-gray-900 focus:border-blue-600 focus:ring-blue-600"
								id="datepicker-actions" name="allowance_period" type="text" datepicker datepicker-buttons
								datepicker-autoselect-today placeholder="Select date">
						</div>

					</div>
				</div>
				<button
					class="dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 inline-flex items-center rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300"
					type="submit">
					<svg class="-ms-1 me-1 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd"
							d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd">
						</path>
					</svg>
					Add new allowance
				</button>
			</form>
		</div>
	</div>
</div>

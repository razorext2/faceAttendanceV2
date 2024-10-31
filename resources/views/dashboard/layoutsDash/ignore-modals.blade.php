<!-- start DeleteModal -->
<div class="fixed z-50 hidden h-full w-full overflow-y-auto overflow-x-hidden bg-gray-800/50 p-4 md:inset-0"
	id="ignoreModal" data-modal-placement="center-center" tabindex="-1">
	<div class="relative mx-auto max-h-full w-full max-w-md">
		<div class="dark:bg-gray-700 dark:ring-gray-700 relative rounded-lg bg-white shadow ring-1 ring-gray-300">
			<!-- Modal Header -->
			<div class="dark:border-gray-600 flex items-start justify-between rounded-t border-b p-4">
				<h3 class="dark:text-white text-xl font-semibold text-gray-900">
					Peringatan
				</h3>
				<button
					class="dark:hover:bg-gray-600 dark:hover:text-white ml-auto inline-flex items-center rounded-lg bg-transparent p-1.5 text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900"
					data-modal-hide="ignoreModal" type="button">
					<svg class="h-5 w-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd"
							d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
							clip-rule="evenodd"></path>
					</svg>
					<span class="sr-only">Close modal</span>
				</button>
			</div>
			<!-- Modal Body -->
			<div class="p-6">
				<p class="dark:text-gray-400 text-sm text-gray-500">
					Are you sure you want to ignore this data? This action cannot be undone.
				</p>
			</div>
			<!-- Modal Footer -->
			<div class="dark:border-gray-600 flex items-center space-x-2 rounded-b border-t border-gray-200 p-6">
				<!-- Delete Confirmation Form -->
				<form id="ignoreForm" method="POST" action="">
					@csrf
					@method('put')
					<button
						class="dark:bg-red-800 dark:hover:bg-red-900 dark:focus:ring-red-900 rounded-lg bg-red-600 px-4 py-2 text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300"
						type="submit">
						Tolak Pengajuan
					</button>
				</form>
				<button
					class="dark:bg-gray-700 dark:text-gray-300 dark:border-gray-700 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600 rounded-lg border border-gray-200 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:ring-4 focus:ring-blue-300"
					data-modal-hide="ignoreModal" type="button">
					Cancel
				</button>
			</div>
		</div>
	</div>
</div>
<!-- end DeleteModal -->

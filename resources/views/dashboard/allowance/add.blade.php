<!-- Modal content -->
<div class="dark:bg-gray-700 relative rounded-lg bg-white shadow">
	<!-- Modal header -->
	<div class="dark:border-gray-600 flex items-center justify-between rounded-t border-b p-4 md:p-5">
		<h3 class="dark:text-white text-lg font-semibold text-gray-900">
			Add new allowance
		</h3>
		<button
			class="dark:hover:bg-gray-600 dark:hover:text-white ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900"
			data-modal-toggle="allowanceadd" type="button">
			<svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
				<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
					d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
			</svg>
			<span class="sr-only">Close modal</span>
		</button>
	</div>
	<!-- Modal body -->
	<form class="p-4 md:p-5" id="allowanceForm">
		@csrf
		<div class="mb-4 grid grid-cols-2 gap-4">
			<div class="col-span-2">
				<label class="dark:text-white mb-2 block text-sm font-medium text-gray-900" for="name">Name</label>
				<input
					class="focus:ring-primary-600 focus:border-primary-600 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900"
					id="name" name="name" type="text" placeholder="Type product name" required="">
			</div>
			<div class="col-span-2 sm:col-span-1">
				<label class="dark:text-white mb-2 block text-sm font-medium text-gray-900" for="price">Price</label>
				<input
					class="focus:ring-primary-600 focus:border-primary-600 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900"
					id="price" name="price" type="number" placeholder="$2999" required="">
			</div>
			<div class="col-span-2 sm:col-span-1">
				<label class="dark:text-white mb-2 block text-sm font-medium text-gray-900" for="category">Category</label>
				<select
					class="focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900"
					id="category">
					<option selected="">Select category</option>
					<option value="TV">TV/Monitors</option>
					<option value="PC">PC</option>
					<option value="GA">Gaming/Console</option>
					<option value="PH">Phones</option>
				</select>
			</div>
			<div class="col-span-2">
				<label class="dark:text-white mb-2 block text-sm font-medium text-gray-900" for="description">Product
					Description</label>
				<textarea
				 class="dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
				 id="description" rows="4" placeholder="Write product description here"></textarea>
			</div>
		</div>
		<button
			class="dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 inline-flex items-center rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300"
			type="submit">
			<svg class="-ms-1 me-1 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
					clip-rule="evenodd">
				</path>
			</svg>
			Add new product
		</button>
	</form>
</div>

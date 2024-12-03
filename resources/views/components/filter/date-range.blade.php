<div class="flex items-center gap-2" id="date-range-picker" datepicker-format="yyyy-mm-dd" date-rangepicker>
	<div class="relative w-full">
		<div class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3">
			<x-icons.date class="dark:text-gray-400 h-4 w-4 text-gray-500" />
		</div>
		<input
			class="dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 ps-10 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
			id="datepicker-range-start" name="start" type="text" placeholder="Start date">
	</div>
	<div class="relative w-full">
		<div class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3">
			<x-icons.date class="dark:text-gray-400 h-4 w-4 text-gray-500" />
		</div>
		<input
			class="dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 ps-10 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
			id="datepicker-range-end" name="end" type="text" placeholder="End date">
	</div>
</div>

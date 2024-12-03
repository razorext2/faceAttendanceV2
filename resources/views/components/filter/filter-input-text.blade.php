@props(['name', 'text', 'icon'])

<div class="relative w-full">
	<div class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3">
		{{ $slot }}
	</div>

	<input
		class="dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 block w-full rounded-lg border border-gray-200 bg-gray-50 p-2.5 ps-10 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
		id="{{ $name }}" name="{{ $name }}" type="text" placeholder="Filter by {{ $text }}..." />
</div>

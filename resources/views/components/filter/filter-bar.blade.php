<div id="filter-bar" x-data="{ open: false }">
	<h2>
		<button
			class="dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-800 flex w-full items-center justify-between gap-3 rounded-xl border border-gray-200 p-2.5 font-medium text-gray-500 hover:bg-gray-100"
			type="button" @click="open = ! open">
			<span>Filter data...</span>
			<svg class="h-3 w-3 shrink-0 transform transition-transform duration-300" aria-hidden="true"
				:class="{ 'rotate-180 ': open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
				<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
			</svg>
		</button>
	</h2>

	{{-- body --}}
	<div x-show="open" x-transition:enter="transition ease-out duration-300"
		x-transition:enter-start="opacity-0 -translate-y-5" x-transition:enter-end="opacity-100 "
		x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 "
		x-transition:leave-end="opacity-0 -translate-y-5">
		<div class="grid grid-cols-2 gap-2 pt-2 md:gap-4 md:pt-4">

			{{ $slot }}

			<div class="col-span-2 mx-auto w-full">
				<div class="mx-auto w-fit">
					<x-filter.filter-button :color="'blue'" :id="'cari'" :type="'button'" :text="'Search'">
						<x-icons.search class="h-4 w-4"></x-icons.search>
					</x-filter.filter-button>

					<x-filter.filter-button :color="'red'" :id="'clear'" :type="'button'" :text="'Clear'" :class="'rotate-45'">
						<x-icons.plus class="h-4 w-4 rotate-45"></x-icons.plus>
					</x-filter.filter-button>

				</div>
			</div>

		</div>
	</div>
</div>

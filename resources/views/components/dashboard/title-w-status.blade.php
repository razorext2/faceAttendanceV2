<div class="flex flex-row items-center">

	@if ($status == 0)
		<x-dashboard.status :color="'yellow'">
			<span class="absolute mx-auto inline-flex h-full w-full animate-ping rounded-md bg-yellow-400 opacity-75"></span>
			<x-icons.bell-ring class="relative mx-auto inline-flex h-4 w-4" />
		</x-dashboard.status>
	@elseif ($status == 1)
		<x-dashboard.status :color="'green'">
			<x-icons.check class="mx-auto h-4 w-4" />
		</x-dashboard.status>
	@else
		<x-dashboard.status :color="'red'">
			<x-icons.close class="mx-auto h-4 w-4" />
		</x-dashboard.status>
	@endif

	<p>{{ $title }}</p>
</div>

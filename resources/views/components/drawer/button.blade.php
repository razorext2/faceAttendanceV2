@props([
    'href' => '#',
    'label' => '',
    'active' => false,
    'classes' => '',
])

<a class="group inline-flex flex-col items-center justify-center rounded-tl-2xl px-5" href="{{ $href }}">
	<svg
		class="{{ $active ? 'stroke-red-600 dark:stroke-red-500' : 'dark:stroke-gray-400 stroke-gray-500' }} dark:group-hover:stroke-red-500 {{ $classes }} mb-1 h-6 w-6 group-hover:stroke-red-600"
		viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
		{{ $slot }}
	</svg>
	<span class="sr-only">{{ $label }}</span>
</a>

@props(['color', 'type', 'id', 'text', 'class' => ''])

<button
	class="dark:bg-{{ $color }}-600 dark:hover:bg-{{ $color }}-700 dark:focus:ring-{{ $color }}-600 border-{{ $color }}-700 bg-{{ $color }}-700 hover:bg-{{ $color }}-800 focus:ring-{{ $color }}-300 mx-0.5 rounded-lg border p-2.5 text-sm font-medium text-white focus:outline-none focus:ring-4"
	id="{{ $id }}" type="{{ $type }}">
	{{ $slot }}
	<span class="sr-only">{{ $text }}</span>
</button>

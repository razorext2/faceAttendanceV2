@props(['form' => null, 'color' => 'blue', 'class' => '', 'icon' => '', 'type' => 'button', 'id' => ''])

<button id="{{ $id }}" type="{{ $type }}"
	{{ $attributes->merge(['class' => "dark:bg-{$color}-800 dark:text-white dark:hover:bg-{$color}-900 dark:ring-gray-700 ring-{$color}-700 hover:bg-{$color}-300 {$class} flex flex-row items-center gap-2 rounded-lg ring-1 transition-transform duration-300 ease-in-out hover:scale-105 will-change-transform"]) }}
	{{ $form ? 'form=' . $form : '' }}>
	{{ $icon }}
	<span>{{ $slot }}</span>
</button>

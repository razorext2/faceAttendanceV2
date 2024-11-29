<button id="{{ $id }}" type="{{ $type }}"
	{{ $attributes->merge(['class' => 'dark:bg-green-800 dark:hover:bg-green-900 dark:text-white dark:ring-gray-700 rounded-lg bg-green-400 p-2 font-bold text-white ring-1 ring-black hover:bg-green-700']) }}>
	{{ $slot }}
</button>

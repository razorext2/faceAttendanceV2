<button id="{{ $id }}" type="{{ $type }}"
	{{ $attributes->merge(['class' => 'dark:bg-blue-800 dark:hover:bg-blue-900 dark:text-white dark:ring-gray-700 rounded-lg bg-blue-400 p-2 font-bold text-white ring-1 ring-black hover:bg-blue-700']) }}>
	{{ $slot }}
</button>

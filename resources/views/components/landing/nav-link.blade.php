<li>
	{{-- panggil href atau atribute bawaan pada tag dengan $attributes --}}
	{{-- $active di definisikan di navbar sebagai sebuah logic --}}
	<a
		class="{{ $active ? 'text-red-700' : 'hover:text-red-700 text-gray-900 dark:text-gray-300' }} block rounded px-3 py-2 md:p-0"
		aria-current="page" {{ $attributes }}>
		{{-- ambil nilai dari tag x-nav-link di navbar --}}
		{{ $slot }}
	</a>
</li>

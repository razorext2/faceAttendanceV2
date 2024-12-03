<button
	class="dark:bg-green-800 dark:text-white dark:hover:bg-green-900 dark:ring-gray-700 flex flex-row rounded-lg px-2.5 py-2 ring-1 ring-green-700 transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-105 hover:bg-green-300 lg:px-8"
	form="{{ $form }}">
	<svg class="dark:fill-white icon h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024" fill="currentColor"
		version="1.1">
		<path
			d="M669.6 849.6c8.8 8 22.4 7.2 30.4-1.6s7.2-22.4-1.6-30.4l-309.6-280c-8-7.2-8-17.6 0-24.8l309.6-270.4c8.8-8 9.6-21.6 2.4-30.4-8-8.8-21.6-9.6-30.4-2.4L360.8 480.8c-27.2 24-28 64-0.8 88.8l309.6 280z"
			fill="" />
	</svg>
	<span class="hidden sm:block">{{ $slot }}</span>
</button>

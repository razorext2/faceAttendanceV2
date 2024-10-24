<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

	<head>
		@include('layouts.head')
	</head>

	<body>
		@include('layouts.header')
		@yield('content')
		@if (session('success'))
			<div
				class="fixed bottom-5 right-5 z-50 flex w-full max-w-xs scale-90 transform items-center divide-x rounded-lg opacity-0 transition duration-300"
				id="toast-bottom-right" role="alert">
				<div
					class="toast-bottom-right mb-4 flex w-full max-w-xs items-center rounded-lg bg-white p-4 text-gray-500 shadow ring-1 ring-black"
					id="toast-success" role="alert">
					<div class="inline-flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-lg bg-green-100 text-green-500">
						<svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
							<path
								d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
						</svg>
						<span class="sr-only">Check icon</span>
					</div>
					<div class="ms-3 text-sm font-normal text-black">{{ session('success') }}</div>
					<button
						class="-mx-1.5 -my-1.5 ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-white p-1.5 text-gray-400 hover:bg-gray-100 hover:text-gray-900 focus:ring-2 focus:ring-gray-300"
						data-dismiss-target="#toast-success" type="button" aria-label="Close">
						<span class="sr-only">Close</span>
						<svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
							<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
								d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
						</svg>
					</button>
				</div>
			</div>
		@endif
		@include('layouts.footer')

		<div class="dark:bg-gray-800 fixed inset-0 z-50 bg-white md:z-[9999]" id="preloader">
		</div>
		@include('layouts.js')
	</body>

</html>

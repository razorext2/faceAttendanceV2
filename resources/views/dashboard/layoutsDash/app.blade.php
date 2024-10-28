<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

	<head>
		@include('dashboard.layoutsDash.head')
	</head>

	<body>
		<div class="relative">
			<img class="fixed inset-0 -z-50 h-full w-full object-cover" src="{{ asset('assets/img/hero-bg-light.webp') }}"
				alt="Background Image" />
			<img class="fixed inset-0 -z-40 h-full w-full object-cover opacity-20 mix-blend-overlay"
				src="{{ asset('assets/img/grid.webp') }}" alt="Background Image" />

			<!-- Overlay -->
			<div class="dark:opacity-85 fixed inset-0 -z-40 w-full bg-gray-800 opacity-0"></div>
		</div>

		@if (session('status'))
			<div
				class="fixed right-0 top-[4.5rem] z-50 flex w-full max-w-sm scale-90 transform items-center divide-x rounded-lg transition duration-300"
				id="toast-top-right" role="alert" x-data="{ showToast: true }" x-init="setTimeout(() => showToast = false, 3000)" x-show="showToast"
				x-transition:enter="transition ease-in duration-300" x-transition:enter-start="transform scale-90 opacity-0"
				x-transition:enter-end="transform scale-100 opacity-100" x-transition:leave="transition ease-out duration-300"
				x-transition:leave-start="transform scale-100 opacity-100" x-transition:leave-end="transform scale-90 opacity-0">
				<div class="mb-4 flex w-full max-w-sm items-center rounded-lg border border-gray-200 bg-white p-4"
					id="toast-success" role="alert">
					<div class="inline-flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-lg bg-green-100 text-green-500">
						<svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
							viewBox="0 0 20 20">
							<path
								d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
						</svg>
						<span class="sr-only">Check icon</span>
					</div>
					<div class="ms-3 mt-0.5 text-sm font-normal text-black">
						<x-auth-session-status :status="session('status')" />
					</div>
					<button
						class="-mx-1.5 -my-1.5 ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-white p-1.5 text-gray-400 hover:bg-gray-100 hover:text-gray-900 focus:ring-2 focus:ring-gray-300"
						type="button" aria-label="Close" @click="showToast = false">
						<span class="sr-only">Close</span>
						<svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
							<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
								d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
						</svg>
					</button>
				</div>
			</div>
		@endif

		@include('dashboard.layoutsDash.navbar')
		@include('dashboard.layoutsDash.sidebar')
		<div class="mt-2 p-2 sm:ml-72 sm:mt-0 sm:p-4">

			<div
				class="dark:border-gray-800 mb-16 mt-12 rounded-lg border-2 border-dashed border-gray-100 p-2 sm:p-4 md:mb-0 md:mt-16">
				<!-- carousel for cards -->
				<div class="mb-3 grid grid-cols-1 gap-6">
					<div class="relative overflow-hidden">
						<!-- component -->

						@include('dashboard.layoutsDash.title')

						<div class="p-auto relative m-auto flex flex-col">
							<!-- Tombol Previous -->
							<button
								class="dark:bg-gray-800 dark:hover:bg-gray-900 dark:text-gray-300 dark:hover:text-white dark:border-gray-500 absolute -bottom-2.5 left-0 h-10 w-10 -translate-y-1/2 transform rounded-full border border-gray-300 bg-white p-2 text-gray-800 transition-all duration-500 hover:bg-gray-300"
								id="prevButton">
								&#8592;
							</button>

							<div class="hide-scroll-bar mb-6 flex snap-x scroll-ps-6 overflow-x-scroll pb-8" id="scrollContainer">
								<div class="flex flex-nowrap gap-6">
									@include('dashboard.layoutsDash.cardCarousel')
								</div>
							</div>

							<!-- Tombol Next -->
							<button
								class="dark:bg-gray-800 dark:hover:bg-gray-900 dark:text-gray-300 dark:hover:text-white dark:border-gray-500 absolute -bottom-2.5 right-0 h-10 w-10 -translate-y-1/2 transform rounded-full border border-gray-300 bg-white p-2 text-gray-800 transition-all duration-500 hover:bg-gray-300"
								id="nextButton">
								&#8594;
							</button>
						</div>

					</div>
				</div>
				@yield('content')
			</div>
		</div>

		{{-- bikin navigasi ala android --}}
		@include('dashboard.layoutsDash.mobileDrawer')
		<div class="dark:bg-gray-800 fixed inset-0 z-50 bg-white md:z-[9999]" id="preloader">
		</div>

		<!-- js -->
		@include('dashboard.layoutsDash.js')
	</body>

</html>

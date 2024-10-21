<!DOCTYPE html>
<html lang="en">

	<head>
		@include('dashboard.layoutsDash.head')
	</head>

	<body>
		{{-- ngakalin button semua semualah pusing --}}
		<input
			class="dark:bg-green-800 dark:hover:bg-green-900 dark:text-white mx-1 rounded-lg border border-green-800 bg-transparent px-4 py-2 text-sm font-medium text-gray-900 hover:bg-green-600 hover:text-white focus:z-10 focus:bg-green-600 focus:text-white focus:ring-green-500"
			type="hidden">

		<input
			class="dark:bg-red-800 dark:hover:bg-red-900 dark:text-white mx-1 rounded-lg border border-red-800 bg-transparent px-4 py-2 text-sm font-medium text-gray-900 hover:bg-red-600 hover:text-white focus:z-10 focus:bg-red-600 focus:text-white focus:ring-red-500"
			type="hidden">

		<input
			class="dark:bg-blue-800 dark:hover:bg-blue-900 dark:text-white mx-1 rounded-lg border border-blue-800 bg-transparent px-4 py-2 text-sm font-medium text-gray-900 hover:bg-blue-600 hover:text-white focus:z-10 focus:bg-blue-600 focus:text-white focus:ring-blue-500"
			type="hidden">

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

			<div class="dark:border-gray-800 mb-16 mt-16 rounded-lg border-2 border-dashed border-gray-100 p-2 sm:p-4 md:mb-0">
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
		<!-- footer -->

		{{-- bikin navigasi ala android --}}

		<div class="fixed bottom-0 left-1/2 z-50 w-full max-w-lg -translate-x-1/2 md:hidden">
			<div class="dark:bg-gray-700 dark:border-gray-500 z-50 h-16 w-full rounded-t-2xl border-t border-gray-200 bg-white">
				<div class="mx-auto grid h-full max-w-lg grid-cols-5">
					<a class="group inline-flex flex-col items-center justify-center rounded-tl-2xl px-5"
						href="{{ route('dashboard') }}">
						<svg
							class="{{ Route::currentRouteName() == 'dashboard' ? 'text-blue-600 dark:text-blue-500' : 'dark:text-gray-400 text-gray-500' }} dark:group-hover:text-blue-500 mb-1 h-5 w-5 group-hover:text-blue-600"
							aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
							<path
								d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
						</svg>
						<span class="sr-only">Home</span>
					</a>
					<a class="group inline-flex flex-col items-center justify-center px-5" href="{{ route('attendanceIn.view') }}">
						<svg
							class="{{ Route::currentRouteName() == 'attendanceIn.view' ? 'text-blue-600 dark:text-blue-500' : 'text-gray-500 dark:text-gray-400' }} dark:group-hover:text-blue-500 mb-1 h-6 w-6 rotate-180 group-hover:text-blue-600"
							aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
							<path fill-rule="evenodd"
								d="M3 4.25A2.25 2.25 0 0 1 5.25 2h5.5A2.25 2.25 0 0 1 13 4.25v2a.75.75 0 0 1-1.5 0v-2a.75.75 0 0 0-.75-.75h-5.5a.75.75 0 0 0-.75.75v11.5c0 .414.336.75.75.75h5.5a.75.75 0 0 0 .75-.75v-2a.75.75 0 0 1 1.5 0v2A2.25 2.25 0 0 1 10.75 18h-5.5A2.25 2.25 0 0 1 3 15.75V4.25Z"
								clip-rule="evenodd"></path>
							<path fill-rule="evenodd"
								d="M19 10a.75.75 0 0 0-.75-.75H8.704l1.048-.943a.75.75 0 1 0-1.004-1.114l-2.5 2.25a.75.75 0 0 0 0 1.114l2.5 2.25a.75.75 0 1 0 1.004-1.114l-1.048-.943h9.546A.75.75 0 0 0 19 10Z"
								clip-rule="evenodd"></path>
						</svg>
						<span class="sr-only">Masuk</span>
					</a>
					<div class="flex items-center justify-center">
						<button
							class="hover:size-16 group absolute bottom-7 inline-flex h-14 w-14 items-center justify-center rounded-full bg-blue-600 font-medium outline outline-8 outline-blue-300 hover:bottom-6 hover:bg-blue-700 hover:outline-blue-200"
							data-drawer-target="drawer-swipe" data-drawer-toggle="drawer-swipe" data-drawer-placement="bottom"
							data-drawer-edge="true" data-drawer-edge-offset="-bottom-20" type="button" aria-controls="drawer-swipe">
							<svg class="group-hover:size-9 h-8 w-8 stroke-white group-hover:stroke-gray-100" aria-hidden="true"
								xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
								<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
								<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
								<g id="SVGRepo_iconCarrier">
									<path d="M5 8H19M5 16H19M3 12H21" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
								</g>
							</svg>

							<span class="sr-only">Menu</span>
						</button>
					</div>
					<a class="group inline-flex flex-col items-center justify-center px-5" href="{{ route('attendanceOut.view') }}">
						<svg
							class="{{ Route::currentRouteName() == 'attendanceOut.view' ? 'text-blue-600 dark:text-blue-500' : 'text-gray-500 dark:text-gray-400' }} dark:group-hover:text-blue-500 mb-1 h-6 w-6 group-hover:text-blue-600"
							aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
							<path fill-rule="evenodd"
								d="M3 4.25A2.25 2.25 0 0 1 5.25 2h5.5A2.25 2.25 0 0 1 13 4.25v2a.75.75 0 0 1-1.5 0v-2a.75.75 0 0 0-.75-.75h-5.5a.75.75 0 0 0-.75.75v11.5c0 .414.336.75.75.75h5.5a.75.75 0 0 0 .75-.75v-2a.75.75 0 0 1 1.5 0v2A2.25 2.25 0 0 1 10.75 18h-5.5A2.25 2.25 0 0 1 3 15.75V4.25Z"
								clip-rule="evenodd"></path>
							<path fill-rule="evenodd"
								d="M19 10a.75.75 0 0 0-.75-.75H8.704l1.048-.943a.75.75 0 1 0-1.004-1.114l-2.5 2.25a.75.75 0 0 0 0 1.114l2.5 2.25a.75.75 0 1 0 1.004-1.114l-1.048-.943h9.546A.75.75 0 0 0 19 10Z"
								clip-rule="evenodd"></path>
						</svg>
						<span class="sr-only">Keluar</span>
					</a>
					<a class="group inline-flex flex-col items-center justify-center rounded-tr-2xl px-5"
						href="{{ route('profile.edit') }}">
						<svg
							class="{{ Route::currentRouteName() == 'profile.edit' ? 'text-blue-600 dark:text-blue-500' : 'text-gray-500 dark:text-gray-400' }} dark:group-hover:text-blue-500 mb-1 h-5 w-5 group-hover:text-blue-600"
							aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
							<path
								d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
						</svg>
						<span class="sr-only">Profile</span>
					</a>
				</div>
			</div>
		</div>

		<!-- drawer component -->
		<div
			class="dark:border-gray-700 dark:bg-gray-800 fixed -bottom-20 bottom-[50px] left-0 right-0 z-40 w-full translate-y-full overflow-y-auto rounded-t-xl border-t border-gray-200 bg-white transition-transform md:hidden"
			id="drawer-swipe" aria-labelledby="drawer-swipe-label" tabindex="-1">
			<div class="dark:hover:bg-gray-700 cursor-pointer p-4 hover:bg-gray-50" data-drawer-toggle="drawer-swipe">
				<span class="dark:bg-gray-600 absolute left-1/2 top-3 h-1 w-8 -translate-x-1/2 rounded-xl bg-gray-300"></span>
			</div>
			<div class="grid grid-cols-3 gap-4 px-4 pb-[60px] pt-4 lg:grid-cols-4">

				<a
					class="{{ Route::currentRouteName() == 'dashboard.dayoff' || Route::currentRouteName() == 'dayoff.add' || Route::currentRouteName() == 'dayoff.edit' ? 'bg-gray-100 dark:bg-gray-700' : 'dark:bg-gray-800 bg-gray-50' }} dark:hover:bg-gray-600 group cursor-pointer rounded-xl p-4 hover:bg-gray-100"
					href="{{ route('dashboard.dayoff') }}">

					<div
						class="{{ Route::currentRouteName() == 'dashboard.dayoff' || Route::currentRouteName() == 'dayoff.add' || Route::currentRouteName() == 'dayoff.edit' ? 'bg-gray-100 dark:bg-gray-700' : 'dark:bg-gray-600 bg-gray-200' }} dark:group-hover:bg-gray-600 mx-auto mb-2 flex h-[48px] max-h-[48px] w-[48px] max-w-[48px] items-center justify-center rounded-full p-2 group-hover:bg-gray-100">

						<svg
							class="fi-sidebar-item-icon {{ Route::currentRouteName() == 'dashboard.dayoff' || Route::currentRouteName() == 'dayoff.add' || Route::currentRouteName() == 'dayoff.edit' ? 'stroke-blue-500' : 'stroke-gray-500 dark:stroke-gray-400' }} h-10 w-10 group-hover:stroke-blue-500"
							viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
							<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
							<g id="SVGRepo_iconCarrier">
								<path
									d="M3 5.5L5 3.5M21 5.5L19 3.5M9 9.5L15 15.5M15 9.5L9 15.5M20 12.5C20 16.9183 16.4183 20.5 12 20.5C7.58172 20.5 4 16.9183 4 12.5C4 8.08172 7.58172 4.5 12 4.5C16.4183 4.5 20 8.08172 20 12.5Z"
									stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
								</path>
							</g>
						</svg>

					</div>

					<div
						class="{{ Route::currentRouteName() == 'dashboard.dayoff' || Route::currentRouteName() == 'dayoff.add' || Route::currentRouteName() == 'dayoff.edit' ? 'text-white' : 'text-gray-500 dark:text-gray-400 ' }} text-center font-medium group-hover:text-white">
						Off Day
					</div>
				</a>

			</div>
		</div>

		<!-- js -->
		@include('dashboard.layoutsDash.js')
	</body>

</html>

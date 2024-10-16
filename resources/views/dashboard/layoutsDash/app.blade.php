<!DOCTYPE html>
<html lang="en">

<head>
    @include('dashboard.layoutsDash.head')
</head>

<body>
    {{-- ngakalin button semua semualah pusing --}}
    <input type="hidden"
        class="px-4 py-2 mx-1 text-sm font-medium text-gray-900 bg-transparent border border-green-800 rounded-lg hover:bg-green-600 hover:text-white focus:z-10 focus:ring-green-500 focus:bg-green-600 focus:text-white dark:bg-green-800 dark:hover:bg-green-900 dark:text-white">

    <input type="hidden"
        class="px-4 py-2 mx-1 text-sm font-medium text-gray-900 bg-transparent border border-red-800 rounded-lg hover:bg-red-600 hover:text-white focus:z-10 focus:ring-red-500 focus:bg-red-600 focus:text-white dark:bg-red-800 dark:hover:bg-red-900 dark:text-white">

    <input type="hidden"
        class="px-4 py-2 mx-1 text-sm font-medium text-gray-900 bg-transparent border border-blue-800 rounded-lg hover:bg-blue-600 hover:text-white focus:z-10 focus:ring-blue-500 focus:bg-blue-600 focus:text-white dark:bg-blue-800 dark:hover:bg-blue-900 dark:text-white">

    <div class="relative">
        <img src="{{ asset('assets/img/hero-bg-light.webp') }}" alt="Background Image"
            class="fixed inset-0 object-cover w-full h-full -z-50" />
        <img src="{{ asset('assets/img/grid.webp') }}" alt="Background Image"
            class="fixed inset-0 object-cover w-full h-full -z-40 opacity-20 mix-blend-overlay" />

        <!-- Overlay -->
        <div class="fixed inset-0 w-full bg-gray-800 opacity-0 -z-40 dark:opacity-85"></div>
    </div>

    @if (session('status'))
        <div id="toast-top-right" x-data="{ showToast: true }" x-init="setTimeout(() => showToast = false, 3000)" x-show="showToast"
            x-transition:enter="transition ease-in duration-300" x-transition:enter-start="transform scale-90 opacity-0"
            x-transition:enter-end="transform scale-100 opacity-100"
            x-transition:leave="transition ease-out duration-300"
            x-transition:leave-start="transform scale-100 opacity-100"
            x-transition:leave-end="transform scale-90 opacity-0"
            class="fixed z-50 flex items-center w-full max-w-sm divide-x rounded-lg right-0 top-[4.5rem] transform scale-90 transition duration-300"
            role="alert">
            <div id="toast-success"
                class="flex items-center w-full max-w-sm p-4 mb-4 bg-white border border-gray-200 rounded-lg"
                role="alert">
                <div
                    class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                    </svg>
                    <span class="sr-only">Check icon</span>
                </div>
                <div class="ms-3 text-sm font-normal text-black mt-0.5">
                    <x-auth-session-status :status="session('status')" />
                </div>
                <button @click="showToast = false" type="button"
                    class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8"
                    aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
        </div>
    @endif

    @include('dashboard.layoutsDash.navbar')
    @include('dashboard.layoutsDash.sidebar')
    <div class="p-2 mt-2 sm:p-4 sm:ml-72 sm:mt-0">

        <div class="p-2 mt-16 border-2 border-gray-100 border-dashed rounded-lg sm:p-4 dark:border-gray-800">
            <!-- carousel for cards -->
            <div class="grid grid-cols-1 gap-6 mb-3">
                <div class="relative overflow-hidden">
                    <!-- component -->

                    @include('dashboard.layoutsDash.title')

                    <div class="relative flex flex-col m-auto p-auto">
                        <!-- Tombol Previous -->
                        <button id="prevButton"
                            class="absolute left-0 -bottom-2.5 w-10 h-10  transform -translate-y-1/2 bg-white hover:bg-gray-300 transition-all duration-500 text-gray-800 p-2 rounded-full border border-gray-300 dark:bg-gray-800 dark:hover:bg-gray-900 dark:text-gray-300 dark:hover:text-white dark:border-gray-500">
                            &#8592;
                        </button>

                        <div class="flex pb-8 mb-6 overflow-x-scroll hide-scroll-bar scroll-ps-6 snap-x"
                            id="scrollContainer">
                            <div class="flex gap-6 flex-nowrap">
                                @include('dashboard.layoutsDash.cardCarousel')
                            </div>
                        </div>

                        <!-- Tombol Next -->
                        <button id="nextButton"
                            class="absolute right-0 -bottom-2.5 w-10 h-10 transform -translate-y-1/2 bg-white hover:bg-gray-300 transition-all duration-500 text-gray-800 p-2 rounded-full border border-gray-300 dark:bg-gray-800 dark:hover:bg-gray-900 dark:text-gray-300 dark:hover:text-white dark:border-gray-500">
                            &#8594;
                        </button>
                    </div>

                </div>
            </div>
            @yield('content')
        </div>
    </div>
    <!-- footer -->

    <!-- js -->
    @include('dashboard.layoutsDash.js')
</body>

</html>

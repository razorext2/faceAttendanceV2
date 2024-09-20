<!DOCTYPE html>
<html lang="en">

<head>
    @include('dashboard.layoutsDash.head')
</head>

<body>
    <div class="relative">
        <img src="{{ asset('assets/img/hero-bg-light.webp')}}" alt="Background Image" class="fixed inset-0 object-cover w-full h-full -z-50" />
        <img src="{{ asset('assets/img/grid.jpg')}}" alt="Background Image" class="fixed inset-0 object-cover w-full h-full -z-40 opacity-20 mix-blend-overlay" />

        <!-- Overlay -->
        <div class="fixed w-full inset-0 -z-40 bg-gray-800 opacity-0 dark:opacity-85"></div>
    </div>


    @if (session('status'))
    <div id="toast-top-right" x-data="{ showToast: true }" x-init="setTimeout(() => showToast = false, 3000)"
        x-show="showToast"
        x-transition:enter="transition ease-in duration-300"
        x-transition:enter-start="transform scale-90 opacity-0"
        x-transition:enter-end="transform scale-100 opacity-100"
        x-transition:leave="transition ease-out duration-300"
        x-transition:leave-start="transform scale-100 opacity-100"
        x-transition:leave-end="transform scale-90 opacity-0"
        class="fixed z-50 flex items-center w-full max-w-sm divide-x rounded-lg right-0 top-[4.5rem] transform scale-90 transition duration-300" role="alert">
        <div id="toast-success" class="border border-gray-200 flex items-center w-full max-w-sm p-4 mb-4 bg-white rounded-lg" role="alert">
            <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                </svg>
                <span class="sr-only">Check icon</span>
            </div>
            <div class="ms-3 text-sm font-normal text-black mt-0.5">
                <x-auth-session-status :status="session('status')" />
            </div>
            <button @click="showToast = false" type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
    </div>
    @endif

    @include('dashboard.layoutsDash.navbar')
    @include('dashboard.layoutsDash.sidebar')
    <div class="p-4 sm:ml-72">

        <div class="p-4 border-2 border-gray-100 border-dashed rounded-lg mt-16 dark:border-gray-800">
            <!-- carousel for cards -->
            <div class="grid grid-cols-1 gap-6 mb-3">
                <div class="relative overflow-hidden">
                    <!-- component -->

                    @include('dashboard.layoutsDash.title')

                    <div class="flex flex-col m-auto p-auto relative">
                        <!-- Tombol Previous -->
                        <button id="prevButton" class="absolute left-0 -bottom-2.5 w-10 h-10  transform -translate-y-1/2 bg-gray-600 hover:bg-gray-400 transition-all duration-500 text-white p-2 rounded-full border border-white dark:bg-gray-800 dark:hover:bg-gray-900 dark:text-gray-300 dark:hover:text-white dark:border-gray-500">
                            &#8592;
                        </button>

                        <div class="flex overflow-x-scroll mb-6 pb-8 hide-scroll-bar scroll-ps-6 snap-x" id="scrollContainer">
                            <div class="flex flex-nowrap gap-6">
                                @include('dashboard.layoutsDash.cardCarousel')
                            </div>
                        </div>

                        <!-- Tombol Next -->
                        <button id="nextButton" class="absolute right-0 -bottom-2.5 w-10 h-10 transform -translate-y-1/2 bbg-gray-600 hover:bg-gray-400 transition-all duration-500 text-white p-2 rounded-full border border-white dark:bg-gray-800 dark:hover:bg-gray-900 dark:text-gray-300 dark:hover:text-white dark:border-gray-500">
                            &#8594;
                        </button>
                    </div>

                </div>
            </div>
            @yield('content')
        </div>
        <!-- @include('dashboard.layoutsDash.footer') -->
    </div>
    <!-- footer -->

    <!-- js -->
    @include('dashboard.layoutsDash.js')
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    @include('dashboard.layoutsDash.head')
</head>

<body>

    @include('dashboard.layoutsDash.navbar')
    @include('dashboard.layoutsDash.sidebar')
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-16">
            <!-- carousel for cards -->
            <div class="grid grid-cols-1 gap-4 mb-4">
                <div class="relative overflow-hidden">
                    <!-- component -->

                    @include('dashboard.layoutsDash.breadcumb')
                    <div class="flex flex-col bg-white m-auto p-auto relative">
                        <!-- Tombol Previous -->
                        <button id="prevButton" class="absolute left-0 -bottom-3 w-10 h-10  transform -translate-y-1/2 bg-gray-300 hover:bg-gray-400 transition-all duration-500 text-white p-2 rounded-full z-20">
                            &#8592;
                        </button>

                        <div class="flex overflow-x-scroll pt-4 mb-6 pb-8 hide-scroll-bar scroll-ps-6 snap-x" id="scrollContainer">
                            <div class="flex flex-nowrap gap-4">
                                @include('dashboard.layoutsDash.cardCarousel')
                            </div>
                        </div>

                        <!-- Tombol Next -->
                        <button id="nextButton" class="absolute right-0 -bottom-3 w-10 h-10 transform -translate-y-1/2 bg-gray-300 hover:bg-gray-400 transition-all duration-500 text-white p-2 rounded-full z-20">
                            &#8594;
                        </button>
                    </div>

                </div>
            </div>
            @yield('content')
        </div>
        @include('dashboard.layoutsDash.footer')
    </div>
    <!-- footer -->

    <!-- js -->
    @include('dashboard.layoutsDash.js')
</body>

</html>
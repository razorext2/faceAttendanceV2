<!DOCTYPE html>
<html lang="en">

<head>
    @include('dashboard.layoutsDash.head')
</head>

<body>
    <img src="{{ asset('assets/img/hero-bg-light.webp')}}" alt="Background Image" class="fixed object-cover bg-cover inset-0 -z-40 top-0 left-40 opacity-30 bg-local" />
    <img src="{{ asset('assets/img/grid.jpg')}}" alt="Background Image" class="fixed inset-0 object-cover w-full h-full -z-10 opacity-10 mix-blend-overlay" />

    @include('dashboard.layoutsDash.navbar')
    @include('dashboard.layoutsDash.sidebar')
    <div class="p-4 sm:ml-72">

        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg mt-16">
            <!-- carousel for cards -->
            <div class="grid grid-cols-1 gap-6 mb-3">
                <div class="relative overflow-hidden">
                    <!-- component -->

                    @include('dashboard.layoutsDash.title')

                    <div class="flex flex-col m-auto p-auto relative">
                        <!-- Tombol Previous -->
                        <button id="prevButton" class="absolute left-0 -bottom-3 w-10 h-10  transform -translate-y-1/2 bg-gray-300 hover:bg-gray-400 transition-all duration-500 text-white p-2 rounded-full z-20">
                            &#8592;
                        </button>

                        <div class="flex overflow-x-scroll mb-6 pb-8 hide-scroll-bar scroll-ps-6 snap-x" id="scrollContainer">
                            <div class="flex flex-nowrap gap-6">
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
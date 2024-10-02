@extends('layouts.app')
@section('content')

<div class="relative flex min-h-screen flex-col justify-center overflow-hidden py-32" id="Home" data-aos="fade-down">
    <div class="relative">
        <img src="{{ asset('assets/img/hero-bg-light.webp')}}" alt="Background Image" class="fixed inset-0 object-cover w-full h-full -z-50 opacity-40 dark:opacity-80" />
        <img src="{{ asset('assets/img/grid.webp')}}" alt="Background Image" class="fixed inset-0 object-cover w-full h-full -z-40 opacity-40 mix-blend-overlay" />

        <!-- Overlay -->
        <div class="fixed w-full inset-0 -z-40 bg-gray-800 opacity-0 dark:opacity-70"></div>
    </div>

    <div class="relative z-10 grid grid-cols-1 mb-10 px-6">
        <div class="text-left md:text-center flex flex-col items-center justify-center h-full py-5">
            <h1 class="text-4xl font-bold mb-4 dark:text-white">Verifikasi Wajah Pegawai</h1>
            <p class="text-lg dark:text-gray-300">
                Masukkan kode pegawai anda, kemudian start kamera <br />
                Proses pengambilan gambar akan dilakukan sebanyak <span class="font-bold dark:text-white"> DUA </span> kali <br />
            </p>
        </div>
    </div>

    <div id="Scan" class="relative bg-white/70 p-0 ring-1 ring-black lg:mx-auto lg:rounded-lg lg:p-4 dark:bg-gray-800/70 dark:ring-gray-500" data-aos="zoom-in-up" data-aos-delay="50">
        <form id="photoForm" action="{{ route('photo.registProcess') }}" method="POST" enctype="multipart/form-data">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 h-auto lg:w-[900px]">
                @csrf
                @php
                $path = "assets/img/noCamera.webp";
                @endphp
                <div class="video-container col-span-1 lg:col-span-2 text-center h-auto" data-aos="zoom-in" data-aos-delay="100">
                    <video id="video" class="flex w-full h-auto lg:w-[640px] lg:h-[480px] border border-gray-200 p-0 lg:rounded-lg object-cover ring-1 dark:border-gray-500" autoplay style="background: url({{$path}}) center center / cover no-repeat;" data-aos="zoom-in" data-aos-delay="100">
                    </video>

                    <canvas id="overlay" class="flex w-full h-auto absolute top-0 left-0 p-0 lg:rounded-lg object-cover"></canvas>
                    <div class="inline-flex mt-3 w-full px-3 lg:px-0">
                        <div class=" relative w-full">
                            <input type="text" id="floating_outlined" id="kodePegawai" name="kode_pegawai" class="block border-black px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer dark:border-gray-500 dark:text-white dark:bg-gray-500" placeholder=" " />

                            <label for="floating_outlined" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1 dark:bg-gray-500 dark:text-white dark:peer-focus:text-white dark:peer-focus:rounded-xl">Kode Pegawai</label>
                        </div>
                    </div>
                    <div class="inline-flex mt-3 w-full px-3 lg:px-0 md:px-3" data-aos="fade-right" data-aos-delay="150">
                        <button type="button" id="capturePhoto" class="bg-blue-400 p-2 w-full rounded-lg font-bold text-white ring-1 ring-black hover:bg-blue-700 dark:bg-blue-800 dark:hover:bg-blue-900 dark:text-white dark:ring-gray-500">Start Kamera</button>
                        <input type="hidden" id="photo1Data" name="photo1">
                        <input type="hidden" id="photo2Data" name="photo2">
                    </div>

                    <div class="inline-flex mt-3 w-full px-3 lg:px-0" data-aos="fade-left" data-aos-delay="150">
                        <button type="submit" class="bg-green-400 p-2 w-full rounded-lg font-bold text-white ring-1 ring-black hover:bg-green-700 dark:bg-green-800 dark:hover:bg-green-900 dark:text-white dark:ring-gray-500">Upload Photos</button>
                    </div>

                    <div class="w-full h-auto mt-3 rounded-lg px-3 lg:px-0" data-aos="fade-right" data-aos-delay="150">
                        <div class="p-3 text-left ring-1 min-h-10 h-auto ring-black rounded-lg dark:ring-gray-500 dark:bg-gray-800">
                            <p class="text-sm font-bold text-black dark:text-white">Log</p>
                            <hr class="bg-black my-2">
                            <pre id="consoleOutput" class="max-h-32 overflow-y-auto scroll-smooth dark:text-white"></pre>
                        </div>
                    </div>
                </div>

                <div class="col-span-1 lg:col-span-1 px-3 pb-3 md:px-3 md:pb-3 lg:p-0" data-aos="zoom-in" data-aos-delay="100">
                    <div class="grid grid-cols-1 gap-4">
                        <div class="p-2 ring-1 ring-black rounded-lg text-center dark:ring-gray-500 dark:bg-gray-800" data-aos="fade-left" data-aos-delay="100">
                            <p class="text-xl font-bold text-black dark:text-white">INFORMASI</p>
                        </div>
                        <div class="relative flex flex-col gap-4 lg:gap-0 rounded-lg md:flex-row lg:flex-col w-full" data-aos="fade-right" data-aos-delay="100">
                            <div class="lg:object-fill w-full h-full rounded-lg lg:w-full md:rounded-lg">
                                <img id="canvLogo" class="lg:object-fill w-full h-full rounded-lg ring-1 ring-black dark:ring-gray-500" src="{{asset('assets/img/noImage.webp')}}" alt="">
                                <canvas id="canvRegist" class="object-cover w-full h-full rounded-lg ring-1 ring-black dark:ring-gray-500 absolute top-0 left-0"></canvas>
                            </div>
                        </div>
                        <div class="relative flex flex-col gap-4 lg:gap-0 rounded-lg md:flex-row lg:flex-col w-full" data-aos="fade-left" data-aos-delay="100">
                            <div class="lg:object-fill w-full h-full rounded-lg lg:w-full md:rounded-lg">
                                <img id="canvLogo" class="lg:object-fill w-full h-full rounded-lg ring-1 ring-black dark:ring-gray-500" src="{{asset('assets/img/noImage.webp')}}" alt="">
                                <canvas id="canvRegistt" class="object-cover w-full h-full rounded-lg ring-1 ring-black dark:ring-gray-500 absolute top-0 left-0"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

</div>

@endsection
@extends('layouts.app')
@section('content')
    <div class="relative flex flex-col justify-center min-h-screen overflow-hidden md:py-12 lg:py-32" id="Home">
        <div class="relative">
            <img src="{{ asset('assets/img/hero-bg-light.webp') }}" alt="Background Image"
                class="fixed inset-0 object-cover w-full h-full -z-50 opacity-40 dark:opacity-80" />
            <img src="{{ asset('assets/img/grid.webp') }}" alt="Background Image"
                class="fixed inset-0 object-cover w-full h-full -z-40 opacity-40 mix-blend-overlay" />

            <!-- Overlay -->
            <div class="fixed inset-0 w-full bg-gray-800 opacity-0 -z-40 dark:opacity-70"></div>
        </div>

        <div class="relative z-10 hidden px-6 mb-10 md:grid md:grid-cols-1" data-aos="fade-down">
            <div
                class="items-center justify-center hidden h-full py-5 text-left text-black md:text-center md:flex md:flex-col">
                <h1 class="mb-4 text-4xl font-bold dark:text-white">FaceID Attendance System</h1>
                <p class="text-lg dark:text-gray-300">
                    Klik tombol start, kemudian biarkan aplikasi mendeteksi wajah anda. <br />
                    Informasi mengenai anda akan muncul di bagian sebelah kanan<br />
                </p>
                <p class="dark:text-gray-300">Tekan tombol <span
                        class="text-xl font-bold text-black dark:text-white">[-]</span> untuk melihat tutorial</p>
            </div>
        </div>

        <div id="Scan"
            class="relative p-0 bg-white/70 ring-1 ring-black lg:mx-auto lg:rounded-lg lg:p-4 dark:bg-gray-800/70 dark:ring-gray-500"
            data-aos="zoom-in-up" data-aos-delay="50">
            <div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-4 h-auto lg:w-[900px]">
                <div class="h-auto col-span-1 p-3 text-center video-container lg:col-span-2 lg:p-0" data-aos="zoom-in"
                    data-aos-delay="100">
                    <video id="video"
                        class="flex w-full h-60 md:h-auto lg:w-[640px] lg:h-[480px] p-0 rounded-lg object-cover ring-1 ring-black dark:ring-gray-500"
                        autoplay style="background: url('assets/img/noCamera.webp') center center / cover no-repeat;"
                        data-aos="zoom-in" data-aos-delay="100">
                    </video>
                    <canvas id="overlay"
                        class="flex w-full h-60 md:h-auto lg:w-[640px] lg:h-[480px] absolute top-0 left-0 p-0 rounded-lg object-cover"></canvas>
                    <div class="inline-flex w-full mt-3 lg:px-0">
                        <button id="startButton"
                            class="w-1/2 p-2 mr-2 font-bold text-white bg-blue-400 rounded-lg ring-1 ring-black hover:bg-blue-700 dark:bg-blue-800 dark:hover:bg-blue-900 dark:text-white dark:ring-gray-500">Start</button>
                        <button id="endAttendance"
                            class="w-1/2 p-2 font-bold text-white bg-red-400 rounded-lg ring-1 ring-black hover:bg-red-700 dark:bg-red-800 dark:hover:bg-red-900 dark:text-white dark:ring-gray-500">Stop</button>
                    </div>
                    <div class="w-full h-auto mt-3 rounded-lg lg:px-0 dark:bg-gray-800">
                        <div class="h-auto p-3 text-left rounded-lg ring-1 min-h-10 ring-black dark:ring-gray-500">
                            <p class="text-sm font-bold text-black dark:text-white">Log</p>
                            <hr class="my-2 bg-black dark:bg-gray-800">
                            <pre id="consoleOutput" class="overflow-y-auto max-h-32 scroll-smooth dark:text-white"></pre>
                        </div>
                    </div>
                </div>

                <!-- #region -->
                <div class="col-span-1 px-3 pb-3 lg:col-span-1 md:px-3 md:pb-3 lg:p-0" data-aos="zoom-in"
                    data-aos-delay="100">
                    <div class="p-2 mb-4 text-center rounded-lg ring-1 ring-black dark:ring-gray-500 dark:bg-gray-800"
                        data-aos="fade-left" data-aos-delay="100">
                        <p class="text-xl font-bold text-black dark:text-white">INFORMASI</p>
                    </div>

                    <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-1">

                        <div class="relative flex flex-col w-full gap-4 rounded-lg lg:gap-0 md:flex-row lg:flex-col"
                            data-aos="fade-right" data-aos-delay="100">
                            <div class="w-full h-full rounded-lg lg:object-fill lg:w-full md:rounded-lg">
                                <img id="canvLogo"
                                    class="object-cover w-full rounded-lg lg:object-fill h-60 md:h-auto lg:h-full ring-1 ring-black dark:ring-gray-500"
                                    src="{{ asset('assets/img/noImage.webp') }}" alt="">
                                <canvas id="canvAttend"
                                    class="absolute top-0 left-0 object-cover w-full rounded-lg h-60 md:h-full lg:h-full ring-1 ring-black dark:ring-gray-500"></canvas>
                            </div>
                        </div>

                        <div class="relative flex flex-col w-full h-auto p-4 leading-normal rounded-lg lg:justify-between ring-1 ring-black dark:ring-gray-500"
                            data-aos="fade-left" data-aos-delay="100">
                            <div id="pegawaiInfo"></div>
                            <div id="pegawaiKosong">
                                <ul class="space-y-4 text-left text-gray-500 dark:text-white">
                                    <li class="flex items-center space-x-3 rtl:space-x-reverse">
                                        <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                        </svg>
                                        <span>Lokasi: </span>
                                    </li>
                                    <li class="flex items-center space-x-3 rtl:space-x-reverse">
                                        <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                        </svg>
                                        <span>Kode Pegawai: </span>
                                    </li>
                                    <li class="flex items-center space-x-3 rtl:space-x-reverse">
                                        <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                        </svg>
                                        <span>NIK: </span>
                                    </li>
                                    <li class="flex items-center space-x-3 rtl:space-x-reverse">
                                        <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                        </svg>
                                        <span>Nama: </span>
                                    </li>
                                    <li class="flex items-center space-x-3 rtl:space-x-reverse">
                                        <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                        </svg>
                                        <span>Jabatan: </span>
                                    </li>
                                    <li class="flex items-center space-x-3 rtl:space-x-reverse">
                                        <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                        </svg>
                                        <span>Golongan: </span>
                                    </li>
                                    <li class="flex items-center space-x-3 rtl:space-x-reverse">
                                        <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                        </svg>
                                        <span>Waktu Masuk: </span>
                                    </li>
                                    <li class="flex items-center space-x-3 rtl:space-x-reverse">
                                        <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                        </svg>
                                        <span>Waktu Keluar: </span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        {{-- <div class="w-full mt-3 rounded-lg h-52 lg:hidden lg:px-0 dark:bg-gray-800">
                            <div class="h-auto p-3 text-left rounded-lg ring-1 min-h-10 ring-black dark:ring-gray-500">
                                <p class="text-sm font-bold text-black dark:text-white">Log</p>
                                <hr class="my-2 bg-black dark:bg-gray-800">
                                <pre id="consoleOutput" class="overflow-y-auto max-h-32 scroll-smooth dark:text-white"></pre>
                            </div>
                        </div> --}}

                    </div>
                </div>



            </div>
        </div>
    </div>
@endsection

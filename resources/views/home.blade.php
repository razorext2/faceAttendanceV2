@extends('layouts.app')
@section('content')

<div class="relative flex min-h-screen flex-col justify-center overflow-hidden py-32" id="Home">
    <div class="relative">
        <img src="{{ asset('assets/img/hero-bg-light.webp')}}" alt="Background Image" class="fixed inset-0 object-cover w-full h-full -z-50 opacity-40 dark:opacity-80" />
        <img src="{{ asset('assets/img/grid.webp')}}" alt="Background Image" class="fixed inset-0 object-cover w-full h-full -z-40 opacity-40 mix-blend-overlay" />

        <!-- Overlay -->
        <div class="fixed w-full inset-0 -z-40 bg-gray-800 opacity-0 dark:opacity-70"></div>
    </div>

    <div class="relative z-10 grid grid-cols-1 mb-10 px-6" data-aos="fade-down">
        <div class="text-left md:text-center flex flex-col items-center justify-center h-full py-5 text-black">
            <h1 class="text-4xl font-bold mb-4 dark:text-white">FaceID Attendance System</h1>
            <p class="text-lg dark:text-gray-300">
                Klik tombol start, kemudian biarkan aplikasi mendeteksi wajah anda. <br />
                Informasi mengenai anda akan muncul di bagian sebelah kanan<br />
            </p>
            <p class="dark:text-gray-300">Tekan tombol <span class="font-bold text-xl text-black dark:text-white">[-]</span> untuk melihat tutorial</p>
        </div>
    </div>

    <div id="Scan" class="relative bg-white/70 p-0 ring-1 ring-black lg:mx-auto lg:rounded-lg lg:p-4 dark:bg-gray-800/70 dark:ring-gray-500" data-aos="zoom-in-up" data-aos-delay="50">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 h-auto lg:w-[900px]">
            <div class="video-container col-span-1 lg:col-span-2 text-center h-auto" data-aos="zoom-in" data-aos-delay="100">
                <video id="video" class="flex w-full h-auto lg:w-[640px] lg:h-[480px] border border-gray-200 p-0 lg:rounded-lg object-cover ring-1 ring-black dark:ring-gray-500 dark:border-gray-500" autoplay style="background: url('assets/img/noCamera.webp') center center / cover no-repeat;" data-aos="zoom-in" data-aos-delay="100">
                </video>
                <canvas id="overlay" class="flex w-full h-auto lg:w-[640px] lg:h-[480px] absolute top-0 left-0 p-0 lg:rounded-lg object-cover"></canvas>
                <div class="inline-flex mt-3 w-full px-3 lg:px-0 md:px-3">
                    <button id="startButton" class="bg-blue-400 p-2 w-1/2 mr-2 rounded-lg font-bold text-white ring-1 ring-black hover:bg-blue-700 dark:bg-blue-800 dark:hover:bg-blue-900 dark:text-white dark:ring-gray-500">Start</button>
                    <button id="endAttendance" class="bg-red-400 p-2 w-1/2 rounded-lg font-bold text-white ring-1 ring-black hover:bg-red-700 dark:bg-red-800 dark:hover:bg-red-900 dark:text-white dark:ring-gray-500">Stop</button>
                </div>
                <div class="w-full h-auto mt-3 rounded-lg px-3 lg:px-0 dark:bg-gray-800">
                    <div class="p-3 text-left ring-1 min-h-10 h-auto ring-black rounded-lg dark:ring-gray-500">
                        <p class="text-sm font-bold text-black dark:text-white">Log</p>
                        <hr class="bg-black my-2 dark:bg-gray-800">
                        <pre id="consoleOutput" class="max-h-32 overflow-y-auto scroll-smooth dark:text-white"></pre>
                    </div>
                </div>
            </div>

            <!-- #region -->
            <div class="col-span-1 lg:col-span-1 px-3 pb-3 md:px-3 md:pb-3 lg:p-0" data-aos="zoom-in" data-aos-delay="100">
                <div class="grid grid-cols-1 gap-4">
                    <div class="p-2 ring-1 ring-black rounded-lg text-center dark:ring-gray-500 dark:bg-gray-800" data-aos="fade-left" data-aos-delay="100">
                        <p class="text-xl font-bold text-black dark:text-white">INFORMASI</p>
                    </div>

                    <div class="relative flex flex-col gap-4 lg:gap-0 rounded-lg md:flex-row lg:flex-col w-full" data-aos="fade-right" data-aos-delay="100">
                        <div class="lg:object-fill w-full h-full rounded-lg lg:w-full md:rounded-lg">
                            <img id="canvLogo" class="lg:object-fill w-full h-full rounded-lg ring-1 ring-black dark:ring-gray-500" src="{{asset('assets/img/noImage.webp')}}" alt="">
                            <canvas id="canvAttend" class="object-cover w-full h-full rounded-lg ring-1 ring-black absolute top-0 left-0 dark:ring-gray-500"></canvas>
                        </div>
                    </div>

                    <div class="relative flex flex-col h-auto lg:justify-between p-4 leading-normal ring-1 ring-black rounded-lg w-full dark:ring-gray-500" data-aos="fade-left" data-aos-delay="100">
                        <div id="pegawaiInfo"></div>

                        <div id="pegawaiKosong">
                            <ul class="space-y-4 text-left text-gray-500 dark:text-white">
                                <li class="flex items-center space-x-3 rtl:space-x-reverse">
                                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                    </svg>
                                    <span>Lokasi: Titi Kuning</span>
                                </li>
                                <li class="flex items-center space-x-3 rtl:space-x-reverse">
                                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                    </svg>
                                    <span>Kode Pegawai: </span>
                                </li>
                                <li class="flex items-center space-x-3 rtl:space-x-reverse">
                                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                    </svg>
                                    <span>NIK: </span>
                                </li>
                                <li class="flex items-center space-x-3 rtl:space-x-reverse">
                                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                    </svg>
                                    <span>Nama: </span>
                                </li>
                                <li class="flex items-center space-x-3 rtl:space-x-reverse">
                                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                    </svg>
                                    <span>Jabatan: </span>
                                </li>
                                <li class="flex items-center space-x-3 rtl:space-x-reverse">
                                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                    </svg>
                                    <span>Waktu Masuk: </span>
                                </li>
                                <li class="flex items-center space-x-3 rtl:space-x-reverse">
                                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                    </svg>
                                    <span>Waktu Keluar: </span>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>



        </div>
    </div>
</div>

@endsection
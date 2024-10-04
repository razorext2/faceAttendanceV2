@extends('dashboard.layoutsDash.app')
@section('content')

<div class="w-full">
    <form action="{{ route('golongan.store') }}" class="mt-4" method="POST">
        @csrf
        <div class="w-full md:max-w-lg">
            <div class="w-full space-y-6 xl:col-span-2">
                <div class="p-4 sm:p-6 bg-gray-50 shadow-sm rounded-xl ring-1 ring-gray-200 dark:bg-gray-800 dark:ring-gray-500">
                    <div class="max-w-xl">
                        <header class="flex flex-row">
                            <a href="{{ route('dashboard.golongan') }}" class="mr-3 px-2.5 mb-4 md:px-4 py-2.5 align-middle ring-1 ring-red-700 hover:bg-red-300 rounded-lg flex flex-row dark:bg-red-800 dark:hover:bg-red-900 dark:text-white dark:ring-gray-500">
                                <svg class="dark:fill-white" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 1024 1024" fill="#000000" class="icon" version="1.1">
                                    <path d="M669.6 849.6c8.8 8 22.4 7.2 30.4-1.6s7.2-22.4-1.6-30.4l-309.6-280c-8-7.2-8-17.6 0-24.8l309.6-270.4c8.8-8 9.6-21.6 2.4-30.4-8-8.8-21.6-9.6-30.4-2.4L360.8 480.8c-27.2 24-28 64-0.8 88.8l309.6 280z" fill="" />
                                </svg>
                                Kembali
                            </a>
                            <h2 class="text-lg font-medium text-gray-900 mt-2 dark:text-white">
                                {{ __('Tambah Data Golongan') }}
                            </h2>
                        </header>
                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-300">
                            {{ __('Silahkan sesuaikan data dibawah ini dengan data yang benar.') }}
                        </p>

                        <div class="grid md:grid-cols-2 gap-4 sm:gap-6 my-4">
                            <div class="w-full">
                                <label for="nama_golongan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Golongan</label>
                                <input type="text" name="nama_golongan" id="nama_golongan" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Nama Golongan" required="">
                            </div>
                            <div class="w-full">
                                <label for="alias" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alias</label>
                                <input type="text" name="alias" id="alias" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Alias" required="">
                            </div>
                        </div>

                        <header class="flex flex-row">
                            <h2 class="text-lg font-medium text-gray-900 dark:text-white">
                                {{ __('Atur Jadwal') }}
                            </h2>
                        </header>
                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-300">
                            {{ __('Atur jam masuk dan jam keluar untuk setiap hari.') }}
                        </p>

                        <div id="jadwal" class="sm:my-4 rounded-lg">
                            <!-- Looping for each day -->
                            @php
                            $days = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
                            @endphp
                            @foreach($days as $day)
                            <div class="w-full border-b-gray-500 border-b">
                                <div class="grid sm:flex gap-2 md:gap-4 py-4">

                                    <div class="sm:flex-none w-20">
                                        <h3 class="text-md font-semibold text-gray-700 dark:text-white mt-0 md:mt-9">{{ $day }}</h3>
                                    </div>

                                    <div class="sm:flex-1 w-full">
                                        <label for="jam_masuk_{{ strtolower($day) }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jam Masuk</label>
                                        <input type="time" name="jam_masuk_{{ strtolower($day) }}" id="jam_masuk_{{ strtolower($day) }}" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 block w-full p-2.5" required>
                                    </div>

                                    <div class="sm:flex-1 w-full">
                                        <label for="jam_keluar_{{ strtolower($day) }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jam Keluar</label>
                                        <input type="time" name="jam_keluar_{{ strtolower($day) }}" id="jam_keluar_{{ strtolower($day) }}" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 block w-full p-2.5" required>
                                    </div>

                                </div>
                            </div>

                            @endforeach
                        </div>

                        <div class="flex items-center mt-4">
                            <button type="submit" class="ring-1 ring-blue-700 text-gray-900 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 focus:text-white hover:text-white font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-800 dark:text-white dark:hover:bg-blue-900 dark:ring-gray-500">
                                Submit
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
@extends('dashboard.layoutsDash.app')
@section('content')

<div class="grid grid-cols-1 xl:grid-cols-3 gap-4 mb-4">

    <div role="status" class="w-full ring-1 ring-gray-200 rounded-lg shadow-sm animate-pulse md:p-6">
        <div class="flex items-center justify-center h-48 mb-4 bg-gray-300 rounded">
            <svg class="w-10 h-10 text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                <path d="M14.066 0H7v5a2 2 0 0 1-2 2H0v11a1.97 1.97 0 0 0 1.934 2h12.132A1.97 1.97 0 0 0 16 18V2a1.97 1.97 0 0 0-1.934-2ZM10.5 6a1.5 1.5 0 1 1 0 2.999A1.5 1.5 0 0 1 10.5 6Zm2.221 10.515a1 1 0 0 1-.858.485h-8a1 1 0 0 1-.9-1.43L5.6 10.039a.978.978 0 0 1 .936-.57 1 1 0 0 1 .9.632l1.181 2.981.541-1a.945.945 0 0 1 .883-.522 1 1 0 0 1 .879.529l1.832 3.438a1 1 0 0 1-.031.988Z" />
                <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.98 2.98 0 0 0 .13 5H5Z" />
            </svg>
        </div>
        <div class="h-2.5 bg-gray-200 rounded-full w-48 mb-4"></div>
        <div class="h-2 bg-gray-200 rounded-full mb-2.5"></div>
        <div class="h-2 bg-gray-200 rounded-full mb-2.5"></div>
        <div class="h-2 bg-gray-200 rounded-full"></div>
        <div class="flex items-center mt-4">
            <svg class="w-10 h-10 me-3 text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
            </svg>
            <div>
                <div class="h-2.5 bg-gray-200 rounded-full w-32 mb-2"></div>
                <div class="w-48 h-2 bg-gray-200 rounded-full"></div>
            </div>
        </div>
        <span class="sr-only">Loading...</span>
    </div>

    <div class="flex items-center justify-center">

        <div class="w-full bg-white rounded-lg ring-1 ring-gray-200 shadow p-4 md:p-6">
            <div class="flex justify-between mb-5">
                <div>
                    <h5 class="leading-none text-3xl font-bold text-gray-900 pb-2">$12,423</h5>
                    <p class="text-base font-normal text-gray-500">Sales this week</p>
                </div>
                <div
                    class="flex items-center px-2.5 py-0.5 text-base font-semibold text-green-500 text-center">
                    23%
                    <svg class="w-3 h-3 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13V1m0 0L1 5m4-4 4 4" />
                    </svg>
                </div>
            </div>
            <div id="tooltip-chart"></div>
            <div class="grid grid-cols-1 items-center border-gray-200 border-t justify-between mt-5">
                <div class="flex justify-between items-center pt-5">
                    <!-- Button -->
                    <button
                        id="dropdownDefaultButton"
                        data-dropdown-toggle="lastDaysdropdown"
                        data-dropdown-placement="bottom"
                        class="text-sm font-medium text-gray-500 hover:text-gray-900 text-center inline-flex items-center"
                        type="button">
                        Last 7 days
                        <svg class="w-2.5 m-2.5 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="lastDaysdropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                        <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Yesterday</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Today</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Last 7 days</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Last 30 days</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Last 90 days</a>
                            </li>
                        </ul>
                    </div>
                    <a
                        href="#"
                        class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-600 hover:text-blue-700 hover:bg-gray-100 px-3 py-2">
                        Sales Report
                        <svg class="w-2.5 h-2.5 ms-1.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

    </div>

    <div class="grid grid-cols-1 w-full">
        <div class="flex flex-col bg-white shadow-sm ring-1 ring-gray-200 p-4 rounded-lg">
            <span>
                <time class="text-md font-semibold text-gray-900">Absen Masuk, {{ \Carbon\Carbon::today()->locale('id')->isoFormat('D MMMM YYYY') }}</time>
            </span>
            <ul class="max-h-48 overflow-y-auto text-gray-700" aria-labelledby="dropdownUsersButton">

                @if(!empty($attendance_today))
                @foreach ( $attendance_today as $at )
                <li>
                    <p class="flex items-center p-2 bg-[#7678ed] text-white text-xs hover:bg-[#5d5ece] my-2 rounded-lg">
                        <img class="w-6 h-6 me-2 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="Jese image">
                        {{ $at->pegawaiRelasi->full_name }}, melakukan absensi
                        <span class="bg-green-100 text-green-800 text-xs font-medium mx-1 px-1 py-0.5 rounded dark:bg-green-900 dark:text-green-300">
                            Masuk
                        </span>
                        pada pukul {{ \Carbon\Carbon::parse($at->jam_masuk)->format('H:i') }}
                    </p>
                </li>
                @endforeach
                @else
                <li>
                    <span class="flex items-center my-2 rounded-lg">
                        Belum ada absensi hari ini
                    </span>
                </li>
                @endif

            </ul>

        </div>

        <div class="flex flex-col mt-3 bg-white shadow-sm ring-1 ring-gray-200 p-4 rounded-lg">
            <span>
                <time class="text-md font-semibold text-gray-900">Absen Keluar, {{ \Carbon\Carbon::today()->locale('id')->isoFormat('D MMMM YYYY') }}</time>
            </span>
            <ul class="max-h-48 overflow-y-auto text-gray-700" aria-labelledby="dropdownUsersButton">
                @foreach ( $attendance_out_today as $at )
                <li>
                    <p class="flex items-center p-2 bg-[#7678ed] text-white text-xs hover:bg-[#5d5ece] my-2 rounded-lg">
                        <img class="w-6 h-6 me-2 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="Jese image">
                        {{ $at->pegawaiRelasi->nick_name }}, melakukan absensi
                        <span class="bg-red-100 text-red-800 text-xs font-medium mx-1 px-1 py-0.5 rounded dark:bg-red-900 dark:text-red-300">
                            Keluar
                        </span>
                        pada pukul {{ \Carbon\Carbon::parse($at->jam_keluar)->format('H:i') }}
                    </p>
                </li>
                @endforeach
            </ul>
        </div>

    </div>

</div>

<div class="grid grid-cols-1 gap-6">
    <div class="flex items-center justify-center rounded-lg bg-gray-50 h-auto p-4 ring-1 ring-gray-200 shadow-sm">
        <table id="filter-table">
            <thead>
                <tr>
                    <th>
                        <span class="flex items-center">
                            No
                            <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                            </svg>
                        </span>
                    </th>
                    </th>
                    <th>
                        <span class="flex items-center">
                            Waktu
                            <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                            </svg>
                        </span>
                    </th>
                    <th>
                        <span class="flex items-center">
                            Kode Pegawai
                            <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                            </svg>
                        </span>
                    </th>
                    <th>
                        <span class="flex items-center">
                            Full Name
                            <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                            </svg>
                        </span>
                    </th>
                    <th>
                        <span class="flex items-center">
                            Nick Name
                            <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                            </svg>
                        </span>
                    </th>
                    <th>
                        <span class="flex items-center">
                            No Telepon
                            <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                            </svg>
                        </span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($attendance_all as $index => $attendance)
                <tr class="hover:bg-gray-100 hover:text-black hover:font-semibold">
                    <td class="border-b">{{ $index + 1 }}</td>
                    <td class="border-b flex flex-col text-center">
                        <!-- jam masuk -->
                        @if ($attendance['jam_masuk'])
                        <span class="w-3/4 my-1 px-2 py-1 rounded-lg text-black ring-1 ring-green-400 shadow-sm hover:bg-green-300">
                            Masuk : {{ \Carbon\Carbon::parse($attendance['jam_masuk'])->format('H:i') }}
                        </span>
                        @else
                        <span class="w-3/4 my-1 px-2 py-1 rounded-lg text-black ring-1 ring-red-400 shadow-sm bg-red-300">
                            Belum Absen
                        </span>
                        @endif

                        <!-- jam keluar -->
                        @if ($attendance['latest_jam_keluar'])
                        <span class="w-3/4 my-1 px-2 py-1 rounded-lg text-black ring-1 ring-red-400 shadow-sm hover:bg-red-300">
                            Keluar : {{ \Carbon\Carbon::parse($attendance['latest_jam_keluar'])->format('H:i') }}
                        </span>
                        @else
                        <span class="w-3/4 my-1 px-2 py-1 rounded-lg text-black ring-1 ring-red-400 shadow-sm bg-red-300">
                            Belum Absen
                        </span>
                        @endif

                    </td>
                    <td class="border-b">{{ $attendance['kode_pegawai'] }}</td>
                    <td class="border-b">{{ $attendance['full_name'] }}</td>
                    <td class="border-b">{{ $attendance['nick_name'] ?? 'N/A' }}</td>
                    <td class="border-b">{{ $attendance['no_telp'] ?? 'N/A' }}</td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</div>

@endsection
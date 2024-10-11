@extends('dashboard.layoutsDash.app')
@section('content')

    <div class="grid grid-cols-1 gap-0 mb-4 xl:grid-cols-3 xl:gap-4">

        <!-- Chart -->
        <div class="flex items-center justify-center col-span-2 mb-4 xl:mb-0">
            <div class="w-full p-4 bg-white border border-gray-300 rounded-xl md:p-6 dark:bg-gray-800 dark:border-gray-500">
                <div class="flex justify-between mb-5">
                    <div>
                        <h5 class="mb-2 text-3xl font-bold leading-none text-gray-900 dark:text-white">{{ $yearNow }}
                        </h5>
                        <p class="text-base font-normal text-gray-500 dark:text-gray-300">Data 7 hari kebelakang</p>
                    </div>
                    <div
                        class="flex items-center px-2.5 py-0.5 text-base font-semibold text-green-500 text-center dark:text-white">
                        {{ $formattedDateRange }}
                    </div>
                </div>
                <div id="tooltip-chart" data-late-counts='@json($lateCounts)'
                    data-ontime-counts='@json($ontimeCounts)' data-outtime-counts="@json($outtimeCounts)"
                    data-fast-counts='@json($fastCounts)' data-dates='@json($dates)'></div>
                <div
                    class="grid items-center justify-between grid-cols-1 mt-5 border-t border-gray-200 dark:border-gray-500">
                    <div class="flex items-center justify-between pt-5">
                        <a href="{{ route('attendanceIn.view') }}"
                            class="inline-flex items-center px-3 py-2 text-sm font-semibold text-blue-600 uppercase rounded-xl hover:text-blue-700 hover:bg-gray-100 dark:hover:bg-gray-900">
                            Absen masuk
                            <svg class="w-2.5 h-2.5 ms-1.5 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 9 4-4-4-4" />
                            </svg>
                        </a>

                        <a href="{{ route('attendanceOut.view') }}"
                            class="inline-flex items-center px-3 py-2 text-sm font-semibold text-red-600 uppercase rounded-xl hover:text-red-700 hover:bg-gray-100 dark:hover:bg-gray-900">
                            Absen keluar
                            <svg class="w-2.5 h-2.5 ms-1.5 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 9 4-4-4-4" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Chart -->

        <!-- Notification -->
        <div class="grid grid-cols-1">

            <div class="flex flex-col p-4 bg-white border border-gray-300 rounded-xl dark:bg-gray-800 dark:border-gray-500">
                <span>
                    <time class="font-semibold text-gray-900 text-md dark:text-white">Absen Masuk,
                        {{ \Carbon\Carbon::today()->locale('id')->isoFormat('D MMMM YYYY') }}</time>
                </span>
                <ul class="overflow-y-auto text-gray-700 h-44" aria-labelledby="dropdownUsersButton">

                    @if (!empty($attendance_today))
                        @foreach ($attendance_today as $at)
                            <li>
                                <p
                                    class="flex items-center p-2 bg-[#7678ed] text-white text-xs hover:bg-[#5d5ece] my-2 rounded-lg dark:bg-green-700 dark:hover:bg-green-800">
                                    <img class="w-6 h-6 rounded-full me-2"
                                        src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                                        alt="Jese image">
                                    {{ $at->pegawaiRelasi->full_name ?? 'N/A' }}, melakukan absensi
                                    <span
                                        class="bg-green-100 text-green-800 text-xs font-medium mx-1 px-1 py-0.5 rounded dark:bg-green-900 dark:text-green-300">
                                        Masuk
                                    </span>
                                    pada pukul {{ \Carbon\Carbon::parse($at->jam_masuk)->format('H:i') }}
                                </p>
                            </li>
                        @endforeach
                    @else
                        <li>
                            <span class="flex items-center my-2 rounded-xl">
                                Belum ada absensi hari ini
                            </span>
                        </li>
                    @endif

                </ul>
            </div>

            <div
                class="flex flex-col p-4 mt-3 bg-white border border-gray-300 rounded-xl dark:bg-gray-800 dark:border-gray-500">
                <span>
                    <time class="font-semibold text-gray-900 text-md dark:text-white">Absen Keluar,
                        {{ \Carbon\Carbon::today()->locale('id')->isoFormat('D MMMM YYYY') }}</time>
                </span>
                <ul class="overflow-y-auto text-gray-700 h-44" aria-labelledby="dropdownUsersButton">
                    @foreach ($attendance_out_today as $at)
                        <li>
                            <p
                                class="flex items-center p-2 bg-[#7678ed] text-white text-xs hover:bg-[#5d5ece] my-2 rounded-lg dark:bg-red-700 dark:hover:bg-red-800">
                                <img class="w-6 h-6 rounded-full me-2"
                                    src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="Jese image">
                                {{ $at->pegawaiRelasi->nick_name ?? 'N/A' }}, melakukan absensi
                                <span
                                    class="bg-red-100 text-red-800 text-xs font-medium mx-1 px-1 py-0.5 rounded dark:bg-red-900 dark:text-red-300">
                                    Keluar
                                </span>
                                pada pukul {{ \Carbon\Carbon::parse($at->jam_keluar)->format('H:i') }}
                            </p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!-- End Notification -->
    </div>

    <div class="grid grid-cols-1 gap-6">
        <div
            class="flex items-center justify-center h-auto p-4 bg-white border border-gray-300 shadow-sm rounded-xl dark:bg-gray-800 dark:border-gray-500">
            <!-- Table -->
            <div class="relative w-full overflow-x-auto">
                <table id="filter-table" class="w-full text-sm text-left">
                    <thead>
                        <tr>
                            <th class="dark:text-white">
                                <span class="flex items-center">
                                    Waktu
                                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                                    </svg>
                                </span>
                            </th>
                            <th class="dark:text-white">
                                <span class="flex items-center">
                                    Kode Pegawai
                                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                                    </svg>
                                </span>
                            </th>
                            <th class="dark:text-white">
                                <span class="flex items-center">
                                    Full Name
                                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                                    </svg>
                                </span>
                            </th>
                            <th class="dark:text-white">
                                <span class="flex items-center">
                                    Nick Name
                                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                                    </svg>
                                </span>
                            </th>
                            <th class="dark:text-white">
                                <span class="flex items-center">
                                    No Telepon
                                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                                    </svg>
                                </span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($attendance_all as $index => $attendance)
                            <tr
                                class="hover:bg-gray-100 hover:text-black dark:text-gray-300 dark:hover:bg-gray-700/50 dark:hover:text-white">
                                <td class="flex flex-col text-center">
                                    <!-- jam masuk -->
                                    @if ($attendance['jam_masuk'])
                                        <span
                                            class="w-full py-1 my-1 text-black rounded-lg md:px-1 ring-1 ring-green-400 hover:bg-green-300 dark:text-white dark:ring-1 dark:ring-gray-500 dark:bg-green-800 dark:hover:bg-green-900">
                                            Masuk : {{ \Carbon\Carbon::parse($attendance['jam_masuk'])->format('H:i') }}
                                        </span>
                                    @else
                                        <span
                                            class="w-full py-1 my-1 text-black rounded-lg md:px-1 ring-1 ring-red-400 hover:bg-red-300 dark:text-white dark:ring-1 dark:ring-gray-500 dark:bg-red-800 dark:hover:bg-red-900">
                                            Belum Absen
                                        </span>
                                    @endif

                                    <!-- jam keluar -->
                                    @if ($attendance['latest_jam_keluar'])
                                        <span
                                            class="w-full py-1 my-1 text-black rounded-lg md:px-1 ring-1 ring-green-400 hover:bg-green-300 dark:text-white dark:ring-1 dark:ring-gray-500 dark:bg-green-800 dark:hover:bg-green-900">
                                            Keluar :
                                            {{ \Carbon\Carbon::parse($attendance['latest_jam_keluar'])->format('H:i') }}
                                        </span>
                                    @else
                                        <span
                                            class="w-full py-1 my-1 text-black rounded-lg md:px-1 ring-1 ring-red-400 hover:bg-red-300 dark:text-white dark:ring-1 dark:ring-gray-500 dark:bg-red-800 dark:hover:bg-red-900">
                                            Belum Absen
                                        </span>
                                    @endif

                                </td>
                                <td>{{ $attendance['kode_pegawai'] ?? 'N/A' }}</td>
                                <td>{{ $attendance['full_name'] ?? 'N/A' }}</td>
                                <td>{{ $attendance['nick_name'] ?? 'N/A' }}</td>
                                <td>{{ $attendance['no_telp'] ?? 'N/A' }}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <!-- End Table -->
        </div>

    </div>

@endsection

@extends('dashboard.layoutsDash.app')
@section('content')

<div class="grid grid-cols-1 gap-0 mb-4 xl:grid-cols-3 xl:gap-4">

    <!-- Chart -->
    <div class="flex items-center justify-center col-span-2 mb-4 xl:mb-0">
        <div class="w-full bg-white rounded-lg border border-gray-300 p-4 md:p-6">
            <div class="flex justify-between mb-5">
                <div>
                    <h5 class="leading-none text-3xl font-bold text-gray-900 mb-2">{{ Carbon\Carbon::now()->year }}</h5>
                    <p class="text-base font-normal text-gray-500">Data 7 hari kebelakang</p>
                </div>
                <div class="flex items-center px-2.5 py-0.5 text-base font-semibold text-green-500 text-center">

                    @php
                    // Get the start and end dates for the last 7 days
                    $startDate = \Carbon\Carbon::today()->subDays(6);
                    $endDate = \Carbon\Carbon::today();

                    // Format the date range
                    $formattedDateRange = $startDate->locale('id')->isoFormat('dddd, D MMM') . ' - ' . $endDate->locale('id')->isoFormat('dddd, D MMM');
                    @endphp
                    {{ $formattedDateRange }}
                </div>
            </div>
            <div id="tooltip-chart" data-late-counts='@json($lateCounts)' data-ontime-counts='@json($ontimeCounts)' data-outtime-counts="@json($outtimeCounts)" data-fast-counts='@json($fastCounts)' data-dates='@json($dates)'></div>
            <div class="grid grid-cols-1 items-center border-gray-200 border-t justify-between mt-5">
                <div class="flex justify-between items-center pt-5">
                    <a
                        href="{{route('attendanceIn.view')}}"
                        class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-600 hover:text-blue-700 hover:bg-gray-100 px-3 py-2">
                        Absen masuk
                        <svg class="w-2.5 h-2.5 ms-1.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                    </a>

                    <a
                        href="{{ route('attendanceOut.view')}}"
                        class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-red-600 hover:text-red-700 hover:bg-gray-100 px-3 py-2">
                        Absen keluar
                        <svg class="w-2.5 h-2.5 ms-1.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Chart -->

    <!-- Notification -->
    <div class="grid grid-cols-1">

        <div class="flex flex-col bg-white border border-gray-300 p-6 rounded-lg">
            <span>
                <time class="text-md font-semibold text-gray-900">Absen Masuk, {{ \Carbon\Carbon::today()->locale('id')->isoFormat('D MMMM YYYY') }}</time>
            </span>
            <ul class="h-44 overflow-y-auto text-gray-700" aria-labelledby="dropdownUsersButton">

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

        <div class="flex flex-col mt-3 bg-white border border-gray-300 p-6 rounded-lg">
            <span>
                <time class="text-md font-semibold text-gray-900">Absen Keluar, {{ \Carbon\Carbon::today()->locale('id')->isoFormat('D MMMM YYYY') }}</time>
            </span>
            <ul class="h-44 overflow-y-auto text-gray-700" aria-labelledby="dropdownUsersButton">
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


    <!-- End Notification -->
</div>

<div class="grid grid-cols-1 gap-6">
    <div class="flex items-center justify-center rounded-lg bg-white h-auto p-4 border border-gray-300 shadow-sm">
        <!-- Table -->
        <table id="filter-table">
            <thead>
                <tr>
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
                    <!-- <td class="border-b">{{ $index + 1 }}</td> -->
                    <td class="border-b flex flex-col text-center">
                        <!-- jam masuk -->
                        @if ($attendance['jam_masuk'])
                        <span class="w-3/4 my-1 px-2 py-1 rounded-lg text-black ring-1 ring-green-400 hover:bg-green-300">
                            Masuk : {{ \Carbon\Carbon::parse($attendance['jam_masuk'])->format('H:i') }}
                        </span>
                        @else
                        <span class="w-3/4 my-1 px-2 py-1 rounded-lg text-black ring-1 ring-red-400 bg-red-300">
                            Belum Absen
                        </span>
                        @endif

                        <!-- jam keluar -->
                        @if ($attendance['latest_jam_keluar'])
                        <span class="w-3/4 my-1 px-2 py-1 rounded-lg text-black ring-1 ring-red-400 hover:bg-red-300">
                            Keluar : {{ \Carbon\Carbon::parse($attendance['latest_jam_keluar'])->format('H:i') }}
                        </span>
                        @else
                        <span class="w-3/4 my-1 px-2 py-1 rounded-lg text-black ring-1 ring-red-400 bg-red-300">
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
        <!-- End Table -->
    </div>

</div>

@endsection
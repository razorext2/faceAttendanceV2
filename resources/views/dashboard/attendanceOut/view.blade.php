@extends('dashboard.layoutsDash.app')
@section('content')

<div class="grid grid-cols-1 gap-6">
    <div class="flex items-center justify-center rounded-xl bg-gray-50 h-auto p-4 ring-1 ring-gray-200 shadow-sm dark:bg-gray-800 dark:ring-gray-500">

        <table id="filter-table">
            <thead>
                <tr>
                    <th>
                        <span class="flex items-center text-white">
                            Foto
                            <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                            </svg>
                        </span>
                    </th>
                    <th>
                        <span class="flex items-center text-white">
                            Kode Pegawai
                            <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                            </svg>
                        </span>
                    </th>
                    <th>
                        <span class="flex items-center text-white">
                            Full Name
                            <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                            </svg>
                        </span>
                    </th>
                    <th>
                        <span class="flex items-center text-white">
                            Nick Name
                            <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                            </svg>
                        </span>
                    </th>
                    <th>
                        <span class="flex items-center text-white">
                            Absen Keluar
                            <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                            </svg>
                        </span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($datas as $index => $data)
                <tr class="hover:bg-gray-100 hover:text-black dark:text-gray-300 dark:hover:bg-gray-700/50 dark:hover:text-white">
                    <td>
                        @php
                        $photoURL = sha1("libs");
                        $url = $data->photoURL;
                        $path = asset($photoURL.'/'.$url);
                        @endphp
                        <img class="w-32 transition-all duration-300 rounded-lg blur-sm hover:blur-none" src="{{ $path.'.png' }}" alt="image description">
                    </td>
                    <td>{{ $data->pegawaiRelasi->kode_pegawai }}</td>
                    <td>{{ $data->pegawaiRelasi->full_name }}</td>
                    <td>{{ $data->pegawaiRelasi->nick_name ?? 'N/A' }}</td>
                    <td>
                        {{ $data->jam_keluar ?? 'N/A' }}
                        @if ( \Carbon\Carbon::parse($data->jam_keluar)->lt(\Carbon\Carbon::parse(\Carbon\Carbon::parse($data->jam_keluar)->toDateString(). '17:00:00')))
                        <span class="bg-red-100 text-red-800 text-xs ml-2 font-medium px-2.5 py-0.5 rounded-full ring-1 ring-gray-300 shadow-sm dark:bg-red-900 dark:text-white dark:ring-gray-500">Pulang Cepat</span>
                        @else
                        <span class="bg-green-100 text-green-800 text-xs ml-2 font-medium px-2.5 py-0.5 rounded-full ring-1 ring-gray-300 shadow-sm dark:bg-green-800 dark:text-white dark:ring-gray-500">Tepat Waktu</span>
                        @endif
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>

@endsection
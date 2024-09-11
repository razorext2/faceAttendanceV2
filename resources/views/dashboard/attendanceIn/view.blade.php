@extends('dashboard.layoutsDash.app')
@section('content')

<div class="grid grid-cols-1 gap-6">
    <div class="flex items-center justify-center rounded-lg bg-gray-50 p-4 ring-1 ring-gray-200 shadow-sm">

        <table id="filter-table">
            <thead>
                <tr>
                    <th>
                        <span class="flex items-center">
                            Foto
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
                            Absen Masuk
                            <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                            </svg>
                        </span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($datas as $index => $data)
                <tr class="hover:bg-gray-100 hover:text-black hover:font-semibold">
                    <td class="border-b">

                        @php
                        $kode = $data->pegawaiRelasi->kode_pegawai;
                        $tgl = \Carbon\Carbon::parse($data->jam_masuk)->format('Ymd_His');
                        $path = asset('storage/labels/'.$kode.'/capturedImg/'.$kode.'_captured_'.$tgl.'.png');
                        @endphp

                        <img class="w-32 transition-all duration-300 rounded-lg blur-sm hover:blur-none" src="{{ $path }}" alt="image description">
                    </td>
                    <td class="border-b">{{ $data->pegawaiRelasi->kode_pegawai }}</td>
                    <td class="border-b">{{ $data->pegawaiRelasi->full_name }}</td>
                    <td class="border-b">{{ $data->pegawaiRelasi->nick_name ?? 'N/A' }}</td>
                    <td class="border-b">
                        {{ $data->jam_masuk ?? 'N/A' }}
                        @if ( \Carbon\Carbon::parse($data->jam_masuk)->gt(\Carbon\Carbon::parse(\Carbon\Carbon::parse($data->jam_masuk)->toDateString(). '08:00:00')))
                        <span class="bg-red-100 text-red-800 text-xs ml-2 font-medium px-2.5 py-0.5 rounded-full ring-1 ring-gray-300 shadow-sm">Terlambat</span>
                        @else
                        <span class="bg-green-100 text-green-800 text-xs ml-2 font-medium px-2.5 py-0.5 rounded-full ring-1 ring-gray-300 shadow-sm">Tepat Waktu</span>
                        @endif
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>

@endsection
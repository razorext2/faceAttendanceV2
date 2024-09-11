@extends('dashboard.layoutsDash.app')
@section('content')

<form id="add-pegawai" action="{{ route('jabatan.add') }}">

</form>

<div class="grid grid-cols-1 gap-6 relative">
    <div class="absolute md:top-4 md:left-10 right-2 top-2">
        <button form="add-pegawai" class="px-2.5 md:px-8 py-2.5 ring-1 ring-green-700 hover:bg-green-300 rounded-lg flex flex-row">
            <svg class="mt-1 mr-1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="18" height="18" viewBox="0 0 50 50">
                <path d="M 25 2 C 12.309295 2 2 12.309295 2 25 C 2 37.690705 12.309295 48 25 48 C 37.690705 48 48 37.690705 48 25 C 48 12.309295 37.690705 2 25 2 z M 25 4 C 36.609824 4 46 13.390176 46 25 C 46 36.609824 36.609824 46 25 46 C 13.390176 46 4 36.609824 4 25 C 4 13.390176 13.390176 4 25 4 z M 24 13 L 24 24 L 13 24 L 13 26 L 24 26 L 24 37 L 26 37 L 26 26 L 37 26 L 37 24 L 26 24 L 26 13 L 24 13 z"></path>
            </svg>
            Data
        </button>
    </div>
    <div class="flex items-center justify-center rounded-lg bg-gray-50 p-2 md:p-4 h-auto ring-1 ring-gray-200 shadow-sm">
        <table id="filter-table">
            <thead>
                <tr>
                    <th>
                        <span class=" flex items-center">
                            Action
                            <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                            </svg>
                        </span>
                    </th>
                    <th>
                        <span class="flex items-center">
                            Nama Jabatan
                            <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                            </svg>
                        </span>
                    </th>
                    <th>
                        <span class="flex items-center">
                            Divisi
                            <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                            </svg>
                        </span>
                    </th>
                    <th>
                        <span class="flex items-center">
                            Penempatan
                            <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                            </svg>
                        </span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($jabatan as $index => $data)
                <tr class="hover:bg-gray-100 hover:text-black hover:font-semibold">
                    <td class="border-b">
                        <div class="inline-flex rounded-md shadow-sm" role="group">
                            <a href="{{ route('jabatan.edit', $data->id) }}" class="px-4 py-2 text-sm font-medium text-gray-900 bg-transparent border-t border-b border-l border-green-800 rounded-s-lg hover:bg-green-600 hover:text-white focus:z-10 focus:ring-green-500 focus:bg-green-600 focus:text-white">
                                Edit
                            </a>

                            <form method="POST" action="{{ route('jabatan.delete', $data) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure?')" class="px-4 py-2 text-sm font-medium text-gray-900 bg-transparent border-t border-b border-l border-r border-red-800 rounded-e-lg hover:bg-red-900 hover:text-white focus:z-10 focus:ring-red-500 focus:bg-red-900 focus:text-white">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </td>
                    <td class="border-b">{{ $data->nama_jabatan }}</td>
                    <td class="border-b">{{ $data->divisi }}</td>
                    <td class="border-b">{{ $data->penempatan ?? 'N/A' }}</td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</div>

@endsection
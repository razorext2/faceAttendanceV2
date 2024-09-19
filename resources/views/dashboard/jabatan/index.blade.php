@extends('dashboard.layoutsDash.app')
@section('content')

@if(session('status'))
<div id="toast-top-right" x-data="{ showToast: true }" x-init="setTimeout(() => showToast = false, 3000)"
    x-show="showToast"
    x-transition:enter="transition ease-in duration-300"
    x-transition:enter-start="transform scale-90 opacity-0"
    x-transition:enter-end="transform scale-100 opacity-100"
    x-transition:leave="transition ease-out duration-300"
    x-transition:leave-start="transform scale-100 opacity-100"
    x-transition:leave-end="transform scale-90 opacity-0"
    class="fixed z-50 flex items-center w-full max-w-xs divide-x rounded-lg right-[0.1rem] top-[4.5rem] transform scale-90 transition duration-300" role="alert">
    <div id="toast-success" class="border border-gray-200 flex items-center w-full max-w-xs p-4 mb-4 bg-white rounded-lg" role="alert">
        <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
            </svg>
            <span class="sr-only">Check icon</span>
        </div>
        <div class="ms-3 text-sm font-normal text-black mt-0.5">
            <x-auth-session-status :status="session('status')" />
        </div>
        <button @click="showToast = false" type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
        </button>
    </div>
</div>
@endif

<form id="add-pegawai" action="{{ route('jabatan.add') }}"></form>

<div class="grid grid-cols-1 gap-6 relative">
    <div class="absolute lg:top-3.5 lg:left-72 left-2 top-2">
        <button form="add-pegawai" class="px-5 md:px-8 py-2.5 ring-1 ring-green-700 hover:bg-green-300 rounded-lg flex flex-row">
            <svg class="mt-1 mr-1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="18" height="18" viewBox="0 0 50 50">
                <path d="M 25 2 C 12.309295 2 2 12.309295 2 25 C 2 37.690705 12.309295 48 25 48 C 37.690705 48 48 37.690705 48 25 C 48 12.309295 37.690705 2 25 2 z M 25 4 C 36.609824 4 46 13.390176 46 25 C 46 36.609824 36.609824 46 25 46 C 13.390176 46 4 36.609824 4 25 C 4 13.390176 13.390176 4 25 4 z M 24 13 L 24 24 L 13 24 L 13 26 L 24 26 L 24 37 L 26 37 L 26 26 L 37 26 L 37 24 L 26 24 L 26 13 L 24 13 z"></path>
            </svg>
            Data
        </button>
    </div>
    <div class="flex items-center justify-center rounded-xl bg-gray-50 pt-16 lg:p-4 pb-2 px-2 h-auto ring-1 ring-gray-200 shadow-sm">
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
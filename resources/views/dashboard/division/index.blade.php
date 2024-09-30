@extends('dashboard.layoutsDash.app')
@section('content')

<form id="add-pegawai" action="{{ route('division.add') }}"></form>

<div class="grid grid-cols-1 gap-6 relative">
    <div class="absolute lg:top-3.5 lg:left-72 left-2 top-2">
        <button form="add-pegawai" class="px-5 md:px-8 py-2.5 ring-1 ring-green-700 hover:bg-green-300 rounded-lg flex flex-row dark:bg-green-800 dark:text-white dark:hover:bg-green-900 dark:ring-gray-500">
            <svg class="dark:fill-white rotate-180" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 1024 1024" fill="#000000" class="icon" version="1.1">
                <path d="M669.6 849.6c8.8 8 22.4 7.2 30.4-1.6s7.2-22.4-1.6-30.4l-309.6-280c-8-7.2-8-17.6 0-24.8l309.6-270.4c8.8-8 9.6-21.6 2.4-30.4-8-8.8-21.6-9.6-30.4-2.4L360.8 480.8c-27.2 24-28 64-0.8 88.8l309.6 280z" fill="" />
            </svg>
            Tambah Data
        </button>
    </div>
    <div class="flex items-center justify-center rounded-xl bg-gray-50 pt-16 lg:p-4 pb-2 px-2 h-auto ring-1 ring-gray-200 shadow-sm dark:bg-gray-800 dark:ring-gray-500">
        <table id="filter-table">
            <thead>
                <tr>
                    <th>
                        <span class="flex items-center text-white">
                            Action
                            <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                            </svg>
                        </span>
                    </th>
                    <th>
                        <span class="flex items-center text-white">
                            Kode Divisi
                            <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                            </svg>
                        </span>
                    </th>
                    <th>
                        <span class="flex items-center text-white">
                            Nama Divisi
                            <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                            </svg>
                        </span>
                    </th>
                    <th>
                        <span class="flex items-center text-white">
                            Create / Update
                            <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                            </svg>
                        </span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($division as $index => $data)
                <tr class="hover:bg-gray-100 hover:text-black dark:text-gray-300 dark:hover:bg-gray-700/50 dark:hover:text-white">
                    <td>
                        <div class="inline-flex rounded-md shadow-sm" role="group">
                            <a href="{{ route('division.edit', $data->id) }}" class="px-4 py-2 text-sm font-medium text-gray-900 bg-transparent border-t border-b border-l border-green-800 rounded-s-lg hover:bg-green-600 hover:text-white focus:z-10 focus:ring-green-500 focus:bg-green-600 focus:text-white dark:bg-green-800 dark:hover:bg-green-900 dark:text-white dark:border-gray-500">
                                Edit
                            </a>

                            <button
                                class="delete-btn px-4 py-2 text-sm font-medium text-gray-900 bg-transparent border-red-800 border  rounded-e-lg hover:bg-red-900 hover:text-white focus:ring-red-500 focus:bg-red-900 focus:text-white dark:bg-red-800 dark:hover:bg-red-900 dark:text-white dark:border-gray-500"
                                data-id="{{ $data->id }}"
                                data-modal-target="deleteModal"
                                data-modal-toggle="deleteModal">
                                Delete
                            </button>

                        </div>
                    </td>
                    <td>{{ $data->kode_divisi }}</td>
                    <td>{{ $data->nama_divisi }}</td>
                    <td>{{ $data->created_at  ?? 'N/A' }} / {{ $data->updated_at  ?? 'N/A' }}</td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
@endsection
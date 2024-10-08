@extends('dashboard.layoutsDash.app')
@section('content')
    <form id="add-pegawai" action="{{ route('division.add') }}"></form>
    <div class="relative grid grid-cols-1 gap-6">
        <div class="absolute max-w-xs left-6 sm:left-auto sm:right-6 lg:right-auto lg:left-6 lg:top-24 md:top-24 top-56 ">
            <button form="add-pegawai"
                class="flex flex-row px-4 py-2 rounded-lg lg:px-8 ring-1 ring-green-700 hover:bg-green-300 dark:bg-green-800 dark:text-white dark:hover:bg-green-900 dark:ring-gray-500">
                <svg class="rotate-180 dark:fill-white" xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                    viewBox="0 0 1024 1024" fill="#000000" class="icon" version="1.1">
                    <path
                        d="M669.6 849.6c8.8 8 22.4 7.2 30.4-1.6s7.2-22.4-1.6-30.4l-309.6-280c-8-7.2-8-17.6 0-24.8l309.6-270.4c8.8-8 9.6-21.6 2.4-30.4-8-8.8-21.6-9.6-30.4-2.4L360.8 480.8c-27.2 24-28 64-0.8 88.8l309.6 280z"
                        fill="" />
                </svg>
                Tambah <span class="hidden sm:block">Data</span>
            </button>
        </div>
        <div class="flex items-center justify-center h-auto">
            <div
                class="grid w-full grid-cols-2 gap-4 p-6 shadow-sm rounded-xl bg-gray-50 ring-1 ring-gray-200 dark:bg-gray-800 dark:ring-gray-500">
                <div class="grid grid-cols-2 col-span-2 gap-4 md:col-span-1">
                    <div>
                        <div class="relative">
                            <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input type="text" id="min" name="min"
                                class="block w-full p-4 text-sm leading-none text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Start" required />
                        </div>
                    </div>
                    <div>
                        <div class="relative">
                            <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input type="text" id="max" name="max"
                                class="block w-full p-4 text-sm leading-none text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="End" required />
                        </div>
                    </div>
                </div>
                <div class="relative col-span-2 md:col-span-1">
                    <form id="searchForm" action="" method="get">
                        <div class="relative">
                            <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="search" id="mySearchText"
                                class="block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-lg ps-10 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Search..." />

                            <div id="clearIcon" class="absolute inset-y-0 flex items-center cursor-pointer right-24"
                                style="display:none;">
                                <svg class="w-4 h-4 text-gray-500 hover:text-gray-700" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M6 6l8 8M6 14L14 6" />
                                </svg>
                            </div>
                            <div>
                                <button type="submit" id="mySearchButton"
                                    class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Search
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-span-2">
                    <table id="tableProduct"
                        class="w-full mt-20 text-sm text-left text-gray-500 sm:mt-4 dark:text-gray-300">
                        <thead class="text-xs uppercase">
                            <tr>
                                <th>
                                    <span class="flex items-center text-gray-800 dark:text-white">
                                        Action
                                    </span>
                                </th>
                                <th>
                                    <span class="flex items-center text-gray-800 dark:text-white">
                                        Kode Divisi
                                    </span>
                                </th>
                                <th>
                                    <span class="flex items-center text-gray-800 dark:text-white">
                                        Nama Divisi
                                    </span>
                                </th>
                                <th>
                                    <span class="flex items-center text-gray-800 dark:text-white">
                                        Created At
                                    </span>
                                </th>
                                <th>
                                    <span class="flex items-center text-gray-800 dark:text-white">
                                        Updated At
                                    </span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @include('dashboard.layoutsDash.modals')
@endsection

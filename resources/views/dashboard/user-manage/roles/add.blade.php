@extends('dashboard.layoutsDash.app')
@section('content')
    <div class="w-full space-y-6 xl:w-6/12 2xl:w-1/3">
        <div class="p-4 shadow-sm sm:p-6 bg-gray-50 rounded-xl ring-1 ring-gray-200 dark:bg-gray-800 dark:ring-gray-500">
            <div class="max-w-xl">
                <header class="flex flex-row">
                    <a href="{{ route('dashboard.roles') }}"
                        class="mr-3 px-2.5 mb-4 md:px-4 py-2.5 align-middle ring-1 ring-red-700 hover:bg-red-300 rounded-lg flex flex-row dark:bg-red-800 dark:hover:bg-red-900 dark:text-white dark:ring-gray-500">
                        <svg class="dark:fill-white" xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                            viewBox="0 0 1024 1024" fill="#000000" class="icon" version="1.1">
                            <path
                                d="M669.6 849.6c8.8 8 22.4 7.2 30.4-1.6s7.2-22.4-1.6-30.4l-309.6-280c-8-7.2-8-17.6 0-24.8l309.6-270.4c8.8-8 9.6-21.6 2.4-30.4-8-8.8-21.6-9.6-30.4-2.4L360.8 480.8c-27.2 24-28 64-0.8 88.8l309.6 280z"
                                fill="" />
                        </svg>
                        Kembali
                    </a>
                    <h2 class="mt-2 text-lg font-medium text-gray-900 dark:text-white">
                        {{ __('Tambah Data Role') }}
                    </h2>

                </header>
                <p class="mt-1 text-sm text-gray-600 dark:text-gray-300">
                    {{ __('Silahkan sesuaikan data dibawah ini dengan data yang benar.') }}
                </p>

                <form action="{{ route('roles.store') }}" class="mt-4" method="POST">
                    @csrf
                    <div class="grid gap-4 mb-4 sm:gap-6 sm:mb-5">
                        <div class="w-full">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                Role</label>
                            <input type="text" name="name" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                placeholder="Role" required="">
                        </div>

                        <div class="w-full">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Permissions</label>

                            <!-- Checkbox for "Select All" -->
                            <input type="checkbox" id="select-all"
                                class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="select-all" class="text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">Select
                                All</label>

                            <div class="grid md:grid-cols-2">
                                @foreach ($permission as $value)
                                    <div>
                                        <input type="checkbox" id="permission[{{ $value->id }}]"
                                            name="permission[{{ $value->id }}]" value="{{ $value->id }}"
                                            class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded permission-checkbox focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="permission[{{ $value->id }}]"
                                            class="text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">{{ $value->name }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                    <div class="flex items-center">
                        <button type="submit"
                            class="ring-1 ring-blue-700 text-gray-900 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 focus:text-white hover:text-white font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-800 dark:text-white dark:hover:bg-blue-900 dark:ring-gray-500">
                            Submit
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('select-all').addEventListener('change', function() {
            // Get all checkboxes with class 'permission-checkbox'
            let checkboxes = document.querySelectorAll('.permission-checkbox');

            // Set the checked state of all checkboxes based on the "Select All" checkbox
            checkboxes.forEach(function(checkbox) {
                checkbox.checked = document.getElementById('select-all').checked;
            });
        });
    </script>
@endsection

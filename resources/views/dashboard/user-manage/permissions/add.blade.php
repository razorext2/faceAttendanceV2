@extends('dashboard.layoutsDash.app')
@section('content')
    <div class="w-full space-y-6 xl:w-6/12 2xl:w-1/3">
        <div class="p-4 shadow-sm sm:p-6 bg-gray-50 rounded-xl ring-1 ring-gray-200 dark:bg-gray-800 dark:ring-gray-500">
            <div class="max-w-xl">
                <header class="flex flex-row">
                    <a href="{{ route('dashboard.permissions') }}"
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
                        {{ __('Tambah Data Permission') }}
                    </h2>

                </header>
                <p class="mt-1 text-sm text-gray-600 dark:text-gray-300">
                    {{ __('Silahkan sesuaikan data dibawah ini dengan data yang benar.') }}
                </p>

                <form action="{{ route('permissions.store') }}" class="mt-4" method="POST">
                    @csrf
                    <div class="grid gap-4 mb-4 sm:gap-6 sm:mb-5" id="permissionInputs">
                        <div class="w-full">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                Permission</label>

                            <div class="flex">
                                <div class="relative w-full">
                                    <input type="text" name="name[]" id="name" id="search-dropdown"
                                        class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-lg rounded-gray-100 rounded-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
                                        placeholder="Permission" required />
                                    <button type="button" id="addPermission"
                                        class="absolute top-0 end-0 p-2.5 h-full text-sm font-medium text-white bg-blue-700 rounded-e-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        <svg viewBox="0 0 24 24" class="w-6 h-6 stroke-gray-300 dark:stroke-white"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                            </g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path d="M6 12H18M12 6V18" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </g>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex mt-4 itemcenter">
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
        document.getElementById('addPermission').addEventListener('click', function() {
            // Create a new input field
            const newInput = document.createElement('div');
            newInput.classList.add('w-full', 'mt-2'); // Add any necessary classes
            newInput.innerHTML = `
                <div class="flex">
                                <div class="relative w-full">
                                    <input type="text" name="name[]" id="name" id="search-dropdown"
                                        class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-lg rounded-gray-100 rounded-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
                                        placeholder="Permission" required />
                                </div>
                            </div>
            `;
            // Append the new input to the form
            document.getElementById('permissionInputs').appendChild(newInput);
        });
    </script>
@endsection

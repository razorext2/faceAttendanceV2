@extends('dashboard.layoutsDash.app')
@section('content')
    <div class="w-full space-y-6 xl:w-6/12 2xl:w-1/3">
        <div class="p-4 shadow-sm sm:p-6 bg-gray-50 rounded-xl ring-1 ring-gray-200 dark:bg-gray-800 dark:ring-gray-500">
            <div class="w-full">
                <header class="flex flex-row">
                    <a href="{{ route('dashboard.dayoff') }}"
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
                        {{ __('Tambah Pengajuan Off') }}
                    </h2>

                </header>
                <p class="mt-1 text-sm text-gray-600 dark:text-gray-300">
                    {{ __('Silahkan sesuaikan data dibawah ini dengan data yang benar.') }}
                </p>

                <form id="content-form" action="{{ route('dayoff.store') }}" class="mt-4" method="POST">
                    @csrf
                    <div class="grid grid-cols-2 gap-4 mb-4 sm:gap-6 sm:mb-5">

                        <div class="w-full col-span-2">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                Pegawai</label>
                            <input type="text" name="name" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                                placeholder="Cari nama karyawan.." required="">
                            <div id="autocomplete-results" class="autocomplete-results"></div>
                        </div>

                        <div class="w-full col-span-2">
                            <label for="kode_pegawai"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode Pegawai</label>
                            <input type="text" name="kode_pegawai" id="kode_pegawai"
                                class="dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 cursor-not-allowed"
                                placeholder="Kode pegawai" required="" readonly>
                        </div>

                        <div class="w-full col-span-2">
                            <label for="dayoff_for"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Peruntukan</label>
                            <select id="dayoff_for" name="dayoff_for"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                                <option selected>Pilih</option>
                                <option value="Izin"> Izin </option>
                                <option value="Sakit"> Sakit </option>
                                <option value="Absen"> Absen </option>
                                <option value="PC"> Pulang Cepat </option>
                            </select>
                        </div>

                        <div class="w-full">
                            <label for="start-time"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Start time:</label>
                            <input type="datetime-local" name="start_time" id="start-time"
                                class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-500 dark:placeholder-gray-400 dark:text-gray-800 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required />
                        </div>
                        <div class="w-full">
                            <label for="end-time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">End
                                time:</label>
                            <input type="datetime-local" name="end_time" id="end-time"
                                class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-500 dark:placeholder-gray-400 dark:text-gray-800 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required />
                        </div>
                    </div>

                    <div class="relative w-full mb-4">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Keterangan
                        </label>
                        <div id="editor" class="w-full h-32 dark:bg-white"></div>
                        <input type="hidden" name="keterangan" id="keterangan">
                    </div>

                    <div class="relative w-full">
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

    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>
    <script>
        // Ensure you import Quill and its CSS correctly
        const BlockEmbed = Quill.import('blots/block/embed');

        // Create a custom blot
        class CustomEmbed extends BlockEmbed {
            static create(value) {
                let node = super.create();
                node.setAttribute('data-value', value);
                return node;
            }

            static formats(node) {
                return node.getAttribute('data-value');
            }
        }

        // Register the custom blot
        CustomEmbed.blotName = 'customEmbed'; // The name you want to use
        CustomEmbed.tagName = 'div'; // HTML tag
        Quill.register(CustomEmbed);

        // Initialize Quill
        const quill = new Quill('#editor', {
            theme: 'snow',
            placeholder: 'Tulis keterangan...',
            modules: {
                toolbar: [
                    [{
                        'header': [1, 2, false]
                    }],
                    ['bold', 'italic', 'underline'],
                    ['image', 'code-block'],
                    [{
                        'list': 'ordered'
                    }, {
                        'list': 'bullet'
                    }]
                ],
            }
        });

        // Register the image handler
        quill.getModule('toolbar').addHandler('image', imageHandler);

        // Image handler function
        function imageHandler() {
            const input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('accept', 'image/*');
            input.click();

            input.onchange = async () => {
                const file = input.files[0];

                if (file) {
                    const formData = new FormData();
                    formData.append('image', file);

                    // Use fetch API to upload the image
                    const response = await fetch('/upload-image', {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                                'content')
                        },
                        body: formData
                    });

                    if (response.ok) {
                        const data = await response.json();
                        const range = quill.getSelection();
                        if (range) {
                            quill.insertEmbed(range.index, 'image', data.url); // Insert the image into Quill
                        } else {
                            console.error('No selection in Quill to insert image');
                        }
                    } else {
                        console.error('Failed to upload image');
                    }
                }
            };
        }

        document.getElementById('content-form').onsubmit = function() {
            const content = document.getElementById('keterangan');
            content.value = quill.root.innerHTML; // Get the HTML content
        };

        $(document).ready(function() {
            $('#name').on('input', function() {
                let query = $(this).val();

                if (query.length > 2) { // Mulai pencarian saat input lebih dari 2 karakter
                    $.ajax({
                        url: "{{ route('autocomplete') }}",
                        type: "GET",
                        data: {
                            query: query
                        },
                        success: function(data) {
                            $('#autocomplete-results').empty(); // Kosongkan hasil sebelumnya

                            if (data.length > 0) {
                                data.forEach((pegawai, index) => {
                                    // Jika ini adalah elemen terakhir, tambahkan kelas tambahan
                                    let roundedClass = (index === data.length - 1) ?
                                        'rounded-b-lg' : '';

                                    $('#autocomplete-results').append(`
                                <div class="autocomplete-result bg-gray-50 border border-gray-300 dark:bg-white p-2.5 divide-y w-full ${roundedClass}" data-fullname="${pegawai.full_name}" data-id="${pegawai.kode_pegawai}">${pegawai.full_name}</div>
                            `);
                                });
                            } else {
                                $('#autocomplete-results').append(
                                    '<div class="autocomplete-result">No results found</div>'
                                );
                            }
                        }
                    });
                } else {
                    $('#autocomplete-results').empty(); // Kosongkan hasil jika input dihapus
                }
            });

            // Saat hasil diklik, isi input dengan nilai yang dipilih
            $(document).on('click', '.autocomplete-result', function() {
                let name = $(this).data('fullname');
                let kodePegawai = $(this).data('id');

                // Isi input 'name' dengan nama yang dipilih
                $('#name').val(name);

                // Isi input 'kode_pegawai' dengan kode pegawai yang dipilih
                $('#kode_pegawai').val(kodePegawai);

                $('#autocomplete-results').empty(); // Kosongkan hasil setelah memilih
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            document.querySelector('.ql-toolbar').classList.add('dark:bg-white', 'rounded-t-lg');
            document.querySelector('.ql-picker').classList.add('dark:bg-gray-50');
            document.getElementById('editor').classList.add('!h-96', 'rounded-b-lg');
        });
    </script>
@endsection

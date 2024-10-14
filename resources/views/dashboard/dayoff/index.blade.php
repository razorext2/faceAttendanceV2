@extends('dashboard.layoutsDash.app')
@section('content')
    <form id="add-dayoff" action="{{ route('dayoff.add') }}"></form>

    <div class="relative grid grid-cols-1 gap-6">
        @can('dayoff-create')
            <div
                class="absolute z-10 max-w-xs left-6 sm:left-auto sm:right-6 lg:right-auto lg:left-6 lg:top-24 md:top-40 top-56 ">
                <button form="add-dayoff"
                    class="flex flex-row px-4 py-2 rounded-lg lg:px-8 ring-1 ring-green-700 hover:bg-green-300 dark:bg-green-800 dark:text-white dark:hover:bg-green-900 dark:ring-gray-500">
                    <svg class="rotate-180 dark:fill-white" xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                        viewBox="0 0 1024 1024" fill="#000000" class="icon" version="1.1">
                        <path
                            d="M669.6 849.6c8.8 8 22.4 7.2 30.4-1.6s7.2-22.4-1.6-30.4l-309.6-280c-8-7.2-8-17.6 0-24.8l309.6-270.4c8.8-8 9.6-21.6 2.4-30.4-8-8.8-21.6-9.6-30.4-2.4L360.8 480.8c-27.2 24-28 64-0.8 88.8l309.6 280z"
                            fill="" />
                    </svg>
                    <span class="hidden sm:block">Tambah</span> <span class="hidden sm:block">Data</span>
                </button>
            </div>
        @endcan
        <div class="flex items-center justify-center h-auto">
            <div
                class="grid w-full grid-cols-2 gap-4 p-6 shadow-sm rounded-xl bg-gray-50 ring-1 ring-gray-200 dark:bg-gray-800 dark:ring-gray-500">
                <div class="grid grid-cols-2 col-span-2 gap-4 md:col-span-2 lg:col-span-1">
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
                <div class="relative col-span-2 md:col-span-2 lg:col-span-1">
                    <form id="searchForm" action="" method="get">
                        <div class="relative">
                            <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="search" id="searchText"
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
                    <table id="table-dayoff"
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
                                        ID User
                                    </span>
                                </th>
                                <th>
                                    <span class="flex items-center text-gray-800 dark:text-white">
                                        Dayoff For
                                    </span>
                                </th>
                                <th>
                                    <span class="flex items-center text-gray-800 dark:text-white">
                                        URL
                                    </span>
                                </th>
                                <th>
                                    <span class="flex items-center text-gray-800 dark:text-white">
                                        Tanggal Dari
                                    </span>
                                </th>
                                <th>
                                    <span class="flex items-center text-gray-800 dark:text-white">
                                        Tanggal Hingga
                                    </span>
                                </th>
                                <th>
                                    <span class="flex items-center text-gray-800 dark:text-white">
                                        Keterangan
                                    </span>
                                </th>
                                <th>
                                    <span class="flex items-center text-gray-800 dark:text-white">
                                        Status
                                    </span>
                                </th>
                                <th>
                                    <span class="flex items-center text-gray-800 dark:text-white">
                                        Create / Update
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
    <script>
        function showDatatables() {
            let minDate, maxDate;

            // Initialize DateTime pickers for min and max date inputs
            minDate = new DateTime($('#min'), {
                format: 'DDD'
            });
            maxDate = new DateTime($('#max'), {
                format: 'DDD'
            });

            // Initialize DataTable
            let table = $('#table-dayoff').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                perPageSelect: [5, 25, 50, 100],
                ajax: {
                    url: "{{ route('getDataDayoff') }}",
                    data: function(d) {
                        d.minDate = minDate.val();
                        d.maxDate = maxDate.val();
                    }
                },
                columns: [{
                        data: 'action',
                        name: 'action'
                    },
                    {
                        data: 'id_user',
                        name: 'id_user'
                    },
                    {
                        data: 'dayoff_for',
                        name: 'dayoff_for'
                    },
                    {
                        data: 'url',
                        name: 'url'
                    },
                    {
                        data: 'tgl_dari',
                        name: 'tgl_dari'
                    },
                    {
                        data: 'tgl_hingga',
                        name: 'tgl_hingga'
                    },
                    {
                        data: 'keterangan',
                        name: 'keterangan'
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: 'created_updated_at',
                        name: 'created_updated_at'
                    }
                ],
                dom: `<"absolute top-1 md:left-0 {{ auth()->user()->can('dayoff-create') ? 'lg:left-48 right-0' : '' }} mt-14 lg:mt-0 dark:text-white max-w-xs"B><"text-left lg:text-right dark:text-white"l><"relative overflow-x-auto w-full mt-20 lg:mt-4"t><"grid text-center gap-4 lg:grid-cols-2 mt-4 dark:text-white"<"lg:mt-3 lg:text-left"i><"lg:text-right dark:text-gray-900"p>>`,
                buttons: [{
                        extend: "csv",
                        exportOptions: {
                            stripHtml: false
                        }
                    },
                    {
                        extend: "excel",
                        exportOptions: {
                            stripHtml: false,
                            decodeEntities: false
                        }
                    },
                    "print",
                ],
                "deferRender": true,
                "language": {
                    "infoFiltered": ""
                }
            });

            // Custom filtering function for date range
            $.fn.dataTable.ext.search.push(function(settings, data, dataIndex) {
                let min = minDate.val() ? new Date(minDate.val()) : null;
                let max = maxDate.val() ? new Date(maxDate.val()) : null;

                // Convert updated_at (data[4]) to date object
                let updatedDate = new Date(data[4]).setHours(0, 0, 0, 0); // Strip time for comparison

                // Strip time for min and max dates
                if (min) min = new Date(min).setHours(0, 0, 0, 0);
                if (max) max = new Date(max).setHours(0, 0, 0, 0);

                // Filter logic: Check if updatedDate falls within the range
                if (
                    (!min && !max) ||
                    (!min && updatedDate <= max) ||
                    (min <= updatedDate && !max) ||
                    (min <= updatedDate && updatedDate <= max)
                ) {
                    return true;
                }
                return false;
            });

            // Trigger table redraw when the date inputs change
            $('#min, #max').on('change', function() {
                table.draw();
            });

            // Bind the submit event of the form
            $('#searchForm').on('submit', function(e) {
                e.preventDefault(); // Prevent the default form submission
                // Execute the search on DataTable
                table.search($('#searchText').val()).draw();
            });

            const searchInput = document.getElementById("searchText");
            const clearIcon = document.getElementById("clearIcon");

            searchInput.addEventListener("input", function() {
                if (searchInput.value.length > 0) {
                    clearIcon.style.display = "flex"; // Show clear icon
                } else {
                    clearIcon.style.display = "none"; // Hide clear icon
                }
            });

            // Clear the search input and refresh the datatable when clear icon is clicked
            clearIcon.addEventListener("click", function() {
                searchInput.value = "";
                clearIcon.style.display = "none";
                // Call function to refresh DataTable
                refreshDataTable();
            });

            // Refresh DataTable (assuming you're using DataTables.js)
            function refreshDataTable() {
                // Assuming you have a DataTable instance initialized
                // Replace 'yourDataTable' with your actual DataTable instance variable
                $('#table-dayoff').DataTable().search('').draw(); // Clear the search and redraw table
            }
        }
        // end datatables //
        ///////////////////

        function deleteModal() {

            const modalEl = document.getElementById('deleteModal');
            if (modalEl) {
                new Modal(modalEl); // Assuming you have imported Modal from Flowbite

                const currentRoute = '{{ request()->segment(2) }}';

                // Delegate click event to the table
                $('#table-dayoff').on('click', '.delete-btn', function() {
                    // Get the id from data attribute
                    var id = $(this).data('id');
                    // Set the form action for deletion
                    $('#deleteForm').attr('action', currentRoute +
                        '/delete/' + id);
                    // Show the modal
                    $('#deleteModal').removeClass('hidden');
                });

                // Close modal
                $('[data-modal-hide="deleteModal"]').on('click', function() {
                    $('#deleteModal').addClass('hidden');
                });
            }
        }
        // end delete modal //
        /////////////////////

        $(document).ready(function() {
            showDatatables();
            deleteModal();
        });
    </script>
@endsection

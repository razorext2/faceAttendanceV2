<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DataTable with Date Range Filter</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.tailwindcss.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.5.4/css/dataTables.dateTime.min.css">
</head>

<body>

    <div class="container mx-auto mt-5">
        <div
            class="grid w-auto grid-cols-2 gap-4 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="col-span-2">
                <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white"> Tabel Produk </h5>
            </div>
            <div class="grid grid-cols-2 col-span-2 gap-4 md:col-span-1">
                {{-- <input type="text" id="min" name="min" class="p-2 border rounded">
                <input type="text" id="max" name="max" class="p-2 border rounded"> --}}

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
                    <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" id="mySearchText"
                        class="block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-lg ps-10 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search Mockups, Logos..." />
                    <button type="submit" id="mySearchButton"
                        class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                </form>
            </div>
            <div class="col-span-2">
                <table id="tableProduct" class="w-full mt-4 text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">No</th>
                            <th scope="col" class="px-6 py-3">Kode Divisi</th>
                            <th scope="col" class="px-6 py-3">Nama Divisi</th>
                            <th scope="col" class="px-6 py-3">Created At</th>
                            <th scope="col" class="px-6 py-3">Updated At</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.tailwindcss.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/luxon@3.5.0/build/global/luxon.min.js"></script>
    <script src="https://cdn.datatables.net/datetime/1.5.4/js/dataTables.dateTime.min.js"></script>

    <script>
        $(document).ready(function() {
            let minDate, maxDate;

            // Initialize DateTime pickers for min and max date inputs
            minDate = new DateTime($('#min'), {
                format: 'DDD'
            });
            maxDate = new DateTime($('#max'), {
                format: 'DDD'
            });

            // Initialize DataTable
            let table = $('#tableProduct').DataTable({

                processing: true,
                serverSide: true,
                responsive: true,
                ajax: {
                    url: "{{ route('getDataDivision') }}",
                    data: function(d) {
                        d.minDate = minDate.val();
                        d.maxDate = maxDate.val();
                    }
                },
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'kode_divisi',
                        name: 'kode_divisi'
                    },
                    {
                        data: 'nama_divisi',
                        name: 'nama_divisi'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at'
                    },
                    {
                        data: 'updated_at',
                        name: 'updated_at'
                    }
                ],
                dom: '<"text-right"l>t<"grid grid-cols-2 mt-4 dark:bg-gray-700 dark:text-white"ip>'
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
                table.search($('#mySearchText').val()).draw();
            });
        });
    </script>
</body>

</html>

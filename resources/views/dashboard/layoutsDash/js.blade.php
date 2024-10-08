<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
@vite(['resources/js/app.js', 'resources/js/chart.js', 'resources/js/simpleTables.js', 'resources/js/alpine.js'])
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.tailwindcss.js"></script>
<script src="https://cdn.jsdelivr.net/npm/luxon@3.5.0/build/global/luxon.min.js"></script>
<script src="https://cdn.datatables.net/datetime/1.5.4/js/dataTables.dateTime.min.js"></script>

<script>
    // next & prev button on carousel
    const scrollContainer = document.getElementById("scrollContainer");
    const nextButton = document.getElementById("nextButton");
    const prevButton = document.getElementById("prevButton");

    function scrollContent(direction) {
        scrollContainer.scrollBy({
            left: direction * 300,
            behavior: "smooth",
        });
    }

    function updateButtonVisibility() {
        const hasScroll = scrollContainer.scrollWidth > scrollContainer.clientWidth;
        nextButton.style.display = prevButton.style.display = hasScroll ? "block" : "none";
    }

    nextButton.addEventListener("click", () => scrollContent(1));
    prevButton.addEventListener("click", () => scrollContent(-1));

    // Cek pada load pertama dan saat resize
    updateButtonVisibility();
    window.addEventListener("resize", updateButtonVisibility);

    ///////////////////////
    // enable dark mode //
    const themeToggleDarkBtn = document.getElementById('theme-toggle-dark');
    const themeToggleLightBtn = document.getElementById('theme-toggle-light');

    function toggleTheme(isDark) {
        document.documentElement.classList.toggle('dark', isDark);
        localStorage.setItem('color-theme', isDark ? 'dark' : 'light');
        themeToggleDarkBtn.classList.toggle('text-gray-300', isDark);
        themeToggleDarkBtn.classList.toggle('text-gray-200', !isDark);
        themeToggleLightBtn.classList.toggle('text-gray-700', isDark);
        themeToggleLightBtn.classList.toggle('text-red-400', !isDark);
    }

    const isDarkMode = localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window
        .matchMedia('(prefers-color-scheme: dark)').matches);
    toggleTheme(isDarkMode);

    themeToggleDarkBtn.addEventListener('click', () => toggleTheme(true));
    themeToggleLightBtn.addEventListener('click', () => toggleTheme(false));
    // end enable dark mode //
    /////////////////////////

    /////////////////////////
    // delete modal //
    // document.addEventListener('DOMContentLoaded', function() {

    //     const deleteButtons = document.querySelectorAll('.delete-btn');
    //     const deleteForm = document.getElementById('deleteForm');
    //     const currentRoute = '{{ request()->segment(2) }}';

    //     deleteButtons.forEach(button => {
    //         button.addEventListener('click', function() {
    //             const itemId = this.getAttribute('data-id');
    //             const actionUrl = `${currentRoute}/delete/${itemId}`;
    //             deleteForm.setAttribute('action', actionUrl);
    //         });
    //     });
    // });

    function deleteModal() {

        const modalEl = document.getElementById('deleteModal');
        if (modalEl) {
            new Modal(modalEl); // Assuming you have imported Modal from Flowbite

            const currentRoute = '{{ request()->segment(2) }}';

            // Delegate click event to the table
            $('#tableProduct').on('click', '.delete-btn', function() {
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



    // datatables //
    ///////////////
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
        let table = $('#tableProduct').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            perPageSelect: [5, 25, 50, 100],
            ajax: {
                url: "{{ route('getDataDivision') }}",
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
            dom: '<"text-left lg:text-right dark:text-white"l><"relative overflow-x-auto w-full"t><"grid text-center gap-4 lg:grid-cols-2 mt-4 dark:text-white"<"lg:mt-3"i>p>'
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

        const searchInput = document.getElementById("mySearchText");
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
            $('#tableProduct').DataTable().search('').draw(); // Clear the search and redraw table
        }
    }
    // end datatables //
    ///////////////////

    $(document).ready(function() {
        deleteModal();
        showDatatables();
    });
</script>

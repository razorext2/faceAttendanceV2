<!-- start DeleteModal -->
<div id="confirmModal" data-modal-placement="center-center" tabindex="-1"
    class="fixed z-50 hidden w-full h-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 bg-gray-800/50">
    <div class="relative w-full max-w-md max-h-full mx-auto">
        <div class="relative bg-white rounded-lg shadow ring-1 ring-gray-300 dark:bg-gray-700 dark:ring-gray-500">
            <!-- Modal Header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Peringatan
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="confirmModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal Body -->
            <div class="p-6">
                <p class="text-sm text-gray-500 dark:text-gray-400">
                    Are you sure you want to confirm this data? This action cannot be undone.
                </p>
            </div>
            <!-- Modal Footer -->
            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                <!-- Delete Confirmation Form -->
                <form id="confirmForm" method="POST" action="">
                    @csrf
                    @method('put')
                    <button type="submit"
                        class="px-4 py-2 text-sm font-medium text-white bg-green-600 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-800 dark:hover:bg-green-900 dark:focus:ring-green-900">
                        Konfirmasi Pengajuan
                    </button>
                </form>
                <button data-modal-hide="confirmModal" type="button"
                    class="px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-gray-900 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                    Cancel
                </button>
            </div>
        </div>
    </div>
</div>
<!-- end DeleteModal -->
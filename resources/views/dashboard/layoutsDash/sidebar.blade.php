<!-- Sidebar Navigation -->
<aside id="logo-sidebar" class="shadow-sm fixed top-0 left-0 z-40 w-72 h-screen pt-16 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full p-5 overflow-y-auto bg-white">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="{{ route('dashboard') }}" class="flex items-center p-2 rounded-lg group {{ Route::currentRouteName() == 'dashboard' ? 'text-gray-900 bg-gray-100' : 'text-gray-900 hover:bg-gray-100' }}"
                    role="menuitem">
                    <svg class="fi-sidebar-item-icon h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"></path>
                    </svg>
                    <span class="ms-3 text-sm">Dashboard</span>
                </a>
            </li>
            <li x-data="{ absensi: {{ (Route::is('attendanceIn.view') || Route::is('attendanceOut.view')) ? 'true' : 'false' }} }">
                <button @click="absensi = !absensi" type="button"
                    class="flex items-center w-full p-2 text-base text-gray-900 transition duration-200 rounded-lg group hover:bg-gray-100"
                    aria-controls="dropdown-example" :aria-expanded="absensi">
                    <svg class="fi-sidebar-item-icon h-6 w-6 text-gray-400 dark:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z"></path>
                    </svg>
                    <span class="flex-1 ms-3 text-sm text-left whitespace-nowrap">Absensi</span>

                    <svg class="inline w-4 h-4 ml-1 mt-1 transition-transform transform"
                        :class="{'rotate-180 duration-200': absensi}" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>

                <!-- Dropdown Menu -->
                <ul id="dropdown-example" x-show="absensi"
                    x-transition:enter="transition ease-in duration-200"
                    x-transition:enter-start="transform opacity-0 -translate-y-5"
                    x-transition:leave="transition ease-out duration-200"
                    x-transition:leave-end="transform opacity-0 -translate-y-5"
                    class="py-4 space-y-4">
                    <li>
                        <a href="{{ route('attendanceIn.view') }}"
                            class="flex items-center w-full p-2 rounded-lg pl-11 group 
               {{ Route::is('attendanceIn.view') ? 'bg-gray-200' : 'hover:bg-gray-100' }}">
                            <svg class="fi-btn-icon h-5 w-5 text-gray-400 rotate-180" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M3 4.25A2.25 2.25 0 0 1 5.25 2h5.5A2.25 2.25 0 0 1 13 4.25v2a.75.75 0 0 1-1.5 0v-2a.75.75 0 0 0-.75-.75h-5.5a.75.75 0 0 0-.75.75v11.5c0 .414.336.75.75.75h5.5a.75.75 0 0 0 .75-.75v-2a.75.75 0 0 1 1.5 0v2A2.25 2.25 0 0 1 10.75 18h-5.5A2.25 2.25 0 0 1 3 15.75V4.25Z" clip-rule="evenodd"></path>
                                <path fill-rule="evenodd" d="M19 10a.75.75 0 0 0-.75-.75H8.704l1.048-.943a.75.75 0 1 0-1.004-1.114l-2.5 2.25a.75.75 0 0 0 0 1.114l2.5 2.25a.75.75 0 1 0 1.004-1.114l-1.048-.943h9.546A.75.75 0 0 0 19 10Z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap text-sm">Masuk</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('attendanceOut.view') }}"
                            class="flex items-center w-full p-2 rounded-lg pl-11 group 
               {{ Route::is('attendanceOut.view') ? 'bg-gray-200' : 'hover:bg-gray-100' }}">
                            <svg class="fi-btn-icon h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M3 4.25A2.25 2.25 0 0 1 5.25 2h5.5A2.25 2.25 0 0 1 13 4.25v2a.75.75 0 0 1-1.5 0v-2a.75.75 0 0 0-.75-.75h-5.5a.75.75 0 0 0-.75.75v11.5c0 .414.336.75.75.75h5.5a.75.75 0 0 0 .75-.75v-2a.75.75 0 0 1 1.5 0v2A2.25 2.25 0 0 1 10.75 18h-5.5A2.25 2.25 0 0 1 3 15.75V4.25Z" clip-rule="evenodd"></path>
                                <path fill-rule="evenodd" d="M19 10a.75.75 0 0 0-.75-.75H8.704l1.048-.943a.75.75 0 1 0-1.004-1.114l-2.5 2.25a.75.75 0 0 0 0 1.114l2.5 2.25a.75.75 0 1 0 1.004-1.114l-1.048-.943h9.546A.75.75 0 0 0 19 10Z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap text-sm">Keluar</span>
                        </a>
                    </li>
                </ul>
            </li>


            <li>
                <a href="{{ route('dashboard.pegawai') }}" class="flex items-center p-2 rounded-lg 
                {{ Route::currentRouteName() == 'dashboard.pegawai' ? 'text-gray-900 bg-gray-100' : 'text-gray-900 hover:bg-gray-100' }}"
                    role="menuitem">
                    <svg class=" fi-sidebar-item-icon h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z"></path>
                    </svg>
                    <span class="flex-1 ms-3 text-sm whitespace-nowrap">Pegawai</span>
                </a>
            </li>
            <li>
                <a href="{{ route('dashboard.jabatan') }}"
                    class="flex items-center p-2 rounded-lg
              {{ Route::currentRouteName() == 'dashboard.jabatan' ? 'text-gray-900 bg-gray-100' : 'text-gray-900 hover:bg-gray-100' }}"
                    role="menuitem">
                    <svg class="fi-sidebar-item-icon h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 6.878V6a2.25 2.25 0 0 1 2.25-2.25h7.5A2.25 2.25 0 0 1 18 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 0 0 4.5 9v.878m13.5-3A2.25 2.25 0 0 1 19.5 9v.878m0 0a2.246 2.246 0 0 0-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0 1 21 12v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6c0-.98.626-1.813 1.5-2.122"></path>
                    </svg>
                    <span class="flex-1 ms-3 text-sm whitespace-nowrap">Jabatan</span>
                </a>
            </li>

            <li>
                <a href="#" class="flex items-center p-2 rounded-lg group text-gray-900 hover:bg-gray-100">
                    <svg class="fi-sidebar-item-icon h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244"></path>
                    </svg>
                    <span class="flex-1 ms-3 text-sm whitespace-nowrap">Log History</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
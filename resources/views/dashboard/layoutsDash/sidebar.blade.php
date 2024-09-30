<!-- Sidebar Navigation -->
<aside id="logo-sidebar" class="shadow-sm fixed top-0 left-0 z-40 w-72 h-screen pt-16 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-500" aria-label="Sidebar">
    <div class="h-full p-5 overflow-y-auto">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="{{ route('dashboard') }}" class="flex items-center p-2 rounded-lg group {{ Route::currentRouteName() == 'dashboard' ? 'text-gray-900 bg-gray-100 dark:bg-transparent dark:text-white' : 'text-gray-900 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-transparent dark:hover:text-white' }}"
                    role="menuitem">
                    <svg class="fi-sidebar-item-icon h-6 w-6 text-gray-400 {{ Route::currentRouteName() == 'dashboard' ? 'dark:text-white' : 'dark:hover:text-white' }}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"></path>
                    </svg>
                    <span class="ms-3 text-sm">Dashboard</span>
                </a>
            </li>
            <li x-data="{ absensi: {{ (Route::is('attendanceIn.view') || Route::is('attendanceOut.view')) ? 'true' : 'false' }} }">
                <button @click="absensi = !absensi" type="button"
                    class="flex items-center w-full p-2 text-base text-gray-900 transition duration-200 rounded-lg group hover:bg-gray-100 {{ Route::is('attendanceIn.view') || Route::is('attendanceOut.view') ? 'text-gray-900 dark:bg-transparent dark:hover:bg-transparent dark:text-white' : 'text-gray-900 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-transparent dark:hover:text-white' }}"
                    aria-controls="dropdown-example" :aria-expanded="absensi">
                    <svg class="fi-sidebar-item-icon h-6 w-6 text-gray-400 {{ (Route::is('attendanceIn.view') || Route::is('attendanceOut.view')) ? 'dark:text-white' : 'dark:hover:text-white' }}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
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
               {{ Route::is('attendanceIn.view') ? 'text-gray-900 bg-gray-100 dark:bg-transparent dark:text-white' : 'text-gray-900 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-transparent dark:hover:text-white' }}">
                            <svg class="fi-btn-icon h-5 w-5 text-gray-400 rotate-180 {{ Route::currentRouteName() == 'attendanceIn.view' ? 'dark:text-white' : 'dark:hover:text-white' }}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M3 4.25A2.25 2.25 0 0 1 5.25 2h5.5A2.25 2.25 0 0 1 13 4.25v2a.75.75 0 0 1-1.5 0v-2a.75.75 0 0 0-.75-.75h-5.5a.75.75 0 0 0-.75.75v11.5c0 .414.336.75.75.75h5.5a.75.75 0 0 0 .75-.75v-2a.75.75 0 0 1 1.5 0v2A2.25 2.25 0 0 1 10.75 18h-5.5A2.25 2.25 0 0 1 3 15.75V4.25Z" clip-rule="evenodd"></path>
                                <path fill-rule="evenodd" d="M19 10a.75.75 0 0 0-.75-.75H8.704l1.048-.943a.75.75 0 1 0-1.004-1.114l-2.5 2.25a.75.75 0 0 0 0 1.114l2.5 2.25a.75.75 0 1 0 1.004-1.114l-1.048-.943h9.546A.75.75 0 0 0 19 10Z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap text-sm">Masuk</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('attendanceOut.view') }}"
                            class="flex items-center w-full p-2 rounded-lg pl-11 group 
               {{ Route::is('attendanceOut.view') ? 'text-gray-900 bg-gray-100 dark:bg-transparent dark:text-white' : 'text-gray-900 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-transparent dark:hover:text-white' }}">
                            <svg class="fi-btn-icon h-5 w-5 text-gray-400 {{ Route::currentRouteName() == 'attendanceOut.view' ? 'dark:text-white' : 'dark:hover:text-white' }}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
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
                {{ Route::currentRouteName() == 'dashboard.pegawai' || Route::currentRouteName() == 'pegawai.add' || Route::currentRouteName() == 'pegawai.edit' || Route::currentRouteName() == 'pegawai.detail' ? 'text-gray-900 bg-gray-100 dark:bg-transparent dark:text-white' : 'text-gray-900 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-transparent dark:hover:text-white' }}"
                    role="menuitem">
                    <svg class=" fi-sidebar-item-icon h-6 w-6 text-gray-400 {{ Route::currentRouteName() == 'dashboard.pegawai' ? 'dark:text-white' : 'dark:hover:text-white' }}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z"></path>
                    </svg>
                    <span class="flex-1 ms-3 text-sm whitespace-nowrap">Pegawai</span>
                </a>
            </li>
            <li>
                <a href="{{ route('dashboard.jabatan') }}"
                    class="flex items-center p-2 rounded-lg
              {{ Route::currentRouteName() == 'dashboard.jabatan' || Route::currentRouteName() == 'jabatan.add' || Route::currentRouteName() == 'jabatan.edit' ? 'text-gray-900 bg-gray-100 dark:bg-transparent dark:text-white' : 'text-gray-900 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-transparent dark:hover:text-white' }}"
                    role="menuitem">
                    <svg class="fi-sidebar-item-icon h-6 w-6 text-gray-400 {{ Route::currentRouteName() == 'dashboard.jabatan' ? 'dark:text-white' : 'dark:hover:text-white' }}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 6.878V6a2.25 2.25 0 0 1 2.25-2.25h7.5A2.25 2.25 0 0 1 18 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 0 0 4.5 9v.878m13.5-3A2.25 2.25 0 0 1 19.5 9v.878m0 0a2.246 2.246 0 0 0-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0 1 21 12v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6c0-.98.626-1.813 1.5-2.122"></path>
                    </svg>
                    <span class="flex-1 ms-3 text-sm whitespace-nowrap">Jabatan</span>
                </a>
            </li>

            <li x-data="{ lokasi: {{ (Route::is('dashboard.division') || Route::is('division.add') || Route::is('division.edit') ||  Route::is('dashboard.placement') ||  Route::is('placement.add') ||  Route::is('placement.edit')) ? 'true' : 'false' }} }">
                <button @click="lokasi = !lokasi" type="button"
                    class="flex items-center w-full p-2 text-base text-gray-900 transition duration-200 rounded-lg group hover:bg-gray-100 {{ Route::is('dashboard.division') || Route::is('dashboard.placement') ? 'text-gray-900 dark:bg-transparent dark:hover:bg-transparent dark:text-white' : 'text-gray-900 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-transparent dark:hover:text-white' }}"
                    aria-controls="dropdown-example" :aria-expanded="lokasi">
                    <svg xmlns="http://www.w3.org/2000/svg" class="fi-sidebar-item-icon h-6 w-6 text-gray-400 {{ (Route::is('dashboard.division') || Route::is('dashboard.placement')) ? 'dark:fill-white' : 'dark:hover:fill-white' }}" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#9ca3af" version="1.1" id="Layer_1" viewBox="0 0 368.666 368.666" xml:space="preserve">
                        <path d="M184.333,0C102.01,0,35.036,66.974,35.036,149.297c0,33.969,11.132,65.96,32.193,92.515     c27.27,34.383,106.572,116.021,109.934,119.479l7.169,7.375l7.17-7.374c3.364-3.46,82.69-85.116,109.964-119.51     c21.042-26.534,32.164-58.514,32.164-92.485C333.63,66.974,266.656,0,184.333,0z M285.795,229.355     c-21.956,27.687-80.92,89.278-101.462,110.581c-20.54-21.302-79.483-82.875-101.434-110.552     c-18.228-22.984-27.863-50.677-27.863-80.087C55.036,78.002,113.038,20,184.333,20c71.294,0,129.297,58.002,129.296,129.297     C313.629,178.709,304.004,206.393,285.795,229.355z" />
                        <path d="M184.333,59.265c-48.73,0-88.374,39.644-88.374,88.374c0,48.73,39.645,88.374,88.374,88.374s88.374-39.645,88.374-88.374     S233.063,59.265,184.333,59.265z M184.333,216.013c-37.702,0-68.374-30.673-68.374-68.374c0-37.702,30.673-68.374,68.374-68.374     s68.373,30.673,68.374,68.374C252.707,185.341,222.035,216.013,184.333,216.013z" />
                    </svg>
                    <span class="flex-1 ms-3 text-sm text-left whitespace-nowrap">Lokasi</span>

                    <svg class="inline w-4 h-4 ml-1 mt-1 transition-transform transform"
                        :class="{'rotate-180 duration-200': lokasi}" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>

                <ul id="dropdown-example" x-show="lokasi"
                    x-transition:enter="transition ease-in duration-200"
                    x-transition:enter-start="transform opacity-0 -translate-y-5"
                    x-transition:leave="transition ease-out duration-200"
                    x-transition:leave-end="transform opacity-0 -translate-y-5"
                    class="py-4 space-y-4">
                    <li>
                        <a href="{{ route('dashboard.division') }}"
                            class="flex items-center w-full p-2 rounded-lg pl-11 group 
               {{ Route::is('dashboard.division') || Route::is('division.add') || Route::is('division.edit') ? 'text-gray-900 bg-gray-100 dark:bg-transparent dark:text-white' : 'text-gray-900 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-transparent dark:hover:text-white' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fi-sidebar-item-icon h-5 w-5 {{ Route::currentRouteName() == 'dashboard.division' || Route::currentRouteName() == 'division.add' || Route::currentRouteName() == 'division.edit' ? 'dark:fill-white' : 'dark:hover:fill-white' }}" fill="#9ca3af" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" version="1.1" id="Capa_1" viewBox="0 0 28.05 28.05" xml:space="preserve">
                                <path d="M25.353,0H2.699c-1.25,0-2.265,1-2.265,2.232V25.82c0,1.23,1.015,2.23,2.265,2.23h22.654c1.248,0,2.264-1,2.264-2.23V2.232   C27.617,1,26.601,0,25.353,0z M4.055,1.68h19.941c1.1,0,1.993,0.877,1.993,1.965v3.852H2.063V3.645   C2.063,2.557,2.954,1.68,4.055,1.68z M2.063,24.408V9.668h6.896v16.705H4.055C2.954,26.373,2.063,25.492,2.063,24.408z    M23.996,26.373H11.215V9.668h14.774v14.74C25.99,25.492,25.096,26.373,23.996,26.373z" />
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap text-sm">Divisi</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('dashboard.placement') }}"
                            class="flex items-center w-full p-2 rounded-lg pl-11 group 
               {{ Route::is('dashboard.placement') || Route::is('placement.add') || Route::is('placement.edit') ? 'text-gray-900 bg-gray-100 dark:bg-transparent dark:text-white' : 'text-gray-900 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-transparent dark:hover:text-white' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="fi-sidebar-item-icon h-6 w-6 {{ Route::currentRouteName() == 'dashboard.placement' || Route::currentRouteName() == 'placement.add' || Route::currentRouteName() == 'placement.edit' ? 'dark:fill-white' : 'dark:hover:fill-white' }}" fill="#9ca3af" version="1.1" id="Layer_1" viewBox="0 0 512 512" xml:space="preserve">

                                <path d="M199.021,43.436h-63.367c-5.633,0-10.199,4.566-10.199,10.199v63.367c0,5.633,4.566,10.199,10.199,10.199h63.367    c5.633,0,10.199-4.566,10.199-10.199V53.636C209.22,48.003,204.654,43.436,199.021,43.436z M188.822,106.803h-42.968V63.835    h42.968V106.803z" />
                                <path d="M312.468,43.436h-63.367c-5.633,0-10.199,4.566-10.199,10.199v63.367c0,5.633,4.566,10.199,10.199,10.199h63.367    c5.633,0,10.199-4.566,10.199-10.199V53.636C322.667,48.003,318.101,43.436,312.468,43.436z M302.269,106.803H259.3V63.835h42.968    V106.803z" />
                                <path d="M199.021,155.861h-63.367c-5.633,0-10.199,4.566-10.199,10.199v63.367c0,5.633,4.566,10.199,10.199,10.199h63.367    c5.633,0,10.199-4.566,10.199-10.199V166.06C209.22,160.427,204.654,155.861,199.021,155.861z M188.822,219.228h-42.968V176.26    h42.968V219.228z" />
                                <path d="M312.468,155.861h-63.367c-5.633,0-10.199,4.566-10.199,10.199v63.367c0,5.633,4.566,10.199,10.199,10.199h63.367    c5.633,0,10.199-4.566,10.199-10.199V166.06C322.667,160.427,318.101,155.861,312.468,155.861z M302.269,219.228H259.3V176.26    h42.968V219.228z" />
                                <path d="M199.021,268.286h-63.367c-5.633,0-10.199,4.566-10.199,10.199v63.367c0,5.633,4.566,10.199,10.199,10.199h63.367    c5.633,0,10.199-4.566,10.199-10.199v-63.367C209.22,272.852,204.654,268.286,199.021,268.286z M188.822,331.653h-42.968v-42.968    h42.968V331.653z" />
                                <path d="M367.636,315.347V10.199C367.636,4.566,363.07,0,357.437,0H90.685c-5.633,0-10.199,4.566-10.199,10.199v491.602    c0,5.633,4.566,10.199,10.199,10.199h266.753c0.396,0,0.824-0.042,1.267-0.113c3.47-0.559,6.578-2.516,8.76-5.272    c0.019-0.024,0.038-0.048,0.056-0.071c6.55-8.391,63.993-83.035,63.993-119.638C431.514,349.945,403.528,319.413,367.636,315.347z     M265.986,491.602H234.26v-31.193c0-5.633-4.566-10.199-10.199-10.199c-5.633,0-10.199,4.566-10.199,10.199v31.193h-31.726    v-85.383h83.85V491.602z M286.384,491.602V396.02c0-5.633-4.566-10.199-10.199-10.199H171.937    c-5.633,0-10.199,4.566-10.199,10.199v95.582h-60.854V20.398h246.355v295.537c-8.842,1.521-17.138,4.649-24.572,9.089v-46.539    c0-5.633-4.566-10.199-10.199-10.199h-63.367c-5.633,0-10.199,4.566-10.199,10.199v63.367c0,5.633,4.566,10.199,10.199,10.199    h47.37c-5.74,10.336-9.022,22.218-9.022,34.856c0,28.22,34.142,79.048,52.783,104.695H286.384z M302.269,288.684v42.968H259.3    v-42.968H302.269z M359.48,483.382c-22.642-30.698-51.632-76.609-51.632-96.475c0-28.471,23.162-51.635,51.633-51.635    c28.471,0,51.634,23.163,51.634,51.635C411.116,406.754,382.123,452.675,359.48,483.382z" />
                                <path d="M359.481,354.036c-18.125,0-32.871,14.745-32.871,32.871c0,18.125,14.746,32.871,32.871,32.871    s32.871-14.746,32.871-32.871S377.606,354.036,359.481,354.036z M359.482,399.379c-6.877,0-12.473-5.595-12.473-12.473    s5.595-12.473,12.473-12.473c6.877,0,12.473,5.594,12.473,12.473C371.955,393.784,366.359,399.379,359.482,399.379z" />
                                <path d="M224.061,418.526c-5.633,0-10.199,4.566-10.199,10.199v1.022c0,5.633,4.566,10.199,10.199,10.199    c5.633,0,10.199-4.566,10.199-10.199v-1.022C234.26,423.093,229.694,418.526,224.061,418.526z" />
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap text-sm">Penempatan</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="{{ route('dashboard.log') }}" class="flex items-center p-2 rounded-lg group {{ Route::is('dashboard.log') ? 'text-gray-900 bg-gray-100 dark:bg-transparent dark:text-white' : 'text-gray-900 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-transparent dark:hover:text-white' }}">
                    <svg class="fi-sidebar-item-icon h-6 w-6 text-gray-400 {{ Route::currentRouteName() == 'dashboard.log' ? 'dark:text-white' : 'dark:hover:text-white' }}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244"></path>
                    </svg>
                    <span class="flex-1 ms-3 text-sm whitespace-nowrap">Log History</span>
                </a>
            </li>

        </ul>
    </div>

    <div class="h-auto w-auto p-5 absolute bottom-0 left-0 grid grid-cols-1">
        <!-- start footer -->
        @include('dashboard.layoutsDash.footer')
        <!-- footer -->
    </div>
</aside>
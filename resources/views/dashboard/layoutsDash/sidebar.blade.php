<!-- Sidebar Navigation -->
<aside
	class="dark:bg-[#09090b] fixed left-0 top-0 z-40 hidden h-full w-72 -translate-x-full bg-gray-50 pt-16 transition-transform sm:translate-x-0 md:block"
	id="logo-sidebar" aria-label="Sidebar">
	<div class="relative mt-3 max-h-[87.5%] overflow-y-auto p-5">
		<ul class="space-y-2 font-medium">
			<li>
				<a
					class="{{ Route::currentRouteName() == 'dashboard' ? 'text-red-600 font-bold bg-gray-100 dark:bg-[#18181b]' : 'text-gray-900 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-transparent hover:text-red-600' }} group flex items-center rounded-xl p-2"
					href="{{ route('dashboard') }}" role="menuitem">
					<svg
						class="fi-sidebar-item-icon {{ Route::currentRouteName() == 'dashboard' ? 'stroke-red-600 ' : 'stroke-gray-400' }} h-6 w-6 text-gray-400 group-hover:stroke-red-600"
						data-slot="icon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
						stroke-width="1.5" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round"
							d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25">
						</path>
					</svg>
					<span class="ms-3 text-sm">Dashboard</span>
				</a>
			</li>
			<li x-data="{ absensi: {{ Route::is('attendanceIn.view') || Route::is('attendanceOut.view') ? 'true' : 'false' }} }">
				<button
					class="{{ Route::is('attendanceIn.view') || Route::is('attendanceOut.view') ? 'text-red-600 font-bold bg-gray-100 dark:bg-[#18181b]' : 'text-gray-900 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-[#18181b] hover:text-red-600' }} group flex w-full items-center rounded-xl p-2 text-base text-gray-900 transition duration-200"
					type="button" aria-controls="dropdown-example" @click="absensi = !absensi" :aria-expanded="absensi">
					<svg
						class="fi-sidebar-item-icon {{ Route::is('attendanceIn.view') || Route::is('attendanceOut.view') ? 'stroke-red-600' : 'stroke-gray-400' }} h-6 w-6 text-gray-400 group-hover:stroke-red-600"
						data-slot="icon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
						stroke-width="1.5" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round"
							d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z">
						</path>
					</svg>
					<span class="ms-3 flex-1 whitespace-nowrap text-left text-sm">Absensi</span>

					<svg class="ml-1 mt-1 inline h-4 w-4 transform transition-transform"
						:class="{ 'rotate-180 duration-200': absensi }" fill="currentColor" viewBox="0 0 20 20">
						<path fill-rule="evenodd"
							d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
							clip-rule="evenodd"></path>
					</svg>
				</button>

				<!-- Dropdown Menu -->
				<ul class="space-y-4 py-4" id="dropdown-example" x-show="absensi"
					x-transition:enter="transition ease-in duration-200" x-transition:enter-start="transform opacity-0 -translate-y-5"
					x-transition:leave="transition ease-out duration-200" x-transition:leave-end="transform opacity-0 -translate-y-5">
					<li>
						<a
							class="{{ Route::is('attendanceIn.view') ? 'text-red-600 font-bold bg-gray-100 dark:bg-[#18181b]' : 'text-gray-900 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-transparent hover:text-red-600' }} group flex w-full items-center rounded-xl p-2 pl-11"
							href="{{ route('attendanceIn.view') }}">
							<svg
								class="fi-btn-icon {{ Route::currentRouteName() == 'attendanceIn.view' ? 'fill-red-600' : 'fill-gray-400' }} h-5 w-5 rotate-180 text-gray-400 group-hover:fill-red-600"
								aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd"
									d="M3 4.25A2.25 2.25 0 0 1 5.25 2h5.5A2.25 2.25 0 0 1 13 4.25v2a.75.75 0 0 1-1.5 0v-2a.75.75 0 0 0-.75-.75h-5.5a.75.75 0 0 0-.75.75v11.5c0 .414.336.75.75.75h5.5a.75.75 0 0 0 .75-.75v-2a.75.75 0 0 1 1.5 0v2A2.25 2.25 0 0 1 10.75 18h-5.5A2.25 2.25 0 0 1 3 15.75V4.25Z"
									clip-rule="evenodd"></path>
								<path fill-rule="evenodd"
									d="M19 10a.75.75 0 0 0-.75-.75H8.704l1.048-.943a.75.75 0 1 0-1.004-1.114l-2.5 2.25a.75.75 0 0 0 0 1.114l2.5 2.25a.75.75 0 1 0 1.004-1.114l-1.048-.943h9.546A.75.75 0 0 0 19 10Z"
									clip-rule="evenodd"></path>
							</svg>
							<span class="ms-3 flex-1 whitespace-nowrap text-sm">Masuk</span>
						</a>
					</li>
					<li>
						<a
							class="{{ Route::is('attendanceOut.view') ? 'text-red-600 font-bold bg-gray-100 dark:bg-[#18181b]' : 'text-gray-900 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-transparent hover:text-red-600' }} group flex w-full items-center rounded-xl p-2 pl-11"
							href="{{ route('attendanceOut.view') }}">
							<svg
								class="fi-btn-icon {{ Route::currentRouteName() == 'attendanceOut.view' ? 'fill-red-600' : 'fill-gray-400' }} h-5 w-5 text-gray-400 group-hover:fill-red-600"
								aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd"
									d="M3 4.25A2.25 2.25 0 0 1 5.25 2h5.5A2.25 2.25 0 0 1 13 4.25v2a.75.75 0 0 1-1.5 0v-2a.75.75 0 0 0-.75-.75h-5.5a.75.75 0 0 0-.75.75v11.5c0 .414.336.75.75.75h5.5a.75.75 0 0 0 .75-.75v-2a.75.75 0 0 1 1.5 0v2A2.25 2.25 0 0 1 10.75 18h-5.5A2.25 2.25 0 0 1 3 15.75V4.25Z"
									clip-rule="evenodd"></path>
								<path fill-rule="evenodd"
									d="M19 10a.75.75 0 0 0-.75-.75H8.704l1.048-.943a.75.75 0 1 0-1.004-1.114l-2.5 2.25a.75.75 0 0 0 0 1.114l2.5 2.25a.75.75 0 1 0 1.004-1.114l-1.048-.943h9.546A.75.75 0 0 0 19 10Z"
									clip-rule="evenodd"></path>
							</svg>
							<span class="ms-3 flex-1 whitespace-nowrap text-sm">Keluar</span>
						</a>
					</li>
				</ul>
			</li>
			@can('capture')
				<li>
					<a
						class="{{ Route::currentRouteName() == 'dashboard.capture' ? 'text-red-600 font-bold bg-gray-100 dark:bg-[#18181b]' : 'text-gray-900 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-transparent hover:text-red-600' }} flex items-center rounded-xl p-2"
						href="{{ route('dashboard.capture') }}" role="menuitem">
						<svg
							class="fi-sidebar-item-icon {{ Route::currentRouteName() == 'dashboard.capture' ? 'stroke-red-600' : 'stroke-gray-400' }} h-6 w-6 text-gray-400 group-hover:stroke-red-600"
							viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
							<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
							<g id="SVGRepo_iconCarrier">
								<path
									d="M3 4H8M3 11H9.76389M14.2361 11H21M21 7.2V16.8C21 17.9201 21 18.4802 20.782 18.908C20.5903 19.2843 20.2843 19.5903 19.908 19.782C19.4802 20 18.9201 20 17.8 20H6.2C5.0799 20 4.51984 20 4.09202 19.782C3.71569 19.5903 3.40973 19.2843 3.21799 18.908C3 18.4802 3 17.9201 3 16.8V10.2C3 9.0799 3 8.51984 3.21799 8.09202C3.40973 7.71569 3.71569 7.40973 4.09202 7.21799C4.51984 7 5.0799 7 6.2 7H7.67452C8.1637 7 8.40829 7 8.63846 6.94474C8.84254 6.89575 9.03763 6.81494 9.21657 6.70528C9.4184 6.5816 9.59135 6.40865 9.93726 6.06274L11.0627 4.93726C11.4086 4.59136 11.5816 4.4184 11.7834 4.29472C11.9624 4.18506 12.1575 4.10425 12.3615 4.05526C12.5917 4 12.8363 4 13.3255 4H17.8C18.9201 4 19.4802 4 19.908 4.21799C20.2843 4.40973 20.5903 4.71569 20.782 5.09202C21 5.51984 21 6.0799 21 7.2ZM15 13C15 14.6569 13.6569 16 12 16C10.3431 16 9 14.6569 9 13C9 11.3431 10.3431 10 12 10C13.6569 10 15 11.3431 15 13Z"
									stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"></path>
							</g>
						</svg>
						<span class="ms-3 flex-1 whitespace-nowrap text-sm">Record Attendance</span>
					</a>
				</li>
			@endcan

			<li>
				<a
					class="{{ Route::currentRouteName() == 'dashboard.dayoff' || Route::currentRouteName() == 'dayoff.add' || Route::currentRouteName() == 'dayoff.edit' || Route::currentRouteName() == 'dayoff.detail' ? 'text-red-600 font-bold bg-gray-100 dark:bg-[#18181b]' : 'text-gray-900 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-transparent hover:text-red-600' }} group flex items-center rounded-xl p-2"
					href="{{ route('dashboard.dayoff') }}" role="menuitem">
					<svg
						class="fi-sidebar-item-icon {{ Route::currentRouteName() == 'dashboard.dayoff' || Route::currentRouteName() == 'dayoff.add' || Route::currentRouteName() == 'dayoff.edit' || Route::currentRouteName() == 'dayoff.detail' ? 'stroke-red-600' : 'stroke-gray-400' }} h-6 w-6 text-gray-400 group-hover:stroke-red-600"
						viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
						<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
						<g id="SVGRepo_iconCarrier">
							<path
								d="M3 5.5L5 3.5M21 5.5L19 3.5M9 9.5L15 15.5M15 9.5L9 15.5M20 12.5C20 16.9183 16.4183 20.5 12 20.5C7.58172 20.5 4 16.9183 4 12.5C4 8.08172 7.58172 4.5 12 4.5C16.4183 4.5 20 8.08172 20 12.5Z"
								stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
						</g>
					</svg>

					<span class="ms-3 flex-1 whitespace-nowrap text-sm">Time Off</span>
				</a>
			</li>

			@can('pegawai-list')
				<li>
					<a
						class="{{ Route::currentRouteName() == 'dashboard.pegawai' || Route::currentRouteName() == 'pegawai.add' || Route::currentRouteName() == 'pegawai.edit' || Route::currentRouteName() == 'pegawai.detail' || Route::currentRouteName() == 'pegawai.timeline' ? 'text-red-600 font-bold bg-gray-100 dark:bg-[#18181b]' : 'text-gray-900 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-transparent hover:text-red-600' }} group flex items-center rounded-xl p-2"
						href="{{ route('dashboard.pegawai') }}" role="menuitem">
						<svg
							class="fi-sidebar-item-icon {{ Route::currentRouteName() == 'dashboard.pegawai' || Route::currentRouteName() == 'pegawai.add' || Route::currentRouteName() == 'pegawai.edit' || Route::currentRouteName() == 'pegawai.detail' || Route::currentRouteName() == 'pegawai.timeline' ? 'stroke-red-600' : 'stroke-gray-400' }} h-6 w-6 text-gray-400 group-hover:stroke-red-600"
							data-slot="icon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
							stroke-width="1.5" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round"
								d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z">
							</path>
						</svg>
						<span class="ms-3 flex-1 whitespace-nowrap text-sm">Pegawai</span>
					</a>
				</li>
			@endcan

			@can('jabatan-list')
				<li>
					<a
						class="{{ Route::currentRouteName() == 'dashboard.jabatan' || Route::currentRouteName() == 'jabatan.add' || Route::currentRouteName() == 'jabatan.edit' ? 'text-red-600 font-bold bg-gray-100 dark:bg-[#18181b]' : 'text-gray-900 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-transparent hover:text-red-600' }} group flex items-center rounded-xl p-2"
						href="{{ route('dashboard.jabatan') }}" role="menuitem">
						<svg
							class="fi-sidebar-item-icon {{ Route::currentRouteName() == 'dashboard.jabatan' || Route::currentRouteName() == 'jabatan.add' || Route::currentRouteName() == 'jabatan.edit' ? 'stroke-red-600' : 'stroke-gray-400' }} h-6 w-6 text-gray-400 group-hover:stroke-red-600"
							data-slot="icon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
							stroke-width="1.5" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round"
								d="M6 6.878V6a2.25 2.25 0 0 1 2.25-2.25h7.5A2.25 2.25 0 0 1 18 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 0 0 4.5 9v.878m13.5-3A2.25 2.25 0 0 1 19.5 9v.878m0 0a2.246 2.246 0 0 0-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0 1 21 12v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6c0-.98.626-1.813 1.5-2.122">
							</path>
						</svg>
						<span class="ms-3 flex-1 whitespace-nowrap text-sm">Jabatan</span>
					</a>
				</li>
			@endcan

			@can('golongan-list')
				<li>
					<a
						class="{{ Route::currentRouteName() == 'dashboard.golongan' || Route::currentRouteName() == 'golongan.add' || Route::currentRouteName() == 'golongan.edit' ? 'text-red-600 font-bold bg-gray-100 dark:bg-[#18181b]' : 'text-gray-900 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-transparent hover:text-red-600' }} group flex items-center rounded-xl p-2"
						href="{{ route('dashboard.golongan') }}" role="menuitem">
						<svg
							class="fi-sidebar-item-icon {{ Route::currentRouteName() == 'dashboard.golongan' || Route::currentRouteName() == 'golongan.add' || Route::currentRouteName() == 'golongan.edit' ? 'stroke-red-600' : 'stroke-gray-400' }} h-6 w-6 fill-none group-hover:stroke-red-600"
							viewBox="0 0 24 24" fill="" xmlns="http://www.w3.org/2000/svg">
							<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
							<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
							<g id="SVGRepo_iconCarrier">
								<path
									d="M6.00098 4H6.01098M3.17188 10C3.58371 8.83481 4.69495 8 6.00117 8C7.30739 8 8.41863 8.83481 8.83046 10M6.00098 15H6.01098M3.17188 21C3.58371 19.8348 4.69495 19 6.00117 19C7.30739 19 8.41863 19.8348 8.83046 21M13.601 8.5H19.401C19.961 8.5 20.2411 8.5 20.455 8.39101C20.6431 8.29513 20.7961 8.14215 20.892 7.95399C21.001 7.74008 21.001 7.46005 21.001 6.9V6.1C21.001 5.53995 21.001 5.25992 20.892 5.04601C20.7961 4.85785 20.6431 4.70487 20.455 4.60899C20.2411 4.5 19.961 4.5 19.401 4.5H13.601C13.0409 4.5 12.7609 4.5 12.547 4.60899C12.3588 4.70487 12.2058 4.85785 12.11 5.04601C12.001 5.25992 12.001 5.53995 12.001 6.1V6.9C12.001 7.46005 12.001 7.74008 12.11 7.95399C12.2058 8.14215 12.3588 8.29513 12.547 8.39101C12.7609 8.5 13.0409 8.5 13.601 8.5ZM13.601 19.5H19.401C19.961 19.5 20.2411 19.5 20.455 19.391C20.6431 19.2951 20.7961 19.1422 20.892 18.954C21.001 18.7401 21.001 18.4601 21.001 17.9V17.1C21.001 16.5399 21.001 16.2599 20.892 16.046C20.7961 15.8578 20.6431 15.7049 20.455 15.609C20.2411 15.5 19.961 15.5 19.401 15.5H13.601C13.0409 15.5 12.7609 15.5 12.547 15.609C12.3588 15.7049 12.2058 15.8578 12.11 16.046C12.001 16.2599 12.001 16.5399 12.001 17.1V17.9C12.001 18.4601 12.001 18.7401 12.11 18.954C12.2058 19.1422 12.3588 19.2951 12.547 19.391C12.7609 19.5 13.0409 19.5 13.601 19.5ZM7.00098 4C7.00098 4.55228 6.55326 5 6.00098 5C5.44869 5 5.00098 4.55228 5.00098 4C5.00098 3.44772 5.44869 3 6.00098 3C6.55326 3 7.00098 3.44772 7.00098 4ZM7.00098 15C7.00098 15.5523 6.55326 16 6.00098 16C5.44869 16 5.00098 15.5523 5.00098 15C5.00098 14.4477 5.44869 14 6.00098 14C6.55326 14 7.00098 14.4477 7.00098 15Z"
									stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
							</g>
						</svg>
						<span class="ms-3 flex-1 whitespace-nowrap text-sm">Golongan</span>
					</a>
				</li>
			@endcan

			@if (auth()->user()->hasAnyPermission(['divisi-list', 'placement-list']))
				<li x-data="{ lokasi: {{ Route::is('dashboard.division') || Route::is('division.add') || Route::is('division.edit') || Route::is('dashboard.placement') || Route::is('placement.add') || Route::is('placement.edit') ? 'true' : 'false' }} }">
					<button
						class="{{ Route::is('dashboard.division') || Route::is('dashboard.placement') ? 'text-red-600 font-bold bg-gray-100 dark:bg-[#18181b]' : 'text-gray-900 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-[#18181b] hover:text-red-600' }} group flex w-full items-center rounded-xl p-2 text-base text-gray-900 transition duration-200"
						type="button" aria-controls="dropdown-example" @click="lokasi = !lokasi" :aria-expanded="lokasi">
						<svg
							class="fi-sidebar-item-icon {{ Route::is('dashboard.division') || Route::is('dashboard.placement') ? 'fill-red-600' : 'fill-gray-400' }} h-6 w-6 text-gray-400 group-hover:fill-red-600"
							id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
							viewBox="0 0 368.666 368.666" xml:space="preserve">
							<path
								d="M184.333,0C102.01,0,35.036,66.974,35.036,149.297c0,33.969,11.132,65.96,32.193,92.515     c27.27,34.383,106.572,116.021,109.934,119.479l7.169,7.375l7.17-7.374c3.364-3.46,82.69-85.116,109.964-119.51     c21.042-26.534,32.164-58.514,32.164-92.485C333.63,66.974,266.656,0,184.333,0z M285.795,229.355     c-21.956,27.687-80.92,89.278-101.462,110.581c-20.54-21.302-79.483-82.875-101.434-110.552     c-18.228-22.984-27.863-50.677-27.863-80.087C55.036,78.002,113.038,20,184.333,20c71.294,0,129.297,58.002,129.296,129.297     C313.629,178.709,304.004,206.393,285.795,229.355z" />
							<path
								d="M184.333,59.265c-48.73,0-88.374,39.644-88.374,88.374c0,48.73,39.645,88.374,88.374,88.374s88.374-39.645,88.374-88.374     S233.063,59.265,184.333,59.265z M184.333,216.013c-37.702,0-68.374-30.673-68.374-68.374c0-37.702,30.673-68.374,68.374-68.374     s68.373,30.673,68.374,68.374C252.707,185.341,222.035,216.013,184.333,216.013z" />
						</svg>
						<span class="ms-3 flex-1 whitespace-nowrap text-left text-sm">Lokasi</span>

						<svg class="ml-1 mt-1 inline h-4 w-4 transform transition-transform"
							:class="{ 'rotate-180 duration-200': lokasi }" fill="currentColor" viewBox="0 0 20 20">
							<path fill-rule="evenodd"
								d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
								clip-rule="evenodd"></path>
						</svg>
					</button>

					<ul class="space-y-4 py-4" id="dropdown-example" x-show="lokasi"
						x-transition:enter="transition ease-in duration-200"
						x-transition:enter-start="transform opacity-0 -translate-y-5"
						x-transition:leave="transition ease-out duration-200"
						x-transition:leave-end="transform opacity-0 -translate-y-5">
						@can('divisi-list')
							<li>
								<a
									class="{{ Route::is('dashboard.division') || Route::is('division.add') || Route::is('division.edit') ? 'text-red-600 font-bold bg-gray-100 dark:bg-[#18181b]' : 'text-gray-900 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-transparent hover:text-red-600' }} group flex w-full items-center rounded-xl p-2 pl-11"
									href="{{ route('dashboard.division') }}">
									<svg
										class="fi-sidebar-item-icon {{ Route::currentRouteName() == 'dashboard.division' || Route::currentRouteName() == 'division.add' || Route::currentRouteName() == 'division.edit' ? 'fill-red-600' : 'fill-gray-400' }} h-6 w-6 group-hover:fill-red-600"
										id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
										viewBox="0 0 28.05 28.05" xml:space="preserve">
										<path
											d="M25.353,0H2.699c-1.25,0-2.265,1-2.265,2.232V25.82c0,1.23,1.015,2.23,2.265,2.23h22.654c1.248,0,2.264-1,2.264-2.23V2.232   C27.617,1,26.601,0,25.353,0z M4.055,1.68h19.941c1.1,0,1.993,0.877,1.993,1.965v3.852H2.063V3.645   C2.063,2.557,2.954,1.68,4.055,1.68z M2.063,24.408V9.668h6.896v16.705H4.055C2.954,26.373,2.063,25.492,2.063,24.408z    M23.996,26.373H11.215V9.668h14.774v14.74C25.99,25.492,25.096,26.373,23.996,26.373z" />
									</svg>
									<span class="ms-3 flex-1 whitespace-nowrap text-sm">Divisi</span>
								</a>
							</li>
						@endcan

						@can('placement-list')
							<li>
								<a
									class="{{ Route::is('dashboard.placement') || Route::is('placement.add') || Route::is('placement.edit') ? 'text-red-600 font-bold bg-gray-100 dark:bg-[#18181b]' : 'text-gray-900 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-transparent hover:text-red-600' }} group flex w-full items-center rounded-xl p-2 pl-11"
									href="{{ route('dashboard.placement') }}">
									<svg
										class="fi-sidebar-item-icon {{ Route::currentRouteName() == 'dashboard.placement' || Route::currentRouteName() == 'placement.add' || Route::currentRouteName() == 'placement.edit' ? 'fill-red-600' : 'fill-gray-400' }} h-6 w-6 group-hover:fill-red-600"
										id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
										viewBox="0 0 512 512" xml:space="preserve">

										<path
											d="M199.021,43.436h-63.367c-5.633,0-10.199,4.566-10.199,10.199v63.367c0,5.633,4.566,10.199,10.199,10.199h63.367    c5.633,0,10.199-4.566,10.199-10.199V53.636C209.22,48.003,204.654,43.436,199.021,43.436z M188.822,106.803h-42.968V63.835    h42.968V106.803z" />
										<path
											d="M312.468,43.436h-63.367c-5.633,0-10.199,4.566-10.199,10.199v63.367c0,5.633,4.566,10.199,10.199,10.199h63.367    c5.633,0,10.199-4.566,10.199-10.199V53.636C322.667,48.003,318.101,43.436,312.468,43.436z M302.269,106.803H259.3V63.835h42.968    V106.803z" />
										<path
											d="M199.021,155.861h-63.367c-5.633,0-10.199,4.566-10.199,10.199v63.367c0,5.633,4.566,10.199,10.199,10.199h63.367    c5.633,0,10.199-4.566,10.199-10.199V166.06C209.22,160.427,204.654,155.861,199.021,155.861z M188.822,219.228h-42.968V176.26    h42.968V219.228z" />
										<path
											d="M312.468,155.861h-63.367c-5.633,0-10.199,4.566-10.199,10.199v63.367c0,5.633,4.566,10.199,10.199,10.199h63.367    c5.633,0,10.199-4.566,10.199-10.199V166.06C322.667,160.427,318.101,155.861,312.468,155.861z M302.269,219.228H259.3V176.26    h42.968V219.228z" />
										<path
											d="M199.021,268.286h-63.367c-5.633,0-10.199,4.566-10.199,10.199v63.367c0,5.633,4.566,10.199,10.199,10.199h63.367    c5.633,0,10.199-4.566,10.199-10.199v-63.367C209.22,272.852,204.654,268.286,199.021,268.286z M188.822,331.653h-42.968v-42.968    h42.968V331.653z" />
										<path
											d="M367.636,315.347V10.199C367.636,4.566,363.07,0,357.437,0H90.685c-5.633,0-10.199,4.566-10.199,10.199v491.602    c0,5.633,4.566,10.199,10.199,10.199h266.753c0.396,0,0.824-0.042,1.267-0.113c3.47-0.559,6.578-2.516,8.76-5.272    c0.019-0.024,0.038-0.048,0.056-0.071c6.55-8.391,63.993-83.035,63.993-119.638C431.514,349.945,403.528,319.413,367.636,315.347z     M265.986,491.602H234.26v-31.193c0-5.633-4.566-10.199-10.199-10.199c-5.633,0-10.199,4.566-10.199,10.199v31.193h-31.726    v-85.383h83.85V491.602z M286.384,491.602V396.02c0-5.633-4.566-10.199-10.199-10.199H171.937    c-5.633,0-10.199,4.566-10.199,10.199v95.582h-60.854V20.398h246.355v295.537c-8.842,1.521-17.138,4.649-24.572,9.089v-46.539    c0-5.633-4.566-10.199-10.199-10.199h-63.367c-5.633,0-10.199,4.566-10.199,10.199v63.367c0,5.633,4.566,10.199,10.199,10.199    h47.37c-5.74,10.336-9.022,22.218-9.022,34.856c0,28.22,34.142,79.048,52.783,104.695H286.384z M302.269,288.684v42.968H259.3    v-42.968H302.269z M359.48,483.382c-22.642-30.698-51.632-76.609-51.632-96.475c0-28.471,23.162-51.635,51.633-51.635    c28.471,0,51.634,23.163,51.634,51.635C411.116,406.754,382.123,452.675,359.48,483.382z" />
										<path
											d="M359.481,354.036c-18.125,0-32.871,14.745-32.871,32.871c0,18.125,14.746,32.871,32.871,32.871    s32.871-14.746,32.871-32.871S377.606,354.036,359.481,354.036z M359.482,399.379c-6.877,0-12.473-5.595-12.473-12.473    s5.595-12.473,12.473-12.473c6.877,0,12.473,5.594,12.473,12.473C371.955,393.784,366.359,399.379,359.482,399.379z" />
										<path
											d="M224.061,418.526c-5.633,0-10.199,4.566-10.199,10.199v1.022c0,5.633,4.566,10.199,10.199,10.199    c5.633,0,10.199-4.566,10.199-10.199v-1.022C234.26,423.093,229.694,418.526,224.061,418.526z" />
									</svg>
									<span class="ms-3 flex-1 whitespace-nowrap text-sm">Penempatan</span>
								</a>
							</li>
						@endcan
					</ul>
				</li>
			@endif

			@if (auth()->user()->hasAnyPermission(['users-list', 'roles-list', 'permissions-list']))
				<li x-data="{ usermanage: {{ Route::is('dashboard.users') || Route::is('users.add') || Route::is('users.edit') || Route::is('dashboard.permissions') || Route::is('permissions.add') || Route::is('permissions.edit') || Route::is('dashboard.roles') || Route::is('roles.add') || Route::is('roles.edit') ? 'true' : 'false' }} }">
					<button
						class="{{ Route::is('dashboard.users') || Route::is('dashboard.permissions') || Route::is('dashboard.roles') ? 'text-red-600 font-bold bg-gray-100 dark:bg-[#18181b]' : 'text-gray-900 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-[#18181b] hover:text-red-600' }} group flex w-full items-center rounded-xl p-2 text-base text-gray-900 transition duration-200"
						type="button" aria-controls="dropdown-example" @click="usermanage = !usermanage" :aria-expanded="usermanage">
						<svg
							class="fi-sidebar-item-icon {{ Route::is('dashboard.users') || Route::is('dashboard.permissions') || Route::is('dashboard.roles') ? 'stroke-red-600' : 'stroke-gray-400' }} h-6 w-6 text-gray-400 group-hover:stroke-red-600"
							viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
							<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
							<g id="SVGRepo_iconCarrier">
								<path
									d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z"
									stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
								</path>
								<path
									d="M12.9046 3.06005C12.6988 3 12.4659 3 12 3C11.5341 3 11.3012 3 11.0954 3.06005C10.7942 3.14794 10.5281 3.32808 10.3346 3.57511C10.2024 3.74388 10.1159 3.96016 9.94291 4.39272C9.69419 5.01452 9.00393 5.33471 8.36857 5.123L7.79779 4.93281C7.3929 4.79785 7.19045 4.73036 6.99196 4.7188C6.70039 4.70181 6.4102 4.77032 6.15701 4.9159C5.98465 5.01501 5.83376 5.16591 5.53197 5.4677C5.21122 5.78845 5.05084 5.94882 4.94896 6.13189C4.79927 6.40084 4.73595 6.70934 4.76759 7.01551C4.78912 7.2239 4.87335 7.43449 5.04182 7.85566C5.30565 8.51523 5.05184 9.26878 4.44272 9.63433L4.16521 9.80087C3.74031 10.0558 3.52786 10.1833 3.37354 10.3588C3.23698 10.5141 3.13401 10.696 3.07109 10.893C3 11.1156 3 11.3658 3 11.8663C3 12.4589 3 12.7551 3.09462 13.0088C3.17823 13.2329 3.31422 13.4337 3.49124 13.5946C3.69158 13.7766 3.96395 13.8856 4.50866 14.1035C5.06534 14.3261 5.35196 14.9441 5.16236 15.5129L4.94721 16.1584C4.79819 16.6054 4.72367 16.829 4.7169 17.0486C4.70875 17.3127 4.77049 17.5742 4.89587 17.8067C5.00015 18.0002 5.16678 18.1668 5.5 18.5C5.83323 18.8332 5.99985 18.9998 6.19325 19.1041C6.4258 19.2295 6.68733 19.2913 6.9514 19.2831C7.17102 19.2763 7.39456 19.2018 7.84164 19.0528L8.36862 18.8771C9.00393 18.6654 9.6942 18.9855 9.94291 19.6073C10.1159 20.0398 10.2024 20.2561 10.3346 20.4249C10.5281 20.6719 10.7942 20.8521 11.0954 20.94C11.3012 21 11.5341 21 12 21C12.4659 21 12.6988 21 12.9046 20.94C13.2058 20.8521 13.4719 20.6719 13.6654 20.4249C13.7976 20.2561 13.8841 20.0398 14.0571 19.6073C14.3058 18.9855 14.9961 18.6654 15.6313 18.8773L16.1579 19.0529C16.605 19.2019 16.8286 19.2764 17.0482 19.2832C17.3123 19.2913 17.5738 19.2296 17.8063 19.1042C17.9997 18.9999 18.1664 18.8333 18.4996 18.5001C18.8328 18.1669 18.9994 18.0002 19.1037 17.8068C19.2291 17.5743 19.2908 17.3127 19.2827 17.0487C19.2759 16.8291 19.2014 16.6055 19.0524 16.1584L18.8374 15.5134C18.6477 14.9444 18.9344 14.3262 19.4913 14.1035C20.036 13.8856 20.3084 13.7766 20.5088 13.5946C20.6858 13.4337 20.8218 13.2329 20.9054 13.0088C21 12.7551 21 12.4589 21 11.8663C21 11.3658 21 11.1156 20.9289 10.893C20.866 10.696 20.763 10.5141 20.6265 10.3588C20.4721 10.1833 20.2597 10.0558 19.8348 9.80087L19.5569 9.63416C18.9478 9.26867 18.6939 8.51514 18.9578 7.85558C19.1262 7.43443 19.2105 7.22383 19.232 7.01543C19.2636 6.70926 19.2003 6.40077 19.0506 6.13181C18.9487 5.94875 18.7884 5.78837 18.4676 5.46762C18.1658 5.16584 18.0149 5.01494 17.8426 4.91583C17.5894 4.77024 17.2992 4.70174 17.0076 4.71872C16.8091 4.73029 16.6067 4.79777 16.2018 4.93273L15.6314 5.12287C14.9961 5.33464 14.3058 5.0145 14.0571 4.39272C13.8841 3.96016 13.7976 3.74388 13.6654 3.57511C13.4719 3.32808 13.2058 3.14794 12.9046 3.06005Z"
									stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
								</path>
							</g>
						</svg>
						<span class="ms-3 flex-1 whitespace-nowrap text-left text-sm">User Settings</span>

						<svg class="ml-1 mt-1 inline h-4 w-4 transform transition-transform"
							:class="{ 'rotate-180 duration-200': usermanage }" fill="currentColor" viewBox="0 0 20 20">
							<path fill-rule="evenodd"
								d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
								clip-rule="evenodd"></path>
						</svg>
					</button>

					<ul class="space-y-4 py-4" id="dropdown-example" x-show="usermanage"
						x-transition:enter="transition ease-in duration-200"
						x-transition:enter-start="transform opacity-0 -translate-y-5"
						x-transition:leave="transition ease-out duration-200"
						x-transition:leave-end="transform opacity-0 -translate-y-5">

						@can('users-list')
							<li>
								<a
									class="{{ Route::is('dashboard.users') || Route::is('users.add') || Route::is('users.edit') ? 'text-red-600 font-bold bg-gray-100 dark:bg-[#18181b]' : 'text-gray-900 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-transparent hover:text-red-600' }} group flex w-full items-center rounded-xl p-2 pl-11"
									href="{{ route('dashboard.users') }}">
									<svg
										class="fi-sidebar-item-icon {{ Route::currentRouteName() == 'dashboard.users' || Route::currentRouteName() == 'users.add' || Route::currentRouteName() == 'users.edit' ? 'stroke-red-600' : 'stroke-gray-400' }} h-6 w-6 group-hover:stroke-red-600"
										viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
										<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
										<g id="SVGRepo_iconCarrier">
											<path
												d="M13.8 10.2H13.806M10.2004 10.1999H10.2064M9.59961 13.1997C9.59961 13.1997 10.4996 14.3997 11.9996 14.3997C13.4996 14.3997 14.3996 13.1997 14.3996 13.1997M17 3H19C20.1046 3 21 3.89543 21 5V7M21 17V19C21 20.1046 20.1046 21 19 21H17M7 21H5C3.89543 21 3 20.1046 3 19V17M3 7V5C3 3.89543 3.89543 3 5 3H7M14.1 10.2C14.1 10.3657 13.9657 10.5 13.8 10.5C13.6343 10.5 13.5 10.3657 13.5 10.2C13.5 10.0343 13.6343 9.9 13.8 9.9C13.9657 9.9 14.1 10.0343 14.1 10.2ZM10.5004 10.1999C10.5004 10.3656 10.3661 10.4999 10.2004 10.4999C10.0347 10.4999 9.90039 10.3656 9.90039 10.1999C9.90039 10.0342 10.0347 9.8999 10.2004 9.8999C10.3661 9.8999 10.5004 10.0342 10.5004 10.1999ZM18 12C18 15.3137 15.3137 18 12 18C8.68629 18 6 15.3137 6 12C6 8.68629 8.68629 6 12 6C15.3137 6 18 8.68629 18 12Z"
												stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
										</g>
									</svg>
									<span class="ms-3 flex-1 whitespace-nowrap text-sm">Users</span>
								</a>
							</li>
						@endcan

						@can('roles-list')
							<li>
								<a
									class="{{ Route::is('dashboard.roles') || Route::is('roles.add') || Route::is('roles.edit') ? 'text-red-600 font-bold bg-gray-100 dark:bg-[#18181b]' : 'text-gray-900 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-transparent hover:text-red-600' }} group flex w-full items-center rounded-xl p-2 pl-11"
									href="{{ route('dashboard.roles') }}">
									<svg
										class="fi-sidebar-item-icon {{ Route::currentRouteName() == 'dashboard.roles' || Route::currentRouteName() == 'roles.add' || Route::currentRouteName() == 'roles.edit' ? 'stroke-red-600' : 'stroke-gray-400' }} h-6 w-6 group-hover:stroke-red-600"
										viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
										<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
										<g id="SVGRepo_iconCarrier">
											<path
												d="M9 12L11 14L15 10M12 3L13.9101 4.87147L16.5 4.20577L17.2184 6.78155L19.7942 7.5L19.1285 10.0899L21 12L19.1285 13.9101L19.7942 16.5L17.2184 17.2184L16.5 19.7942L13.9101 19.1285L12 21L10.0899 19.1285L7.5 19.7942L6.78155 17.2184L4.20577 16.5L4.87147 13.9101L3 12L4.87147 10.0899L4.20577 7.5L6.78155 6.78155L7.5 4.20577L10.0899 4.87147L12 3Z"
												stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
										</g>
									</svg>
									<span class="ms-3 flex-1 whitespace-nowrap text-sm">Roles</span>
								</a>
							</li>
						@endcan

						@can('permissions-list')
							<li>
								<a
									class="{{ Route::is('dashboard.permissions') || Route::is('permissions.add') || Route::is('permissions.edit') ? 'text-red-600 font-bold bg-gray-100 dark:bg-[#18181b]' : 'text-gray-900 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-transparent hover:text-red-600' }} group flex w-full items-center rounded-xl p-2 pl-11"
									href="{{ route('dashboard.permissions') }}">
									<svg
										class="fi-sidebar-item-icon {{ Route::currentRouteName() == 'dashboard.permissions' || Route::currentRouteName() == 'permissions.add' || Route::currentRouteName() == 'permissions.edit' ? 'stroke-red-600' : 'stroke-gray-400' }} h-6 w-6 group-hover:stroke-red-600"
										viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
										<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
										<g id="SVGRepo_iconCarrier">
											<path
												d="M9 12L11 14L15 9.99999M20 12C20 16.4611 14.54 19.6937 12.6414 20.683C12.4361 20.79 12.3334 20.8435 12.191 20.8712C12.08 20.8928 11.92 20.8928 11.809 20.8712C11.6666 20.8435 11.5639 20.79 11.3586 20.683C9.45996 19.6937 4 16.4611 4 12V8.21759C4 7.41808 4 7.01833 4.13076 6.6747C4.24627 6.37113 4.43398 6.10027 4.67766 5.88552C4.9535 5.64243 5.3278 5.50207 6.0764 5.22134L11.4382 3.21067C11.6461 3.13271 11.75 3.09373 11.857 3.07827C11.9518 3.06457 12.0482 3.06457 12.143 3.07827C12.25 3.09373 12.3539 3.13271 12.5618 3.21067L17.9236 5.22134C18.6722 5.50207 19.0465 5.64243 19.3223 5.88552C19.566 6.10027 19.7537 6.37113 19.8692 6.6747C20 7.01833 20 7.41808 20 8.21759V12Z"
												stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
										</g>
									</svg>
									<span class="ms-3 flex-1 whitespace-nowrap text-sm">Permissions</span>
								</a>
							</li>
						@endcan
					</ul>
				</li>
			@endif

			@can('log-list')
				<li>
					<a
						class="{{ Route::is('dashboard.log') ? 'text-red-600 font-bold bg-gray-100 dark:bg-[#18181b]' : 'text-gray-900 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-transparent hover:text-red-600' }} group flex items-center rounded-xl p-2"
						href="{{ route('dashboard.log') }}">
						<svg
							class="fi-sidebar-item-icon {{ Route::currentRouteName() == 'dashboard.log' || Route::currentRouteName() == 'log.add' || Route::currentRouteName() == 'log.edit' ? 'stroke-red-600' : 'stroke-gray-400' }} h-6 w-6 text-gray-400 group-hover:stroke-red-600"
							data-slot="icon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
							stroke-width="1.5" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round"
								d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244">
							</path>
						</svg>
						<span class="ms-3 flex-1 whitespace-nowrap text-sm">Log History</span>
					</a>
				</li>
			@endcan

		</ul>
	</div>

	<div class="h-content absolute bottom-0 left-0 grid w-auto grid-cols-1 px-5 pb-5">
		<!-- start footer -->
		@include('dashboard.layoutsDash.footer')
		<!-- footer -->
	</div>
</aside>

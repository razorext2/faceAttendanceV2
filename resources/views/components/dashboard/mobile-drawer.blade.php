<div class="fixed bottom-0 left-1/2 z-[51] w-full max-w-lg -translate-x-1/2 md:hidden">
	<div class="dark:bg-[#18181b] dark:border-gray-700 h-16 w-full rounded-t-2xl border-t border-gray-200 bg-white">
		<div class="mx-auto grid h-full max-w-lg grid-cols-5">

			<x-drawer.button href="{{ route('dashboard') }}" :label="'Home'" :active="Route::is('dashboard')">
				<path
					d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
			</x-drawer.button>

			<x-drawer.button href="{{ route('attendanceIn.index') }}" :label="'Masuk'" :active="Route::is('attendanceIn.index')">
				<path fill-rule="evenodd"
					d="M3 4.25A2.25 2.25 0 0 1 5.25 2h5.5A2.25 2.25 0 0 1 13 4.25v2a.75.75 0 0 1-1.5 0v-2a.75.75 0 0 0-.75-.75h-5.5a.75.75 0 0 0-.75.75v11.5c0 .414.336.75.75.75h5.5a.75.75 0 0 0 .75-.75v-2a.75.75 0 0 1 1.5 0v2A2.25 2.25 0 0 1 10.75 18h-5.5A2.25 2.25 0 0 1 3 15.75V4.25Z"
					clip-rule="evenodd"></path>
				<path fill-rule="evenodd"
					d="M19 10a.75.75 0 0 0-.75-.75H8.704l1.048-.943a.75.75 0 1 0-1.004-1.114l-2.5 2.25a.75.75 0 0 0 0 1.114l2.5 2.25a.75.75 0 1 0 1.004-1.114l-1.048-.943h9.546A.75.75 0 0 0 19 10Z"
					clip-rule="evenodd"></path>
			</x-drawer.button>

			<div class="flex items-center justify-center">
				<button
					class="hover:size-16 group absolute bottom-7 inline-flex h-14 w-14 items-center justify-center rounded-full bg-blue-600 font-medium outline outline-8 outline-blue-300 hover:bottom-6 hover:bg-blue-700 hover:outline-blue-200"
					data-drawer-target="drawer-swipe" data-drawer-toggle="drawer-swipe" data-drawer-placement="bottom"
					data-drawer-edge="true" data-drawer-edge-offset="-bottom-20" type="button" aria-controls="drawer-swipe">
					<svg class="group-hover:size-9 h-8 w-8 stroke-white group-hover:stroke-gray-100" aria-hidden="true"
						xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
						<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
						<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
						<g id="SVGRepo_iconCarrier">
							<path d="M5 8H19M5 16H19M3 12H21" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
						</g>
					</svg>

					<span class="sr-only">Menu</span>
				</button>
			</div>

			<x-drawer.button href="{{ route('attendanceOut.index') }}" :label="'Keluar'" :active="Route::is('attendanceOut.index')">
				<path fill-rule="evenodd"
					d="M3 4.25A2.25 2.25 0 0 1 5.25 2h5.5A2.25 2.25 0 0 1 13 4.25v2a.75.75 0 0 1-1.5 0v-2a.75.75 0 0 0-.75-.75h-5.5a.75.75 0 0 0-.75.75v11.5c0 .414.336.75.75.75h5.5a.75.75 0 0 0 .75-.75v-2a.75.75 0 0 1 1.5 0v2A2.25 2.25 0 0 1 10.75 18h-5.5A2.25 2.25 0 0 1 3 15.75V4.25Z"
					clip-rule="evenodd"></path>
				<path fill-rule="evenodd"
					d="M19 10a.75.75 0 0 0-.75-.75H8.704l1.048-.943a.75.75 0 1 0-1.004-1.114l-2.5 2.25a.75.75 0 0 0 0 1.114l2.5 2.25a.75.75 0 1 0 1.004-1.114l-1.048-.943h9.546A.75.75 0 0 0 19 10Z"
					clip-rule="evenodd"></path>
			</x-drawer.button>

			<x-drawer.button href="{{ route('profile.edit') }}" :label="'Profile'" :active="Route::is('profile.edit')">
				<path
					d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
			</x-drawer.button>

		</div>
	</div>
</div>

<!-- drawer component -->
<div
	class="dark:border-gray-700 dark:bg-[#18181b] fixed -bottom-36 left-0 right-0 z-50 w-full translate-y-full overflow-y-auto rounded-t-xl border-t border-gray-200 bg-white transition-transform sm:bottom-[50px] md:hidden"
	id="drawer-swipe" aria-labelledby="drawer-swipe-label" tabindex="-1">
	<div class="dark:hover:bg-gray-700 cursor-pointer p-4 hover:bg-gray-50" data-drawer-toggle="drawer-swipe">
		<span class="dark:bg-gray-600 absolute left-1/2 top-3 h-1 w-8 -translate-x-1/2 rounded-xl bg-gray-300"></span>
	</div>
	<div class="grid grid-cols-3 gap-6 px-4 pb-[60px] pt-4 lg:grid-cols-4">

		@can('dayoff-list')
			<a
				class="{{ Route::is('dayoff.*') ? 'bg-gray-100 dark:bg-gray-700' : 'dark:bg-[#18181b] bg-white' }} dark:hover:bg-gray-600 group cursor-pointer rounded-xl p-4 hover:bg-gray-100"
				href="{{ route('dayoff.index') }}">

				<div
					class="{{ Route::is('dayoff.*') ? 'bg-gray-100 dark:bg-gray-700' : 'dark:bg-gray-600 bg-gray-200' }} dark:group-hover:bg-gray-600 mx-auto mb-2 flex h-[48px] max-h-[48px] w-[48px] max-w-[48px] items-center justify-center rounded-full p-2 group-hover:bg-gray-100">

					<svg
						class="fi-sidebar-item-icon {{ Route::is('dayoff.*') ? 'stroke-blue-500' : 'stroke-gray-500 dark:stroke-gray-400' }} h-8 w-8 group-hover:stroke-blue-500"
						viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
						<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
						<g id="SVGRepo_iconCarrier">
							<path
								d="M3 5.5L5 3.5M21 5.5L19 3.5M9 9.5L15 15.5M15 9.5L9 15.5M20 12.5C20 16.9183 16.4183 20.5 12 20.5C7.58172 20.5 4 16.9183 4 12.5C4 8.08172 7.58172 4.5 12 4.5C16.4183 4.5 20 8.08172 20 12.5Z"
								stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
							</path>
						</g>
					</svg>

				</div>

				<div
					class="{{ Route::is('dayoff.*') ? 'text-gray-900 dark:text-white' : 'text-gray-500 dark:text-gray-400 ' }} group-hover:dark:text-white text-center font-medium group-hover:text-gray-900">
					Request Time Off
				</div>
			</a>
		@endcan

		@can('collect-list')
			<a
				class="{{ Route::is('collect.*') ? 'bg-gray-100 dark:bg-gray-700' : 'dark:bg-[#18181b] bg-white' }} dark:hover:bg-gray-600 group cursor-pointer rounded-xl p-4 hover:bg-gray-100"
				href="{{ route('collect.index') }}">

				<div
					class="{{ Route::is('collect.*') ? 'bg-gray-100 dark:bg-gray-700' : 'dark:bg-gray-600 bg-gray-200' }} dark:group-hover:bg-gray-600 mx-auto mb-2 flex h-[48px] max-h-[48px] w-[48px] max-w-[48px] items-center justify-center rounded-full p-2 group-hover:bg-gray-100">

					<svg
						class="fi-sidebar-item-icon {{ Route::is('collect.*') ? 'stroke-blue-500' : 'stroke-gray-500 dark:stroke-gray-400' }} h-8 w-8 group-hover:stroke-blue-500"
						viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
						<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
						<g id="SVGRepo_iconCarrier">
							<path
								d="M5 19V6.2C5 5.0799 5 4.51984 5.21799 4.09202C5.40973 3.71569 5.71569 3.40973 6.09202 3.21799C6.51984 3 7.0799 3 8.2 3H15.8C16.9201 3 17.4802 3 17.908 3.21799C18.2843 3.40973 18.5903 3.71569 18.782 4.09202C19 4.51984 19 5.0799 19 6.2V17H7C5.89543 17 5 17.8954 5 19ZM5 19C5 20.1046 5.89543 21 7 21H19M18 17V21M14.5 8V7.91667C14.5 6.85812 13.6419 6 12.5833 6H11.5C10.3954 6 9.5 6.89543 9.5 8C9.5 9.10457 10.3954 10 11.5 10H12.5C13.6046 10 14.5 10.8954 14.5 12C14.5 13.1046 13.6046 14 12.5 14H11.4583C10.3768 14 9.5 13.1232 9.5 12.0417V12"
								stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"></path>
						</g>
					</svg>

				</div>

				<div
					class="{{ Route::is('collect.*') ? 'text-gray-900 dark:text-white' : 'text-gray-500 dark:text-gray-400 ' }} group-hover:dark:text-white text-center font-medium group-hover:text-gray-900">
					Laporan Kolektor
				</div>
			</a>
		@endcan

		@can('capture')
			<a
				class="{{ Route::currentRouteName() == 'capture.index' ? 'bg-gray-100 dark:bg-gray-700' : 'dark:bg-[#18181b] bg-white' }} dark:hover:bg-gray-600 group cursor-pointer rounded-xl p-4 hover:bg-gray-100"
				href="{{ route('capture.index') }}">

				<div
					class="{{ Route::currentRouteName() == 'capture.index' ? 'bg-gray-100 dark:bg-gray-700' : 'dark:bg-gray-600 bg-gray-200' }} dark:group-hover:bg-gray-600 mx-auto mb-2 flex h-[48px] max-h-[48px] w-[48px] max-w-[48px] items-center justify-center rounded-full p-2 group-hover:bg-gray-100">

					<svg
						class="fi-sidebar-item-icon {{ Route::currentRouteName() == 'capture.index' ? 'stroke-blue-500' : 'stroke-gray-500 dark:stroke-gray-400' }} h-8 w-8 group-hover:stroke-blue-500"
						viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
						<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
						<g id="SVGRepo_iconCarrier">
							<path
								d="M3 4H8M3 11H9.76389M14.2361 11H21M21 7.2V16.8C21 17.9201 21 18.4802 20.782 18.908C20.5903 19.2843 20.2843 19.5903 19.908 19.782C19.4802 20 18.9201 20 17.8 20H6.2C5.0799 20 4.51984 20 4.09202 19.782C3.71569 19.5903 3.40973 19.2843 3.21799 18.908C3 18.4802 3 17.9201 3 16.8V10.2C3 9.0799 3 8.51984 3.21799 8.09202C3.40973 7.71569 3.71569 7.40973 4.09202 7.21799C4.51984 7 5.0799 7 6.2 7H7.67452C8.1637 7 8.40829 7 8.63846 6.94474C8.84254 6.89575 9.03763 6.81494 9.21657 6.70528C9.4184 6.5816 9.59135 6.40865 9.93726 6.06274L11.0627 4.93726C11.4086 4.59136 11.5816 4.4184 11.7834 4.29472C11.9624 4.18506 12.1575 4.10425 12.3615 4.05526C12.5917 4 12.8363 4 13.3255 4H17.8C18.9201 4 19.4802 4 19.908 4.21799C20.2843 4.40973 20.5903 4.71569 20.782 5.09202C21 5.51984 21 6.0799 21 7.2ZM15 13C15 14.6569 13.6569 16 12 16C10.3431 16 9 14.6569 9 13C9 11.3431 10.3431 10 12 10C13.6569 10 15 11.3431 15 13Z"
								stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"></path>
						</g>
					</svg>

				</div>

				<div
					class="{{ Route::currentRouteName() == 'capture.index' ? 'text-gray-900 dark:text-white' : 'text-gray-500 dark:text-gray-400 ' }} group-hover:dark:text-white text-center font-medium group-hover:text-gray-900">
					Record
				</div>
			</a>
		@endcan

		@can('pegawai-list')
			<a
				class="{{ Route::currentRouteName() == 'dashboard.pegawai' || Route::currentRouteName() == 'pegawai.add' || Route::currentRouteName() == 'pegawai.edit' ? 'bg-gray-100 dark:bg-gray-700' : 'dark:bg-[#18181b] bg-white' }} dark:hover:bg-gray-600 group cursor-pointer rounded-xl p-4 hover:bg-gray-100"
				href="{{ route('dashboard.pegawai') }}">

				<div
					class="{{ Route::currentRouteName() == 'dashboard.pegawai' || Route::currentRouteName() == 'pegawai.add' || Route::currentRouteName() == 'pegawai.edit' ? 'bg-gray-100 dark:bg-gray-700' : 'dark:bg-gray-600 bg-gray-200' }} dark:group-hover:bg-gray-600 mx-auto mb-2 flex h-[48px] max-h-[48px] w-[48px] max-w-[48px] items-center justify-center rounded-full p-2 group-hover:bg-gray-100">

					<svg
						class="fi-sidebar-item-icon {{ Route::currentRouteName() == 'dashboard.pegawai' || Route::currentRouteName() == 'pegawai.add' || Route::currentRouteName() == 'pegawai.edit' ? 'stroke-blue-500' : 'stroke-gray-500 dark:stroke-gray-400' }} h-8 w-8 group-hover:stroke-blue-500"
						data-slot="icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke-width="1.6">
						<path stroke-linecap="round" stroke-linejoin="round"
							d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z">
						</path>
					</svg>

				</div>

				<div
					class="{{ Route::currentRouteName() == 'dashboard.pegawai' || Route::currentRouteName() == 'pegawai.add' || Route::currentRouteName() == 'pegawai.edit' ? 'text-gray-900 dark:text-white' : 'text-gray-500 dark:text-gray-400 ' }} group-hover:dark:text-white text-center font-medium group-hover:text-gray-900">
					Pegawai
				</div>
			</a>
		@endcan

		@can('jabatan-list')
			<a
				class="{{ Route::is('route.*') ? 'bg-gray-100 dark:bg-gray-700' : 'dark:bg-[#18181b] bg-white' }} dark:hover:bg-gray-600 group cursor-pointer rounded-xl p-4 hover:bg-gray-100"
				href="{{ route('jabatan.index') }}">

				<div
					class="{{ Route::is('route.*') ? 'bg-gray-100 dark:bg-gray-700' : 'dark:bg-gray-600 bg-gray-200' }} dark:group-hover:bg-gray-600 mx-auto mb-2 flex h-[48px] max-h-[48px] w-[48px] max-w-[48px] items-center justify-center rounded-full p-2 group-hover:bg-gray-100">

					<svg
						class="fi-sidebar-item-icon {{ Route::is('route.*') ? 'stroke-blue-500' : 'stroke-gray-500 dark:stroke-gray-400' }} h-8 w-8 group-hover:stroke-blue-500"
						data-slot="icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke-width="1.7">
						<path stroke-linecap="round" stroke-linejoin="round"
							d="M6 6.878V6a2.25 2.25 0 0 1 2.25-2.25h7.5A2.25 2.25 0 0 1 18 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 0 0 4.5 9v.878m13.5-3A2.25 2.25 0 0 1 19.5 9v.878m0 0a2.246 2.246 0 0 0-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0 1 21 12v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6c0-.98.626-1.813 1.5-2.122">
						</path>
					</svg>

				</div>

				<div
					class="{{ Route::is('route.*') ? 'text-gray-900 dark:text-white' : 'text-gray-500 dark:text-gray-400 ' }} group-hover:dark:text-white text-center font-medium group-hover:text-gray-900">
					Jabatan
				</div>
			</a>
		@endcan

		@can('golongan-list')
			<a
				class="{{ Route::is('golongan.*') ? 'bg-gray-100 dark:bg-gray-700' : 'dark:bg-[#18181b] bg-white' }} dark:hover:bg-gray-600 group cursor-pointer rounded-xl p-4 hover:bg-gray-100"
				href="{{ route('golongan.index') }}">

				<div
					class="{{ Route::is('golongan.*') ? 'bg-gray-100 dark:bg-gray-700' : 'dark:bg-gray-600 bg-gray-200' }} dark:group-hover:bg-gray-600 mx-auto mb-2 flex h-[48px] max-h-[48px] w-[48px] max-w-[48px] items-center justify-center rounded-full p-2 group-hover:bg-gray-100">

					<svg
						class="fi-sidebar-item-icon {{ Route::is('golongan.*') ? 'stroke-blue-500' : 'stroke-gray-500 dark:stroke-gray-400' }} h-8 w-8 group-hover:stroke-blue-500"
						data-slot="icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke-width="1.3">
						<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
						<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
						<g id="SVGRepo_iconCarrier">
							<path
								d="M6.00098 4H6.01098M3.17188 10C3.58371 8.83481 4.69495 8 6.00117 8C7.30739 8 8.41863 8.83481 8.83046 10M6.00098 15H6.01098M3.17188 21C3.58371 19.8348 4.69495 19 6.00117 19C7.30739 19 8.41863 19.8348 8.83046 21M13.601 8.5H19.401C19.961 8.5 20.2411 8.5 20.455 8.39101C20.6431 8.29513 20.7961 8.14215 20.892 7.95399C21.001 7.74008 21.001 7.46005 21.001 6.9V6.1C21.001 5.53995 21.001 5.25992 20.892 5.04601C20.7961 4.85785 20.6431 4.70487 20.455 4.60899C20.2411 4.5 19.961 4.5 19.401 4.5H13.601C13.0409 4.5 12.7609 4.5 12.547 4.60899C12.3588 4.70487 12.2058 4.85785 12.11 5.04601C12.001 5.25992 12.001 5.53995 12.001 6.1V6.9C12.001 7.46005 12.001 7.74008 12.11 7.95399C12.2058 8.14215 12.3588 8.29513 12.547 8.39101C12.7609 8.5 13.0409 8.5 13.601 8.5ZM13.601 19.5H19.401C19.961 19.5 20.2411 19.5 20.455 19.391C20.6431 19.2951 20.7961 19.1422 20.892 18.954C21.001 18.7401 21.001 18.4601 21.001 17.9V17.1C21.001 16.5399 21.001 16.2599 20.892 16.046C20.7961 15.8578 20.6431 15.7049 20.455 15.609C20.2411 15.5 19.961 15.5 19.401 15.5H13.601C13.0409 15.5 12.7609 15.5 12.547 15.609C12.3588 15.7049 12.2058 15.8578 12.11 16.046C12.001 16.2599 12.001 16.5399 12.001 17.1V17.9C12.001 18.4601 12.001 18.7401 12.11 18.954C12.2058 19.1422 12.3588 19.2951 12.547 19.391C12.7609 19.5 13.0409 19.5 13.601 19.5ZM7.00098 4C7.00098 4.55228 6.55326 5 6.00098 5C5.44869 5 5.00098 4.55228 5.00098 4C5.00098 3.44772 5.44869 3 6.00098 3C6.55326 3 7.00098 3.44772 7.00098 4ZM7.00098 15C7.00098 15.5523 6.55326 16 6.00098 16C5.44869 16 5.00098 15.5523 5.00098 15C5.00098 14.4477 5.44869 14 6.00098 14C6.55326 14 7.00098 14.4477 7.00098 15Z"
								stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
						</g>
					</svg>

				</div>

				<div
					class="{{ Route::is('golongan.*') ? 'text-gray-900 dark:text-white' : 'text-gray-500 dark:text-gray-400 ' }} group-hover:dark:text-white text-center font-medium group-hover:text-gray-900">
					Golongan
				</div>
			</a>
		@endcan

		@can('divisi-list')
			<a
				class="{{ Route::is('division.*') ? 'bg-gray-100 dark:bg-gray-700' : 'dark:bg-[#18181b] bg-white' }} dark:hover:bg-gray-600 group cursor-pointer rounded-xl p-4 hover:bg-gray-100"
				href="{{ route('division.index') }}">

				<div
					class="{{ Route::is('division.*') ? 'bg-gray-100 dark:bg-gray-700' : 'dark:bg-gray-600 bg-gray-200' }} dark:group-hover:bg-gray-600 mx-auto mb-2 flex h-[48px] max-h-[48px] w-[48px] max-w-[48px] items-center justify-center rounded-full p-2 group-hover:bg-gray-100">

					<svg
						class="fi-sidebar-item-icon {{ Route::is('division.*') ? 'fill-blue-500' : 'fill-gray-500 dark:fill-gray-400' }} h-6 w-6 group-hover:fill-blue-500"
						id="Capa_1" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 28.05 28.05"
						xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
						<path
							d="M25.353,0H2.699c-1.25,0-2.265,1-2.265,2.232V25.82c0,1.23,1.015,2.23,2.265,2.23h22.654c1.248,0,2.264-1,2.264-2.23V2.232   C27.617,1,26.601,0,25.353,0z M4.055,1.68h19.941c1.1,0,1.993,0.877,1.993,1.965v3.852H2.063V3.645   C2.063,2.557,2.954,1.68,4.055,1.68z M2.063,24.408V9.668h6.896v16.705H4.055C2.954,26.373,2.063,25.492,2.063,24.408z    M23.996,26.373H11.215V9.668h14.774v14.74C25.99,25.492,25.096,26.373,23.996,26.373z" />
					</svg>

				</div>

				<div
					class="{{ Route::is('division.*') ? 'text-gray-900 dark:text-white' : 'text-gray-500 dark:text-gray-400 ' }} group-hover:dark:text-white text-center font-medium group-hover:text-gray-900">
					Divisi
				</div>
			</a>
		@endcan

		@can('placement-list')
			<a
				class="{{ Route::is('placement.*') ? 'bg-gray-100 dark:bg-gray-700' : 'dark:bg-[#18181b] bg-white' }} dark:hover:bg-gray-600 group cursor-pointer rounded-xl p-4 hover:bg-gray-100"
				href="{{ route('placement.index') }}">

				<div
					class="{{ Route::is('placement.*') ? 'bg-gray-100 dark:bg-gray-700' : 'dark:bg-gray-600 bg-gray-200' }} dark:group-hover:bg-gray-600 mx-auto mb-2 flex h-[48px] max-h-[48px] w-[48px] max-w-[48px] items-center justify-center rounded-full p-2 group-hover:bg-gray-100">

					<svg
						class="fi-sidebar-item-icon {{ Route::is('placement.*') ? 'fill-blue-500' : 'fill-gray-500 dark:fill-gray-400' }} h-6 w-6 group-hover:fill-blue-500"
						id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
						viewBox="0 0 368.666 368.666" xml:space="preserve">
						<path
							d="M184.333,0C102.01,0,35.036,66.974,35.036,149.297c0,33.969,11.132,65.96,32.193,92.515     c27.27,34.383,106.572,116.021,109.934,119.479l7.169,7.375l7.17-7.374c3.364-3.46,82.69-85.116,109.964-119.51     c21.042-26.534,32.164-58.514,32.164-92.485C333.63,66.974,266.656,0,184.333,0z M285.795,229.355     c-21.956,27.687-80.92,89.278-101.462,110.581c-20.54-21.302-79.483-82.875-101.434-110.552     c-18.228-22.984-27.863-50.677-27.863-80.087C55.036,78.002,113.038,20,184.333,20c71.294,0,129.297,58.002,129.296,129.297     C313.629,178.709,304.004,206.393,285.795,229.355z" />
						<path
							d="M184.333,59.265c-48.73,0-88.374,39.644-88.374,88.374c0,48.73,39.645,88.374,88.374,88.374s88.374-39.645,88.374-88.374     S233.063,59.265,184.333,59.265z M184.333,216.013c-37.702,0-68.374-30.673-68.374-68.374c0-37.702,30.673-68.374,68.374-68.374     s68.373,30.673,68.374,68.374C252.707,185.341,222.035,216.013,184.333,216.013z" />
					</svg>

				</div>

				<div
					class="{{ Route::is('placement.*') ? 'text-gray-900 dark:text-white' : 'text-gray-500 dark:text-gray-400 ' }} group-hover:dark:text-white text-center font-medium group-hover:text-gray-900">
					Penempatan
				</div>
			</a>
		@endcan

		@can('users-list')
			<a
				class="{{ Route::is('users.*') ? 'bg-gray-100 dark:bg-gray-700' : 'dark:bg-[#18181b] bg-white' }} dark:hover:bg-gray-600 group cursor-pointer rounded-xl p-4 hover:bg-gray-100"
				href="{{ route('users.index') }}">

				<div
					class="{{ Route::is('users.*') ? 'bg-gray-100 dark:bg-gray-700' : 'dark:bg-gray-600 bg-gray-200' }} dark:group-hover:bg-gray-600 mx-auto mb-2 flex h-[48px] max-h-[48px] w-[48px] max-w-[48px] items-center justify-center rounded-full p-2 group-hover:bg-gray-100">

					<svg
						class="fi-sidebar-item-icon {{ Route::is('users.*') ? 'stroke-blue-500' : 'stroke-gray-500 dark:stroke-gray-400' }} h-8 w-8 group-hover:stroke-blue-500"
						viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
						<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
						<g id="SVGRepo_iconCarrier">
							<path
								d="M13.8 10.2H13.806M10.2004 10.1999H10.2064M9.59961 13.1997C9.59961 13.1997 10.4996 14.3997 11.9996 14.3997C13.4996 14.3997 14.3996 13.1997 14.3996 13.1997M17 3H19C20.1046 3 21 3.89543 21 5V7M21 17V19C21 20.1046 20.1046 21 19 21H17M7 21H5C3.89543 21 3 20.1046 3 19V17M3 7V5C3 3.89543 3.89543 3 5 3H7M14.1 10.2C14.1 10.3657 13.9657 10.5 13.8 10.5C13.6343 10.5 13.5 10.3657 13.5 10.2C13.5 10.0343 13.6343 9.9 13.8 9.9C13.9657 9.9 14.1 10.0343 14.1 10.2ZM10.5004 10.1999C10.5004 10.3656 10.3661 10.4999 10.2004 10.4999C10.0347 10.4999 9.90039 10.3656 9.90039 10.1999C9.90039 10.0342 10.0347 9.8999 10.2004 9.8999C10.3661 9.8999 10.5004 10.0342 10.5004 10.1999ZM18 12C18 15.3137 15.3137 18 12 18C8.68629 18 6 15.3137 6 12C6 8.68629 8.68629 6 12 6C15.3137 6 18 8.68629 18 12Z"
								stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"></path>
						</g>
					</svg>

				</div>

				<div
					class="{{ Route::is('users.*') ? 'text-gray-900 dark:text-white' : 'text-gray-500 dark:text-gray-400 ' }} group-hover:dark:text-white text-center font-medium group-hover:text-gray-900">
					Users
				</div>
			</a>
		@endcan

		@can('roles-list')
			<a
				class="{{ Route::is('roles.*') ? 'bg-gray-100 dark:bg-gray-700' : 'dark:bg-[#18181b] bg-white' }} dark:hover:bg-gray-600 group cursor-pointer rounded-xl p-4 hover:bg-gray-100"
				href="{{ route('roles.index') }}">

				<div
					class="{{ Route::is('roles.*') ? 'bg-gray-100 dark:bg-gray-700' : 'dark:bg-gray-600 bg-gray-200' }} dark:group-hover:bg-gray-600 mx-auto mb-2 flex h-[48px] max-h-[48px] w-[48px] max-w-[48px] items-center justify-center rounded-full p-2 group-hover:bg-gray-100">

					<svg
						class="fi-sidebar-item-icon {{ Route::is('roles.*') ? 'stroke-blue-500' : 'stroke-gray-500 dark:stroke-gray-400' }} h-8 w-8 group-hover:stroke-blue-500"
						viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
						<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
						<g id="SVGRepo_iconCarrier">
							<path
								d="M9 12L11 14L15 10M12 3L13.9101 4.87147L16.5 4.20577L17.2184 6.78155L19.7942 7.5L19.1285 10.0899L21 12L19.1285 13.9101L19.7942 16.5L17.2184 17.2184L16.5 19.7942L13.9101 19.1285L12 21L10.0899 19.1285L7.5 19.7942L6.78155 17.2184L4.20577 16.5L4.87147 13.9101L3 12L4.87147 10.0899L4.20577 7.5L6.78155 6.78155L7.5 4.20577L10.0899 4.87147L12 3Z"
								stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7"></path>
						</g>
					</svg>

				</div>

				<div
					class="{{ Route::is('roles.*') ? 'text-gray-900 dark:text-white' : 'text-gray-500 dark:text-gray-400 ' }} group-hover:dark:text-white text-center font-medium group-hover:text-gray-900">
					Roles
				</div>
			</a>
		@endcan

		@can('permissions-list')
			<a
				class="{{ Route::is('permissions.*') ? 'bg-gray-100 dark:bg-gray-700' : 'dark:bg-[#18181b] bg-white' }} dark:hover:bg-gray-600 group cursor-pointer rounded-xl p-4 hover:bg-gray-100"
				href="{{ route('permissions.index') }}">

				<div
					class="{{ Route::is('permissions.*') ? 'bg-gray-100 dark:bg-gray-700' : 'dark:bg-gray-600 bg-gray-200' }} dark:group-hover:bg-gray-600 mx-auto mb-2 flex h-[48px] max-h-[48px] w-[48px] max-w-[48px] items-center justify-center rounded-full p-2 group-hover:bg-gray-100">

					<svg
						class="fi-sidebar-item-icon {{ Route::is('permissions.*') ? 'stroke-blue-500' : 'stroke-gray-500 dark:stroke-gray-400' }} h-8 w-8 group-hover:stroke-blue-500"
						viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
						<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
						<g id="SVGRepo_iconCarrier">
							<path
								d="M9 12L11 14L15 9.99999M20 12C20 16.4611 14.54 19.6937 12.6414 20.683C12.4361 20.79 12.3334 20.8435 12.191 20.8712C12.08 20.8928 11.92 20.8928 11.809 20.8712C11.6666 20.8435 11.5639 20.79 11.3586 20.683C9.45996 19.6937 4 16.4611 4 12V8.21759C4 7.41808 4 7.01833 4.13076 6.6747C4.24627 6.37113 4.43398 6.10027 4.67766 5.88552C4.9535 5.64243 5.3278 5.50207 6.0764 5.22134L11.4382 3.21067C11.6461 3.13271 11.75 3.09373 11.857 3.07827C11.9518 3.06457 12.0482 3.06457 12.143 3.07827C12.25 3.09373 12.3539 3.13271 12.5618 3.21067L17.9236 5.22134C18.6722 5.50207 19.0465 5.64243 19.3223 5.88552C19.566 6.10027 19.7537 6.37113 19.8692 6.6747C20 7.01833 20 7.41808 20 8.21759V12Z"
								stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"></path>
						</g>
					</svg>

				</div>

				<div
					class="{{ Route::is('permissions.*') ? 'text-gray-900 dark:text-white' : 'text-gray-500 dark:text-gray-400 ' }} group-hover:dark:text-white text-center font-medium group-hover:text-gray-900">
					Permissions
				</div>
			</a>
		@endcan

		{{-- log --}}
		<a
			class="{{ Route::is('log.*') ? 'bg-gray-100 dark:bg-gray-700' : 'dark:bg-[#18181b] bg-white' }} dark:hover:bg-gray-600 group cursor-pointer rounded-xl p-4 hover:bg-gray-100"
			href="{{ route('log.index') }}">

			<div
				class="{{ Route::is('log.*') ? 'bg-gray-100 dark:bg-gray-700' : 'dark:bg-gray-600 bg-gray-200' }} dark:group-hover:bg-gray-600 mx-auto mb-2 flex h-[48px] max-h-[48px] w-[48px] max-w-[48px] items-center justify-center rounded-full p-2 group-hover:bg-gray-100">

				<svg
					class="fi-sidebar-item-icon {{ Route::is('log.*') ? 'stroke-blue-500' : 'stroke-gray-500 dark:stroke-gray-400' }} h-8 w-8 group-hover:stroke-blue-500"
					data-slot="icon" aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke-width="1.8"
					stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round"
						d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244">
					</path>
				</svg>

			</div>

			<div
				class="{{ Route::is('log.*') ? 'text-gray-900 dark:text-white' : 'text-gray-500 dark:text-gray-400 ' }} group-hover:dark:text-white text-center font-medium group-hover:text-gray-900">
				Log History
			</div>
		</a>
		{{-- end log --}}

	</div>
</div>

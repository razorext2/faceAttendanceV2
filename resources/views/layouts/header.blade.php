<nav
	class="dark:bg-[#18181b] dark:ring-gray-700 hidden border-gray-200 bg-white ring-1 ring-black md:block md:p-4 lg:p-8">
	<div class="center mx-auto flex max-w-screen-xl flex-wrap items-center justify-between">

		<a class="flex items-center space-x-3 rtl:space-x-reverse md:mx-auto md:mb-4 lg:mx-0 lg:mb-0" href="#">
			<img src="{{ asset('assets/img/logo.png') }}" alt="Indodacin Logo" loading="lazy" />
		</a>

		<button
			class="inline-flex h-10 w-10 items-center justify-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 md:hidden"
			data-collapse-toggle="mega-menu-full" type="button" aria-controls="mega-menu-full" aria-expanded="false">
			<span class="sr-only">Open main menu</span>
			<svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
				<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
					d="M1 1h15M1 7h15M1 13h15" />
			</svg>
		</button>

		<div class="mx-auto hidden w-full items-center justify-between font-medium md:order-1 md:flex md:w-auto lg:mx-0"
			id="mega-menu-full">
			<ul
				class="dark:bg-[#18181b] dark:border-gray-700 mt-4 flex flex-col items-center rounded-lg border border-gray-100 bg-white p-4 rtl:space-x-reverse md:mt-0 md:flex-row md:space-x-8 md:border-0 md:bg-white md:p-0">
				<li>
					<a
						class="dark:text-gray-300 dark:hover:text-white block rounded px-3 py-2 text-gray-900 hover:bg-gray-100 md:p-0 md:hover:bg-transparent md:hover:text-blue-700"
						href="{{ route('landing.page') }}" aria-current="page">Home</a>
				</li>
				<li>
					<a
						class="dark:text-gray-300 dark:hover:text-white block rounded px-3 py-2 text-gray-900 hover:bg-gray-100 md:p-0 md:hover:bg-transparent md:hover:text-blue-700"
						href="{{ route('landing.page') }}#Scan">Absen</a>
				</li>
				<li>
					<button
						class="dark:text-gray-300 dark:hover:text-white flex w-full items-center justify-between rounded px-3 py-2 text-gray-900 hover:bg-gray-100 md:w-auto md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-blue-600"
						id="mega-menu-full-dropdown-button" data-collapse-toggle="mega-menu-full-dropdown">
						Cara Menggunakan
						<svg class="ms-2.5 h-2.5 w-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
							viewBox="0 0 10 6">
							<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
						</svg>
					</button>
				</li>
				<li>
					<a
						class="dark:text-gray-300 dark:hover:text-white block rounded px-3 py-2 text-gray-900 hover:bg-gray-100 md:p-0 md:hover:bg-transparent md:hover:text-blue-700"
						href="#">Tentang</a>
				</li>
				<li>
					<a
						class="dark:text-gray-300 dark:hover:text-white block rounded px-3 py-2 text-gray-900 hover:bg-gray-100 md:p-0 md:hover:bg-transparent md:hover:text-blue-700"
						href="#">Kontak</a>
				</li>
			</ul>
			<div class="md:grid md:grid-cols-2">
				<button class="h-10 w-10 rounded-md p-2.5 text-sm text-gray-200 md:ml-4" id="theme-toggle-dark" type="button">
					<svg class="h-5 w-5" id="theme-toggle-dark-icon" fill="currentColor" viewBox="0 0 20 20"
						xmlns="http://www.w3.org/2000/svg">
						<path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
					</svg>
				</button>

				<button class="h-10 w-10 rounded-md p-2.5 text-sm text-gray-200" id="theme-toggle-light" type="button">
					<svg class="h-5 w-5" id="theme-toggle-light-icon" fill="currentColor" viewBox="0 0 20 20"
						xmlns="http://www.w3.org/2000/svg">
						<path
							d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
							fill-rule="evenodd" clip-rule="evenodd"></path>
					</svg>
				</button>
			</div>
		</div>
	</div>

	<div class="dark:bg-[#18181b] mt-1 hidden bg-white md:bg-white" id="mega-menu-full-dropdown">
		<div
			class="dark:text-white mx-auto grid max-w-screen-lg px-4 py-5 text-gray-900 transition duration-1000 ease-in-out sm:grid-cols-1 md:px-6">
			<ul class="space-y-4 text-left text-gray-500">
				<li class="flex items-center space-x-3 rtl:space-x-reverse">
					<svg class="h-3.5 w-3.5 flex-shrink-0 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
						fill="none" viewBox="0 0 16 12">
						<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
							d="M1 5.917 5.724 10.5 15 1.5" />
					</svg>
					<span class="dark:text-white">Tekan tombol <i class="dark:text-gray-50 text-xl font-bold text-black">[Enter]</i>
						untuk start dan stop kamera</span>
				</li>
				<li class="flex items-center space-x-3 rtl:space-x-reverse">
					<svg class="h-3.5 w-3.5 flex-shrink-0 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
						fill="none" viewBox="0 0 16 12">
						<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
							d="M1 5.917 5.724 10.5 15 1.5" />
					</svg>
					<span class="dark:text-white">Tekan tombol <i class="dark:text-gray-50 text-xl font-bold text-black">[*]</i> untuk
						melakukan refresh</span>
				</li>
				<li class="flex items-center space-x-3 rtl:space-x-reverse">
					<svg class="h-3.5 w-3.5 flex-shrink-0 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
						fill="none" viewBox="0 0 16 12">
						<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
							d="M1 5.917 5.724 10.5 15 1.5" />
					</svg>
					<span class="dark:text-white">Tekan tombol <i class="dark:text-gray-50 text-xl font-bold text-black">[/]</i>
						untuk melakukan pendaftaran</span></span>
				</li>
				<li class="flex items-center space-x-3 rtl:space-x-reverse">
					<svg class="h-3.5 w-3.5 flex-shrink-0 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
						fill="none" viewBox="0 0 16 12">
						<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
							d="M1 5.917 5.724 10.5 15 1.5" />
					</svg>
					<span class="dark:text-white">Lepas semua hal yang menutupi wajah. Pastikan wajah menghadap ke
						kamera.</span></span>
				</li>
				<li class="flex items-center space-x-3 rtl:space-x-reverse">
					<svg class="h-3.5 w-3.5 flex-shrink-0 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
						fill="none" viewBox="0 0 16 12">
						<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
							d="M1 5.917 5.724 10.5 15 1.5" />
					</svg>
					<span class="dark:text-white">Jika wajah berhasil terdeteksi dan sudah muncul data nya, silahkan stop
						aplikasi.</span></span>
				</li>
			</ul>

		</div>
	</div>
</nav>

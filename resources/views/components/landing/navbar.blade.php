<nav
	class="hidden border-gray-200 bg-white ring-1 ring-black dark:bg-[#18181b] dark:ring-gray-700 md:block md:p-4 lg:p-8">
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
				class="mt-4 flex flex-col items-center rounded-lg border border-gray-100 bg-white p-4 rtl:space-x-reverse dark:border-gray-700 dark:bg-[#18181b] md:mt-0 md:flex-row md:space-x-8 md:border-0 md:bg-white md:p-0">
				<x-landing.nav-link href="/" :active="request()->is('/')">Home</x-landing.nav-link>
				<x-landing.nav-link href="photo-regist" :active="request()->is('photo-regist')">Registrasi</x-landing.nav-link>
				<x-landing.nav-link href="#scan" :active="request()->is('#scan')">Absen</x-landing.nav-link>
				<x-landing.nav-guide></x-landing.nav-guide>
				<x-landing.nav-link href="login" :active="request()->is('login')">
					{{ auth()->user() ? 'Dashboard' : 'Login' }}
				</x-landing.nav-link>
			</ul>
			<div class="md:grid md:grid-cols-2">
				<x-button-dark></x-button-dark>
				<x-button-light></x-button-light>
			</div>
		</div>
	</div>

	<div class="mt-1 hidden bg-white dark:bg-[#18181b] md:bg-white" id="mega-menu-full-dropdown">
		<div
			class="mx-auto grid max-w-screen-lg px-4 py-5 text-gray-900 transition duration-1000 ease-in-out dark:text-white sm:grid-cols-1 md:px-6">
			<ul class="space-y-4 text-left text-gray-500">
				<li class="flex items-center space-x-3 rtl:space-x-reverse">
					<svg class="h-3.5 w-3.5 flex-shrink-0 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
						fill="none" viewBox="0 0 16 12">
						<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
							d="M1 5.917 5.724 10.5 15 1.5" />
					</svg>
					<span class="dark:text-white">Tekan tombol <i class="text-xl font-bold text-black dark:text-gray-50">[Enter]</i>
						untuk start dan stop kamera</span>
				</li>
				<li class="flex items-center space-x-3 rtl:space-x-reverse">
					<svg class="h-3.5 w-3.5 flex-shrink-0 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
						fill="none" viewBox="0 0 16 12">
						<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
							d="M1 5.917 5.724 10.5 15 1.5" />
					</svg>
					<span class="dark:text-white">Tekan tombol <i class="text-xl font-bold text-black dark:text-gray-50">[*]</i> untuk
						melakukan refresh</span>
				</li>
				<li class="flex items-center space-x-3 rtl:space-x-reverse">
					<svg class="h-3.5 w-3.5 flex-shrink-0 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
						fill="none" viewBox="0 0 16 12">
						<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
							d="M1 5.917 5.724 10.5 15 1.5" />
					</svg>
					<span class="dark:text-white">Tekan tombol <i class="text-xl font-bold text-black dark:text-gray-50">[/]</i>
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

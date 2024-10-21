<nav class="dark:bg-gray-800 dark:border-gray-700 fixed top-0 z-50 w-full border-b border-gray-200 bg-white">
	<div class="px-3 py-3 lg:px-5 lg:pl-3">
		<div class="flex items-center justify-between">
			<div class="flex items-center justify-start">
				{{-- <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
                    type="button"
                    class="items-center hidden p-2 text-sm text-gray-500 rounded-lg md:inline-flex sm:hidden dark:hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-gray-200">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                        </path>
                    </svg>
                </button> --}}
				<a class="ms-2 flex md:me-24" href="#">
					<img class="me-3 h-8" src="{{ asset('assets/img/logo.png') }}" alt="FlowBite Logo" />
				</a>
			</div>

			<div class="flex items-center" x-data="{ profile: false }">
				<div class="ms-3 flex items-center">
					<div class="mx-auto flex max-w-screen-xl flex-wrap items-center justify-between">

						<button class="dark:bg-gray-800 flex rounded-full text-sm" type="button" @click="profile = !profile">
							<span class="sr-only">Open user menu</span>
							<div class="me-2 hidden items-center space-x-6 rtl:space-x-reverse md:block">
								<p class="dark:text-white text-right text-sm text-gray-800" role="none">
									{{ Auth::user()->name }}
								</p>
								<p class="dark:text-white truncate text-right text-sm font-medium text-gray-800" role="none">
									{{ Auth::user()->email }}
								</p>
							</div>
							<img class="h-8 w-8 rounded-full md:mt-1" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
								alt="user photo">
						</button>
					</div>

					<div
						class="dark:bg-gray-800 dark:divide-gray-500 dark:ring-gray-500 absolute right-5 top-16 z-50 list-none rounded-lg bg-white text-base shadow-sm ring-1 ring-gray-200"
						x-show="profile" x-transition:enter="transition ease-in duration-200"
						x-transition:enter-start="transform opacity-0 -translate-y-5"
						x-transition:leave="transition ease-out duration-200"
						x-transition:leave-end="transform opacity-0  -translate-y-5">
						<div class="border-gray block cursor-default border-b border-gray-500 px-4 py-3 md:hidden" role="none">
							<p class="dark:text-white text-sm text-gray-800" role="none">
								{{ Auth::user()->name }}
							</p>
							<p class="dark:text-white truncate text-sm font-medium text-gray-800" role="none">
								{{ Auth::user()->email }}
							</p>
						</div>
						<ul class="p-2" role="none">
							<li>
								<a
									class="dark:hover:bg-gray-700 dark:text-gray-300 dark:hover:text-white block rounded-md py-2 pl-3 pr-16 text-sm text-gray-800 hover:bg-gray-100"
									href="{{ route('landing.page') }}" role="menuitem" target="_blank">Home</a>
							</li>
							<li>
								<x-dropdown-link
									class="dark:hover:bg-gray-700 dark:text-gray-300 dark:hover:text-white rounded-md pl-3 pr-16 text-gray-800 hover:bg-gray-100"
									:href="route('profile.edit')">
									{{ __('Profile') }}
								</x-dropdown-link>
							</li>
							<li>
								<form method="POST" action="{{ route('logout') }}">
									@csrf

									<x-dropdown-link
										class="dark:hover:bg-gray-700 dark:text-red-500 dark:hover:text-red-600 rounded-md pl-3 pr-16 text-gray-800 hover:bg-gray-100"
										:href="route('logout')"
										onclick="event.preventDefault();
                                                this.closest('form').submit();">
										{{ __('Log Out') }}
									</x-dropdown-link>
								</form>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</nav>

<nav class="dark:bg-[#18181b] dark:border-[#232327] fixed top-0 z-50 w-full border-b border-gray-200 bg-white">
	<div class="px-3 py-3 lg:px-5 lg:pl-3">
		<div class="flex items-center justify-between">
			<div class="flex items-center justify-start">
				<a class="ms-2 flex md:me-24" href="#">
					<img class="me-3 h-8" src="{{ asset('assets/img/logo.png') }}" alt="FlowBite Logo" />
				</a>
			</div>

			<div class="flex items-center" x-data="{ profile: false }">
				<div class="ms-3 flex items-center">
					<div class="mx-auto flex max-w-screen-xl flex-wrap items-center justify-between">

						<button class="flex rounded-full text-sm" type="button" @click="profile = !profile">
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
						class="dark:bg-[#18181b] dark:divide-gray-500 absolute right-5 top-16 z-50 list-none rounded-lg bg-white text-base ring-1 ring-gray-700"
						style="display: none;" x-show="profile" x-transition:enter="transition ease-in duration-200"
						x-transition:enter-start="transform opacity-0 -translate-y-5"
						x-transition:leave="transition ease-out duration-200"
						x-transition:leave-end="transform opacity-0  -translate-y-5">
						<div class="dark:border-gray-700 block cursor-default border-b border-gray-200 px-4 py-3 md:hidden"
							role="none">
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

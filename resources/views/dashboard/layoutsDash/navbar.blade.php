<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
    <div class="px-3 py-4 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start">
                <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-gray-200">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                    </svg>
                </button>
                <a href="#" class="flex ms-2 md:me-24">
                    <img src="{{ asset('assets/img/logo.png') }}" class="h-8 me-3" alt="FlowBite Logo" />
                </a>
            </div>

            <div class="flex items-center" x-data="{ profile: false }">
                <div class="flex items-center ms-3">
                    <div>
                        <button type="button" @click="profile = !profile" class="flex text-sm bg-gray-800 rounded-full focus:ring-2 focus:ring-gray-200 dark:focus:ring-gray-500">
                            <span class="sr-only">Open user menu</span>
                            <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                        </button>
                    </div>
                    <div class="z-50 absolute top-16 md:top-14 right-5 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow-sm ring-1 ring-gray-200 dark:bg-gray-800 dark:divide-gray-500 dark:ring-gray-500"
                        x-show="profile"
                        x-transition:enter="transition ease-in duration-200"
                        x-transition:enter-start="transform opacity-0 -translate-y-5"
                        x-transition:leave="transition ease-out duration-200"
                        x-transition:leave-end="transform opacity-0  -translate-y-5">
                        <div class="px-4 py-3 cursor-default" role="none">
                            <p class="text-sm text-gray-800 dark:text-white" role="none">
                                {{ Auth::user()->name }}
                            </p>
                            <p class="text-sm font-medium text-gray-800 truncate dark:text-white" role="none">
                                {{ Auth::user()->email }}
                            </p>
                        </div>
                        <ul class="py-1 border-t border-gray-200 dark:border-gray-500" role="none">
                            <li>
                                <a href="{{ route('landing.page')}}" target="_blank" class="block px-4 py-2 text-sm text-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-gray-300 dark:hover:text-white" role="menuitem">Home</a>
                            </li>
                            <li>
                                <x-dropdown-link :href="route('profile.edit')" class="text-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-gray-300 dark:hover:text-white">
                                    {{ __('Profile') }}
                                </x-dropdown-link>
                            </li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                this.closest('form').submit();"
                                        class="text-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-red-500 dark:hover:text-red-600">
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
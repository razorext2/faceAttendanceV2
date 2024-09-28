<x-guest-layout>
    <div class="w-full md:w-full lg:w-9/12 mx-auto md:mx-0">
        <div class="bg-white p-10 flex flex-col w-full shadow-xl rounded-xl dark:bg-gray-500 dark:ring-1 dark:ring-gray-500">
            <h2 class="text-2xl font-bold text-gray-800 text-left mb-5 dark:text-white">
                Sign In
            </h2>
            <div class="mb-4 text-sm text-gray-600">
                {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
            </div>

            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

                <!-- Password -->
                <div id="input" class="flex flex-col w-full my-5">
                    <x-input-label for="password" :value="__('Password')" class="text-gray-500 mb-2 dark:text-white" />

                    <x-text-input id="password" class="block mt-1 w-full"
                        type="password"
                        name="password"
                        required autocomplete="current-password" class="appearance-none border-2 border-gray-100 rounded-lg px-4 py-3 placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-green-600 focus:shadow-lg dark:border-gray-500 dark:placeholder-white" placeholder="Konfirmasi password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="flex justify-end mt-4">
                    <x-primary-button class="w-full py-4 bg-green-600 rounded-lg text-green-100">
                        <div class="flex flex-row items-center justify-center">
                            <div class="mr-2">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                                </svg>
                            </div>
                            <div class="font-bold">{{ __('Confirm') }}</div>
                        </div>
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
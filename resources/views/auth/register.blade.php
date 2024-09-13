<x-guest-layout>

    <div class="w-full md:w-full lg:w-9/12 mx-auto md:mx-0">
        <div class="bg-white p-10 flex flex-col w-full shadow-xl rounded-xl">
            <h2 class="text-2xl font-bold text-gray-800 text-left mb-5">
                Register
            </h2>
            <form method="POST" action="{{ route('register') }}" class="w-full">
                @csrf

                <!-- Name -->
                <div id="input" class="flex flex-col w-full my-5">
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div id="input" class="flex flex-col w-full my-5">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div id="input" class="flex flex-col w-full my-5">
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block mt-1 w-full"
                        type="password"
                        name="password"
                        required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div id="input" class="flex flex-col w-full my-5">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                    <x-text-input id="password_confirmation" class="block mt-1 w-full"
                        type="password"
                        name="password_confirmation" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div id="button" class="flex flex-col w-full my-5">
                    <x-primary-button class="w-full py-4 bg-green-600 rounded-lg text-green-100">
                        <div class="flex flex-row items-center justify-center">
                            <div class="mr-2">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                                </svg>
                            </div>
                            <div class="font-bold">{{ __('Register') }}</div>
                        </div>
                    </x-primary-button>

                    <div class="flex items-center justify-end mt-5">
                        @if (Route::has('login'))
                        <a href="{{ route('login') }}" class=" w-full font-medium text-gray-500 shrink">
                            {{ __('Already have an account?') }}
                        </a>
                        @endif
                        <!-- <p> Or </p>
                                <a href="#" class="w-full font-medium text-gray-500">Register!</a> -->
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
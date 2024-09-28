<x-guest-layout>
    <!-- Session Status -->
    @if (session('message'))
    <div class="alert alert-warning">
        {{ session('message') }}
    </div>
    @endif


    <div class="w-full md:w-full lg:w-9/12 mx-auto md:mx-0">
        <div class="bg-white p-10 flex flex-col w-full shadow-xl rounded-xl">
            <h2 class="text-2xl font-bold text-gray-800 text-left mb-5">
                Sign In
            </h2>

            <form method="POST" action="{{ route('login') }}" class="w-full">
                @csrf

                <div id="input" class="flex flex-col w-full my-5">
                    <x-input-label for="email" :value="__('Email')" class="text-gray-500 mb-2" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="email" class="appearance-none border-2 border-gray-100 rounded-lg px-4 py-3 placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-green-600 focus:shadow-lg" placeholder="Please insert your email" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div id="input" class="flex flex-col w-full my-5">
                    <x-input-label for="password" :value="__('Password')" class="text-gray-500 mb-2" />

                    <x-text-input id="password" class="block mt-1 w-full"
                        type="password"
                        name="password"
                        required autocomplete="current-password" placeholder="Please insert your password" class="appearance-none border-2 border-gray-100 rounded-lg px-4 py-3 placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-green-600 focus:shadow-lg" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div id="button" class="flex flex-col w-full my-5">
                    <x-primary-button class="w-full py-4 bg-green-600 rounded-lg text-green-100">
                        <div class="flex flex-row items-center justify-center">
                            <div class="mr-2">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                                </svg>
                            </div>
                            <div class="font-bold">{{ __('Sign In') }}</div>
                        </div>
                    </x-primary-button>

                    <div class="flex items-center justify-end mt-5">
                        @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class=" w-full font-medium text-gray-500 shrink">
                            {{ __('Forgot your password?') }}
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
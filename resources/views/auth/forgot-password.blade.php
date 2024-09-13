<x-guest-layout>
    <div class="w-full md:w-full lg:w-9/12 mx-auto md:mx-0">
        <div class="bg-white p-10 flex flex-col w-full shadow-xl rounded-xl">
            <h2 class="text-2xl font-bold text-gray-800 text-left mb-5">
                Forgot Password
            </h2>
            <div class="mb-4 text-sm text-gray-600">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('password.email') }}" class="w-full">
                @csrf

                <!-- Email Address -->
                <div id="input" class="flex flex-col w-full my-5">
                    <x-input-label for="email" :value="__('Email')" class="text-gray-500 mb-2" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus class="appearance-none border-2 border-gray-100 rounded-lg px-4 py-3 placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-green-600 focus:shadow-lg" placeholder="Please insert your email" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="w-full py-4 bg-green-600 rounded-lg text-green-100">
                        <div class="flex flex-row items-center justify-center">
                            <div class="mr-2 rotate-180">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                                </svg>
                            </div>
                            <div class="font-bold">Send Email Verification</div>
                        </div>
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
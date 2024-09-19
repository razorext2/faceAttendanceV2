<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div class="flex items-center space-x-2">
            <div class="flex-grow">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" name="email_" type="text" class="mt-1 block w-full disabled:bg-gray-300" :value="old('email', $user->email)" disabled autofocus autocomplete="email" />
                <x-text-input name="email" type="hidden" :value="old('email', $user->email)" />
                <x-input-error class="mt-2" :messages="$errors->get('email')" />
            </div>
            @if(!is_null($user->email_verified_at))
            <span class="text-green-800 mt-6 p-2 bg-green-200 text-center rounded-lg ring-1 ring-green-800 shadow-sm">Verified</span>
            @else
            <button form="send-verification" class="text-red-800 mt-6 p-2 bg-red-200 text-center rounded-lg ring-1 ring-red-800 shadow-sm">Not Verified</button>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <button type="submit" class="ring-1 ring-blue-700 text-gray-900 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 focus:text-white hover:text-white font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center">{{ __('Save') }}</button>
        </div>
    </form>
</section>
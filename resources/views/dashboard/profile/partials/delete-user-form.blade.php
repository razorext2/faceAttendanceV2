<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-white">
            {{ __('Delete Account') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-300">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <button
        class="ring-1 ring-red-700 text-gray-900 hover:bg-red-800 focus:ring-4 focus:ring-red-300 focus:text-white hover:text-white font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-red-800 dark:hover:bg-red-900 dark:text-white dark:ring-gray-500"
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')">{{ __('Delete Account') }}</button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6 dark:bg-gray-800">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900 dark:text-white">
                {{ __('Are you sure you want to delete your account?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-300">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-full"
                    placeholder="{{ __('Password') }}"
                    autocomplete="current-password" />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <button type="button" x-on:click="$dispatch('close')"
                    class="ring-1 ring-blue-700 text-gray-900 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 focus:text-white hover:text-white font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-800 dark:hover:bg-blue-900 dark:text-white dark:ring-gray-500">
                    {{ __('Cancel') }}
                </button>

                <button type="submit"
                    class="ms-3 ring-1 ring-red-700 text-gray-900 hover:bg-red-800 focus:ring-4 focus:ring-red-300 focus:text-white hover:text-white font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-red-800 dark:hover:bg-red-900 dark:text-white dark:ring-gray-500">
                    {{ __('Delete Account') }}
                </button>
            </div>
        </form>
    </x-modal>

</section>
<section class="space-y-6">
	<header>
		<h2 class="dark:text-white text-lg font-medium text-gray-900">
			{{ __('Delete Account') }}
		</h2>

		<p class="dark:text-gray-300 mt-1 text-sm text-gray-600">
			{{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
		</p>
	</header>

	<button
		class="dark:bg-red-800 dark:hover:bg-red-900 dark:text-white dark:ring-gray-700 inline-flex items-center rounded-lg px-5 py-2.5 text-center text-sm font-medium text-gray-900 ring-1 ring-red-700 hover:bg-red-800 hover:text-white focus:text-white focus:ring-4 focus:ring-red-300"
		x-data=""
		x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')">{{ __('Delete Account') }}</button>

	<x-auth.modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
		<form class="dark:bg-[#18181b] p-6" method="post" action="{{ route('profile.destroy') }}">
			@csrf
			@method('delete')

			<h2 class="dark:text-white text-lg font-medium text-gray-900">
				{{ __('Are you sure you want to delete your account?') }}
			</h2>

			<p class="dark:text-gray-300 mt-1 text-sm text-gray-600">
				{{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
			</p>

			<div class="mt-6">
				<x-input-label class="sr-only" for="password" value="{{ __('Password') }}" />

				<x-text-input class="mt-1 block w-full" id="password" name="password" type="password"
					placeholder="{{ __('Password') }}" autocomplete="current-password" />

				<x-input-error class="mt-2" :messages="$errors->userDeletion->get('password')" />
			</div>

			<div class="mt-6 flex justify-end">
				<button
					class="dark:bg-blue-800 dark:hover:bg-blue-900 dark:text-white dark:ring-gray-700 inline-flex items-center rounded-lg px-5 py-2.5 text-center text-sm font-medium text-gray-900 ring-1 ring-blue-700 hover:bg-blue-800 hover:text-white focus:text-white focus:ring-4 focus:ring-blue-300"
					type="button" x-on:click="$dispatch('close')">
					{{ __('Cancel') }}
				</button>

				<button
					class="dark:bg-red-800 dark:hover:bg-red-900 dark:text-white dark:ring-gray-700 ms-3 inline-flex items-center rounded-lg px-5 py-2.5 text-center text-sm font-medium text-gray-900 ring-1 ring-red-700 hover:bg-red-800 hover:text-white focus:text-white focus:ring-4 focus:ring-red-300"
					type="submit">
					{{ __('Delete Account') }}
				</button>
			</div>
		</form>
	</x-auth.modal>

</section>

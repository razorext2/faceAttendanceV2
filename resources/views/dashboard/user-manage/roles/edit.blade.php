@extends('dashboard.layoutsDash.app')
@section('content')
	<div class="w-full space-y-6 xl:w-6/12 2xl:w-1/3">
		<div class="dark:bg-[#18181b] dark:ring-gray-700 rounded-xl bg-white p-4 shadow-sm ring-1 ring-gray-200 sm:p-6">
			<div class="max-w-xl">
				<header class="flex flex-row">
					<a
						class="dark:bg-red-800 dark:hover:bg-red-900 dark:text-white dark:ring-gray-700 mb-4 mr-3 flex flex-row rounded-lg px-2.5 py-2.5 align-middle ring-1 ring-red-700 hover:bg-red-300 md:px-4"
						href="{{ route('roles.index') }}">
						<svg class="dark:fill-white" class="icon" xmlns="http://www.w3.org/2000/svg" width="25" height="25"
							viewBox="0 0 1024 1024" fill="#000000" version="1.1">
							<path
								d="M669.6 849.6c8.8 8 22.4 7.2 30.4-1.6s7.2-22.4-1.6-30.4l-309.6-280c-8-7.2-8-17.6 0-24.8l309.6-270.4c8.8-8 9.6-21.6 2.4-30.4-8-8.8-21.6-9.6-30.4-2.4L360.8 480.8c-27.2 24-28 64-0.8 88.8l309.6 280z"
								fill="" />
						</svg>
						Kembali
					</a>
					<h2 class="dark:text-white mt-2 text-lg font-medium text-gray-900">
						{{ __('Ubah Data Role') }}
					</h2>

				</header>
				<p class="dark:text-gray-300 mt-1 text-sm text-gray-600">
					{{ __('Silahkan sesuaikan data dibawah ini dengan data yang benar.') }}
				</p>

				<form class="mt-4" action="{{ route('roles.update', $role) }}" method="POST">
					@csrf
					@method('put')
					<div class="mb-4 grid gap-6 sm:mb-5 sm:gap-6">
						<div class="w-full">
							<label class="dark:text-white mb-2 block text-sm font-medium text-gray-900" for="name">Nama
								Role</label>
							<input
								class="focus:ring-primary-600 focus:border-primary-600 block w-full rounded-lg border border-gray-300 bg-white p-2.5 text-sm text-gray-900"
								id="name" name="name" type="text" value="{{ $role->name }}" placeholder="Role" required="">
						</div>

						<div class="w-full">
							<label class="dark:text-white mb-2 block text-sm font-medium text-gray-900">Permissions</label>

							<input
								class="dark:focus:ring-green-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600 h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500"
								id="select-all" type="checkbox">
							<label class="dark:text-gray-300 ms-2 text-sm font-medium text-gray-900" id="select-all-label"
								for="select-all">Select
								All</label>

							<div class="grid md:grid-cols-2">
								@foreach ($permission as $value)
									<div>
										<input
											class="permission-checkbox dark:focus:ring-green-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600 h-4 w-4 rounded border-gray-300 bg-gray-100 text-green-600 focus:ring-2 focus:ring-green-500"
											id="permission[{{ $value->id }}]" name="permission[{{ $value->id }}]" type="checkbox"
											value="{{ $value->id }}" {{ in_array($value->id, $rolePermissions) ? 'checked' : '' }}>
										<label class="dark:text-gray-300 ms-2 text-sm font-medium text-gray-900"
											for="permission[{{ $value->id }}]">{{ $value->name }}</label>
									</div>
								@endforeach
							</div>

						</div>
					</div>
					<div class="flex items-center">
						<button
							class="dark:bg-blue-800 dark:text-white dark:hover:bg-blue-900 dark:ring-gray-700 inline-flex items-center rounded-lg px-5 py-2.5 text-center text-sm font-medium text-gray-900 ring-1 ring-blue-700 hover:bg-blue-800 hover:text-white focus:text-white focus:ring-4 focus:ring-blue-300"
							type="submit">
							Submit
							<svg class="ms-2 h-3.5 w-3.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
								viewBox="0 0 14 10">
								<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
									d="M1 5h12m0 0L9 1m4 4L9 9" />
							</svg>
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<script>
		document.getElementById('select-all').addEventListener('change', function() {
			// Get all checkboxes with class 'permission-checkbox'
			let checkboxes = document.querySelectorAll('.permission-checkbox');

			// Set the checked state of all checkboxes based on the "Select All" checkbox
			checkboxes.forEach(function(checkbox) {
				checkbox.checked = document.getElementById('select-all').checked;
			});

			// Update label for select all/deselect all
			updateSelectAllLabel();
		});

		// Add event listener to each permission checkbox to update the select-all checkbox state
		let permissionCheckboxes = document.querySelectorAll('.permission-checkbox');
		permissionCheckboxes.forEach(function(checkbox) {
			checkbox.addEventListener('change', function() {
				// If any checkbox is unchecked, deselect the select-all checkbox
				if (!this.checked) {
					document.getElementById('select-all').checked = false;
				}

				// If all checkboxes are checked, select the select-all checkbox
				if (Array.from(permissionCheckboxes).every(chk => chk.checked)) {
					document.getElementById('select-all').checked = true;
				}

				// Update the label for select all/deselect all
				updateSelectAllLabel();
			});
		});

		// Function to update the label of "Select All"
		function updateSelectAllLabel() {
			let selectAllCheckbox = document.getElementById('select-all');
			let label = document.getElementById('select-all-label');

			if (selectAllCheckbox.checked) {
				label.textContent = "Deselect All";
			} else {
				label.textContent = "Select All";
			}
		}
	</script>
@endsection

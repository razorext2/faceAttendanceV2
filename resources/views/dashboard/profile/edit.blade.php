@extends('dashboard.layoutsDash.app')
@section('content')
	<div class="grid lg:grid-cols-2">
		<div class="mx-auto w-full space-y-6">
			<div class="dark:bg-[#18181b] dark:ring-gray-700 rounded-lg bg-white p-4 shadow-sm ring-1 ring-gray-200 sm:p-8">
				<div class="w-full">
					@include('dashboard.profile.partials.update-profile-information-form')
				</div>
			</div>

			<div class="dark:bg-[#18181b] dark:ring-gray-700 rounded-lg bg-white p-4 shadow-sm ring-1 ring-gray-200 sm:p-8">
				<div class="w-full">
					@include('dashboard.profile.partials.update-password-form')
				</div>
			</div>

			<div class="dark:bg-[#18181b] dark:ring-gray-700 rounded-lg bg-white p-4 shadow-sm ring-1 ring-gray-200 sm:p-8">
				<div class="w-full">
					@include('dashboard.profile.partials.delete-user-form')
				</div>
			</div>
		</div>
	</div>
@endsection

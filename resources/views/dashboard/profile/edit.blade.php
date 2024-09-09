@extends('dashboard.layoutsDash.app')
@section('content')
<div class="w-full mx-auto space-y-6">
    <div class="p-4 sm:p-8 bg-white shadow-sm rounded-lg ring-1 ring-gray-200">
        <div class="max-w-xl">
            @include('dashboard.profile.partials.update-profile-information-form')
        </div>
    </div>

    <div class="p-4 sm:p-8 bg-white shadow-sm rounded-lg ring-1 ring-gray-200">
        <div class="max-w-xl">
            @include('dashboard.profile.partials.update-password-form')
        </div>
    </div>

    <div class="p-4 sm:p-8 bg-white shadow-sm rounded-lg ring-1 ring-gray-200">
        <div class="max-w-xl">
            @include('dashboard.profile.partials.delete-user-form')
        </div>
    </div>
</div>
@endsection
@extends('dashboard.layoutsDash.app')
@section('content')

<div class="grid grid-cols-1 gap-6 relative">

    <div class="flex items-center justify-center rounded-xl bg-gray-50 pt-16 lg:p-4 pb-2 px-2 h-auto ring-1 ring-gray-200 shadow-sm dark:bg-gray-800 dark:ring-gray-500">
        <table id="filter-table">
            <thead>
                <tr>
                    <th>
                        <span class="flex items-center text-white">
                            User
                            <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                            </svg>
                        </span>
                    </th>
                    <th>
                        <span class="flex items-center text-white">
                            Action
                            <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                            </svg>
                        </span>
                    </th>
                    <th>
                        <span class="flex items-center text-white">
                            IP Address
                            <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                            </svg>
                        </span>
                    </th>
                    <th>
                        <span class="flex items-center text-white">
                            User Agent
                            <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                            </svg>
                        </span>
                    </th>
                    <th>
                        <span class="flex items-center text-white">
                            User Location
                            <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                            </svg>
                        </span>
                    </th>
                    <th>
                        <span class="flex items-center text-white">
                            Datetime
                            <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                            </svg>
                        </span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($log as $index => $data)
                <tr class="hover:bg-gray-100 hover:text-black dark:text-gray-300 dark:hover:bg-gray-700/50 dark:hover:text-white">
                    <td>
                        <p>Userid: {{ $data->user_id }}</p>
                        <p class="font-medium">{{ $data->userRelasi->name  ?? 'N/A' }}</p>
                    </td>
                    <td>
                        @php
                        $str = $data->user_action;
                        $st = '';

                        if (str_contains($str, 'create')) {
                        $st = 'bg-green-400 dark:bg-transparent dark:text-green-400';
                        } elseif (str_contains($str, 'update')) {
                        $st = 'bg-blue-400 dark:bg-transparent dark:text-blue-400';
                        } elseif (str_contains($str, 'delete')) {
                        $st = 'bg-red-400 dark:bg-transparent dark:text-red-400';
                        } else {
                        $st = 'bg-gray-400 dark:bg-transparent dark:text-gray-300';}
                        @endphp

                        <span class="px-3 py-1 rounded-lg cursor-default font-medium text-black {{$st}}">{{ ucfirst($data->user_action)  ?? 'N/A' }}</span>
                    </td>
                    <td>{{ $data->ip_address  ?? 'N/A' }}</td>
                    <td>{{ $data->user_agent  ?? 'N/A' }}</td>
                    <td>{{ $data->user_location  ?? 'N/A' }}</td>
                    <td>Create: {{ $data->created_at  ?? 'N/A' }} / Updated: {{ $data->updated_at ?? 'N/A' }}</td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
@endsection
@extends('dashboard.layoutsDash.app')
@section('content')
	<div class="dark:bg-[#18181b] dark:border-gray-700 mb-8 rounded-xl border border-gray-200 bg-white p-6 py-4">
		<div class="w-full">
			<div class="flex flex-row">
				<a
					class="dark:bg-red-800 dark:hover:bg-red-900 dark:text-white dark:ring-gray-700 my-auto mr-6 flex flex-row rounded-lg p-2.5 align-middle ring-1 ring-red-700 hover:bg-red-300 md:px-4"
					href="{{ route('dashboard.pegawai') }}">
					<svg class="dark:fill-white" class="icon" xmlns="http://www.w3.org/2000/svg" width="25" height="25"
						viewBox="0 0 1024 1024" fill="#000000" version="1.1">
						<path
							d="M669.6 849.6c8.8 8 22.4 7.2 30.4-1.6s7.2-22.4-1.6-30.4l-309.6-280c-8-7.2-8-17.6 0-24.8l309.6-270.4c8.8-8 9.6-21.6 2.4-30.4-8-8.8-21.6-9.6-30.4-2.4L360.8 480.8c-27.2 24-28 64-0.8 88.8l309.6 280z"
							fill="" />
					</svg>
					Kembali
				</a>
				<div class="dark:border-gray-700 mb-4 border-b border-gray-200">
					<ul class="flex flex-wrap text-center text-sm font-medium" role="tablist">
						<li role="presentation">
							<a
								class="dark:hover:text-gray-300 {{ Route::is('pegawai.detail') ? 'text-red-600 border-b-2 hover:border-gray-300' : 'text-gray-400' }} inline-block rounded-t-lg p-4 hover:text-gray-600"
								href="{{ route('pegawai.detail', ['pegawai' => $pegawai->id]) }}">Profile</a>
						</li>
						<li role="presentation">
							<a
								class="dark:hover:text-gray-300 {{ Route::is('pegawai.attendancelist') ? 'text-red-600 border-b-2 hover:border-gray-300' : 'text-gray-400' }} inline-block rounded-t-lg p-4 hover:text-gray-600"
								href="{{ route('pegawai.attendancelist', ['pegawai' => $pegawai->id]) }}">Attendance</a>
						</li>
						<li role="presentation">
							<a
								class="dark:hover:text-gray-300 {{ Route::is('pegawai.payrollinfo') ? 'text-red-600 border-b-2 hover:border-gray-300' : 'text-gray-400' }} inline-block rounded-t-lg p-4 hover:text-gray-600"
								href="{{ route('pegawai.payrollinfo', ['pegawai' => $pegawai->id]) }}">Payroll</a>
						</li>
						<li role="presentation">
							<a
								class="dark:hover:text-gray-300 {{ Route::is('pegawai.timeline') ? 'text-red-600 border-b-2 hover:border-gray-300' : 'text-gray-400' }} inline-block rounded-t-lg p-4 hover:text-gray-600"
								href="{{ route('pegawai.timeline', ['pegawai' => $pegawai->kode_pegawai]) }}">Timeline</a>
						</li>
					</ul>
				</div>

			</div>
		</div>
	</div>

	<div id="mainContent">
		@yield('menus')
	</div>
@endsection

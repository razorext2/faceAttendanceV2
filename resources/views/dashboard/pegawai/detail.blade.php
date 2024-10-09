@extends('dashboard.layoutsDash.app')
@section('content')
    <div class="grid gap-4 xl:grid-cols-2">
        <div class="w-full space-y-6">
            <div
                class="grid gap-4 p-4 shadow-sm bg-gray-50 rounded-xl ring-1 ring-gray-200 sm:p-6 dark:bg-gray-800 dark:ring-gray-500">
                <div class="w-full mb-2">
                    <header class="flex flex-row">
                        <a href="{{ route('dashboard.pegawai') }}"
                            class="mr-3 px-2.5 md:px-4 py-2.5 align-middle ring-1 ring-red-700 hover:bg-red-300 rounded-lg flex flex-row dark:bg-red-800 dark:hover:bg-red-900 dark:text-white dark:ring-gray-500">
                            <svg class="dark:fill-white" xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                viewBox="0 0 1024 1024" fill="#000000" class="icon" version="1.1">
                                <path
                                    d="M669.6 849.6c8.8 8 22.4 7.2 30.4-1.6s7.2-22.4-1.6-30.4l-309.6-280c-8-7.2-8-17.6 0-24.8l309.6-270.4c8.8-8 9.6-21.6 2.4-30.4-8-8.8-21.6-9.6-30.4-2.4L360.8 480.8c-27.2 24-28 64-0.8 88.8l309.6 280z"
                                    fill="" />
                            </svg>
                            Kembali
                        </a>
                        <h2 class="mt-2 text-xl font-medium text-gray-900 dark:text-white">
                            {{ $pegawai->full_name }}
                        </h2>
                    </header>
                </div>

                <div class="w-full">
                    <div class="grid gap-2 md:grid-cols-2">
                        @foreach ($images as $image)
                            @if (!is_null($image))
                                <div class="p-1 bg-gray-50 rounded-xl dark:bg-gray-800">
                                    <img class="object-cover w-full h-56 border-gray-500 rounded-xl blur-sm border-1 hover:blur-none"
                                        src="{{ asset('storage/' . $pegawai->storage . $image) }}" alt="">
                                </div>
                            @endif
                        @endforeach
                    </div>

                    <div class="mt-4">

                        <div class="grid gap-2 md:grid-cols-2">

                            <div
                                class="flex flex-col items-start justify-center p-3 bg-gray-100 border border-gray-200 md:col-span-2 rounded-xl dark:bg-gray-700 dark:border-gray-500">
                                <p class="text-sm text-gray-600 dark:text-gray-300">Kode Pegawai</p>
                                <p class="text-base font-medium text-navy-700 dark:text-white">
                                    {{ $pegawai->kode_pegawai ?? 'N/A' }}
                                </p>
                            </div>

                            <div
                                class="flex flex-col items-start justify-center p-3 bg-gray-100 border border-gray-200 rounded-xl dark:bg-gray-700 dark:border-gray-500">
                                <p class="text-sm text-gray-600 dark:text-gray-300">Nama Lengkap</p>
                                <p class="text-base font-medium text-navy-700 dark:text-white">
                                    {{ $pegawai->full_name ?? 'N/A' }}
                                </p>
                            </div>

                            <div
                                class="flex flex-col items-start justify-center p-3 bg-gray-100 border border-gray-200 rounded-xl dark:bg-gray-700 dark:border-gray-500">
                                <p class="text-sm text-gray-600 dark:text-gray-300">Panggilan</p>
                                <p class="text-base font-medium text-navy-700 dark:text-white">
                                    {{ $pegawai->nick_name ?? 'N/A' }}
                                </p>
                            </div>

                            <div
                                class="flex flex-col items-start justify-center p-3 bg-gray-100 border border-gray-200 rounded-xl dark:bg-gray-700 dark:border-gray-500">
                                <p class="text-sm text-gray-600 dark:text-gray-300">No Telepon</p>
                                <p class="text-base font-medium text-navy-700 dark:text-white">
                                    {{ $pegawai->no_telp ?? 'N/A' }}
                                </p>
                            </div>

                            <div
                                class="flex flex-col items-start justify-center p-3 bg-gray-100 border border-gray-200 rounded-xl dark:bg-gray-700 dark:border-gray-500">
                                <p class="text-sm text-gray-600 dark:text-gray-300">Tanggal Lahir</p>
                                <p class="text-base font-medium text-navy-700 dark:text-white">
                                    {{ $pegawai->tgl_lahir ?? 'N/A' }}
                                </p>
                            </div>

                            <div
                                class="flex flex-col items-start justify-center p-3 bg-gray-100 border border-gray-200 md:col-span-2 rounded-xl dark:bg-gray-700 dark:border-gray-500">
                                <p class="text-sm text-gray-600 dark:text-gray-300">Alamat</p>
                                <p class="text-base font-medium text-navy-700 dark:text-white">
                                    {{ $pegawai->alamat ?? 'N/A' }}
                                </p>
                            </div>

                            <div
                                class="flex flex-col items-start justify-center p-3 bg-gray-100 border border-gray-200 rounded-xl dark:bg-gray-700 dark:border-gray-500">
                                <p class="text-sm text-gray-600 dark:text-gray-300">Jabatan</p>
                                <p class="text-base font-medium text-navy-700 dark:text-white">
                                    {{ $pegawai->jabatanRelasi->nama_jabatan ?? 'N/A' }}
                                </p>
                            </div>

                            <div
                                class="flex flex-col items-start justify-center p-3 bg-gray-100 border border-gray-200 rounded-xl dark:bg-gray-700 dark:border-gray-500">
                                <p class="text-sm text-gray-600 dark:text-gray-300">Storage</p>
                                <p class="text-base font-medium text-navy-700 dark:text-white">
                                    {{ $pegawai->storage ?? 'N/A' }}
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="w-full space-y-6 grow">
            <div class="w-full space-y-6 xl:col-span-2">
                <div
                    class="p-4 shadow-sm bg-gray-50 rounded-xl ring-1 ring-gray-200 sm:p-6 dark:bg-gray-800 dark:ring-gray-500">

                    <div class="w-full mb-4">
                        <header class="flex flex-col -mt-2.5">
                            <h2 class="text-xl font-medium text-gray-900 dark:text-white">
                                <span class="text-gray-700 dark:text-gray-300 !text-md">Periode: </span>
                                {{ $startOfMonth }}
                            </h2>
                            <p class="text-sm text-gray-700 dark:text-gray-300">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit, doloremque repellat atque illum
                                aliquid.
                            </p>
                        </header>
                    </div>

                    <div class="grid grid-cols-7 gap-2 text-center">
                        <!-- Nama-nama hari -->
                        <div class="font-medium text-gray-900 dark:text-white">Min</div>
                        <div class="font-medium text-gray-900 dark:text-white">Sen</div>
                        <div class="font-medium text-gray-900 dark:text-white">Sel</div>
                        <div class="font-medium text-gray-900 dark:text-white">Rab</div>
                        <div class="font-medium text-gray-900 dark:text-white">Kam</div>
                        <div class="font-medium text-gray-900 dark:text-white">Jum</div>
                        <div class="font-medium text-gray-900 dark:text-white">Sab</div>

                        <!-- Looping untuk menampilkan tanggal -->
                        @foreach ($dd as $date)
                            @if ($date)
                                @php
                                    // Cek apakah ada data untuk tanggal ini
                                    $hasData = $attendanceData->contains(function ($attendance) use ($date) {
                                        return \Carbon\Carbon::parse($attendance->jam_masuk)->isSameDay($date);
                                    });
                                @endphp
                                <div>
                                    <button data-date="{{ $date }}" data-popover-placement="left"
                                        data-popover-target="popover-click{{ $date }}" data-popover-trigger="click"
                                        type="button"
                                        class="w-full h-full p-2 rounded-lg {{ $hasData
                                            ? 'bg-green-500 hover:bg-green-600 text-white dark:bg-green-800 dark:hover:bg-green-900 dark:text-white'
                                            : 'bg-gray-200 text-gray-400 hover:bg-gray-300 dark:bg-gray-700 dark:text-gray-300' }} border border-gray-200 dark:border-gray-500 cursor-pointer">
                                        {{ \Carbon\Carbon::parse($date)->isoFormat('D') }}
                                    </button>
                                </div>

                                <div data-popover id="popover-click{{ $date }}" role="tooltip"
                                    class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 opacity-0 rounded-xl dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                                    <div
                                        class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-xl dark:border-gray-600 dark:bg-gray-700">
                                        <h3 class="font-semibold text-gray-900 dark:text-white">Absen pada:
                                            {{ $date }}</h3>
                                    </div>
                                    <div class="p-4 max-h-[250px] overflow-y-auto popover-content ">
                                        <p>Tunggu sebentar, data sedang dimuat...</p>
                                    </div>
                                    <div data-popper-arrow></div>
                                </div>
                            @else
                                <div></div> <!-- Grid kosong untuk hari sebelum tanggal 1 -->
                            @endif
                        @endforeach
                    </div>



                </div>
            </div>
        </div>

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const buttons = document.querySelectorAll('[data-popover-trigger="click"]');

            buttons.forEach(button => {
                button.addEventListener('click', function() {
                    const date = this.getAttribute('data-date');
                    const popoverContent = document.querySelector(
                        `#popover-click${date} .popover-content`);

                    // Mengambil data menggunakan AJAX
                    fetch(
                            `/api/get-attendance-data?date=${date}&kode_pegawai={{ $pegawai->kode_pegawai }}`)
                        .then(response => response.json())
                        .then(data => {
                            // Membuat tabel untuk data kehadiran
                            let attendanceTable = `
                        <table class="min-w-full text-gray-800 divide-y divide-gray-200 dark:text-white dark:divide-gray-500">
                            <thead class="bg-gray-100 dark:bg-gray-700">
                                <tr>
                                    <th class="px-4 py-2 text-left rounded-tl-xl">ID</th>
                                    <th class="px-4 py-2 text-left">Jam Masuk</th>
                                    <th class="px-4 py-2 text-left rounded-tr-xl">Foto</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-gray-50 dark:bg-gray-600 dark:divide-gray-500">`;

                            data.attendance.forEach(item => {
                                const jamMasuk = new Date(item.jam_masuk);
                                const formattedjamMasuk = jamMasuk.toLocaleTimeString(
                                    'id-ID', {
                                        year: 'numeric',
                                        month: 'long',
                                        day: 'numeric',
                                    });

                                const photoURL =
                                '{{ sha1('libs') }}'; // Ambil dari Blade
                                const url = item.photoURL; // URL dari item
                                const path =
                                    `{{ asset('') }}${photoURL}/${url}.png`; // Gabungkan URL

                                attendanceTable += `
                                <tr>
                                    <td class="px-4 py-2">${item.id}</td>
                                    <td class="px-4 py-2">${formattedjamMasuk}</td>
                                    <td class="px-4 py-2"><img src="${path}" alt="Foto" class="object-cover w-16 h-16 rounded-lg"></td>
                                </tr>`;
                            });

                            attendanceTable += `
                            </tbody>
                        </table>`;

                            // Membuat tabel untuk data keluar
                            let attendanceOutTable = `
                        <table class="min-w-full text-gray-800 divide-y divide-gray-200 dark:text-white dark:divide-gray-500">
                            <thead class="bg-gray-100 dark:bg-gray-700">
                                <tr>
                                    <th class="px-4 py-2 text-left">ID</th>
                                    <th class="px-4 py-2 text-left">Jam Keluar</th>
                                    <th class="px-4 py-2 text-left">Foto</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-gray-50 dark:bg-gray-600 dark:divide-gray-500">`;
                            data.attendanceOut.forEach(item => {
                                const jamKeluar = new Date(item.jam_keluar);
                                const formattedjamKeluar = jamKeluar.toLocaleTimeString(
                                    'id-ID', {
                                        year: 'numeric',
                                        month: 'long',
                                        day: 'numeric',
                                    });

                                const photoURL =
                                '{{ sha1('libs') }}'; // Ambil dari Blade
                                const url = item.photoURL; // URL dari item
                                const path =
                                    `{{ asset('') }}${photoURL}/${url}.png`; // Gabungkan URL

                                attendanceOutTable += `
                                <tr>
                                    <td class="px-4 py-2">${item.id}</td>
                                    <td class="px-4 py-2">${formattedjamKeluar}</td>
                                    <td class="px-4 py-2"><img src="${path}" alt="Foto" class="object-cover w-16 h-16 rounded-lg"></td>
                                </tr>`;
                            });

                            attendanceOutTable += `
                            </tbody>
                            <tfooter>
                                <tr>
                                    <th class="px-4 py-2 text-left bg-gray-100 rounded-bl-xl dark:bg-gray-700"></th>
                                    <th class="px-4 py-2 text-left bg-gray-100 dark:bg-gray-700"></th>
                                    <th class="px-4 py-2 text-left bg-gray-100 rounded-br-xl dark:bg-gray-700"></th>
                                </tr>
                            </tfooter>
                        </table>`;

                            // Memperbarui konten popover dengan tabel
                            popoverContent.innerHTML = `
            ${attendanceTable}
            ${attendanceOutTable}
        `;
                        })
                        .catch(error => {
                            console.error('Error fetching data:', error);
                            popoverContent.innerHTML =
                                '<p>Terjadi kesalahan saat memuat data.</p>';
                        });
                });
            });
        });
    </script>
@endsection

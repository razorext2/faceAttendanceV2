@extends('dashboard.layoutsDash.app')
@section('content')

<div class="grid xl:grid-cols-2 gap-4">
    <div class="w-full space-y-6">
        <div class="grid gap-4 bg-gray-50 shadow-sm rounded-xl ring-1 ring-gray-200 p-4 sm:p-6 dark:bg-gray-800 dark:ring-gray-500">
            <div class="w-full mb-2">
                <header class="flex flex-row">
                    <a href="{{ route('dashboard.pegawai') }}" class="mr-3 px-2.5 md:px-4 py-2.5 align-middle ring-1 ring-red-700 hover:bg-red-300 rounded-lg flex flex-row dark:bg-red-800 dark:hover:bg-red-900 dark:text-white dark:ring-gray-500">
                        <svg class="dark:fill-white" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 1024 1024" fill="#000000" class="icon" version="1.1">
                            <path d="M669.6 849.6c8.8 8 22.4 7.2 30.4-1.6s7.2-22.4-1.6-30.4l-309.6-280c-8-7.2-8-17.6 0-24.8l309.6-270.4c8.8-8 9.6-21.6 2.4-30.4-8-8.8-21.6-9.6-30.4-2.4L360.8 480.8c-27.2 24-28 64-0.8 88.8l309.6 280z" fill="" />
                        </svg>
                        Kembali
                    </a>
                    <h2 class="text-xl font-medium text-gray-900 mt-2 dark:text-white">
                        {{ $pegawai->full_name }}
                    </h2>
                </header>
            </div>

            <div class="w-full">
                <div class="grid md:grid-cols-2 gap-2">
                    @foreach ($images as $image )
                    @if(!is_null($image))
                    <div class="bg-gray-50 p-1 rounded-xl dark:bg-gray-800">
                        <img class="h-56 object-cover w-full rounded-xl blur-sm border-1 border-gray-500 hover:blur-none" src="{{ asset('storage/'.$pegawai->storage. $image) }}" alt="">
                    </div>
                    @endif
                    @endforeach
                </div>

                <div class="mt-4">

                    <div class="grid md:grid-cols-2 gap-2">

                        <div class="flex flex-col md:col-span-2 items-start justify-center rounded-xl bg-gray-100 p-3  border border-gray-200 dark:bg-gray-700 dark:border-gray-500">
                            <p class="text-sm text-gray-600 dark:text-gray-300">Kode Pegawai</p>
                            <p class="text-base font-medium text-navy-700 dark:text-white">
                                {{ $pegawai->kode_pegawai ?? 'N/A' }}
                            </p>
                        </div>

                        <div class="flex flex-col items-start justify-center rounded-xl bg-gray-100 p-3  border border-gray-200 dark:bg-gray-700 dark:border-gray-500">
                            <p class="text-sm text-gray-600 dark:text-gray-300">Nama Lengkap</p>
                            <p class="text-base font-medium text-navy-700 dark:text-white">
                                {{ $pegawai->full_name ?? 'N/A' }}
                            </p>
                        </div>

                        <div class="flex flex-col items-start justify-center rounded-xl bg-gray-100 p-3  border border-gray-200 dark:bg-gray-700 dark:border-gray-500">
                            <p class="text-sm text-gray-600 dark:text-gray-300">Panggilan</p>
                            <p class="text-base font-medium text-navy-700 dark:text-white">
                                {{ $pegawai->nick_name ?? 'N/A' }}
                            </p>
                        </div>

                        <div class="flex flex-col items-start justify-center rounded-xl bg-gray-100 p-3  border border-gray-200 dark:bg-gray-700 dark:border-gray-500">
                            <p class="text-sm text-gray-600 dark:text-gray-300">No Telepon</p>
                            <p class="text-base font-medium text-navy-700 dark:text-white">
                                {{ $pegawai->no_telp ?? 'N/A' }}
                            </p>
                        </div>

                        <div class="flex flex-col items-start justify-center rounded-xl bg-gray-100 p-3  border border-gray-200 dark:bg-gray-700 dark:border-gray-500">
                            <p class="text-sm text-gray-600 dark:text-gray-300">Tanggal Lahir</p>
                            <p class="text-base font-medium text-navy-700 dark:text-white">
                                {{ $pegawai->tgl_lahir ?? 'N/A' }}
                            </p>
                        </div>

                        <div class="flex flex-col md:col-span-2 items-start justify-center rounded-xl bg-gray-100 p-3  border border-gray-200 dark:bg-gray-700 dark:border-gray-500">
                            <p class="text-sm text-gray-600 dark:text-gray-300">Alamat</p>
                            <p class="text-base font-medium text-navy-700 dark:text-white">
                                {{ $pegawai->alamat ?? 'N/A' }}
                            </p>
                        </div>

                        <div class="flex flex-col items-start justify-center rounded-xl bg-gray-100 p-3  border border-gray-200 dark:bg-gray-700 dark:border-gray-500">
                            <p class="text-sm text-gray-600 dark:text-gray-300">Jabatan</p>
                            <p class="text-base font-medium text-navy-700 dark:text-white">
                                {{ $pegawai->jabatanRelasi->nama_jabatan ?? 'N/A' }}
                            </p>
                        </div>

                        <div class="flex flex-col items-start justify-center rounded-xl bg-gray-100 p-3  border border-gray-200 dark:bg-gray-700 dark:border-gray-500">
                            <p class="text-sm text-gray-600 dark:text-gray-300">Storage</p>
                            <p class="text-base font-medium text-navy-700 dark:text-white">
                                {{ $pegawai->storage ?? 'N/A' }}
                            </p>
                        </div>

                        <div>
                            <button
                                class="delete-btn px-4 py-3 text-sm text-gray-900 bg-transparent border-red-800 border  rounded-lg hover:bg-red-900 hover:text-white focus:ring-red-500 focus:bg-red-900 focus:text-white dark:bg-red-800 dark:hover:bg-red-900 dark:text-white dark:border-gray-500 flex flex-row"
                                data-id="{{ $pegawai->id }}"
                                data-modal-target="deleteModal"
                                data-modal-toggle="deleteModal">
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 dark:stroke-white mr-2">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M12 10V17M8 10V17M19 9H22M19 14H22M19 19H21M16 6V16.2C16 17.8802 16 18.7202 15.673 19.362C15.3854 19.9265 14.9265 20.3854 14.362 20.673C13.7202 21 12.8802 21 11.2 21H8.8C7.11984 21 6.27976 21 5.63803 20.673C5.07354 20.3854 4.6146 19.9265 4.32698 19.362C4 18.7202 4 17.8802 4 16.2V6M2 6H18M14 6L13.7294 5.18807C13.4671 4.40125 13.3359 4.00784 13.0927 3.71698C12.8779 3.46013 12.6021 3.26132 12.2905 3.13878C11.9376 3 11.523 3 10.6936 3H9.30643C8.47705 3 8.06236 3 7.70951 3.13878C7.39792 3.26132 7.12208 3.46013 6.90729 3.71698C6.66405 4.00784 6.53292 4.40125 6.27064 5.18807L6 6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </svg>
                                Hapus Data Pegawai
                            </button>

                            @include('dashboard.layoutsDash.modals')
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="w-full space-y-6 grow">
        <div class="w-full space-y-6 xl:col-span-2">
            <div class="bg-gray-50 shadow-sm rounded-xl ring-1 ring-gray-200 p-4 sm:p-6 dark:bg-gray-800 dark:ring-gray-500">

                <div class="w-full mb-4">
                    <header class="flex flex-col -mt-2.5">
                        <h2 class="text-xl font-medium text-gray-900 dark:text-white">
                            <span class="text-gray-700 dark:text-gray-300 !text-md">Periode: </span> {{ $startOfMonth }}
                        </h2>
                        <p class="text-sm text-gray-700 dark:text-gray-300">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit, doloremque repellat atque illum aliquid.
                        </p>
                    </header>
                </div>

                <div class="grid grid-cols-7 gap-2 text-center">
                    <!-- Nama-nama hari -->
                    <div class="text-gray-900 font-medium dark:text-white">Min</div>
                    <div class="text-gray-900 font-medium dark:text-white">Sen</div>
                    <div class="text-gray-900 font-medium dark:text-white">Sel</div>
                    <div class="text-gray-900 font-medium dark:text-white">Rab</div>
                    <div class="text-gray-900 font-medium dark:text-white">Kam</div>
                    <div class="text-gray-900 font-medium dark:text-white">Jum</div>
                    <div class="text-gray-900 font-medium dark:text-white">Sab</div>

                    <!-- Looping untuk menampilkan tanggal -->
                    @foreach ($dd as $date)
                    @if ($date)
                    @php
                    // Cek apakah ada data untuk tanggal ini
                    $hasData = $attendanceData->contains(function($attendance) use ($date) {
                    return \Carbon\Carbon::parse($attendance->jam_masuk)->isSameDay($date);
                    });
                    @endphp
                    <div>
                        <button data-date="{{ $date }}" data-popover-placement="left" data-popover-target="popover-click{{$date}}" data-popover-trigger="click" type="button"
                            class="w-full h-full p-2 rounded-lg {{ $hasData ? 
                            'bg-green-500 hover:bg-green-600 text-white dark:bg-green-800 dark:hover:bg-green-900 dark:text-white' : 
                            'bg-gray-200 text-gray-400 hover:bg-gray-300 dark:bg-gray-700 dark:text-gray-300'
                            }} border border-gray-200 dark:border-gray-500 cursor-pointer">
                            {{ \Carbon\Carbon::parse($date)->isoFormat('D') }}
                        </button>
                    </div>

                    <div data-popover id="popover-click{{$date}}" role="tooltip" class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-xl opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                        <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-xl dark:border-gray-600 dark:bg-gray-700">
                            <h3 class="font-semibold text-gray-900 dark:text-white">Absen pada: {{ $date }}</h3>
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
                const popoverContent = document.querySelector(`#popover-click${date} .popover-content`);

                // Mengambil data menggunakan AJAX
                fetch(`/api/get-attendance-data?date=${date}&kode_pegawai={{ $pegawai->kode_pegawai }}`)
                    .then(response => response.json())
                    .then(data => {
                        // Membuat tabel untuk data kehadiran
                        let attendanceTable = `
                        <table class="min-w-full divide-y divide-gray-200 text-gray-800 dark:text-white dark:divide-gray-500">
                            <thead class="bg-gray-100 dark:bg-gray-700">
                                <tr>
                                    <th class="px-4 py-2 text-left rounded-tl-xl">ID</th>
                                    <th class="px-4 py-2 text-left">Jam Masuk</th>
                                    <th class="px-4 py-2 text-left rounded-tr-xl">Foto</th>
                                </tr>
                            </thead>
                            <tbody class="bg-gray-50 divide-y divide-gray-200 dark:bg-gray-600 dark:divide-gray-500">`;

                        data.attendance.forEach(item => {
                            const jamMasuk = new Date(item.jam_masuk);
                            const formattedjamMasuk = jamMasuk.toLocaleTimeString('id-ID', {
                                year: 'numeric',
                                month: 'long',
                                day: 'numeric',
                            });

                            const photoURL = '{{ sha1("libs") }}'; // Ambil dari Blade
                            const url = item.photoURL; // URL dari item
                            const path = `{{ asset('') }}${photoURL}/${url}.png`; // Gabungkan URL

                            attendanceTable += `
                                <tr>
                                    <td class="px-4 py-2">${item.id}</td>
                                    <td class="px-4 py-2">${formattedjamMasuk}</td>
                                    <td class="px-4 py-2"><img src="${path}" alt="Foto" class="w-16 h-16 object-cover rounded-lg"></td>
                                </tr>`;
                        });

                        attendanceTable += `
                            </tbody>
                        </table>`;

                        // Membuat tabel untuk data keluar
                        let attendanceOutTable = `
                        <table class="min-w-full divide-y divide-gray-200 text-gray-800 dark:text-white dark:divide-gray-500">
                            <thead class="bg-gray-100 dark:bg-gray-700">
                                <tr>
                                    <th class="px-4 py-2 text-left">ID</th>
                                    <th class="px-4 py-2 text-left">Jam Keluar</th>
                                    <th class="px-4 py-2 text-left">Foto</th>
                                </tr>
                            </thead>
                            <tbody class="bg-gray-50 divide-y divide-gray-200 dark:bg-gray-600 dark:divide-gray-500">`;
                        data.attendanceOut.forEach(item => {
                            const jamKeluar = new Date(item.jam_keluar);
                            const formattedjamKeluar = jamKeluar.toLocaleTimeString('id-ID', {
                                year: 'numeric',
                                month: 'long',
                                day: 'numeric',
                            });

                            const photoURL = '{{ sha1("libs") }}'; // Ambil dari Blade
                            const url = item.photoURL; // URL dari item
                            const path = `{{ asset('') }}${photoURL}/${url}.png`; // Gabungkan URL

                            attendanceOutTable += `
                                <tr>
                                    <td class="px-4 py-2">${item.id}</td>
                                    <td class="px-4 py-2">${formattedjamKeluar}</td>
                                    <td class="px-4 py-2"><img src="${path}" alt="Foto" class="w-16 h-16 object-cover rounded-lg"></td>
                                </tr>`;
                        });

                        attendanceOutTable += `
                            </tbody>
                            <tfooter>
                                <tr>
                                    <th class="px-4 py-2 text-left rounded-bl-xl bg-gray-100 dark:bg-gray-700"></th>
                                    <th class="px-4 py-2 text-left bg-gray-100 dark:bg-gray-700"></th>
                                    <th class="px-4 py-2 text-left rounded-br-xl bg-gray-100 dark:bg-gray-700"></th>
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
                        popoverContent.innerHTML = '<p>Terjadi kesalahan saat memuat data.</p>';
                    });
            });
        });
    });
</script>


@endsection
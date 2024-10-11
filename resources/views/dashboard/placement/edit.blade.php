@extends('dashboard.layoutsDash.app')
@section('content')
    <div class="w-full">
        <form action="{{ route('placement.update', $placement) }}" class="mt-4" method="POST">
            @csrf
            @method('put')
            <div class="grid gap-4 lg:grid-cols-2 xl:grid-cols-5">
                <div class="w-full space-y-6 xl:col-span-2">
                    <div
                        class="p-4 shadow-sm sm:p-6 bg-gray-50 rounded-xl ring-1 ring-gray-200 dark:bg-gray-800 dark:ring-gray-500">
                        <div class="max-w-xl">
                            <header class="flex flex-row">
                                <a href="{{ route('dashboard.placement') }}"
                                    class="mr-3 px-2.5 mb-4 md:px-4 py-2.5 align-middle ring-1 ring-red-700 hover:bg-red-300 rounded-lg flex flex-row dark:bg-red-800 dark:hover:bg-red-900 dark:text-white dark:ring-gray-500">
                                    <svg class="dark:fill-white" xmlns="http://www.w3.org/2000/svg" width="25"
                                        height="25" viewBox="0 0 1024 1024" fill="#000000" class="icon" version="1.1">
                                        <path
                                            d="M669.6 849.6c8.8 8 22.4 7.2 30.4-1.6s7.2-22.4-1.6-30.4l-309.6-280c-8-7.2-8-17.6 0-24.8l309.6-270.4c8.8-8 9.6-21.6 2.4-30.4-8-8.8-21.6-9.6-30.4-2.4L360.8 480.8c-27.2 24-28 64-0.8 88.8l309.6 280z"
                                            fill="" />
                                    </svg>
                                    Kembali
                                </a>
                                <h2 class="mt-2 text-lg font-medium text-gray-900 dark:text-white">
                                    {{ __('Edit Data Penempatan') }}
                                </h2>

                            </header>
                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-300">
                                {{ __('Silahkan sesuaikan data dibawah ini dengan data yang benar.') }}
                            </p>

                            <div class="grid gap-4 mb-4 sm:gap-6 sm:mb-5">
                                <div class="w-full">
                                    <label for="kode_penempatan"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode
                                        Penempatan</label>
                                    <input type="text" name="kode_penempatan" id="kode_penempatan"
                                        class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                        placeholder="Kode Penempatan" required=""
                                        value="{{ $placement->kode_penempatan }}">
                                </div>
                                <div class="w-full">
                                    <label for="penempatan"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                        Penempatan</label>
                                    <input type="text" name="penempatan" id="penempatan"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                        placeholder="Penempatan" required=""
                                        value="{{ old('penempatan', $placement->penempatan ?? '') }}">
                                </div>

                                <div class="w-full">
                                    <label for="restrict_app"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pembatasan
                                        Akses</label>
                                    <select id="restrict_app" name="restrict_app"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                                        <option value="" selected>Pilih</option>
                                        <option value="y" @if ($placement->restrict_app == 'y') selected @endif> Ya
                                        </option>
                                        <option value="t" @if ($placement->restrict_app == 't') selected @endif> Tidak
                                        </option>
                                    </select>
                                </div>

                                <div class="w-full">
                                    <label for="alamat"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                                    <textarea id="alamat" name="alamat" rows="4"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                        placeholder="Masukkan alamat lengkap penempatan" required>{{ old('alamat', $placement->alamat) }}</textarea>
                                </div>

                                <div class="w-full mb-4">
                                    <label for="radius"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Radius
                                        (Meter)</label>
                                    <div class="flex mb-4">
                                        <div class="relative w-full">
                                            <input type="number" name="radius" id="radius"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                                placeholder="Enter amount"
                                                value="{{ old('radius', $placement->radius ?? 0) }}" required />
                                        </div>
                                    </div>
                                    <div class="relative">
                                        <input id="radius-input" type="range"
                                            value="{{ old('radius', $placement->radius ?? 35) }}" min="10"
                                            max="150"
                                            class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-white">
                                        <span
                                            class="absolute text-sm text-gray-500 dark:text-gray-400 start-0 -bottom-6">Min
                                            10M</span>
                                        <span
                                            class="absolute text-sm text-gray-500 -translate-x-1/2 dark:text-gray-400 start-1/3 rtl:translate-x-1/2 -bottom-6">55M</span>
                                        <span
                                            class="absolute text-sm text-gray-500 -translate-x-1/2 dark:text-gray-400 start-2/3 rtl:translate-x-1/2 -bottom-6">105M</span>
                                        <span class="absolute text-sm text-gray-500 dark:text-gray-400 end-0 -bottom-6">Max
                                            150M</span>
                                    </div>
                                </div>

                                <div class="grid gap-6 mb-6 md:grid-cols-2">
                                    <div>
                                        <label for="longitude"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Longitude</label>
                                        <input type="text" name="longitude" id="longitude"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                            value="{{ old('radius', $placement->longitude) }}" required />
                                    </div>
                                    <div>
                                        <label for="latitude"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Latitude</label>
                                        <input type="text" name="latitude" id="latitude"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                            value="{{ old('radius', default: $placement->latitude) }}" required />
                                    </div>
                                </div>

                            </div>
                            <div class="flex items-center">
                                <button type="submit"
                                    class="ring-1 ring-blue-700 text-gray-900 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 focus:text-white hover:text-white font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-800 dark:text-white dark:hover:bg-blue-900 dark:ring-gray-500">
                                    Submit
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </button>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="w-full space-y-6 xl:col-span-2">
                    <div
                        class="p-4 shadow-sm sm:p-6 bg-gray-50 rounded-xl ring-1 ring-gray-200 dark:bg-gray-800 dark:ring-gray-500">
                        <div class="max-w-xl">
                            <header class="flex flex-row">
                                <h2 class="mt-2 text-lg font-medium text-gray-900 dark:text-white">
                                    {{ __('Tentukan titik lokasi') }}
                                </h2>

                            </header>
                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-300">
                                {{ __('Silahkan sesuaikan data dibawah ini dengan data yang benar.') }}
                            </p>

                            <div id="map" style="height: 500px;" class="my-4 rounded-lg"></div>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>


    <script>
        // Get the elements
        var rangeInput = document.getElementById('radius-input');
        var currencyInput = document.getElementById('radius');

        // Function to update the currency input
        function updateCurrencyInput() {
            currencyInput.value = rangeInput.value;
        }

        // Add event listener to the range input
        rangeInput.addEventListener('input', updateCurrencyInput);

        document.addEventListener('DOMContentLoaded', function() {
            // Inisialisasi peta pada posisi awal
            var lng = "{{ $placement->longitude }}";
            var lat = "{{ $placement->latitude }}"
            var map = L.map('map').setView([lat, lng],
                17); // Jakarta

            // Tambahkan tile layer dari OpenStreetMap
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            var customIcon = L.icon({
                iconUrl: "{{ asset('assets/img/marker.png') }}", // Ganti dengan path ke ikon Anda
                iconSize: [25, 41], // Ukuran ikon
                iconAnchor: [12, 41], // Titik untuk mengaitkan ikon ke koordinat
                shadowUrl: "{{ asset('assets/img/marker-shadow.png') }}", // Ganti dengan path ke bayangan Anda
                shadowSize: [41, 41] // Ukuran bayangan
            });

            // Tambahkan marker yang bisa dipindahkan (draggable)
            var marker = L.marker([lat, lng], {
                icon: customIcon,
                draggable: true
            }).addTo(map)

            // Dapatkan nilai radius awal dari input
            var radiusValue = document.getElementById('radius').value;

            // Tambahkan lingkaran dengan radius awal
            var circle = L.circle(marker.getLatLng(), {
                radius: radiusValue, // Radius dalam meter
                color: 'blue',
                fillOpacity: 0.2
            }).addTo(map);

            // Fungsi untuk memperbarui radius lingkaran
            function updateCircleRadius() {
                var newRadius = document.getElementById('radius').value;
                circle.setRadius(newRadius); // Perbarui radius lingkaran
            }

            // Event listener untuk input manual radius
            document.getElementById('radius').addEventListener('input', function() {
                document.getElementById('radius-input').value = this
                    .value; // Sinkronkan dengan slider range
                updateCircleRadius();
            });

            // Event listener untuk slider range radius
            document.getElementById('radius-input').addEventListener('input', function() {
                document.getElementById('radius').value = this.value; // Sinkronkan dengan input manual
                updateCircleRadius();
            });

            // Event listener untuk mendeteksi perubahan posisi marker
            marker.on('dragend', function(event) {
                var position = marker.getLatLng();
                circle.setLatLng(position); // Pindahkan lingkaran mengikuti marker

                // Update input longitude dan latitude
                document.getElementById('longitude').value = position.lng;
                document.getElementById('latitude').value = position.lat;

                // Perbarui popup dengan posisi baru
                marker.setLatLng(position, {
                    draggable: true
                });
            });
        });
    </script>
@endsection

@extends('dashboard.layoutsDash.app')
@section('content')

<div class="w-full">
    <form action="{{ route('placement.store') }}" class="mt-4" method="POST">
        @csrf
        <div class="grid lg:grid-cols-2 xl:grid-cols-5 gap-4">
            <div class="w-full space-y-6 xl:col-span-2">
                <div class="p-4 sm:p-6 bg-gray-50 shadow-sm rounded-xl ring-1 ring-gray-200 dark:bg-gray-800 dark:ring-gray-500">
                    <div class="max-w-xl">
                        <header class="flex flex-row">
                            <a href="{{ route('dashboard.placement') }}" class="mr-3 px-2.5 mb-4 md:px-4 py-2.5 align-middle ring-1 ring-red-700 hover:bg-red-300 rounded-lg flex flex-row dark:bg-red-800 dark:hover:bg-red-900 dark:text-white dark:ring-gray-500">
                                <svg class="dark:fill-white" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 1024 1024" fill="#000000" class="icon" version="1.1">
                                    <path d="M669.6 849.6c8.8 8 22.4 7.2 30.4-1.6s7.2-22.4-1.6-30.4l-309.6-280c-8-7.2-8-17.6 0-24.8l309.6-270.4c8.8-8 9.6-21.6 2.4-30.4-8-8.8-21.6-9.6-30.4-2.4L360.8 480.8c-27.2 24-28 64-0.8 88.8l309.6 280z" fill="" />
                                </svg>
                                Kembali
                            </a>
                            <h2 class="text-lg font-medium text-gray-900 mt-2 dark:text-white">
                                {{ __('Tambah Data Penempatan') }}
                            </h2>

                        </header>
                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-300">
                            {{ __('Silahkan sesuaikan data dibawah ini dengan data yang benar.') }}
                        </p>

                        <div class="grid gap-4 mb-4 sm:gap-6 sm:mb-5">
                            <div class="w-full">
                                <label for="kode_penempatan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode Penempatan</label>
                                <input type="text" name="kode_penempatan" id="kode_penempatan" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Kode Penempatan" required="">
                            </div>
                            <div class="w-full">
                                <label for="penempatan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Penempatan</label>
                                <input type="text" name="penempatan" id="penempatan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Penempatan" required="">
                            </div>

                            <div class="w-full">
                                <label for="restrict_app" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pembatasan Akses</label>
                                <select id="restrict_app" name="restrict_app" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                                    <option selected>Pilih</option>
                                    <option value="y"> Ya </option>
                                    <option value="t"> Tidak </option>

                                </select>
                            </div>

                            <div class="w-full">
                                <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                                <textarea
                                    id="alamat"
                                    name="alamat"
                                    rows="4"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                    placeholder="Masukkan alamat lengkap penempatan"
                                    required></textarea>
                            </div>

                            <div class="w-full mb-4">
                                <label for="radius" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Radius (Meter)</label>
                                <div class="flex mb-4">
                                    <div class="relative w-full">
                                        <input type="number" name="radius" id="radius" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Enter amount" value="100" required />
                                    </div>
                                </div>
                                <div class="relative">
                                    <input id="radius-input" type="range" value="100" min="10" max="150" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-white">
                                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute start-0 -bottom-6">Min 10M</span>
                                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute start-1/3 -translate-x-1/2 rtl:translate-x-1/2 -bottom-6">55M</span>
                                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute start-2/3 -translate-x-1/2 rtl:translate-x-1/2 -bottom-6">105M</span>
                                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute end-0 -bottom-6">Max 150M</span>
                                </div>
                            </div>

                            <div class="grid gap-6 mb-6 md:grid-cols-2">
                                <div>
                                    <label for="longitude" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Longitude</label>
                                    <input type="text" name="longitude" id="longitude" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required />
                                </div>
                                <div>
                                    <label for="latitude" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Latitude</label>
                                    <input type="text" name="latitude" id="latitude" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required />
                                </div>
                            </div>

                        </div>
                        <div class="flex items-center">
                            <button type="submit" class="ring-1 ring-blue-700 text-gray-900 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 focus:text-white hover:text-white font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-800 dark:text-white dark:hover:bg-blue-900 dark:ring-gray-500">
                                Submit
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </button>
                        </div>

                    </div>
                </div>
            </div>

            <div class="w-full space-y-6 xl:col-span-2">
                <div class="p-4 sm:p-6 bg-gray-50 shadow-sm rounded-xl ring-1 ring-gray-200 dark:bg-gray-800 dark:ring-gray-500">
                    <div class="max-w-xl">
                        <header class="flex flex-row">
                            <h2 class="text-lg font-medium text-gray-900 mt-2 dark:text-white">
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
        // Fungsi untuk inisialisasi peta dengan koordinat yang diberikan
        function initializeMap(lat, lng) {
            var map = L.map('map').setView([lat, lng], 17); // Inisialisasi peta dengan koordinat yang didapat
            document.getElementById('longitude').value = lng;
            document.getElementById('latitude').value = lat;

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
            }).addTo(map);

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
                document.getElementById('radius-input').value = this.value; // Sinkronkan dengan slider range
                updateCircleRadius();
            });

            // Event listener untuk slider range radius
            document.getElementById('radius-input').addEventListener('input', function() {
                document.getElementById('radius').value = this.value; // Sinkronkan dengan input manual
                updateCircleRadius();
            });

            // Variabel untuk menyimpan lokasi sebelumnya
            let previousPosition = {
                lat: lat,
                lng: lng
            };

            // Fungsi untuk memeriksa jarak dan mengupdate lokasi
            function checkLocation() {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var currentLat = position.coords.latitude;
                    var currentLng = position.coords.longitude;

                    var currentPosition = {
                        lat: currentLat,
                        lng: currentLng
                    };
                    var distance = getDistance(previousPosition, currentPosition);

                    // Jika jarak lebih dari 100 meter, beri tahu pengguna
                    if (distance > 50) {
                        alert("Fake GPS terdeteksi! Perubahan lokasi melebihi 100 meter.");
                    }

                    // Update posisi marker dan input longitude dan latitude
                    marker.setLatLng(currentPosition);
                    document.getElementById('longitude').value = currentLng;
                    document.getElementById('latitude').value = currentLat;

                    // Update posisi sebelumnya
                    previousPosition = currentPosition;

                    // Memindahkan lingkaran ke lokasi baru
                    circle.setLatLng(currentPosition);
                });
            }

            // Fungsi untuk menghitung jarak antara dua koordinat
            function getDistance(pos1, pos2) {
                var R = 6371000; // radius bumi dalam meter
                var dLat = (pos2.lat - pos1.lat) * Math.PI / 180;
                var dLng = (pos2.lng - pos1.lng) * Math.PI / 180;

                var a = Math.sin(dLat / 2) * Math.sin(dLat / 2) +
                    Math.cos(pos1.lat * Math.PI / 180) * Math.cos(pos2.lat * Math.PI / 180) *
                    Math.sin(dLng / 2) * Math.sin(dLng / 2);
                var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
                var distance = R * c; // dalam meter

                return distance;
            }

            // Update lokasi setiap 10 detik
            setInterval(checkLocation, 500);

            // Event listener untuk mendeteksi perubahan posisi marker
            marker.on('dragend', function(event) {
                var position = marker.getLatLng();
                marker.setLatLng(position, {
                    draggable: true
                });

                // Update input longitude dan latitude (jika diperlukan)
                document.getElementById('longitude').value = position.lng;
                document.getElementById('latitude').value = position.lat;
            });
        }

        // Gunakan Geolocation API untuk mendapatkan lokasi pengguna
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(
                function(position) {
                    var lat = position.coords.latitude;
                    var lng = position.coords.longitude;

                    // Panggil fungsi untuk inisialisasi peta dengan lokasi pengguna
                    initializeMap(lat, lng);
                },
                function(error) {
                    console.error("Error mendapatkan lokasi:", error);
                    // Jika gagal, gunakan lokasi default
                    initializeMap(3.594361307230664, 98.67298838708204);
                }
            );
        } else {
            // Jika browser tidak mendukung Geolocation, gunakan lokasi default
            initializeMap(3.594361307230664, 98.67298838708204);
        }
    });
</script>

@endsection
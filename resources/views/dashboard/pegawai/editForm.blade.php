<div class="grid grid-cols-1 xl:grid-cols-3 gap-4">
    <div class="w-full space-y-6">
        <div class="p-4 sm:p-6 bg-gray-50 shadow-sm rounded-xl ring-1 ring-gray-200">
            <div class="w-full">
                <header class="flex flex-row">
                    <a href="{{ route('dashboard.pegawai') }}" class="mr-3 px-2.5 mb-4 md:px-4 py-2.5 align-middle ring-1 ring-red-700 hover:bg-red-300 rounded-lg flex flex-row">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 1024 1024" fill="#000000" class="icon" version="1.1">
                            <path d="M669.6 849.6c8.8 8 22.4 7.2 30.4-1.6s7.2-22.4-1.6-30.4l-309.6-280c-8-7.2-8-17.6 0-24.8l309.6-270.4c8.8-8 9.6-21.6 2.4-30.4-8-8.8-21.6-9.6-30.4-2.4L360.8 480.8c-27.2 24-28 64-0.8 88.8l309.6 280z" fill="" />
                        </svg>
                        Kembali
                    </a>
                    <h2 class="text-lg font-medium text-gray-900 mt-2">
                        {{ __('Edit Data Pegawai') }}
                    </h2>

                </header>
                <p class="mt-1 text-sm text-gray-600">
                    {{ __('Silahkan sesuaikan data dibawah ini dengan data yang benar.') }}
                </p>

                <form action="{{ route('pegawai.update', $pegawai) }}" class="mt-4" method="POST">
                    @csrf
                    @method('put')
                    <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
                        <div class="sm:col-span-2">
                            <label for="kode_pegawai" class="block mb-2 text-sm font-medium text-gray-900">Kode Pegawai</label>
                            <input type="text" name="kode_pegawai" id="kode_pegawai" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 cursor-not-allowed bg-gray-200" value="{{ $pegawai->kode_pegawai }}" placeholder="Nama lengkap" required="" disabled>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="nik_pegawai" class="block mb-2 text-sm font-medium text-gray-900">NIK</label>
                            <input type="text" name="nik_pegawai" id="nik_pegawai" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="NIK" required="" pattern="[0-9]{1,17}" value="{{ old('nik_pegawai', $pegawai->nik_pegawai) }}">
                        </div>
                        <div class="w-full">
                            <label for="nama_lengkap" class="block mb-2 text-sm font-medium text-gray-900">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" id="nama_lengkap" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" value="{{ old('full_name', $pegawai->full_name ?? '') }}" placeholder="Nama lengkap" required="">
                        </div>
                        <div class="w-full">
                            <label for="nick_name" class="block mb-2 text-sm font-medium text-gray-900">Nama Panggilan</label>
                            <input type="text" name="nick_name" id="nick_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" value="{{ old('nick_name', $pegawai->nick_name ?? '') }}" placeholder="Nama panggilan" required="">
                        </div>
                        <div class="sm:col-span-2">
                            <label for="jabatan" class="block mb-2 text-sm font-medium text-gray-900">Posisi</label>
                            <select id="jabatan" name="jabatan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                                <option selected>Pilih</option>
                                @foreach ($jabatan as $jb)
                                <option value="{{ $jb->id }}" @if ($pegawai->jabatan == $jb->id) selected @endif>
                                    {{ $jb->nama_jabatan }}
                                </option>
                                @endforeach

                            </select>
                        </div>
                        <div class="w-full">
                            <label for="no_telp" class="block mb-2 text-sm font-medium text-gray-900">Nomor Telepon</label>
                            <input
                                type="tel"
                                id="no_telp"
                                name="no_telp"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                value="{{ old('no_telp', $pegawai->no_telp ?? '') }}"
                                placeholder="Masukkan nomor telepon"
                                required
                                pattern="[0-9]{10,13}"
                                title="Nomor telepon harus terdiri dari 10 hingga 13 digit">
                        </div>

                        <div class="relative max-w-sm">
                            <label for="tgl_lahir" class="block mb-2 text-sm font-medium text-gray-900">Tanggal Lahir</label>
                            <div class="absolute inset-y-0 start-0 top-7 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                </svg>
                            </div>
                            <input name="tgl_lahir" id="tgl_lahir" datepicker datepicker-format="yyyy-mm-dd" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5" placeholder="Select date" value="{{ old('tgl_lahir', $pegawai->tgl_lahir ?? '') }}">
                        </div>

                        <div class="sm:col-span-2">
                            <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900">Alamat</label>
                            <textarea
                                id="alamat"
                                name="alamat"
                                rows="4"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                placeholder="Masukkan alamat lengkap"
                                required>{{ old('alamat', $pegawai->alamat ?? '') }}</textarea>
                        </div>


                    </div>
                    <div class="flex items-center">
                        <button type="submit" class="ring-1 ring-blue-700 text-gray-900 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 focus:text-white hover:text-white font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center">
                            Update
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="w-full space-y-4 xl:col-span-2">
        <div class="w-full bg-gray-50 p-6 rounded-lg ">
            <header class="flex flex-row">
                <h2 class="text-lg font-medium text-gray-900 mt-2 mb-4">
                    {{ __('Foto yang terdaftar') }}
                </h2>
            </header>

            <div class="grid lg:grid-cols-2 gap-4 mt-4">
                @foreach ($images as $image )
                <div>
                    <img class="h-auto max-w-full rounded-lg blur-sm border-1 border-gray-500 hover:blur-none" src="{{ asset('storage/'.$pegawai->storage. $image) }}" alt="">
                </div>
                @endforeach
            </div>
        </div>

        <div class="w-full bg-gray-50 p-6 rounded-lg ">

            <form id="photoForm" action="{{ route('pegawai.photo') }}" method="POST" enctype="multipart/form-data">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 h-auto">
                    @csrf
                    @php
                    $path = "assets/img/noCamera.png";
                    @endphp
                    <div class="video-container col-span-1 lg:col-span-2 text-center h-auto" data-aos="zoom-in" data-aos-delay="100">
                        <div class="w-full h-auto relative">
                            <video id="video" class="flex w-full h-96 border border-gray-200 p-0 rounded-lg object-cover ring-1 ring-gray-50" autoplay style="background: url('{{asset($path) }}') center center / cover no-repeat;" data-aos="zoom-in" data-aos-delay="100">
                            </video>

                            <canvas id="overlay" class="w-full h-auto absolute top-0 left-0 p-0 rounded-lg object-cover"></canvas>
                        </div>

                        <div class="w-full h-auto relative gap-4 mt-4">
                            <input type="hidden" name="kode_pegawai" id="kode_pegawai" value="{{ $pegawai->kode_pegawai }}">
                            <div class="w-full lg:px-0" data-aos="fade-right" data-aos-delay="150">
                                <button type="button" id="capturePhoto" class="ring-1 ring-blue-700 text-gray-900 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 focus:text-gray-900 hover:text-white font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center items-center">Start Kamera</button>
                                <input type="hidden" id="photo1Data" name="photo1">
                                <input type="hidden" id="photo2Data" name="photo2">
                            </div>
                        </div>

                    </div>

                    <div class="col-span-1 lg:col-span-1 lg:p-0" data-aos="zoom-in" data-aos-delay="100">
                        <div class="grid gap-4">
                            <div class="relative flex flex-col gap-4 lg:gap-0 rounded-lg md:flex-row lg:flex-col w-full" data-aos="fade-right" data-aos-delay="100">
                                <div class="w-full h-auto rounded-lg lg:w-full md:rounded-lg">
                                    <img id="canvLogo" class="object-cover w-full h-[184px] rounded-lg ring-1 ring-gray-200" src="{{asset('assets/img/noImage.png')}}" alt="">
                                    <canvas id="canvRegist" class="object-cover w-full h-full rounded-lg absolute top-0 left-0"></canvas>
                                </div>
                            </div>
                            <div class="relative flex flex-col gap-4 lg:gap-0 rounded-lg md:flex-row lg:flex-col w-full" data-aos="fade-left" data-aos-delay="100">
                                <div class="w-full h-auto rounded-lg lg:w-full md:rounded-lg">
                                    <img id="canvLogo" class="object-cover w-full h-[184px] rounded-lg ring-1 ring-gray-200" src="{{asset('assets/img/noImage.png')}}" alt="">
                                    <canvas id="canvRegistt" class="object-cover w-full h-full rounded-lg absolute top-0 left-0"></canvas>
                                </div>
                            </div>

                            <div class="w-full lg:px-0" data-aos="fade-left" data-aos-delay="150">
                                <button type="submit" class="ring-1 ring-green-700 text-gray-900 hover:bg-green-800 focus:ring-4 focus:ring-green-300 focus:text-white hover:text-white font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center items-center">Upload Photos</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

<script>
    const video = document.getElementById('video');
    const canvas = document.getElementById('canvRegist');
    const canvass = document.getElementById('canvRegistt');
    const photo1Data = document.getElementById('photo1Data');
    const photo2Data = document.getElementById('photo2Data');
    const captureButton = document.getElementById('capturePhoto');
    const overlay = document.getElementById('overlay');

    const originalConsoleLog = console.log;

    let stream = null;

    function startCamera() {
        navigator.mediaDevices.getUserMedia({
                video: true
            })
            .then(userStream => {
                stream = userStream;
                video.srcObject = stream;
                video.play();
                console.log("Camera started");
            })
            .catch(err => console.error('Error accessing camera: ', err));
    }

    function capturePhoto(targetCanvas, targetWidth, targetHeight) {
        const context = targetCanvas.getContext('2d');
        targetCanvas.width = targetWidth;
        targetCanvas.height = targetHeight;
        context.drawImage(video, 0, 0, targetWidth, targetHeight);
        return targetCanvas.toDataURL('image/jpeg');
    }

    function displayTimer(seconds, callback) {
        let remainingTime = seconds;
        overlay.textContent = remainingTime; // Menampilkan waktu awal
        console.log(`Foto diambil dalam: ${remainingTime} detik`);

        // Menampilkan timer di consoleOutput

        const timerInterval = setInterval(() => {
            remainingTime--;
            overlay.textContent = remainingTime;
            console.log(`${remainingTime} `);

            // Menampilkan waktu tersisa di consoleOutput
            if (remainingTime <= 0) {
                clearInterval(timerInterval);
                overlay.textContent = ''; // Hapus teks overlay
                console.log('Captured.');
                if (callback) callback();
            }
        }, 1000);
    }

    function captureTwoPhotos() {
        // Menyusun kamera jika belum dimulai
        if (!stream) {
            startCamera();
            setTimeout(() => {
                displayTimer(3, () => {
                    const photo1 = capturePhoto(canvas, 1280, 960);
                    photo1Data.value = photo1;

                    // Menunggu 3 detik sebelum menangkap foto kedua
                    setTimeout(() => {
                        displayTimer(3, () => {
                            const photo2 = capturePhoto(canvass, 1280, 960);
                            photo2Data.value = photo2;
                        });
                    }, 3000); // Jeda sebelum menangkap foto kedua
                });
            }, 3000); // Jeda sebelum menangkap foto pertama

        } else {
            // Jika kamera sudah dimulai, langsung menangkap foto
            displayTimer(3, () => {
                const photo1 = capturePhoto(canvas, 1280, 960);
                photo1Data.value = photo1;

                setTimeout(() => {
                    displayTimer(3, () => {
                        const photo2 = capturePhoto(canvass, 1280, 960);
                        photo2Data.value = photo2;
                    });
                }, 3000); // Jeda sebelum menangkap foto kedua
            });
        }
    }

    // Event listener untuk tombol capture
    captureButton.addEventListener('click', () => {
        captureTwoPhotos();
    });

    // Optional: Set up form submission untuk memastikan foto telah diambil
    document.getElementById('photoForm').addEventListener('submit', (event) => {
        if (!photo1Data.value || !photo2Data.value) {
            event.preventDefault();
            alert('Please capture both photos before submitting.');
        }
    });
</script>
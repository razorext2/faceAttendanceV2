@extends('layouts.app')
@section('content')

@if(session('success'))
<div id="toast-bottom-right" class="fixed z-50 flex items-center w-full max-w-xs divide-x rounded-lg right-5 bottom-5 opacity-0 transform scale-90 transition duration-300" role="alert">
    <div id="toast-success" class="ring-1 ring-black toast-bottom-right flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow" role="alert">
        <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
            </svg>
            <span class="sr-only">Check icon</span>
        </div>
        <div class="ms-3 text-sm font-normal text-black">{{ session('success') }}</div>
        <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#toast-success" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
        </button>
    </div>
</div>
@endif

<div class="relative flex min-h-screen flex-col justify-center overflow-hidden py-32" id="Home" data-aos="fade-down">
    <img src="{{ asset('assets/img/hero-bg-light.webp')}}" alt="Background Image" class="absolute inset-0 object-cover w-full h-full -z-10 opacity-40" />
    <img src="{{ asset('assets/img/grid.jpg')}}" alt="Background Image" class="absolute inset-0 object-cover w-full h-full -z-10 opacity-40 mix-blend-overlay" />

    <div class="relative z-10 grid grid-cols-1 mb-10 px-6">
        <div class="text-left md:text-center flex flex-col items-center justify-center h-full py-5 text-black">
            <h1 class="text-4xl font-bold mb-4">Verifikasi Wajah Pegawai</h1>
            <p class="text-lg">
                Masukkan kode pegawai anda, kemudian start kamera <br />
                Proses pengambilan gambar akan dilakukan sebanyak <span class="font-bold"> DUA </span> kali <br />
            </p>
        </div>
    </div>

    <div id="Scan" class="relative bg-white/70 p-0 ring-1 ring-black lg:mx-auto lg:rounded-lg lg:p-4" data-aos="zoom-in-up" data-aos-delay="50">
        <form id="photoForm" action="{{ route('photo.registProcess') }}" method="POST" enctype="multipart/form-data">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 h-auto lg:w-[900px]">
                @csrf
                <div class="video-container col-span-1 lg:col-span-2 text-center h-auto" data-aos="zoom-in" data-aos-delay="100">
                    <video id="video" class="flex w-full h-auto lg:w-[640px] lg:h-[480px] border border-gray-200 p-0 lg:rounded-lg object-cover ring-1 ring-black" autoplay style="background: url('assets/img/noCamera.png') center center / cover no-repeat;" data-aos="zoom-in" data-aos-delay="100">
                    </video>

                    <canvas id="overlay" class="flex w-full h-auto absolute top-0 left-0 p-0 lg:rounded-lg object-cover"></canvas>
                    <div class="inline-flex mt-3 w-full px-3 lg:px-0" data-aos="fade-left" data-aos-delay="150">
                        <div class="relative w-full">
                            <input type="text" id="floating_outlined" id="kodePegawai" name="kode_pegawai" class="block border-black px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                            <label for="floating_outlined" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Kode Pegawai</label>
                        </div>
                    </div>
                    <div class="inline-flex mt-3 w-full px-3 lg:px-0 md:px-3" data-aos="fade-right" data-aos-delay="150">
                        <button type="button" id="capturePhoto" class="bg-blue-400 p-2 w-full rounded-lg font-bold text-white ring-1 ring-black hover:bg-blue-700">Start Kamera</button>
                        <input type="hidden" id="photo1Data" name="photo1">
                        <input type="hidden" id="photo2Data" name="photo2">
                    </div>

                    <div class="inline-flex mt-3 w-full px-3 lg:px-0" data-aos="fade-left" data-aos-delay="150">
                        <button type="submit" class="bg-green-400 p-2 w-full rounded-lg font-bold text-white ring-1 ring-black hover:bg-green-700">Upload Photos</button>
                    </div>

                    <div class="w-full h-auto mt-3 rounded-lg px-3 lg:px-0" data-aos="fade-right" data-aos-delay="150">
                        <div class="p-3 text-left ring-1 min-h-10 h-auto ring-black rounded-lg">
                            <p class="text-sm font-bold text-black">Log</p>
                            <hr class="bg-black my-2">
                            <pre id="consoleOutput" class="max-h-32 overflow-y-auto scroll-smooth"></pre>
                        </div>
                    </div>
                </div>

                <div class="col-span-1 lg:col-span-1 px-3 pb-3 md:px-3 md:pb-3 lg:p-0" data-aos="zoom-in" data-aos-delay="100">
                    <div class="grid grid-cols-1 gap-4">
                        <div class="p-2 ring-1 ring-black rounded-lg text-center" data-aos="fade-left" data-aos-delay="100">
                            <p class="text-xl font-bold text-black">INFORMASI</p>
                        </div>
                        <div class="relative flex flex-col gap-4 lg:gap-0 rounded-lg md:flex-row lg:flex-col w-full" data-aos="fade-right" data-aos-delay="100">
                            <div class="lg:object-fill w-full h-full rounded-lg lg:w-full md:rounded-lg">
                                <img id="canvLogo" class="lg:object-fill w-full h-full rounded-lg ring-1 ring-black" src="{{asset('assets/img/noImage.png')}}" alt="">
                                <canvas id="canvRegist" class="object-cover w-full h-full rounded-lg ring-1 ring-black absolute top-0 left-0"></canvas>
                            </div>
                        </div>
                        <div class="relative flex flex-col gap-4 lg:gap-0 rounded-lg md:flex-row lg:flex-col w-full" data-aos="fade-left" data-aos-delay="100">
                            <div class="lg:object-fill w-full h-full rounded-lg lg:w-full md:rounded-lg">
                                <img id="canvLogo" class="lg:object-fill w-full h-full rounded-lg ring-1 ring-black" src="{{asset('assets/img/noImage.png')}}" alt="">
                                <canvas id="canvRegistt" class="object-cover w-full h-full rounded-lg ring-1 ring-black absolute top-0 left-0"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
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

    function customConsoleLog(message) {
        const consoleOutput = document.getElementById("consoleOutput");
        if (consoleOutput) {
            consoleOutput.textContent += message + "\n";
            consoleOutput.scrollTop = consoleOutput.scrollHeight; // Auto-scroll ke bagian bawah
        }
        originalConsoleLog(message); // Gunakan referensi asli
    }

    console.log = customConsoleLog;

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

@endsection
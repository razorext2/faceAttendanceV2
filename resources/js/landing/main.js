const currentUrl = window.location.pathname;
let stream = null;

if (currentUrl === "/photo-regist") {
  window.onload = function () {
    document.getElementById('floating_outlined')
      .focus(); // Fokus pada input ketika halaman pertama kali di-load
  };

  const video = document.getElementById('video');
  const canvas = document.getElementById('canvRegist');
  const canvass = document.getElementById('canvRegistt');
  const photo1Data = document.getElementById('photo1Data');
  const photo2Data = document.getElementById('photo2Data');
  const captureButton = document.getElementById('capturePhoto');
  const overlay = document.getElementById('overlay');

  const originalConsoleLog = console.log;

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
          const photo1 = capturePhoto(canvas, video.videoWidth, video.videoHeight);
          photo1Data.value = photo1;

          // Menunggu 3 detik sebelum menangkap foto kedua
          setTimeout(() => {
            displayTimer(3, () => {
              const photo2 = capturePhoto(canvass, video.videoWidth,
                video.videoHeight);
              photo2Data.value = photo2;
            });
          }, 3000); // Jeda sebelum menangkap foto kedua
        });
      }, 3000); // Jeda sebelum menangkap foto pertama

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

      Swal.fire({
        title: "Foto masih kosong!",
        text: "Silahkan capture foto wajah anda terlebih dahulu.",
        icon: "error",
        timer: 2000,
      });

      captureTwoPhotos();


    }
  });
}
export function backCameraStream() {
  const captureButton = document.getElementById("capture-button");
  const closeModalButton = document.getElementById("close-button")
  const captureImageButton = document.getElementById("capture-image");
  const videoElement = document.getElementById("video");
  const capturedImagesContainer = document.getElementById("captured-images");
  const modal = new Modal(document.getElementById('camera-modal'), {
    closable: true,
    backdrop: 'dynamic'
  }, {
    id: 'camera-modal',
    override: true
  });
  let stream;

  // Fungsi untuk membuka kamera dan menampilkan stream
  async function startCamera() {
    try {
      stream = await navigator.mediaDevices.getUserMedia({
        video: {
          facingMode: "environment"
        } // Menggunakan kamera belakang
      });
      videoElement.srcObject = stream;
      // modal.show();
    } catch (err) {
      console.error("Gagal mengakses kamera:", err);
    }
  }

  // Menangani tombol "Ambil Gambar"
  captureButton.addEventListener("click", startCamera);

  // Menangani tombol capture (mengambil snapshot)
  captureImageButton.addEventListener("click", function () {
    const canvas = document.createElement("canvas");
    canvas.width = videoElement.videoWidth;
    canvas.height = videoElement.videoHeight;
    canvas.getContext("2d").drawImage(videoElement, 0, 0, canvas.width, canvas.height);
    const imgData = canvas.toDataURL("image/png");

    // Menambahkan thumbnail ke container
    const imgElement = document.createElement("img");
    imgElement.src = imgData;
    imgElement.classList.add("w-24", "h-24", "object-cover", "rounded-lg", "border");

    // Menambahkan gambar ke container
    capturedImagesContainer.appendChild(imgElement);

    // Stop streaming setelah capture
    stream.getTracks().forEach(track => track.stop());

    setTimeout(() => {
      modal.hide();
    }, 1000);

  });

  closeModalButton.addEventListener("click", function () {
    stream.getTracks().forEach(track => track.stop());
    modal.hide();
  });
}
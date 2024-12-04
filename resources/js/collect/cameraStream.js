export let capturedImages = [];

export function backCameraStream() {
  const captureButton = document.getElementById("capture-button");
  const closeModalButton = document.getElementById("close-button");
  const captureImageButton = document.getElementById("capture-image");
  const cameraModal = document.getElementById('camera-modal');
  const videoElement = document.getElementById("video");
  const capturedImagesContainer = document.getElementById("captured-images");

  const modal = new Modal(cameraModal, { closable: true, backdrop: 'dynamic' });
  let stream;

  async function startCamera() {
    try {
      stream = await navigator.mediaDevices.getUserMedia({
        video: { facingMode: "environment" }
      });
      videoElement.srcObject = stream;
      modal.show();
    } catch (err) {
      console.error("Gagal mengakses kamera:", err);
    }
  }

  captureButton.addEventListener("click", startCamera);

  captureImageButton.addEventListener("click", function () {
    const canvas = document.createElement("canvas");
    canvas.width = videoElement.videoWidth;
    canvas.height = videoElement.videoHeight;
    canvas.getContext("2d").drawImage(videoElement, 0, 0, canvas.width, canvas.height);
    const imgData = canvas.toDataURL("image/png");

    capturedImages.push(imgData);
    const imageWrapper = document.createElement("div");
    imageWrapper.classList.add("relative", "me-2", "flex-none", "items-center", "gap-4", "p-2");

    const imgElement = document.createElement("img");
    imgElement.src = imgData;
    imgElement.classList.add("w-36", "h-36", "object-cover", "rounded-lg", "border");

    const removeButton = document.createElement("button");
    removeButton.classList.add("absolute", "top-0", "right-0", "bg-red-500", "text-white", "rounded-full", "w-6", "h-6", "flex", "items-center", "justify-center", "hover:bg-red-700");
    removeButton.innerHTML = "×";
    removeButton.title = "Hapus gambar";

    removeButton.addEventListener("click", function () {
      capturedImagesContainer.removeChild(imageWrapper);
      capturedImages = capturedImages.filter(image => image !== imgData);
    });

    imageWrapper.appendChild(imgElement);
    imageWrapper.appendChild(removeButton);
    capturedImagesContainer.appendChild(imageWrapper);
    capturedImagesContainer.classList.add("mb-2");

    stream.getTracks().forEach(track => track.stop());
    modal.hide();
  });

  closeModalButton.addEventListener("click", function () {
    stream.getTracks().forEach(track => track.stop());
    modal.hide();
  });
}

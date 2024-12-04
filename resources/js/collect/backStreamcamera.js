let capturedImages = []; // Define it globally so that it's accessible across functions

function quillText() {
  const BlockEmbed = Quill.import('blots/block/embed');

  class CustomEmbed extends BlockEmbed {
    static create(value) {
      let node = super.create();
      node.setAttribute('data-value', value);
      return node;
    }

    static format(node) {
      return node.getAttribute('data-value');
    }
  }
  // Register the custom blot
  CustomEmbed.blotName = 'customEmbed'; // The name you want to use
  CustomEmbed.tagName = 'div'; // HTML tag
  Quill.register(CustomEmbed);

  // Initialize Quill
  const quill = new Quill('#editor', {
    theme: 'snow',
    placeholder: 'Tulis keterangan...',
    modules: {
      toolbar: [
        [{
          'header': [1, 2, false]
        }],
        ['bold', 'italic', 'underline'],
        ['code-block'],
        [{
          'list': 'ordered'
        }, {
          'list': 'bullet'
        }]
      ],
    }
  });

  document.querySelector('.ql-toolbar').classList.add('dark:bg-white', 'rounded-t-lg');
  document.querySelector('.ql-picker').classList.add('dark:bg-white');
  document.getElementById('editor').classList.add('!h-96', 'rounded-b-lg');
  document.getElementById("keterangan").classList.add("mt-2");

  // kirim data di quill editor ke input keterangan
  $('#store').on('click', function () {
    const content = quill.root.innerHTML;
    $('#keterangan').val(content);
  });
}

function addDataHandler() {
  $('#store').click(function (e) {
    e.preventDefault();

    // define var
    let kode_pegawai = $("#kode_pegawai").val();
    let judul = $("#title").val();
    let ket = $("#keterangan").val();
    let long = $("#longitude").val();
    let lat = $("#latitude").val();
    let location = $("#location").val();
    let token = $("meta[name='csrf-token']").attr("content");

    // Buat objek FormData
    let formData = new FormData();

    // Masukkan data lain ke FormData
    formData.append("kode_pegawai", kode_pegawai);
    formData.append("title", judul);
    formData.append("keterangan", ket);
    formData.append("longitude", long);
    formData.append("latitude", lat);
    formData.append("location", location);
    formData.append("_token", token);

    // Masukkan gambar-gambar ke FormData
    capturedImages.forEach((image, index) => {
      // Mengonversi base64 menjadi Blob
      const blob = dataURItoBlob(image);
      formData.append("images[]", blob, `image${index}.png`);
    });

    // ajax request
    $.ajax({
      url: apiURL, // Sesuaikan dengan URL route Anda
      type: "POST",
      dataType: "json",
      data: formData,
      processData: false,
      contentType: false,
      success: function (response) {
        // tampilkan alert
        window.Swal.fire({
          icon: "success",
          title: "Laporan berhasil ditambahkan!",
          showConfirmButton: false,
          timer: 1000
        });

        // redirect
        setTimeout(() => {
          window.location.href = indexURL;
        }, 1000);
      },
      error: function (xhr, status, error) {
        // error handler
        Swal.fire({
          icon: "error",
          title: "Terjadi kesalahan!",
          text: "Tidak dapat menyimpan data."
        });

        let err = xhr.responseJSON.errors;

        // Menampilkan error untuk field tertentu
        if (err.title) {
          $('#alert-title')
            .removeClass('hidden')
            .addClass('block')
            .html(err.title[0]);
        } else {
          $('#alert-title')
            .removeClass('block')
            .addClass('hidden');
        }

        if (err.keterangan) {
          $('#alert-keterangan')
            .removeClass('hidden')
            .addClass('block')
            .html(err.keterangan[0]);
        } else {
          $('#alert-keterangan')
            .removeClass('block')
            .addClass('hidden');
        }

        if (err.images) {
          $('#alert-images')
            .removeClass('hidden')
            .addClass('block')
            .html(err.images[0]);
        } else {
          $('#alert-images')
            .removeClass('block')
            .addClass('hidden');
        }

        if (err.longitude || err.latitude) {
          $('#alert-coordinate')
            .removeClass('hidden')
            .addClass('block')
            .html(err.longitude[0] || err.latitude[0]);
        } else {
          $('#alert-coordinate')
            .removeClass('block')
            .addClass('hidden');
        }

        if (err.location) {
          $('#alert-location')
            .removeClass('hidden')
            .addClass('block')
            .html(err.location[0]);
        } else {
          $('#alert-location')
            .removeClass('block')
            .addClass('hidden');
        }

      }
    });
  });
}

// Fungsi untuk mengonversi data URL ke Blob
function dataURItoBlob(dataURI) {
  const byteString = atob(dataURI.split(',')[1]);
  const arrayBuffer = new ArrayBuffer(byteString.length);
  const uintArray = new Uint8Array(arrayBuffer);
  for (let i = 0; i < byteString.length; i++) {
    uintArray[i] = byteString.charCodeAt(i);
  }
  return new Blob([uintArray], {
    type: 'image/png'
  });
}

function backCameraStream() {
  const captureButton = document.getElementById("capture-button");
  const closeModalButton = document.getElementById("close-button");
  const captureImageButton = document.getElementById("capture-image");
  const cameraModal = document.getElementById('camera-modal');
  const videoElement = document.getElementById("video");
  const capturedImagesContainer = document.getElementById("captured-images");

  const modal = new Modal(cameraModal, {
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
      modal.show();
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

    // Simpan gambar ke array
    capturedImages.push(imgData);

    // Membuat elemen pembungkus untuk gambar dan tombol hapus
    const imageWrapper = document.createElement("div");
    imageWrapper.classList.add("relative", "me-2", "flex-none", "items-center", "gap-4", "p-2");

    // Membuat elemen gambar
    const imgElement = document.createElement("img");
    imgElement.src = imgData;
    imgElement.classList.add("w-36", "h-36", "object-cover", "rounded-lg", "border");

    // Membuat tombol hapus
    const removeButton = document.createElement("button");
    removeButton.classList.add(
      "absolute", "top-0", "right-0", "bg-red-500", "text-white",
      "rounded-full", "w-6", "h-6", "flex", "items-center", "justify-center",
      "hover:bg-red-700", "focus:outline-none", "z-50"
    );
    removeButton.innerHTML = "×";
    removeButton.title = "Hapus gambar";

    // Menambahkan event listener untuk tombol hapus
    removeButton.addEventListener("click", function () {
      capturedImagesContainer.removeChild(imageWrapper);
      // Hapus gambar dari array
      capturedImages = capturedImages.filter(image => image !== imgData);
    });

    // Menyusun elemen
    imageWrapper.appendChild(imgElement);
    imageWrapper.appendChild(removeButton);
    capturedImagesContainer.appendChild(imageWrapper);

    // Menambah margin kontainer gambar
    capturedImagesContainer.classList.add("mb-2");

    // Stop streaming setelah capture
    stream.getTracks().forEach(track => track.stop());
    document.querySelector('.bg-gray-900\\/50').classList.add("hidden");

    window.Swal.fire({
      title: "Captured!",
      text: "Foto berhasil diambil.",
      icon: "success",
      timer: 1000,
    });

    modal.hide();
  });

  closeModalButton.addEventListener("click", function () {
    stream.getTracks().forEach(track => track.stop());
    modal.hide();
  });
}

function getLocation() {
  var long, lat;
  let longitude = document.getElementById('longitude');
  let latitude = document.getElementById('latitude');

  // check jika browser support geolocation
  if (navigator.geolocation) {
    // jika support
    navigator.geolocation.watchPosition(
      function (position) {
        lat = position.coords.latitude;
        long = position.coords.longitude;

        $('#longitude').val(long);
        $('#latitude').val(lat);
      },
      function (error) {
        window.Swal.fire({
          title: "Gagal!",
          html: "Anda harus mengaktifkan izin lokasi.",
          timer: 1500,
          icon: "error",
          showConfirmButton: false,
        }).then(() => {
          setTimeout(() => {
            window.location.href = createURL;
          })
        })
      }
    )
  } else {
    // jika tidak
    window.Swal.fire({
      title: "Gagal!",
      html: "Browser anda tidak memiliki support Geolocation.",
      timer: 1500,
      icon: "error",
      showConfirmButton: false,
    }).then(() => {
      setTimeout(() => {
        window.location.href = indexURL;
      }, 1000);
    })
  }
}

document.addEventListener("DOMContentLoaded", function () {
  quillText();
  backCameraStream();
  getLocation();
  addDataHandler();
});
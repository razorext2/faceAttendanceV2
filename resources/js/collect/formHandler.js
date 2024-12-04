import { capturedImages } from './cameraStream'; // import capturedImages array

export function addDataHandler() {
  $('#store').click(function (e) {
    e.preventDefault();

    let formData = new FormData();
    formData.append("kode_pegawai", $("#kode_pegawai").val());
    formData.append("title", $("#title").val());
    formData.append("keterangan", $("#keterangan").val());
    formData.append("longitude", $("#longitude").val());
    formData.append("latitude", $("#latitude").val());
    formData.append("location", $("#location").val());
    formData.append("_token", $("meta[name='csrf-token']").attr("content"));

    capturedImages.forEach((image, index) => {
      const blob = dataURItoBlob(image);
      formData.append("images[]", blob, `image${index}.png`);
    });

    $.ajax({
      url: storeUrl,
      type: "POST",
      dataType: "json",
      data: formData,
      processData: false,
      contentType: false,
      success: function () {
        Swal.fire({
          icon: "success",
          title: "Laporan berhasil ditambahkan!",
          showConfirmButton: false,
          timer: 1000
        });

        setTimeout(() => window.location.href = indexUrl, 1000);
      },
      error: function (xhr) {
        handleFormErrors(xhr.responseJSON.errors);
      }
    });
  });
}

export function editDataHandler() {
  $('#store').click(function (e) {
    e.preventDefault();

    // define var
    let id = $('#id').val();
    let judul = $("#title").val();
    let ket = $("#keterangan").val();
    let location = $("#location").val();
    let token = $("meta[name='csrf-token']").attr("content");

    // ajax request
    $.ajax({
      url: `/api/collectors/${id}`,
      type: "PATCH",
      data: {
        "title": judul,
        "keterangan": ket,
        "location": location,
        "_token": token
      },
      success: function (response) {
        // tampilkan alert
        window.Swal.fire({
          icon: "success",
          title: "Laporan berhasil diubah!",
          showConfirmButton: false,
          timer: 1000
        });

        // reload halaman
        setTimeout(() => {
          window.location.reload();
        }, 1000);
      },
      error: function (xhr, status, error) {
        // error handler
        Swal.fire({
          icon: "error",
          title: "Terjadi kesalahan!",
          text: "Tidak dapat menyimpan data."
        });

        let err = xhr.responseJSON;

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


function handleFormErrors(errors) {
  for (let field in errors) {
    const alertElement = document.getElementById(`alert-${field}`);
    if (errors[field]) {
      alertElement.classList.remove('hidden');
      alertElement.classList.add('block');
      alertElement.innerHTML = errors[field][0];
    } else {
      alertElement.classList.remove('block');
      alertElement.classList.add('hidden');
    }
  }
}

function dataURItoBlob(dataURI) {
  const byteString = atob(dataURI.split(',')[1]);
  const arrayBuffer = new ArrayBuffer(byteString.length);
  const uintArray = new Uint8Array(arrayBuffer);
  for (let i = 0; i < byteString.length; i++) {
    uintArray[i] = byteString.charCodeAt(i);
  }
  return new Blob([uintArray], { type: 'image/png' });
}
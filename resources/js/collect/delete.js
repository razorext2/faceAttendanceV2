export function deleteData() {
  $("body").on("click", "#delete-btn", function () {
    let id = $(this).data("id");
    let token = $("meta[name='csrf-token']").attr("content");

    Swal.fire({
      title: "Apakah Kamu Yakin?",
      text: "Ingin menghapus data ini!",
      icon: "warning",
      showCancelButton: true,
      cancelButtonText: "Tidak",
      confirmButtonText: "Ya, Hapus!"
    }).then((result) => {
      if (result.isConfirmed) {
        // fetch data to ajax
        $.ajax({
          url: `/api/collectors/${id}`,
          type: "DELETE",
          cache: false,
          data: {
            "_token": token
          },
          success: function (response) {
            Swal.fire({
              icon: "success",
              title: response.message,
              showConfirmButton: false,
              timer: 3000
            });

            $('#table-collector').DataTable().ajax.reload(null, false);
          }
        })
      }
    })
  })
}
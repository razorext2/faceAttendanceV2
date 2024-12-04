export function showDatatables() {
  let table = $('#table-collector').DataTable({
    processing: true,
    serverSide: true,
    responsive: true,
    "lengthMenu": [15, 25, 50, 75, 100, -1],
    ajax: {
      url: src,
      type: "GET",
      data: function (d) {
        d.title = $('#title').val();
        d.kode_pegawai = $('#kode-pegawai').val();
        d.status = $('#status').val();
        d.start = $('#datepicker-range-start').val();
        d.end = $('#datepicker-range-end').val();
      }
    },
    columns: [{
      // render nomor, autoIndex
      data: "DT_RowIndex",
      name: "DT_RowIndex",
      searchable: false,
      orderable: false,
    }, {
      data: 'null',
      name: 'actions',
      // render action button
      render: function (data, type, row) {
        let actions = `<div class="inline-flex" role="group">
        <a href="collect/${row.id}" class="mx-1 text-md font-medium rounded-lg focus:z-10">
            👁 <span class="hover:underline text-blue-500"> Show </span>
        </a>
        <a href="collect/${row.id}/edit" class="mx-1 text-md font-medium rounded-lg focus:z-10">
            &#9999; <span class="hover:underline text-green-500"> Edit </span>
        </a>`;

        if (permissionDelete) {
          actions += `<a href="javascript:void(0)" id="delete-btn" data-id="${row.id}" class="mx-1 text-md font-medium rounded-lg focus:z-10">
            &#x26D4; <span class="hover:underline text-red-500"> Delete </span>
        </a>`;
        }

        actions += `</div>`;
        return actions;
      },
      orderable: false,
      searchable: false,
    }, {
      data: "kode_pegawai",
      name: "kode_pegawai"
    },
    {
      data: "created_updated_at",
      name: "created_updated_at",
    },
    {
      data: "title_status",
      name: "title_status"
    }
    ],
    dom: `<"absolute top-1 md:left-0 mt-14 lg:mt-0 dark:text-white max-w-xs"B><"text-left lg:text-right dark:text-white"l><"relative overflow-x-auto w-full mt-20 lg:mt-4"t><"grid text-center gap-6 lg:grid-cols-2 mt-4 dark:text-white"<"lg:mt-3 lg:text-left"i><"lg:text-right dark:text-gray-900"p>>`,
    buttons: [{
      extend: "csv",
      exportOptions: {
        stripHtml: false
      }
    },
      "print",
    ],
    "deferRender": true,
    "language": {
      "infoFiltered": ""
    }
  });

  $('#cari').click(function () {
    // Ambil nilai dari semua input filter
    const filters = ['#title', '#kode-pegawai', '#status', '#datepicker-range-start',
      '#datepicker-range-end'
    ].map(selector => $(
      selector).val());

    // Cek apakah semua filter kosong
    if (filters.some(value => value !== '')) {
      table.draw();
    }
  });

  // jika tombol clear diklik
  $('#clear').click(function () {
    // Ambil nilai dari semua input filter
    const filters = ['#title', '#kode-pegawai', '#status', '#datepicker-range-start',
      '#datepicker-range-end'
    ].map(selector => $(
      selector).val());
    // Cek apakah semua filter kosong
    if (filters.some(value => value !== '')) {

      // kosongkan semua value
      $('#title').val('');
      $('#kode-pegawai').val('');
      $('#status').prop('selectedIndex', 0);
      $('#datepicker-range-start').val('');
      $('#datepicker-range-end').val('');

      table.draw();
    }
  })
}
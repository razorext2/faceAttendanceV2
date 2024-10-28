<?php

namespace App\Http\Controllers;

use App\Models\Golongan;
use App\Models\Jadwal;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Yajra\DataTables\DataTables;

class GolonganController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:golongan-list', ['only' => ['index', 'getData']]);
        $this->middleware('permission:golongan-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:golongan-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:golongan-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        return view('dashboard.golongan.index');
    }

    public function getData(Request $request)
    {
        // Function to clean the date string
        function cleanDate($dateString)
        {
            // Use regex to remove timezone name in parentheses, leaving the GMT offset intact
            return preg_replace('/\s\(.+\)$/', '', $dateString);
        }

        // Parse the minDate and maxDate from the request after cleaning
        $minDate = cleanDate($request->input('minDate'));
        $maxDate = cleanDate($request->input('maxDate'));

        // Start building the query
        $query = Golongan::get();

        // Apply date filtering if minDate and maxDate are provided
        if ($minDate) {
            $query = $query->where('created_at', '>=', Carbon::parse($minDate)->startOfDay());
        }
        if ($maxDate) {
            $query = $query->where('created_at', '<=', Carbon::parse($maxDate)->endOfDay());
        }

        // Fetch the filtered data with pagination for DataTables
        if (auth()->user()->hasAnyPermission(['golongan-edit', 'golongan-delete'])) {
            return DataTables::of($query)
                ->addColumn('action', function ($data) {
                    $editUrl = route('golongan.edit', $data->id);

                    // Inisialisasi variabel untuk tombol aksi
                    $actionButtons = '
                    <div class="inline-flex" role="group">';

                    // Cek izin edit
                    if (auth()->user()->can('golongan-edit')) {
                        $actionButtons .= '
                        <a href="' . $editUrl . '"class="mx-1 text-md font-medium rounded-lg focus:z-10">
                            &#9999; <span class="hover:underline" style="color: #057A55"> Edit </span>
                        </a>';
                    }

                    if (auth()->user()->can('golongan-delete')) {
                        // Tambahkan tombol delete
                        $actionButtons .= '
                        <button
                            class="mx-1 group text-md font-medium rounded-lg focus:z-10 delete-btn"
                            data-id="' . $data->id . '" data-modal-target="deleteModal" data-modal-toggle="deleteModal">
                            &#x26D4; <span class="hover:underline" style="color: #E02424;"> Delete </span>
                        </button>';
                    }

                    '</div>';

                    return $actionButtons;
                })
                ->addColumn('jadwal_relasi', function ($data) {
                    if ($data->jadwalRelasi->isEmpty()) {
                        return 'N/A';
                    }

                    // Construct the HTML for the schedule
                    $schedule = '';
                    foreach ($data->jadwalRelasi as $j) {
                        $schedule .= '
                        <div class="flex">
                            <div class="flex-none w-12">
                                ' . $j->hari . '
                            </div>
                            <div class="flex-1">
                                ( ' . $j->jam_masuk . ' - ' . $j->jam_keluar . ' )
                            </div>
                        </div>';
                    }
                    return $schedule;
                })
                ->editColumn('created_updated_at', function ($data) {
                    return $data->created_at . ' / ' . $data->updated_at;
                })
                ->addIndexColumn() // This is the DT_RowIndex
                ->rawColumns(['jadwal_relasi', 'action'])
                ->make(true);
        } else {
            return DataTables::of($query)
                ->addColumn('action', function ($data) {
                    $editUrl = route('golongan.edit', $data->id);

                    // Inisialisasi variabel untuk tombol aksi
                    $actionButtons = '
            <div class="inline-flex" role="group">';

                    // Cek izin edit
                    if (auth()->user()->can('golongan-edit')) {
                        $actionButtons .= '
                    <a href="' . $editUrl . '"
                        class="px-4 py-2 mx-1 text-sm font-medium text-gray-900 bg-transparent border border-green-800 rounded-lg hover:bg-green-600 hover:text-white focus:z-10 focus:ring-green-500 focus:bg-green-600 focus:text-white dark:bg-green-800 dark:hover:bg-green-900 dark:text-white">
                        Edit
                    </a>';
                    }

                    if (auth()->user()->can('golongan-delete')) {
                        // Tambahkan tombol delete
                        $actionButtons .= '
                    <button
                        class="px-4 py-2 mx-1 text-sm font-medium text-gray-900 bg-transparent border border-red-800 rounded-lg hover:bg-red-600 hover:text-white focus:z-10 focus:ring-red-500 focus:bg-red-600 focus:text-white dark:bg-red-800 dark:hover:bg-red-900 dark:text-white delete-btn"
                        data-id="' . $data->id . '" data-modal-target="deleteModal" data-modal-toggle="deleteModal">
                        Delete
                    </button>';
                    }

                    '</div>';

                    return $actionButtons;
                })
                ->addColumn('jadwal_relasi', function ($data) {
                    if ($data->jadwalRelasi->isEmpty()) {
                        return 'N/A';
                    }

                    // Construct the HTML for the schedule
                    $schedule = '';
                    foreach ($data->jadwalRelasi as $j) {
                        $schedule .= '
                        <div class="flex">
                            <div class="flex-none w-12">
                                ' . $j->hari . '
                            </div>
                            <div class="flex-1">
                                ( ' . $j->jam_masuk . ' - ' . $j->jam_keluar . ' )
                            </div>
                        </div>';
                    }
                    return $schedule;
                })
                ->editColumn('created_updated_at', function ($data) {
                    return $data->created_at . ' / ' . $data->updated_at;
                })
                ->addIndexColumn() // This is the DT_RowIndex
                ->rawColumns(['jadwal_relasi', 'action'])
                ->make(true);
        }
    }

    public function create()
    {
        return view('dashboard.golongan.add');
    }

    public function store(Request $request)
    {
        // Create the new Golongan and retrieve the instance
        $golongan = Golongan::create([
            'nama_golongan' => $request->input('nama_golongan'),
            'alias' => $request->input('alias'),
        ]);

        // Get the id_golongan from the newly created Golongan instance
        $id_golongan = $golongan->id;

        $jadwal = [];
        $days = ['senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu'];

        foreach ($days as $day) {
            $jadwal[$day] = [
                'jam_masuk' => $request->input("jam_masuk_$day"),
                'jam_keluar' => $request->input("jam_keluar_$day"),
            ];
        }

        // Loop through the jadwal and insert each day's schedule
        foreach ($jadwal as $day => $times) {
            Jadwal::create([
                'id_golongan' => $id_golongan,  // Use the retrieved id_golongan here
                'hari' => ucfirst($day),
                'jam_masuk' => $times['jam_masuk'],
                'jam_keluar' => $times['jam_keluar'],
            ]);
        }


        return redirect()->route('dashboard.golongan')->with('status', 'Berhasil menambah data golongan.');
    }

    public function edit($id)
    {
        // Fetch the golongan and its associated jadwal
        $golongan = Golongan::with('jadwalRelasi')->findOrFail($id);

        // Pass the golongan and jadwal to the view
        return view('dashboard.golongan.edit', compact('golongan'));
    }


    public function update(Request $request, Golongan $golongan)
    {
        // Update the golongan
        $golongan->update([
            'nama_golongan' => $request->input('nama_golongan'),
            'alias' => $request->input('alias'),
        ]);

        // Get the id_golongan from the updated Golongan instance
        $id_golongan = $golongan->id;

        // Define the days of the week
        $days = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];

        foreach ($days as $day) {
            $jamMasuk = $request->input("jam_masuk_" . strtolower($day));
            $jamKeluar = $request->input("jam_keluar_" . strtolower($day));

            // Create or update the jadwal for each day
            Jadwal::updateOrCreate(
                [
                    'id_golongan' => $id_golongan,
                    'hari' => ucfirst($day),
                ],
                [
                    'jam_masuk' => $jamMasuk,
                    'jam_keluar' => $jamKeluar,
                ]
            );
        }

        return redirect()->route('dashboard.golongan')->with('status', 'Berhasil mengubah data golongan');
    }

    public function destroy(Golongan $golongan)
    {
        $golongan->delete();

        return redirect()->route('dashboard.golongan')->with('status', 'Berhasil menghapus data golongan');
    }
}

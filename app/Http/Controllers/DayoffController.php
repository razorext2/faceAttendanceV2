<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Dayoff;
use App\Models\Pegawai;
use yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class DayoffController extends Controller
{
	/**
	 * Display a listing of the resource.
	 */
	function __construct()
	{
		$this->middleware('permission:dayoff-delete', ['only' => ['destroy']]);
		$this->middleware('permission:dayoff-confirm', ['only' => ['confirm', 'ignore']]);
	}

	public function index()
	{
		//
		return view('dashboard.dayoff.index');
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
		if (auth()->user()->hasRole(['Admin', 'Support', 'HRD', 'Management'])) {
			// Fetch all Dayoff records with pegawaiRelasi relationship for specific roles
			$query = Dayoff::with('pegawaiRelasi')
				->orderByDesc('tgl_dari')
				->get();
		} else {
			// Fetch only Dayoff records for the currently logged-in user's pegawaiRelasi
			$query = Dayoff::with('pegawaiRelasi')
				->where('id_user', Auth::user()->kode_pegawai)
				->get();
		}

		// Apply date filtering if minDate and maxDate are provided
		if ($minDate) {
			$query = $query->where('created_at', '>=', Carbon::parse($minDate)->startOfDay());
		}
		if ($maxDate) {
			$query = $query->where('created_at', '<=', Carbon::parse($maxDate)->endOfDay());
		}

		// Fetch the filtered data with pagination for DataTables
		return DataTables::of($query)
			->editColumn('id_nama_user', function ($data) {
				return '<p>' . $data->pegawaiRelasi->full_name . '</p><span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300"> ' . $data->id_user . ' </span>';
			})
			->addColumn('action', function ($data) {
				$editUrl = route('dayoff.edit', $data->id);
				$detailUrl = route('dayoff.detail', $data->id);

				// Inisialisasi variabel untuk tombol aksi
				$actionButtons = '
                <div class="inline-flex" role="group">';

				// if (auth()->user()->can('dayoff-detail')) {
				$actionButtons .=
					'<a href="' . $detailUrl . '"
                        class="mx-1 text-md font-medium rounded-lg focus:z-10 text-gray-800 dark:text-white">
                        &#128065; <span class="hover:underline"> Lihat </span>
                    </a>';
				// }

				// Cek izin edit
				// if (auth()->user()->can('dayoff-edit')) {
				$actionButtons .=
					'<a href="' . $editUrl . '"class="mx-1 text-md font-medium rounded-lg focus:z-10">
                        &#9999; <span class="hover:underline" style="color: #057A55"> Edit </span>
                    </a>';
				// }

				if (auth()->user()->can('dayoff-delete')) {
					// Tambahkan tombol delete
					$actionButtons .=
						'<button
                            class="mx-1 group text-md font-medium rounded-lg focus:z-10 delete-btn"
                            data-id="' . $data->id . '" data-modal-target="deleteModal" data-modal-toggle="deleteModal">
                            &#x26D4; <span class="hover:underline" style="color: #E02424;"> Delete </span>
                        </button>';
				}
				'</div>';

				return $actionButtons;
			})
			->editColumn('statuses', function ($data) {
				$status = $data->status;

				if ($status == 1) {
					return '<span class="px-4 py-1 text-sm font-medium text-green-800 bg-green-100 rounded-full ring-1 dark:ring-gray-700 dark:bg-green-900 ring-gray-300 dark:text-green-300"> Diterima </span>';
				} elseif ($status == 2) {
					return '<span class="px-4 py-1 text-sm font-medium text-yellow-800 bg-yellow-100 rounded-full ring-1 dark:ring-gray-700 dark:bg-yellow-900 ring-gray-300 dark:text-yellow-300"> Diajukan </span>';
				} elseif ($status == 3) {
					return '<span class="px-4 py-1 text-sm font-medium text-red-800 bg-red-100 rounded-full ring-1 dark:ring-gray-700 dark:bg-red-900 ring-gray-300 dark:text-red-300"> Ditolak </span>';
				} else {
					return '<span class="px-4 py-1 text-sm font-medium text-red-800 bg-red-100 rounded-full ring-1 dark:ring-gray-700 dark:bg-red-900 ring-gray-300 dark:text-red-300"> Dibatalkan </span>';
				}
			})
			->editColumn('created_updated_at', function ($data) {
				return $data->created_at . ' / ' . $data->updated_at;
			})
			->rawColumns(['action', 'statuses', 'id_nama_user'])
			->make(true);
	}

	/**
	 * Show the form for creating a new resource.
	 */
	public function create()
	{
		//
		if (auth()->user()->hasRole(['Admin', 'Support', 'HRD', 'Management'])) {
			// If the user has one of the specified roles, show the 'add' dayoff view without specific data
			return view('dashboard.dayoff.add');
		} else {
			// If the user is not one of the specified roles, get their associated Pegawai data and pass it to the view
			$data = Pegawai::where('kode_pegawai', Auth::user()->kode_pegawai)->firstOrFail();
			return view('dashboard.dayoff.add', compact('data'));
		}
	}

	public function autocomplete(Request $request)
	{
		$search = $request->input('query'); // Mengambil input dari request

		// Cari nama pengguna berdasarkan input
		$users = Pegawai::where('full_name', 'LIKE', "%{$search}%")
			->limit(10) // Batasi hasil
			->get(['id', 'kode_pegawai', 'nick_name', 'full_name']); // Ambil ID dan nama saja

		return response()->json($users); // Kembalikan hasil sebagai JSON
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store(Request $request)
	{
		//
		Dayoff::create([
			'id_user' => $request->input('kode_pegawai'),
			'dayoff_for' => $request->input('dayoff_for'),
			'url' => null,
			'tgl_dari' => $request->input('start_time'),
			'tgl_hingga' => $request->input('end_time'),
			'keterangan' => $request->input('keterangan'),
			'status' => 2,
		]);

		return redirect()->route('dashboard.dayoff')->with('status', 'Berhasil menambah pengajuan off.');
	}

	public function uploadImage(Request $request)
	{
		$request->validate([
			'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi file gambar
		]);

		if ($request->hasFile('image')) {
			$image = $request->file('image');
			$path = $image->store('uploads', 'public'); // Simpan file di folder 'public/uploads'

			return response()->json(['url' => Storage::url($path)]); // Kembalikan URL gambar yang diupload
		}

		return response()->json(['error' => 'Gagal mengupload gambar'], 500);
	}

	/**
	 * Display the specified resource.
	 */
	public function detail($id)
	{
		//
		$dayoff = Dayoff::with('pegawaiRelasi')->findOrFail($id);
		return view('dashboard.dayoff.detail', compact('dayoff'));
	}

	/**
	 * Show the form for editing the specified resource.
	 */
	public function edit($id)
	{
		//
		$dayoff = Dayoff::with('pegawaiRelasi')->findOrFail($id);

		return view('dashboard.dayoff.edit', compact('dayoff'));
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update(Request $request, Dayoff $dayoff)
	{
		//
		$dayoff->update([
			'id_user' => $request->input('kode_pegawai'),
			'dayoff_for' => $request->input('dayoff_for'),
			'url' => null,
			'tgl_dari' => $request->input('start_time'),
			'tgl_hingga' => $request->input('end_time'),
			'keterangan' => $request->input('keterangan'),
		]);

		return redirect()->route('dashboard.dayoff')->with('status', 'Berhasil mengubah pengajuan');
	}

	public function confirm(Dayoff $dayoff)
	{
		$dayoff->update(['status' => 1]);

		return redirect()->route('dashboard.dayoff')->with('status', 'Berhasil menyetujui pengajuan');
	}

	public function ignore(Dayoff $dayoff)
	{
		$dayoff->update(['status' => 3]);

		return redirect()->route('dashboard.dayoff')->with('status', 'Berhasil menolak pengajuan');
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy($id)
	{
		//
		$dayoff = Dayoff::findOrFail($id);
		$dayoff->delete();

		return redirect()->back()->with('status', 'Berhasil menghapus pengajuan.');
	}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use App\Models\Attendance;
use App\Models\AttendanceOut;
use App\Models\Pegawai;
use App\Models\Jabatan;
use App\Models\Golongan;
use Yajra\DataTables\Facades\DataTables;

class PegawaiController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:pegawai-list', ['only' => ['index', 'getData']]);
        $this->middleware('permission:pegawai-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:pegawai-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:pegawai-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        return view('dashboard.pegawai.index');
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
        $query = Pegawai::with('golonganRelasi', 'jabatanRelasi')->get();

        // Apply date filtering if minDate and maxDate are provided
        if ($minDate) {
            $query->where('updated_at', '>=', Carbon::parse($minDate)->startOfDay());
        }
        if ($maxDate) {
            $query->where('updated_at', '<=', Carbon::parse($maxDate)->endOfDay());
        }

        // Fetch the filtered data with pagination for DataTables
        return DataTables::of($query)
            ->addColumn('action', function ($data) {
                $editUrl = route('pegawai.edit', $data->id);
                $dataUrl = route('pegawai.detail', $data->id);

                // Inisialisasi variabel untuk tombol aksi
                $actionButtons = '
            <div class="inline-flex rounded-md shadow-sm" role="group">
                <a href="' . $dataUrl . '"
                    class="px-4 py-2 mx-1 text-sm font-medium text-gray-900 bg-transparent border-blue-800 rounded-lg hover:bg-blue-600 hover:text-white focus:z-10 focus:ring-blue-500 focus:bg-blue-600 focus:text-white dark:bg-blue-800 dark:hover:bg-blue-900 dark:text-white">
                    Data
                </a>';

                // Cek izin edit
                if (auth()->user()->can('pegawai-edit')) {
                    $actionButtons .= '
                    <a href="' . $editUrl . '"
                        class="px-4 py-2 mx-1 text-sm font-medium text-gray-900 bg-transparent bg-green-800 rounded-lg hover:bg-green-600 hover:text-white focus:z-10 focus:ring-green-500 focus:bg-green-600 focus:text-white dark:bg-green-800 dark:hover:bg-green-900 dark:text-white">
                        Edit
                    </a>';
                }

                if(auth()->user()->can('pegawai-delete')) {
                    // Tambahkan tombol delete
                    $actionButtons .= '
                    <button
                        class="px-4 py-2 mx-1 text-sm font-medium text-gray-900 bg-transparent rounded-lg delete-btn hover:bg-red-900 hover:text-white focus:ring-red-500 focus:bg-red-900 focus:text-white dark:bg-red-800 dark:hover:bg-red-900 dark:text-white"
                        data-id="' . $data->id . '" data-modal-target="deleteModal" data-modal-toggle="deleteModal">
                        Delete
                    </button>';
                }
                
            '</div>';

                return $actionButtons;
            })

            ->addColumn('golongan', function ($data) {
                return $data->golonganRelasi->nama_golongan ?? 'N/A';
            })
            ->addColumn('jabatan', function ($data) {
                return $data->jabatanRelasi->nama_jabatan ?? 'N/A';
            })
            ->addIndexColumn() // This is the DT_RowIndex
            ->rawColumns(['action'])
            ->make(true);
    }

    public function create()
    {
        $jabatan = Jabatan::all();
        $golongan = Golongan::all();
        return view('dashboard.pegawai.add', compact('jabatan', 'golongan'));
    }

    public function store(Request $request)
    {
        Pegawai::create([
            'kode_pegawai' => $request->input('kode_pegawai'),
            'nik_pegawai' => $request->input('nik_pegawai'),
            'full_name' => $request->input('nama_lengkap'),
            'nick_name' => $request->input('nick_name'),
            'no_telp' => $request->input('no_telp'),
            'alamat' => $request->input('alamat'),
            'jabatan' => $request->input('jabatan'),
            'golongan' => $request->input('golongan'),
            'tgl_lahir' => $request->input('tgl_lahir')
        ]);

        $photo = $request->input('photo1');
        if (!is_null($photo)) {
            $this->saveImages($request);
        }

        return redirect()->route('dashboard.pegawai')->with('status', 'Berhasil menambah data Pegawai');
    }

    public function edit(Pegawai $pegawai)
    {
        $jabatan = Jabatan::all();
        $golongan = Golongan::all();

        $images = $this->showImages($pegawai);

        return view('dashboard.pegawai.edit', compact('pegawai', 'jabatan', 'images', 'golongan'));
    }

    public function update(Request $request, Pegawai $pegawai)
    {
        $pegawai->update([
            'nik_pegawai' => $request->input('nik_pegawai'),
            'full_name' => $request->input('nama_lengkap'),
            'nick_name' => $request->input('nick_name'),
            'no_telp' => $request->input('no_telp'),
            'alamat' => $request->input('alamat'),
            'jabatan' => $request->input('jabatan'),
            'golongan' => $request->input('golongan'),
            'tgl_lahir' => $request->input('tgl_lahir')
        ]);

        $photo = $request->input('photo1');
        if (!is_null($photo)) {
            $request->validate([
                'kode_pegawai' => 'required|exists:tb_pegawai,kode_pegawai',
                'photo1' => 'required|string',
                'photo2' => 'required|string',
            ]);

            $this->saveImages($request);
        }

        return redirect()->route('dashboard.pegawai')->with('status', 'Berhasil mengubah data Pegawai');
    }

    public function showImages(Pegawai $pegawai)
    {
        $path = public_path('storage/' . $pegawai->storage);
        $files = File::files($path);

        $images = [];

        foreach ($files as $file) {
            $extension = strtolower($file->getExtension());
            if (in_array($extension, ['png'])) {
                $images[] = $file->getFilename();
            }
        }

        return $images;
    }

    public function destroy($id)
    {
        //
        $pegawai = Pegawai::findOrFail($id);
        $pegawai->delete();

        return redirect()->back()->with('status', 'Berhasil menghapus data pegawai.');
    }

    public function detail($id)
    {
        $pegawai = Pegawai::with('jabatanRelasi')->findOrFail($id);

        $currentDate = Carbon::now();

        $startOfMonth = $currentDate->copy()->startOfMonth();
        $endOfMonth = $currentDate->copy()->endOfMonth();
        $period = CarbonPeriod::create($startOfMonth, $endOfMonth);
        $startDayOfWeek = $startOfMonth->dayOfWeek;
        $dd = [];


        for ($i = 0; $i < $startDayOfWeek; $i++) {
            $dd[] = null;
        }

        foreach ($period as $date) {
            $dd[] = $date->isoFormat('Y-MM-DD');
        }

        $images = $this->showImages($pegawai);
        $startOfMonth = $startOfMonth->locale('id')->isoFormat('MMMM Y');

        $attendanceData = Attendance::where('kode_pegawai', $pegawai->kode_pegawai)->get();

        return view('dashboard.pegawai.detail', compact('pegawai', 'dd', 'startOfMonth', 'images', 'attendanceData'));
    }

    public function getAttendanceData(Request $request)
    {
        $date = $request->query('date');
        $kode_pegawai = $request->query('kode_pegawai');

        $attendance = Attendance::whereDate('jam_masuk', $date)
            ->where('kode_pegawai', $kode_pegawai)
            ->get();

        $attendanceOut = AttendanceOut::whereDate('jam_keluar', $date)
            ->where('kode_pegawai', $kode_pegawai)
            ->get();

        return response()->json([
            'attendance' => $attendance,
            'attendanceOut' => $attendanceOut,
        ]);
    }

    public function getEmployeeByKodePegawai($kode_pegawai)
    {
        $pegawai = Pegawai::where('kode_pegawai', $kode_pegawai)->first();

        if ($pegawai) {
            return response()->json($pegawai);
        } else {
            return response()->json(['error' => 'Employee not found'], 404);
        }
    }

    public function getPegawai()
    {
        // cek data pegawai yang kolom storagenya tidak kosong
        $kode = Pegawai::whereNotNull('storage')->pluck('kode_pegawai');
        return response()->json($kode);
    }

    public function getPegawaiImages($storage)
    {
        $sanitizedStorage = basename($storage);
        $directoryPath = public_path('storage/labels/' . $sanitizedStorage);

        // Cek apakah direktori ada
        if (!is_dir($directoryPath)) {
            return response()->json(['error' => 'Directory not found'], 404);
        }

        // Mencari gambar dengan ekstensi yang ditentukan
        $images = glob($directoryPath . '/*.{png,jpg,jpeg,webp}', GLOB_BRACE);

        // Cek apakah gambar ditemukan
        if (!empty($images)) {
            // Jika gambar ditemukan, buat relative paths
            $relativeImagePaths = array_map(function ($path) use ($directoryPath) {
                return str_replace(public_path(), '', $path);
            }, $images);

            return response()->json($relativeImagePaths);
        } //else {
        //     return response()->json(['error' => 'Image not found'], 404);
        // }
    }

    public function storeImage(Request $request)
    {
        if ($request->hasFile('image') && $request->input('label')) {
            $kodePegawai = $request->input('label');
            $timestamp = getCurrentDate();
            Session::put('current_date', $timestamp);

            $image = $request->file('image');

            $uploadDir = 'labels/' . $kodePegawai . '/capturedImg';
            $imageName = $kodePegawai . $timestamp . '.png';
            $path = $image->move(public_path('storage/' . $uploadDir), $imageName);

            if ($path) {
                $imageUrl = asset('storage/' . $uploadDir . '/' . $imageName);
                return response()->json(['imageUrl' => $imageUrl]);
            } else {
                return response()->json(['error' => 'Failed to save image'], 500);
            }
        } else {
            return response()->json(['error' => 'No image or label received'], 400);
        }
    }

    public function getPegawaiDataByLabel($label)
    {
        $pegawai = Pegawai::with(['attendanceRelasi', 'jabatanRelasi', 'golonganRelasi'])
            ->where('kode_pegawai', $label)
            ->first();

        if ($pegawai) {
            return response()->json($pegawai);
        } else {
            return response()->json(['error' => 'Pegawai not found'], 404);
        }
    }

    public function checkAttendance(Request $request)
    {
        $kodePegawai = $request->input('kode_pegawai');
        $today = now()->startOfDay();

        $attendance = DB::table('tb_attendance')
            ->where('kode_pegawai', $kodePegawai)
            ->whereDate('jam_masuk', $today)
            ->first();

        return response()->json([
            'hasClockedIn' => $attendance ? true : false,
            'jam_masuk' => $attendance ? $attendance->jam_masuk : null,
        ]);
    }

    public function photoRegist()
    {
        return view('regist');
    }

    public function saveImages(Request $request)
    {
        $kodePegawai = $request->input('kode_pegawai');

        $folderPath = "public/labels/{$kodePegawai}";
        $folderToDB = "labels/{$kodePegawai}/";

        if (!Storage::exists($folderPath)) {
            Storage::makeDirectory($folderPath);
        }

        $photo1Data = $request->input('photo1');
        $photo2Data = $request->input('photo2');

        $photo1Data = str_replace('data:image/jpeg;base64,', '', $photo1Data);
        $photo1Data = base64_decode($photo1Data);
        $photo1Path = "{$folderPath}/photo1.png";
        Storage::put($photo1Path, $photo1Data);

        $photo2Data = str_replace('data:image/jpeg;base64,', '', $photo2Data);
        $photo2Data = base64_decode($photo2Data);
        $photo2Path = "{$folderPath}/photo2.png";
        Storage::put($photo2Path, $photo2Data);

        Pegawai::where('kode_pegawai', $kodePegawai)
            ->update([
                'storage' => $folderToDB,
            ]);
    }

    public function photoRegistProcess(Request $request)
    {
        // Validate the request
        $request->validate([
            'kode_pegawai' => 'required|exists:tb_pegawai,kode_pegawai',
            'photo1' => 'required|string',
            'photo2' => 'required|string',
        ]);

        $this->saveImages($request);
        return redirect()->to(route('landing.page') . '/#Scan')->with('success', 'Data berhasil diperbarui!');
    }
}

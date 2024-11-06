<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Number;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use App\Models\Attendance;
use App\Models\AttendanceOut;
use App\Models\Pegawai;
use App\Models\Jabatan;
use App\Models\Golongan;
use App\Models\User;
use App\Models\Allowance;
use App\Models\Deduction;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class PegawaiController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:pegawai-list', ['only' => ['index']]);
        $this->middleware('permission:pegawai-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:pegawai-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:pegawai-delete', ['only' => ['destroy']]);
        $this->middleware('permission:pegawai-timeline', ['only' => ['timeline']]);
    }

    public function index()
    {
        return view('dashboard.pegawai.index');
    }

    public function getData(Request $request)
    {
        function cleanDate($dateString)
        {
            return preg_replace('/\s\(.+\)$/', '', $dateString);
        }
        $minDate = cleanDate($request->input('minDate'));
        $maxDate = cleanDate($request->input('maxDate'));

        $query = Pegawai::with('golonganRelasi', 'jabatanRelasi')
            ->select('id', 'kode_pegawai', 'nik_pegawai', 'full_name', 'no_telp', 'jabatan', 'golongan')->get();

        if ($minDate) {
            $query = $query->where('created_at', '>', Carbon::parse($minDate)->startOfDay());
        }
        if ($maxDate) {
            $query = $query->where('created_at', '<', Carbon::parse($maxDate)->endOfDay());
        }

        return DataTables::of($query)
            ->addColumn('action', function ($data) {
                // $editUrl = route('pegawai.edit', Crypt::encrypt($data->id));
                $dataUrl = route('pegawai.detail', Crypt::encrypt($data->id));
                // $timelineUrl = route('pegawai.timeline', Crypt::encrypt($data->id));
                $actionButtons = '
                <div class="inline-flex text-center" role="group">
                    <a href="' . $dataUrl .
                    '"
                        class="mx-1 text-md font-medium rounded-lg focus:z-10 text-blue-500">
                         &#128203; <span class="hover:underline"> Detail </span>
                    </a>';
                return $actionButtons;
            })
            ->addColumn('full_name_nik', function ($data) {
                return '
                        <p class="text-base font-medium">' . $data->full_name . '</p>
                        <p class="text-md"> NIK: ' . $data->nik_pegawai . '</p>';
            })
            ->addColumn('nama_golongan', function ($data) {
                return $data->golonganRelasi->nama_golongan ?? 'N/A';
            })
            ->addColumn('nama_jabatan', function ($data) {
                return $data->jabatanRelasi->nama_jabatan ?? 'N/A';
            })
            ->editColumn('no_telp', function ($data) {
                return $data->no_telp ?? 'N/A';
            })
            ->addIndexColumn()
            ->rawColumns(['action', 'full_name_nik'])
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

        $user = User::create([
            'kode_pegawai' => $request->input('kode_pegawai'),
            'name' => $request->input('nama_lengkap'),
            'email' => $request->input('nick_name') . '@indodacin.com',
            'password' => Hash::make($request->input('kode_pegawai')),
        ]);

        $user->assignRole(7);

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
        $user = User::where('kode_pegawai', $id)->first();
        $pegawai = Pegawai::where('kode_pegawai', $id)->first();

        if ($user != null) {
            $user->delete();
            $pegawai->delete();
        } else {
            $pegawai->delete();
        }

        return redirect()->back()->with('status', 'Berhasil menghapus data pegawai.');
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

    public function getPegawaiByID($id)
    {
        // cek data pegawai yang kolom storagenya tidak kosong
        $kode = Pegawai::where('kode_pegawai', Auth::user()->kode_pegawai)->pluck('kode_pegawai');
        return response()->json($kode);
    }

    public function getPegawaiImages($storage)
    {
        $sanitizedStorage = basename($storage);
        $directoryPath = public_path('storage/labels/' . $sanitizedStorage);

        if (!is_dir($directoryPath)) {
            return response()->json(['error' => 'Directory not found'], 404);
        }

        $images = glob($directoryPath . '/*.{png,jpg,jpeg,webp}', GLOB_BRACE);

        if (!empty($images)) {
            $relativeImagePaths = array_map(function ($path) use ($directoryPath) {
                return str_replace(public_path(), '', $path);
            }, $images);

            return response()->json($relativeImagePaths);
        }
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
            chmod(storage_path("app/{$folderPath}"), 0755);
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

    public function detail($id)
    {
        $pegawai = Pegawai::with('jabatanRelasi')->findOrFail(Crypt::decrypt($id));
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
        return view('dashboard.pegawai.details.personal-info', compact('pegawai', 'dd', 'startOfMonth', 'images', 'attendanceData'));
    }

    public function attendanceList($id)
    {
        $pegawai = Pegawai::findOrFail(Crypt::decrypt($id));
        return view('dashboard.pegawai.details.attendance-list', compact('pegawai'));
    }

    public function payrollInfo($id)
    {
        $pegawai = Pegawai::with('salaryRelasi')->findOrFail(Crypt::decrypt($id));
        return view('dashboard.pegawai.details.payroll-info', compact('pegawai'));
    }

    public function timeline($id, Request $request)
    {
        $date = $request->query('date') ? Carbon::parse($request->query('date'))->isoFormat('Y-MM-DD') : Carbon::now()->isoFormat('Y-MM-DD');

        $data = AttendanceOut::select('latitude', 'longitude', 'created_at', DB::raw("'check-out' as type"), 'jam_keluar as time')
            ->whereDate('jam_keluar', $date)
            ->where('kode_pegawai', Crypt::decrypt($id));

        $data2 = Attendance::with('pegawaiRelasi')->select('latitude', 'longitude', 'created_at', DB::raw("'check-in' as type"), 'jam_masuk as time')
            ->whereDate('jam_masuk', $date)
            ->where('kode_pegawai', Crypt::decrypt($id))
            ->unionAll($data)
            ->get();

        $pegawai = Pegawai::select('id', 'kode_pegawai', 'full_name')->where('kode_pegawai', Crypt::decrypt($id))->firstOrFail();

        return view('dashboard.pegawai.details.timeline', compact('data2', 'pegawai'));
    }

    public function getAttendanceData(Request $request)
    {
        if ($request->query('date')) {
            $date = Carbon::parse($request->query('date'))->isoFormat('Y-MM-DD');
        } else {
            $date = Carbon::now()->isoFormat('Y-MM-DD');
        }

        $kode_pegawai = Crypt::decrypt($request->query('id'));

        $attendance = Attendance::whereDate('jam_masuk', $date)
            ->whereDate('jam_masuk', $date)
            ->where('kode_pegawai', $kode_pegawai)
            ->get();

        $attendanceOut = AttendanceOut::whereDate('jam_keluar', $date)
            ->whereDate('jam_keluar', $date)
            ->where('kode_pegawai', $kode_pegawai)
            ->get();

        return response()->json([
            'attendance' => $attendance,
            'attendanceOut' => $attendanceOut,
        ]);
    }
}

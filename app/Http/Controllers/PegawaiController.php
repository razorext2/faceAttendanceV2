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

class PegawaiController extends Controller
{

    public function index()
    {
        $pegawai = Pegawai::with('jabatanRelasi')->get();
        return view('dashboard.pegawai.index', compact('pegawai'));
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

    public function destroy(Pegawai $pegawai)
    {
        $pegawai->delete();
        return redirect()->route('dashboard.pegawai')->with('status', 'Berhasil menghapus data Pegawai');
    }

    public function detail(Pegawai $pegawai)
    {
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

        $attendanceData = Attendance::all();

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

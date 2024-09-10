<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Pegawai;
use App\Models\Attendance;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{

    public function index()
    {
        return view('dashboard.pegawai.index');
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
        $kode = Pegawai::pluck('kode_pegawai');
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
        $relativeImagePaths = array_map(function ($path) use ($directoryPath) {
            return str_replace(public_path(), '', $path);
        }, $images);

        return response()->json($relativeImagePaths);
    }

    public function storeImage(Request $request)
    {
        if ($request->hasFile('image') && $request->input('label')) {
            $image = $request->file('image');
            $label = $request->input('label');

            $uploadDir = '/labels/' . $label . '/capturedImg/';
            $timestamp = date('Ymd_his');
            $imageName = $label . '_captured_' . $timestamp . '.png';

            $path = $image->storeAs($uploadDir, $imageName, 'public');

            if ($path) {
                $imageUrl = asset('storage/' . $uploadDir . $imageName);
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
        $pegawai = Pegawai::with('attendance')->where('kode_pegawai', $label)->first();
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

    public function photoRegistProcess(Request $request)
    {
        // Validate the request
        // Validate the request
        $request->validate([
            'kode_pegawai' => 'required|exists:tb_pegawai,kode_pegawai',
            'photo1' => 'required|string',
            'photo2' => 'required|string',
        ]);

        // Get the `kode_pegawai` from the request
        $kodePegawai = $request->input('kode_pegawai');

        // Define the directory path based on `kode_pegawai`
        $folderPath = "public/labels/{$kodePegawai}";
        $folderToDB = "labels/{$kodePegawai}/";

        // Create the folder if it doesn't exist
        if (!Storage::exists($folderPath)) {
            Storage::makeDirectory($folderPath);
        }

        // Handle the file upload
        $photo1Data = $request->input('photo1');
        $photo2Data = $request->input('photo2');

        // Save photo1
        $photo1Data = str_replace('data:image/jpeg;base64,', '', $photo1Data);
        $photo1Data = base64_decode($photo1Data);
        $photo1Path = "{$folderPath}/photo1.png";
        Storage::put($photo1Path, $photo1Data);

        // Save photo2
        $photo2Data = str_replace('data:image/jpeg;base64,', '', $photo2Data);
        $photo2Data = base64_decode($photo2Data);
        $photo2Path = "{$folderPath}/photo2.png";
        Storage::put($photo2Path, $photo2Data);

        // Update the `tb_pegawai` table with the new photo paths
        Pegawai::where('kode_pegawai', $kodePegawai)
            ->update([
                'storage' => $folderToDB,
            ]);

        return redirect()->route('photo.regist')->with('success', 'Data berhasil diperbarui!');
    }
}

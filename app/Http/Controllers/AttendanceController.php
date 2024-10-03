<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Logabsensi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AttendanceController extends Controller
{

    public function index()
    {
        $datas = Attendance::with('pegawaiRelasi')->orderByDesc('jam_masuk')->get();
        return view('dashboard.attendanceIn.view', compact('datas'));
    }

    public function storeAttendance(Request $request)
    {
        try {
            $kodePegawai = $request->input('kode_pegawai');
            $nikPegawai = $request->input('nik_pegawai');
            $timestamp = Session::get('current_date');
            $photoURL = $kodePegawai . $timestamp;
            // $photoURL = $kodePegawai . $timestamp . '.png';


            Attendance::create([
                'kode_pegawai' => $kodePegawai,
                'upl' => 0,
                'upl68' => 0,
                'uplm68' => 0,
                'upljam' => 0,
                'jenis' => 'Wajah',
                'waktuori' => now(),
                'status' => 1,
                'jam_masuk' => now(), // Menggunakan helper now() untuk mendapatkan waktu saat ini
                'photoURL' => $photoURL,
                'created_at' => now(),
            ]);

            Logabsensi::create([
                'nik' => $nikPegawai,
                'kodejari' => $kodePegawai,
                'waktu' => now(),
                'lokasifoto' => $photoURL,
                'upl' => 0,
                'upl68' => 0,
                'uplm68' => 0,
                'upljam' => 0,
                'jenis' => 'Wajah',
                'waktuori' => now(),
                'KodeBarcode' => null,
                'status' => 'Masuk',
            ]);

            return response()->json(['success' => true, 'message' => 'Attendance recorded successfully.']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Failed to record attendance.', 'error' => $e->getMessage()]);
        }
    }
}

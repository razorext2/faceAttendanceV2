<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;
use Carbon\Carbon;

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

            // Menggunakan model Eloquent untuk menambah data
            $shaUrl = sha1($kodePegawai);

            Attendance::create([
                'nik' => null,
                'kode_pegawai' => $kodePegawai,
                'upl' => null,
                'upl68' => null,
                'uplm68' => null,
                'upljam' => null,
                'jenis' => null,
                'waktuori' => null,
                'status' => 1,
                'jam_masuk' => now(), // Menggunakan helper now() untuk mendapatkan waktu saat ini
                'photoURL' => $shaUrl . '.png',
                'created_at' => now(),
            ]);

            return response()->json(['success' => true, 'message' => 'Attendance recorded successfully.']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Failed to record attendance.', 'error' => $e->getMessage()]);
        }
    }
}

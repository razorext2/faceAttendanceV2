<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;

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
            Attendance::create([
                'kode_pegawai' => $kodePegawai,
                'uplserver' => null,
                'aktif' => 1,
                'jam_masuk' => now(), // Menggunakan helper now() untuk mendapatkan waktu saat ini
            ]);

            return response()->json(['success' => true, 'message' => 'Attendance recorded successfully.']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Failed to record attendance.', 'error' => $e->getMessage()]);
        }
    }
}

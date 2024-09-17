<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AttendanceOut;

class AttendanceOutController extends Controller
{

    public function index()
    {
        $datas = AttendanceOut::with('pegawaiRelasi')->orderByDesc('jam_keluar')->get();
        return view('dashboard.attendanceOut.view', compact('datas'));
    }

    public function storeAttendance(Request $request)
    {
        try {
            $kodePegawai = $request->input('kode_pegawai');

            // Insert the clock-out time into the tb_attendance_out table

            AttendanceOut::create([
                'nik' => null,
                'kode_pegawai' => $kodePegawai,
                'upl' => null,
                'upl68' => null,
                'uplm68' => null,
                'upljam' => null,
                'jenis' => null,
                'waktuori' => '',
                'status' => 1,
                'jam_keluar' => now(), // Menggunakan helper now() untuk mendapatkan waktu saat ini
                'photoURL' => '',
                'created_at' => now(),
            ]);

            return response()->json(['success' => true, 'message' => 'Clock-out recorded successfully.']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Failed to record attendance.', 'error' => $e->getMessage()]);
        }
    }
}

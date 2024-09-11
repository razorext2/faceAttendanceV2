<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AttendanceOut;

class AttendanceOutController extends Controller
{
    public function storeAttendance(Request $request)
    {
        try {
            $kodePegawai = $request->input('kode_pegawai');

            // Insert the clock-out time into the tb_attendance_out table

            AttendanceOut::create([
                'kode_pegawai' => $kodePegawai,
                'uplserver' => null,
                'aktif' => 1,
                'jam_keluar' => now()
            ]);

            return response()->json(['success' => true, 'message' => 'Clock-out recorded successfully.']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Failed to record attendance.', 'error' => $e->getMessage()]);
        }
    }
}

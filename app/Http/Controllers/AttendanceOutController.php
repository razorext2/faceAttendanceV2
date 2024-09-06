<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\AttendanceOut;
use Carbon\Carbon;

class AttendanceOutController extends Controller
{
    public function storeAttendance(Request $request)
    {
        try {
            $kodePegawai = $request->input('kode_pegawai');

            // Insert the clock-out time into the tb_attendance_out table
            $attendanceOut = new AttendanceOut();
            $attendanceOut->kode_pegawai = $kodePegawai;
            $attendanceOut->uplserver = null;
            $attendanceOut->aktif = 1;
            $attendanceOut->jam_keluar = now();

            $attendanceOut->save();

            return response()->json(['success' => true, 'message' => 'Clock-out recorded successfully.']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Failed to record attendance.', 'error' => $e->getMessage()]);
        }
    }
}

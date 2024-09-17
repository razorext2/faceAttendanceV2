<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AttendanceOut;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Crypt;

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
            $timestamp = Session::get('current_date');
            $photoURL = $kodePegawai . $timestamp;

            AttendanceOut::create([
                'nik' => null,
                'kode_pegawai' => $kodePegawai,
                'upl' => null,
                'upl68' => null,
                'uplm68' => null,
                'upljam' => null,
                'jenis' => null,
                'waktuori' => null,
                'status' => 1,
                'jam_keluar' => now(), // Menggunakan helper now() untuk mendapatkan waktu saat ini
                'photoURL' => $photoURL,
                'created_at' => now(),
            ]);

            return response()->json(['success' => true, 'message' => 'Clock-out recorded successfully.']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Failed to record attendance.', 'error' => $e->getMessage()]);
        }
    }
}

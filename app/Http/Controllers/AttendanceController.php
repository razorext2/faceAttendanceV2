<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
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
            $timestamp = Session::get('current_date');
            $photoURL = $kodePegawai . $timestamp;
            // $photoURL = $kodePegawai . $timestamp . '.png';


            Attendance::create([
                'kode_pegawai' => $kodePegawai,
                'upl' => null,
                'upl68' => null,
                'uplm68' => null,
                'upljam' => null,
                'jenis' => null,
                'waktuori' => null,
                'status' => 1,
                'jam_masuk' => now(), // Menggunakan helper now() untuk mendapatkan waktu saat ini
                'photoURL' => $photoURL,
                'created_at' => now(),
            ]);

            return response()->json(['success' => true, 'message' => 'Attendance recorded successfully.']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Failed to record attendance.', 'error' => $e->getMessage()]);
        }
    }
}

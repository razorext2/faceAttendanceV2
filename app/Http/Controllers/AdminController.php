<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Attendance;
use App\Models\AttendanceOut;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        //
        $today = Carbon::today();

        $attendance_out_today = AttendanceOut::whereDate('jam_keluar', $today)
            ->with('pegawai')
            ->orderBy('jam_keluar', 'desc')
            ->get();

        $attendance_today = Attendance::whereDate('jam_masuk', $today)
            ->with('pegawai')
            ->orderBy('jam_masuk', 'desc')
            ->get();

        // Subquery to get the latest `jam_keluar` for each `kode_pegawai` for today
        $latestAttendanceOutToday = DB::table('tb_attendance_out')
            ->select('kode_pegawai', DB::raw('MAX(jam_keluar) as latest_jam_keluar'))
            ->whereDate('jam_keluar', $today)
            ->groupBy('kode_pegawai');

        // Main query to join tb_pegawai with the latest `jam_keluar` for today
        $attendance_all = Pegawai::leftJoin('tb_attendance as a', 'tb_pegawai.kode_pegawai', '=', 'a.kode_pegawai')
            ->leftJoinSub($latestAttendanceOutToday, 'latest_attendance_out_today', function ($join) {
                $join->on('tb_pegawai.kode_pegawai', '=', 'latest_attendance_out_today.kode_pegawai');
            })
            ->select('tb_pegawai.kode_pegawai', 'tb_pegawai.full_name', 'tb_pegawai.nick_name', 'tb_pegawai.no_telp', 'tb_pegawai.alamat', 'a.jam_masuk', 'latest_attendance_out_today.latest_jam_keluar')
            ->whereDate('a.jam_masuk', $today)
            ->orderBy('a.jam_masuk', 'DESC')
            ->get();



        return view('dashboard.dashboard', compact('attendance_today', 'attendance_out_today', 'attendance_all'));
    }
}

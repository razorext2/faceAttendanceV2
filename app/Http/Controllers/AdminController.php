<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\AttendanceOut;
use App\Models\Pegawai;
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

        $startDate = Carbon::today()->subDays(6);
        $endDate = Carbon::today();
        $formattedDateRange = $startDate->locale('id')->isoFormat('dddd, D MMM') . ' - ' . $endDate->locale('id')->isoFormat('dddd, D MMM');

        $yearNow = Carbon::today()->year;

        $attendance_out_today = AttendanceOut::whereDate('jam_keluar', $today)
            ->with('pegawaiRelasi')
            ->orderBy('jam_keluar', 'desc')
            ->get();

        $attendance_today = Attendance::whereDate('jam_masuk', $today)
            ->with('pegawaiRelasi')
            ->orderBy('jam_masuk', 'desc')
            ->get();

        // Subquery to get the latest `jam_keluar` for each `kode_pegawai` for today
        $attendance_all = Pegawai::with(['attendanceRelasi' => function ($query) use ($today) {
            $query->whereDate('jam_masuk', $today);
        }, 'latestAttendanceOutRelasi'])
            ->select('kode_pegawai', 'full_name', 'nick_name', 'no_telp', 'alamat')
            ->get()
            ->map(function ($pegawai) {
                return [
                    'kode_pegawai' => $pegawai->kode_pegawai,
                    'full_name' => $pegawai->full_name,
                    'nick_name' => $pegawai->nick_name,
                    'no_telp' => $pegawai->no_telp,
                    'alamat' => $pegawai->alamat,
                    'jam_masuk' => $pegawai->attendanceRelasi->first()->jam_masuk ?? null,
                    'latest_jam_keluar' => $pegawai->latestAttendanceOutRelasi->jam_keluar ?? null,
                ];
            })
            ->sortBy(function ($pegawai) {
                // Sort by jam_masuk ascending (nulls last) and then by latest_jam_keluar descending (nulls last)
                return [
                    $pegawai['latest_jam_keluar'] ? -$pegawai['latest_jam_keluar']->timestamp : PHP_INT_MAX,  // Sort latest_jam_keluar descending (nulls last)
                    $pegawai['jam_masuk'] ? $pegawai['jam_masuk']->timestamp : PHP_INT_MAX  // Sort jam_masuk ascending (nulls last)
                ];
            });

        return view('dashboard.dashboard', compact('attendance_today', 'attendance_out_today', 'attendance_all', 'formattedDateRange', 'yearNow'));
    }
}

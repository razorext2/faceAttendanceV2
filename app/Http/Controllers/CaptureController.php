<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Models\AttendanceOut;
use App\Models\Attendance;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CaptureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    function __construct()
    {
        $this->middleware('permission:capture', ['only' => ['index', 'timeline']]);
    }

    public function index()
    {
        //
        $data = Pegawai::leftJoin('tb_jabatan', 'tb_pegawai.jabatan', '=', 'tb_jabatan.id') // Join the tb_jabatan table first
            ->leftJoin('tb_placement', function ($join) {
                $join->on('tb_jabatan.penempatan', '=', 'tb_placement.id'); // Now use the join between tb_jabatan and tb_placement
            })
            ->where('kode_pegawai', Auth::user()->kode_pegawai)
            ->firstOrFail();

        return view('dashboard.capture.index', compact('data'));
    }

    public function timeline()
    {
        $data = AttendanceOut::whereDate('jam_keluar', '2024-10-26')
            ->where('kode_pegawai', Auth::user()->kode_pegawai)
            ->get();

        $data2 = Attendance::whereDate('jam_masuk', '2024-10-26')
            ->where('kode_pegawai', Auth::user()->kode_pegawai)
            ->get();

        return view('dashboard.capture.timeline', compact('data', 'data2'));
    }
}

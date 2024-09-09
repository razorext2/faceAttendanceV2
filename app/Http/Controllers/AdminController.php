<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Attendance;
use App\Models\AttendanceOut;
use Illuminate\Http\Request;
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

        $attendance_all = Attendance::all();

        return view('dashboard.dashboard', compact('attendance_today', 'attendance_out_today', 'attendance_all'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }
}

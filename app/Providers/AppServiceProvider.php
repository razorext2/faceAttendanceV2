<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Attendance;
use App\Models\AttendanceOut;
use Carbon\Carbon;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // tampung nilai total atIn dan atOut
        View::composer('*', function ($view) {
            $totalAtIn = Attendance::count();
            $totalAtOut = AttendanceOut::count();
            $jamMasuk = Carbon::createFromTimeString('08:00:00');
            $jamKeluar = Carbon::createFromTimeString('17:00:00');

            if ($totalAtIn > 0) {
                $ontimeAttendance = Attendance::whereTime('jam_masuk', '<=', $jamMasuk)->count();
                $terlambat = Attendance::whereTime('jam_masuk', '>=', $jamMasuk)->count();
                $outtimeAttendance = AttendanceOut::whereTime('jam_keluar', '>=', $jamKeluar)->count();
                $kecepatan = AttendanceOut::whereTime('jam_keluar', '<=', $jamKeluar)->count();

                $ontimePercentage = ($ontimeAttendance / $totalAtIn) * 100;
                $terlambatPer = ($terlambat / $totalAtIn) * 100;
                $outtimePercentage = ($outtimeAttendance / $totalAtOut) * 100;
                $kecepatanPer = ($kecepatan / $totalAtOut) * 100;
            } else {
                $ontimePercentage = 0;
                $outtimePercentage = 0;
                $terlambatPer = 0;
                $kecepatanPer = 0;
            }


            $view->with('totalAtIn', $totalAtIn);
            $view->with('totalAtOut', $totalAtOut);
            $view->with('ontimePercentage', $ontimePercentage);
            $view->with('outtimePercentage', $outtimePercentage);
            $view->with('totalTerlambat', $terlambatPer);
            $view->with('totalKecepatan', $kecepatanPer);
        });
    }
}

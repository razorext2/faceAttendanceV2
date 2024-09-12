<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
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

            if (Attendance::exists()) {
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
            $this->loadLateAttendanceData($view);
        });
    }

    protected function loadLateAttendanceData($view)
    {
        $startDate = Carbon::now()->subDays(7); // 7 hari kebelakang
        $endDate = Carbon::now();
        $standardTime = Carbon::createFromTimeString('08:00:00'); // Jam standar untuk pembanding
        $outTime = Carbon::createFromTimeString('17:00:00');

        // Query untuk mendapatkan jumlah keterlambatan per hari (berdasarkan jam_masuk)
        $lateData = DB::table('tb_attendance')
            ->select(DB::raw('DATE(created_at) as date'), DB::raw('COUNT(*) as total'))
            ->whereBetween('created_at', [$startDate, $endDate])
            ->whereRaw('TIME(jam_masuk) > ?', [$standardTime->toTimeString()]) // Bandingkan jam_masuk dengan 08:00:00
            ->groupBy(DB::raw('DATE(created_at)'))
            ->pluck('total', 'date'); // Mengambil total terlambat dan tanggal

        $ontimeData = DB::table('tb_attendance')
            ->select(DB::raw('DATE(created_at) as date'), DB::raw('COUNT(*) as total'))
            ->whereBetween('created_at', [$startDate, $endDate])
            ->whereRaw('TIME(jam_masuk) < ?', [$standardTime->toTimeString()]) // Bandingkan jam_masuk dengan 08:00:00
            ->groupBy(DB::raw('DATE(created_at)'))
            ->pluck('total', 'date'); // Mengambil total terlambat dan tanggal

        $scanoutData = DB::table('tb_attendance_out')
            ->select(DB::raw('DATE(created_at) as date'), DB::raw('COUNT(*) as total'))
            ->whereBetween('created_at', [$startDate, $endDate])
            ->groupBy(DB::raw('DATE(created_at)'))
            ->pluck('total', 'date');

        // Buat array tanggal 7 hari terakhir dengan jumlah terlambat
        $dates = [];
        $lateCounts = [];
        $ontimeCounts = [];
        $outtimeCounts = [];

        for ($i = 6; $i >= 0; $i--) {
            $date = Carbon::now()->subDays($i)->format('Y-m-d');
            $dates[] = Carbon::now()->subDays($i)->locale('id')->isoFormat('D MMMM');
            $lateCounts[] = $lateData->get($date, 0); // Isi dengan 0 jika tidak ada data di tanggal tersebut
            $ontimeCounts[] = $ontimeData->get($date, 0);
            $outtimeCounts[] = $scanoutData->get($date, 0);
        }

        // Bagikan data ke semua view
        $view->with('dates', $dates);
        $view->with('lateCounts', $lateCounts);
        $view->with('ontimeCounts', $ontimeCounts);
        $view->with('outtimeCounts', $outtimeCounts);
    }
}

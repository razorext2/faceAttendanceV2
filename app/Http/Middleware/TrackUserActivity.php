<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Cookie;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TrackUserActivity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Cek apakah pengguna sedang login
        if (Auth::check()) {
            $lastActivity = Cookie::get('last_activity_time');
            $now = Carbon::now();

            // Jika tidak ada aktivitas selama 6 jam (360 menit), logout paksa
            if ($lastActivity && $now->diffInMinutes(Carbon::parse($lastActivity)) >= 360) {
                Auth::logout(); // Logout pengguna
                return redirect('/login')->with('message', 'You have been logged out due to inactivity.');
            }

            // Simpan waktu aktivitas terakhir di cookie (refresh setiap request)
            Cookie::queue('last_activity_time', $now->toDateTimeString(), 360); // 360 menit = 6 jam
        }

        return $next($request);
    }
}

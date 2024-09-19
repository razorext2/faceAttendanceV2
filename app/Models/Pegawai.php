<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = 'tb_pegawai';
    protected $fillable = [
        'kode_pegawai',
        'nik_pegawai',
        'full_name',
        'nick_name',
        'no_telp',
        'alamat',
        'jabatan',
        'tgl_lahir'
    ];

    // In Pegawai.php (Model)
    public function attendanceRelasi()
    {
        // return $this->hasOne(Attendance::class, 'kode_pegawai', 'kode_pegawai');
        return $this->hasMany(Attendance::class, 'kode_pegawai', 'kode_pegawai');
    }

    public function attendanceOutRelasi()
    {
        return $this->hasMany(AttendanceOut::class, 'kode_pegawai', 'kode_pegawai');
    }

    public function latestAttendanceOutRelasi()
    {
        $today = Carbon::today();

        return $this->hasOne(AttendanceOut::class, 'kode_pegawai', 'kode_pegawai')
            ->whereDate('jam_keluar', $today)
            ->latest('jam_keluar');
    }

    public function jabatanRelasi()
    {
        return $this->belongsTo(Jabatan::class, 'jabatan', 'id');
    }
}

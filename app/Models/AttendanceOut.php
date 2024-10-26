<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceOut extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $table = 'tb_attendance_out';

    protected $fillable = [
        'kode_pegawai',
        'upl',
        'upl68',
        'uplm68',
        'upljam',
        'jenis',
        'waktuori',
        'status',
        'jam_keluar',
        'longitude',
        'latitude',
        'photoURL',
        'created_at',
    ];

    protected $casts = [
        'jam_keluar' => 'datetime',
    ];

    // In Attendance.php (Model)
    public function pegawaiRelasi()
    {
        return $this->belongsTo(Pegawai::class, 'kode_pegawai', 'kode_pegawai');
    }
}

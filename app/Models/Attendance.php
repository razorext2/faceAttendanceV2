<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $table = 'tb_attendance';

    protected $fillable = [
        'kode_pegawai',
        'uplserver',
        'aktif',
        'jam_masuk',
    ];

    protected $casts = [
        'jam_masuk' => 'datetime',
    ];

    // In Attendance.php (Model)
    public function pegawaiRelasi()
    {
        return $this->belongsTo(Pegawai::class, 'kode_pegawai', 'kode_pegawai');
    }
}

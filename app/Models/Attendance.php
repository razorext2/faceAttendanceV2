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
        'upl',
        'upl68',
        'uplm68',
        'upljam',
        'jenis',
        'waktuori',
        'status',
        'jam_masuk',
        'photoURL',
        'created_at',
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

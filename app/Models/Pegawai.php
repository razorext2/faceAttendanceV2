<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = 'tb_pegawai';

    // In Pegawai.php (Model)
    public function attendance()
    {
        return $this->hasOne(Attendance::class, 'kode_pegawai', 'kode_pegawai');
    }
}

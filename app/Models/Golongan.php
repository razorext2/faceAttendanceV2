<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Golongan extends Model
{
    use HasFactory;

    protected $table = 'tb_golongan';
    protected $fillable = [
        'nama_golongan',
        'alias',
        'jam_masuk',
        'jam_keluar',
    ];

    public function jadwalRelasi()
    {
        return $this->hasMany(Jadwal::class, 'id_golongan', 'id');
    }
}

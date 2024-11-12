<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;
    protected $table = 'tb_jadwal';
    protected $fillable = ['id_golongan', 'hari', 'jam_masuk', 'jam_keluar'];

    public function golonganRelasi()
    {
        return $this->belongsTo(Golongan::class, 'id_golongan', 'id');
    }
}

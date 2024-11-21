<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collector extends Model
{
    use HasFactory;
    protected $table = 'tb_collect';
    protected $fillable = [
        'kode_pegawai',
        'title',
        'keterangan'
    ];

    // buat relasi hasMany, karena tiap data collect dapat memiliki banyak data photocollect
    public function photoCollectRelasi()
    {
        return $this->hasMany(PhotoCollect::class, 'id_collect');
    }
}

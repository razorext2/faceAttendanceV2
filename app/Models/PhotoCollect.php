<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class PhotoCollect extends Model
{
    use HasFactory;
    protected $table = 'tb_photo_collect';
    protected $fillable = ['id_collect', 'photourl'];

    // membuat output link jadi /storage/collect/namafile.jpg
    protected function photourl(): Attribute
    {
        return Attribute::make(
            get: fn($photourl) => url('/storage/collect/' . $photourl),
        );
    }

    // karena nilai dari kolom id_collect diambil dari nilai id pada tb_collect
    // maka buat relasi belongsTo karena 1 data dari tabel ini hanya memiliki 1 data dari tb_collect
    public function collectRelasi()
    {
        return $this->belongsTo(Collector::class, 'id_collect');
    }
}

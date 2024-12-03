<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Collector extends Model
{
    use HasFactory;
    protected $table = 'tb_collect';
    protected $fillable = [
        'kode_pegawai',
        'title',
        'keterangan',
        'longitude',
        'latitude',
        'status',
        'notes',
        'location',
    ];

    public static function boot()
    {
        parent::boot();
        static::deleting(function ($collector) {
            // hapus semua file terkait yang berelasi dengan tb_photo_collect
            foreach ($collector->photoCollectRelasi as $photo) {
                $path = str_replace('/storage/', 'public/', $photo->photourl);
                if (Storage::exists($path)) {
                    Storage::delete($path);
                }
            }

            $collector->photoCollectRelasi()->delete();
        });
    }

    // membuat versi pendek title
    public function getShortTitleAttribute()
    {
        $words = explode(' ', $this->title);
        if (count($words) > 5) {
            return implode(' ', array_slice($words, 0, 5)) . ' ... <a href="collect/' . $this->id . '" class="text-blue-500 hover:underline">[ Selengkapnya ]</a>';
        }
        return $this->title;
    }

    // buat relasi hasMany, karena tiap data collect dapat memiliki banyak data photocollect
    public function photoCollectRelasi()
    {
        return $this->hasMany(PhotoCollect::class, 'id_collect');
    }

    public function pegawaiRelasi()
    {
        return $this->belongsTo(Pegawai::class, 'kode_pegawai', 'kode_pegawai');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;

    protected $table = 'tb_jabatan';

    protected $fillable = ['nama_jabatan', 'divisi', 'penempatan'];

    public function divisionRelasi()
    {
        return $this->belongsTo(Division::class, 'divisi', 'id');
    }

    public function placementRelasi()
    {
        return $this->belongsTo(Placement::class, 'penempatan', 'id');
    }
}

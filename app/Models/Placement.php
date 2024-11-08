<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Placement extends Model
{
    use HasFactory;
    protected $table = 'tb_placement';

    protected $fillable = ['kode_penempatan', 'penempatan', 'alamat', 'longitude', 'latitude', 'radius', 'restrict_app'];
}

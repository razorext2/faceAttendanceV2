<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dayoff extends Model
{
    use HasFactory;
    protected $table = 'tb_dayoff';
    protected $fillable = ['id_user', 'dayoff_for', 'url', 'tgl_dari', 'tgl_hingga', 'keterangan', 'status'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allowance extends Model
{
    use HasFactory;
    protected $table = 'tb_allowance';
    protected $fillable = [
        'kode_pegawai',
        'allowance_name',
        'allowance_type',
        'allowance_fee',
        'allowance_period'
    ];
}

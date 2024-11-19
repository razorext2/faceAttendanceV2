<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deduction extends Model
{
    use HasFactory;
    protected $table = 'tb_deduction';
    protected $fillable = [
        'kode_pegawai',
        'deduction_name',
        'deduction_type',
        'deduction_fee',
        'deduction_period'
    ];
}

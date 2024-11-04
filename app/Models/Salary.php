<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    use HasFactory;
    protected $table = 'tb_salary';
    protected $fillable = [
        'kode_pegawai',
        'payroll_type',
        'salary_fee',
        'period'
    ];
}

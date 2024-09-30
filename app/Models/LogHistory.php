<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogHistory extends Model
{
    use HasFactory;

    protected $table = 'tb_log';
    protected $fillable = ['user_id', 'user_action', 'ip_address', 'user_agent', 'user_location'];
}

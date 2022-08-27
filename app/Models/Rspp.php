<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rspp extends Model
{
    use HasFactory;
    protected $fillable = ['code', 'program', 'kegiatan', 'kro', 'ro', 'ruh_belanja_id'];
}

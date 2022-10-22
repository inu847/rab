<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rspp extends Model
{
    use HasFactory;
    protected $fillable = ['code_program', 'program', 'code_kegiatan', 'kegiatan', 'ruh_belanja_id'];

    public function ruhBelanja()
    {
        return $this->belongsTo(RuhBelanja::class, 'ruh_belanja_id', 'id');
    }

    public function kro()
    {
        return $this->hasOne(Kro::class);
    }

    public function ro()
    {
        return $this->hasOne(Ro::class);
    }

    public function komponen()
    {
        return $this->hasOne(Komponen::class);
    }
}

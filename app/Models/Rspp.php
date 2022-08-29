<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rspp extends Model
{
    use HasFactory;
    protected $fillable = ['code_kegiatan', 'kro', 'ro', 'kegiatan', 'code_komponen', 'komponen', 'code_judul_kegiatan', 'judul_kegiatan', 'volume', 'jenis_komponen', 'ruh_belanja_id'];

    public function ruhBelanja()
    {
        return $this->belongsTo(RuhBelanja::class, 'ruh_belanja_id', 'id');
    }
}

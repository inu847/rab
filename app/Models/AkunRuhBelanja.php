<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AkunRuhBelanja extends Model
{
    use HasFactory;

    protected $fillable = ['status', 'akun_id', 'ruh_belanja_id'];

    public function akun()
    {
        return $this->belongsTo(Akun::class, 'akun_id', 'id');
    }
    public function ruhBelanja()
    {
        return $this->belongsTo(RuhBelanja::class, 'ruh_belanja_id', 'id');
    }

}

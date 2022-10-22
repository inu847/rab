<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'name', 'status'];

    public function akunRuhBelanja()
    {
        return $this->hasMany(AkunRuhBelanja::class);
    }

    public function akunDetail()
    {
        return $this->hasMany(AkunDetail::class);
    }
}

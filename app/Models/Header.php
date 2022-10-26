<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    use HasFactory;
    protected $fillable = ['code', 'name', 'akun_id'];


    public function akun()
    {
        return $this->belongsTo(Akun::class, 'akun_id', 'id');
    }
}

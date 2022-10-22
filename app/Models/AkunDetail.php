<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AkunDetail extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'qty', 'price', 'category', 'akun_id', 'uom', 'address'];

    public function akun()
    {
        return $this->belongsTo(Akun::class, 'akun_id', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AkunDetail extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'qty', 'qty2', 'price', 'category', 'akun_id', 'uom', 'uom2', 'address', 'header_id'];

    public function akun()
    {
        return $this->belongsTo(Akun::class, 'akun_id', 'id');
    }

    public function header()
    {
        return $this->belongsTo(Header::class, 'header_id', 'id');
    }
}

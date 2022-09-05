<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubKomponen extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'qty', 'uom', 'price', 'amount', 'komponen_id', 'rspp_id'];

    public function komponen()
    {
        return $this->belongsTo(Komponen::class, 'komponen_id', 'id');
    }

    public function rspp()
    {
        return $this->belongsTo(Rspp::class, 'rspp_id', 'id');
    }
}

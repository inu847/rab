<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komponen extends Model
{
    use HasFactory;
    protected $fillable = ['code', 'name', 'rspp_id', 'ro_id'];

    public function ro()
    {
        return $this->belongsTo(Ro::class, 'ro_id', 'id');
    }

    public function rspp()
    {
        return $this->belongsTo(Rspp::class, 'rspp_id', 'id');
    }
}

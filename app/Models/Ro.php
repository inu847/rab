<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ro extends Model
{
    use HasFactory;
    protected $fillable = ['code_ro', 'ro', 'kro_id', 'rspp_id'];

    public function kro()
    {
        return $this->belongsTo(Kro::class, 'kro_id', 'id');
    }

    public function rspp()
    {
        return $this->belongsTo(Rspp::class, 'rspp_id', 'id');
    }
}

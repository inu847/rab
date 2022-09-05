<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kro extends Model
{
    use HasFactory;
    protected $fillable = ['code_kro', 'kro', 'rspp_id'];

    public function rspp()
    {
        return $this->belongsTo(Rspp::class, 'rspp_id', 'id');
    }
}

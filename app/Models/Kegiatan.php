<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'name', 'program_id'];

    public function program()
    {
        return $this->belongsTo(Program::class, 'program_id', 'id');
    }
}

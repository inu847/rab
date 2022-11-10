<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rspp extends Model
{
    use HasFactory;
    protected $fillable = ['program_id'
                            ,'kegiatan_id'
                            ,'kro_id'
                            ,'ro_id'
                            ,'komponen_id'
                            ,'sub_komponen_id'
                            ,'code'];

    public function ruhBelanja()
    {
        return $this->hasOne(RuhBelanja::class);
    }

    public function program()
    {
        return $this->belongsTo(Program::class, 'program_id', 'id');
    }

    public function kegiatan()
    {
        return $this->belongsTo(Kegiatan::class, 'kegiatan_id', 'id');
    }

    public function kro()
    {
        return $this->belongsTo(Kro::class, 'kro_id', 'id');
    }

    public function ro()
    {
        return $this->belongsTo(Ro::class, 'ro_id', 'id');
    }

    public function komponen()
    {
        return $this->belongsTo(Komponen::class, 'komponen_id', 'id');
    }
}

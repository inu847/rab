<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RuhBelanja extends Model
{
    use HasFactory;
    protected $fillable = ['kepala_rab', 'th_anggaran', 'code_satker', 'name_satker', 'code_kl_unit', 'name_kl_unit'];

    public function rspp()
    {
        return $this->hasOne(Rspp::class);
    }

    public function akunRuhBelanja()
    {
        return $this->hasMany(AkunRuhBelanja::class);
    }
}

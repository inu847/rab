<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RuhBelanja extends Model
{
    use HasFactory;
    protected $fillable = ['tgl_doc', 'volume', 'satuan_ukur', 'kepala_rab', 'th_anggaran', 'code_satker', 'name_satker', 'code_kl_unit', 'name_kl_unit', 'rspp_id'];

    public function rspp()
    {
        return $this->belongsTo(Rspp::class, 'rspp_id', 'id');
    }

    public function akunRuhBelanja()
    {
        return $this->hasMany(AkunRuhBelanja::class);
    }
}

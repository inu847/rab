<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralSetting extends Model
{
    use HasFactory;
    protected $fillable = ['site_logo', 'site_title1', 'site_title2', 'address', 'kode_pos', 'phone', 'with_scanner', 'user_id'];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}

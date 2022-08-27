<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubKomponen extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'qty', 'uom', 'price', 'amount', 'komponen_id'];
}

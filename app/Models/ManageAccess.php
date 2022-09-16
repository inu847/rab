<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManageAccess extends Model
{
    use HasFactory;
    protected $fillable = ['status', 'role_id', 'route', 'slug'];
}

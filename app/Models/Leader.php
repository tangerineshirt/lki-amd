<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Leader extends Model
{
    protected $fillable = ['name', 'rank', 'position', 'image', 'about'];
}

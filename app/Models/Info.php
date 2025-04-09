<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $fillable = ['title', 'content', 'image1', 'image2', 'image3'];
}

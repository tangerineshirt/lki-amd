<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proker extends Model
{
    protected $fillable = ['division_id', 'name', 'description', 'date'];
    public function division(){
        return $this->belongsTo(Division::class);
    }
}

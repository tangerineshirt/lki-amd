<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    protected $fillable = ['name', 'description', 'image'];

    public function prokers(){
        return $this->hasMany(Proker::class);
    }
}

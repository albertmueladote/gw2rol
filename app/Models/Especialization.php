<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especialization extends Model
{
    use HasFactory;

    public function rol()
    {
        return $this->belongsTo(Rol::class);
    }

    public function pasives()
    {
        return $this->hasMany(Pasive::class);
    }
}

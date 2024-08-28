<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Knowledge extends Model
{
    use HasFactory;

    public function races()
    {
        return $this->belongsToMany(Race::class);
    }

    public function rols()
    {
        return $this->belongsToMany(Rol::class);
    }

    public function answers()
    {
        return $this->belongsToMany(Answer::class);
    }

    public function sheets()
    {
        return $this->belongsToMany(Sheet::class)->withPivot('level');
    }
}

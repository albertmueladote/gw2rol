<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    public function answers()
    {
        return $this->belongsToMany(Answer::class);
    }

    public function sheets()
    {
        return $this->belongsToMany(Sheet::class);
    }
}

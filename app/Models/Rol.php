<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    public function questions()
    {
        return $this->belongsToMany(Question::class);
    }

    public function knowledge()
    {
        return $this->belongsToMany(Knowledge::class);
    }

    public function sheets()
    {
        return $this->hasMany(Sheet::class);
    }

    public function weaponSkills()
    {
        return $this->hasMany(WeaponSkill::class);
    }

    public function especializations()
    {
        return $this->hasMany(Especialization::class);
    }
}

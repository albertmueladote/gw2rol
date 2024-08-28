<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeaponType extends Model
{
    use HasFactory;

    public function weapon()
    {
        return $this->belongsTo(Weapon::class);
    }

    public function weaponSkills()
    {
        return $this->hasMany(WeaponSkill::class);
    }
}

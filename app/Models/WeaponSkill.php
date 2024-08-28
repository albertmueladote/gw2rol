<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeaponSkill extends Model
{
    use HasFactory;

    public function rol()
    {
        return $this->belongsTo(Rol::class);
    }

    public function weaponType()
    {
        return $this->belongsTo(WeaponType::class);
    }
}

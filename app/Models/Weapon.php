<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weapon extends Model
{
    use HasFactory;

    public function rarity()
    {
        return $this->belongsTo(Rarity::class);
    }

    public function weaponType()
    {
        return $this->belongsTo(WeaponType::class);
    }

    public function sheets()
    {
        return $this->belongsToMany(Sheet::class)->withPivot('slot');
    }
}

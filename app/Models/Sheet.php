<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sheet extends Model
{
    use HasFactory;

    public function items()
    {
        return $this->belongsToMany(Item::class);
    }

    public function equipments()
    {
        return $this->belongsToMany(Equipment::class);
    }

    public function knowledge()
    {
        return $this->belongsToMany(Knowledge::class)->withPivot('level');
    }

    public function pets()
    {
        return $this->belongsToMany(Pet::class);
    }

    public function npcs()
    {
        return $this->belongsToMany(Npc::class);
    }

    public function race()
    {
        return $this->belongsTo(Race::class);
    }

    public function rol()
    {
        return $this->belongsTo(Rol::class);
    }

    public function weapons()
    {
        return $this->belongsToMany(Weapon::class)->withPivot('slot');
    }
}

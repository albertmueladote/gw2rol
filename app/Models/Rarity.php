<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rarity extends Model
{
    use HasFactory;

    public function equipments()
    {
        return $this->belongsTo(Equipment::class);
    }

    public function weapons()
    {
        return $this->belongsTo(Weapon::class);
    }
}

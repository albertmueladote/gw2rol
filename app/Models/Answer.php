<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function equipments()
    {
        return $this->belongsToMany(Equipment::class);
    }

    public function items()
    {
        return $this->belongsToMany(Item::class);
    }

    public function pets()
    {
        return $this->belongsToMany(Pet::class);
    }

    public function npcs()
    {
        return $this->belongsToMany(Npc::class);
    }

    public function knowledge()
    {
        return $this->belongsToMany(Knowledge::class);
    }
}

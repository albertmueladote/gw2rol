<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;

    protected $table = 'equipments';

    public function answers()
    {
        return $this->belongsToMany(Answer::class);
    }

    public function sheets()
    {
        return $this->belongsToMany(Sheet::class);
    }

    public function characteristic()
    {
        return $this->belongsTo(Characteristic::class);
    }

    public function rarity()
    {
        return $this->belongsTo(Rarity::class);
    }

    public function equipmentType()
    {
        return $this->belongsTo(EquipmentType::class);
    }
}

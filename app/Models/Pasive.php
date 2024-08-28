<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasive extends Model
{
    use HasFactory;

    public function especialization()
    {
        return $this->belongsTo(Especialization::class);
    }
}

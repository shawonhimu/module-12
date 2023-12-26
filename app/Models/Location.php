<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    public function trip()
    {
        return $this->hasOne(Trip::class);
    }

    public function schedule()
    {
        return $this->hasOne(Schedule::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;
    protected $fillable = [
        'bus_number', 'name', 'capacity',
     ];
    public function schedule()
    {
        return $this->hasOne(Schedule::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable = [ 'name', 'phone', 'address', 'password' ];
    public function trip()
    {
        return $this->hasMany(Trip::class); // means many seat actually
    }

    public function schedule()
    {
        return $this->hasOne(Schedule::class); // one schedule has one bus one driver one trip
    }

    public function location()
    {
        return $this->hasOne(Location::class);
    }
}

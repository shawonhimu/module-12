<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $fillable = [
        'departure_time', 'arrival_time', 'trip_date', 'active_status', 'schedule_dir', 'bus_id', 'driver_id', 'supervisor_id',
     ];

    public function trip()
    {
        return $this->hasMany(Trip::class); //many seats for someone
    }

    public function bus()
    {
        return $this->belongsTo(Bus::class);
    }

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }

    public function supervisor()
    {
        return $this->belongsTo(Supervisor::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}

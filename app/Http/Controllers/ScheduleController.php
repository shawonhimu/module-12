<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\Driver;
use App\Models\Schedule;
use App\Models\Supervisor;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    //=======  Display a listing of the resource =======//

    public function index()
    {
        $scheduleData = Schedule::select('id', 'departure_time', 'arrival_time', 'trip_date', 'active_status')->get();
        return view('DashboardSchedule', [ 'schedules' => $scheduleData ]);
    }

    //=========  Show the form for creating a new resource  =========//

    public function create()
    {
        $buses = Bus::select('id', 'name', 'bus_number')->get();
        $divers = Driver::select('id', 'name', 'phone')->get();
        $supervisors = Supervisor::select('id', 'name', 'phone')->get();
        return view('AddSchedule', [ 'buses' => $buses, 'divers' => $divers, 'supervisors' => $supervisors ]);
    }

    //=========   Store a newly created resource in storage  ===========//

    public function store(Request $request)
    {
        $departureTime = $request->input('departureTime');
        $arrivalTime = $request->input('arrivalTime');
        $tripDate = $request->input('tripDate');
        $scheduleDir = $request->input('scheduleDir');
        $activeStatus = $request->input('activeStatus');
        $busId = $request->input('busId');
        $driverId = $request->input('driverId');
        $supervisorId = $request->input('supervisorId');

        // to create or insert new item to schedule model
        $schedule = new Schedule();
        $isSchedule = $schedule->where('departure_time', $departureTime)->where('departure_time', $arrivalTime)->first();
        if (!$isSchedule) {
            $schedule->departure_time = $departureTime;
            $schedule->arrival_time = $arrivalTime;
            $schedule->trip_date = $tripDate;
            $schedule->schedule_dir = $scheduleDir;
            $schedule->active_status = $activeStatus;
            $schedule->bus_id = $busId;
            $schedule->driver_id = $driverId;
            $schedule->supervisor_id = $supervisorId;
            $schedule->save();
            return redirect('/new-schedule')->with('success', "Schedule added successfully");
        } else {
            return redirect('/new-schedule')->with('error', "Schedule already exists");
        }
    }

    //=========  Display the specified resource   ===========//

    public function show(string $id)
    {
        //
    }

    //=========  Show the form for editing the specified resource   ========//
    public function edit(string $id)
    {
        //
    }

    //==========  Update the specified resource in storage   =========//

    public function update(Request $request, string $id)
    {
        //
    }

    //==========  Remove the specified resource from storage   ==========//

    public function destroy(string $id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Schedule;
use App\Models\Trip;
use App\Models\User;
use Illuminate\Http\Request;

class TripController extends Controller
{
    //=======  Display a listing of the resource =======//

    public function index(Request $request)
    {
        // User Details
        $userPhone = $request->session()->get('phone');
        $userName = User::where('phone', '=', $userPhone)->value('name');
        $scheduleData = Schedule::where('active_status', '=', true)->get();
        $locations = Location::get();
        return view('Ticket', [ 'schedules' => $scheduleData, 'locations' => $locations, 'userName' => $userName ]);
        // return [ 'schedules' => $scheduleData, 'locations' => $locations, 'allSeats' => $allSeats ];
    }

    //=======  Display all seat listing of the resource =======//

    public function availabeScheduleSeat($id)
    {
        $allBookedSeats = Trip::where('schedule_id', '=', $id)->select('seat_name')->get();

        $countBookedSeats = Trip::where('schedule_id', '=', $id)->select('seat_name')->count();
        $schedule = Schedule::with('bus')->find($id);
        $busCapacity = $schedule->bus->capacity;
        // $busCapacity = 38;
        if ($busCapacity == $countBookedSeats) {
            return response()->json([
                'allSeats' => $allBookedSeats,
                'noseat' => 'No seat available, Please try another schedule',
             ]);
        } else {

            return [ 'allSeats' => $allBookedSeats ];
        }
    }

    //=========  Show the form for creating a new resource  =========//

    public function create()
    {
        //
    }

    //=========   Store a newly created resource in storage  ===========//

    public function store(Request $request)
    {
        $seatName = $request->input('seatName');
        $sellStatus = 1;
        //get auto logged user
        $userPhone = $request->session()->get('phone');
        $userId = User::where('phone', '=', $userPhone)->value('id');
        //end getting auto logged user
        $locationId = $request->input('locationId');
        $scheduleId = $request->input('scheduleId');
        //As unique phone no
        $isSold = Trip::where('seat_name', $seatName)->where('schedule_id', $scheduleId)->where('sell_status', '=', 1)->value('id');

        $countBookedSeats = Trip::where('schedule_id', '=', $scheduleId)->select('seat_name')->count();
        $schedule = Schedule::with('bus')->find($scheduleId);
        $busCapacity = $schedule->bus->capacity;
        // $busCapacity = 36;

        if ($countBookedSeats <= $busCapacity & $seatName != null) {

            if (!$isSold) {
                Trip::create(
                    [
                        'seat_name' => $seatName,
                        'sell_status' => $sellStatus,
                        'user_id' => $userId,
                        'location_id' => $locationId,
                        'schedule_id' => $scheduleId,
                     ]
                );
                return redirect('/')->with('success', 'You have successfully buy ticket');
            } else {
                return redirect('/')->with('error', 'Something wrong, try again');
            }
            // return [ 'allSeats' => $allBookedSeats ];

        } else {
            return redirect('/')->with(
                'error', 'Something wrong, Please try again',
            );
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

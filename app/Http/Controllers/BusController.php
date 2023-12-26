<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use Illuminate\Http\Request;

class BusController extends Controller
{
    //=======  Display a listing of the resource =======//

    public function index()
    {
        $busData = Bus::all();
        return $busData;
    }

    //=========  Show the form for creating a new resource  =========//

    public function create()
    {
        return view('AddBus');
    }

    //=========   Store a newly created resource in storage  ===========//

    public function store(Request $request)
    {
        $busNumber = $request->input('busNumber');
        $busName = $request->input('busName');
        $busCapacity = $request->input('busCapacity');

        // to create or insert new item to bus model
        $bus = new Bus();
        $isBus = $bus->where('bus_number', $busNumber)->first();
        if (!$isBus) {
            $bus->bus_number = $busNumber;
            $bus->name = $busName;
            $bus->capacity = $busCapacity;
            $bus->save();
            return "Bus added successfully";
        } else {
            return "This bus already exists";
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
        return view('EditBus');
    }

    //==========  Update the specified resource in storage   =========//

    public function update(Request $request, string $id)
    {
        $busName = $request->input('busName');
        $busNumber = $request->input('busNumber');
        $busCapacity = $request->input('busCapacity');

        $bus = Bus::findOrFail($id);
        if ($bus) {
            $bus->name = $busName;
            $bus->bus_number = $busNumber;
            $bus->capacity = $busCapacity;
            $bus->save();
            return "Bus has updated successfully";
        } else {
            return "Failed ! Something wrong, try again";
        }
    }

    //==========  Remove the specified resource from storage   ==========//

    public function destroy(string $id)
    {
        //
    }
}

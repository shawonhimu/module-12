<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    //=======  Display a listing of the resource =======//

    public function index()
    {
        $driverData = Driver::all();
        return $driverData;
    }

    //=========  Show the form for creating a new resource  =========//

    public function create()
    {
        //
    }

    //=========   Store a newly created resource in storage  ===========//

    public function store(Request $request)
    {
        $name = $request->input('name');
        $phone = $request->input('phone');
        $address = $request->input('address');

        // to create or insert new item to driver model
        $driver = new Driver();
        $isPhone = $driver->where('phone', $phone)->first();
        if (!$isPhone) {
            $driver->name = $name;
            $driver->phone = $phone;
            $driver->address = $address;
            $driver->save();
            return "Driver added successfully";
        } else {
            return "Driver already exists";
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
        $name = $request->input('name');
        $phone = $request->input('phone');
        $address = $request->input('address');

        // to create or insert new item to driver model
        $driver = Driver::findOrFail($id);

        if ($driver) {
            $driver->name = $name;
            $driver->phone = $phone;
            $driver->address = $address;
            $driver->save();
            return "Driver added successfully";
        } else {
            return "Driver already exists";
        }
    }

    //==========  Remove the specified resource from storage   ==========//

    public function destroy(string $id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Supervisor;
use Illuminate\Http\Request;

class SupervisorController extends Controller
{
    //=======  Display a listing of the resource =======//

    public function index()
    {

        $supervisorData = Supervisor::all();
        return view('DashboardSupervisor', [ 'supervisors' => $supervisorData ]);
    }

    //=========  Show the form for creating a new resource  =========//

    public function create()
    {
        return view('AddSupervisor');
    }

    //=========   Store a newly created resource in storage  ===========//

    public function store(Request $request)
    {
        $name = $request->input('name');
        $phone = $request->input('phone');
        $address = $request->input('address');

        // to create or insert new item to driver model
        $driver = new Supervisor();
        $isPhone = $driver->where('phone', $phone)->first();
        if (!$isPhone) {
            $driver->name = $name;
            $driver->phone = $phone;
            $driver->address = $address;
            $driver->save();
            return redirect('/new-driver')->with('success', "Driver added successfully");
        } else {
            return redirect('/new-driver')->with('error', "Driver already exists");
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

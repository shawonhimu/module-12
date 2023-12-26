<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //=======  Display a listing of the resource =======//

    public function index()
    {
        return view('User');
    }

    //=========  Show the form for creating a new resource  =========//

    public function create(Request $request)
    {
        //
    }

    //=========   Store a newly created resource in storage  ===========//

    public function store(Request $request)
    {
        $name = $request->input('name');
        $phone = $request->input('phone');
        $address = $request->input('address');
        $password = $request->input('password');
        //As unique phone no
        $isPhone = User::where('phone', $phone)->value('id');
        if (null != $phone) {
            User::updateOrCreate(
                [ 'id' => $isPhone ], [
                    'name' => $name,
                    'phone' => $phone,
                    'address' => $address,
                    'password' => $password,
                 ]
            );
            return "User created or updated successfully";
        } else {
            return "Failed! Something went wrong ";
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

<?php

namespace App\Http\Controllers;

use App\Models\Trip;

class AdminHomeController extends Controller
{

    //=======  Display a listing of the resource =======//

    public function index()
    {
        $homeData = Trip::all();
        return view('DashboardHome', [ 'homeData' => $homeData ]);
    }
}

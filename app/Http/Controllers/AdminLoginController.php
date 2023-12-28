<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{

    // ====== show login form =========== //
    public function Login(Request $request)
    {
        // if (($request->session()->has('username')) && ($request->session()->has('adminPass'))) {
        //     return redirect('/home');
        // } else {
        return view('AdminLogin');
        // }

    }

    //============= logout ===========//
    public function onLogout(Request $request)
    {
        $request->session()->flush();
        return redirect('/admin');
    }

    // ============= Login Process ===============//
    public function onLogin(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        $userConfirm = Admin::where('username', '=', $username)->where('password', '=', $password)->count();

        if (1 == $userConfirm) {
            $request->session()->put('username', $username);
            $request->session()->put('adminPass', $password);
            return redirect('/home')->with('success', 'Successfully login !');

        } else {
            return redirect('/admin')->with('error', 'Wrong username or password');
        }

    }

}

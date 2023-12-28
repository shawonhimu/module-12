<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserLoginController extends Controller
{
    // ====== show login form =========== //
    public function Login(Request $request)
    {
        // if (($request->session()->has('phone')) && ($request->session()->has('password'))) {
        //     return redirect('/');
        // } else {
        return view('UserLogin');
        // }

    }

    //============= logout ===========//
    public function onLogout(Request $request)
    {
        $request->session()->flush();
        return redirect('/login');
    }

    // ============= Login Process ===============//
    public function onLogin(Request $request)
    {
        $phone = $request->input('userphone');
        $password = $request->input('password');

        $userConfirm = User::where('phone', '=', $phone)->where('password', '=', $password)->count();

        if (1 == $userConfirm) {
            $request->session()->put('phone', $phone);
            $request->session()->put('password', $password);
            return redirect('/')->with('success', 'Successfully login !');

        } else {
            return redirect('/login')->with('error', 'Wrong username or password');
        }

    }

    //================= Registrtion  form  ===============//

    public function registrationForm(Request $request)
    {
        if (($request->session()->has('phone')) && ($request->session()->has('password'))) {
            return redirect('/');
        } else {
            return view('UserRegister');
        }
    }

    //================= Registrtion ===============//

    public function registration(Request $request)
    {
        $name = $request->input('name');
        $phone = $request->input('phone');
        $address = $request->input('address');
        $password = $request->input('password');
        $conFirmPassword = $request->input('conFirmPassword');
        $isPhone = User::where('phone', '=', $phone)->first();
        if ($conFirmPassword != $password) {
            return redirect('registration')->with('error', "Wrong password to match . Try again !");
        } else {
            if (!$isPhone) {
                $result = User::create([
                    'name' => $name,
                    'phone' => $phone,
                    'address' => $address,
                    'password' => $password,
                 ]);
                if ($result) {
                    return redirect('login')->with('success', 'Registration successful ! Please Login.');
                } else {
                    return redirect('registration')->with('error', 'Failed to register !');
                }
            } else {
                return redirect('registration')->with('error', 'Phone number has already used ! Please login  ');
            }
        }
    }
}

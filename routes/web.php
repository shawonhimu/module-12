<?php

use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\SupervisorController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserLoginController;
use Illuminate\Support\Facades\Route;

//========      Admin Route      =========//

Route::get('/admin', [ AdminLoginController::class, 'Login' ]);
Route::post('/admin', [ AdminLoginController::class, 'onLogin' ]);

//=========== Admin All Route ============//

Route::middleware([ 'AdminLogin' ])->group(function () {

    //========      Admin Route      =========//

    Route::get('/admin-logout', [ AdminLoginController::class, 'onLogout' ]);
    Route::get('/home', [ AdminHomeController::class, 'index' ]);

    //========      Bus Route      =========//

    Route::get('/bus', [ BusController::class, 'index' ])->middleware('AdminLogin');
    Route::post('/bus', [ BusController::class, 'store' ])->middleware('AdminLogin');

    //========      Driver Route      =========//

    Route::get('/driver', [ DriverController::class, 'index' ]);
    Route::get('/new-driver', [ DriverController::class, 'create' ]);
    Route::post('/driver', [ DriverController::class, 'store' ]);

    //========      Supervisor Route      =========//

    Route::get('/supervisor', [ SupervisorController::class, 'index' ]);
    Route::get('/new-supervisor', [ SupervisorController::class, 'create' ]);
    Route::post('/supervisor', [ SupervisorController::class, 'store' ]);

    //========      Location Route      =========//

    Route::get('/location', [ LocationController::class, 'index' ]);
    Route::post('/location', [ LocationController::class, 'store' ]);

    //========      Transaction Route      =========//

    Route::get('/transaction', [ TransactionController::class, 'index' ]);
    Route::post('/transaction', [ TransactionController::class, 'store' ]);

    //========      Schedule Route      =========//

    Route::get('/schedule', [ ScheduleController::class, 'index' ]);
    Route::get('/new-schedule', [ ScheduleController::class, 'create' ]);
    Route::post('/schedule', [ ScheduleController::class, 'store' ]);

    //========      User Route      =========//

    Route::get('/user', [ UserController::class, 'index' ]);
    Route::post('/user', [ UserController::class, 'store' ]);

});

//========      Trip Route      =========//

Route::get('/', [ TripController::class, 'index' ])->middleware('CheckLogin');
Route::post('/book-ticket', [ TripController::class, 'store' ])->middleware('CheckLogin');
Route::get('/available-ticket/{id}', [ TripController::class, 'availabeScheduleSeat' ])->middleware('CheckLogin');

//========      User Login      =========//

Route::get('/login', [ UserLoginController::class, 'Login' ]);
Route::post('/login', [ UserLoginController::class, 'onLogin' ]);
Route::get('/logout', [ UserLoginController::class, 'onLogout' ]);
Route::get('/registration', [ UserLoginController::class, 'registrationForm' ]); //registration form
Route::post('/registration', [ UserLoginController::class, 'registration' ]); //registration process

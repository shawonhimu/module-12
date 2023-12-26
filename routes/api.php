<?php

use App\Http\Controllers\BusController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\SupervisorController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//========      Bus Route      =========//

Route::get('/bus', [ BusController::class, 'index' ]);
Route::post('/bus', [ BusController::class, 'store' ]);

//========      Driver Route      =========//

Route::get('/driver', [ DriverController::class, 'index' ]);
Route::post('/driver', [ DriverController::class, 'store' ]);

//========      Supervisor Route      =========//

Route::get('/supervisor', [ SupervisorController::class, 'index' ]);
Route::post('/supervisor', [ SupervisorController::class, 'store' ]);

//========      Location Route      =========//

Route::get('/location', [ LocationController::class, 'index' ]);
Route::post('/location', [ LocationController::class, 'store' ]);

//========      Transaction Route      =========//

Route::get('/transaction', [ TransactionController::class, 'index' ]);
Route::post('/transaction', [ TransactionController::class, 'store' ]);

//========      Schedule Route      =========//

Route::get('/schedule', [ ScheduleController::class, 'index' ]);
Route::post('/schedule', [ ScheduleController::class, 'store' ]);

//========      User Route      =========//

Route::get('/user', [ UserController::class, 'index' ]);
Route::post('/user', [ UserController::class, 'store' ]);

//========      Trip Route      =========//

Route::get('/ticket', [ TripController::class, 'index' ]);
Route::post('/book-ticket', [ TripController::class, 'store' ]);
Route::get('/available-ticket/{id}', [ TripController::class, 'availabeScheduleSeat' ]);

<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DriverController;
use App\Http\Controllers\Api\PassengerRideController;

Route::post('/rides', [PassengerRideController::class, 'create']);
Route::post('/rides/{ride}/approve', [PassengerRideController::class, 'approveDriver']);
Route::post('/rides/{ride}/passenger-complete', [PassengerRideController::class, 'complete']);

Route::post('/drivers/location', [DriverController::class, 'updateLocation']);
Route::get('/drivers/rides', [DriverController::class, 'nearbyRides']);
Route::post('/drivers/rides/{ride}/claim', [DriverController::class, 'claimRide']);
Route::post('/drivers/rides/{ride}/complete', [DriverController::class, 'completeRide']);
?>
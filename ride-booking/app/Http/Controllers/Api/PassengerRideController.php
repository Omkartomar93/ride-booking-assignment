<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ride;


class PassengerRideController extends Controller
{
    public function create(Request $request)
    {
        $ride = Ride::create($request->all());
        return response()->json($ride);
    }

    public function approveDriver($rideId, Request $request)
    {
        $ride = Ride::findOrFail($rideId);
        $ride->driver_id = $request->driver_id;
        $ride->status = 'claimed';
        $ride->save();

        return response()->json($ride);
    }

    public function complete($rideId)
    {
        $ride = Ride::findOrFail($rideId);
        $ride->passenger_completed = true;

        if ($ride->driver_completed) {
            $ride->status = 'completed';
        }

        $ride->save();
        return response()->json($ride);
    }
}

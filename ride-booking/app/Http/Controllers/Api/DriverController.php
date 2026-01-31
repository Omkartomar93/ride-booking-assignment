<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DriverLocation;


class DriverController extends Controller
{
    public function updateLocation(Request $request)
    {
        DriverLocation::updateOrCreate(
            ['driver_id' => $request->driver_id],
            ['lat' => $request->lat, 'lng' => $request->lng]
        );

        return response()->json(['status' => 'location updated']);
    }

    public function nearbyRides(Request $request)
    {
        return Ride::where('status', 'pending')->get();
    }

    public function claimRide($rideId, Request $request)
    {
        $ride = Ride::findOrFail($rideId);
        $ride->driver_id = $request->driver_id;
        $ride->status = 'claimed';
        $ride->save();

        return response()->json($ride);
    }

    public function completeRide($rideId)
    {
        $ride = Ride::findOrFail($rideId);
        $ride->driver_completed = true;

        if ($ride->passenger_completed) {
            $ride->status = 'completed';
        }

        $ride->save();
        return response()->json($ride);
    }
}

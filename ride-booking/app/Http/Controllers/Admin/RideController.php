<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ride;


class RideController extends Controller
{
    public function index()
    {
        return view('admin.rides.index', [
            'rides' => Ride::with(['passenger', 'driver'])->get()
        ]);
    }

    public function show(Ride $ride)
    {
        return view('admin.rides.show', compact('ride'));
    }
}

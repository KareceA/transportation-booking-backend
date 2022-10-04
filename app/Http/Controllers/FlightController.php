<?php

namespace App\Http\Controllers;

use App\Models\FlightAvailability;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    public function findFlight()
    {
        // $flights = FlightAvailability::table('flight_availabilities')
        //     ->where('from', 'Accra')
        //     ->get();
        $flights = FlightAvailability::where('from', 'Accra')->where('to', 'Takoradi')->get();

        return response()->json($flights);
    }

    public function list()
    {
        $flights = FlightAvailability::all();

        return response()->json($flights);
    }
}

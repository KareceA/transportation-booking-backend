<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\FlightAvailability;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    public function findFlight(Request $request)
    {
        $flights = FlightAvailability::where('from', $request->from)->where('to', $request->to)->get();

        return response()->json($flights);
    }

    public function list()
    {
        $flights = FlightAvailability::all();

        return response()->json($flights);
    }

    public function bookticket(Request $request)
    {
        //insert booking into db to be retrieved by user ID
        $flights = new Booking();

        $flights->datetime = $request->input('datetime');
        $flights->time = $request->input('time');
        $flights->from = $request->input('from');
        $flights->to = $request->input('to');
        $flights->class = $request->input('class');
        $flights->cost = $request->input('cost');
        $flights->user_id = $request->input('user_id');

        $flights->save();
        return response()->json($flights);
    }

    //return tickets where id 
}

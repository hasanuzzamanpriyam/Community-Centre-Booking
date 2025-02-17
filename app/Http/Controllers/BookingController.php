<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::all()->map(function ($booking) {
            $booking->is_available = rand(0, 1); // Randomly assign available/unavailable status
            return $booking;
        });

        return view('welcome', compact('bookings'));
    }

    public function filterByDate(Request $request)
    {
        $date = $request->input('date');
        $bookings = Booking::where('booking_date', $date)->get();

        return response()->json($bookings);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Booking;

class AdminController extends Controller
{
    public function index()
    {
        $bookings = Booking::all();
        return view('booking_list', compact('bookings'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'booking_date' => 'required',
            'event_name' => 'required',
            'description' => 'required',
            'comminity_name' => 'required',
        ]);

        $user = Auth::user();
        if ($user) {
            $booking = new Booking();
            $booking->comminity_name = $validated['comminity_name'];
            $booking->booking_date = $validated['booking_date'];
            $booking->event_name = $validated['event_name'];
            $booking->description = $validated['description'];
            $booking->user_id = $user->id;
            $booking->save();
            return redirect(route('booking.list', absolute: false));
        }
    }

    public function edit($id)
    {
        $booking = Booking::find($id);
        return view('booking_edit', compact('booking'));
    }

    public function destroy($id)
    {
        $booking = Booking::find($id);
        $booking->delete();
        return redirect(route('booking.list', absolute: false));
    }

    public function update(Request $request, $id)
    {
        $user = Auth::user();
        if ($user) {
            $booking = Booking::find($id)->first();
            $booking->booking_date = $request->booking_date;
            $booking->comminity_name = $request->comminity_name;
            $booking->event_name = $request->event_name;
            $booking->description = $request->description;
            $booking->user_id = $user->id;
            $booking->save();
            return redirect(route('booking.list', absolute: false));
        }
    }
}

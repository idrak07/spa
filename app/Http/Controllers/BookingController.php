<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Booking;

class BookingController extends Controller
{
    public function bookAppointment(Request $request, $id) {
        if ($request->session()->has('user_id')) {
            $booking = Booking::create([
                'user_id' => $request->session()->get('user_id'),
                'appointment_id' =>  $id
            ]);
            $request->session()->flash('booked_msg', 'Reservation complete!');
            return redirect('/');
        } else {
            $request->session()->put('booking_onway', $id);
            return redirect('/login');
        }
    }
}

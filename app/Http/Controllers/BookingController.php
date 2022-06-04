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
                'appointment_id' =>  $id,
                'status' => 'REQUESTED'
            ]);
            $request->session()->flash('booked_msg', 'Reservation requested!');
            return redirect('/');
        } else {
            return redirect('/login');
        }
    }
}

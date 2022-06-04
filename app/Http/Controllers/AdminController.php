<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Booking;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function home()
    {
        $users = DB::select("select distinct u.*, app.start_time, app.end_time from users as u INNER join bookings as b on u.id =b.user_id INNER join appointments as app on app.id = b.appointment_id where app.appointment_date = ?", [date('Y-m-d')]);
        return view('admin.home', ['users' => $users]);
        // return $users;
    }

    public function manageSchedule()
    {
        return view('admin.manageschedule');
    }


    public function history()
    {
        $users = DB::select("select distinct u.*, app.start_time, app.end_time, app.appointment_date from users as u INNER join bookings as b on u.id =b.user_id INNER join appointments as app on app.id = b.appointment_id order by app.appointment_date desc");
        return view('admin.history', ['users' => $users]);
    }

    public function addslot()
    {
        return view('admin.addslot');
    }

    public function postslot(Request $request) {
        return Appointment::create([
            'appointment_date' => $request->date,
            'start_time' => $request->startTime,
            'end_time' => $request->endTime,

        ]);
    }

    public function getAppointment(Request $req)
    {
        $appointments = Appointment::where('appointment_date', $req->date)->get();
        return view('admin.appointment', ['appointments' => $appointments]);
    }
    public function showReservations(Request $request, $id) {
        // $users = DB::table('users')
        //         ->join('bookings', 'users.id', '=', 'bookings.user_id')
        //         ->where('bookings.appointment_id', '=', $id)
        //         ->distinct()
        //         ->get();
        $users = DB::select('select distinct * from users where id in (select user_id from bookings where  appointment_id = ? )', [$id]);
        return view('admin.reservation', ['users' => $users, 'r_id' => $id]);
    }

    public function confirmBooking($reservationId, $id)
    {
        $booking = Booking::where('appointment_id', $reservationId)->where('user_id', $id)->first();
        $booking->status = 'CONFIRMED';
        $booking->save();
        return $booking;
    }
}

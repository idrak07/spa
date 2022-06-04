<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function view(Request $request)
    {
        return view('home');
    }

    public function getMyAppointment(Request $request)
    {
        $appointments = DB::select("SELECT distinct app.*, b.status FROM appointments as app INNER JOIN bookings as b ON app.id = b.appointment_id WHERE b.user_id=?", [$request->session()->get('user_id')]);
        return view('myappointments', ['appointments' => $appointments]);
    }
}

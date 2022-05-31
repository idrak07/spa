<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    public function getAppointment(Request $req)
    {
        $appointments = Appointment::where('appointment_date', $req->date)->get();
        return view('appointment', ['appointments' => $appointments]);
    }
}

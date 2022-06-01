<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class HomeController extends Controller
{
    public function view(Request $request)
    {
        if($request->session()->exists('booking_onway')) {
            return redirect('/book/' . $request->session()->get('booking_onway'));
        }
        else{
            return view('home');
        }
    }
}

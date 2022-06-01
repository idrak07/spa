<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class LoginController extends Controller
{
    public function getLogin() {
        return view('login');
    }

    public function login(Request $request) {
        $user = User::where('email', $request->email)->where('password', $request->password)->first();
        if($user != null) {
            $request->session()->put('user_id', $user->id);
            return redirect('/');
        } else {
            $request->session()->forget('id');
            $request->session()->flash('loginError', 'invalid email or password!');
            return redirect('/login');
        }
    }

    public function logout(Request $request) {
        $request->session()->flush();
        return redirect('/');
    }

    public function getRegister() {
        return view('register');
    }

    public function register(Request $request) {
        if(User::where('email', $request->email)->first()  == null) {
            $user = User::create([
                'first_name' => $request->firstName,
                'last_name' => $request->lastName,
                'email' => $request->email,
                'password' => $request->password,
                'role' => 'USER',
                'gender' => $request->gender,
                'address' => $request->address,
                'phone' => $request->firstName
            ]);

            $request->session()->put('user_id', $user->id);
            $request->session()->put('name', $user->name);
            $request->session()->put('role', 'USER');
            return redirect('/');
        }
        else {
            $request->session()->flash('signUpError', 'Email already in use');
            return redirect('/register');
        }
    }
}

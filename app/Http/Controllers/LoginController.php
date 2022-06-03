<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function getLogin() {
        return view('login');
    }

    public function login(Request $request) {
        $user = User::where('email', $request->email)->first();
        if($user != null) {
            if(Hash::check($request->password, $user->password)) {
                $request->session()->put('user_id', $user->id);
                $request->session()->put('role', $user->role);
                if($user->role == 'ADMIN') {
                    // return "admin";
                    return redirect('/admin');
                } else {
                    return "user";
                }
            } else {
                $request->session()->forget('user_id');
                $request->session()->flash('loginError', 'invalid email or password!');
                return redirect('/login');
            }
        } else {
            $request->session()->forget('user_id');
            $request->session()->flash('loginError', 'invalid email or password!');
            return redirect('/login');
        }
        // return $user;
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

    public function getProfile(Request $request) {
        $user = User::find($request->session()->get('user_id'));
        if($user != null) {
            return view('profile', ['user' => $user]);
        } else {
            $request->session()->forget('id');
            $request->session()->flash('loginError', 'invalid email or password!');
            return redirect('/login');
        }
    }
}

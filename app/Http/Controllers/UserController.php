<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function login()
    {
        if (auth()->check()) {
            return redirect('/tasks')->with('message', 'Already Logged In');
        } else {
            return view('login');
        }
    }

    public function registerDisplay()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $formfields = $request->validate([
            "name" => ["required", "string"],
            "email" => ["required", "email", "confirmed"],
            "password" => 'required|confirmed|min:6',
        ]);

        $formfields["password"] = bcrypt($formfields["password"]);

        $newUser = User::create($formfields);
        auth()->login($newUser);

        return redirect('/tasks')->with('message', 'User created and logged in');
    }


    public function authenticate(Request $request)
    {
        $formfields = $request->validate([
            "email" => ["required", "email"],
            "password" => 'required|confirmed|min:6',
        ]);

        if (auth()->attempt($formfields, $request["remember"])) {
            $request->session()->regenerate();
            return redirect('/tasks')->with('message', 'You are now logged in!');
        };

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerate();

        return redirect('/')->with('message', 'You have been logout!');
    }
}

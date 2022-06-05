<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function create(){
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            'name' => ['required'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            return redirect()->intended('products');
        }
        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ]);
    }
    public function destroy(){
        Auth::logout();
        return redirect('/login')->with('success', 'Goodbye!');
    }
}

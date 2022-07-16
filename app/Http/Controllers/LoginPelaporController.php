<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginPelaporController extends Controller
{
    public function index()
    {
        return view('login-pelapor');
    }

    public function auth(Request $request)
    {
        // $credentials = $request->validate([
        //     'email_korban' => 'required|email',
        //     'password' => 'required'
        // ]);

        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();

        //     return redirect()->intended('/homepage');
        // }

        // return back()->with('loginError', 'Login failed!!');
        $request->validate([
            'email_korban' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email_korban', 'password');

        if (Auth::guard('pelapor')->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('homepage');
        }

        return back()->withErrors([
            'credentials' => 'Your credentials are wrong'
        ])->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/homepage');
    }
}

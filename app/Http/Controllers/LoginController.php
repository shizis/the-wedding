<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('pages.login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // $user = User::where('email', '=', $request->email)->first();
        $userAngga = User::where('email', '=', 'anggalaras@wedding.com')->first();
        if ($request->email == $userAngga->email) {
            if (Hash::check($request->password, $userAngga->password)) {
                $request->session()->put('isLoggedIn', Hash::make($request->password));
                return redirect('guess');
            } else {
                return back()->with('fail', 'Password Salah!');
            }
        } else {
            return back()->with('fail', 'Email Salah!');
        }
    }

    public function logout()
    {
        if (Session::has('isLoggedIn')) {
            Session::pull('isLoggedIn');
            return redirect('login');
        }
    }
}

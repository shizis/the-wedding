<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Session;

class GuessController extends Controller
{
    public function index()
    {
        if (Session::has('isLoggedIn')) {
            $user = User::where('name', '=', 'anggalaras')->first();
            return view('pages.guess', [
                'name' => $user->name
            ]);
        }
        return redirect('login');
    }
}

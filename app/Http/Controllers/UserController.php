<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    
    public function login(Request $request) {

        if($request->input()) {
            $credentials = $request->validate([
                'email' => ['required'],
                'password' => ['required'],
            ]);
    
            if (Auth::attempt(['approve' => '1', 'email' => $request->input('email'), 'password' => $request->input('password')])) {
                $request->session()->regenerate();
    
                return redirect()->intended('/');
            }
    
        }

        return view('login/login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/home');
    }
}



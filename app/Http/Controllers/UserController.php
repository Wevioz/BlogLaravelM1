<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Mail;
use App\Mail\SignupMail;

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
            } else {
                return redirect()->back()->with('message', 'Mauvais identifiants');
            }
    
        }

        return view('login/login');
    }

    public function signup(Request $request) {

        if($request->input()) {
            $credentials = $request->validate([
                'name' => ['required'],
                'email' => ['required'],
                'password' => ['required'],
            ]);

            $user = new User;
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password = $request->input('password');
            $user->isAdmin = 0;
            $user->approve = 0;

            $user->save();
    
            $name = 'Cloudways';
            Mail::to($user->email)->send(new SignupMail($user));
   
            return redirect()->back()->with('message', 'Vous avez été inscrit, il ne vous reste plus qu\'à attendre la validation d\'un administrateur.');
    
        }

        return view('login/signup');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/home');
    }
}



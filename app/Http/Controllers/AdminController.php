<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    
    public function listUnapprovedUsers(Request $request) {
        $users = User::where('approve', '=', 0)->get();

        return view('admin/list', compact('users'));
    }

    public function validateUser(Request $request, $userId) {
        
        $user = User::find($userId);
        $user->approve = 1;
        $user->save();
        return redirect()->back();
    }
}



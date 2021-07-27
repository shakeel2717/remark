<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;

class adminAuth extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
    }


    public function loginReq(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|alpha_dash|min:4|max:30|exists:admins',
            'password' => 'required|min:4|max:50',
        ]);

        $query = admin::where('username',$validated['username'])->where('password',$validated['password'])->get();
        if (count($query) < 0) {
            return redirect()->back()->withErrors('Wrong Username or Password, Please Try Again');
        }

        // Storing login deatil into session.
        session(['admin' => $query]);
        return redirect()->route('adminDashboard');
    }

}
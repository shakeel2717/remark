<?php

namespace App\Http\Controllers;

use App\Models\loginHistory;
use App\Models\users;
use Illuminate\Http\Request;

class profile extends Controller
{
    public function index()
    {
        return view('dashboard.profile',[
            'login_history' => loginHistory::where('users_id',session('user')[0]->id)->latest()->limit(5)->get(),
        ]);
    }


    public function profileReq(Request $request)
    {
        $validated = $request->validate([
            'fname' => 'required|string|min:3|max:15',
            'lname' => 'required|string|min:3|max:15',
        ]);

        // Upading Record
        $task = users::find(session('user')[0]->id);
        $task->fname = $validated['fname'];
        $task->lname = $validated['lname'];
        $task->save();
        // refreshing Session Data
        session('user')[0]->fname = $validated['fname'];
        session('user')[0]->lname = $validated['lname'];
        return redirect()->back()->with('message', 'Profile Record Successfully Updated');
    }


    public function changePasswordReq(Request $request)
    {
        $validated = $request->validate([
            'currentPassword' => 'required|string|min:8|max:50',
            'newPassword' => 'required|confirmed|string|min:8|max:50',
        ]);

        // checking current password
        if ($validated['currentPassword'] != session('user')[0]->password ) {
            return redirect()->back()->withErrors('Current Password not Matched, Please try again Later!');
        }

        // Upading Record
        $task = users::find(session('user')[0]->id);
        $task->password = $validated['newPassword'];
        $task->save();

        // refreshing Session Data
        session('user')[0]->password = $validated['newPassword'];
        return redirect()->back()->with('message', 'Password Successfully Updated');
    }

    
}

<?php

namespace App\Http\Controllers;

use App\Mail\resetPassword;
use App\Mail\welcome;
use App\Models\loginHistory;
use App\Models\users;
use Illuminate\Http\Request;
use BrowserDetect;
use Illuminate\Support\Facades\Mail;
use Stevebauman\Location\Facades\Location;

class userAuth extends Controller
{
    public function register()
    {
        return view('auth.register');
    }


    public function registerReq(Request $request)
    {
        $validated = $request->validate([
            'fname' => 'required|string|min:3|max:30',
            'lname' => 'required|string|min:3|max:30',
            'username' => 'required|alpha_num|min:5|max:30|unique:users',
            'email' => 'required|email|min:5|max:30|unique:users',
            'password' => 'required|confirmed|min:8|max:50',
        ]);

        // fetching this user Location Data
        $location = Location::get();
        $city = $location->cityName;
        $country = $location->countryName;

        $token = random(24);

        // inserting into Database
        $task = new users();
        $task->fname = $validated['fname'];
        $task->lname = $validated['lname'];
        $task->username = $validated['username'];
        $task->email = $validated['email'];
        $task->password = $validated['password'];
        $task->token = $token;
        $task->city = $city;
        $task->country = $country;
        $task->save();
        // Storing Email For Print Purpose Only
        session(['notice' => [
            'email' => $validated['email'],
            'username' => $validated['username'],
        ]]);

        // Sending Welcome Email
        Mail::to($validated['email'])->send(new welcome($token));

        return redirect(route('emailVerification'))->with('message', 'User Created Successfully');
    }

    public function emailVerification()
    {
        return view('auth.emailVerification');
    }


    public function emailVerified()
    {
        return view('auth.emailVerified');
    }


    public function resendEmail()
    {
        // getting this user Token
        $query = users::where('email', session('notice'))->first();
        // Sending Welcome Email
        Mail::to(session('notice')['email'])->send(new welcome($query->token));
        return view('auth.emailVerification');
    }


    public function login()
    {
        return view('auth.login');
    }

    public function loginReq(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|min:5|max:30|exists:users',
            'password' => 'required|min:8|max:50',
        ]);

        // checking if Password is Correct for This User
        $query = users::where('email', $validated['email'])->where('password', $validated['password'])->get();
        if (count($query) < 1) {
            return redirect()->back()->withErrors('Wrong Email or Password, Please Try Again');
        }

        // Detecting Browser Detail
        if (BrowserDetect::isMobile()) {
            $device = "Mobile";
        } elseif (BrowserDetect::isTablet()) {
            $device = "Tablet";
        } elseif (BrowserDetect::isDesktop()) {
            $device = "Desktop";
        }

        $location = Location::get();
        // inserting Login History
        $task = new loginHistory();
        $task->users_id = $query[0]->id;
        $task->device = $device;
        $task->os = BrowserDetect::platformName();
        $task->browser = BrowserDetect::browserFamily();
        $task->city = $location->cityName;
        $task->country = $location->countryName;
        $task->save();
        // Storing Session into Session
        session(['user' => $query]);
        return redirect(route('dashboard'));
    }

    public function verifyUserEmail($token)
    {
        // checking if this Token is Valid
        $query = users::where('token',$token)->firstOrFail();
        // Activating Status of this User
        $task = users::find($query->id);
        $task->status = "Active";
        $task->token = "";
        $task->save();
        return redirect(route('emailVerified'))->with('message', 'Email Verified Successfully');

    }


    public function resetPassword()
    {
        return view('auth.resetPassword');
    }

    public function resetPasswordReq(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|min:5|max:30|exists:users',
        ]);

        // Generating a Token for Reset Password
        $token = random(24);
        $task = users::where('email',$validated['email'])->firstOrFail();
        $task->reset_token = $token;
        $task->save();
        session(['notice' => [
            'email' => $validated['email'],
            'username' => $task->username,
        ]]);
        // Sending Reset Password Request Email
        Mail::to($validated['email'])->send(new resetPassword($token));
        return redirect(route('login'))->with('message', 'Please Check your Email for instructions to reset your password');
        
    }

    public function setPassword($token)
    {
        // Storing this Token into Session
        return view('auth.setPassword',[
            'token' => $token
        ]);
    }

    public function setPasswordReq(Request $request)
    {
        $validated = $request->validate([
            'password' => 'required|confirmed|min:8|max:50',
            'token' => 'required',
        ]);

        // getting this user Detail
        $task = users::where('reset_token',$validated['token'])->firstOrFail();
        $task->password = $validated['password'];
        $task->reset_token = "";
        $task->save();
        
        return redirect(route('passwordChanged'))->with('message', 'Password Changed Successfully!');
    }

    public function passwordChanged()
    {
        return view('auth.passwordChanged');
    }

    // Logout
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect(route('login'));
    }
}

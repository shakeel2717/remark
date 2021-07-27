<?php

namespace App\Http\Controllers;

use App\Models\company;
use App\Models\devices;
use App\Models\employee;
use App\Models\orderDevices;
use App\Models\Support;
use App\Models\users;
use Illuminate\Http\Request;

class adminDashboard extends Controller
{
    public function index()
    {

        return view('admin.dashboard.index',[
            'totalUsers' => users::get(),
            'totalDevices' => devices::get(),
            'totalEmployees' => employee::get(),
        ]);
    }

    public function allUsers()
    {
        return view('admin.dashboard.allUsers',[
            'allUsers' => users::get(),
        ]);
    }

    public function allSupports()
    {
        return view('admin.dashboard.allSupports',[
            'allSupports' => Support::get(),
        ]);
    }

}

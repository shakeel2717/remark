<?php

namespace App\Http\Controllers;

use App\Models\address;
use App\Models\assignEmployee;
use App\Models\comment;
use App\Models\devices;
use App\Models\employee;
use App\Models\financeInfo;
use App\Models\historical;
use App\Models\orderDevices;
use App\Models\orders;
use App\Models\tags;
use App\Models\tech_info;
use Carbon\Carbon;
use Illuminate\Http\Request;

class dashboard extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardUserController extends Controller
{
    //
    public function dash()
    {
        return view('dashboard.dashboardUser');
    }
}

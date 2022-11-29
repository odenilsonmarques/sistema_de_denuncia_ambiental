<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Denunciation_with_identification;

class DashboardAdminController extends Controller
{
   public function admin()
    {
      $allUserComplaintsTeste = Auth::user()->denunciation_with_identifications()->count();

        return view('dashboard.dashboardUser',[
            'allUserComplaintsTeste' => $allUserComplaintsTeste,
        ]);
    }
}

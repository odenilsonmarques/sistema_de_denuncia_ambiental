<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Denunciation_with_identification;

class DashboardUserController extends Controller
{
    //definindo a quantidade de itens por pagination
    private $totalPage = 5;
    //
    public function dash()
    {
        $allUserComplaints = Auth::user()->denunciation_with_identifications()->count();

        $allComplaintsInAnalysis = Auth::user()->denunciation_with_identifications()->where('received', '=', 'Em Analise')->count();

        $allComplaintsAccepted = Auth::user()->denunciation_with_identifications()->where('received', '=', 'Deferida')->count();

        $allComplaintsDismissed = Auth::user()->denunciation_with_identifications()->where('received', '=', 'Indeferida')->count();

        return view('dashboard.dashboardUser',[
            'allUserComplaints' => $allUserComplaints,
            'allComplaintsInAnalysis' => $allComplaintsInAnalysis,
            'allComplaintsAccepted' => $allComplaintsAccepted,
            'allComplaintsDismissed' => $allComplaintsDismissed,
        ]);
    }

    public function list(Denunciation_with_identification $denunciationIdentificationUser)
     {
         $denunciations = Auth()->user()->denunciation_with_identifications()->paginate($this->totalPage);
         return view('dashboard.listDenunciationUser',compact('denunciations'));
     }

}

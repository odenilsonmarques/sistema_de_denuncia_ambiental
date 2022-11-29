<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Denunciation_with_identification;
use App\Models\Denunciation_anonymou;

class DashboardUserController extends Controller
{
    //definindo a quantidade de itens por pagination
    private $totalPage = 5;
    //
    public function dash()
    {
        //return dados users logged
        $allUserComplaints = Auth::user()->denunciation_with_identifications()->count();

        $allComplaintsInAnalysis = Auth::user()->denunciation_with_identifications()->where('received', '=', 'Em Analise')->count();

        $allComplaintsAccepted = Auth::user()->denunciation_with_identifications()->where('received', '=', 'Deferida')->count();

        $allComplaintsDismissed = Auth::user()->denunciation_with_identifications()->where('received', '=', 'Indeferida')->count();

        $allComplaintsReceived = Auth::user()->denunciation_with_identifications()->where('received', '=', 'Recebida')->count();


        $allComplaintsWithIdentifications = Denunciation_with_identification::all()->count();

        $allComplaintsAnonymos = Denunciation_anonymou::all()->count();




        return view('dashboard.dashboardUser',[
             //return dados users logged
            'allUserComplaints' => $allUserComplaints,
            'allComplaintsInAnalysis' => $allComplaintsInAnalysis,
            'allComplaintsAccepted' => $allComplaintsAccepted,
            'allComplaintsDismissed' => $allComplaintsDismissed,
            'allComplaintsReceived' => $allComplaintsReceived,

            'allComplaintsWithIdentifications' => $allComplaintsWithIdentifications,
            'allComplaintsAnonymos' => $allComplaintsAnonymos,



        ]);
    }

    public function list(Denunciation_with_identification $denunciationIdentificationUser)
     {
         $denunciations = Auth()->user()->denunciation_with_identifications()->paginate($this->totalPage);
         return view('dashboard.listDenunciationUser',compact('denunciations'));
     }

     

    //  public function admin(){
    //     return view('dashboard.dashboardAdmin');
    //  }
}

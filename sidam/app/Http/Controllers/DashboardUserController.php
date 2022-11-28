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

        $allComplaintsReceived = Auth::user()->denunciation_with_identifications()->where('received', '=', 'Recebida')->count();

        return view('dashboard.dashboardUser',[
            'allUserComplaints' => $allUserComplaints,
            'allComplaintsInAnalysis' => $allComplaintsInAnalysis,
            'allComplaintsAccepted' => $allComplaintsAccepted,
            'allComplaintsDismissed' => $allComplaintsDismissed,
            'allComplaintsReceived' => $allComplaintsReceived,

        ]);
    }

    public function list(Denunciation_with_identification $denunciationIdentificationUser)
     {
         $denunciations = Auth()->user()->denunciation_with_identifications()->paginate($this->totalPage);
         return view('dashboard.listDenunciationUser',compact('denunciations'));
     }

     //criar metodo para tentasr exibir informações individuais em cada modal
     public function displayModal(Request $request, $id)
     {
        $data = Denunciation_with_identification::find($id);
        if($data){
            return view('dashboard.listDenunciationUser',['data' => $data]);
        }else{
            return redirect()->back();
        }
     }

     public function admin(){
        return view('dashboard.dashboardAdmin');
     }
}

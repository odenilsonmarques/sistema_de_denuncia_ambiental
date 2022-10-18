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
        $allsDenunciationUser = Auth::user()->denunciation_with_identifications()->count();

        $allsDenunciationInAnalysis = Auth::user()->denunciation_with_identifications()->where('received', '=', 'Em Analise')->count();

        $allsDenunciationDeferred = Auth::user()->denunciation_with_identifications()->where('received', '=', 'Deferida')->count();

        $allsDenunciationRejected = Auth::user()->denunciation_with_identifications()->where('received', '=', 'Indeferida')->count();

        return view('dashboard.dashboardUser',[
            'allsDenunciationUser' => $allsDenunciationUser,
            'allsDenunciationInAnalysis' => $allsDenunciationInAnalysis,
            'allsDenunciationDeferred' => $allsDenunciationDeferred,
            'allsDenunciationRejected' => $allsDenunciationRejected,
        ]);
    }

    public function list(Denunciation_with_identification $denunciationIdentificationUser)
     {
         $denunciations = Auth()->user()->denunciation_with_identifications()->paginate($this->totalPage);
         return view('dashboard.listDenunciationUser',compact('denunciations'));
     }

}

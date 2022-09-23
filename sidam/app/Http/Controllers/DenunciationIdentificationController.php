<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Denunciation_with_identification;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DenunciationIdentificationController extends Controller
{
     //exibe página de cadastro de denúncia anônima
     public function add()
     {
        return view('denunciationIdentification.add');
     }
     public function create(Request $request)
     {
        //usando essa forma de salvar, pois vou precisar pegar o id do usuario 
        $user = Auth::user()->id;
        $denunciation = new DenunciationIdentificationController;
        $denunciation->category = $request->category;
        $denunciation->district = $request->district;
        $denunciation->road = $request->road;
        $denunciation->number = $request->number;
        $denunciation->reference_point = $request->reference_point;
        $denunciation->violator = $request->violator;
        $denunciation->annex_one = $request->annex_one;
        $denunciation->annex_two = $request->annex_two;
        $denunciation->annex_three = $request->annex_three;
        $denunciation->description = $request->description;
        $denunciation->received = $request->received;
        $denunciation->description_status = $request->description_status;
        $denunciation->user_id = $user;
        $denunciation->save();
        return redirect()->route('homePage');

     }
}

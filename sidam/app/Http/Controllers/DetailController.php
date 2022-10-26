<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Denunciation_anonymou;
use App\Models\Denunciation_with_identification;


class DetailController extends Controller
{
    //exibe os detalhes de cada denuncia
    public function details(Request $request, $id)
    {
        $data = Denunciation_anonymou::find($id);
        if($data)
        {
            return view('complaint_anonymou.details',['data' => $data]);
        }else{
            return redirect()->back();
        }
    }

    public function detailsIdentification(Request $request, $id)
    {
        $data = Denunciation_with_identification::find($id);
        if($data){
            return view('denunciationIdentification.details',['data' => $data]);
        }else{
            return redirect()->back();
        }
    }
}

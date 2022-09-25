<?php

namespace App\Http\Controllers;
use App\Models\Denunciation_anonymou;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    //exibe os detalhes de cada denuncia
    public function details(Request $request, $id)
    {
        $data = Denunciation_anonymou::find($id);
        if($data){
            return view('denunciation.details',['data' => $data]);
        }else{
            return redirect()->back();
        }
    }
}

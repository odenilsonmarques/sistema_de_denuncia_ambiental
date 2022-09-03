<?php

namespace App\Http\Controllers;
use App\Models\DenunciationAnonymou;
use App\Http\Requests\StoreDenunciationAnonymousFromRequest;
use Illuminate\Http\Request;

class DenunciationController extends Controller
{
    //funcao para chamar a pagina onde o usuario vai selecionar a opção do tipo de denuncia
    public function choice()
    {
        return view('denunciation.choicePage');
    }
    //funcao para chamar a pagina de cadastro de denuncia anonima
    public function create()
    {
        return view('denunciation.addDenunciationAnonymous');
    }
    public function createAction(StoreDenunciationAnonymousFromRequest $request)
    {
        // dd($request->annex_one);
        
        $data = $request->all();
        if($request->annex_one)
        {
            $data['annex_one'] = $request->annex_one->store('/img');
        }
        if($request->annex_two)
        {
            $data['annex_two'] = $request->annex_two->store('/img');
        }
        if($request->annex_three)
        {
            $data['annex_three'] = $request->annex_three->store('/img');
        }
        DenunciationAnonymou::create($data);

        return redirect()->route('typeDenunciation.choice');

    }
}

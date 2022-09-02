<?php

namespace App\Http\Controllers;

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
    public function createAction(Request $request)
    {
        dd($request->all());
    }
}

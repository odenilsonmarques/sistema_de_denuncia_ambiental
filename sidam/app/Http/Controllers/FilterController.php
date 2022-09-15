<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\DenunciationAnonymou;

class FilterController extends Controller
{
    private $totalPage = 5;
    //
    public function filter(Request $request, DenunciationAnonymou $denunciationAnonymou)
    {
        $dataForm = $request->except('_token');//não exibindo o token sa requisição
        $denunciationAnonymous = $denunciationAnonymou->search($dataForm, $this->totalPage);
        return view('denunciation.list', compact('denunciationAnonymous','dataForm'));
    }
}

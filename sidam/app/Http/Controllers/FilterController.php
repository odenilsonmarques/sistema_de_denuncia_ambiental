<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Denunciation_anonymou;
use App\Models\Denunciation_with_identification;

class FilterController extends Controller
{
    private $totalPage = 5;

    //
    public function filter(Request $request, Denunciation_anonymou $denunciationAnonymou)
    {
        $dataForm = $request->except('_token');//não exibindo o token sa requisição
        $denunciationAnonymous = $denunciationAnonymou->search($dataForm, $this->totalPage);
        return view('denunciation.list', compact('denunciationAnonymous','dataForm'));
    }

    //criar meto de filtrage_denunciation_identification 
    public function filterIdentification(Request $request, Denunciation_with_identification $denunciationIdentification)
    {
        $dataForm = $request->except('_token');//não exibindo o token sa requisição
        $denunciationIdentifications = $denunciationIdentification->search($dataForm, $this->totalPage);
        return view('denunciationIdentification.list', compact('denunciationIdentifications','dataForm'));
    }

    public function filterDenunciation(Request $request, Denunciation_with_identification $denunciationIdentificationUser){

        $dataForm = $request->except('_token');//não exibindo o token sa requisição
        $denunciations = $denunciationIdentificationUser->searchByUser($dataForm, $this->totalPage);
        return view('dashboard.listDenunciationUser', compact('denunciations','dataForm'));
    }
}

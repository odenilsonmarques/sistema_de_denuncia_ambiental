<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Denunciation_anonymou;
use App\Models\Denunciation_with_identification;

class PdfController extends Controller
{
    // this method print all complaint anonymous
    public function listPdfAnonynous()
    {
        $listDenunciations = Denunciation_anonymou::all();
        return \PDF::loadView('pdf.listPdfComplaitsAnonymous', compact('listDenunciations'))
        // Se quiser que fique no formato a4 retrato: ->setPaper('a4', 'landscape')
        ->stream('denuncias.pdf');
    }

    // this method print all complaint with identification
    public function  listPdfIdentifications()
    {
        $listDenunciationIdentifications = Denunciation_with_identification::all();
        return \PDF::loadView('pdf.listPdfComplaitsIdentifications', compact('listDenunciationIdentifications'))
        ->stream('denuncias.pdf');
    }

    // this metod print all complaint of user logged
    public function list(Request $request, $id){
        $listPdfByComplaits = Denunciation_with_identification::find($id);
        if($listPdfByComplaits){
            return \PDF::loadView('pdf.list', compact('listPdfByComplaits'))
            ->download('denuncia.pdf');
        }else{
            return redirect()->back();
        }
    }
}

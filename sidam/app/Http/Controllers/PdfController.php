<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Denunciation_anonymou;
use App\Models\Denunciation_with_identification;

class PdfController extends Controller
{
    public function list()
    {
        $listDenunciations = Denunciation_anonymou::all();
        return \PDF::loadView('pdf.listPdf', compact('listDenunciations'))
        // Se quiser que fique no formato a4 retrato: ->setPaper('a4', 'landscape')
        ->stream('denuncias.pdf');
    }

    public function  listPdfIdentification()
    {
        $listDenunciationIdentifications = Denunciation_with_identification::all();
        return \PDF::loadView('pdf.listPdfIdentification', compact('listDenunciationIdentifications'))
        ->stream('denuncias.pdf');
    }
}
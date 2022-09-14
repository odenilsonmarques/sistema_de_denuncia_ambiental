<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\DenunciationAnonymou;

class PdfController extends Controller
{
    public function list()
    {
        $listDenunciations = DenunciationAnonymou::all();
        return \PDF::loadView('pdf.listPdf', compact('listDenunciations'))
        // Se quiser que fique no formato a4 retrato: ->setPaper('a4', 'landscape')
        ->stream('denuncias.pdf');
    }
}

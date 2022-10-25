<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ChoiceController extends Controller
{
    //exibe página onde o usuário escolhe o tipo de denúncia
    public function choice()
    {
        return view('typeComplaint.choicePage');
    }
}

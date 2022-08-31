<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //funcao para chamar a pagina inicial
    public function home()
    {
        return view('welcome');
    }

}

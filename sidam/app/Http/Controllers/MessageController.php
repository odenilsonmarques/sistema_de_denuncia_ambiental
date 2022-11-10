<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    //Exibe mensagem apos o cadastro da denúncia
    public function msg()
    {
        return view('complaint_anonymou.msg');
    }

}

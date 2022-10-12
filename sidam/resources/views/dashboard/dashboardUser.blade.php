@extends('layouts.template')
@section('title','Inicio')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-5">
                <h1>Bem - vindo !</h1>
                <h3>Olá, {{ Auth::user()->name }}</h3>
            </div>

            <a href="{{route('denunciation.identification.add')}}">realizar denuncia</a>

        </div>
    </div>
@endsection
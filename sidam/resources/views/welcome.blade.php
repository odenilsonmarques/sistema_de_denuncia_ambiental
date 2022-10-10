@extends('layouts.template')
@section('title','Inicio')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 inforHome">
                <img src="{{asset('assets/img/brazao1.png')}}">
                <h1>PREFEITURA MUNICIPAL DE SÃO JOSÉ DE RIBAMAR</h1>
                <h2>SECRETARIA MUNICIPAL DO AMBIENTE - SEMAM</h2><hr>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-6 text-center mt-5" style="border:1px solid red">
                <a href="{{route('typeDenunciation.choice')}}">Denunciar</a>
                
            </div>
            <div class="col-sm-6 text-center mt-5"  style="border:1px solid red">
                Acompanhar Denuncia
            </div>
        </div>
    </div>
@endsection
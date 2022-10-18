@extends('layouts.template')
@section('title','Inicio')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-3 mt-5">
                <h1>Bem - vindo !</h1>
                <h3>Olá, {{ Auth::user()->name }}</h3>
                <button type="button" class="btn btn-primary mt-4"><a href="{{route('denunciation.identification.add')}}">Realizar denúncia</a></button>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 mt-5">
                <div class="card-body text-center">
                    <p class="card-title ">Total de Denuncias</p>
                    <h5>{{$allsDenunciationUser}}</h5>
                </div>
            </div>
            <div class="col-lg-3 mt-5">
                <div class="card-body text-center">
                    <p class="card-title ">Denuncias em Análise</p>
                    <h5>{{$allsDenunciationInAnalysis}}</h5>
                </div>
            </div>
            <div class="col-lg-3 mt-5">
                <div class="card-body text-center">
                    <p class="card-title ">Denuncias Deferidas</p>
                    <h5>{{$allsDenunciationDeferred}}</h5>
                </div>
            </div>
            <div class="col-lg-3 mt-5">
                <div class="card-body text-center">
                    <p class="card-title ">Denuncias Indeferidas</p>
                    <h5>{{$allsDenunciationRejected}}</h5>
                </div>
            </div>
        </div>
    </div>    
@endsection
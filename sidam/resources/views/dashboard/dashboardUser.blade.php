@extends('layouts.template')
@section('title','Inicio')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-3 mt-5">
                <h1>Bem - vindo !</h1>
                <h3>Olá, {{ Auth::user()->name }}</h3>
                <button type="button" class="btn btn-primary mt-4"><a href="{{route('complaint.identification.add')}}">Realizar Denúncia</a></button>

                

            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-3">
                <div class="card-body text-center">
                    <p class="card-title ">Total de Denuncias</p>
                    <h5>{{$allUserComplaints}}</h5>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card-body text-center">
                    <p class="card-title ">Aguardando ...</p>
                    <h5>{{$allComplaintsReceived}}</h5>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="card-body text-center">
                    <p class="card-title "> Em Análise</p>
                    <h5>{{$allComplaintsInAnalysis}}</h5>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card-body text-center">
                    <p class="card-title ">Deferidas</p>
                    <h5>{{$allComplaintsAccepted}}</h5>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card-body text-center">
                    <p class="card-title ">Indeferidas</p>
                    <h5>{{$allComplaintsDismissed}}</h5>
                </div>
            </div>
        </div>
    </div>    
@endsection
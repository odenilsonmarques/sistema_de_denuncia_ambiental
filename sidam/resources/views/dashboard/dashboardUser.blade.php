@extends('layouts.template')
@section('title','Inicio')

@section('content')
    @if(Auth::user()->is_admin != 1)
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
    @endif
    @if(Auth::user()->is_admin == 1)
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="mt-5 text-center">Painel Adminstrativo</h3>
                <div class="col-lg-3 mt-5">
                    <h4>Bem - vindo!</h4>
                    <p>Olá, {{ Auth::user()->name }}</p>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-6">
                <div class="card text-center">
                    <h5 class="card-header bg-primary text-white">Denúncias com Identificação</h5>
                    <div class="card-body">
                    <h5 class="card-title">Total</h5>
                    <p class="card-text">{{$allComplaintsWithIdentifications}}</p>
                    <a href="{{route('complaint.identification.list')}}" class="btn btn-primary">Ir para denúncias</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card text-center">
                    <h5 class="card-header bg-dark text-white">Denúncias Anônimas</h5>
                    <div class="card-body">
                    <h5 class="card-title">Total</h5>
                    <p class="card-text">{{$allComplaintsAnonymos}}</p>
                    <a href="{{route('complaint.anonymou.list')}}" class="btn bg-dark text-white">Ir para denúncias</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
@endsection
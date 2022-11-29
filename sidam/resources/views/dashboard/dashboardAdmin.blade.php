@extends('layouts.template')
@section('title','Inicio')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-3 mt-5">
                <h1>Bem - vindo !</h1>
                <h3>Olá, {{ Auth::user()->name }}</h3>
                {{-- <button type="button" class="btn btn-primary mt-4"><a href="{{route('complaint.identification.add')}}">Realizar Denúncia</a></button> --}}
            </div>
        </div>
    </div>    
@endsection
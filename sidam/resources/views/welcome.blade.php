@extends('layouts.template')
@section('title','Inicio')

@section('content')
    <div class="container">
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
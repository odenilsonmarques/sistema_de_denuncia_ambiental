@extends('layouts.template')
@section('title','Inicio')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 inforHome">
                <img src="{{asset('assets/img/brazao1.png')}}">
                <h1>Prefeitura Municipal de São José de Ribamar</h1>
                <h2>Secretaria Municipal do Meio Ambiente</h2>
            </div>
        </div>
        <div class="row selectionUser mt-5">
            <div class="col-sm-12 text-center">
                <button type="button" class="btn btn-success btn-lg"><a href="{{route('type.complaint.choice')}}">Realizar Denúncia</a></button>          
                <button type="button" class="btn btn-primary btn-lg"><a href="{{route('login')}}">Acompanhar Denúncia</a></button>
            </div>
        </div>
    </div>
@endsection
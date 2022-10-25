@extends('layouts.template')
@section('title','Inicio')

@section('content')
    <div class="container">
        <div class="row">
            <div class="alert alert-success text-center mt-5" role="alert">
                <strong>Parabéns<br></strong> Denúncia realizada com sucesso.<br>
                <div class="mt-5 mb-5">
                    <a class="btn btn-primary" href="{{route('complaint.anonymou.add')}}" role="button">Fazer nova denúncia</a>
                    <a class="btn btn-danger" href="{{route('homePage')}}" role="button">Ir para a página inicial</a>
                </div>
            </div>
        </div>
    </div>
@endsection
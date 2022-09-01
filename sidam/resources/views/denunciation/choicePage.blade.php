@extends('layouts.template')
@section('title','tipo de denuncia')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <h1 class="text-center mt-5">Como deseja denunciar ?</h1>
            <div class="col-sm-4 text-center mt-5 ">
                <h2>Acessando sua conta</h2>
                <h6>caso ja tenha uma conta, clique aqui</h6>
            </div>
            <div class="col-sm-4 text-center mt-5 ">
                <h2>Criar conta</h2>
                <h6>ainda não possui uma conta, cadastre-se</h6>
            </div>
            <div class="col-sm-4 text-center mt-5">
                <h2>Denuncia Anônima</h2>
                <h6>você pode optar pela denúncia Anônima</h6>
            </div>
        </div>
    </div>
@endsection
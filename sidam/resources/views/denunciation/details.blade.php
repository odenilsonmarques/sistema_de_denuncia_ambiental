@extends('layouts.template')
@section('title','Inicio')

@section('content')
    <div class="container">
        <div class="row">
            <h1 class="mt-5 text-center">Detalhes da denúncia</h1>
        </div>
        <div class="row mt-5">
            <div class="col-sm-3">
                <ul class="">
                    <li class="list-group-item active" aria-current="true">Categoria</li>
                    <li  class="list-group-item">{{$data->category}}</li>
                </ul>
            </div>
            <div class="col-sm-3">
                <ul>
                    <li class="list-group-item active" aria-current="true">Local da ocorrência</li>
                    <li  class="list-group-item">Bairro: {{$data->distric}}</li>
                    <li  class="list-group-item">Rua: {{$data->road}}</li>
                    <li  class="list-group-item">Nº: {{$data->number}}</li>
                    <li  class="list-group-item">Referência: {{$data->reference_point}}</li>
                </ul>
            </div>
            <div class="col-sm-6">
                <ul>
                    <li class="list-group-item active" aria-current="true">Dados da denuncia</li>
                    @if($data->violator)
                        <li class="list-group-item">Infrator: {{$data->violator}}</li>
                    @else
                        <li  class="list-group-item">Infrator: Não identificado</li>
                    @endif
                    <p>Anexos<p>
                    <img src="{{asset('storage/'.$data->annex_one)}}" alt="anexo um" width="120" height="90" >
                    <img src="{{asset('storage/'.$data->annex_two)}}" alt="anexo dois" width="120" height="90" >
                    <img src="{{asset('storage/'.$data->annex_three)}}" alt="anexo tres" width="120" height="90" >
                </ul>
            </div>
            {{-- <div class="col-sm-3 text-center">
                <h5>Evidências</h5>
            </div> --}}
        </div>
    </div>
@endsection
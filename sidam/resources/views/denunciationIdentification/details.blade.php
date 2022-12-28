@extends('layouts.template')
@section('title','Inicio')
@section('content')
@if(Auth::user()->is_admin == 1)
    <div class="container">
        <div class="row">
            <h1 class="mt-5 text-center">Detalhes da denúncia</h1>
            @if(session('messageEd'))
                <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                    <strong>{{session('messageEd')}}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
        <div class="row mt-5">
            <div class="col-sm-3">
                <ul class="">
                    <li class="list-group-item list-group-item-dark" aria-current="true">Categoria</li>
                    <li  class="list-group-item">{{$data->category}}</li>
                    <li class="list-group-item list-group-item-dark" aria-current="true">Local da ocorrência</li>
                    <li  class="list-group-item"><strong>Bairro:</strong> {{$data->distric}}</li>
                    <li  class="list-group-item"><strong>Rua:</strong> {{$data->road}}</li>
                    <li  class="list-group-item"><strong>Nº:</strong> {{$data->number}}</li>
                    <li  class="list-group-item"><strong>Referência:</strong> {{$data->reference_point}}</li>
                </ul>
            </div>
            
            <div class="col-sm-4">
                <ul>
                    <li class="list-group-item list-group-item-dark" aria-current="true">Dados da denuncia</li>
                    @if($data->violator)
                        <li class="list-group-item"><strong>Provável Infrator: </strong>{{$data->violator}}</li>
                    @else
                        <li  class="list-group-item"><strong>Provável Infrator: </strong> Não identificado</li>
                    @endif
                    <li class="list-group-item list-group-item-dark" aria-current="true">Descrição</li>
                    <li class="list-group-item">{{$data->description}}</li>
                    <li class="list-group-item list-group-item-dark" aria-current="true">Data</li>
                    <li class="list-group-item">{{date('d/m/Y',strtotime($data->created_at))}}</li>
                </ul>
            </div>

            <div class="col-sm-5">
                <ul>
                    <li class="list-group-item list-group-item-dark" aria-current="true">Evidências</li>
                    <div class="mt-2">
                        <img src="{{asset('storage/'.$data->annex_one)}}" class="img-thumbnail" alt="anexo um" width="136" height="100" >
                        @if($data->annex_two and $data->annex_three)
                            <img src="{{asset('storage/'.$data->annex_two)}}" class="img-thumbnail" alt="anexo dois" width="136" height="100" >
                            <img src="{{asset('storage/'.$data->annex_three)}}" class="img-thumbnail" alt="anexo tres" width="136" height="100" >
                        @else
                            {{-- <img class="img-thumbnail" width="136" height="100">
                            <img class="img-thumbnail"  width="136" height="100"> --}}
                        @endif
                    </div>
                    {{-- <li class="list-group-item list-group-item-dark mt-3" aria-current="true">Status</li>
                    <select name="status" id="" class="form-select">
                        <option value="">--- Selecione ---</option>
                        <option value="Deferir">Deferir</option>
                        <option value="Indeferir">Indeferir</option>
                     </select> --}}
                     
                     <li class="list-group-item list-group-item-dark mt-4" >Status: {{$data->received}}</li>
                    
                     @if($data->description_status)
                        <li class="list-group-item list-group-item-dark" aria-current="true">Motivo do status</li>
                        <li class="list-group-item">{{$data->description_status}}</li>

                        <li class="list-group-item list-group-item-dark" aria-current="true">Atualizado em</li>
                        <li class="list-group-item">{{date('d/m/Y',strtotime($data->updated_at))}}</li>
                     @else
                     @endif
                        <button class="btn btn-danger btn-sm mt-3"><a href="{{route('complaint.identification.list')}}">CANCELAR</a></button>
                        <a href="{{route('complaint.identification.edit',$data->id)}}" class="btn btn-primary btn-sm text-right mt-3">ALTERAR</a>
                </ul>
            </div>
        </div>
    </div>
@else
    <div class="text-center">
        <img src="{{asset('assets/img/404.svg')}}" class="rounde mt-5" alt="..." width="250" height="150">
    </div>
@endif
@endsection
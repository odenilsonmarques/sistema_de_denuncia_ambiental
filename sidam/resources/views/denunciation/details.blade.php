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

                    <li class="list-group-item list-group-item-dark" aria-current="true">Status</li>
                    <select name="status" id="" class="form-select">
                        <option value="">--- Selecione ---</option>
                        <option value="Deferir">Deferir</option>
                        <option value="Indeferir">Indeferir</option>
                     </select>
                </ul>

                
            </div>
        </div>
    </div>
@endsection
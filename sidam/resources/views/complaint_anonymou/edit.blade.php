@extends('layouts.template')
@section('title','alteracao de status')
@section('content')
@if(Auth::user()->is_admin == 1)
    <div class="container">
        <div class="row">
            <div class="col-sm-3 mt-5 ">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Atenção<br></strong> Todos os campos com (*) são obrigatórios.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li class="justify-content-between align-items-left">
                                    {{$error}}<br/>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            
            <div class="col-sm-9 mt-5 ">
                <div class="card">
                    <form action="{{route('complaint.anonymou.editAction', $data->id)}}" method="POST">
                        @csrf<!--csrf toquem de segurnça padrao do laravel para envio de requisao-->
                        @method('PUT')<!--essa directiva é usada por causa do verdo put declarado na rota-->
                        <div class="card-header">Status da denuncia</div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="received">Status</label>
                                    <!--para carregar esse campo preenchido, verifica-se se existe um status para edicao, se existir e for igual ao tipo de status selecionado é carregado o campo preenchido com valor escolhido-->
                                    <select class="form-select" name="received" id="received" autofocus required>
                                        <option value="">----Selecione----</option>
                                        @foreach($typeStatus as $typeStatus)
                                            <option value="{{$typeStatus}}" @if( isset($data) && $data -> received == $typeStatus) selected @endif>{{$typeStatus}}</option>
                                        @endforeach
                                    </select>


                                    {{-- <select class="form-select" name="received" id="received" autofocus required>
                                        <option value="">--- Selecione ---</option>
                                        <option value="Em Análise">Em Análise</option>
                                        <option value="Deferida">Deferida</option>
                                        <option value="Indeferida">Indeferida</option>
                                    </select> --}}
                                </div>
                                <div class="col-sm-12 mt-3">
                                    <label for="received">Descrição do novo status</label>
                                    <textarea class="form-control" name="description_status" required>{{$data->description_status}}</textarea>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-sm-6 mt-4">
                                    <button class="btn btn-danger"><a href="{{route('complaint.anonymou.list')}}">CANCELAR </a></button>
                                    <button type="submit" class="btn btn-success">SALVAR</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@else
    <div class="text-center">
        <img src="{{asset('assets/img/404.svg')}}" class="rounde mt-5" alt="..." width="250" height="150">
    </div>
@endif
@endsection
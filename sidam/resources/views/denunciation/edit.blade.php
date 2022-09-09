@extends('layouts.template')
@section('title','alteracao de status')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-3 mt-5 ">
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
                <form action="{{route('denunciation.editAction', $data->id)}}" method="POST">
                    @csrf<!--csrf toquem de segurnça padrao do laravel para envio de requisao-->
                    @method('PUT')<!--essa directiva é usada por causa do verdo put declarado na rota-->
                    <div class="card-header">Status da denuncia</div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="received">Status</label>
                                <select class="form-select" name="received" id="received" autofocus required>
                                    <option value="">--- Selecione ---</option>
                                    <option value="Deferida">Deferida</option>
                                    <option value="Indeferida">Indeferida</option>
                                </select>
                            </div>
                            <div class="col-sm-12 mt-3">
                                <label for="received">Descrição do novo status</label>
                                <textarea class="form-control" name="description_status" aria-label="With textarea"></textarea>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-6 mt-4">
                                <button class="btn btn-danger"><a href="{{route('typeDenunciation.choice')}}">CANCELAR </a></button>
                                <button type="submit" class="btn btn-success">SALVAR</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
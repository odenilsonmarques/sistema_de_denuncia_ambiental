@extends('layouts.template')
@section('title','cadastro anonimo')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-3 mt-5 ">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Atenção<br></strong> Todos os campos com (*) são obrigatórios.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            {{-- <img src="{{asset('assets/img/megaphone-fill.svg')}}" alt="megaphone"> --}}
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
                <form action="{{route('denunciation.createAction')}}" method="POST" enctype="multipart/form-data">
                    @csrf<!--csrf toquem de segurnça padrao do laravel para envio de requisao-->
                    <div class="card-header">CATEGORIA DA DENUNCIA</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="category" class="required">Categoria</label>
                                <select class="form-select" name="category" id="category" autofocus required>
                                    <option value="">--- Selecione ---</option>
                                    <option value="Agua" @if(old('category') == "Agua") {{'selected'}} @endif>Agua</option>
                                    <option value="Ar" @if(old('category') == "Ar") {{'selected'}} @endif >Ar</option>
                                    <option value="Fauna" @if(old('category') == "Fauna") {{'selected'}} @endif>Fauna</option>
                                    <option value="Fogo" @if(old('category') == "Fogo") {{'selected'}} @endif>Fogo</option>
                                    <option value="Ruido" @if(old('category') == "Ruido") {{'selected'}} @endif>Ruído</option>
                                    <option value="Solo" @if(old('category') == "Solo") {{'selected'}} @endif>Solo</option>
                                    <option value="Vegetacao" @if(old('category') == "Vegetacao") {{'selected'}} @endif>Vegetacao</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-header">LOCAL DA OCORRÊNCIA</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="distric" class="required">Bairro</label>
                                <input type="text" name="distric" value="{{old('distric')}}" class="form-control" min="2" maxlength="30" required>
                            </div>
                            <div class="col-sm-8">
                                <label for="road" class="required">Rua</label>
                                <input type="text" name="road" value="{{old('road')}}" class="form-control"  maxlength="30" required>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-4">
                                <label for="number">Nº</label>
                                <input type="text" name="number" class="form-control"  maxlength="30" placeholder="">
                            </div>
                            <div class="col-sm-8">
                                <label for="reference_point">Ponto de Referência</label>
                                <input type="text" name="reference_point" class="form-control"  maxlength="30" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="card-header">DADOS DA DENÚNCIA</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="violator">Provável autor do dano</label>
                                <input type="text" name="violator" class="form-control"  maxlength="30" placeholder="">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-4">
                                <label for="annex_one" class="required">Anexo um</label>
                                <input type="file" name="annex_one" class="form-control"  maxlength="30" required>
                            </div>
                            <div class="col-sm-4">
                                <label for="annex_tow">Anexo dois</label>
                                <input type="file" name="annex_two" class="form-control"  maxlength="30" placeholder="">
                            </div>
                            <div class="col-sm-4">
                                <label for="annex_three">Anexo tres</label>
                                <input type="file" name="annex_three" class="form-control"  maxlength="30" placeholder="">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-12">
                                <label for="description" class="required">Descrição</label>
                                <textarea class="form-control" value="{{old('description')}}" name="description" id="" rows="2" required>{{old('description')}}</textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 mt-4">
                                <button class="btn btn-danger"><a href="{{route('typeDenunciation.choice')}}">CANCELAR </a></button>
                                <button type="submit" class="btn btn-success">CADASTRAR</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.template')
@section('title','cadastro anonimo')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-4 text-center mt-5 ">
            teste
        </div>
        <div class="col-sm-8 mt-5 ">
            <div class="card">
                <form action="{{route('denunciation.createAction')}}" method="POST">
                    @csrf<!--csrf toquem de segurnça padrao do laravel para envio de requisao-->
                    <div class="card-header">CATEGORIA</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="category">Selecione</label>
                                <select name="category" id="category" class="form-select" autofocus>
                                    <option value="">----Selecione----</option>
                                    <option value="Agua">Agua </option>
                                    <option value="Ar">Ar</option>
                                    <option value="Fauna">Fauna</option>
                                    <option value="Fogo">Fogo</option>
                                    <option value="Ruído">Ruído</option>
                                    <option value="Solo">Solo</option>
                                    <option value="Vegetacao">Vegetacao</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-header">LOCAL DA OCORRÊNCIA</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="distric">Bairro</label>
                                <input type="text" name="distric" class="form-control"  maxlength="30" placeholder="">
                            </div>
                            <div class="col-sm-8">
                                <label for="road">Rua</label>
                                <input type="text" name="road" class="form-control"  maxlength="30" placeholder="">
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
                                <input type="text" name="distric" class="form-control"  maxlength="30" placeholder="">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-4">
                                <label for="annex_one">Anexo um</label>
                                <input type="file" name="annex_one" class="form-control"  maxlength="30" placeholder="">
                            </div>
                            <div class="col-sm-4">
                                <label for="annex_one">Anexo dois</label>
                                <input type="file" name="annex_two" class="form-control"  maxlength="30" placeholder="">
                            </div>
                            <div class="col-sm-4">
                                <label for="annex_one">Anexo tres</label>
                                <input type="file" name="annex_three" class="form-control"  maxlength="30" placeholder="">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-12">
                                <label for="description">Descrição</label>
                                <textarea class="form-control" name="description" id="" rows="2"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 mt-4">
                                <button class="btn btn-danger"><a href="">CANCELAR </a></button>
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
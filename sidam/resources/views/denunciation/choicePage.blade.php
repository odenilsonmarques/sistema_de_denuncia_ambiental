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
                <a href="{{route('denunciatoin.anonymous')}}" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <h2>Denuncia Anônima</h2>
                    <h6>você pode optar pela denúncia Anônima</h6>
                </a>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Atenção</h5>
                        </div>
                        <div class="modal-body">
                            Se você optar pela denúncia Anônima, não poderá acompanhar o andamento da denúncia por esse canal.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                            <button type="button" class="btn btn-primary"><a href="{{route('denunciatoin.anonymous')}}">Continuar</a> </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
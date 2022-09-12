@extends('layouts.template')
@section('title','Denuncias anônimas')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center mt-5">
                
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Categoria</th>
                                <th>Bairro</th>
                                <th>Rua</th>
                                <th>Foto</th>
                                <th>Detalhes</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($listAnonymous as $listAnonymou)
                                <tr>
                                    <td>{{$listAnonymou->id}}</td>
                                    <td>{{$listAnonymou->category}}</td>
                                    <td>{{$listAnonymou->road}}</td>
                                    <td>{{$listAnonymou->distric}}</td>
                                    <td><img src="{{asset('storage/'.$listAnonymou->annex_one)}}" alt="produto" width="60" height="60" class="rounded-circle"></td>
                                    <td>
                                        <a href="{{route('denunciation.details', $listAnonymou->id)}}" class="btn btn-primary btn-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                   
                </div>
            </div> 
        </div>
    </div>
@endsection